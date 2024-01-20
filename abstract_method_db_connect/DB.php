<?php
require_once ("DAL.php");
class DB extends DAL{

    public function __construct($db_host, $db_name, $db_user, $db_pass)
    {
        parent::__construct($db_host, $db_name, $db_user, $db_pass);
    }

    public function connect()
    {
        if($this->db == null)
            $this->db = new PDO("mysql:host=".$this->db_host.";dbname=".$this->db_name,$this->db_user,$this->db_pass);
        return $this->db;

    }
    public function disconnect()
    {
        if($this->db != null)
            $this->db = null;
    }

    public function fetchData($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id=:id");
        $stmt->bindParam(":id", $id);
        $result = $stmt->execute();
        if($result){
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }else{
            return null;
        }
    }


}
$db = new DB("localhost","project","root","");
$db->connect();
$data = $db->fetchData(3);
if($data != null){
    echo $data[0]->name;
}


