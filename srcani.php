<?php
$host="localhost";
$user="root";
$password="";
$db="user";

session_start();
$data=mysqli_connect($host, $user, $password, $db);
if($data===false){
     die("Nije spojeno sa bazom");
}

if ($_SERVER["REQUEST_METHOD"]=="POST")
{


    $username = mysqli_real_escape_string($data, $_POST["username"]);
  
    $password = mysqli_real_escape_string($data, $_POST["password"]);
    $school = mysqli_real_escape_string($data, $_POST["school"]);
    $grade = mysqli_real_escape_string($data, $_POST["grade"]);
    $success = mysqli_real_escape_string($data, $_POST["success"]);
    $userType = mysqli_real_escape_string($data, $_POST["userType"]);
   
}
//$password_hash = password_hash($password, PASSWORD_DEFAULT);

$sql= "INSERT INTO login(username, password, school, grade, success, userTyper) values ('$username', '$password', '$school', '$grade', '$success', '$userType' ) ";
echo '<script>alert("Uspješna registracija!")</script>';
if(mysqli_query ($data,$sql)){
     
     header("Location: log.php");

}

?>