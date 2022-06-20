<?php
// Include config file
require_once "config_read.php";
 
// Define variables and initialize with empty values
$title = $type = $paragraph = $question = $answer = "";
$title_err = $type_err = $paragraph_err = $question_err = $answer_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Please enter a title.";     
    } else{
        $title = $input_title;
    }
    
    $input_type = trim($_POST["type"]);
    if(empty($input_type)){
        $type_err = "Please enter catagorie.";     
    } else{
        $type = $input_type;
    }
    
    $input_paragraph = trim($_POST["paragraph"]);
    if(empty($input_paragraph)){
        $paragraph_err = "Please enter paragraph.";     
    } else{
        $paragraph = $input_paragraph;
    }

    $input_question = trim($_POST["question"]);
    if(empty($input_question)){
        $question_err = "Please enter questions.";     
    } else{
        $question = $input_question;
    }
    

    $input_answer = trim($_POST["answer"]);
    if(empty($input_answer)){
        $answer_err = "Please enter answers.";     
    } else{
        $answer = $input_answer;
    }
    
    if(empty($title_err) && empty($type_err) && empty($paragraph_err) && empty($question_err) && empty($answer_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO reading (title, type, paragraph, question, answer) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_title, $param_type, $param_paragraph, $param_question, $param_answer);
            
            // Set parameters
            $param_title = $title;
            $param_type = $type;
            $param_paragraph = $paragraph;
            $param_question = $question;
            $param_answer = $answer;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: readingad.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM reading WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
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
                    $paragraph = $row["paragraph"];
                    $question = $row["question"];
                    $answer = $row["answer"];
                
                } else{
                    // URL doesn't contain valid id. Redirect to error page
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
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Example</title>
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
                    <h2 class="mt-5">Edit example</h2>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control <?php echo (!empty($title_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $title; ?>">
                            <span class="invalid-feedback"><?php echo $title_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Catagories</label>
                            <input type="text" name="type" class="form-control <?php echo (!empty($type_err)) ? 'is-invalid' : ''; ?>"><?php echo nl2br($type); ?></input>
                            <span class="invalid-feedback"><?php echo $type_err;?></span>
                        </div>
                        
                        <div class="form-group">
                            <label>Paragraph</label>
                            <textarea name="paragraph" class="form-control <?php echo (!empty($paragraph_err)) ? 'is-invalid' : ''; ?>"><?php echo nl2br($paragraph); ?></textarea>
                            <span class="invalid-feedback"><?php echo $paragraph_err;?></span>
                        </div>

                        <div class="form-group">
                            <label>Questions</label>
                            <textarea name="question" class="form-control <?php echo (!empty($question_err)) ? 'is-invalid' : ''; ?>"><?php echo nl2br($question); ?></textarea>
                            <span class="invalid-feedback"><?php echo $question_err;?></span>
                        </div>

                        <div class="form-group">
                            <label>Answers</label>
                            <textarea name="answer" class="form-control <?php echo (!empty($answer_err)) ? 'is-invalid' : ''; ?>"><?php echo nl2br($answer); ?></textarea>
                            <span class="invalid-feedback"><?php echo $answer_err;?></span>
                        </div>

                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="readingad.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
    <?php include 'bscript.php'; ?>
</body>
</html>
