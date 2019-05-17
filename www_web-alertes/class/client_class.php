<?php
class Client{
 
    // database connection 
    private $conn;
    public $timestamp;
   
    // object properties
    public $id;
    public $nom;
    public $prenom;
    public $sexe;
    public $date_nais;
    public $address;
    public $code_postal;
    public $email;
    public $tel_per;
    public $tel_tutel;
    public $id_sensor;
    public $created_at;

 
    public function __construct($db){
        $this->conn = $db;
    }
 

    function create(){
 
        //write query
        $query = $query = "INSERT INTO clients
                            SET nom=:nom, prenom=:prenom,
                            sexe=:sexe, date_nais=:date_nais,
                            address=:address, code_postal=:code_postal,
                            email=:email, tel_per=:tel_per,
                            tel_tutel=:tel_tutel, id_sensor=:id_sensor,created_at=:created_at";                                    
                        
 
        $stmt = $this->conn->prepare($query);
 
        // posted values
        $this->nom=htmlspecialchars(strip_tags($this->nom));
        $this->prenom=htmlspecialchars(strip_tags($this->prenom));
        $this->sexe=htmlspecialchars(strip_tags($this->sexe));
        $this->date_nais=htmlspecialchars(strip_tags($this->date_nais));
        $this->address=htmlspecialchars(strip_tags($this->address));
        $this->code_postal=htmlspecialchars(strip_tags($this->code_postal));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->tel_per=htmlspecialchars(strip_tags($this->tel_per));
        $this->tel_tutel=htmlspecialchars(strip_tags($this->tel_tutel));
        $this->id_sensor=htmlspecialchars(strip_tags($this->id_sensor));
        $this->created_at=htmlspecialchars(strip_tags($this->created_at));
        $this->timestamp = date('Y-m-d H:i:s');
       
        // bind values 
        $stmt->bindParam(":nom", $this->nom);
        $stmt->bindParam(":prenom", $this->prenom);
        $stmt->bindParam(":sexe", $this->sexe);
        $stmt->bindParam(":date_nais", $this->date_nais);
        $stmt->bindParam(":address", $this->address);
        $stmt->bindParam(":code_postal", $this->code_postal);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":tel_per", $this->tel_per);
        $stmt->bindParam(":tel_tutel", $this->tel_tutel);
        $stmt->bindParam(":id_sensor", $this->id_sensor);
        $stmt->bindParam(":created_at", $this->timestamp);
       
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
 
    }// fin create()


    function readAll($from_record_num, $records_per_page){
     
        $query = "SELECT * 
                    FROM alertes a, clients c, sensors s
                   WHERE a.id_client = c.id and a.id_sensor = c.id
                    LIMIT  {$from_record_num}, {$records_per_page}";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
     
        return $stmt;
    }// fin readAll()
    function readPropertiesName(){
         
        $query = "SELECT * FROM  clients WHERE id = ?";
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
         
        $this->nom = $row['nom'];
        $this->prenom = $row['prenom'];
        $this->sexe = $row['sexe'];
        $this->date_nais = $row['date_nais'];
        $this->address = $row['address'];
        $this->code_postal = $row['code_postal'];
        $this->email = $row['email'];
        $this->tel_per = $row['tel_per'];
        $this->tel_tutel = $row['tel_tutel'];
        $this->created_at = $row['created_at'];


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