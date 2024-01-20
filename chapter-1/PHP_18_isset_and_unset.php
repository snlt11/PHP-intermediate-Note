<?php

class index
{

    public function __isset($name)
    {
        echo "your are trying to check set properties . {$name}" . "<hr>";
    }
    public function __unset($name)
    {
        echo "your are trying to check unset properties . {$name}";
    }
}
$obj = new index();

isset($obj->Isset_check);
unset($obj->Unset_check);
