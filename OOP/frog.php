<?php
require_once "animal.php";
class frog extends animal
{
    public function getfrogname(){
 echo "<br/><br/> name : kakwe";
    }
    public function getfroglegs(){
        echo  "<br/> legs : 4";
}

public function getfrogblood(){
    echo "<br/> blood : no";
}

public function getfrogjump(){
    echo"hop hop";
}
}
?>