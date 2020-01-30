<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bermain Warna</title>
</head>
<?php 
if(!empty($_GET['warna'] )){
?>
    <style>
    body{
        background: <?php echo $_GET['warna'] ?>;
    }
    </style>
<?php 
}
?>
<body>
    <form action="" method="get">
        <label for="">Pilih warna background</label>
        <br>
        <input type="color" name="warna" id="">
        <hr>
        <input type="submit" value="simpan">
    </form>
</body>
</html>