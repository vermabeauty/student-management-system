<?php 
    include 'connectionString.php';
    include 'cookie.php';
    $student_id=$_POST["student_id"];
    $ct1_math=$_POST["ct1_math"];
    $ct2_math=$_POST["ct2_math"];
    $ct3_math=$_POST["ct3_math"];
    $ct1_ds=$_POST["ct1_ds" ];
    $ct2_ds=$_POST["ct2_ds" ];
    $ct3_ds=$_POST["ct3_ds" ];
    $ct1_dstl=$_POST["ct1_dstl"];
    $ct2_dstl=$_POST["ct2_dstl"];
    $ct3_dstl=$_POST["ct3_dstl"];
    $ct1_coa=$_POST["ct1_coa"];
    $ct2_coa=$_POST["ct2_coa"];
    $ct3_coa=$_POST["ct3_coa"];
    $sql="UPDATE `marks` SET `ct1_math` = '$ct1_math', `ct2_math` = '$ct2_math', `ct3_math` = '$ct3_math', `ct1_ds` = '$ct1_ds', `ct2_ds` = '$ct2_ds', `ct3_ds` = '$ct3_ds', `ct1_dstl` = '$ct1_dstl', `ct2_dstl` = '$ct2_dstl', `ct3_dstl` = '$ct3_dstl', `ct1_coa` = '$ct1_coa', `ct2_coa` = '$ct2_coa', `ct3_coa` = '$ct3_coa' WHERE `marks`.`student_id` = '$student_id';";
    $result=mysqli_query($con,$sql) or die("query unsuccessful");
    header("location:marks.php");
    mysqli_close($con);
?>