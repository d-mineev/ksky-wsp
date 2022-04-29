<?php


namespace App\Modules;

use Illuminate\Support\ServiceProvider;

/** * Сервис провайдер для подключения модулей */
class ModulesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //получаем список модулей, которые надо подгрузить
        $modules = config("module.modules");

        if ($modules) {
            foreach ($modules as $module) {
                //Подключаем роуты для модуля
                if (file_exists(__DIR__ . '/' . $module . '/Routes/routes.php')) {
                    $this->loadRoutesFrom(__DIR__ . '/' . $module . '/Routes/routes.php');
                }
                //Загружаем View
                //view('Test::admin')
                if (is_dir(__DIR__ . '/' . $module . '/Views')) {
                    $this->loadViewsFrom(__DIR__ . '/' . $module . '/Views', $module);
                }

                //Подгружаем миграции
                if (is_dir(__DIR__ . '/' . $module . '/Migrations')) {
                    $this->loadMigrationsFrom(__DIR__ . '/' . $module . '/Migration');
                }
            }
        }
    }

    public function register()
    {

    }
}