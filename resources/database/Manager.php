<?php

namespace Resources\database;


class Manager
{
    protected \PDO $db;

    public function __construct ()
    {
        $db = new Database();
        $this->setDb($db->getDatabase());
    }

    private function setDb (\PDO $db)
    {
        $this->db = $db;
    }
}