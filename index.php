<?php
require_once"fungsi.php";
kepala();
judul ();
navigasi();
if (ISSET($_SESSION['username']))
{
echo'
<div id="gadget_kiritampil">
	<div id="datepicker"></div>
	<div><input id="hilang" name="tanggal" value="" type="hidden"></div>
</div>';
}
else
{
echo'<div id="gadget_kiritampil">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>slide coba</title>
	
	
	<link rel="stylesheet" type="text/css" href="Slide/engine1/style.css" />
	<link href="../../dist/css/bootstrap.css" rel="stylesheet">
	<link href="signin.css" rel="stylesheet">
	<script type="text/javascript" src="Slide/engine1/jquery.js"></script>
	</head>
<body style="background-color:#d7d7d7">
	
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="Slide/data1/images/188584_162695493785515_5885207_n.jpg" alt="188584_162695493785515_5885207_n" title="" id="wows1_0"/></li>
<li><img src="Slide/data1/images/46970810c116caf35ac4e3fa3a422dddslidemikroskil.jpg" alt="46970810c116caf35ac4e3fa3a422ddd-slide-mikroskil" title="" id="Slide/wows1_1"/></li>
<li><img src="Slide/data1/images/8798362115_53dcb1e9c9_z.jpg" alt="8798362115_53dcb1e9c9_z" title="" id="wows1_2"/></li>
<li><img src="Slide/data1/images/mikroskilmenuheader.png" alt="mikroskil-menu-header" title="" id="wows1_3"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="188584_162695493785515_5885207_n"><img src="Slide/data1/tooltips/188584_162695493785515_5885207_n.jpg" alt="188584_162695493785515_5885207_n"/>1</a>
<a href="#" title="46970810c116caf35ac4e3fa3a422ddd-slide-mikroskil"><img src="Slide/data1/tooltips/46970810c116caf35ac4e3fa3a422dddslidemikroskil.jpg" alt="46970810c116caf35ac4e3fa3a422ddd-slide-mikroskil"/>2</a>
<a href="#" title="8798362115_53dcb1e9c9_z"><img src="Slide/data1/tooltips/8798362115_53dcb1e9c9_z.jpg" alt="8798362115_53dcb1e9c9_z"/>3</a>
<a href="#" title="mikroskil-menu-header"><img src="Slide/odata1/tooltips/mikroskilmenuheader.png" alt=""/>4</a>
</div></div>
<span class="wsl"><a href="www.Schedule E-Booking.com"></a><span>coba</span>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="Slide/engine1/wowslider.js"></script>
	<script type="text/javascript" src="Slide/engine1/script.js"></script>

</body>
</html>

</div>';
}
echo'
<div id="gadget_kanan">';
	login();
echo'</div>';
footer();
?>