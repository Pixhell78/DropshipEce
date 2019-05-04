<?php
  define('DB_SERVER','localhost');
  define('DB_USER', 'root');
  define('DB_PASS','');

  $database ="projet";

  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);

// on teste si le visiteur a soumis le formulaire
//if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
  // on teste l'existence de nos variables. On teste également si elles ne sont pas vides
  if ((isset($_POST['mail']) && !empty($_POST['mail'])) && (isset($_POST['password']) && !empty($_POST['password']))) {
       $nom= $_POST['nom'];
       $prenom= $_POST['prenom'];
      $password= $_POST['password'];
      $mail= $_POST['mail'];
      $adresse= $_POST['adresse'];
      $ville= $_POST['ville'];
      $cp= $_POST['cp'];
      $pays= $_POST['pays'];
      $tel= $_POST['tel'];

  if($db_found){
       $sql ="INSERT INTO acheteur (`id`, `id_carte`, `nom`,`prenom`, `password`, `image`, `mail`, `adresse`, `ville`, `cp`, `pays`, `tel`, `type`) VALUES (NULL,NULL, '".$nom."', '".$prenom."','$password', '$prenom','$mail','$adresse','$ville','$cp','$pays','$tel',NULL);";

    $result = mysqli_query($db_handle, $sql);
    }
  else{
    echo "Database not found";
  //}
}
  }
  mysqli_close($db_handle);
  ?>


<head>
  <title>Ece Amazone</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    
a, a:hover {
    text-decoration: none;
}
/*header */
.header{
    background-color: #3498DB;
    height: 70px;
    line-higth : 70px;
}
.logo {
    color: #ffffff;
    text-transform: uppercase;
    font-weight: bold;
    letter-spacing: 1px;
    float: left;
}
.menu {
    float: right;
}

.menu a {
    color: #ffffff;
    margin-right: 20px;
}
.menu a:hover {

}

/* banniere */
.banner {
    width: 100%;
    max-width: 100%;

}
.ban {
    float: left;
}

.ban img {
    width: 40%;
    max-width: 40%; 
    float: left;
}
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 120%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }

    /*Carousel des vente flash */

.carousel-inner img {
      width: 70%; /* Set width to 100% */
      margin: auto;
      max-height:600px;
  }

 /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 400px) {
    .carousel-caption {
      display: none; 
    }
  }

/* fin Carousel des vente flash */

  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <a>Ece Amazone</a>
      </ul>
    </div>
  </div>
</nav>

<!--baniere -->
<section class="container-fluid banner"> 
<div class="inner-banner">
  <h1>Bienvenue sur ece amazone</h1>
</div>

 
<div class="ban">
<img src="img/ban.jpg" alt="banniere du site">
</div>



</section>
<!-- end baniere -->


<!-- inscription -->
<section class="container-fluid footer"> 

  <div class="container">     
        <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
             <div class="informationgeneral">
                <div class="entete">
                    <div class="titre-information">FORMULAIRE D'INSCRIPTION</div>
                    <div style="float:right; font-size: 85%; position: relative; top:-10px; ">Vous avez un compte!  <a id="signinlink" href="seconecter.html" onclick="$('#signupbox').hide(); $('#loginbox').show()">Se connecter</a></div>

                </div>  
                <div class="contenue" >
                <form id="signupform" class="form-horizontal" role="form" action="inscription.php" method="post">
                                
                <div id="alert_enregist" style="display:none" class="alert alert-danger">
                <p>Erreur</p>
                <span></span>
                </div>
                                
                <!-- RENSEIGNEMENT -->

                <div class="form-group">
                     <label for="prenom" class="col-md-3 control-label">Prenom</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom" required>
                    </div>
                </div>
                                
                    <div class="form-group">
                        <label for="nom" class="col-md-3 control-label">Nom</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="nom" required>
                        </div>
                    </div>
                                
                    <div class="form-group">
                        <label for="adresse" class="col-md-3 control-label">Adresse</label>
                        <div class="col-md-9">
                                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="adresse" required>
                        </div>
                    </div>
                    <div class="form-group">
                         <label for="pays" class="col-md-3 control-label">Pays</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="pays" name="pays" placeholder="pays">
                        </div>
                    </div>
                                
                                
                     <div class="form-group">
                        <label for="ville" class="col-md-3 control-label">Ville</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="ville" name="ville" placeholder="ville" required>
                        </div>
                    </div>
                                
                    <div class="form-group">
                        <label for="code_postal" class="col-md-3 control-label">Code Postal</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" maxlength="5" id="code_postal" name="cp" placeholder="Code postal" required>
                        </div>
                      </div>
                        <div class="form-group">
                        <label for="phone" class="col-md-3 control-label">Téléphone</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="phone" name="tel" placeholder="Téléphone" required>
                        </div>
                </div>
                <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="email" name="mail" placeholder="adresse email" required>
                        </div>
                </div>
                                    
                <div class="form-group">
                        <label for="register_password" class="col-md-3 control-label">Mot de passe</label>
                        <div class="col-md-9">
                        <input type="password" id="register_password" data-minlength="8" class="form-control" name="password" placeholder="mot de passe" required>
                        <div class="help-block">Minimum de 8 caracteres</div>
                        </div>
                                    
                </div>
                <div class="form-group" >
                 <!-- Boutton -->                                        
                <div class="col-md-offset-3 col-md-9" style=" margin-top:20px;">
                    <button id="btn-signup" type="button" class="btn btn-info col-md-12"><i class="icon-hand-right"></i> &nbsp S'enregistrer</button>
                    <td colspan="2" align="center">

                      <input type="submit" name="button5" value="Envoyer"></td>
                                        
                </div>
                     </div>
                   </div> 
                   </form>            
                </div>


</section>
<!-- end se connecter -->

</table>

<!--footer-->
<footer class="container-fluid text-center">
  <p> <center> Contactez-moi ! <a href="https://www.facebook.com/theo.chanashing"> Facebook </a> ou <a href="https://www.instagram.com/theo_chanashing/?hl=fr"> Instagram </a> </center> </p>
        <p>  <center> <a href="https://www.facebook.com/theo.chanashing">  <img src="img/facebook.png"style="width:3%">   </a>  or/and  <a href="https://www.instagram.com/theo_chanashing/?hl=fr"> <img src="img/instagram.png" style="width:3%"> </a> </center> </p>
</footer>
<!-- fin footer -->
</body>
</html>