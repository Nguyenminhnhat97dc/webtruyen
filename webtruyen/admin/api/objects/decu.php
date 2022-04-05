<?php
class Decu{
 
    // database connection and table name
    private $conn;
    private $table_name = "btvdecu";
 
    // object properties
    public $IdTruyen;
    public $DiemBTVDeCu;
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read all decus
    function read(){
    
        // select all query
        $query = "SELECT
                   IdTruyen,DiemBTVDeCu
                    FROM
                    " . $this->table_name . " 
                ORDER BY
                    IdTruyen ASC";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

    // get single decu data
    function read_single(){
    
        // select all query
        $query = "SELECT
                    IdTruyen,DiemBTVDeCu
                FROM
                    " . $this->table_name . " 
                WHERE
                    IdTruyen= '".$this->IdTruyen."'";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    // create decu
    function create(){
        
        // query to insert record
        $query = "INSERT INTO  ". $this->table_name ." 
                        ( `id`, `idphim`)
                  VALUES
                        ('','".$this->idphim."')";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // execute query
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }

        return false;
    }

    // update decu 
    function update(){
    
        // query to insert record
        $query = "UPDATE
                    " . $this->table_name . "
                SET
                    IdTruyen='".$this->IdTruyen."',
                    DiemBTVDeCu='".$this->DiemBTVDeCu."'
                WHERE
                IdTruyen='".$this->IdTruyen."'";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    // delete decu
    function delete(){
        
        // query to insert record
        $query = "DELETE FROM
                    " . $this->table_name . "
                WHERE
                IdTruyen= '".$this->IdTruyen."'";
        
        // prepare query
        $stmt = $this->conn->prepare($query);
        
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    
}