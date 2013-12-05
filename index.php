<?php
require_once"fungsi.php";
kepala();
judul ();
navigasi();
echo'
<div id="gadget_kiritampil">
	<div id="datepicker"></div>
	<div><input id="hilang" name="tanggal" value="" type="hidden"></div>
</div>';

echo'
<div id="gadget_kanan">';
	login();
echo'</div>';
footer();
?>