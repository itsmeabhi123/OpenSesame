<?php
$c=$_COOKIE['timeleft'];
// echo $c;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Level 2- OpenSesame</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/level.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <!-- follows the  timer js linking -->
  <script language="javascript" type="text/javascript" src="libraries/p5.js"></script>
  <script language="javascript" src="libraries/p5.dom.js"></script>
  <script language="javascript" src="libraries/p5.sound.js"></script>
  <script language="javascript" type="text/javascript" >
    // storing int js varible from php
   var time='<?php echo $c;?>';
  </script>
  <script language="javascript" type="text/javascript" src="sketch.js"></script>
  <!-- timer js linking ended -->
 <!-- script for disbling backbutton of browser -->
<script type = "text/javascript" >

   function preventBack(){window.history.forward();}

    setTimeout("preventBack()", 0);

    window.onunload=function(){null};

</script>
<!-- script for disbling backbutton of browser -->


</head>
<body>
	
  <div class="container-fluid">  
      <h2>Level 2</h2>
      <div id="qstn" class="col-lg-8">
       
        <?php
          include('connection.php');
          // echo "hello";
          $sql="select * from QuestionTable where QuestionNo=2";
          if($result=mysqli_query($con,$sql))
          {
            while($row=mysqli_fetch_array($result))
            {
              $qstn=$row["Question"];
              $pass=$row["Answer"];

              // echo $qstn.$pass;
            }
          }

        ?>
        <img class="col-lg-11 " src="<?= $qstn ?>" alt="hellooooooooo" />
      </div>

      <div id="timer" class="col-lg-3 col-lg-offset-1">
      	<span class="min col-lg-5 label label-success" >Time Left</span>
      	<span class="sec col-lg-4 label label-danger" id="counttimer">00</span>

      </div>

      <div id="answer" class="col-lg-3">
  	  <form action="level2.php" method="post">	
        <div class="form-group row" id="status">
          <input type="text" class="form-control col-lg-2" name="txtAnswer" required="" >
  		    <input type="submit" name="btnSubmit" class="btn btn-primary pull-right" value="Lets OpenSesame" id="btnsub">
           <?php
            include('connection.php');
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
              if(isset($_POST["btnSubmit"]))
              {
               $typepass=mysqli_real_escape_string($con,$_POST["txtAnswer"]);
                        if($typepass == $pass)
                        {
                          session_start();
                          $name=$_SESSION["username"];
                          $id=$_SESSION["userid"];
                          $sql="update ScoreTable set Level2=10,Total=20 where DcodId='$id' and ContestantName='$name'";
                          if(mysqli_query($con,$sql))
                          {}
                          else{
                            echo "error";
                          }
                          // accessing from cookie
                          $c=$_COOKIE["timeleft"];
                          $_SESSION['cnt']=$c;
                          // ended accesing cookie
                          header("location:level3.php");
                          echo "<label></label>";
                        }
                        else
                        {
                          echo "<label> incorrect</label>";
                        }
              }
            }
            ?>
  		</div>
  	  </form>
      </div>

	 </div>
  
	
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>