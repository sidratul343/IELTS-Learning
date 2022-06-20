<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/validation_style.css">
</head>
<style>
  body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  flex-direction: column;
  background-image: url('images/edu4.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

form {
  width: 500px;
  height:400px;
  padding: 20px;
  border: 5px solid #ccc;
  background: white;
  opacity: 0.85;
  border-radius: 10px;
}

h2 {
  text-align: center;
  margin-bottom: 10px;
}

</style>

<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="user_signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>