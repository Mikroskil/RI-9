<?php
require_once"fungsi.php";
kepala();
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
	<link href="carousel.css" rel="stylesheet">
	<script type="text/javascript" src="Slide/engine1/jquery.js"></script>
	</head>
<body style="background-color:#d7d7d7">
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="wkwkwkwk.png" />
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you are viewing this page via a <code></code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="xperia-tipo-dual-message-controlyourcosts-460x250.png" />
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="Sony-Xperia-tipo-dual-1.jpeg" />
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

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

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../docs-assets/js/holder.js"></script>