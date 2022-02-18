<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="SignupAgency.css">
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
                     <li><a href="voiture familliale.html">Voiture Familiale</a></li>
                     <li><a href="voiture normal.html">Voiture Normal </a></li>
                     <li><a href="voiture haut de gamme.html">Voiture Haut De Gamme</a></li>
                   </ul>
                </div>
            </li>
            <li><a href="main_page.html #contact"><i class="fa fa-phone"></i>Contact</a></li>
            <li><a href="#"><i class="fa fa-user"></i>Connexion <i class="fa fa-caret-down"></i></a>
                  <div class="menu1">
                   <ul>
                     <li><a href="c.html">Clients</a></li>
                     <li><a href="login.html">Agence</a></li>
                   </ul>
                </div>
            </li>
         </ul>
     </div>
   </nav>

<div class="gef">
	<form method="post" action="SignupAgencyphp.php">
		<center><b id="login">Sign Up As Agency</b></center><br>
		<div class="lab">
            <div class="inp">
                <div class="text">
                    <label><b>Agency Name:</b></label><br>
                   <input type="text" placeholder="entrer votre nom" name="nom" required><br>
                    <div class="inp"><label><b>Agency email:</b></label><br></div>
                   <input type="Email" placeholder="enter email" name="email" required><br>
                   <div class="inp"><label><b>password: </b></label><br></div>
                   <input type="password" placeholder="enter password" name="Password" required><br>
                   <div class="inp"><label><b>Confirm password: </b></label><br></div>
                   <input type="password" placeholder="enter password" name="Confirm" required><br>
                    <div class="inp"><label><b>Agency address:</b></label><br></div>
                   <input type="text" placeholder="enter address" name="address" required><br>
               <div class="file">
                    <div class="inp"><label><b>Commercial register :</b></label><br></div>
                    <input type="file" accept="image/png ,image/jpeg" name="register" required="">
               </div>
           </div>
           <button class="button1" type="submit">Sign up</button>
		   <div >
			  <ul>
				<li><a href="login.html"><b id="b">Return to login</b></a></li>
			  </ul>
		 </div>
	    </div>
	</form>
</div>

</body>
</html>