<?php
class Sensor{
 
    // database connection 
    private $conn;
     
    // object properties
    public $id;
    public $libelle;
    public $add_mac;
    public $add_IP;
    
    public function __construct($db){
        $this->conn = $db;
    }
 
public function getAllsensor(){
    
       
        $query = "SELECT * FROM sensors";
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
        return $stmt;
    

}
    function readPropertiesName(){
         
        $query = "SELECT * FROM  sensors WHERE id = ?";
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
         
        $this->libelle = $row['libelle'];
        $this->add_mac = $row['add_mac'];
        $this->add_IP = $row['add_IP'];
        }  
    }
    ?>