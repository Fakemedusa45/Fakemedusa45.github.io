<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="icon" href="img/logo_dji.png">
    
    <link rel="stylesheet" href="style-konfirmasi.css">

    <style>
      *{
        font-family: lato,  sans-serif;

      }
    </style>
</head>

<body style="background-image: url(img/background_dji_drone.jpg); background : blur(10px)">
<div class="utama-banget">
<div class="utama">
        <form class="kartu-belanja" action="index.php" method="post">
            <h2>KONFIRMASI</h2>

            <br>

            <div class="form-control">
                <h1>Nama : <?php echo $_POST["nama"]?></h1>
            </div>

            <br>

            <div class="form-control">
                <h1>Alamat : <?php echo $_POST["alamat"]?></h1>
            </div>

            <br>

            <div class="form-control">
                <h1>Merk Drone : <?php echo $_POST["merk"]?></h1>  
                
            
            </div>
            
            <br>
            
            <div class="form-control">
                <h1>Jumlah : <?php echo $_POST["jumlah"]?></h1>
            </div>

            <br>
                <h1>Paket : <?php echo $_POST["paket"]?></h1>
            <br>

            <button class="btn btn-outline" id="konfirmasi-belanja">KONFIRMASI</button>

        </form>
</div>
</div>
<script src="konfirmasi.js"></script>
</body>
</html>