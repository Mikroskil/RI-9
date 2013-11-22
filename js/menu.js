function show(button, menu)
{

  document.getElementById(menu).style.visibility= "visible";
}

function hide(button, menu)
{
  document.getElementById(menu).style.visibility= "hidden";

}

function menu_bar()
{
	document.write('  <div class="menu">');
	document.write('  <form>');
	document.write('  <table border="0" cellspacing="1" width="1024">');
	document.write('    <tr>');
	
	document.write('    <td class="menu" id="home" onmouseover="select(\'home\')" onmouseout="disselect(\'home\')" onclick="click(\'home\')"><a href="index.php">HOME</a></td>');
	
	document.write('    <td class="menu" id="home" onmouseover="select(\'home\')" onmouseout="disselect(\'home\')" onclick="click(\'home\')"><a href="index.php">HOME</a></td>');
	
	document.write('    <td class="menu" id="home" onmouseover="select(\'home\')" onmouseout="disselect(\'home\')" onclick="click(\'home\')"><a href="index.php">HOME</a></td>');
	
	document.write('    <td class="menu" id="home" onmouseover="select(\'home\')" onmouseout="disselect(\'home\')" onclick="click(\'home\')"><a href="index.php">HOME</a></td>');
	
	document.write('    <td class="menu" id="home" onmouseover="select(\'home\')" onmouseout="disselect(\'home\')" onclick="click(\'home\')"><a href="index.php">HOME</a></td>');
	
	document.write('    <td class="menu" id="home" onmouseover="select(\'home\')" onmouseout="disselect(\'home\')" onclick="click(\'home\')"><a href="index.php">HOME</a></td>');
	
	document.write('    <td class="menu" id="home" onmouseover="select(\'home\')" onmouseout="disselect(\'home\')" onclick="click(\'home\')"><a href="index.php">HOME</a></td>');
	
	document.write('    <td class="menu" id="home" onmouseover="select(\'home\')" onmouseout="disselect(\'home\')" onclick="click(\'home\')"><a href="index.php">HOME</a></td>');

	document.write('  </tr>');
	document.write('  </table>');
	document.write('</form>');
	document.write('</div>');
	


}

