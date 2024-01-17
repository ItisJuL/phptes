<html>
<head>
    <title>Program1</title>
</head>
<body>
    <?php
      $nama = $_POST["nama"];
    ?>
    <?php
      echo "<b>Selamat Datang, $nama!</b>";
      echo "<hr>\n";
      echo "Hari ini tanggal : " . date("d F Y"); 
    ?>
</body>
</html>