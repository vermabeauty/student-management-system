<?php
include 'cookie.php';
include 'connectionString.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>attendance</title>
  <link rel="stylesheet" href="css/stylead.css">
  <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>attendance</h1>
        </div>
        <div id="menu">
            <ul>
                <li>
                    <a href="attendance.php">back</a>
                </li>
                
            </ul>
        </div>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    $student_id=$_GET['id'];
    $sql= "SELECT * FROM `attendance` WHERE `student_id`='$student_id';";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)){
        $row=mysqli_fetch_assoc($result)
    ?>
    <form class="post-form" action="updatea.php" method="post">
       
        <div class="form-group">
            <label>student name</label>
            <input type="text" name="student_name" disabled value="<?php echo $row['student_name']; ?>"/>
        </div>
        <div class="form-group">
            <label>attendance math</label>
            <input type="hidden" name="student_id" value="<?php echo $row['student_id'] ;?>"/>
            <input type="text" name="attendance_math" value="<?php echo $row['attendance_math'] ;?>"/>
    </div>
    <div class="form-group">
        <label>attendance ds</label>
            <input type="text" name="attendance_ds" value="<?php echo $row['attendance_ds'];?>"/>
        </div>
        <div class="form-group">
            <label>attendance dstl</label>
            <input type="text" name="attendance_dstl" value="<?php echo $row['attendance_dstl'] ;?>"/>
        </div>
        <div class="form-group">
            <label>attendance coa</label>
            <input type="text" name="attendance_coa" value="<?php echo $row['attendance_coa'];?>"/>
        </div>
        <input class="submit" type="submit" value="Save"/>
    </form>
    <?php } ?>
</div>
</div>
</body>
</html>
