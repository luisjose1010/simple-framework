<?php

namespace Framework;

use PDO;
use PDOException;

class Model
{
    public $table = null;
    protected $dbConnection;
    
    public function __construct()
    {
        $db = $_ENV["DB_CONNECTION"];
        $dbHost = $_ENV["DB_HOST"];
        $dbPort = $_ENV["DB_PORT"];
        $dbDatabase = $_ENV["DB_DATABASE"];
        $dbUsername = $_ENV["DB_USERNAME"];
        $dbPassword = $_ENV["DB_PASSWORD"];

        try{
            $this->dbConnection = new PDO("$db:host=$dbHost;port=$dbPort;dbname=$dbDatabase", $dbUsername, $dbPassword);
        } catch (PDOException $e) {

            if($_ENV["APP_DEBUG"]){
                print "¡Error!: " . $e->getMessage() . "<br/>";
            } else{
                print "¡Error!";
            }
            exit();
        }
    }

    public function __destruct()
    {
        $this->dbConnection = null;
    }
}