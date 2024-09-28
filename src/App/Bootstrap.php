<?php

namespace App;

use App\Controller\DefaultController;
use App\Lib\DbConn;
use App\Lib\Router;
use App\Model\Repository\BaseRepository;

class Bootstrap
{

    public static ?string $projectDir;

    public static function run($initDatabase = true, $initRoute = true): void
    {
        self::setupEnv();

        if ($initDatabase) {
            self::initDatabase();
        }

        if ($initRoute) {
            self::initRoute();
        }
    }

    private static function setupEnv(): void
    {
        self::$projectDir = dirname($_ENV['DOCUMENT_ROOT'] ?? realpath(__DIR__ .'/../'))  ."/";

        $dotenv = \Dotenv\Dotenv::createImmutable(self::$projectDir);
        $dotenv->load();
    }

    private static function initDatabase(): void
    {
        BaseRepository::$conn = DbConn::getInstance();
    }

    private static function initRoute(): void
    {
        Router::get('/', function () {
            (new DefaultController())->index();
        });

        Router::get('/questao-1', function () {
            (new DefaultController())->questao1();
        });

        Router::get('/questao-2', function () {
            (new DefaultController())->questao2();
        });
    }

}