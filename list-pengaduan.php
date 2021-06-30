<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>	
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">PENGADUAN MASYARAKAT</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="list-pengaduan.php" class="nav-link">List Pengaduan</a>
                </li>
                <li class="nav-item">
                    <a href="tokenizer.php" class="nav-link">Tokenizer</a>
                </li>
                <li class="nav-item">
                    <a href="stemmer.php" class="nav-link">Stemmer</a>
                </li>
                <li class="nav-item">
                    <a href="stopword.php" class="nav-link">StopWord</a>
                </li>
                <li class="nav-item">
                    <a href="TF-IDF.php" class="nav-link">TF-IDF</a>
                </li>
				
            </ul>
		</div>
	</nav>
	
   
        <h3$row SUDAH DAFTAR</h3>
    <br>

    <form method="GET" action="list-pengaduan.php" >
        <label>Kata Pencarian : </label>
        <input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
        <button type="submit">Cari</button>
    </form>
	
	<div class="table-responsive">
    <table class="table" width="490" height="27" border="1">
    <thead>
		<tr>
			<th width=>
			 <a href="form-pengaduan.php">[+] Tambah Baru</a>
			</th>
		</tr>
        <tr>
            <th width="5px">No</th>
            <th>Pengaduan</th>
            <th>Nama</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
         //jika kita klik cari, maka yang tampil query cari ini
         if(isset($_GET['kata_cari'])) {
         //menampung variabel kata_cari dari form pencarian
         $kata_cari = $_GET['kata_cari'];
 
         //mencari data dengan menggunakan query
         $query = "SELECT * FROM data_pengaduan WHERE nama like '%".$kata_cari."%' ORDER BY nama ASC";
         } else {
         //jika tidak ada pencarian, default yang dijalankan query ini
         $query = "SELECT * FROM data_pengaduan ORDER BY id ASC";
         }
         
 
         $result = mysqli_query($db, $query);
         $no = 1;
         if(!$result) {
         die("Query Error : ".mysqli_errno($db)." - ".mysqli_error($db));
         }
         //kalau ini melakukan foreach atau perulangan
         while ($row = mysqli_fetch_assoc($result)) { 

            echo "<tr>";

            echo "<td>".$no++."</td>";
            echo "<td>".$row['pengaduan']."</td>";
            echo "<td>".$row['nama']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$row['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$row['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>    
		<td>
				<p>Total: <?php echo mysqli_num_rows($result) ?></p>
		</td>
    </table>
		
    </body>
</html>