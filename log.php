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
    $username = $_POST['username'];
$password = $_POST['password'];

$userType = $_POST['userType'];

$sql="select * from login where username='".$username."' AND  password='".$password." '  ";


$result=  mysqli_query ($data,$sql);

$row= mysqli_fetch_array($result);

if ($row["userTyper"]=="user"){
     $_SESSION["username"]=$username;
     header("location: userhome.php");

}
else if ($row["userTyper"]=="admin"){
     $_SESSION["username"]=$username;
     header("location: adminhome.php");
}
else {
     echo "Korisničko ime ili password netačni";
}
$_SESSION['username'] = $username;
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Instr_spasa</title>
   <link rel="stylesheet" href="business.css">
   <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">                
   <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Caramel&family=Lobster&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
   <div class="elfsight-app-cc71230e-76d2-41ea-a72c-22e2f973badd"></div>

</head>
<body>
     <nav class="navbar">

          <div class ="navbar__container">

               <a href="business.html"><img src="spas.jpg" class="navbar__logo" ></img></a>
               <figure >
                    <blockquote>
                         <p style=" color: blue; padding-top: 7px; font-size: 22px; font-family: 'Caramel', cursive;
                         font-family: 'Lobster', cursive;"><i>"Znanje - izbor pobjednika."</i></p>
                    </blockquote>
                    <figcaption id="who">– Fondacija Hastor</figcaption>
               </figure>

               <div class="navbar__toggle" id="mobile-menu">
               <span class="bar"></span>
               <span class="bar"></span>
               <span class="bar"></span>
          </div>
          <ul class="navbar__menu">
               <li class="navbar__item">
                    <a href="instrukcije.html" class="navbar__links">

                         Instrukcije
                    </a>
               </li>
               <li class="navbar__item">
                    <a href="projekti.html" class="navbar__links">

                         Projekti
                         Zadaće
                    </a>
               </li>
              <li class="navbar__item">
                    <a href="log.php" class="navbar__links" id="log">

                         Login
                    </a>
               </li>
          

               <li class="navbar__btn">
                    <a href="login.html" class="button">
                        Zakaži
                    </a>
               </li>
          </ul>
          </div>
         
     </nav>
    

     <body>
       
	<h1>Log in</h1>
     <p>
Ako nemate account kliknite ===>

<a href="signup.php">
    <button type="button" class="btn">Sign Up</button>

</p>
    
</a>


	<form  action="#"  method="POST">
		<label for="username">Korisničko ime:</label>
		<input type="text" id="username" name="username" required><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" pattern="[a-zA-Z0-9]{8,}" title="Password must contain 8 characters, including only letters and numbers" required><br>

		
		<label for="userType">Tip korisnika:</label>
		<select id="userType" name="userType" required>
			<option value="user">User</option>
			<option value="admin">Admin</option>
		</select><br>

		<input type="submit" value="Log in" class="btn">
	</form>

</body>
</html>

     </body>

     
   <!--- sui --->

<section class="footer">
     <div class="social">
          <a href="https://www.instagram.com/instrukcije_spasa/?hl=hr" add a target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://www.instagram.com/spas_187/?hl=hr" add a target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://www.facebook.com/sendin.pasovic/" add a target="_blank"><i class="fab fa-facebook-f"></i></a>
     </div>

<ul class="list">
     <li>
          <a href="#" add a target="_blank" >Uslovi privatnosti</a>
     </li>

</ul>
<p class="copyright">
     instrukcije_spasa @2022 <br>
     <i>Sva prava pridržana</i>
</p>
</section>
</body>



</html>