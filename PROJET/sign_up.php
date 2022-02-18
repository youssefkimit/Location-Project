<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="sign up.css">
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
            <li><a href="about us.html" target="_blank">About us</a></li>
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
	<form method="post" action="page.php">
		<center><b id="login">Sign Up</b></center><br>
		<div class="lab">
            <div class="inp">
                <div class="text">
                    <label><b>Nom :</b></label><br>
                   <input type="text" placeholder="entrer votre nom" name="nom" required><br>
                   <div class="inp"><label><b>Prénom :</b></label><br></div>
                   <input type="text" placeholder="entrer votre prenom" name="prenom" required><br>
                    <div class="inp"><label><b>E-mail :</b></label><br></div>
                   <input type="Email" placeholder="enter username" name="email" required><br>
                   <div class="inp"><label><b>Mot de passe :</b></label><br></div>
                   <input type="password" placeholder="enter password" name="password" required><br>
                    <div class="inp"><label><b>N° de la C.I.N :</b></label><br></div>
                   <input type="text" placeholder="entrer le numero CIN" name="cin" required><br>
                   <div class="inp"><label><b>Permis N° :</b></label><br></div>
              </div>
                   <div class="flex"> 
                       <ul>
                       <li><input id="per2" type="number" maxlength="2" min="00" max="99"  name="permis1" required></li><b style="font-size: 30px;color:white"> / </b>
                       <li><input id="per6"  type="number" maxlength="6"  name="permis2" required></li>
                       </ul>
                   </div>
               <div class="file">
                    <div class="inp"><label><b>Photo CIN :</b></label><br></div>
                    <input type="file" accept="image/png ,image/jpeg" name="CIN" required="">
               </div>
           </div>
           <button class="button1" type="submit">Sign up</button>
		   <div >
			  <ul>
				<li><a href="c.html"><b id=b>Return to login</b></a></li>
			  </ul>
		 </div>
	    </div>
	</form>
</div>

</body>
</html>