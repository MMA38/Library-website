<?php
    //This page was written by Manaf Akil.
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Website Created for Ass2"> 
        <meta name="keywords" content="my content"> 
        <meta name="author" content="Manaf Akil">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Account</title>
        <!--Local Style Sheet-->
        <link rel="stylesheet" type="text/css" href="../stylesheet/stylesheet.css">
        <script src="../scripts/regScript.js" defer></script>
        <script src="https://kit.fontawesome.com/df8cdcaf2d.js" crossorigin="anonymous"></script>
        <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;700&family=Lobster&family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    </head>
    <body id="register" class="SR">
        <?php include 'header.php';?>
        <div class="formcontainer">
            <h2 id="reg-title">Registration info</h2>
            <form action="register.php" method="post" onsubmit="return validate();">
                <!-- You will need to write the validate function for this form. -->

                <div class="textfield"> 
                    <label for="email">Email Address</label>
                    <input type="text" name="uemail" id="email" placeholder="Email">
                </div>

                <div class="textfield">
                    <label for="login">User Name</label>
                    <input type="text" name="login" id="login" placeholder="User name">
                </div>

                <div class="textfield" id="fullAddress">
                    <div class="divide">
                        <label for="city">City</label>
                        <input type="text" name="city" id="city" placeholder="City">
                    </div>
                    <div class="divide">
                        <label for="prov">Province</label>
                        <input type ="text" name="Province" id="prov" placeholder="Province">
                    </div>
                    <div class="divide">
                        <label for="count">Country</label>
                        <input type ="text" name="Country" id="count" placeholder="Country">
                    </div>
                    <div class="divide">
                        <label for="str">Street</label>
                        <input type ="text" name="Street" id="str" placeholder="Street">
                    </div>
                    <div class="divide">
                        <label for="Postal">Postal Code</label>
                        <input type="text" name="PC" id="Postal" placeholder="A1A 1A1">
                    </div>
                    <div class="divide">
                        <label for="phone">Phone Number</label>
                        <input type="tel" name="Phone" id="phone" placeholder="123-456-7890">
                    </div>
                </div>

                <div class="textfield">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" placeholder="Password">
                </div>
            
                <div class="textfield">
                    <label for="pass2">Re-type Password</label>
                    <input type="password" id="pass2" placeholder="Password">
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="terms" id="terms">
                    <label for="terms">I agree to the terms and conditions</label>
                </div>
                <a class="back-link" href="<?php echo 'index.php'; ?>"> Back to Home page</a>
                <div>
                    <button type="submit">Sign-Up</button>
                    <button type="reset">Reset</button>
                </div>
            </form>
        </div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>