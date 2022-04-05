<?php
class Theloai{
 
    // database connection and table name
    private $conn;
    private $table_name = "loaitruyen";
 
    // object properties
    public $id;
    public $name;
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read all xephangs
    function read(){
    
        // select all query
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . " 
                ORDER BY
                    IdLoaiTruyen DESC";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

    // get single xephang data
    function read_single(){
    
        // select all query
        $query = "SELECT
                   *
                FROM
                    " . $this->table_name . " 
                WHERE
                    IdLoaiTruyen= '".$this->id."'";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    // create xephang
    function create(){
        
        // query to insert record
        $query = "INSERT INTO  ". $this->table_name ." 
                  VALUES
                        ('','".$this->name."')";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // execute query
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }

        return false;
    }

    // update xephang 
    function update(){
    
        // query to insert record
        $query = "UPDATE
                    " . $this->table_name . "
                SET
                    TenLoai='".$this->name."'
                WHERE
                    IdLoaiTruyen='".$this->id."'";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    // delete xephang
    function delete(){
        
        // query to insert record
        $query = "DELETE FROM
                    " . $this->table_name . "
                WHERE
                    IdLoaiTruyen= '".$this->id."'";
        
        // prepare query
        $stmt = $this->conn->prepare($query);
        
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    
}