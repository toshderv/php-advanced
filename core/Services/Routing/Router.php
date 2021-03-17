<?php


namespace Core\Services\Routing;


use Core\Contracts\RouterInterface;

/**
 * Class Router
 * Базовая реализация роутера
 *
 * @package Core\Services\Routing
 */
class Router implements RouterInterface
{
    protected const PATH_CONTROLLERS = 'App\Controllers';

    /**
     * @var array массив сконфигурированных роутов
     */
    protected $routes = [];

    /**
     * Router constructor.
     * В конструкторе просто подключаем файл routers.php, если он есть
     * Но роуты можно добавлять и програмно - с помощью вызова метода getRoute()
     *
     * @see Router::addRoute()
     */
    public function __construct()
    {
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/../routes/routes.php')) {
            include $_SERVER['DOCUMENT_ROOT'] . '/../routes/routes.php';
        }
    }

    /**
     * @param string $action
     * @return array
     */
    private function parseControllerMethod(string $action): array
    {
        $arr = [];
        $segments = explode('@', $action);
        $arr['controller'] = self::PATH_CONTROLLERS . '\\' . $segments[0];
        $arr['action'] = $segments[1];

        return $arr;
    }

    /**
     * Метод добавляет роут
     *
     * @param string $method
     * @param string $path
     * @param callable|string $action
     */
    public function addRoute(string $method, string $path, callable|string $action)
    {
        $path = trim($path, '/');
        $this->routes[$method][$path] = $action;
    }

    /**
     * Метод определяет есть ли сконфигурированный роут для текущего запроса
     *
     * @return callable
     * @throws \Exception
     */
    public function route(): callable
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url(trim($_SERVER['REQUEST_URI'], '/'), PHP_URL_PATH);
        $paramString = parse_url(trim($_SERVER['REQUEST_URI'], '/'), PHP_URL_QUERY);
        $paramArr = explode('&', $paramString);
        $params = [];
        foreach ($paramArr as $value) {
            list($k, $v) = explode('=', $value);
            $params[$k] = $v;
        }

        $action = $this->routes[$method][$path] ?? null;

        if ($action && is_callable($action)) {
            return function () use ($method, $path) {
                return $this->routes[$method][$path]();
            };
        } elseif ($action && is_string($action) && $action !== '') {
            $methodOfController = $this->parseControllerMethod($action);
            $reflectionMethod = new \ReflectionMethod($methodOfController['controller'], $methodOfController['action']);
            $methodParams = $reflectionMethod->getParameters();
            $args = [];
            foreach ($methodParams as $methodParam) {
                $args[] = $params[$methodParam->name] ?? throw new \Exception('Can not required param: ' . $methodParam->name);
            }

            return function () use ($reflectionMethod, $methodOfController, $args) {
                $reflectionMethod->invokeArgs(new $methodOfController['controller'](), $args);
            };
        }

        throw new \Exception('Can not define route');
    }
}