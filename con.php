<?php
$host="localhost";
$username="root";
$password="";
$dbname="ghaytk";
$conn =mysqli_connect($host,$username,$password,$dbname);
if(isset($conn)){
    echo" connexion réussie";
}
else{
    echo"Acune connexion";
}
?>