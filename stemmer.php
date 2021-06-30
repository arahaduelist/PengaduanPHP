<?php

// include composer autoloader
include "template.php";
include "config.php";
require_once __DIR__ . '/vendor/autoload.php';

// create stemmer
// cukup dijalankan sekali saja, biasanya didaftarkan di service container

$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();

$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
$stemmer  = $stemmerFactory->createStemmer();


$sql = "SELECT * FROM data_pengaduan";
$query = mysqli_query($db, $sql);

while($row = mysqli_fetch_array($query)){

    $pengaduan = $row['pengaduan'];

    // stem
    $sentence = $pengaduan;
    $output   = $stemmer->stem($sentence);

    echo $output . "\n";

}