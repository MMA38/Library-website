<?php
    //Written by Manaf Akil.
    session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Website Created for Ass2"> 
    <meta name="keywords" content="my content"> 
    <meta name="author" content="Manaf Akil">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <!--Local Style Sheet-->
    <link rel="stylesheet" type="text/css" href="../stylesheet/stylesheet.css" >
    <script src="../scripts/logscript.js" defer></script>
    <script src="https://kit.fontawesome.com/df8cdcaf2d.js" crossorigin="anonymous"></script>
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;700&family=Lobster&family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
</head>
<!DOCTYPE html>
    <body id="loginStyle" class="SR">
        <?php include 'header.php';?>
        <div class="container">
            <!-- Step 1: Email/Phone Input -->
            <div id="step1" class="form-step">
                <h2>Login</h2>
                <form id="formStep1" action="log.php" method="POST">

                    <div id="email" class="first">
                        <label for="emailOrPhone">Email:</label>
                        <input type="text" id="emailOrPhone" name="emailOrPhone" autocomplete="email">
                        <p id="emailOrPhoneError" class="warning"></p>
                    </div>

                    <div id ="register" class="first">
                        <a href="Registration.php"><em>No account?</em> Create one!</a>
                    </div>

                    <div id ="register" class="first">
                        <button type="button" onclick="goToStep2()">Next</button>
                    </div>
                </form>
            </div>

            <!-- Step 2: Password Input -->
            <div id="step2" class="form-step" style="display:none;"> <!--https://www.w3schools.com/css/tryit.asp?filename=trycss_display_none-->
                <h2>Enter Password</h2>
                <form id="formStep2"  action="log.php" method="POST">
                    <!-- Hidden input for email -->
                    <input type="hidden" name="emailOrPhone" id="emailHidden">
                    <label for="password">Password:</label>
                    <input type="current-password" id="password" name="password" autocomplete="current-password">
                    <p id="passwordError" class="warning"></p>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>

        <?php
            include 'footer.php';
        ?>
    </body>                 
</html>
