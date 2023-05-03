<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
       session_unset();

   
    session_destroy();

  
    header("location: log.php");
    exit;
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
<!--------- https://dash.elfsight.com/widget/cc71230e-76d2-41ea-a72c-22e2f973badd -->
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
   
     <script src="business.js"></script>

<h1>ADMIN</h1><?php echo $_SESSION["username"]; ?>
<form action="logout.php" method="post">
    <button type="submit" name="logout" class="btn">Log Out</button>
</form>
<style>
		table {
			border-collapse: collapse;
			width: 100%;
			background-color: #fff;
			border: 1px solid #ddd;
			font-family: Arial, sans-serif;
			color: #333;
		}
		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #0074D9;
			color: #fff;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
	</style>
<table>
		<thead>
			<tr>
				<th>Ime</th>
				<th>Email</th>
				<th>Broj</th>
				<th>Vrijeme</th>
				<th>Datum</th>
				<th>Predmet</th>
			</tr>
		</thead>
		<tbody>
			<?php
				
				$host="localhost";
                    $user="root";
                    $password="";
                    $db="appointment";

                       
                         $data=mysqli_connect($host, $user, $password, $db);
                         if($data===false){
                              die("Nije spojeno sa bazom");
                         }


				$sql="SELECT ime, email, broj, vrijeme, datum, predmet FROM zakazi ";
				$result = mysqli_query($data,$sql );

				
				while ($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>" . $row['ime'] . "</td>";
					echo "<td>" . $row['email'] . "</td>";
					echo "<td>" . $row['broj'] . "</td>";
					echo "<td>" . $row['vrijeme'] . "</td>";
					echo "<td>" . $row['datum'] . "</td>";
					echo "<td>" . $row['predmet'] . "</td>";
					echo "</tr>";
				}

				
				mysqli_close($data);
			?>
		</tbody>
	</table>

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