<?php
class Truyen{
 
    // database connection and table name
    private $conn;
    private $table_name = "truyen";
 
    // object properties
    public $IdTruyen;
    public $TenTruyen;
    public $IdLoaiTruyen;
    public $HinhAnh;
    public $TrangThai;
    public $GioiThieu;
    public $LuotXem=0;
    public $NgayDang='current_timestamp()';
    public $TacGia;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read all doctors
    function read(){
    
        // select all query
        $query = "SELECT
                *FROM
                    " . $this->table_name . " 
                ORDER BY
                    IdTruyen ASC";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

    // get single doctor data
    function read_single(){
    
        // select all query
        $query = "SELECT
                *FROM
                    " . $this->table_name . " 
                WHERE
                    IdTruyen=".$this->IdTruyen."";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }
    // create doctor
    function create(){
    
        // query to insert record
        $query = "INSERT INTO  ". $this->table_name ." 
                  VALUES
                        ('','".$this->TenTruyen."', '".$this->IdLoaiTruyen."','".$this->HinhAnh."', '".$this->TrangThai."','".$this->GioiThieu."','".$this->LuotXem."',".$this->NgayDang.",'".$this->TacGia."')";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // execute query
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }

        return false;
    }

    // update doctor 
    function update(){
    
        // query to insert record
        $query = "UPDATE
                    " . $this->table_name . "
                SET
                    TenTruyen='".$this->TenTruyen."', IdLoaiTruyen='".$this->IdLoaiTruyen."', HinhAnh='".$this->HinhAnh."', TrangThai='".$this->TrangThai."', GioiThieu='".$this->GioiThieu."', LuotXem='".$this->LuotXem."', NgayDang='".$this->NgayDang."', TacGia='".$this->TacGia."'
                WHERE
                    IdTruyen=".$this->IdTruyen."";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    // delete doctor
    function delete(){
        
        // query to insert record
        $query = "BEGIN;
        DELETE FROM chuongtruyen WHERE IdTruyen =".$this->IdTruyen.";
        DELETE FROM ".$this->table_name." WHERE IdTruyen = ".$this->IdTruyen.";
      COMMIT;";
        
        // prepare query
        $stmt = $this->conn->prepare($query);
        
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }

}