<?php 

class Index{
    public const DB_HOST = "localhost";
    public const DB_NAME = "inter";
    public const DB_USER = "root";
    public const DB_PASS = "";

    public $con;

    public function __construct(){
        $this->con = new PDO("mysql:host=". self::DB_HOST, self::DB_USER, self::DB_PASS);
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if($this->con){
            echo "Successful";

        }else{
            echo "Connection fail";
        }


    }


}
$obj = new Index();









?>