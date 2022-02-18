<?php
   try{
   	$db=new PDO('mysql:host=localhost;dbname=university;charset=utf8','root','');
   }
   catch(Exception $e){
   	  die('Erreur : '.$e->getMessage());
   }
  $statementUpdate=$db->prepare('UPDATE projet_location set nom=:nom,mot_pass=:password,cin=:cin where email=:email');
  $statementUpdate->execute(array('nom'=>$_POST['name'],'password'=>$_POST['password'],'cin'=>$_POST['cin'],'email'=>$_COOKIE['email']));
  ?>
  <!DOCTYPE html>
<html>
<head>
   <title>LocationAuto</title>
        <link rel="icon" href="LocationAuto.png"/>
     <link rel="stylesheet" type="text/css" href="agencyprofil.css">
    <link rel="stylesheet" type="text/css" href="agencyprofil2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="main_page.js"></script>
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
               <li><a href="#" ><i class="fa fa-caret-down"></i>service</a>
                   <div class="menu">
                      <ul>
                        <li><a href="voiture familliale.html">Voiture Familiale</a></li>
                        <li><a href="voiture normal.html">Voiture Normal </a></li>
                        <li><a href="voiture haut de gamme.html">Voiture Haut De Gamme</a></li>
                      </ul>
                   </div>
               </li>
               <li><a href="#contact"><i class="fa fa-phone"></i>Contact</a></li>
               <li><a href="main_page.html" >Deconnexion</a></li>
               </li>
            </ul>
        </div>
      </nav>

   <!-- LE CORP DE LA PAGE COMMENCE D'ICI -->

   <div class="container">
       <div class="main">
           <div class="rows">
               <div class="col-md-4 mt-1 left-side">
                   <div class="card text-center sidebar">
                       <div class="card-body">
                           <img src="./box1.jpg" class="rouded-circle" width="60%" style="margin-top: 20px; border-radius: 100px;">
                           <div class="mt-3">
                               <h3><?php echo $_POST['name'];?></h3>
                               <ul class="location-maarif">
                                   <li>Home</li>
                                   <li>Messages</li>
                                   <li>Demandes</li>
                                   <li>Profile</li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="col-md-8 mt-1 right-side">
                   <div class="card mb-3 content">
                       <h1 class="m-3 pt-3" style="color: green; font-weight: bold;">Toutes les informations modifiées ont été enregistrées ont été enregistrées avec succès!</h1>

                       <div class="card-body">
                           <div class="row">
                               <div class="column1">
                                   Nom 
                               </div>
                               <div class="col-md-9 text-secondary">
                                   <?php echo $_POST['name'];?>
                               </div>
                           </div><hr>

                           <div class="row">
                               <div class="column1">
                                   password
                               </div>
                               <div class="col-md-9 text-secondary">
                                   <?php echo $_POST['password'];?>
                               </div>
                           </div><hr>
                           <div class="row">
                               <div class="column1">
                                   CIN
                               </div>
                               <div class="col-md-9 text-secondary">
                                   <?php echo $_POST['cin'];?>
                               </div>
                           </div>

                       </div>
                   </div>
               </div>
           </div>
           <button style="background-color: #f44336; width: 80px; height: 30px; border-radius: 5px;"><a href="login.html" style="text-decoration: none; color:white; font-size: 20px;">Retour</a></button>
       </div>
   </div>
    <footer id="contact">
          <div class="bas">
            <h4>Company</h4>
             <ul>
               <li><a href="about us.html">About Us</a></li>
               <li><a href="#service">Our Service</a></li>
               <li><a href="#">Privacy Policy</a></li>
             </ul>
           </div>
           <div class="bas">
            <h4>Get Help</h4>
             <ul>
               <li><a href="#">FAQ</a></li>
               <li><a href="main_page.html">Returns</a></li>
               <li><a href="sign up.html">Payement Option</a></li>
             </ul>
           </div>
           <div class="bas">
            <h4>Our Address</h4>
             <ul>
               <li><a href="https://www.google.com/maps/place/ENSAM+CASABLANCA/@33.5594072,-7.5683356,17z/data=!3m1!4b1!4m5!3m4!1s0xda6332908d1d61b:0x569d5bec37f7f81a!8m2!3d33.5594111!4d-7.5662305"><i class="fa fa-map"></i>150 Bd du Nil, Casablanca 20670</a></li>
               <li><a href="locauto@gmail.com"><i class="fa fa-envelope"></i> locauto@gmail.com</a></li>
               <li><a href="#"><i class="fa fa-phone"></i> 0666666666</a></li>
             </ul>
           </div>
           <div class="bas" >
            <h4 id="#service">Follow Us</h4>
             <div class="icon">
               <a href="https://www.facebook.com/profile.php?id=100056561647314
                              "><i class="fa fa-facebook"></i></a>
               <a href="#"><i class="fa fa-twitter"></i></a>
               <a href="https://www.instagram.com/oussamahrita/
                               "><i class="fa fa-instagram"></i></a>
               <a href="#"><i class="fa fa-linkedin"></i></a>
             </div>
           </div>
            
  </footer> 
</body>
</html>