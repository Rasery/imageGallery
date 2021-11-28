<?php

include "mainPage.html";
include "data.php";

$filename = $_POST['file'];

find_file($filename);

function find_file($filename)
{
    $data = new Data();

    $inputFormat = '.wav';

    $correct = $data->file_formats;

    foreach ($correct as $format) {
        if ($format == $inputFormat) {
            echo 1;
            return true;
        } else {
            echo 0;
            return false;
        }
    }
}