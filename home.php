<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

 
<!DOCTYPE html>
<html>
<head>
	<title>Ielts practice</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>
<style>	
body {
  background-image: url("images/back5.png");
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

h2{
	padding: 4px;
	color: white;
	 opacity: 0.6;
  background-color: black;
}

.aboutimg{
	background-image: url("images/edu1.png");
    background-repeat: no-repeat;

  background-size: cover;
}


button {
 background-color:#555555; /* Green */
  border: none;
  color: white;
  padding: 15px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  border-radius: 10px;
  cursor: pointer;
}

.btn{
  background-color:#555555; /* Green */
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
  
  cursor: pointer;
}

.divcontact{

	width: 500px;
  height:400px;
  padding: 10px;
  
}

</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php"><h1>Ielts Practice</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active ml-auto">
        <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown ml-auto">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown ml-auto">
          <a class="dropdown-item ml-auto" href="reading.php">Reading</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item ml-auto" href="task_1.php">Writing tips</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item ml-auto" href="writing.php">Writing</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item ml-auto" href="tips.php">Writing Basic</a>
        </div>
     
      <li class="nav-item ml-auto">
        <a class="nav-link" href="home.php">Contact</a>
      </li>
      <li class="nav-item ml-auto">
        <a class="nav-link" href="logout.php">Log out</a>
      </li>
      
    </ul>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/carosol1.png" alt="ielts img" width="1000" height="200">
      <div class="carousel-caption">
        <h3>Prepare for IELTS at home</h3>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/carosol6.png" alt="ielts img" width="1000" height="200">
      <div class="carousel-caption">
        <h3>Prepare for IELTS at home</h3>

      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/carosol7.jpg" alt="ielts img" width="1000" height="200">
      <div class="carousel-caption">
        <h3>Prepare for IELTS at home</h3>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="pt-4 pb-0">
		
		<h2 class="text-center">About us</h2>
	</div>
	<div class="container-fluid pt-4">
		<div class="row px-5">
			<div class="col-lg-6 col-md-6 col-12 pr-5 pl-5" >
				<img class="aboutimg" class="img-fluid aboutimg">
				
			</div>
		
		
			<div class="col-lg-6 col-md-6 col-12 pt-1 pr-5 pl-5 ">
				<h4>IELTS practice</h4>
				<p>This is an IELTS practice site where there are some courses available for anyone to practice. This site mostly covers Reading and writing exams in ielts. </p>
				<a href="about.php">check more</a>				
			</div>
		</div>
	</div>

</section>

<section>
	<div class="pt-2.7">
		<h2 class="text-center">Courses</h2>
	</div>
	<div class="container-fluid pt-5">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-12 pl-4 pr-4 pt-3 pb-3" >
				<div class="card">
				  <img class="card-img-top" src="images/carosol1.png" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Reading practice</h4>
				    <p class="card-text">Have to answer questions after reading the given text meterial</p>
				    <a href="reading.php" class="btn btn-primary">View Materials</a>
				  </div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-12 pl-4 pr-4 pt-3 pb-3" >
				<div class="card">
				  <img class="card-img-top" src="images/carosol1.png" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Writing Tips</h4>
				    <p class="card-text">Giving you some tips on how to do good writing on your IELTS exam</p>
				    <a href="task_1.php" class="btn btn-primary">View materials</a>
				  </div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-12 pl-4 pr-4 pt-3 pb-3" >
				<div class="card">
				  <img class="card-img-top" src="images/carosol1.png" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Writing practice</h4>
				    <p class="card-text">Have to write paragraphs on desired topics or completing stories</p>
				    <a href="writing.php" class="btn btn-primary">View materials</a>
				  </div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-12 pl-4 pr-4 pt-3 pb-3" >
				<div class="card">
				  <img class="card-img-top" src="images/carosol1.png" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Writing Basics</h4>
				    <p class="card-text">This covers some basic key things in writing exams and guidlines</p>
				    <a href="tips.php" class="btn btn-primary">View materials</a>
				  </div>
				</div>
			</div>

		</div>
	</div>

</section>

<section class="my-5">
	
	<div class="py-4">
		<h2 class="text-center">Contact us</h2>

	</div>
	<div class="w-50 m-auto divcontact">
		<form action="comment.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>

			<div class="form-group">
				<label>Email Id</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Comment</label>
				<textarea class="form-control" name="comment"> 
				</textarea> 

			</div>
			<div>
				<button type="submit" class="btn btn-primary">Submit</button>	
			</div>
		</form>
	</div>	
</section>>

<footer>
	<p class="p-3 bg-dark text-white">@ Daffodil International University</p>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>