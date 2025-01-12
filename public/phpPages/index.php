<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="authors" content="Elvin James">
    <meta name="keywords" content="find books genre home Catalogue title user landing page">
    <meta name="description" content="This webpage will be used as a landing page for the website.">
    <title>Homepage</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="../scripts/styles.js" defer></script>
    <link rel="stylesheet" href="../stylesheet/stylesheet.css">
</head>
<body>
    <?php // Header for the web page.
        include 'header.php';
    ?>
    

        <!-- New Additions Section -->
        <section id="new-additions">
            <h2>New Additions</h2>
            <div class="carousel">
                <button class="carousel-btn prev-btn">&#10094;</button>
                <div class="carousel-track">
                    <div class="book-item">
                        <img src="../images/book1.jpg" alt="A yellow book in front of a yellow background. The name of the authour, whose name is Matt Ridley is written in black in the top left corner of the book. To the right of the authour's name there are 2 paper airplanes. Below the paper airplanes is the title of the book, which is How Innovation works. On the bottom right of left of the book there are to crumpled paper balls.">
                        <p class="book-title">How innovation works</p>
                    </div>
                    <div class="book-item">
                        <img src="../images/book2.jpg" alt="A maroon coloured book cover, with the title Romeo and Juliet written in cursive in black ink. At the top left corner you can see the name of the publisher which is Folger Shakespeare Library. At the bottom right of the cover there is a caption that says there are detailed notes with it. Finally, below this is are the names of the editors who are Barbara A. Mowat and Paul Werstine.">
                        <p class="book-title">Romeo & Juliet</p>
                    </div>
                    <div class="book-item">
                        <img src="../images/book3.jpg" alt="A cover page for the book The Golden Bough. On this cover is a shirtless man with gray hair and he is holding a sword by its handle and an ornage snake is wrapped around his hand. Behind the man is a green hill with the sun setting in the background. ">
                        <p class="book-title">The Golden Bough</p>
                    </div>
                    <div class="book-item">
                        <img src="../images/book4.jpg" alt="A black man in a turban and a white man in a brown suit and cap are riding on top of a black elephant. On the left of the elephant you can see a man in a black top hat, a black suit and yellow and brown plaid pants sitting on a wooden plank.">
                        <p class="book-title">Around the World in Eighty Days</p>
                    </div>
                    <div class="book-item">
                        <img src="../images/book5.jpg" alt="The cover page for the book Treasure Island. A pirate with a pirate hat and pet bird on his left shoulder is standing behind a young boy who seems to be steering a pirate ship. The title of the book is located to the  right side of the book near the center and it is written in black.">
                        <a href="#" class="book-title">Treasure Island</a>
                    </div>
                    <div class="book-item">
                        <img src="../images/book6.jpg" alt="The cover page for the book Psycho. The word Psycho is written vertically in white and bold font. There is line that looks like a tear going through the word psycho. The background colour of the cover is black.">
                        <p class="book-title">Psycho(Novel)</p>
                    </div>


                </div>
                <button class="carousel-btn next-btn">&#10095;</button>
            </div>
        </section>

        <section class="middle-section"><h3>Welcome to Book Catalogue – Your Ultimate Online Library</h3>
            <p >Book Catalogue is your destination for books of all kinds—bestsellers, classics, and more. Enjoy reviews, recommendations, and effortless browsing. Dive into stories and inspiration today!</p></section>

            <!-- Top Picks -->
            <article id="top-picks">
            <h2>Top Picks</h2>
            <div class="top-picks-list">
                <div class="top-pick">
                    <img src="../images/book1.jpg" alt="A yellow book in front of a yellow background. The name of the authour, whose name is Matt Ridley is written in black in the top left corner of the book. To the right of the authour's name there are 2 paper airplanes. Below the paper airplanes is the title of the book, which is How Innovation works. On the bottom right of left of the book there are to crumpled paper balls.">
                    <h3>How Innovation Works</h3>
                </div>
                <div class="top-pick">
                    <img src="../images/book2.jpg" alt="A maroon coloured book cover, with the title Romeo and Juliet written in cursive in black ink. At the top left corner you can see the name of the publisher which is Folger Shakespeare Library. At the bottom right of the cover there is a caption that says there are detailed notes with it. Finally, below this is are the names of the editors who are Barbara A. Mowat and Paul Werstine.">
                    <h3>Romeo & Juliet</h3>
                </div>
            </div>
        </article>

        <?php // Footer for the web page.
        include 'footer.php';
        ?>
    
    </body>
</html>