<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>IELTS practice</title>
	<link rel="stylesheet" href="css/index.css">
	<?php include 'blink.php';?>

</head>

<style >
	body {
  background-image: url('images/edu4.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<style>
	
	h2 {
	margin-top: 2vh;
	margin-bottom: 5vh;
	font-size: 3.5em;
  text-align: center;
  background-color: white;
  color: #black;
  opacity: 0.5;
}

h3 {
  text-align: center;
	font-size: 2em;
  color: white;
  opacity: 0.6;
  background-color: black;
  
}
span {
  
	font-size: 1.5em;
	color: black;
 }


h1{
	
	position: relative;
	font-size: 4em;
	color: #cccbcb;
	text-transform: uppercase;
	border-bottom: 5px 560px solid #222;
	letter-spacing: 0.08em;
	

}

h1:before
{
content: attr(data-text);
position: absolute;
top: 0;
left: ;
width: 100%;
color: #03a9f4;
overflow: hidden;
border-bottom: 5px solid #03a9f4;
animation: animate 10s linear infinite;

}

@keyframes animate{
	0%{
		width: 0;
	}
	100%
	{
		width: 555px;
	}
}


</style>>

<body>
	<div class="div11" >
		<h1 data-text="IELTS">IELTS Practice</h1>
	</div>

<div>
    <h2>Prepare for IELTS at home</h2>
    
    <h3>Ace your Ielts exam</h3>
    
	<h3>Conquer your dreams</h3>
</div>

<div class="container">
<a href="user_login.php">
<div class="box-1" >

  <div class="btn btn-one">
    <span>LOG IN</span>
  </div>
</div>
</a>
<a href="user_signup.php">
<div class="box-1" >

  <div class="btn btn-one">
    <span>SIGN UP</span>
  </div>
</div>
</a>
</div>


<footer>
	<p class="text-white">@ Daffodil International University</p>
	<hr class="w3-border-grey" style="margin:auto;width:40%">
</footer>

<?php include 'bscript.php';?>
</body>
</html>
