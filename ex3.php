<?php
	define('DB_SERVER','localhost');
	define('DB_USER', 'root');
	define('DB_PASS','');

	$database ="textcommandes";

	$db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
	$db_found = mysqli_select_db($db_handle, $database);

		$poidsmin = $_POST['x'];
		$poidsmax = $_POST['y'];
		
	if (isset($_POST['x']) && isset($_POST['y'])) {

	if($db_found){
		$sql = "SELECT * FROM produits WHERE poids BETWEEN $poidsmin AND $poidsmax";
		$result = mysqli_query($db_handle,$sql);
		while ($data = mysqli_fetch_assoc($result)){
			echo "pno : ".$data['pno'].'<br>';
			echo "Design : ".$data['design'].'<br>';
			echo "Prix : ".$data['prix'].'<br>';
			echo "Poids : ".$data['poids'].'<br>';
			echo "Couleur : ".$data['couleur'].'<br><br>';
		}
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