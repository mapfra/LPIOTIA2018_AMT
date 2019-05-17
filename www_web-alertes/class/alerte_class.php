<?php
class Alerte{
 
    // database connection 
    private $conn;
    public $timestamp;
   
    // object properties
    public $id;
    public $potentielle_alerte;
    public $datetime_alerte;
    public $id_sensor;
    public $id_client;
    public $etat_trait;
    public $date_time;
 
    public function __construct($db){
        $this->conn = $db;
    }
 
public function update(){
    $query = "UPDATE alertes SET etat_trait = '1'";
    $stmt = $this->conn->prepare($query);
  $this->etat_trait = htmlspecialchars(strip_tags($this->etat_trait));
    
}
    function readAll($from_record_num, $records_per_page){
     
        $query = "SELECT * 
                    FROM alertes a, clients c
                   WHERE a.id_client = c.id 
                    LIMIT  {$from_record_num}, {$records_per_page}";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
     
        return $stmt;
    }// fin readAll()
    function readPropertiesName(){
         
        $query = "SELECT * FROM  alertes WHERE id = ?";
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
         
        $this->potentielle_alerte = $row['potentielle_alerte'];
        $this->datetime_alerte = $row['datetime_alerte'];
        $this->id_sensor = $row['id_sensor'];
        $this->id_client = $row['id_client'];
        $this->etat_trait = $row['etat_trait'];
        $this->datetime = $row['datetime'];

    }  

            // used for paging products
    public function countAll(){
         
    $query = "SELECT id FROM alertes";
 
    $stmt = $this->conn->prepare( $query );
    $stmt->execute();
 
    $num = $stmt->rowCount();
 
    return $num;
    } // fin read_one()

// read products by search term

}// fin class
?>