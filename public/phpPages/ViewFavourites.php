<?php
//This page was written by Mathew Chebet.

    //Start Session.
    session_start();

    include '../../private/server/DBResultfunctions.php';
?>



<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="authours" content="Mathew Chebet">
        <meta name="keywords" content="find books genre home Catalogue title user landingpage">
        <meta name="description" content="This webpage will be used as a landing page for the website.">
        <title>MyReviews</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cute+Font&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../stylesheet/stylesheet2.css">
        <script src="../scripts/styles.js" defer></script>
    </head>

    <body>

        <?php // Header for the web page.
         include 'header.php';
        ?>

        <!--Parent grid container-->
        <main id="myrev_pr_gcontainer">

            <!--Will use php script here--> 
            <?php
                //This script will return the book results after performing a search

                $favlist=getFavs(openConnection(),$_SESSION['user_id']);//This will hold the results returned from the DB.
                
                //Checks if there is a session with a user and the book list is greater than 0.
                if (isset($_SESSION['user_id']) and count($favlist)>0){
                        $count = 0;
                        echo"<section id='rev_table1' class='rev_title'>
                                <h3>Book ID</h3>
                            </section>
                            <!--Flex container-->
                            <section id='rev_table2' class='rev_title'>
                                <h3>Review</h3>
                            </section>
                            <!--Flex container-->
                            <section id='rev_table3' class='rev_title'>                    
                                <h3>Rating</h3>
                            </section>
                            <section id='rev_table4' class='rev_title'>                    
                                <h3>Favourite</h3>
                            </section>";

                        foreach($favlist as $book){
                            $count=$count+1;
                            echo "<section id='rev_bID".$count."' class='rev_fcontainer rev_bID'>";
                            echo    "<p>".$book['book_id']."</p>";
                            echo "</section>";
                            /*Desc*/
                            echo "<section id='rev_desc".$count."' class='rev_fcontainer rev_desc'>";
                            echo    "<p class='myrev' name='review'>".$book['review']."</p>";
                            echo    "<div class='flexcont'>";
                            echo        "<a href='EditRevFav.php?book_id=" . $book['book_id'] . "&rev_btn=edit_rev'><button class='rev_EditBtn'>Edit</button></a>";
                            echo        "<a href='EditRevFav.php?book_id=" . $book['book_id'] . "&rev_btn=delete_rev'><button class='rev_DelBtn'>Delete</button></a>";
                            echo    "</div>";
                            echo "</section>";
                            /*Rating*/
                            echo "<section id='rev_rat".$count."' class='rev_fcontainer'>";                   
                            echo    "<p>".$book['rating']."</p>";
                            echo "</section>";
                            /*Fav*/
                            echo "<section id='rev_fav".$count."' class='rev_fcontainer'>";                   
                            echo    "<p>".$book['favourite']."</p>";
                            echo "</section>";
                        }
                }
                else{
                        echo "<h2>No Favourites or Reviews here!</h2>";
                }

                closeConnection(openConnection());
            ?>
            <!--Will use php script here--> 
            
        </main>

        <?php
            include 'footer.php';
        ?>
    </body>
</html>