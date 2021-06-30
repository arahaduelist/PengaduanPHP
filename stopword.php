<?php

include "template.php";
require_once __DIR__ . '/vendor/autoload.php';
include "config.php";

$stopWordRemoverFactory = new \Sastrawi\StopWordRemover\StopWordRemoverFactory();

$sql = "SELECT * FROM data_pengaduan";
$query = mysqli_query($db, $sql);

while($row = mysqli_fetch_array($query)){

    $pengaduan = $row['pengaduan'];

    $sentence = $pengaduan;
    $stopword = $stopWordRemoverFactory->createStopWordRemover();
    $outputstopword = $stopword->remove($sentence);
    echo $outputstopword;
}

?>