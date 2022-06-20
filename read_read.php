

<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config_read.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM reading WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $title = $row["title"];
                $type = $row["type"];
                $paragraph = nl2br($row["paragraph"]);
                $question = nl2br($row["question"]);
                $answer = nl2br($row["answer"]);

            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Reading Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <?php include 'blink.php'; ?>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>


body {
  background-image: url("images/back6.png");
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
        .wrapper{
            width: 50vw;
          
            margin: 0 auto;
            margin-top: 6vh;
            background-color: #7E98A1;
            opacity: .8;
        border-radius: 10px;
        }

label{


    font-weight: bold;
    font-size: 1em;
}
    .p1{
padding: 2px;
           margin-top: 1vh;
    margin-bottom: 2vh;
    padding: 1vh;
    font-size: 1.2em;
    border: 3px solid white;
  text-align: center;
  background-color: #2F316C;
  color: white;
  border-radius: 20px;

}

  .p2{
padding: 3px;
           margin-top: 1vh;
    margin-bottom: 2vh;
    font-size: .8em;
    border: 2px solid white;
  text-align: center;
  background-color: #CCDFC6;
  color: black;
  border-radius: 10px;

}

 .p3{
padding: 3px;
           margin-top: 1vh;
    margin-bottom: 2vh;
    font-size: .8em;
    border: 2px solid white;
  text-align: center;
  background-color: #CCDFC6;
  color: black;
  border-radius: 10px;

}

.show{
    padding-top: 2px;
    margin-bottom: 6px;
    font-size: 1em;
}

    .p4{
        display:none;
           margin-top: 1vh;
    margin-bottom: 5vh;
    font-size: 0.8em;
    border: 1px solid white;
  text-align: center;
  background-color: #038301;
  color: white;
  border-radius: 10px;
    }


    </style>
</head>

<body>



<?php include 'navhome.php'; ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-4 mb-2">Reading example</h2>
                    <div class="form-group">
                        <label>Title</label>
                        <p class="p1"><b><?php echo $row["title"]; ?></b></p>
                    </div>
                    
                    <div class="form-group">
                        <label>Paragraph</label>
                        <p class="p2"><b><?php echo nl2br($row["paragraph"]); ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Questions</label>
                        <p class="p3"><b><?php echo nl2br($row["question"]); ?></b></p>
                    </div>
                    <div class="form-group show">
                        <button class="show btn btn-info" id="formButton">Answers</button>
                        <p class="p4 pt-3 pb-3" id="hidden"><b><?php echo nl2br($row["answer"]); ?></b></p>
                    </div>

                    <script>
                        $(document).ready(function() {
                          $("#formButton").click(function() {
                            $("#hidden").toggle();
                          });
                        });
                    </script>

                    <p><a href="reading.php" class="btn btn-secondary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>

    <?php include 'bscript.php'; ?>
</body>
</html>