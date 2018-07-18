<?php

/** Родительский класс TextFile */
class TextFile
{
    protected $path;
    protected $dataArr;

    /** Подключает файл, путь которого - значение передаваемое как аргумент в метод конструктор */
    public function __construct($path)
    {
        if (!is_readable($path)) {
            die();
        }
        $this->path = $path;
        $this->dataArr = file($this->path, FILE_IGNORE_NEW_LINES);

    }
}

/** Класс GuestBook наследуется от класса TextFile */
class GuestBook extends TextFile
{
    public $readyData;
    protected $text;

    /** Возвращает значение массив записей */
    public function getData()
    {
        if (!isset($this->dataArr)) {
            die();
        }
        return $this->dataArr;
    }

    /** Добавляет новую элемент в массив. Возвращает готовый массив для записи в файл */
    public function append($text)
    {
        $this->text = trim($text);
        $this->dataArr[] = $this->text;
        return $this->dataArr;

    }

    /** Сохраняет масив записей в файл */
    public function save()
    {
        $this->readyData = implode("\n", $this->dataArr);
        file_put_contents($this->path, $this->readyData);
    }
}

/** Знаю, что выводить теги PHP - Лишнее Но тут для удобства кода */
echo '<pre>';
$path = __DIR__ . '/data.txt';
$gb = new GuestBook($path);
$gb->getData();
$gb->append('Петров;Инокентий;Смактунович;d11114@yan223.ru;79153521244');
$gb->save();





