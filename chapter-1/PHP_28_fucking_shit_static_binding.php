<?php 




class one{

    public static $name = "Sa yar Gyi Twy lee pl";
    public static function AuthorName(){
        return self::$name;
    }

    public static function callAuthor(){
        echo static::AuthorName();
    }

}
class two extends one{
    public static function AuthorName(){
        return self::$name . " Sa tar pr byar";
    }
}

one::callAuthor();
echo "<br>";
two::callAuthor();























?>