<!DOCTYPE html>
<html>
<head>
	<title>Winner- OpenSesame</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/winner.css" rel="stylesheet">
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

    <div class="col-lg-5 col-lg-offset-4" id="disp" >
      <div class="col-lg-offset-2" id="hd">YOU WON OPEN SESAME!!!!</div>
      <a href="feedback.php"><button class=" btn btn-primary col-lg-3 col-lg-offset-5" id ="btn"> Press OK  </button></a>
    </div>
    
  </div>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>