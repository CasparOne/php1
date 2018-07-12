<?php

/** Родительский класс TextFile */
class TextFile
{
    protected $path;
    public $readyData;

    /** Подключает файл, путь которого - значение передаваемое как аргумент в конструктор */
    public function __construct($path)
    {
        if (!is_readable($path)) {
            die();
        }
        $this->path = $path;
    }

    /** Сохраняет готовый контент в файл */
    public function save()
    {
        file_put_contents($this->path, implode("\n", $this->readyData));
    }
}

/** Класс GuestBook наследуется от класса TextFile */
class GuestBook extends TextFile
{
    protected $dataArr;
    protected $text;

    /** Получает значения в масив из файла */
    public function getData()
    {
        $this->dataArr = file($this->path, FILE_IGNORE_NEW_LINES);
        return $this->dataArr;
    }

    /** Добавляет новую элемент в массив. Возвращает готовый массив для записи в файл */
    public function append($text)
    {
        $this->text = $text;
        $this->getData();
        $this->dataArr[] = $text;
        return $this->dataArr;
    }
}

//echo '<pre>';
$path = __DIR__ . '/data.txt';
$gb = new GuestBook($path);
//$gb->readyData = $gb->append('Петров;Инокентий;Филипович;d11114@yan223.ru;79153521244');
//$gb->save();
var_dump($gb->getData());


