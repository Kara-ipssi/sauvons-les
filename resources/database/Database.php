<?php

namespace Resources\database;
use Exception;

class Database
{

    private string $host;
    private string $name;
    private string $user;
    private string $password;
    private int $port;
    private $database;

    public function __construct()
    {
        $this->setHost("127.0.0.1");
        $this->setName("sauvons-les");
        $this->setUser("root");
        $this->setPassword("");
        $this->setPort(3306);

        $this->connect();
    }

    public function connect()
    {
        try{
            $this->database = new \PDO("mysql:host={$this->host}:{$this->port};dbname={$this->name}","{$this->user}", "{$this->password}");
            $this->database->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->database->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
        }
        catch(Exception $e){
            $e->getMessage();
        }
    }

    public function __destruct()
    {
        $this->database = null;
    }

    /**
     * Get the value of host
     */ 
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set the value of host
     *
     * @return  self
     */ 
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of port
     */ 
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set the value of port
     *
     * @return  self
     */ 
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

        /**
     * Get the value of database
     */ 
    public function getDatabase()
    {
        return $this->database;
    }

}