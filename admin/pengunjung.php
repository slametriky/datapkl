<?php include "../inc/koneksi.php"; ?>
<div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Data Pengunjung</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Universitas</th>
                        <th>Jurusan</th>
                        <th>Email</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
                     $no = 0;
                     
                     $qu=mysqli_query($con,"select * from pengunjung order by nama desc");
                     while($has=mysqli_fetch_assoc($qu))
                     {
                        $no++;
                        echo "
                        <tr>
                        <td>$no</td>
                        <td>$has[nama]</td>
                        <td>$has[jeniskelamin]</td>
                        <td>$has[universitas]</td>
                        <td>$has[jurusan]</td>
                        <td>$has[email]</td>
                        <td style='text-align:center'>
                       
                        
                        <span data-placement='top' data-toggle='tooltip' title='Delete'><button onclick='datadel($has[id],&#39;pengunjung&#39;)' class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#myModal' ><span class='glyphicon glyphicon-trash'></span></button><span>
                        </td>
                      </tr>
                        "; 
                     }
                     ?>                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
<script>
    function datadel(value,jenis){
       document.getElementById('mylink').href="hapus.php?del="+value+"&data="+jenis;
    }
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data akan terhapus !</h4>
            </div>
            <div class="modal-body">
                Anda yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="mylink" href=""><button type="button" class="btn btn-primary">Delete Data</button></a>
            </div>
        </div>
    </div>
</div>
</div>