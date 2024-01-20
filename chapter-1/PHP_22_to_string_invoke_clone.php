<?php




class Index{

    var $name = "Asus vivobook";
    public function __toString(){
        return "This is change to string";
    }

    public function __invoke(){

        echo "You are invoking me";

    }
    public function __clone(){
        echo "You are Clone to me";
    }
    

}
$obj = new Index();
echo $obj;
echo"<hr>";
echo $obj();
echo "<hr>";
$clone_object = clone $obj;
echo $clone_object->name;




























?>