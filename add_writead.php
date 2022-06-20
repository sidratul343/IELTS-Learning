<?php
// Include config file
require_once "config_read.php";
 
// Define variables and initialize with empty values
$title = $type = $paragraph = $question = $answer = "";
$title_err = $type_err = $paragraph_err = $question_err = $answer_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
        
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


    $input_question = addslashes(file_get_contents($_FILES["question"]["tmp_name"]));
    

    $input_answer = trim($_POST["answer"]);
    if(empty($input_answer)){
        $answer_err = "Please enter answers.";     
    } else{
        $answer = $input_answer;
    }

    
    // Check input errors before inserting in database
    if(empty($title_err) && empty($type_err) && empty($paragraph_err) && empty($question_err) && empty($answer_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO writing (title, type, paragraph, question, answer) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssbs", $param_title, $param_type, $param_paragraph, $param_question, $param_answer);
            
            // Set parameters
            $param_title = $title;
            $param_type = $type;
            $param_paragraph = $paragraph;
            $param_question = $input_question;
            $param_answer = $answer;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: writingad.php");
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
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add writing examples</title>
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
                    <h2 class="mt-5">Create new test example</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control <?php echo (!empty($title_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $title; ?>">
                            <span class="invalid-feedback"><?php echo $title_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Catagories</label>
                            <input type="text" name="type" class="form-control <?php echo (!empty($type_err)) ? 'is-invalid' : ''; ?>"><?php echo $type; ?>
                            <span class="invalid-feedback"><?php echo $type_err;?></span>
                        </div>
                        
                        <div class="form-group">
                            <label>Summary</label>
                            <textarea name="paragraph" class="form-control <?php echo (!empty($paragraph_err)) ? 'is-invalid' : ''; ?>"><?php echo $paragraph; ?></textarea>
                            <span class="invalid-feedback"><?php echo $paragraph_err;?></span>
                        </div>

                        <div class="form-group">
                            <label>Graph</label>

                            <input type="file" name="question" id="question" class= "form-control"/>
                        </div>

                        <div class="form-group">
                            <label>Answers</label>
                            <textarea name="answer" class="form-control <?php echo (!empty($answer_err)) ? 'is-invalid' : ''; ?>"><?php echo $answer; ?></textarea>
                            <span class="invalid-feedback"><?php echo $answer_err;?></span>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="writingad.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
    <?php include 'bscript.php'; ?>
</body>
</html>