<?php
    require "koneksi.php";

    $id_produk = $_GET["id_produk"];

    $result = mysqli_query($conn, "DELETE FROM belanja WHERE id_produk = $id_produk");

    if ($result) {
        echo "
        <script>
        alert('Berhasil Menghapus Data Mahasiswa!');
        document.location.href = 'index.php';
        </script>
        ";
    }
?>