<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ece Amazone</title>
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
         <li><a href="moncompte.php"> Mon compte</a></li>
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
      <a class="navbar-brand" href="pagedacceuil.php">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="venteflash.php">Vente Flash</a></li>
        <li><a href="vetements.php">Vetements</a></li>
        <li><a href="livre.php">Livre</a></li>
        <li><a href="musique.php">Musique</a></li>
        <li><a href="sport.php">Sport et Loisir</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="pannier.php"><span class="glyphicon glyphicon-shopping-cart"></span> Votre panier </a></li>
         
      </ul>
    </div>

  </div>
</nav>
<!-- fin 2eme barre de navigation -->
  
  
      
      
      <div class="container">    
  <div class="row">
    <div class="col-sm-4">
      
      <!--information-->

      <!--fin information-->
       

    </div>
      </div>
    </div>


<!--fin final -->

<footer class="container-fluid text-center">
  <p> <center> Contactez-moi ! <a href="https://www.facebook.com/theo.chanashing"> Facebook </a> ou <a href="https://www.instagram.com/theo_chanashing/?hl=fr"> Instagram </a> </center> </p>
        <p>  <center> <a href="https://www.facebook.com/theo.chanashing">  <img src="img/facebook.png"style="width:3%">   </a>  or/and  <a href="https://www.instagram.com/theo_chanashing/?hl=fr"> <img src="img/instagram.png" style="width:3%"> </a> </center> </p>
</footer>

</body>
