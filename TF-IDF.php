<?php
    include "template.php";
?>

<?php
	include "config.php";
    require_once __DIR__.'/vendor/autoload.php';

    use Phpml\FeatureExtraction\TokenCountVectorizer;
    use Phpml\Tokenization\WhitespaceTokenizer;
    use Phpml\FeatureExtraction\TfIdfTransformer;

    $sql = mysqli_query($db, "SELECT * FROM data_pengaduan");
    while ($data = $sql->fetch_assoc()) { 
        
        echo $pengaduan = $data['pengaduan'];
        
    }

    $sample_data = array($pengaduan);

	

    $tf = new TokenCountVectorizer(new WhitespaceTokenizer());
    $tf->fit($sample_data);
    $tf->transform($sample_data);
    $vocabulary = $tf->getVocabulary();
    $i = 1;

    // Menghitung Term Frequency (TF)
    echo "<b>TERM FREQUENCY</b><br><br>";
    echo "<table border='1'>";
    echo "<tr><th align='center'></th>";
    foreach($vocabulary as $term){
        echo "<th align='center'>".$term."</th>";
    }
    echo "</tr>";

    foreach($sample_data as $isi){
        if($i == count($sample_data)){
            echo "<tr><td>Q</td>";
        }
        else{
            echo "<tr><td>D".$i."</td>";
        }

        foreach($isi as $item){
            echo "<td>".$item."</td>";
        }

        echo "</tr>";
        $i++;
    }

    echo "</table><br><br>";

    // Menghitung TF-IDF

    $tfidf = new TfIdfTransformer($sample_data);
    $tfidf->transform($sample_data);
    $i = 1;

    echo "<b>TF-IDF</b><br><br>";
    echo "<table border='1'>";
    echo "<tr><th align='center'></th>";
    foreach($vocabulary as $term){
        echo "<th align='center'>".$term."</th>";
    }
    echo "</tr>";

    foreach($sample_data as $isi){
        if($i == count($sample_data)){
            echo "<tr><td>Q</td>";
        }
        else{
            echo "<tr><td>D".$i."</td>";
        }

        foreach($isi as $item){
            echo "<td>".round($item, 1)."</td>";
        }

        echo "</tr>";
        $i++;
    }

    echo "</table><br><br>";

    

    echo "<br><br>";
?>