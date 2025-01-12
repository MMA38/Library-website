<?php
    //Written by Mathew Chebet.

    //Start Session.
    session_start();

    include '../../private/server/DBResultfunctions.php';
?>

<?php
/*Adding review*/
    if($_SERVER['REQUEST_METHOD']=='POST' && $_POST['insert_rev'] == 'Insert' && isset($_POST['insert_rev']) ){
        $book_id=getData('book_id');
        $review=getData('review');
        $rating=getData('rating');
        $fav=getData('is_fav');
        $conn = openConnection();
        
        $sql= "INSERT INTO favourites (id, book_id, review, rating, favourite) VALUES(".$_SESSION['user_id'].", ".$book_id.", '".$review."','".$rating."','".$fav."')";
        mysqli_query($conn,$sql);
        closeConnection($conn);
    }
/*Edit review*/
    elseif($_SERVER['REQUEST_METHOD']=='POST' && $_POST['edit_rev'] == 'Edit' && isset($_POST['edit_rev']) ){
        $book_id=getData('book_id');
        $review=getData('review');
        $rating=getData('rating');
        $fav=getData('is_fav');
        $conn = openConnection();

        $sql= "UPDATE favourites SET review='".$review."', rating='".$rating."', favourite='".$fav."'  WHERE id =".$_SESSION['user_id']." AND book_id=".$book_id."";
        mysqli_query($conn,$sql);
        closeConnection($conn);
    }
/*Delete review*/
    elseif($_SERVER['REQUEST_METHOD']=='POST' && $_POST['delete_rev'] == 'Delete' && isset($_POST['delete_rev']) ){
        $book_id=getData('book_id');
        $conn = openConnection();
        
        $sql= "DELETE FROM favourites WHERE id =".$_SESSION['user_id']." AND book_id=".$book_id."";
        mysqli_query($conn,$sql);
        closeConnection($conn);
    }
    else
        
?>

