<?php

namespace rcrowe\Database;

use Illuminate\Database\MySqlConnection as Connection;
use rcrowe\Database\Schema\MySqlBuilder;
use rcrowe\Database\Schema\Grammars\MySqlGrammar;

class MySqlConnection extends Connection
{
    /**
     * Get a schema builder instance for the connection.
     *
     * @return \Illuminate\Database\Schema\Builder
     */
    public function getSchemaBuilder()
    {
        if (is_null($this->schemaGrammar)) { $this->useDefaultSchemaGrammar(); }

        return new MySqlBuilder($this);
    }

    /**
     * Get the default schema grammar instance.
     *
     * @return \Illuminate\Database\Schema\Grammars\Grammar
     */
    protected function getDefaultSchemaGrammar()
    {
        return $this->withTablePrefix(new MySqlGrammar);
    }
}
