<?php include 'koneksi.php'; 
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Eki Guistian || My Files</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 style="text-align: center;">Gunakan Dengan Bijak</h2>
   <p align="center"> Eki Guistian - Teknik Informatika </p>  
        <br>
        <?php 
        if(isset($_GET['alert'])){
            if($_GET['alert']=='gagal_ekstensi'){
                ?>
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">Ãƒâ€”</button>
                    <h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
                    Ekstensi Tidak Diperbolehkan
                </div>                              
                <?php
            }elseif($_GET['alert']=="gagal_ukuran"){
                ?>
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">Ãƒâ€”</button>
                    <h4><i class="icon fa fa-check"></i> Peringatan !</h4>
                    Ukuran File terlalu Besar
                </div>                              
                <?php
            }elseif($_GET['alert']=="berhasil"){
                ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">Ãƒâ€”</button>
                    <h4><i class="icon fa fa-check"></i> Success</h4>
                    Berhasil Disimpan
                </div>                              
                <?php
            }
        }
        ?>
        <br>
        <a href="addfile.php" class="btn btn-info btn-sm">Add New File</a>
        <br>        
        <br>        
        <table class="table table-bordered">
            <tr>
                <th width="20%">No</th>
                <th width="20%">File Name</th>
                <th width="40%">Link Download</th>
            </tr>
            <?php 
            $no=1;
            $data = mysqli_query($koneksi,"select * from file");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['namefile']; ?></td>
                    <td><a href="http://allnetwork.online/aplikasi/filemanagerbyekiguistian/<?php echo $d['file'] ?>" target="_blank" rel="nofollow">Download Now</a></td>
                </tr>
                <?php
            }
 
            ?>
        </table>
    </div>
</body>
</html>