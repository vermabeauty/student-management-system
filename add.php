<?php
    include 'cookie.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Student</title>
  <link rel="stylesheet" href="css/stylead.css">
  <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>add student</h1>
        </div>
        <div id="menu">
            <ul>
                <li>
                    <a href="performance.php">back</a>
                </li>
                <li>
                    <a href="add.php">Add</a>
                </li>
                <li>
            </ul>
        </div>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="save.php" method="post">
       <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" />
        </div>
        
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
