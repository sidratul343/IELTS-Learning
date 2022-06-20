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
color:black;
}
.item1 { grid-area: header; }
.item2 { grid-area: menu; }
.item3 { grid-area: main; 
;
}
.item4 { grid-area: right; }
.item5 { grid-area: footer; }


.t{

border-radius: 25px;
 
color:red;
}

.tt{

border-radius: 25px;
  background: #959bed;
color:black;
font-size: 20px;
padding:5px;
}
.im{
width: 600px;
height: 700px;
display:block;
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
  <div class="item1">IELTS TASK 1</div>
  <div class="item3">
<img src="all3.png" alt="Paris" class = "im">

</div>  
  <div class="item4">
<p class = "all" style = "background-color: red; border-radius: 25px; color:white;">Tips for Task 1</p>
<p class = "tt">IELTS Writing Task 1 requires to write at least 150 words<br> in response to a graph, table, chart or process. </p>
<p class = "tt">You need to write 3-4 paragraphs and 150 words.<br> If you don’t, you will be penalized.</p>
<p class = "tt">Write an overview as you second sentence of your introduction.<br> Look at the beginning and the end of the chart to help determine your overview.</p>
<p class = "tt">Describe the most general trends in second paragraph,<br> including the most striking characteristics.</p>
<p class = "tt">You don’t have to write a conclusion, but it makes the writing seem more<br>complete if you do.</p>
<p class = "tt">You need to add linker to help your essay to help with its<br>
cohesion and coherence; in other words, it’s flow. Here are some useful expressions:<br>
 in addition, furthermore, however, although.</p>
<p class = "tt">Don’t forget spelling and punctuation count towards accuracy.</p>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
