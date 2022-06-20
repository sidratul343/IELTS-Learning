

<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config_read.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM writing WHERE id = ?";
    
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
    <title>View writing Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <?php include 'blink.php'; ?>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<?php include 'admin_nav.php'; ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">Writing example</h1>
                    <div class="form-group">
                        <label>Title</label>
                        <p><b><?php echo $row["title"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Catagories</label>
                        <p><b><?php echo $row["type"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Summary</label>
                        <p><b><?php echo nl2br($row["paragraph"]); ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Graph to be described</label>
                        <p><b><?php echo nl2br($row["question"]); ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Answers</label>
                        <p><b><?php echo nl2br($row["answer"]); ?></b></p>
                    </div>

                    <p><a href="writingad.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>

    <?php include 'bscript.php'; ?>
</body>
</html>