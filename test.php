<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
   include ('connection.php');
   echo"hai";
   $sql= "select * from QuestionTable where QstnNo=1";
   if($result=mysqli_query($con,$sql))
   {
   	while($row=mysqli_fetch_array($result))
   	{

   		$img=$row[1];
   		echo $img;
   	}
   	echo "<img src='".$img."'>";
   }
?>
</body>
</html>