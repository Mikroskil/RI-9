<?php
require_once"fungsi.php";
$conn=config();
if(isset($_POST['Submit']))
{
		$nip=$_POST['username'];
		$password=$_POST['password'];





		/* we query through our database to search for a username that has been entered */
		$query = mysql_query("SELECT * FROM dosen WHERE nip = '$nip' AND password='$password'");

		if(mysql_num_rows($query) == 1)
		{
			echo"Login Diterima";
			//header("Location:dosen.php?id=$nip");

		}
		else
		{
			echo"Tidak Ditemukan Username dan Password Yang Bersesuaian";
		}

}
else
{
	header("Location:index.php");
}
?>