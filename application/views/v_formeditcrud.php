<div class="container" style="margin-top:60px">

  <!-- Main component for a primary marketing message or call to action -->
 <div class="row">
  
  <div class="panel panel-success">
    <div class="panel-heading">
     <h4>Edit Data Info </h4>
     </div>

    <div class="panel-body"> 

      <form method="post" action="<?php echo site_url('crud/prosesedit')?>" enctype="multipart/form-data">
   
     <?php foreach ($edit_info as $key) { ?>

 
        <div class="control-group">
         <label class="control-label">ID</label>
          <div class="controls">
            <input class="form-control" type="text" name="id_nsbh">
          </div>
        </div>
        <br />
        <div class="control-group">
          <label class="control-label">Nama</label>
          <div class="controls">
             <input class="form-control" type="text" name="nama_nsbh">
          </div>
        </div>
        <br />
        <div class="control-group">
         <label class="control-label">Tanggal Lahir</label>
          <div class="controls">
            <input class="form-control" type="date" name="tgl_lhr">
          </div>
        <div class="control-group">
          <label class="control-label">Tempat Lahir</label>
          <div class="controls">
             <input class="form-control" type="text" name="tempat_lhr">
          </div>
        </div>
        <br />
        <div class="control-group">
          <label class="control-label">Alamat</label>
          <div class="controls">
             <input class="form-control" type="text" name="almt_nsbh">
          </div>
        </div>
        <br />
        <div class="control-group">
          <label class="control-label">Agama</label>
          <div class="controls">
             <input class="form-control" type="text" name="agama">
          </div>
          <div class="control-group">
         <label class="control-label">Tanggal Daftar</label>
          <div class="controls">
            <input class="form-control" type="text" name="tgl_dftr"  value="<?php date_default_timezone_set("Asia/Jakarta"); echo date(" h:i:s d/m/Y ");?>" readonly="">
          </div>
        </div>
        <br />
        </div>
    
       <?php } ?>
                 
      

          <a class="btn btn-md btn-danger" href="<?php echo site_url('crud');?>">Kembali</a>
          <button type="submit" class="btn btn-primary">Simpan</button>
       
          </form>
        </div>
  


   </div>

  </div>
</div> <!-- /container -->