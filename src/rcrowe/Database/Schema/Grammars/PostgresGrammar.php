<?php

namespace rcrowe\Database\Schema\Grammars;

use Illuminate\Database\Schema\Grammars\PostgresGrammar as Grammer;
use Illuminate\Support\Fluent;

class PostgresGrammar extends Grammer
{
    /**
     * Create the column definition for a character type.
     *
     * @param \Illuminate\Support\Fluent $column
     *
     * @return string
     */
    protected function typeCharacter(Fluent $column)
    {
        return "character({$column->length})";
    }
}
