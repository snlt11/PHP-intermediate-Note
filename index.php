<?php 


error_reporting(0);


try{
    if(fopen("test.txt","r")){
        echo"testing success";
    }else{
        throw new Exception("try again");
    }
}catch (Exception $e){
    echo $e->getMessage();
}

























?>