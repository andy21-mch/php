<?php

$data = ['John',  25, 'nfon@gmail.com'];
$data2 = ['Jane',  25, 'jane@gmail.com'];

$file = fopen('file.csv', 'a');
if($file){
    echo "File Opened...";
    fputcsv($file, $data2);

    echo "File Written...";
}else{
    echo "file could not be opened...";
}