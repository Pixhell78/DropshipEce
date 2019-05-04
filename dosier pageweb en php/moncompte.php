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
    <?php
            session_start();
            echo '<li><a style="color: #f1f1f1; display:inline-block; "><strong>Bonjour '.$_SESSION['prenom'].'</strong></a></li>';

        ?>



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
      
      <!--information-->
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
     $table=$_SESSION['table'];
     $id=$_SESSION['id'];

    if($table=='admin') {    
        $sql = "SELECT * FROM $table WHERE id=$id" ;
        $result = mysqli_query($db_handle,$sql);
        while ($data = mysqli_fetch_assoc($result))
            {
      $nom = $data['nom'];
      $prenom = $data['prenom'];
      $mail = $data['mail'];
  }
  
    echo '      <h1>Informations personnelles :</h1>
       <div class="col-sm-4">
      
        
        </br>  

        <!--prix etc-->
        <div class="panel panel-default text-center">
          <div class="panel-body"></div>
        <div class="panel panel-default text-center">
        <p><input type="text" class="form-control" id="table" value="Compte : '.$table.' ( id: '.$id.' )"readonly> </p>
        <p><input type="text" class="form-control" id="editeur" value="Nom : '.$nom.'"readonly> </p>
        <p><input type="text" class="form-control" id="date" value="Prenom : '.$prenom.'"readonly> </p>
        <p><input type="text" class="form-control" id="description" value="Email :  '.$mail.'"readonly> </p>
        </div>
      
    </div>';
         }
        else if($table=='acheteur') {    
        $sql = "SELECT * FROM $table WHERE id=$id" ;
        $result = mysqli_query($db_handle,$sql);
        while ($data = mysqli_fetch_assoc($result))
            {
      $nom = $data['nom'];
      $prenom = $data['prenom'];
      $mail = $data['mail'];
      $image=$data['image'];
      $adresse=$data['adresse'];
      $ville=$data['ville'];
      $cp=$data['cp'];
      $pays=$data['pays'];
      $tel=$data['tel'];
      $type=$data['type'];
  }
  
    echo '      <h1>Informations personnelles :</h1>
       <div class="col-sm-4">
      
        
        </br>  

        <!--prix etc-->
        <div class="panel panel-default text-center">
         <div class="panel-body"><img src="'.$image. '?>" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel panel-default text-center">
        <p><input type="text" class="form-control" id="table" value="Compte : '.$table.' ( id: '.$id.' )"readonly> </p>
        <p><input type="text" class="form-control" id="editeur" value="Nom : '.$nom.'"readonly> </p>
        <p><input type="text" class="form-control" id="date" value="Prenom : '.$prenom.'"readonly> </p>
        <p><input type="text" class="form-control" id="description" value="Email :  '.$mail.'"readonly> </p>
        <p><input type="text" class="form-control" id="editeur" value="Adresse : '.$adresse.'"readonly> </p>
        <p><input type="text" class="form-control" id="date" value="Ville : '.$ville.'"readonly> </p>
        <p><input type="text" class="form-control" id="description" value="Code postale :  '.$cp.'"readonly> </p>
        <p><input type="text" class="form-control" id="editeur" value="Pays : '.$pays.'"readonly> </p>
        <p><input type="text" class="form-control" id="date" value="Telephone : '.$tel.'"readonly> </p>
        <p><input type="text" class="form-control" id="description" value="Carte :  '.$type.'"readonly> </p>
        </div>
      
    </div>';
         }
         else if($table=='vendeur') {    
        $sql = "SELECT * FROM $table WHERE id=$id" ;
        $result = mysqli_query($db_handle,$sql);
        while ($data = mysqli_fetch_assoc($result))
            {
      $nom = $data['nom'];
      $prenom = $data['prenom'];
      $mail = $data['mail'];
      $image=$data['image'];
      $background=$data['background'];
  }
  
    echo '      <h1>Informations personnelles :</h1>
       <div class="col-sm-4" style="float:left; >
      
        
        </br>  

        <!--prix etc-->
        <div class="panel panel-default text-center" background-image:url(fond.jpg);" >
         <div class="panel-body" ><img src="'.$image. '?>" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel panel-default text-center" >
        <p><input type="text" class="form-control" id="table" value="Compte : '.$table.' ( id: '.$id.' )"readonly> </p>
        <p><input type="text" class="form-control" id="editeur" value="Nom : '.$nom.'"readonly> </p>
        <p><input type="text" class="form-control" id="date" value="Prenom : '.$prenom.'"readonly> </p>
        <p><input type="text" class="form-control" id="description" value="Email :  '.$mail.'"readonly> </p>

        </div>
      
 
        </div>

       <div class="col-sm-4" style="margin-left:10% >

<section class="container-fluid footer"> 

  <div class="container">     
        <div id="signupbox" style=" margin-top:10px" class="mainbox col-md-5  col-sm-8 col-sm-offset-2">
             <div class="informationgeneral">
                <div class="entete">
                    <div class="titre-information"><h2>Ajouter un livre</h2></div>
                   
                </div>  
                <div class="contenue" >
                <form id="signupform" class="form-horizontal" role="form" action="ajoutlivre.php" method="post">
                                
                <div id="alert_enregist" style="display:none" class="alert alert-danger">
                <p>Erreur</p>
                <span></span>
                </div>
                                
                <!-- RENSEIGNEMENT -->

                <div class="form-group">
                     <label for="prenom" class="col-md-3 control-label">Titre</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="titre" name="titre" placeholder="titre" required>
                    </div>
                </div>

                    <div class="form-group">
                        <label for="nom" class="col-md-3 control-label">Auteur</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="auteur" name="auteur" placeholder="auteur" required>
                        </div>
                    </div>
                                
                    <div class="form-group">
                        <label for="adresse" class="col-md-3 control-label">Date de parution</label>
                        <div class="col-md-9">
                                <input type="date" class="form-control" id="date" name="date" placeholder="date" required>
                        </div>
                    </div>
                    <div class="form-group">
                         <label for="pays" class="col-md-3 control-label">Editeur</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="editeur" name="editeur" placeholder="pays">
                        </div>
                    </div>
                                
                                
                     <div class="form-group">
                        <label for="ville" class="col-md-3 control-label">Prix</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="prix" name="prix" placeholder="prix" required>
                        </div>
                    </div>
                                
                    <div class="form-group">
                        <label for="code_postal" class="col-md-3 control-label">Description</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control"  id="description" name="description" placeholder="description" required>
                        </div>
                    </div>

                      <div class="form-group">
                        <label for="phone" class="col-md-3 control-label">Genre</label>
                        <div class="col-md-9">
                            <select class="genre" id="genre" name="genre">
                                      <option>roman</option>
                                      <option>sciencefiction</option>
                                    </select>

                        </div>
                </div>
                

                      <input type="submit" name="button5" value="Envoyer" style="margin-left:120px;"></td>
                                        
                </div>
                     </div>
                   </div> 
                   </form>            
                </div>


</section>
        </div>

</div>
 
    ';
   }
          else{
            echo "Database not found";
          }    
    }
  mysqli_close($db_handle);
  ?>
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