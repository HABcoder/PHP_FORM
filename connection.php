<?php

$con = mysqli_connect("localhost","root","","habiba24");

if($con){
    echo 'connected';
}
else{
    echo 'not connected';
}


?>