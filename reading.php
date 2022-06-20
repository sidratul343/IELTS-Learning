
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Reading Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>

    	body {
  background-image: url("images/back6.png");
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.fa-eye {
  color: black;
}

	
        .wrapper{
            width: 700px;
    		margin: 0 auto;
            
  			
        }
      table{
		  
       		 border-collapse: collapse;
       		
}

        	
     
        .tab {
                border-collapse:separate;
                border-spacing:10px 20px;

            
            }
         
 		
         tr
			{
		   	 line-height:40px;
		   	  background-color: #cccbcb;
		   	 color: black; 
		   	font-size: 1em;
		
       		 border-collapse: collapse;
       
			}

			td {

				text-align: center;
			}
			th {

				text-align: center;
			}

    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>

<body>
	
<?php include 'navhome.php'; ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Reading test examples</h2>
                    
                    <?php
                    // Include config file
                    require_once "config_read.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM reading";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped tab"
                            align="center" style="margin: 0px auto;">';
                                echo "<thead>";
                                    echo "<tr>";
                                        
                                        echo "<th>Title</th>";
                                        echo "<th>Catagory</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        
                                        echo "<td>" . $row['title'] . "</td>";
                                        echo "<td>" . nl2br($row['type']) . "</td>";
                                        echo "<td>";
                                            echo '<a href="read_read.php?id='. $row['id'] .'"  title="View examples" data-toggle="tooltip"><span class="fa fa-eye  fa-lg "></span></a>';
                                           
                                            
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

