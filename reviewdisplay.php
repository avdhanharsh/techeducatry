<?php
include 'connection.php';
$sql = "select * from review";
$result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechEduca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechEduca</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div class="nav">
            <div class="nav-logo">
                <h2>Tech <span>Educa</span></h2>
            </div>
            <div class="nav-items">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">Feedback</a></li>
                <li><a href="#">Teachers</a></li>
                <li><a href="#">Contact</a></li>
            </div>
            <div class="nav-but">
                <button onclick="popup('register-popup')">SignUP</button>
                <button onclick="popup('login-popup')">LoginUp</button>
                <i class="ri-menu-3-line"></i>
            </div>
        </div>

    <div class="display">
        <div class="display-left">
            <img src="images/review.png" alt="">
        </div>
        <div class="display-right">
            <div class="displayhead">
                <h2>Review from our students</h2><br>
            </div>
        <div class="displaytable" >
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Review</th>
                    <th>Date</th>
                </tr>
                <tr>
                    
                    <?php

                    while($row = mysqli_fetch_assoc($result))
                    {
                        ?>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['review'];?></td>
                    <td><?php echo date('l jS \of F Y ');?></td>

</tr>
                    <?php
                    }
                    ?>
                
            </table>
        </div>
        </div>
    </div>
</body>
</html>