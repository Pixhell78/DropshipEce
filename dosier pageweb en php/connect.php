<?php

	define('DB_SERVER','localhost');
	define('DB_USER', 'root');
	define('DB_PASS','');

	$database ="projet";

	$db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,"");
	$db_found = mysqli_select_db($db_handle, $database);

		$email = $_POST['email'];
		$password = $_POST['password'];
		$temp =0;


	if (isset($_POST['email']) && isset($_POST['password'])) {

	if($db_found){
		
		$query = "SELECT password FROM admin WHERE mail='$email'";
		$result = mysqli_query($db_handle,$query);

		if ( $result ) 
		{ 
				$sql = mysqli_fetch_array($result);
				if($sql[0] == $password)
				{
				
					echo "Connection reussi".'<br>';
								$sql = "SELECT * FROM admin WHERE mail='$email'";
								$result = mysqli_query($db_handle,$sql);
								while ($data = mysqli_fetch_assoc($result)){
										session_start();
										$_SESSION['id'] = $data['id'];
										$_SESSION['prenom'] = $data['prenom'];
									echo '<meta http-equiv="refresh" content="1; URL=pagedacceuil.php">';
		
														    }
				}
				else{
						$temp = 1;
					}

		}
		else
		{ 
		  // results not found 
		}  

		$query = "SELECT password FROM acheteur WHERE mail='$email'";
		$result = mysqli_query($db_handle,$query);

		if ( $result ) 
		{ 
				$sql = mysqli_fetch_array($result);

				if($sql[0] == $password)
				{
				
				
					echo "Connection reussi".'<br>';
								$sql = "SELECT * FROM acheteur WHERE mail='$email'";
								$result = mysqli_query($db_handle,$sql);
								while ($data = mysqli_fetch_assoc($result)){
										session_start();
										$_SESSION['id'] = $data['id'];
										$_SESSION['prenom'] = $data['prenom'];
									echo '<meta http-equiv="refresh" content="1; URL=pagedacceuil.php">';

								}

				}
				else{
					$temp++;
				}

		}
		else
		{ 
		  // results not found 
		} 

		$query = "SELECT password FROM vendeur WHERE mail='$email'";
		$result = mysqli_query($db_handle,$query);
		if ( $result ) 
		{ 
				$sql = mysqli_fetch_array($result);
						echo $sql;

				if($sql[0] == $password)
				{
				

					echo "Connection reussi".'<br>';
								$sql = "SELECT * FROM vendeur WHERE mail='$email'";
								$result = mysqli_query($db_handle,$sql);
								while ($data = mysqli_fetch_assoc($result)){
										session_start();
										$_SESSION['id'] = $data['id'];
										$_SESSION['prenom'] = $data['prenom'];
							echo '<meta http-equiv="refresh" content="1; URL=pagedacceuil.php">';
							}

				}
				else{
						if($temp==2){ echo "Email ou mot de passe incorrect";
						echo '<meta http-equiv="refresh" content="1; URL=pageprincipale.html">';
						}
				}

		}
		else
		{ 
			echo "test";
 // results not found 
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