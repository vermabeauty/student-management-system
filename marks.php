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
  <title>student marks</title>
  <link rel="stylesheet" href="css/stylead.css">
  <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
  
<style>
        #wrapper{
            width: 99%;
            background-color: #fff;
            min-height: 100vh;
        }
        body
        {
            width:100%;
        }
        .filterbox {
        display: flex;
        justify-content: space-between;
        margin-bottom: 8px;
        }
        #searchInput{
        border-radius:100px;
        }
</style>
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>marks</h1>
        </div>
        <div id="menu">
            <ul>
                <li>
                    <a href="index.php">back</a>
                </li>
                <li>
                    <a href="add.php">Add</a>
                </li>
                <li>
                    <a href="#" style="color:yellow;">
                        <?php echo $_COOKIE['username']; ?>
                    </a>  
                </li>
            </ul>
        </div>

<div id="main-content">
    <div class="filterbox">
        <h2 class="filtertext">All Records</h2>
        <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search for student names..">
    </div>
    <?php
     $sql="SELECT * FROM `marks`";
     $result=mysqli_query($con,$sql) or die("query unsuccessful");

     if(mysqli_num_rows($result)>0) {
    ?>
    <table cellpadding="7px" id="markTable">
        <thead>
        <th>Sr no</th>
        <th>name</th>
        <th>ct1 math</th>
        <th>ct2 math</th>
        <th>ct3 math</th>
        <th>ct1 ds</th>
        <th>ct2 ds</th>
        <th>ct3 ds</th>
        <th>ct1 dstl</th>
        <th>ct2 dstl</th>
        <th>ct3 dstl</th>
        <th>ct1 coa</th>
        <th>ct2 coa</th>
        <th>ct3 coa</th>
        
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            $counter=0;
            while($row=mysqli_fetch_assoc($result))
            {
             $counter++;
            ?>
            <tr>
                <td><?php echo $counter; ?></td>
                <td><?php echo $row['student_name']; ?></td>
                <td><?php echo $row['ct1_math']; ?></td>
                <td><?php echo $row['ct2_math']; ?></td>
                <td><?php echo $row['ct3_math']; ?></td>
                <td><?php echo $row['ct1_ds']; ?></td>
                <td><?php echo $row['ct2_ds']; ?></td>
                <td><?php echo $row['ct3_ds']; ?></td>
                <td><?php echo $row['ct1_dstl']; ?></td>
                <td><?php echo $row['ct2_dstl']; ?></td>
                <td><?php echo $row['ct3_dstl']; ?></td>
                <td><?php echo $row['ct1_coa']; ?></td>
                <td><?php echo $row['ct2_coa']; ?></td>
                <td><?php echo $row['ct3_coa']; ?></td>
                <td>
                <a href='editm.php?id=<?php echo $row['student_id'];?>'>Edit</a>
                <a href='delete.php?id=<?php echo $row['student_id'];?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
           
        </tbody>
    </table>
    <?php }else{
        echo "<h2>no record found<h2>";
    } 
    mysqli_close($con);
    ?>
</div>
</div>
<script>
    function searchTable() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("searchInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("markTable");
      tr = table.getElementsByTagName("tr");
  
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1]; // Column index 1 is Student Name
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
  </script>
</body>
</html>
