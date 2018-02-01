<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Feedback-Open Sesame</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/feedback.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      
    <![endif]-->
 <!-- script for disbling backbutton of browser -->
<script type = "text/javascript" >

   function preventBack(){window.history.forward();}

    setTimeout("preventBack()", 0);

    window.onunload=function(){null};

</script>
<!-- script for disbling backbutton of browser -->

    
  </head>
  <body>
    <div class="container">
    	<div id="hd" class="col-sm-5 col-xs-offset-4 btn btn-success">Enter Your Feedback</div>
     
        
        <div id="datas" class="col-lg-9 col-lg-offset-2">
	        <form method="post" action="feedback.php" >
		        <div class="form-group row ">
		          <label class="col-sm-5 col-form-label lbl">About Questions  :</label>
		          <div class="col-sm-6">
		              <textarea name="txtQuestion" class="form-control" placeholder="enter your opinion about questions " required=""></textarea>
		          </div> 	
		        </div>   
		        <div class="form-group row">
		          <label class="col-sm-5 col-form-label"> About The Application Interface :</label>
		          <div class="col-sm-6">
		              <textarea name="txtInterface" class="form-control" placeholder="enter your opinion about application interface" required></textarea>" 
		          </div> 	
		        </div>   
		        
		        <input type="submit" name="btnRegister" class="btn btn-success col-md-offset-3" value="Submit Feedback" id="btnsub">
		    </form>
		</div> 
    <?php
    include('connection.php');
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      if(isset($_POST["btnRegister"]))
      {
        $qstn=mysqli_real_escape_string($con, $_POST["txtQuestion"]);
        $interface=mysqli_real_escape_string($con, $_POST["txtInterface"]);
        session_start();
        $id=$_SESSION['userid'];
        echo $qstn.$interface.$id;
        $sql="insert into FeedbackTable values(null,'$id','$qstn','$interface')";
        if(mysqli_query($con,$sql))
        {
          header("location:index.php");
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