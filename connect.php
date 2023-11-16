<?php 

$con=new mysqli('localhost', 'root', '', 'crudoperation');

if(!$con){

    die(myqli_error($con));
}

?>