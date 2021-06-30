<?php
include "template.php";
include "config.php";

$sql = "SELECT * FROM data_pengaduan";
$query = mysqli_query($db, $sql);

while($row = mysqli_fetch_array($query)){

    $pengaduan = array($row['pengaduan']);

    $spengaduan = implode("|",$pengaduan);

    $string = $spengaduan;
    $token = strtok($string, " ");

    while ($token !== false)
    {
    echo "$token<br>";
    $token = strtok(" ");
    }
}
?>