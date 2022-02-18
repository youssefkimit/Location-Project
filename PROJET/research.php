<!DOCTYPE html>
<html>
<head>
	<title>Search Bar</title>
		<link rel="stylesheet" type="text/css" href="page2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <nav>
   <div class="logo">
    <img src="LocationAuto.png" alt="logo" longdesc="locations des voitures" />
                </div>
     <div class="p">
           <ul>
            <li><a  href="main_page.html"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="CONNEXION\about us.html" target="_blank">About us</a></li>
            <li><a href="#"><i class="fa fa-caret-down"></i>service</a>
                <div class="menu">
                   <ul>
                     <li><a href="#">Voiture familiale</a></li>
                     <li><a href="#">Voiture moyene </a></li>
                     <li><a href="#">Voiture luxe</a></li>
                   </ul>
                </div>
            </li>
            <li><a href="#"><i class="fa fa-phone"></i>Contact</a></li>
            <li><a href="#"><i class="fa fa-user"></i>Connexion <i class="fa fa-caret-down"></i></a>
                  <div class="menu1">
                   <ul>
                     <li><a href="#">Clients</a></li>
                     <li><a href="#">Agence</a></li>
                   </ul>
                </div>
            </li>
         </ul>
     </div>
   </nav>
    <div class="gradient_familliale">
    <h1>Voiture Familliale</h1>
</div>
	<div class="feat">
            <label for="Filtre">Filtre by:</label>
        <select name="Filtre" id="Filtre" >
          <option value="Name">Name</option>
          <option value="Price">Price (ascendant)</option>
          <option value="Price">Price (descendant)</option>
          <option value="mercedes">Nbr of seats</option>
        </select>

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit" value="Rechercher">
<input type="reset" value="Supprimer">
	
</form>
</div>




<?php

$con = new PDO("mysql:host=localhost;dbname=voiture",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `search` WHERE Name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
	<div class="choise" >
	    <div class="box" > 
	        <h3 style="color:#fe502e;"><?php echo $row->Name; ?> <i class="fa fa-car" style="color:black;"></i></h3>  
	        <img src=<?php echo "\"". $row->Image ."\"";?> >
	    	<div class="price"><?php echo $row->Description;?></div>
	        <a class="btn_familliale">Réserver</a>
	    </div>
	</div>

<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>


<footer>
          <div class="bas">
            <h4>Company</h4>
             <ul>
               <li><a href="#">About Us</a></li>
               <li><a href="#">Our Service</a></li>
               <li><a href="#">Privacy Policy</a></li>
             </ul>
           </div>
           <div class="bas">
            <h4>Get Help</h4>
             <ul>
               <li><a href="#">FAQ</a></li>
               <li><a href="#">Returns</a></li>
               <li><a href="#">Payement Option</a></li>
             </ul>
           </div>
           <div class="bas">
            <h4>Our Address</h4>
             <ul>
               <li><a href="#"><i class="fa fa-map"></i> street Nil</a></li>
               <li><a href="#"><i class="fa fa-envelope"></i> aaaa@bbgmail.com</a></li>
               <li><a href="#"><i class="fa fa-phone"></i> 0666666666</a></li>
             </ul>
           </div>
           <div class="bas">
            <h4>Follow Us</h4>
             <div class="icon">
               <a href="#"><i class="fa fa-facebook"></i></a>
               <a href="#"><i class="fa fa-twitter"></i></a>
               <a href="#"><i class="fa fa-instagram"></i></a>
               <a href="#"><i class="fa fa-linkedin"></i></a>
             </div>
           </div>
            
  </footer>
</body>
</html>

