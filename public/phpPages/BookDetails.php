<?php
//The php on this page was written by Mathew Chebet.
//The html was written by Elvin James.
    //Start Session.
    session_start();

    include '../../private/server/DBResultfunctions.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="authours" content="Elvin James">
    <meta name="keywords" content="Review books genre home Catalogue title user landingpage">
    <meta name="description" content="This webpage will to show more details about a book">
    <title>Book Details</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cute+Font&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheet/stylesheet.css">
    <script src="../scripts/styles.js" defer></script>
  </head>
  <body>
        <?php // Header for the web page.
         include 'header.php';
        ?>

      <?php
          /* Book Details Section*/
          $sql1= "SELECT src FROM books WHERE book_id =".getData('book_id')."";
          $sql2= "SELECT alt FROM books WHERE book_id =".getData('book_id')."";

          echo "<section class='book-section'>";
          echo  "<div class='book-info'>";
          echo   "<img src='".getBookData(openConnection(),$sql1)['src']."' alt='".getBookData(openConnection(),$sql2)['alt']."' class='book-cover'>";
          closeConnection(openConnection());
      ?>

      <div class='book-details'>
                    <?php
                      $sql1= "SELECT title FROM books WHERE book_id = ".getData('book_id')."";
                      $sql2= "SELECT rating FROM books WHERE book_id = ".getData('book_id')."";
                      echo "<h3 class='book-cover-rating'><strong>".getBookData(openConnection(),$sql2)['rating']."</strong></h3>";
                      closeConnection(openConnection());
                    ?>
                        <table>
                          <tr>
                            <td><strong>Author:</strong></td>
                            <?php
                              $sql= "SELECT authour FROM books WHERE book_id =".getData('book_id')."";
                              echo "<td>".getBookData(openConnection(),$sql)['authour']."</td>";
                              closeConnection(openConnection());
                            ?>
                          </tr>
                          <tr>
                            <td><strong>Description:</strong></td>
                            <?php
                              $sql= "SELECT descrip FROM books WHERE book_id = ".getData('book_id')."";
                              echo "<td>".getBookData(openConnection(),$sql)['descrip']."</td>";
                              closeConnection(openConnection());
                            ?>
                          </tr>
                          <tr>
                            <td><strong>Genre:</strong></td>
                            
                            <?php
                              $sql= "SELECT genre FROM books WHERE book_id =".getData('book_id')."";
                              echo "<td>".getBookData(openConnection(),$sql)['genre']."</td>";
                              closeConnection(openConnection());
                            ?>
                          </tr>
                        </table>
                      </div>
                    </div>
        </section>
        

      
        <!-- User Reviews Section -->
        <section class="reviews-section">
          <h3>User Reviews</h3>
          
          <div class="review">
            <img src="../images/user1.jpg" alt="A picture of a man " class="profile-pic">
            <div class="review-content">
              <p class="user-name">Alex Johnson</p>
              <span class="rating">4/5</span>
              <p class="comment">An amazing read with deep character development!</p>
              <button class="like-btn">Like</button>
              <button class="dislike-btn">Dislike</button>
            </div>
          </div>
          
          
          <div class="review">
            <img src="../images/user2.jpg" alt="User 2 Profile" class="profile-pic">
            <div class="review-content">
              <p class="user-name">Emily Smith</p>
              <span class="rating">5/5</span>
              <p class="comment">Couldn't put it down! A must-read for everyone.</p>
              <button class="like-btn">Like</button>
              <button class="dislike-btn">Dislike</button>
            </div>
          </div>
        </section>
        <?php
            include 'footer.php';
        ?>
  </body>
</html>

<!--The story of Norman Bates, a caretaker at an isolated motel who struggles under his domineering mother and becomes embroiled in a series of murders.-->