<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>
    Welcome !
</h1>
 <br>
    <?php echo $_POST["Nama"]; ?> <br>
    Nim Anda Adalah : <?php echo $_POST["username"]; ?> <br>
    Alamat E-mail : <?php echo $_POST["email"]; ?> <br>
    No Handphone : <?php echo $_POST["nohp"]; ?> <br>
    Jenis Kelamin : <?php echo $_POST["JK"]; ?> <br>
    Bahasa Pemrograman Yang Anda Kuasai Adalah
    <?php echo $_POST["BahasaPemrogramanYangDikuasai"]?>
    <br>
    <br>
    <br>
    Motivasi Anda Masuk Komunitas Ini : <br>
    <?php echo $_POST["Motivasi"]; ?>
</body>
</html>