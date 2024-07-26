<?php 
   include 'connectionString.php';
   include 'cookie.php';
?>
<?php
     $name=$_POST["name"];
     $sql="INSERT INTO `attendance` (`student_name`) VALUES ('$name');";
     $result=mysqli_query($con,$sql) or die("query unsuccessful");
     $sql="INSERT INTO `performance` (`student_name`) VALUES ('$name');";
     $result=mysqli_query($con,$sql) or die("query unsuccessful");
     $sql="INSERT INTO `marks` (`student_name`) VALUES ('$name');";
     $result=mysqli_query($con,$sql) or die("query unsuccessful");
     header("location:index.php");
     mysqli_close($con);
?>