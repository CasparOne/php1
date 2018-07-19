<?php


class Image
{
    protected $listOfImg;

    public function __construct()
    {
        $this->listOfImg = array_diff(scandir(__DIR__ . '/../images'), ['.', '..']);

    }

    public function getImgList()
    {
        return $this->listOfImg;
    }


}