<?php
class ViewDeCu{
 
    // database connection and table name
    private $conn;
    private $table_name = "truyen";
 
    // object properties
    public $id;
   
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read all xephangs
    function read(){
    
        // select all query
        $query = "SELECT
                *FROM
                    " . $this->table_name . " 
                ORDER BY
                    LuotXem DESC LiMit 10";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

   
    
}