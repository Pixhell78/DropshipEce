<?php
  define('DB_SERVER','localhost');
  define('DB_USER', 'root');
  define('DB_PASS','');

  $database ="projet";

  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);
session_start();
     $id=$_SESSION['id'];

// on teste si le visiteur a soumis le formulaire
//if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
  // on teste l'existence de nos variables. On teste également si elles ne sont pas vides

       $titre= $_POST['titre'];
       $auteur= $_POST['auteur'];
      $date= $_POST['date'];
      $editeur= $_POST['editeur'];
      $prix= $_POST['prix'];
      $description= $_POST['description'];
      $genre= $_POST['genre'];

  if($db_found){
       $sql ="INSERT INTO livre (`id`, `titre`, `auteur`,`date`, `editeur`, `prix`, `photo`, `description`, `categorie`, `genre`, `id_vendeur`) VALUES (NULL,'$titre', '$auteur','$date','$editeur','$prix',NULL,'$description',NULL,$genre,'$id');";
       echo $sql;
    $result = mysqli_query($db_handle, $sql);
    }
  else{
    echo "Database not found";
  //}
}
  
  mysqli_close($db_handle);
  ?>