CREATE TABLE books (
    isbn VARCHAR(20) PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    publisher VARCHAR(255),
    num_copies INT,
    genre VARCHAR(100),
    books_out INT DEFAULT 0,
    books_in INT DEFAULT 0
);

CREATE TABLE staff (
    staff_id INT AUTO_INCREMENT PRIMARY KEY,
    ssn VARCHAR(20) NOT NULL,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    email VARCHAR(255),
    books_checked_in INT DEFAULT 0,
    address VARCHAR(255)
);

CREATE TABLE library_members (
    card_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    address VARCHAR(255),
    book_list TEXT,
    book_history TEXT,
    late_fees DECIMAL(10, 2) DEFAULT 0,
    payments DECIMAL(10, 2) DEFAULT 0
);

INSERT INTO books (isbn, title, author, publisher, num_copies, genre)
VALUES ('1234567890', 'Sample Book', 'John Doe', 'Publisher A', 100, 'Fiction');

UPDATE books 
SET num_copies = 120,
    books_in = 120,
    genre = 'Non-Fiction'
WHERE isbn = '1234567890';


DELETE FROM books
WHERE isbn = '1234567890';

INSERT INTO staff (ssn, name, phone, email, address)
VALUES ('123-45-6789', 'Jane Smith', '123-456-7890', 'jane@example.com', '123 Main St');

UPDATE staff
SET phone = '987-654-3210', address = '456 Elm St'
WHERE staff_id = 1;

DELETE FROM staff
WHERE staff_id = 1;

INSERT INTO library_members (name, address, book_list, book_history, late_fees, payments)
VALUES ('Alice Johnson', '789 Oak St', '', '', 0, 0);

UPDATE library_members
SET late_fees = 10.50, payments = 20.00
WHERE card_id = 1;

DELETE FROM library_members
WHERE card_id = 1;