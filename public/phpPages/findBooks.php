<?php
    //Written by Mathew Chebet.
    session_start();
?>

<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="authours" content="Mathew Chebet">
        <meta name="keywords" content="find books genre title user">
        <meta name="description" content="This webpage will be used to help users search for books.">
        <title>Find Books</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cute+Font&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../stylesheet/stylesheet.css">
        <script src="../scripts/FBscript.js" defer></script>
    </head>
    <body>
        <?php // Header for the web page.
            include 'header.php';
        ?>  

        <form name="search_books" action="SearchResults.php" method="POST" onsubmit="return searchResult();">
            <div class="fbooks_gcontainer">
                <div class="search fb_fcontainer">
                    <h2 id="purpose">What are you looking for?</h2>
                    <input id="search_bar" name="search_bar" type="search">
                    <p id="search_error"></p>
                    <button id="search_btn" type="submit"><strong>Search</strong> &#128270;</button>
                    <p id="criteria_error"></p>
                </div>

                <div class="criteria fb_fcontainer">
                    <div class="c_options">
                        <input id="search_genre" name="search_type" type="checkbox" value="genre">
                        <label for="search_genre">Search by Genre</label>
                    </div>
                    <div class="c_options">
                        <input id="search_title" name="search_type" type="checkbox" value = "title">
                        <label for="search_title">Search by Title</label>
                    </div>
                </div>
            </div>
        </form>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>