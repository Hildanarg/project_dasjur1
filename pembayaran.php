<?php


require"config.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <style>
        button a{
            text-decoration: none;
            color: black;
            
        }
        .container{
            text-align: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
    <form action="">
        <label for="">Username: </label>
        <input type="text" placeholder="Masukan username anda"><br>
        <label for="">Unit:</label>
        <input type="number" name="" id=""><br>
        <label for="">Pembayaran via</label>
        <select name="" id="">
            <option value="">COD</option>
            <option value="">OVO</option>
            <option value="">PAYPAL</option>
            <option value="">DANA</option>
        </select> <br>
        <label for="" class="nomor_telp">Nomor telp</label>
        <input type="number" name="" id=""> <br>
        <label for="">Alamat:</label><br>
        <textarea name="" id="" cols="30" rows="5" placeholder="alamat anda"></textarea><br>
        <button>>submit</button>
    </div>

        
    </form>
</body>
</html>