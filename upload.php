<?php

class Uploader
{
    public function __construct($upfile)
    {
    }

    public function isUploaded()
    {

    }

    public function upload()
    {

    }
}

?>

<form action="/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="upfile">
    <button type="submit">Upload</button>
</form>
<?php
$uploader = new Uploader()
?>
