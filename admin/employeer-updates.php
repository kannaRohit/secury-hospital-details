<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- //header -->

<?php
// Include config file
require_once "employeer-config.php";
 
// Define variables and initialize with empty values
$firstname = $lastname = $jobrules = $company = $businessarea  = "";
$firstname_err = $lastname_err = $jobrules_err =  $company_err = $businessarea_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_firstname = trim($_POST["firstname"]);
    if(empty($input_firstname)){
        $firstname_err = "Please enter a firstname.";
    } elseif(!filter_var($input_firstname, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $firstname_err = "Please enter a valid firstname.";
    } else{
        $firstname = $input_firstname;
    }
    
    // Validate address address
    $input_lastname = trim($_POST["lastname"]);
    if(empty($input_lastname)){
        $lastname_err = "Please enter an lastname.";     
    } else{
        $lastname = $input_lastname;
    }
    
    // Validate salary
    $input_jobrules = trim($_POST["jobrules"]);
    if(empty($input_jobrules)){
        $jobrules_err = "Please enter the email.";     
    } else{
        $jobrules = $input_jobrules;
    }
    
     // Validate salary
    $input_company = trim($_POST["company"]);
    if(empty($input_company)){
        $company_err = "Please enter the password.";     
    } else{
        $company = $input_company;
    }

     // Validate address address
    $input_businessarea = trim($_POST["businessarea"]);
    if(empty($input_businessarea)){
        $businessarea_err = "Please confoirm password.";     
    } else{
        $businessarea = $input_businessarea;
    }
    

    // Check input errors before inserting in database
    if(empty($firstname_err) && empty($lastname_err) && empty($jobrules_err) && empty($company_err) && empty($businessarea_err)){
        // Prepare an update statement
        $sql = "UPDATE reg SET fname=?, lname=?, email=?, password=?, cpassword=? WHERE id=?";
         
    if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt,'ss',$param_firstname, $param_lastname, $param_jobrules, $param_company, $param_businessarea, $param_id);
            
            // Set parameters
            $param_firstname = $firstname;
            $param_lastname = $lastname;
            $param_jobrules = $jobrules;
            $param_company = $company;
            $param_businessarea = $businessarea;
      

            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: employeer.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
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
        $sql = "SELECT * FROM reg WHERE id = ?";
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
                    $firstname = $row["fname"];
                    $lastname = $row["lname"];
                    $jobrules = $row["email"];
                    $company = $row["password"];
                    $businessarea = $row["cpassword"];
             
                    
                } else{
                    // URL doesn't contain valid id. Redirect to error page
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
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: employeer-error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($firstname_err)) ? 'has-error' : ''; ?>">
                            <label>firstname</label>
                            <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>">
                            <span class="help-block"><?php echo $firstname_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($lastname_err)) ? 'has-error' : ''; ?>">
                            <label>lastname</label>
                            <textarea name="lastname" class="form-control"><?php echo $lastname; ?></textarea>
                            <span class="help-block"><?php echo $lastname_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($jobrules_err)) ? 'has-error' : ''; ?>">
                            <label>jobrules</label>
                            <input type="text" name="jobrules" class="form-control" value="<?php echo $jobrules; ?>">
                            <span class="help-block"><?php echo $jobrules_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($company_err)) ? 'has-error' : ''; ?>">
                            <label>company</label>
                            <input type="text" name="company" class="form-control" value="<?php echo $company; ?>">
                            <span class="help-block"><?php echo $company_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($businessarea_err)) ? 'has-error' : ''; ?>">
                            <label>businessarea</label>
                            <input type="text" name="businessarea" class="form-control" value="<?php echo $businessarea; ?>">
                            <span class="help-block"><?php echo $businessarea_err;?></span>
                        </div>
                     
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="employeer.php" class="btn btn-default">Cancel</a>
                    </form>
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