<?php
    //Written by Manaf Akil.
?>

<?php //Checks if a user is logged in.
if(isset($_SESSION['valid_user'])){

    echo "<header id='header_gcontainer'>
            <h1>ReadRealm</h1>
            <div id='hamburger' onclick='toggleMenu()'>&#9776;</div>
            <nav id='nav_bar'>
                <ul id='nav_options'>
                    <li><a href='index.php'>Home</a></li>
                    <li><a href='ViewFavourites.php'>Reviews</a></li>
                    <li><a href='findBooks.php'>Find</a></li>
                    <li><a id='login_btn' href='logout.php'>Logout</a></li>
                </ul>
            </nav>
        </header>";
}

else{
    echo "<header id='header_gcontainer'>
            <h1>ReadRealm</h1>
            <div id='hamburger' onclick='toggleMenu()'>&#9776;</div>
            <nav id='nav_bar'>
                <ul id='nav_options'>
                    <li><a href='index.php'>Home</a></li>
                    <li><a href='login.php'>Reviews</a></li>
                    <li><a href='findBooks.php'>Find</a></li>
                    <li><a id='login_btn' href='login.php'>Login/Register</a></li>
                </ul>
            </nav>
        </header>";
}
?>