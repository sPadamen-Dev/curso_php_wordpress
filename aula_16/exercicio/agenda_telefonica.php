<?php
class DATABASE{
    public $host = "localhost";
    public $db_name = "agenda_telefonica";
    public $username = "root";
    public $password = "";
    public $connection;

    public function connect(){
       $this->$connection = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        return $this->$connection;
    }

}

$database = new DATABASE();
$database->connect();

if($database){
    echo "conectado";
}else{
    echo "Nao conectado";
};

?>