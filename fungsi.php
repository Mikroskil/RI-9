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
	<script src="js/ajax-login.js"></script>
    <script src="js/menu.js"></script>
	<link rel="stylesheet" href="css/jquery.ui.all.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="navbar-fixed-top.css">
	<link rel="stylesheet" href="css/signin.css">
	<link href="offcanvas.css" rel="stylesheet">
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
	    <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">E-Booking Jadwal</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">Booking Jadwal</a></li>
                <li><a href="#contact">Jadwal</a></li>
              </ul>
            </div>
          </div>
        </div>
';
		
}

function login()
{
	if (ISSET($_SESSION['username']))
	{
			echo'
			<div id="vooting">
					<p> Selamat Datang Di :<br><b><center>Sistem Ebooking Mata Kuliah Pengganti</center></b><br> Mr/Mrs:';
					echo $_SESSION['username'];
					echo'<br><br><a href="logout.php"><input type="button" value="Logout"></a>
			</div>';
	}
	else
	{
			echo'
			<div id="kotaklogin" onsubmit="check_login();return false;">
				<div id="loginBox">
					<form id="loginForm">
						<fieldset id="body">
							<fieldset>
								<label>Username</label>
								<input type="text" class="form-control" placeholder="Username" required autofocus>
							</fieldset>
							<fieldset>
								<label>Password  </label>
								<input type="password" class="form-control" placeholder="Password" required>
								<input type="hidden" name="tipelogin" value="member">
							</fieldset>
							<label  id="error" style="display: none; font-size: 12px;"></label><br>
							<button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
							<a href="www.com">Forgot Password?</a>
						</fieldset>

					</form>
				</div>
			</div>';
	}
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
