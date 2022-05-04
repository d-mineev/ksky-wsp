<?php

namespace App\Facades;

use Illuminate\Support\Facades\DB;

class ReportDb extends DB
{
    /**
     * Handle dynamic, static calls to the object.
     *
     * @param  string  $method
     * @param  array  $args
     * @return mixed
     *
     * @throws \RuntimeException
     */
    public static function __callStatic($method, $args)
    {
        $instance = static::getFacadeRoot();

        if (! $instance) {
            throw new \RuntimeException('A facade root has not been set.');
        }

        return $instance->connection(REPORT_CONNECTION)->$method(...$args);
    }

}
