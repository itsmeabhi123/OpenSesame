<!DOCTYPE html>
<html>
<head>
	<title>AdminPanel- OpenSesame</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/adminpanel.css">
     <script type="text/javascript" src="js/printjs.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	   <div class="container-fluid" id="panel">  
    <div id="paneltop" >
    <ul>
      <a href="contestantlist.php"><li >Contestants</li></a>
      <a href="marklist.php"><li >Mark List</li></a> 
      <a href="feedbacklist.php"><li >Feedback List</li></a> 
    </ul>
   </div>
 </div>
  <div class="container">  
	  <form action="marklist.php" method="post">	
		<input type="submit" name="btnRegister" class="btn btn-primary col-md-offset-3" value=" view conetstants list" id="btnsub">
	  </form>
	 </div>
   <div id="printdiv">
	 <?php
    include('connection.php');
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      if(isset($_POST["btnRegister"]))
      {
       
        $sql="select * from ScoreTable";
        if($result=mysqli_query($con,$sql))
        {
          echo "<table class='col-lg-7 col-lg-offset-2'>";
          echo "<th>Log ID</th><th>Dcod Id</th><th>Contestant Name</th><th>Level1</th><th>Level2</th><th>Level3</th><th>Level4</th><th>Level5</th><th>Level6</th><th>Level7</th><th>Level8</th><th>Level9</th><th>Level10</th><th>Total</th>";

         
          while($row=mysqli_fetch_array($result))
          {
            $id=$row[0];
            $did=$row[1];
            $name=$row[2];
            $lvl1=$row[3];
            $lvl2=$row[4];
            $lvl3=$row[5];
            $lvl4=$row[6];
            $lvl5=$row[7];
            $lvl6=$row[8];
            $lvl7=$row[9];
            $lvl8=$row[10];
            $lvl9=$row[11];
            $lvl10=$row[12];
            $total=$row[13];
            echo"<tr><td>".$id."</td><td>".$did."</td><td>".$name."</td><td>".$lvl1."</td><td>".$lvl2."</td><td>".$lvl3."</td><td>".$lvl4."</td><td>".$lvl5."</td><td>".$lvl6."</td><td>".$lvl7."</td><td>".$lvl8."</td><td>".$lvl9."</td><td>".$lvl10."</td><td>".$total."</td></tr>";

          }
          echo" </table>";
        }
      }
    }
    ?>
    <button id="btn"onclick="printDiv('printdiv')" class="col-lg-1 col-lg-offset-5 ">print</button>
  </div>
 <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>