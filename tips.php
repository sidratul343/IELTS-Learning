<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>


    body {
  background-image: url("images/back5.png");
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.item1 { grid-area: header; }
.item2 { grid-area: menu; }
.item3 { grid-area: main; }
.item4 { grid-area: right; }
.item5 { grid-area: footer; }

.grid-container {
  display: grid;
  grid-template-areas:
    'header header header header header header'
    'main main main right right right'
    'footer footer footer footer footer footer';
  grid-gap: 10px;

  padding: 10px;
}

.grid-container > div {

  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}
.all{
background-color: white;
}
.t{

border-radius: 25px;
  background: #070c63;
color:white;
}

.tt{

border-radius: 25px;
  background: #f7bf16;
color:black;
}
</style>
</head>
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
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item ml-auto">
        <a class="nav-link" href="home.php">Contact</a>
      </li>
      <li class="nav-item ml-auto">
        <a class="nav-link" href="logout.php">Log out</a>
      </li>
      
    </ul>
  </div>
</nav>

<div class="grid-container">
  <div class="item1">IELTS WRITING BASIC</div>
  <div class="item3">
<p class = "all">Do</p>
<p class = "t">Analyse the topic</p>
<p class = "t">respond all the parts of the prompt fully</p>
<p class = "t">Plan essay</p>
<p class = "t">Paraphrase the task</p>
<p class = "t">Divide your essay</p>
<p class = "t">Profite some food for thought</p>
<p class = "t">Use Linking words</p>
<p class = "t">Use complex sentence</p>
</div>  
  <div class="item4">
<p class = "all">Do not</p>
<p class = "tt">Avoid being personal</p>
<p class = "tt">Do not write less then 250 words</p>
<p class = "tt">Do not use simple sentence</p>
<p class = "tt">Do not copy the task</p>
<p class = "tt">Do not repeat same sentence</p>
<p class = "tt">Do not repeat same vocabulary</p>
<p class = "tt">Do not use simple vocabulary</p>
<p class = "tt">Do not use emotive language</p>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
