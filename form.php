<!DOCTYPE html>
<html lang="en">

<head>

    <title>User registration</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form method="POST" action="connect.php">
            <h2>Welcome Back!</h2>
            <div class="input-box ">

                <input type="text" id="fname" name="Name" placeholder="Name">
                <i class='bx bxs-user'></i><br>
            </div>


            <div class="input-box">

                <input type="Email" id="Email" name="Email" placeholder="Email">
                <i class='bx bxl-gmail'></i><br>
            </div>

            <div class="input-box">

                <input type="text" id="Mobile" name="Mobile" placeholder="Mobile">
                <i class='bx bxs-phone-call'></i><br>
            </div>

            <div class="input-box">

                <input type="Password" id="Password" name="Password" placeholder="Password">
                <i class='bx bxs-lock-alt'></i><br>
            </div>
            
            <button type="submit" class="btn">Sign in</button>
            <br>
            <br>
         </form>
    </div>

    <?php
    
    ?>

</body>

</html>