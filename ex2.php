<?php
	define('DB_SERVER','localhost');
	define('DB_USER', 'root');
	define('DB_PASS','');

	$database ="projet";

	$db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
	$db_found = mysqli_select_db($db_handle, $database);

	if($db_found){
		$sql = "INSERT INTO acheteur(id,id_carte, nom, prenom,password, image, mail,adresse,ville,cp,pays,tel,type)
		 VALUES(NULL,NULL, '$nom', '$prenom','$password', '$image,'$mail','$adresse','$ville','$cp','$pays','$tel',NULL)";
		$result = mysqli_query($db_handle, $sql);

		echo "Add successful." . "<br>";
		}
	}
	else{
		echo "Database not found";
	}
	




	mysqli_close($db_handle);
	?>