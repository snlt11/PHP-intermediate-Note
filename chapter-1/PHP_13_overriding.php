<?php 


// class Member{

//     var $snack = "magic snack";

//     public function doIt(){
//         echo "This is do it function";
//     }


//     public function book(){
//         echo "This computer is Asus VivoBook";   
//     }

// }

// class medicare extends Member{
//     var $snack = "new snack";
//     public function book(){
//         echo "this is my new book ". $this->snack;

//     }
    


// }

// $obj = new medicare();
// $obj->book();
// echo"<br>";
// $obj->doIt();


class Member{
    var $email= "vivio@gmail.com";
    public function newName(){
        echo "new name is Asus";
    }

    public function newEmail(){

        echo "new Email is " . $this->email;
    }

}

class old extends Member{
    var $email= "asus@newmail.com";
    public function newEmail()
    {
        echo "I wannn write new mail and new mail is " . $this->email;
    }


}

$obj = new old();
$obj->newName();
echo "<br>";
$obj->newEmail();





















?>