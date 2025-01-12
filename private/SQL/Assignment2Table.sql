--Written by Mathew and Manaf Akil.

--DDL Statements

CREATE DATABASE bookcatalogue;
USE bookcatalogue;

CREATE TABLE books(
    book_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    genre VARCHAR(50) NOT NULL,
    src VARCHAR(50),
    alt VARCHAR(500),
    authour VARCHAR(50),
    descrip VARCHAR(500),
    rating VARCHAR(5)
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email_or_phone VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(100) NOT NULL,
    username VARCHAR(100),
    city VARCHAR(100),
    province VARCHAR(100),
    country VARCHAR(100),
    street VARCHAR(255),
    postal_code VARCHAR(20),
    phone_number VARCHAR(15),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE favourites(
    favourite_id INT AUTO_INCREMENT PRIMARY KEY,
    id INT,
    book_id INT,
    review VARCHAR(500),
    rating VARCHAR(5),
    favourite VARCHAR(3),
    FOREIGN KEY (id) REFERENCES users(id),
    FOREIGN KEY (book_id) REFERENCES books(book_id)
);

--DML Statements

INSERT INTO `books` (`book_id`, `title`, `genre`, `src`, `alt`, `authour`, `descrip`, `rating`) VALUES 
 (NULL, 'How Innovation Works', 'Development', '../images/book1.jpg', 'A yellow book in front of a yellow background. The name of the authour, whose name is Matt Ridley is written in black in the top left corner of the book. To the right of the authour\'s name there are 2 paper airplanes. Below the paper airplanes is the title of the book, which is How Innovation works. On the bottom right of left of the book there are to crumpled paper balls.', 'Matt Ridley', 'Learn what it means to be innovative and how to change your perception.', '5/5'),
 (NULL, 'Romeo & Juliet', 'Drama', '../images/book2.jpg', 'A maroon coloured book cover, with the title Romeo and Juliet written in cursive in black ink. At the top left corner you can see the name of the publisher which is Folger Shakespeare Library. At the bottom right of the cover there is a caption that says there are detailed notes with it. Finally, below this is are the names of the editors who are Barbara A. Mowat and Paul Werstine.', 'Shakespeare', 'Learn about the story of Romeo & Juliet and the Capulets and Montegues', '4/5'), 
 (NULL, 'The Golden Bough', 'Development/Theology', '../images/book3.jpg', 'A cover page for the book The Golden Bough. On this cover is a shirtless man with gray hair and he is holding a sword by its handle and an ornage snake is wrapped around his hand. Behind the man is a green hill with the sun setting in the background. ', 'Sir James George Fraizer', 'Learn what it means to be innovative and how to change your perception.', '5/5'), 
 (NULL, 'Around the World in Eight Days', 'Adventure', '../images/book4.jpg', 'A black man in a turban and a white man in a brown suit and cap are riding on top of a black elephant. On the left of the elephant you can see a man in a black top hat, a black suit and yellow and brown plaid pants sitting on a wooden plank.', 'Jules Verne', 'Learn what it means to travel the world in 8 days.', '5/5'), 
 (NULL, 'Treasure Island', 'Adventure', '../images/book5.jpg', 'The cover page for the book Treasure Island. A pirate with a pirate hat and pet bird on his left shoulder is standing behind a young boy who seems to be steering a pirate ship. The title of the book is located to the right side of the book near the center and it is written in black.', 'Robert Louis Stevenson', 'Learn about the journey to treasure island.', '4.5/5'), 
 (NULL, 'Psyco', 'Drama/Horror', '../images/book6.jpg', 'The cover page for the book Psycho. The word Psycho is written vertically in white and bold font. There is line that looks like a tear going through the word psycho. The background colour of the cover is black.', 'Robert Bloch', 'Learn about the story of Norman Bates', '4.7/5');