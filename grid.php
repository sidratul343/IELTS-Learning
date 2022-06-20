<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/gridstyle.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

	<div class="wrap">
	<style>
		import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');


*{ margin: 0; padding: 0; box-sizing: border-box; 
	font-family: 'Poppins', sans-serif;} 



.div1{

	display: flex;
	justify-content:center;
	align-items:flex-start;
	
}


h1{


	position: relative;
	font-size: 4em;
	color: #222;
	
	border-bottom: 5px solid #222;
	letter-spacing: 0.05em;
	


}

h1:before
{
content: attr(data-text);
position: absolute;
top: 0;
left: 0;
width: 100%;
color: #03a9f4;
overflow: hidden;
border-bottom: 5px solid #03a9f4;
animation: animate 8s linear infinite;

}

@keyframes animate{
	0%{
		width: 0;
	}
	100%
	{
		width: 100%;
	}
}
	</style>	
	<div class="div1">
		
	<h1 data-text="IELTS.com">IELTS.com</h1>

	</div>
	<div class="div2"></div>
	<div class="div3"></div>
	<div class="div4">box3</div>
	<div class="div5">side</div>
	</div>	



</body>
</html>