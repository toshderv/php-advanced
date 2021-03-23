<?php


namespace App\Controllers;


use App\Services\Routing\Router;
use Core\Application;
use Core\Services\Database\Db;
use Core\Services\Database\Query;
use Logging\Logger;

/**
 * Class IndexController
 * Пример контроллера
 *
 * @package App\Controllers
 */
class IndexController
{
    public function index()
    {
        $logger = Application::getInstance()->get(Logger::class);
        $logger->debug('Start index method');

        $db = Application::getInstance()->get(Db::class);

        $sql = new Query('query');
        $sql->select(['id', 'title', 'created_at']);
        $sql->where(['id', '>=', 5]);

        $result = $db->query($sql);

        var_dump($result);
    }

    public function user()
    {
        echo 'User method';
    }
}