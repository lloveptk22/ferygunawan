<HTML>
    <head>
    <title>Contoh Skip PHP</title>
</head>
<body>
    <?php
    $nilai = 85;
    $nama = "Amir";
    if ($nilai >= 80){
        echo $nama." Mendapatkan Nilai A";
    }
    elseif ($nilai >=70){
        echo $nama." Mendapatkan Nilai B";
    }
    elseif ($nilai >=60){
        echo $nama." Mendapatkan Nilai C";
    }
    else{
        echo $nama." Mendapatkan Nilai D";
    }
    ?>
    
</body>


</HTML>
