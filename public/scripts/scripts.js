//Written by Elvin James.

// JavaScript to handle like and dislike button clicks
document.addEventListener("DOMContentLoaded", function() {
    const likeButtons = document.querySelectorAll(".like-btn");
    const dislikeButtons = document.querySelectorAll(".dislike-btn");
  
    likeButtons.forEach(button => {
      button.addEventListener("click", () => {
        alert("You liked this review!");
      });
    });
  
    dislikeButtons.forEach(button => {
      button.addEventListener("click", () => {
        alert("You disliked this review!");
      });
    });
  });


  function toggleMenu() {
    const navOptions = document.getElementById('nav_options');
    navOptions.classList.toggle('show');
  }
  
// JavaScript to handle like and dislike button clicks
document.addEventListener("DOMContentLoaded", function() {
    const likeButtons = document.querySelectorAll(".like-btn");
    const dislikeButtons = document.querySelectorAll(".dislike-btn");
  
    likeButtons.forEach(button => {
      button.addEventListener("click", () => {
        alert("You liked this review!");
      });
    });
  
    dislikeButtons.forEach(button => {
      button.addEventListener("click", () => {
        alert("You disliked this review!");
      });
    });
  });


  function toggleMenu() {
    const navOptions = document.getElementById('nav_options');
    navOptions.classList.toggle('show');
  }
  