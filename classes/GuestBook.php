<?php
require __DIR__ . '/GuestBookRecord.php';

class GuestBook
{
    protected $records;
    protected $bigLine;

    public function __construct()
    {
        $lines = file(__DIR__ . '/../data.txt', FILE_IGNORE_NEW_LINES);
        $this->records = [];
        foreach ($lines as $line) {
            $this->records[] = new GuestBookRecord($line);
        }
    }

    public function getRecords()
    {
        return $this->records;
    }

    public function addRecord($record)
    {
        $this->records[] = $record;
    }

    public function saveRecords()
    {
        $this->bigLine = implode("\n", $this->records);
        file_put_contents(__DIR__ . '/../data.txt', $this->bigLine);
    }
}