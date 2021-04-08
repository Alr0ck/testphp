<?php
    include("connection.php");

    $getLastLaporan = mysqli_query($conn,"select * from laporan order by id desc limit 1");
    if(mysqli_num_rows($getLastLaporan) == 0){
        echo '<script>document.location="../index.php?state=false&msg=Data laporan kosong";</script>';
        return;
    }

    $laporan = mysqli_fetch_array($getLastLaporan);
    
    $getTransaksi = mysqli_query($conn,"select * from transaksi order by id asc");
    if(mysqli_num_rows($getTransaksi) == 0){
        echo '<script>document.location="../index.php?state=false&msg=Data transaksi kosong";</script>';
        return;
    }

    $tmpUnit = $laporan['Omset'] / $laporan['Total_Quantity'];

    $checkHistory = mysqli_query($conn,"select * from history where Tanggal = '".$laporan['Tanggal']."'");
    if(mysqli_num_rows($checkHistory) > 0){
        mysqli_query($conn,"delete from history where Tanggal = '".$laporan['Tanggal']."'");
    }

    while($transaksi = mysqli_fetch_assoc($getTransaksi)){
        $customerName = $transaksi['Nama_Pelanggan'];
        $shoppingDate = $laporan['Tanggal'];
        $total = $tmpUnit * $transaksi['Quantity'];
        mysqli_query($conn,"insert into history (Nama_Pelanggan,Tanggal,Total_Belanja) values ('$customerName','$shoppingDate','$total')");
    }

    echo '<script>document.location="../index.php?state=true&msg=Berhasil memproses histori";</script>';
?>