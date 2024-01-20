error_reporting(0);
try {
    if(fopen("test.txt","r")){
        echo"Successful";
    }else{
        throw new Exception("File can't be read");        
    }
}catch(Exception $e){
    echo $e->getMessage();
}finally{
    echo "<br>This is final result";
}



