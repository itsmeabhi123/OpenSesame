<!DOCTYPE html>
<html>
<head>
	<title>Instruction- OpenSesame</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/instruction.css" rel="stylesheet">
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
		<div id="instr" class="col-lg-8 col-lg-offset-3">
			<h3>Instructions</h3>
			<ul>
				<li>You got a total of 30 minutes to complete the Open Sesame</li>
				<li>You have 10 levels to decode</li>
				<li>You have to complete the current level to proceed to the next one.</li>
				<li>No levels can be skipped.</li>
				<li>Decision of the co-ordinator is final</li>
			</ul>
			 <form action="instruction.php" method="post">	
		<input type="submit" name="btnRegister" class="btn btn-primary col-md-offset-3" value=" Lets OpenSesame" id="btnsub">
	  </form>		
		</div> 
	 
	 </div>
	 <?php
    include('connection.php');
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      if(isset($_POST["btnRegister"]))
      {
         session_start();
            $name=$_SESSION["username"];
            $id=$_SESSION["userid"];
            echo $name.$id;
            $sql1="insert into ScoreTable values(null,'$id','$name',0,0,0,0,0,0,0,0,0,0,0)";
            if(mysqli_query($con,$sql1))
            {

            }
            else
            {
              echo "         errorhai";
            }
            $_SESSION['cnt']=1800;
            setcookie("timeleft",1800);
       		header("location:level1.php");
        // session_start();
        // $name=$_SESSION["username"];
        // $c=$_SESSION["college"];
        
      }
    }
    ?>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>