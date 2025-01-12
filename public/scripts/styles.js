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

