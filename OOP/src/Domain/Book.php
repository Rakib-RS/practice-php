<?php
namespace Bookstore\Domain;
    class Book{
        public $isbn;
        public $title;
        public $author;
        public $available;
        public function getPrint():string{
            $result = '<i>' . $this->title . '</i>';
            return $result;
        }
        public function __construct(int $isbn, string $title, string $author,
        int $available) {
            $this->isbn = $isbn;
            $this->title = $title;
            $this->author = $author;
            $this->available = $available;
        }
    }
    $book = new Book(123,'wonder','rakib',12);
   
   // print_r($book->getPrint());
?>