
<?php include "db_conn.php";


$sql="SELECT * FROM users";


$result = mysqli_query($conn, $sql);
  
$rowcount=mysqli_num_rows($result);
  
mysqli_close($conn);  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ielts practice</title>
	<link rel="stylesheet" type="text/css" href="css/admin2.css">
	
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="admin2.php"><h2>Ielts Practice</h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active ml-auto">
        <a class="nav-link" href="admin2.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown ml-auto">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown ml-auto">
          <a class="dropdown-item ml-auto" href="readingad.php">Reading</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item ml-auto" href="listeningad.php">Listening</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item ml-auto" href="writingad.php">Writing</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item ml-auto" href="speaking.php">Speaking</a>
        </div>
      <li class="nav-item ml-auto">
        <a class="nav-link" href="users.php">Users</a>
      </li>
      <li class="nav-item ml-auto">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      
    </ul>
  </div>
</nav>

<style>
.div1{
padding: 2vh;
}
.count{

	padding-top: 20px;
	padding-bottom: 20px;
	background-color: grey;
	color: white;
	margin-top: 20px;
	margin-bottom: 20px;

width: 40vw;
margin-left: 30vw;
margin-right: 30vw;



}

.div1{background-color: white;}

.div2{background-color: white;}
.div3{background-color: white;}


.div4{background-color: white;}


</style>>

<body>

	<div class="div1">
		
		<h1 align="center" class="mt-2">Admin pannel</h1>
	</div>

	<div class="div2 ">
		
		<h1 align="center" class="mt-2">Courses</h1>

		<div>
			<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-12" >
				<div class="card">
				  <img class="card-img-top" src="images/carosol1.png" alt="Card image">
				  <div class="card-body">
				    <p class="card-title">Reading practice</p>
				  
				    <a href="readingad.php" class="btn btn-primary">View materials</a>
				  </div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-12" >
				<div class="card">
				  <img class="card-img-top" src="images/carosol1.png" alt="Card image">
				  <div class="card-body">
				    <p class="card-title">Listening practice</p>
				   
				    <a href="listening.php" class="btn btn-primary">View materials</a>
				  </div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-12" >
				<div class="card">
				  <img class="card-img-top" src="images/carosol1.png" alt="Card image">
				  <div class="card-body">
				    <p class="card-title">Writing practice</p>
				   
				    <a href="writingad.php" class="btn btn-primary">View materials</a>
				  </div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-12" >
				<div class="card">
				  <img class="card-img-top" src="images/carosol1.png" alt="Card image">
				  <div class="card-body">
				    <p class="card-title">Speaking practice</p>
				    
				    <a href="speaking.php" class="btn btn-primary">View materials</a>
				  </div>
				</div>
			</div>
		</div>
	   </div>	
	  </div>



	
	</div>
<div align="center" class="count">
		
		

	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>