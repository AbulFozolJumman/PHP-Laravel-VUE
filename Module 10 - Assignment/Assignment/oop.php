<?php
// Problem 2

class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies){
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
       return $this->title;
    }

    public function getAvailableCopies() {
       return $this->availableCopies;
    }

    public function borrowBook(){
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return "Successfully borrowed '{$this->title}'.";
        } else {
            return "Sorry, '{$this->title}' is currently out of stock.";
        }
    }


    public function returnBook(){
        $this->availableCopies++;
        return "Successfully returned '{$this->title}'.";
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function borrowBook($book){
        return $book->borrowBook();
    }

    public function returnBook($book){
        return $book->returnBook();
    }
}

// Creating Book 1
$book1 = new Book("The Great Gatsby", 5);

// Creating Book 2
$book2 = new Book("To Kill a Mocking Bird", 3);

// Creating a Member
$rohim = new Member("Rohim");

// Borrowing and Returning Books
echo $rohim->borrowBook($book1) . PHP_EOL;
echo $rohim->borrowBook($book1) . PHP_EOL;
echo $rohim->returnBook($book1) . PHP_EOL;

// Display Available Copies
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}" . PHP_EOL;