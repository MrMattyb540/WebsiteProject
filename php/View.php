<html>
<head>
    <title>Matthew's Car Maintenance</title>
    <link rel="stylesheet" href="../viewstyle.css">
    
</head>
<body>
    <div class="container">
        <div class="navbar">
            <img src="../Images/logo.jpg" class="logo">
            <nav>
                <ul>
                    <li><a href="../WebsiteProject.html">Home</a></li>
                    <li><a href="../Html/About.html">About</a></li>
                    <li><a href="../php/BookingPage.php">Booking</a></li>
                    <li><a href="../php/login.php">Login/Signup</a></li>
                    <li><a href="../php/View.php">View/Modify Records</a></li>
                </ul>
            </nav>
        </div>
        
        <div class="content">
            
            <table class="table1">
            <tr>
                <th>Name</th>
                <th>DayOfWeek</th>
                <th>Time</th>
                <th>Delete</th>
            </tr>  
            
            <?php


         $con1 = mysqli_connect('localhost','root','');

         mysqli_select_db($con1, 'registration');
    
          $sql1 = "SELECT * FROM booking;";
          $result1 = mysqli_query($con1, $sql1);
    
         if (mysqli_num_rows($result1) > 0) {
             while ($row1 = mysqli_fetch_assoc($result1)) {
                  echo "
                  <tr>
                  <td>".$row1["name"]."</td>
                  <td>".$row1["DayOfWeek"]."</td>
                  <td>".$row1["Time"]."</td>
                  <td><a href='delete.php?row=$row1[name]'>Delete</a></td>
                  </tr>
                  ";
                  }
            }
         else {
             echo "no results";
         }
    
         ?>
           </table> 
            
         <table class="table2">
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Delete</th>
        </tr> 
    
             <?php
    session_start();


    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con, 'registration');
    
        $sql = "SELECT * FROM usertable;";
        $result = mysqli_query($con, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <tr>
            <td>".$row["name"]."</td>
            <td>".$row["password"]."</td>
            <td><a href='delete2.php?user=$row[name]'>Delete</a></td>
            </tr>
            ";
        }
    }
    else {
        echo "no results";
    }
    
    ?>
</div>
</table>
</body>
</html>