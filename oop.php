<?php

class Book
{

    // TODO: Add properties as Private

    private $title = "";
    private $availableCopies = 0;

    public function __construct($title, $availableCopies)
    {

        // TODO: Initialize properties

        $this->title = $title;
        $this->availableCopies = $availableCopies;

    }

    // TODO: Add getTitle method

    public function getTitle() {
        echo $this->title;
    }

    // TODO: Add getAvailableCopies method
    public function getAvailableCopies(){
        echo $this->availableCopies;
    }
 
    // TODO: Add borrowBook ​​method

    public function borrowBook() {
        $this->availableCopies = $this->availableCopies - 1;
    }

    // TODO: Add returnBook method

    public function returnBook() {
        $this->availableCopies = $this->availableCopies + 1;
    }

}

class Member
{

    // TODO: Add properties as Private
    private $name = "";

    public function __construct($name)
    {

        // TODO: Initialize properties

        $this->name = $name;

    }

    // TODO: Add getName method

    public function getName() {
        echo $this->name;
    }

    // TODO: Add borrowBook ​​method

    public function borrowBook($book) {
        return true;
    }

    // TODO: Add returnBook method

    public function returnBook($book) {
        return true;
    }

}

// TODO: Create 2 books with the following properties

$Book1 = new Book("The Great Gatsby", 5);
$Book2 = new Book("To Kill a Mockingbird", 3);

// TODO: Create 2 members with the following properties

$Member1 = new Member("John Doe");
$Member2 = new Member("Jane Smith");

// TODO: Apply Borrow book method to each member

$Member1->borrowBook("The Great Gatsby");
$Member2->borrowBook("To Kill a Mockingbird");

$Book1->borrowBook();
$Book2->borrowBook();

// TODO: Print Available Copies with their names:

echo "Available Copies of '";
$Book1->getTitle();
echo "': ";
$Book1->getAvailableCopies();

echo PHP_EOL;
echo PHP_EOL;

echo "Available Copies of '";
$Book2->getTitle();
echo "': ";
$Book2->getAvailableCopies();
