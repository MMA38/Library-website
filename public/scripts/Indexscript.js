//This php on this page was written by Mathew Chebet.

/*index page*/
const next_btn = document.getElementById("new_add");  // Next button in new additions section.
const new_add_img = document.getElementById("new_book"); // Image in new additions section.
const new_add_title = document.getElementById("new_add_title"); // Book title in new additions section.
const srcPaths= ["images/book1.png","images/book2.png","images/book3.png"]; // Stores image path.
const bookTitles= ["How Innovation Works By Matt Ridley", "Company of One By Paul Jarvis", "The Psychology of Money By Morgan Housel"]; // Stores new addition titles.
const imageDescription =["A yellow book in front of a yellow background. The name of the authour, whose name is Matt Ridley is written in black in the top left corner of the book. To the right of the authours name there are 2 paper airplanes. Below the paper airplanes is the title of the book, which is How Innovation works. On the bottom right of left of the book there are to crumpled paper balls.", "The book is in front of a white background and to the white of it is a white orchid. The book title reads Company of One. The book cover has a image of fish in a triangle formation and then there is single red fish at that is leading this triangle of fish. The authours name, Paul Jarvis is written at the bottom right corner of the book.", "The book is in front of a forest green background. The title of the book, which is The Psychology of Money takes up 1 third of the book cover. The second 1 third has a picture of a brain. Finally, the last third has some notes about the book and the authour's name." ]
let new_add_index =0;
const navOptions = document.getElementById('nav_options');

function toggleMenu() {
    navOptions.classList.toggle('show');
  }

function nextOptions(){

    if (new_add_index >= 0 && new_add_index < srcPaths.length-1){
        new_add_index=new_add_index+1;
        new_add_img.removeAttribute("src"); // remove the current image.
        new_add_img.setAttribute("src", srcPaths[new_add_index]); //add the new image. 
        new_add_img.removeAttribute("alt"); // remove the current image.
        new_add_img.setAttribute("alt", imageDescription[new_add_index]); //add the new image. 
        new_add_title.innerHTML=bookTitles[new_add_index];
    }

    else{
        new_add_index=0;//set the counter back to 0.
        new_add_img.removeAttribute("src");// remove the current image. 
        new_add_img.setAttribute("src", srcPaths[new_add_index]); //add the new image.
        new_add_img.removeAttribute("alt"); // remove the current image.
        new_add_img.setAttribute("alt", imageDescription[new_add_index]); //add the new image.  
        new_add_title.innerHTML=bookTitles[new_add_index];
    } 

} 

next_btn.addEventListener("click", nextOptions); //Moves to the next book when clicked.

/*end of index page */

/*Start of find books page*/
const search_by_genre = document.getElementById("search_genre"); // genre checkbox
const search_by_title = document.getElementById("search_title"); // title checkbox
const criteria_error= document.getElementById("criteria_error");

function searchResult(){
    //Checks if one of the search criteria are checked.
    if(search_by_genre.checked === false && search_by_title.checked === false){
        return false;//Cancel form submission.
    }

    else {
        criteria_error.innerText= "";
        return true //Send the form;
    }
}

console.log(searchResult);


const track = document.querySelector('.carousel-track');
const prevButton = document.querySelector('.prev-btn');
const nextButton = document.querySelector('.next-btn');
const items = document.querySelectorAll('.book-item');

// Calculate width of a single item
const itemWidth = items[0].offsetWidth + 15; // Include the gap

let currentPosition = 0;

// Move carousel left
prevButton.addEventListener('click', () => {
    currentPosition = Math.min(currentPosition + itemWidth, 0); // Prevent scrolling past start
    track.style.transform = `translateX(${currentPosition}px)`;
});

// Move carousel right
nextButton.addEventListener('click', () => {
    const maxScroll = -(itemWidth * (items.length - Math.floor(track.offsetWidth / itemWidth)));
    currentPosition = Math.max(currentPosition - itemWidth, maxScroll); // Prevent scrolling past end
    track.style.transform = `translateX(${currentPosition}px)`;
});
const hamburger = document.getElementById('hamburger');
const navBar = document.getElementById('nav_bar');

// Toggle the navbar on hamburger click
hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active'); // Toggle the 'active' class on the hamburger
    navBar.classList.toggle('active'); // Toggle the 'active' class on the navbar
});

/*End of find books page*/