<?php

include_once("he.php");
include_once("she.php");

class index implements She, He
{
    private $data;

    public function sheGoToSchool($data)
    {

        $this->data = $data;
    }

    public function heGoToSchool($data)
    {
        $this->data = $data;
    }

    public function outPut()
    {
        print_r($this->data);
    }
}
$obj = new index();
$sheAry = ["one", "two", "three"];
$heAry = ["four", "five", "six"];
$obj->sheGoToSchool($sheAry);
$obj->outPut();
echo "<br>";

$bb = new index();
$bb->heGoToSchool($heAry);
$bb->outPut();

?>
From She.php
<!-- 
interface She{
    public function sheGoToSchool($data);
} -->


From He.php
<!-- interface He{
        public function heGoToSchool($data);
    } -->