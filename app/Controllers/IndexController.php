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
    /**
     * Index method
     *
     * Default method of IndexController
     *
     * @throws \Exception
     */
    public function index(): void
    {
        /** @var Logger $logger */
        $logger = Application::getInstance()->get(Logger::class);
        $logger->debug('Start index method');


//        /** @var Db $db */
//        $db = Application::getInstance()->get(Db::class);
//        $db->query();

        echo 'Run index method index controller';
    }


    /**
     * User method
     */
    public function user(): void
    {
        echo 'User method';
    }
}