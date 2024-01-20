<?php

class index
{

    private static $count = 0;
    public function test()
    {
        self::$count++;
        echo self::$count . "<br>";
    }
}
$obj = new index();
$obj->test();
$obj->test();
$obj->test();
echo "<hr>";
$bb = new index();
$bb->test();
$bb->test();
$bb->test();
