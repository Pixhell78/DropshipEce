<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
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
      height: 100%;
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
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
 </button>
</div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <a href="#" class="logo">Ece Amazone</a>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="pageprincipale.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
         <li><a href="moncompte.html"> Mon compte</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- 2eme barre de navigation -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="pagedacceuil.html">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="venteflash.html">Vente Flash</a></li>
        <li><a href="vetements.html">Vetements</a></li>
        <li><a href="livre.html">Livre</a></li>
        <li><a href="musique.html">Musique</a></li>
        <li><a href="sport.html">Sport et Loisir</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="pannier.html"><span class="glyphicon glyphicon-shopping-cart"></span> Votre panier </a></li>
         
      </ul>
    </div>

  </div>
</nav>
<!-- fin 2eme barre de navigation -->
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="musiquedancehall.html">Dancehall</a></p>
      <p><a href="musiquerap.html">Rap Francais</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Musique</h1>
      <p>Faite vous plaisir !</p>
      <hr>
      
      <!-- ici carré avec vetement -->
      
      <!--php-->
      <?php
  define('DB_SERVER','localhost');
  define('DB_USER', 'root');
  define('DB_PASS','');
  $database ="projet";
  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);
    
  
  if($db_found){
    $sql = "SELECT * FROM musique WHERE genre='zouk' " ;
    $result = mysqli_query($db_handle,$sql);
    while ($data = mysqli_fetch_assoc($result)){
      echo "image ".$data['photo'].'<br>';
      echo "Titre : ".$data['nom'].'<br>';
      echo "Auteur: ".$data['auteur'].'<br>';
      echo "Date de sortie : ".$data['datesortie'].'<br>';
      echo "Prix : ".$data['prix'].'<br>';
  }
  else{
    echo "Database not found";
  }
}
else{
    echo "Certains champs sont vide";
}
  mysqli_close($db_handle);
  ?>

      <!--finphp-->
      
      <div class="container">    
  <div class="row">
    <div class="col-sm-4">
      
        <div class="panel-heading">Dernier hit</div>
        <div class="panel-body"><img src="<?php echo $photo ?>" class="img-responsive" style="width:100%" alt="Image"></div>
        
        <!--prix etc-->
        <div class="panel panel-default text-center">
        <p><input type="text" class="form-control" id="auteur" value="<?php echo $auteur;?>"readonly> </p>
        <p><input type="text" class="form-control" id="datesortie" value="<?php echo $datesortie;?>"readonly> </p>
        <p><input type="text" class="form-control" id="Prix" value="<?php echo $prix;?>"readonly></p>
        <a href="pannier.html"><span class="glyphicon glyphicon-shopping-cart"></span> Ajouter au panier </a>
</div>
      <!--fin prix etc-->
      
    </div>
    <div class="col-sm-4"> 
      
        <div class="panel-heading">Franky Vincent</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        
        <!--prix etc-->
        <div class="panel panel-default text-center">
        <p>Description:<input type="text" class="form-control" id="auteur" value="<?php echo $auteur;?>"readonly><br><input type="text" class="form-control" id="datesortie" value="<?php echo $datesortie;?>"readonly> </p>
        <p>Prix:<input type="text" class="form-control" id="Prix" value="<?php echo $prix;?>"readonly></p>
        <a href="pannier.html"><span class="glyphicon glyphicon-shopping-cart"></span> Ajouter au panier </a>
</div>
      <!--fin prix etc-->
      
    </div>
  </div>
</div>
<!--fin carré vetement-->
    </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p> <center> Contactez-moi ! <a href="https://www.facebook.com/theo.chanashing"> Facebook </a> ou <a href="https://www.instagram.com/theo_chanashing/?hl=fr"> Instagram </a> </center> </p>
        <p>  <center> <a href="https://www.facebook.com/julia.l.robillard">  <img src="img/facebook.png">   </a>  or/and  <a href="https://www.instagram.com/juliarblld/"> <img src="img/instagram.png"> </a> </center> </p>
</footer>

</body>