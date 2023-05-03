<?php
$host="localhost";
$user="root";
$password="";
$db="appointment";


$data=mysqli_connect($host, $user, $password, $db);
if($data===false){
     die("Nije spojeno sa bazom");
}

if ($_SERVER["REQUEST_METHOD"]=="POST")
{


    $ime = mysqli_real_escape_string($data, $_POST["ime"]);
  
    $email = mysqli_real_escape_string($data, $_POST["email"]);
    $broj = mysqli_real_escape_string($data, $_POST["broj"]);
    $vrijeme = mysqli_real_escape_string($data, $_POST["vrijeme"]);
    $datum = mysqli_real_escape_string($data, $_POST["datum"]);
    $predmet = mysqli_real_escape_string($data, $_POST["predmet"]);
   
}


$sql= "INSERT INTO zakazi(ime, email, broj, vrijeme, datum, predmet) values ('$ime', '$email', '$broj', '$vrijeme', '$datum', '$predmet' ) ";

if(mysqli_query ($data,$sql)){
     
     header("Location: login.html");

}

?>