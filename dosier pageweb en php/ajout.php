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