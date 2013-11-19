function show(button, menu)
{

  document.getElementById(menu).style.visibility= "visible";
}

function hide(button, menu)
{
  document.getElementById(menu).style.visibility= "hidden";

}

function menu_bar(){
  
  document.write('  <div class="menu">');
  document.write('  <form>');
  document.write('  <table border="0" cellspacing="1" width="1024">');
  document.write('    <tr>');
  document.write('    <td class="menu" id="home" onmouseover="select(\'home\')" onmouseout="disselect(\'home\')" onclick="click(\'home\')"><a href="index.php">HOME</a></td>');
  
  document.write('    <td class="menu" id="info" onmouseover="show(\'info\',\'sub_info\')" onmouseout="hide(\'info\',\'sub_info\')" onclick="click(\'info\')">LIST KEHADIRAN');
  document.write('      <table class="sub" id="sub_info" cellspacing="0">');
  document.write('        <tr>');
  document.write('          <td id="absen" onmouseover="select(\'absen\')" onmouseout="disselect(\'absen\')" onclick="click(\'absen\')"><a href=""><div>Dosen Absen</div></a></td></tr>');
  document.write('        </tr>');
  document.write('	    </table></td>');
  
  document.write('	  <td class="menu" id="infoukm" onmouseover="show(\'infoukm\',\'sub_infoukm\')" onmouseout="hide(\'infoukm\',\'sub_infoukm\')" onclick="click(\'infoukm\')">INFO UKM');
  document.write('      <table class="sub" id="sub_infoukm" cellspacing="0">');
  document.write('        <tr>');
  document.write('          <td id="infoukm_1" onmouseover="select(\'infoukm_1\')" onmouseout="disselect(\'infoukm_1\')" onclick="click(\'infoukm_1\')"><a href="kategori.php?id=2"><div>Pengertian UKM</div></a></td></tr>');
  document.write('          <tr><td id="infoukm_2" onmouseover="select(\'infoukm_2\')" onmouseout="disselect(\'infoukm_2\')" onclick="click(\'infoukm_2\')"><a href="kategori.php?id=3"><div>Ide Bisnis</div></a></td></tr>');
  document.write('          <tr><td id="infoukm_3" onmouseover="select(\'infoukm_3\')" onmouseout="disselect(\'infoukm_3\')" onclick="click(\'infoukm_3\')"><a href="kategori.php?id=4"><div>Tips UKM</div></a></td>');
  document.write('        </tr>');
  document.write('	    </table></td>');
  
  document.write('    <td class="menu" id="peluangusaha" onmouseover="show(\'peluangusaha\',\'sub_peluangusaha\')" onmouseout="hide(\'peluangusaha\',\'sub_peluangusaha\')" onclick="click(\'peluangusaha\')">PELUANG USAHA');
  document.write('      <table class="sub" id="sub_peluangusaha" cellspacing="0">');
  document.write('        <tr>');
  document.write('          <td id="peluangusaha_1" onmouseover="select(\'peluangusaha_1\')" onmouseout="disselect(\'peluangusaha_1\')" onclick="click(\'peluangusaha_1\')"><a href="kategori.php?id=5"><div>Penawaran Bisnis</div></a></td></tr>');

  document.write('        </tr>');
  document.write('	    </table></td>');
  
  
  document.write('    <td class="menu" id="ketentuan" onmouseover="select(\'ketentuan\')" onmouseout="disselect(\'ketentuan\')" onclick="click(\'ketentuan\')"><a href="forum.php"><div>FORUM</div></a></td>');
  document.write('  </tr>');
  document.write('  </table>');
  document.write('</form>');
  document.write('</div>');
}

