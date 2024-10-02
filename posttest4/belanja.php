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
    
    <link rel="stylesheet" href="style-belanja.css">
    <link rel="stylesheet" href="style.css">

    <style>
      *{
        font-family: lato,  sans-serif;

      }
    </style>
</head>
<body  style="background-image: url(img/background_dji_drone.jpg);">
<?php require("navbar.php") ?>    
<div class="utama-banget">

    <div class="utama">
        <form class="kartu-belanja" action="konfirmasi.php" method="post">
            <h2>PEMBELIAN</h2>

            <br>

            <div class="form-control">
                <input
                    type="text"
                    id="nama"
                    name="nama" 
                    class="text-input input-info"
                    autocomplete="off"
                    placeholder="nama"
                    required
                />
                <label for="nama" class="label-input">
                    Nama Pembeli
                </label>
            </div>

            <br>

            <div class="form-control">
                <input
                    type="text"
                    id="alamat"
                    name="alamat"
                    class="text-input input-info"
                    autocomplete="off"
                    placeholder="alamat"
                    required
                />
                <label for="alamat" class="label-input">
                    Alamat
                </label>
            </div>

            <br>

            <div class="form-control">
                <input
                    type="text"
                    id="merk"
                    name="merk"
                    class="text-input input-info"
                    autocomplete="off"
                    placeholder="merk"
                    required
                />
                <label for="merk" class="label-input">
                    Merk Drone
                </label>
            </div>
            
            <br>
            
            <div class="form-control">
                <input
                    type="number"
                    id="jumlah"
                    name="jumlah"
                    class="text-input input-info"
                    autocomplete="off"
                    placeholder="jumlah"
                    required
                    min ="1"

                />
                <label for="jumlah" class="label-input">
                    Jumlah
                </label>
            </div>

            <br>

            <select required class="select select-neu"  id="paket" name="paket" >
                <option selected>Basic</option>
                <option>Combo</option>
                <option>Air Craft Only</option>
            </select>
        
            <br>
            <br>

            <button class="btn btn-outline">BUY</button>
        </form>
    </div>
    </div>
</body>
</html>