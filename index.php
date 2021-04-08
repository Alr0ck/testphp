<?php include("services/connection.php"); ?>
<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
            
                    <h1>Form Input</h1>
                    <a href="services/processHistory.php">
                        <button type="button" class="btn btn-primary">Proses Semua Histori</button>
                    </a>

                    <hr>

                    <?php if(isset($_GET['state'])){
                        if($_GET['state'] === 'false'){ ?> 
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Yahh!</strong> <?= $_GET['msg'] ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php } else{ ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Yeyy!</strong> <?= $_GET['msg'] ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } } ?>

                    <h3>Histori</h3>
                    <table class="table table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th style="width:50px;">No.</th>
                                <th style="width:100px;">Nama Pelanggan</th>
                                <th style="width:70px;">Tanggal</th>
                                <th style="width:100px;">Total Belanja</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $n = 0;
                            $q = mysqli_query($conn,"SELECT * FROM history ORDER BY id ASC");
                            if(mysqli_num_rows($q) == 0){ ?>
                            <tr>
                                <td colspan="4" style="text-align:center;">Belum ada data.</td>
                            </tr>
                            <?php } else { while($d = mysqli_fetch_assoc($q)){ ?>
                            <tr>
                                <td style="width:50px;"><?= ++$n ?></td>
                                <td style="width:100px;"><?= $d['Nama_Pelanggan'] ?></td>
                                <td style="width:70px;"><?= $d['Tanggal'] ?></td>
                                <td style="width:100px;"><?= $d['Total_Belanja'] ?></td>
                            </tr>
                            <?php } } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </body>
</html>