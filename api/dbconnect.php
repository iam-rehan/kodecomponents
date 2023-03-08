<?php
//$conn=mysqli_connect('sh041','dmarket1_svchimneyuser','svchimney@user','dmarket1_kodestores');
$conn=mysqli_connect('localhost','root','','dmarket1_kodestores');
if(!$conn){
    echo 'Connection Error : ' . mysqli_connect_error();
}
?>