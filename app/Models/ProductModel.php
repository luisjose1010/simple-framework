<?php

namespace App\Models;

use Framework\Model;

class ProductModel extends Model
{
    public function get(int $id)
    {
        $sql = "SELECT * FROM $this->table WHERE id=:id";
        $statement = $this->dbConnection->prepare($sql);
        $statement->execute(array(':id' => $id));
        $results = $statement->fetchAll();
        $result = array();

        foreach($results as $item){
            $result[] = $item;
        }

        return $result[0];
    }

    public function getAll()
    {
        $sql = "SELECT * FROM $this->table";
        $statement = $this->dbConnection->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll();
        $result = array();

        foreach($results as $item){
            $result[] = $item;
        }

        return $result;
    }

    public function __construct()
    {
        parent::__construct();
        $this->table = 'producto';
    }
}