<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="authours" content="Mathew Chebet">
        <meta name="keywords" content="Edit Review Add Favourites Web Page Books Catalogue">
        <meta name="description" content="This page will be used to edit, add, or delete a review depending on the button a user clicks.">
        <title>Alter Reviews</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cute+Font&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../stylesheet/stylesheet2.css">
        <script src="../scripts/styles.js" defer></script>
    </head>
    <body>
        <?php
         include 'header.php';
        ?>

        <?php
        /*Adding review*/
            if($_SERVER['REQUEST_METHOD']=='GET' && $_GET['rev_btn'] == 'add' ){

                echo "<form class='alt_rev_gcontainer' method='POST'>";
                echo    "<input type='hidden' name='book_id' value=".getData('book_id').">";
                echo    "<div id=get_rating class='Urev_fcontainer'>";
                echo        "<label for='rating_input'>Rating</label>";
                echo        "<input id='rating_input' type='text' name='rating' placeholder='Please add your review in the form #.#.' maxlength='5'>";
                echo    "</div>";
                echo    "<div id=get_review class='Urev_fcontainer'>";
                echo        "<label for='review_input'>Review</label>";
                echo        "<input id='review_input'type='text' name='review' placeholder='Please add your review here.' maxlength='500'>";
                echo    "</div>";
                echo    "<div id=get_favs class='Urev_fcontainer'>";
                echo        "<label>Would you like to add this to your favourites?:</label>";
                echo        "<input id='Y_fav' type='radio' name='is_fav' value='Yes'>";
                echo        "<label for='Y_fav'>Yes</label>";
                echo        "<input id='N_fav'type='radio' name='is_fav' value='No'>";
                echo        "<label for='N_fav'>No</label>";
                echo    "</div>";
                echo    "<div class='Urev_fcontainer'>";
                echo        "<input id='insert_rev' name='insert_rev' type='submit' value='Insert'>";
                echo        "<a href='ViewFavorites.php'><button id=cancel_btn>Cancel</button></a>";
                echo    "</div>";
                echo "</form>";

            }
        /*Editing review*/
            elseif($_SERVER['REQUEST_METHOD']=='GET' && $_GET['rev_btn'] == 'edit_rev' ){
                $conn = openConnection();
                $sql="SELECT review FROM Favourites WHERE book_id=".getData('book_id')." AND id=".$_SESSION['user_id']."";
                $oldRev=getBookData($conn,$sql)['review'];

                $sql="SELECT rating FROM Favourites WHERE book_id=".getData('book_id')." AND id=".$_SESSION['user_id']."";
                $oldRat=getBookData($conn,$sql)['rating'];

                echo "<form class='alt_rev_gcontainer' method='POST'>";
                echo    "<input type='hidden' name='book_id' value=".getData('book_id').">";
                echo    "<div id=get_rating class='Urev_fcontainer'>";
                echo        "<label for='rating_input'>Rating</label>";
                echo        "<input id='rating_input' type='text' name='rating' value='".$oldRat."' maxlength='5'>";
                echo    "</div>";
                echo    "<div id=get_review class='Urev_fcontainer'>";
                echo        "<label for='review_input'>Review</label>";
                echo        "<input id='review_input' type='text' name='review' value='".$oldRev."' maxlength='500'>";
                echo    "</div>";
                echo    "<div id=get_favs class='Urev_fcontainer'>";
                echo        "<label>Would you like to add this to your favourites?:</label>";
                echo        "<input id='Y_fav' type='radio' name='is_fav' value='Yes'>";
                echo        "<label for='Y_fav'>Yes</label>";
                echo        "<input id='N_fav'type='radio' name='is_fav' value='No'>";
                echo        "<label for='N_fav'>No</label>";
                echo    "</div>";
                echo    "<div class='Urev_fcontainer'>";
                echo        "<input id='edit_rev' name='edit_rev' type='submit' value='Edit'>";
                echo        "<a href='ViewFavorites.php'><button id=cancel_btn>Cancel</button></a>";
                echo    "</div>";
                echo "</form>";
                closeConnection($conn);

            }
        /*Deleting review*/
            elseif($_SERVER['REQUEST_METHOD']=='GET' && $_GET['rev_btn'] == 'delete_rev' ){

                $conn = openConnection();
                $sql="SELECT review FROM Favourites WHERE book_id=".getData('book_id')." AND id=".$_SESSION['user_id']."";
                $oldRev=getBookData($conn,$sql)['review'];

                $sql="SELECT rating FROM Favourites WHERE book_id=".getData('book_id')." AND id=".$_SESSION['user_id']."";
                $oldRat=getBookData($conn,$sql)['rating'];

                echo "<form class='alt_rev_gcontainer' method='POST'>";
                echo    "<input type='hidden' name='book_id' value=".getData('book_id').">";
                echo    "<div id=get_rating class='Urev_fcontainer'>";
                echo        "<label for='rating_input'>Rating</label>";
                echo        "<input id='rating_input' type='text' name='rating' value='".$oldRat."' maxlength='5'>";
                echo    "</div>";
                echo    "<div id=get_review class='Urev_fcontainer'>";
                echo        "<label for='review_input'>Review</label>";
                echo        "<input id='review_input' type='text' name='review' value='".$oldRev."' maxlength='500'>";
                echo    "</div>";
                echo    "<div id=get_favs class='Urev_fcontainer'>";
                echo        "<label>Would you like to add this to your favourites?:</label>";
                echo        "<input id='Y_fav' type='radio' name='is_fav' value='Yes'>";
                echo        "<label for='Y_fav'>Yes</label>";
                echo        "<input id='N_fav'type='radio' name='is_fav' value='No'>";
                echo        "<label for='N_fav'>No</label>";
                echo    "</div>";
                echo    "<div class='Urev_fcontainer'>";
                echo        "<input id='delete_rev' name='delete_rev' type='submit' value='Delete'>";
                echo        "<a href='ViewFavorites.php'><button id=cancel_btn>Cancel</button></a>";
                echo    "</div>";
                echo "</form>";
                closeConnection($conn);
            }

            else{
                echo "An error occured.";
                header("Location: ViewFavourites.php");
                exit;
            }
        ?>
        <?php
            include 'footer.php';
        ?>
    </body>
</html> 
