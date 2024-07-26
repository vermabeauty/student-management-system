<?php
include 'cookie.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Options</title>
    <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/stylead.css">
    <style>
        /* Global styles */
body {
    font-family: 'Courier New', Courier, monospace;
    background: linear-gradient(80deg, #b5c2d5, #609efb);
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

#heading {
    font-size: 3em;
    text-align: center;
    margin-top: 20px;
    color: #fff;
}

.container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    padding: 20px;
    margin-top: 20px;
}

.card {
    width: 300px;
    height: 300px;
    background-color: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-10px);
}

.card img {
    width: 100%;
    height: auto;
    border-radius: 10px 10px 0 0;
}

.content {
    padding: 20px;
    text-align: center;
}

.content h3 {
    margin: 0;
    color: #333;
}

    </style>
</head>
<body>
    <div id="heading"> Admin</div>
    <div class="container">
        <div class="card">
            <a href="marks.php"><img src="img/marks.jpg" alt="Marks"></a>
            <div class="content">
                <h3>Marks</h3>
            </div>
        </div>
        <div class="card">
            <a href="attendance.php"><img src="img/attendance.jpg" alt="Attendance"></a>
            <div class="content">
                <h3>Attendance</h3>
            </div>
        </div>
        <div class="card">
            <a href="performance.php"><img src="img/performance.jpg" alt="Performance"></a>
            <div class="content">
                <h3>Performance</h3>
            </div>
        </div>
        <div class="card">
            <a href="logout.php"><img src="img/home.jpg" alt="Home"></a>
            <div class="content">
                <h3>Log Out</h3>
            </div>
        </div>
    </div>
</body>
</html>
