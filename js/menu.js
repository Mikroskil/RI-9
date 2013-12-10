function show(button, menu)
{

  document.getElementById(menu).style.visibility= "visible";
}

function hide(button, menu)
{
  document.getElementById(menu).style.visibility= "hidden";

}
function write(a)
{
	document.write(a);
}

function menu_bar()
{
	write('<div class="menu">');
	write('<form>');
	write('  <table border="0" cellspacing="1" width="1024">');
	write('    <tr>');
	
	write('    <td class="menu" id="home" onmouseover="select(\'home\')" onmouseout="disselect(\'home\')" onclick="click(\'home\')"><a href="index.php">BOOKING JADWAL</a></td>');
	write('    <td class="menu" id="home" onmouseover="select(\'home\')" onmouseout="disselect(\'home\')" onclick="click(\'home\')"><a href="index.php">JADWAL</a></td>');
	write('  </tr>');
	write('  </table>');
	write('</form>');
	write('</div>');
	


}

