<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration-Open Sesame</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/registration.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      
    <![endif]-->
  </head>
  <body>
    <div class="container">
    	<div id="hd" class="col-sm-5 col-xs-offset-4 btn btn-primary">Register</div>
     
        
        <div id="datas" class="col-lg-7 col-lg-offset-3">
	        <form method="post" action="registration.php" >
		        <div class="form-group row ">
		          <label class="col-sm-4 col-form-label"> Dcod Id :</label>
		          <div class="col-sm-6">
		              <input type="text" name="txtId" class="form-control" placeholder="dcod id " required="">
		          </div> 	
		        </div>   
		        <div class="form-group row">
		          <label class="col-sm-4 col-form-label"> Contestant Name :</label>
		          <div class="col-sm-6">
		              <input type="text" name="txtName" class="form-control" placeholder="enter name" required>
		          </div> 	
		        </div>   
		        <div class="form-group row">
		          <label class="col-sm-4 col-form-label"> College Name:</label>
		          <div class="col-sm-6">
		              <input type="text" name="txtCollegeName" class="form-control" placeholder="college name" required >
		          </div> 	
		        </div> 
		        <input type="submit" name="btnRegister" class="btn btn-primary col-md-offset-3" value="Open Sesame" id="btnsub">
		    </form>
		</div> 
    <?php
    include('connection.php');
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      if(isset($_POST["btnRegister"]))
      {
        $id=mysqli_real_escape_string($con, $_POST["txtId"]);
        $name=mysqli_real_escape_string($con, $_POST["txtName"]);
        $college=mysqli_real_escape_string($con, $_POST["txtCollegeName"]);
        session_start();
        $_SESSION["userid"]=$id;
        $_SESSION["username"]=$name;
        $_SESSION["college"]=$college;
        $sql="insert into ContestantTable values(null,'$id','$name','$college')";
        if(mysqli_query($con,$sql))
        {
          header("location:instruction.php");
        }
      }
    }
    ?>
	  
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>