
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
				(location.href = "index.php")
			}
			else if(response=='2')
			{
				$('#error').css({'color':'red','display':'block'}).html('Login credentials incorrect!')
			}
			else if(response=='3')
			{
				$('#error').css({'color':'red','display':'block'}).html('Please fill in all fields')
			} 
		}
	});
	
};


