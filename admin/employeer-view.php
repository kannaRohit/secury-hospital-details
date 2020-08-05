<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "employeer-config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM reg WHERE id = ?";
    
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
                $firstname = $row["fname"];
                $lastname = $row["lname"];
                $jobrules = $row["email"];
                $company = $row["password"];
                $businessarea = $row["cpassword"];

            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: employeer-error.php");
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
    header("location: employeer-error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Record</h1>
                    </div>
                    <div class="form-group">
                        <label>firstname</label>
                        <p class="form-control-static"><?php echo $row["fname"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>lastname</label>
                        <p class="form-control-static"><?php echo $row["lname"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>jobrules</label>
                        <p class="form-control-static"><?php echo $row["email"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>company</label>
                        <p class="form-control-static"><?php echo $row["password"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>businessarea</label>
                        <p class="form-control-static"><?php echo $row["cpassword"]; ?></p>
                    </div>
                   
                    <p><a href="employeer.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
                
    </div>
<!-- //footer -->

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>