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
        <h3 style="color: white">Ece Amazone</h3>
      </ul>
      <ul class="nav navbar-nav navbar-right">
                <?php
            session_start();
            echo '<li><a style="color: #f1f1f1; display:inline-block; "><strong>Bonjour '.$_SESSION['prenom'].'</strong></a></li>';

        ?>

        <li><a href="disconnect.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
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
  
<div class="container-fluid text-center">    
  <div class="row content">

    <div class="col-sm-8 text-left"> 
      <h1>Ventes flash</h1>
      <p>Faite vous plaisir !</p>
      <hr>
      
          <div class="container">    
  <div class="row">  <!-- ici carré avec vetement -->
      
<!--livre venteflash-->
<!--php-->
      <?php
  define('DB_SERVER','localhost');
  define('DB_USER', 'root');
  define('DB_PASS','');
  $database ="projet";
  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);
    
  
  if($db_found){
 
        $sql_count = mysqli_query($db_handle,"SELECT COUNT(*) AS titre FROM livre WHERE categorie='venteflash'") or exit(mysql_error());
      $donnees = mysqli_fetch_array($sql_count);
      $num = $donnees['titre'];
 
     
    for($i=1;$i<=$num;$i++) {
      
        $sql = "SELECT * FROM livre WHERE categorie='venteflash' AND id=$i" ;
        $result = mysqli_query($db_handle,$sql);
        while ($data = mysqli_fetch_assoc($result))
            {
      $image = $data['photo'];
      $titre = $data['titre'];
      $auteur = $data['auteur'];
      $date = $data['date'];
      $prix = $data['prix'];
      $editeur = $data['editeur'];
      $description = $data['description'];

  }
  
    echo ' <div class="col-sm-4">
      
        
        <!--prix etc-->
        <div class="panel panel-default text-center">

        <div class="panel-body"><img src="'.$image. '?>" class="img-responsive" style="width:100%" alt="Image"></div>
        <p class="h4" style="font-weight: bold;">'.$titre.';</p>
        <p><input type="text" class="form-control" id="auteur" value="Auteur : '.$auteur.'"readonly> </p>
        <p><input type="text" class="form-control" id="editeur" value="Editeur : '.$editeur.'"readonly> </p>
        <p><input type="text" class="form-control" id="date" value="Date de sortie : '.$date.'"readonly> </p>
        <p><input type="text" class="form-control" id="description" value="Description :  '.$description.'"readonly> </p>
        <p><input type="text" class="form-control" id="Prix" value="Prix : '.$prix.' euros"readonly></p>
        <a href="pannier.php"><span class="glyphicon glyphicon-shopping-cart"></span> Ajouter au panier </a>
        </div>
      
    </div>';
            }
         }
          else{
            echo "Database not found";
          }    
    
  mysqli_close($db_handle);
  ?>
<!--fin livre vente flash-->
<!--musique vente flash-->
<!--php-->
      <?php

  $database ="projet";
  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);
    
  
  if($db_found){
 
        $sql_count = mysqli_query($db_handle,"SELECT COUNT(*) AS titre FROM musique WHERE categorie='venteflash'") or exit(mysql_error());
      $donnees = mysqli_fetch_array($sql_count);
      $num = $donnees['titre'];
 
     
    for($i=1;$i<=$num;$i++) {
      
        $sql = "SELECT * FROM musique WHERE categorie='venteflash' AND id=$i" ;
        $result = mysqli_query($db_handle,$sql);
        while ($data = mysqli_fetch_assoc($result))
            {
               $image = $data['photo'];
               $titre = $data['nom'];
               $auteur = $data['auteur'];
               $datesortie = $data['datesortie'];
               $prix = $data['prix'];
            }
            echo' <div class="col-sm-4">
          
            
            
            <!--prix etc-->

            <div class="panel panel-default text-center">
            <div class="panel-body"><img src="'.$image. '?>" class="img-responsive" style="width:100%" alt="Image"></div>
            <p class="h4" style="font-weight: bold;">'.$titre.'</p>
            <p><input type="text" class="form-control" id="auteur" value="Auteur : '.$auteur.'"readonly> </p>
            <p><input type="text" class="form-control" id="datesortie" value="Date de sortie : '.$datesortie.'"readonly> </p>
            <p><input type="text" class="form-control" id="Prix" value="Prix : '.$prix.' euros"readonly></p>
            <a href="pannier.php"><span class="glyphicon glyphicon-shopping-cart"></span> Ajouter au panier </a>
            </div>
          <!--fin prix etc-->
          
        </div>';
            }
         }
          else{
            echo "Database not found";
          }    
    
  mysqli_close($db_handle);
  ?>
