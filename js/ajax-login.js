
function check_login()
{
	$.ajax
	({
		type:'POST',
		url:'checklogin.php',
		data:"username="+$('#username').val()+"&password="+$('#password').val(),
		success:function(response)
		{
			if(response=='1')
			{
				(location.href = "index.php");
			}
			else if(response=='2')
			{
				$('#username').val("");
				$('#password').val("");	
				$('#error').css({'color':'red','display':'block'}).html('User Name atau Password salah. Silahkan cek kembali');
				$('#username').focus();
			}
			else if(response=='3')
			{
				$('#error').css({'color':'red','display':'block'}).html('Semua Field Harus Diisi');
			} 
		}
	});
	
};


