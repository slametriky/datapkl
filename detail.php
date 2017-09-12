<?php  
    include "hd.php";
    include "fungsi.php";
    include "inc/koneksi.php";
    $id = null;
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
    } if ($id == null) {
        header("Location: index.php");
    } else {
        $query = "SELECT * FROM user WHERE id = $id";
        $result = mysqli_query($con, $query);
        $data = mysqli_fetch_assoc($result);
    }
?>
<br>
<div class="container">
    <div class="col-sm-12">
        <h3 class="text-center"><b><?= $data['nama'];?></b></h3>
            <hr>
        <div class="row">
        </div>
        <div class="form-group col-sm-12">
            <label class="col-sm-offset-3 col-sm-2  control-label">NIM</label>
            <div class=" col-sm-2">
              <p class="form-control-status-bar"><?= $data['nim'];?></p>
            </div>
        </div>
        <div class="form-group col-sm-12">
            <label class="col-sm-offset-3 col-sm-2 control-label">Nama</label>
            <div class="col-sm-3">
              <p class="form-control-status-bar"><?= $data['nama'];?></p>
            </div>
        </div>
        <div class="form-group col-sm-12">
            <label class="col-sm-offset-3 col-sm-2 control-label">Jenis Kelamin</label>
            <div class="col-sm-2">
              <p class="form-control-status-bar"><?= $data['jenis_kelamin'];?></p>
            </div>
        </div>
        <div class="form-group col-sm-12">
            <label class="col-sm-offset-3 col-sm-2 control-label">Institusi</label>
            <div class="col-sm-3">
              <p class="form-control-status-bar"><?= $data['universitas'];?></p>
            </div>
        </div>
        <div class="form-group col-sm-12">
            <label class="col-sm-offset-3 col-sm-2 control-label">Tempat KP</label>
            <div class="col-sm-4">
              <p class="form-control-status-bar"><?= $data['tempatkp'];?></p>
            </div>
        </div>
        <div class="form-group col-sm-12">
            <label class="col-sm-offset-3 col-sm-2 control-label">Tanggal KP</label>
            <div class="col-sm-3">
              <p class="form-control-status-bar"><?= konversi_tanggal($data['tanggalkp']);?></p>
            </div>
        </div>
        <div class="form-group col-sm-12">
            <label class="col-sm-offset-3 col-sm-2 control-label">Tanggal Selesai</label>
            <div class="col-sm-3">
              <p class="form-control-status-bar"><?= konversi_tanggal($data['tanggalselesai']) ;?></p>
            </div>
        </div>
        <div class="form-group col-sm-12">
            <label class="col-sm-offset-3 col-sm-2 control-label">Alamat</label>
            <div class="col-sm-4">
              <p class="form-control-status-bar"><?= $data['alamat'];?></p>
            </div>
        </div>
        <div class="form-group col-sm-12">
            <label class="col-sm-offset-3 col-sm-2 control-label">Telepon</label>
            <div class="col-sm-3">
              <p class="form-control-status-bar"><?= $data['telepon'];?></p>
            </div>
        </div>
       
        <div class="form-group col-sm-offset-3 col-sm-8">
            <a class="btn btn btn-success" href="tampil.php"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
            <!-- <a class="btn btn btn-primary" href="index.php">Cetak</a> -->
        </div>
    </div>                
</div>
