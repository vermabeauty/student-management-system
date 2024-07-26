<?php 
    include 'connectionString.php';
    include 'cookie.php';
?>
<?php
$student_id=$_POST['student_id'];
$remarks=$_POST['remarks'] ;
$sql="UPDATE `performance` SET `remarks` = '$remarks ' WHERE `performance`.`student id` = '$student_id'";
 $result=mysqli_query($con,$sql) or die("query unsuccessful");
 echo $result;
 header("location:performance.php");
 mysqli_close($con);
            

?>