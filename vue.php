<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Libre || Non</title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

<script language="javascript" type="text/javascript">
window.setInterval(function verif()
{
	if(window.XMLHttpRequest)
		xhr=new XMLHttpRequest();
		
	xhr.onreadystatechange = function()
	{
		if((xhr.readyState==4) && (xhr.status==200))
		{
		
			//alert(xhr.responseText);
			//	var btn = document.getElementById('state_btn');

		
			if(xhr.responseText=='Libre')
			{
					if($('#state_btn').hasClass('button-flat-caution'))
					{
						$('#state_btn').removeClass('button-flat-caution');
						$('#state_btn').addClass('button-flat-action');
					}
					else if(!$('#state_btn').hasClass('button-flat-action'))
						$('#state_btn').addClass('button-flat-action');
								$('#state_btn').attr("href", "Libre");
									$('#state_btn').text('Welcome');
										$('#state_btn').removeClass('disabled');


			}
			
			else if(xhr.responseText=='Non-Libre')
			{

			if($('#state_btn').hasClass('button-flat-action'))
					{
						$('#state_btn').removeClass('button-flat-action');
						$('#state_btn').addClass('button-flat-caution');
					}
					else if(!$('#state_btn').hasClass('button-flat-caution'))
						$('#state_btn').addClass('button-flat-caution');
	
	
		$('#state_btn').attr("href", "Occupe");
	$('#state_btn').text('Not home');
		$('#state_btn').removeClass('disabled');


			}
			
			else
		{
	
if($('#state_btn').hasClass('button-flat-action'))
{
	$('#state_btn').removeClass('button-flat-action');
}
else if($('#state_btn').hasClass('button-flat-caution'))
{
	$('#state_btn').removeClass('button-flat-caution');
}

if(!$('#state_btn').hasClass('disabled'))
{
	$('#state_btn').addClass('disabled');
			$('#state_btn').attr("href", "#");

}

 
$('#state_btn').text('Loading..');


		}
			}
		
	};
	
	xhr.open('GET','./etat.html',true);
	xhr.send(null);
	
},5000);


</script>

<link rel="stylesheet" href="css/font-awesome.min.css"> <link rel="stylesheet" href="css/buttons.css">

</head>



<body>

<a id="state_btn" class="button button-circle">Loading..</a>




</body>
</html>
