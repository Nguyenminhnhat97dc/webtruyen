<?php
class Tap{
 
    // database connection and table name
    private $conn;
    private $table_name = "tap";
 
    // object properties
    public $id;
    public $tapphim;
    public $idphim;
    public $phim;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read all nursess
    function read(){
    
        // select all query
        $query = "SELECT
                    `id`, `tapphim`, `idphim`, `phim`
                FROM
                    " . $this->table_name . " 
                ORDER BY
                    id DESC";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

    // get single nurses data
    function read_single(){
    
        // select all query
        $query = "SELECT
                    `id`, `tapphim`, `idphim`, `phim`
                FROM
                    " . $this->table_name . " 
                WHERE
                    id= '".$this->id."'";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    // create nurses
    function create(){
        
        // query to insert record
        $query = "INSERT INTO  ". $this->table_name ." 
                  VALUES
                        ('','".$this->tapphim."', '".$this->idphim."', '".$this->phim."')";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // execute query
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }

        return false;
    }

    // update nurses 
    function update(){
    
        // query to insert record
        $query = "UPDATE
                    " . $this->table_name . "
                SET
                    tapphim='".$this->tapphim."', idphim='".$this->idphim."', phim='".$this->phim."'
                WHERE
                    id='".$this->id."'";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    // delete nurses
    function delete(){
        
        // query to insert record
        $query = "DELETE FROM
                    " . $this->table_name . "
                WHERE
                    id= '".$this->id."'";
        
        // prepare query
        $stmt = $this->conn->prepare($query);
        
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    
}