<?php
  session_start();
  function config()
  {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'seputar';
    $conn = @mysql_connect($host,$user,$password) or die('Koneksi Database Gagal!');
    mysql_select_db($db,$conn);
	return $conn;
  }



function kepala()
{
echo'
<html>
<head><title>E-Booking System Mata Kuliah Pengganti</title>
	<link rel="stylesheet" href="css/layout.css" type="text/css">
    <script src="js/jquery.js"></script>
    <script src="js/menu.js"></script>

</head>
<body>
	<div id="container">';

}
function judul ()
{
	echo'
	<h1>E-Booking Schedule</h1>
	';	
}

function navigasi()
{
	echo'
	    <div id="clear"></div>
		<div><script>menu_bar();</script></div>
		<div id="clear"></div>';
}

function gadgetkiri()
{
	echo'<div id="gadget_kiritampil"></div>';
}

function gadgetkanan()
{
	echo'<div id="gadget_kanan"></div>';
}

function footer()
{
	echo'
		<div id="clear"></div>
		<div id="wrapper-footer">

					<div id="footer-bottom">
						<p class="left">www.e-bookingsytemmatkulpengganti.com</p>
						<p class="right">Design By : &copy Radumta Sitepu</p>
					</div>
		</div>

	</div>
</body>
</html>';
}

?>
