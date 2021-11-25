<?php

require_once 'database.php';

class User {
    private $conn;

    // Constructor
    public function __construct(){
      $database = new Database();
      $db = $database->dbConnection();
      $this->conn = $db;
    }


    // Execute queries SQL
    public function runQuery($sql){
      $stmt = $this->conn->prepare($sql);
      return $stmt;
    }

    // Insert
    public function insert($name, $email,$aadharno, $startdate, $enddate , $paymentmode){
      try{
        $stmt = $this->conn->prepare("INSERT INTO crud_users (name, email,aadharno,startdate,enddate,paymentmode) VALUES(:name, :email,:aadharno ,:startdate, :enddate, :paymentmode)");

        $stmt->bindparam(":name", $name);
        $stmt->bindparam(":email", $email);
        $stmt->bindparam(":aadharno", $aadharno);
        $stmt->bindparam(":startdate", $startdate);
        $stmt->bindparam(":enddate", $enddate);
        $stmt->bindparam(":paymentmode", $paymentmode);
        
        $stmt->execute();
        return $stmt;
      }catch(PDOException $e){
        echo $e->getMessage();
      }
    }


    // Update
    public function update($name, $email,$aadharno, $startdate,$enddate,$paymentmode, $id){
        try{
          $stmt = $this->conn->prepare("UPDATE crud_users SET name = :name, email = :email, aadharno = :aadharno, startdate = :startdate, enddate = :enddate, paymentmode = :paymentmode
                 WHERE id = :id");
          $stmt->bindparam(":name", $name);
          $stmt->bindparam(":email", $email);
          $stmt->bindparam(":aadharno", $aadharno);
          $stmt->bindparam(":startdate", $startdate);
          $stmt->bindparam(":enddate", $enddate);
          $stmt->bindparam(":paymentmode", $paymentmode);
         
          $stmt->bindparam(":id", $id);
          $stmt->execute();
          return $stmt;
        }catch(PDOException $e){
          echo $e->getMessage();
        }
    }




        // Update
        public function try( $startdate,$enddate){
          try{
            $stmt = $this->conn->prepare("SELECT startdate,enddate from crud_users");
            
            $stmt->bindparam(":startdate", $startdate);
            $stmt->bindparam(":enddate", $enddate);
           
            $stmt->execute();
            return $stmt;
          }catch(PDOException $e){
            echo $e->getMessage();
          }
      }
  


    // Delete
    public function delete($id){
      try{
        $stmt = $this->conn->prepare("DELETE FROM crud_users WHERE id = :id");
        $stmt->bindparam(":id", $id);
        $stmt->execute();
        return $stmt;
      }catch(PDOException $e){
          echo $e->getMessage();
      }
    }



   

    // Redirect URL method
    public function redirect($url){
      header("Location: $url");
    }


    
}
?>
