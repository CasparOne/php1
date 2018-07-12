<?php

class TextFile
{
    protected $path;

    public function __construct($path)
    {
        $this->path = $path;
        if (!is_readable($this->path)) {
            die();
        }

    }

}

class GuestBook extends TextFile
{
    protected $dataArr;
    protected $text;

    public function __construct($path)
    {
        parent::__construct($path);
        $this->dataArr = file($this->path);
    }

    public function save()
    {
        $this->append($this->text);
        foreach ($this->dataArr as $line) {
            file_put_contents($this->path, $line);
        }
    }

    public function append($text)
    {
        $this->text = $text;
        $this->dataArr = $this->getData();
        if (!isset($text)) {
            die();
        }
        $this->dataArr[] = $text;
        return $this->dataArr;
    }

    public function getData()
    {
        return $this->dataArr;
    }
}

$text = 'Петров;Петр;Петрович;32345@ya.ru;7815003422';
$path = __DIR__ . '/data.txt';

$guestBook = new GuestBook($path);
var_dump($guestBook->getData());
$guestBook->append($text);
$guestBook->save();
var_dump($guestBook->getData());
foreach ($guestBook->getData() as $line) {
    ?> <h4><?php echo $line ?></h4><?php
}

?>