<!--fin musique vente flash -->
<!--sport et loisir vente flash -->
<!--php-->
      <?php

  $database ="projet";
  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);
    
  
    if($db_found){
 
        $sql_count = mysqli_query($db_handle,"SELECT COUNT(*) AS titre FROM sportloisir WHERE genre='loisir'") or exit(mysql_error());
      $donnees = mysqli_fetch_array($sql_count);
      $num = $donnees['titre'];
 
     
    for($i=1;$i<=$num;$i++) {
      
        $sql = "SELECT * FROM sportloisir WHERE genre='loisir' AND id=$i" ;
        $result = mysqli_query($db_handle,$sql);
        while ($data = mysqli_fetch_assoc($result))
            {
      $image = $data['photo'];
      $titre = $data['nom'];
      $video = $data['video'];
      $marque = $data['marque'];
      $prix = $data['prix'];
      $stock = $data['stock'];
      $description = $data['description'];

  }
  
    echo ' <div class="col-sm-4">
      
     
        
        <!--prix etc-->
        <div class="panel panel-default text-center">
        <div class="panel-body"><img src="'.$image. '?>" class="img-responsive" style="width:100%" alt="Image"></div>
        <p class="h4" style="font-weight: bold;">'.$titre.'"</p>
        <p><input type="text" class="form-control" id="marque" value="Marque : '.$marque.'"readonly> </p>
        <p><input type="text" class="form-control" id="video" value="Regarde ça ! '.$video.'"readonly> </p>
        <p><input type="text" class="form-control" id="description" value="Description :  '.$description.'"readonly> </p>
        <p><input type="text" class="form-control" id="stock" value="Stock : '.$stock.'"readonly> </p>
        <p><input type="text" class="form-control" id="Prix" value="Prix : '.$prix.' euros"readonly></p>
        <a href="pannier.php"><span class="glyphicon glyphicon-shopping-cart"></span> Ajouter au panier </a>
        </div>
      
    </div>';
            }
         }
          else{
            echo "Database not found";
          }    
    
  mysqli_close($db_handle);
  ?>
<!--fin sport et loisir vente flash -->
<!-- ventement vente flash -->
<!--php-->
      <?php

  $database ="projet";
  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);
    
  
   if($db_found){
 
        $sql_count = mysqli_query($db_handle,"SELECT COUNT(*) AS titre FROM vetement WHERE categorie='venteflash'") or exit(mysql_error());
      $donnees = mysqli_fetch_array($sql_count);
      $num = $donnees['titre'];
 
     
    for($i=1;$i<=$num;$i++) {
      
        $sql = "SELECT * FROM vetement WHERE categorie='venteflash' AND id=$i" ;
        $result = mysqli_query($db_handle,$sql);
        while ($data = mysqli_fetch_assoc($result))
            {
              $image = $data['photo'];
      $taille = $data['taille'];
      $marque = $data['marque'];
      $stock = $data['stock'];
      $couleur = $data['couleur'];
      $prix = $data['prix'];
      $description = $data['description'];


        
  }
  
    echo ' <div class="col-sm-4">
      
        
        
        <!--prix etc-->
        <div class="panel panel-default text-center">
        <div class="panel-body"><img src="'.$image. '?>" class="img-responsive" style="width:100%" alt="Image"></div>
        <p class="h4" style="font-weight: bold;">'.$marque.';</p>
        <p><input type="text" class="form-control" id="taille" value="Taille : '.$taille.'"readonly> </p>
        <p><input type="text" class="form-control" id="couleur" value="Couleur : '.$couleur.'"readonly> </p>
        <p><input type="text" class="form-control" id="description" value="Description : '.$description.'"readonly> </p>
        <p><input type="text" class="form-control" id="stock" value="Stock :  '.$stock.'"readonly> </p>
        <p><input type="text" class="form-control" id="Prix" value="Prix : '.$prix.' euros"readonly></p>
        <a href="pannier.php"><span class="glyphicon glyphicon-shopping-cart"></span> Ajouter au panier </a>
        </div>
      
    </div>';
            }
         }
          else{
            echo "Database not found";
          }    
    
  mysqli_close($db_handle);
  ?>
<!-- fin vetement vente flash -->
  </div>


</div>
<!--fin carré vetement-->
    </div>
      </div>
    </div>


<footer class="container-fluid text-center">
  <p> <center> Contactez-moi ! <a href="https://www.facebook.com/theo.chanashing"> Facebook </a> ou <a href="https://www.instagram.com/theo_chanashing/?hl=fr"> Instagram </a> </center> </p>
        <p>  <center> <a href="https://www.facebook.com/theo.chanashing">  <img src="img/facebook.png"style="width:3%">   </a>  or/and  <a href="https://www.instagram.com/theo_chanashing/?hl=fr"> <img src="img/instagram.png" style="width:3%"> </a> </center> </p>
</footer>

</body>