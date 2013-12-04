<?php

	  function config()
	  {
		$host = 'localhost';
		$user = 'root';
		$password = '';
		$db = 'ri9';
		$conn = @mysql_connect($host,$user,$password) or die('Koneksi Database Gagal!');
		mysql_select_db($db,$conn);
		return $conn;
	  }

	  $conn=config();
	/* escape entered values to prevent sql nastyness */
	$username      = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);


	if(!empty($username) && !empty($password)){

		/* we query through our database to search for a username that has been entered */
		$query = mysql_query("SELECT * FROM dosen WHERE nip = '$username' AND password='$password'");

		if(mysql_num_rows($query) == 1){
			/* if there is a match with the database, we select the username and password from the database corresponding to the entered username */
			while($row = mysql_fetch_array($query))
			{
				$db_username = $row['nip'];
				$db_password = $row['password'];

			}
			/* we compare the entered username and password with the ones we just selected from the database */
			if($username == $db_username && $password == $db_password){
				/* If the entered username and password are correct, return 1 */
				session_start();
				$_SESSION['username'] = $db_username;
				$_SESSION['password'] = $db_password;
				echo '1';
			}
		} else {
			/* If the entered username or password do not match, return 2 */
			echo '2';
		}
	} else {
		/* If both fields are empty, return 3 */
		echo '3';
	}

?>