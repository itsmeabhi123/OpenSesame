<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Open Sesame</title>

  </head>
  <body>
    <div class="container">
      <div class="col-md-offset-5 " id="imglogo">
        <img src="images/logo.jpg" alt="bk" width=200px height=200px >
      </div>
      <form method="post" action="index.php">
        <div class="form-group row">
          <div id ="pass" class="col-xs-3 col-sm-offset-4  input-group">
            <input type="password" name="txtPassword" placeholder="password" required="" class="form-control">
            <span class=" input-group-btn">
            	<input type="submit" name="btnLogin" class="btn btn-primary col-md-offset-4 " value="Login" id="btnsub">
            </span>
          </div>
          <?php
		 	include('connection.php');
		 	if($_SERVER["REQUEST_METHOD"]=="POST")
		 	{
		 		if(isset($_POST["btnLogin"]))
		 		{

		 			// $sql="select * from LoginTable where ";
		 			$pass=mysqli_real_escape_string($con, $_POST['txtPassword']);
		 			// echo $pass;
		 			$sql="select * from LoginTable where Password='$pass'";
		 			if($result=mysqli_query($con,$sql))
		 			{
		 				if(mysqli_num_rows($result)==1)
		 				{
		 					echo "   <div class='col-lg-2 col-lg-offset-6' id='status'>
		 		 						<label > </label>
		  							 </div>";
		  					while($row=mysqli_fetch_array($result))
		  						{
		  							if($row["UserType"]=="contestant")
		  								header("location:registration.php");	
		  							if($row["UserType"]=="admin")
		  								header("location:adminpanel.php");
		  						}
		 				}
		 				else
		 				{
		 					echo "   <div class='col-lg-2 col-lg-offset-6' id='status'>
		 		 						<label > incorrect password</label>
		  							 </div>";
		 				}
		 			}
		 		
		 		}
		 	}
		  ?>
		
         </div>
      </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>