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

	<h2>FORM PENGADUAN</h2>
	
    <form class="main-form" action="proses-pengaduan.php" method="POST">

        <div class="form-group">
            <label for="pengaduan">PENGADUAN</label>
			<textarea name="pengaduan" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="nama">NAMA</label>
            <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" required>
            <div class="invalid-feedback">Please enter a valid username.</div>
        </div>
        <button type="submit" value="DAFTAR" name="daftar" class="btn btn-primary">DAFTAR</button>

    </form>
	
	
	<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "BERHASIL !";
            } else {
                echo "GAGAL !";
            }
        ?>
    </p>
    <?php endif; ?>
	

	
	
	
    </body>
</html>