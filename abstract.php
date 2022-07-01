<?php

abstract class Book {
    protected $title;
    protected $author;

    /**
     * @param $title
     * @param $author
     */
    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    abstract protected function display();
}

class MyBook
{
    protected $title;
    protected $author;
    protected $price;

    /**
     * @param $title
     * @param $author
     * @param $price
     */
    public function __construct($title, $author, $price)
    {
        $this->title = trim($title);
        $this->author = trim($author);
        $this->price = trim($price);
    }


    public function display()
    {
        print('Title: ' . $this->title);
        print('Author: ' . $this->author);
        print('Price: ' . $this->price);
    }
}