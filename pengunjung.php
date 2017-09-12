<?php  
include "header.php";
include "inc/koneksi.php";
$query = "select * from pengunjung";
$result = mysqli_query($con, $query);
$jumlah = mysqli_num_rows($result);
?>
<br>
    <div class="row">
        <div class="col-md-12">
                    <a href="addpengunjung.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Data Pengunjung</a><br><br>
                    <div class="box-body table-responsive text-center">
                        <table id="example1" class="table table-bordered table-striped ">
                            <thead class="text-center">
                               <tr>
                                    <td>No</td>
                                    
                                    <td>Nama</td>
                                    <td>Jenis Kelamin</td>
                                    <td>Universitas</td>
                                    <td>Jurusan</td>
                                    <td>Email</td>
                                </tr>
                            </thead>
                            <tbody>   
                            <?php  
                
                                $query = "select * from pengunjung order by nama";
                                $no = 1;
                                $res = mysqli_query($con, $query);
                                while ($row = mysqli_fetch_assoc($res)) {

                            ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['jeniskelamin']; ?></td>
                                <td><?= $row['universitas']; ?></td>
                                <td><?= $row['jurusan']; ?></td>
                                <td><?= $row['email']; ?></td>
                                        </tr>
                            <?php 
                                $no++;
                                }
                             ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br><br><br>
</div>
</body>
</html>