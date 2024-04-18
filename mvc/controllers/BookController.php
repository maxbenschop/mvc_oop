<?php
class BookController
{
    private $book;

    public function __construct()
    {
        $this->book = new Book();
    }

    public function index()
    {
        $boekenArray = $this->book->showAll();

        include __DIR__ . "/../views/bookList.php";
    }

    public function showBook($id)
    {
        if (!is_null($id)) {
            $this->book->load($id);
        }
        $book = $this->book;
        include __DIR__ . "/../views/bookdetails.php";
    }

    public function newBook($title, $author, $isbn)
    {

        if (strlen($title) > 0 && strlen($author) > 0 && strlen($isbn) > 0) {
            $this->book->title = htmlentities($title);
            $this->book->author = htmlentities($author);
            $this->book->isbn = htmlentities($isbn);
            if ($this->book->saveNew()) {
                $result = $this->book->title . " is toegevoegd!";
            } else {
                $result = "FOUT bij toevoegen " . $this->book->title;
            }
        } else {
            $result = "Vul alle velden in!";
        }
        include __DIR__ . "/../views/newbookresult.php";
    }

    public function deleteBook($id)
    {
        if (!is_null($id)) {
            $this->book->load($id);

            if ($this->book->delete()) {
                $result = "Boek met id {$id} is verwijderd.";
                header("Location: /");
            } else {
                $result = "FOUT bij verwijderen boek met id {&id} ";
            }
        } else {
            $result = "Boek met id {$id} is niet gevonden.";
        }
        include __DIR__ . "/../views/deletebookresult.php";
    }

    public function showUpdateForm($id)
    {
        if (!is_null($id)) {
            $this->book->load($id);
        }
        $book = $this->book;
        include __DIR__ . "/../views/updatebookform.php";
    }

    public function updateBook($id, $title, $author, $isbn)
    {
        if (strlen($id) > 0 && strlen($title) > 0 && strlen($author) > 0 && strlen($isbn) > 0) {
            $this->book->id = $id;
            $this->book->title = htmlentities($title);
            $this->book->author = htmlentities($author);
            $this->book->isbn = htmlentities($isbn);
            if ($this->book->update()) {
                $result = $this->book->title . " is aangepast!";
            } else {
                $result = "FOUT bij aanpassen " . $this->book->title;
            }
        } else {
            $result = "Vul alle velden in!";
        }
        include  __DIR__ . "/../../mvc/views/updatebookresut.php";
    }
}
