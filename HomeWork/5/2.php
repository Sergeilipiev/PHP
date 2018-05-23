<?php
//2. Сделать библиотеку, которая ведет учет книг. Должно быть как минимум два класса: Book и Library.
// Library имеет два метода: void put(Book book, int quantity) и int get(Book book, int quantity).
// Каждой книге в библиотеке соответствует счетчик, показывающий количество хранящихся книг,
// при добавлении книги - счетчик увеличивается, при извлечении - уменьшается на число quantity.
//Поля класса Book: author, title, pagesNum.
//Библиотека хранит ограниченное число книг, сколько - на ваше усмотрение.

class Library {
    private $maxBooks;
    private $totalBooks;
    private $count = 1;
    private $books = [];

    public function __construct(int $maxBooks = 8){
        $this->maxBooks = $maxBooks;
    }
    public function put(Book $book, int $quantity) {
        if ($this->totalBooks+$quantity <= $this->maxBooks) {
            for ($i=0;$i < $quantity;$i++){
                $this->books[$this->count] = $book;
                $this->count++;
                $this->totalBooks++;
            }
//
        } else echo "Мест нет";

    }
    public function get (Book $book, int $quantity) {
        for ($i=0;$i < $quantity;$i++){
            $key = array_search($book, $this->books);
            unset($this->books[$key]);
            $this->totalBooks--;
        }

    }

}

class Book {
    private $author;
    private $title;
    private $pagesNum;

    public function __construct($author,$title,$pagesNum)
    {
        $this->author = $author;
        $this->title = $title;
        $this->pagesNum = $pagesNum;
    }
}
$library = new Library(12);
$book1 = new Book('author1','title1',180);
$book2 = new Book('author2','title2',250);
$library->put($book1,4);
$library->put($book2,3);
$library->get($book1,3);
$library->put($book1,6);
$library->get($book2,6);
$library->put($book2,2);
//echo "<pre>";
//echo $library->totalBooks;
//print_r($library->books);

