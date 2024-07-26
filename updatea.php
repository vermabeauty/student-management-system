<?php 
    include 'connectionString.php';
    include 'cookie.php';
?>
<?php
$student_id=$_POST["student_id"];
$attendance_math=$_POST["attendance_math"];
$attendance_ds=$_POST["attendance_ds" ];
$ttendance_dstl=$_POST["attendance_dstl"];
$attendance_coa=$_POST["attendance_coa"];
$sql="UPDATE `attendance` SET `attendance_math` = '$attendance_math', `attendance_ds` = '$attendance_ds', `attendance_dstl` = '$ttendance_dstl', `attendance_coa` = '$attendance_coa' WHERE `attendance`.`student_id` = '$student_id'";
 $result=mysqli_query($con,$sql) or die("query unsuccessful");
 header("location:attendance.php");
 mysqli_close($con);
            

?>