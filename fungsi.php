<?php
  session_start();
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



function kepala()
{
echo'
<html>
<head><title>E-Booking System Mata Kuliah Pengganti</title>
	<link rel="stylesheet" href="css/layout.css" type="text/css">
		<link rel="stylesheet" href="css/jquery.ui.datepicker.css" type="text/css">

    <script src="js/menu.js"></script>
	<link rel="stylesheet" href="css/jquery.ui.all.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery.ui.core.js"></script>
	<script src="js/jquery.ui.widget.js"></script>
	<script src="js/jquery.ui.datepicker.js"></script>

	<script>
	$(function() {
		$( "#datepicker" ).datepicker
		({

		});
	});
	</script>
</head>
<body>
	<div id="container">';

}
function judul ()
{
	echo'
	<div id="judul"><h1><br /><br /><a href=" ">E-Booking Mata Kuliah Pengganti</a></h1></div>
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
	echo'<div id="gadget_kiritampil">
	<div id="datepicker"></div>

	</div>';
}

function gadgetkanan()
{
	echo'<div id="gadget_kanan">
							<div>
								<form method="post" action="login.php">
									<fieldset>
										<fieldset>
											<label>Username</label>
											<input type="text" name="username" id="username" />
										</fieldset>
										<fieldset>
											<label>Password</label>
											<input type="password" name="password" id="password" />
											<input type="hidden" name="tipelogin" value="member">
										</fieldset>
										<label  id="error" style="display: none; font-size: 12px;"></label>
										<input type="submit" class="submit" value="Log In" name="Submit"/>
									</fieldset>

								</form>
							</div>
	</div>';
}

function footer()
{
	echo'
		<div id="clear"></div>
		<div id="wrapper-footer">

					<div id="footer-bottom">
						<p class="left">www.Schedule E-Booking.com</p>
						<p class="right">Design By : RI-9</p>
					</div>
		</div>

	</div>
</body>
</html>';
}

?>
