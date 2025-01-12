<?php
    //This page was written by Mathew Chebet.

    //Start Session.
    session_start();

    include '../../private/server/DBResultfunctions.php';
?>

<?php
    /*Script will be responsible for adding content to favourites table in the database*/

    if (isset($_GET['book_id'])){
        $book_id =$_GET["book_id"];
        $connection = openConnection();// Open connection to database.
        $user_id= $_SESSION['user_id'];
        $sql ="INSERT INTO Favourites (book_id, user_id) VALUES (".$book_id.",".$user_id." )";
        mysqli_query($connection,$sql);
        closeConnection(openConnection()); //close connection to database
    }
?>


<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="authours" content="Mathew Chebet">
        <meta name="keywords" content="search books user favourite review">
        <meta name="description" content="This webpage will return the books after searching for something">
        <title>SearchResults</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cute+Font&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href=../stylesheet/stylesheet2.css>
        <script src="../scripts/styles.js" defer></script>
    </head>
    <body>
        <?php // Header for the web page.
         include 'header.php';
        ?>

        <main class='GB_g-container'>
            <?php

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                //This script will return the book results after performing a search

                $booklist=getbook(openConnection());//This will hold the results returned from the DB.
                if (count($booklist)>0){ // Checks if booklist is empty.
                    foreach($booklist as $book){
                        //Checks if there is a session with a user and the book list is greater than 0.
                        if (isset($_SESSION['user_id'])){
                            echo "<section class='bi_fcontainer'>";
                            echo "  <h3 id='new_add_title'>".$book['title']."</h3>";
                            echo        "<a href='BookDetails.php?book_id=".$book['book_id']."'>";
                            echo            "<img class='g_book_img' src=".$book['src']." alt=".$book['alt']." value=v_book>";
                            echo        "</a>";
                            echo "  <a href='EditRevFav.php?book_id=".$book['book_id']."&rev_btn=add'><button id='fav_btn' name='rev_btn' value='add'>Add Review</button></a>";
                            echo "</section>";
                        }
                        //Checks if there is not a session with a user and the book list is greater than 0.
                        else{
                            echo "<section class='bi_fcontainer'>";
                            echo "  <h3 id='new_add_title'>".$book['title']."</h3>";
                            echo        "<a href='BookDetails.php?book_id=".$book['book_id']."'>";
                            echo            "<img class='g_book_img' src=".$book['src']." alt=".$book['alt'].">";
                            echo        "</a>";
                            echo "  <a href='login.php'><button id='fav_btn' name='rev_btn' value='add'>Add Review</button></a>";
                            echo "</section>";
                        }
                    } 
                }
                else{
                     echo "<h2> No results found</h2>";
                }

            }
            else{
                echo "<h2> No results found</h2>";
            }

            // Close the database connection
            closeConnection(openConnection());
            ?>
        </main>  
        <?php
            include 'footer.php';
        ?>
    </body>
</html>