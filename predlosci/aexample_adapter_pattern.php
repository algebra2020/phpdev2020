<?php

class SimpleBook {
    private $author;
    private $title;
    function __construct($author_in, $title_in) {
        $this->author = $author_in;
        $this->title  = $title_in;
    }
    function getAuthor() {
        return $this->author;
    }
    function getTitle() {
        return $this->title;
    }
}

class BookAdapter {
    private $book;
    function __construct(SimpleBook $book_in) {
        $this->book = $book_in;
    }
    function getAuthorAndTitle() {
        return $this->book->getTitle().' by '.$this->book->getAuthor();
    }
}
class Bookprimjer implements \Countable, \Iterator
{

public function count(): int{
    return 5;
}
public function current(){
}public function key(): \scalar{
}public function next(): void{
}public function rewind(): void{
}public function valid(): bool{
}}
class BookList implements \Countable, \Iterator
{
    /**
     * @var Book[]
     */
    private $books = [];

    /**
     * @var int
     */
    private $currentIndex = 0;

    public function addBook(SimpleBook $book)
    {
        $this->books[] = $book;
    }

    public function removeBook(SimpleBook $bookToRemove)
    {
        foreach ($this->books as $key => $book) {
            if ($book->getAuthorAndTitle() === $bookToRemove->getAuthorAndTitle()) {
                unset($this->books[$key]);
            }
        }

        $this->books = array_values($this->books);
    }

    public function count(): int
    {
        return count($this->books);
    }

    public function current(): SimpleBook
    {
        return $this->books[$this->currentIndex];
    }

    public function key(): int
    {
        return $this->currentIndex;
    }

    public function next()
    {
        $this->currentIndex++;
    }

    public function rewind()
    {
        $this->currentIndex = 0;
    }

    public function valid(): bool
    {
        return isset($this->books[$this->currentIndex]);
    }
}

  // client

  writeln('BEGIN TESTING ADAPTER PATTERN');
  writeln('');

  $book = new SimpleBook("Gamma, Helm, Johnson, and Vlissides", "Design Patterns");
  $bookAdapter = new BookAdapter($book);
  writeln('Author and Title: '.$bookAdapter->getAuthorAndTitle());
  writeln('');

  writeln('END TESTING ADAPTER PATTERN');

  function writeln($line_in) {
    echo $line_in."<br/>";
  }
  
  /// testiranje iterator
  
  $bookList = new BookList();
        $bookList->addBook(new SimpleBook('Learning PHP Design Patterns', 'William Sanders'));
        $bookList->addBook(new SimpleBook('Professional Php Design Patterns', 'Aaron Saray'));
        $bookList->addBook(new SimpleBook('Clean Code', 'Robert C. Martin'));

        $books = [];

        foreach ($bookList as $book) {
           // $books[] = $book->getAuthorAndTitle();
            $books[] = $book->getAuthor().$book->getTitle();
        }
        print_r($book);
  

?>
