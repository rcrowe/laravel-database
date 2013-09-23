<?php

namespace rcrowe\Database\Schema;

use Illuminate\Database\Schema\MySqlBuilder as Builder;
use rcrowe\Database\Schema\Blueprint;

class MySqlBuilder extends Builder
{
    /**
     * Create a new command set with a Closure.
     *
     * @param string  $table
     * @param Closure $callback
     *
     * @return \Illuminate\Database\Schema\Blueprint
     */
    protected function createBlueprint($table, Closure $callback = null)
    {
        return new Blueprint($table, $callback);
    }
}
