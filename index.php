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


</div>';
}
echo'
<div id="gadget_kanan">';
	login();
echo'</div>';
footer();
?>