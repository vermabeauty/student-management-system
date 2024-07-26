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
  <title>marks</title>
  <link rel="stylesheet" href="css/stylead.css">
  <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>marks</h1>
        </div>
        <div id="menu">
            <ul>
                <li>
                    <a href="marks.php">back</a>
                </li>
                
            </ul>
        </div>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    
    $student_id=$_GET['id'];
    $sql= "SELECT * FROM `marks` WHERE `student_id`='$student_id';";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)){
        $row=mysqli_fetch_assoc($result)
    ?>
    <form class="post-form" action="updatem.php" method="post">
       
        <div class="form-group">
            <label>student name</label>
            <input type="text" name="student name" value="<?php echo $row['student_name']; ?>" disabled />

        </div>
        <div class="form-group">
            <label>ct1 math</label>
            <input type="hidden" name="student_id" value="<?php echo $row['student_id'] ;?>"/>
            <input type="text" name="ct1_math" value="<?php echo $row['ct1_math'] ;?>"/>
    </div>
    <div class="form-group">
        <label>ct2 math</label>
            <input type="text" name="ct2_math" value="<?php echo $row['ct2_math'];?>"/>
        </div>
        <div class="form-group">
            <label>ct3 math</label>
            <input type="text" name="ct3_math" value="<?php echo $row['ct3_math'] ;?>"/>
        </div>
        <div class="form-group">
            <label>ct1 ds</label>
            <input type="text" name="ct1_ds" value="<?php echo $row['ct1_ds'];?>"/>
        </div>
    <div class="form-group">
        <label>ct2 ds</label>
            <input type="text" name="ct2_ds" value="<?php echo $row['ct2_ds'];?>"/>
        </div>
        <div class="form-group">
            <label>ct3 ds</label>
            <input type="text" name="ct3_ds" value="<?php echo $row['ct3_ds'] ;?>"/>
        </div>
        <div class="form-group">
            <label>ct1 dstl</label>
            <input type="text" name="ct1_dstl" value="<?php echo $row['ct1_dstl'];?>"/>
        </div>
    <div class="form-group">
        <label>ct2 dstl</label>
            <input type="text" name="ct2_dstl" value="<?php echo $row['ct2_dstl'];?>"/>
        </div>
        <div class="form-group">
            <label>ct3 dstl</label>
            <input type="text" name="ct3_dstl" value="<?php echo $row['ct3_dstl'] ;?>"/>
        </div>
        <div class="form-group">
            <label>ct1 coa</label>
            <input type="text" name="ct1_coa" value="<?php echo $row['ct1_coa'];?>"/>
        </div>
    <div class="form-group">
        <label>ct2 coa</label>
            <input type="text" name="ct2_coa" value="<?php echo $row['ct2_coa'];?>"/>
        </div>
        <div class="form-group">
            <label>ct3 coa</label>
            <input type="text" name="ct3_coa" value="<?php echo $row['ct3_coa'] ;?>"/>
        </div>
        <input class="submit" type="submit" value="Save"/>
    </form>
    <?php } ?>
</div>
</div>
</body>
</html>
