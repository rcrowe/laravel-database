<?php

namespace rcrowe\Database;

use Illuminate\Database\DatabaseServiceProvider as ServiceProvider;
use Illuminate\Foundation\Application;
use rcrowe\Database\MySqlConnection;
use rcrowe\Database\PostgresConnection;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        // Register new MySql connection class
        $this->app->singleton('db.connection.mysql', function(Application $app, array $paramaters) {
            return new MySqlConnection($paramaters[0], $paramaters[1], $paramaters[2], $paramaters[3]);
        });

        // Register new PostgreSql connection
        $this->app->singleton('db.connection.pgsql', function(Application $app, array $paramaters) {
            return new PostgresConnection($paramaters[0], $paramaters[1], $paramaters[2], $paramaters[3]);
        });
    }
}
