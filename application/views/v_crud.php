
    <div class="container" style="margin-top:60px">

      <!-- Main component for a primary marketing message or call to action -->
     <div class="row">
      
      <div class="panel panel-success">
        <div class="panel-heading">
         <h4>Data Info </h4>
         </div>

        <div class="panel-body"> 
         <?php echo $this->session->flashdata('pesan');?>
         <br/>
         <div class="col-md-6">
           <a class="btn btn-md btn-success" href="<?php echo base_url('crud/tambahdata');?>">Tambah Data</a>
         </div>
    
         <br/>
         <br/>
            <table class="table table-striped table-bordered responsive">
                      <thead>
                        <tr>
                          <th style="background:#5d5a56;color:#fff">No</th>
                          <th style="background:#5d5a56;color:#fff">Id</th>
                          <th style="background:#5d5a56;color:#fff">Tanggal Lahir</th>
                          <th style="background:#5d5a56;color:#fff">Nama</th>
                          <th style="background:#5d5a56;color:#fff">Tempat Lahir</th>
                          <th style="background:#5d5a56;color:#fff">Agama</th>                                      
                          <th style="background:#5d5a56;color:#fff">Alamat</th>
                           <th style="background:#5d5a56;color:#fff">Tanggal Daftar</th>
                          <th style="background:#5d5a56;color:#fff">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                          $no = 1;                        
                          foreach($ambil_info as $row){
                      ?>

                        
                       <tr>
                          <td style="font-size: 12px;"><?php echo $no++; ?></td>
                          <td style="font-size: 12px;width:80px"><?php echo $row->id_nsbh; ?></td>
                          <td style="font-size: 12px;"><?php echo $row->tgl_lhr; ?></td>
                          <td style="font-size: 12px;"><?php echo $row->nama_nsbh; ?></td>
                          <td style="font-size: 12px;width:180px"><?php echo $row->tempat_lhr; ?></td>                         
                          <td style="font-size: 12px;width:180px"><?php echo $row->agama; ?></td>                         
                          <td style="font-size: 12px;"><?php echo $row->almt_nsbh; ?></td>
                           <td style="font-size: 12px;"><?php echo $row->tgl_dftr; ?></td>
                   
                          <td style="width:120px">
                              <a class="btn btn-info btn-xs" href="<?php echo site_url('crud/editdata/'.$row->id_nsbh);?>"><i class="fa fa-pencil"></i> Edit</a>
                              <a class="btn btn-danger btn-xs" href="<?php echo site_url('crud/hapusinfo/'.$row->id_nsbh);?>"
                                  onclick="return confirm('Anda yakin akan menghapus data ?')"> <i class="fa fa-trash"></i> Hapus</a>
                          </td>
                      </tr>
                       <?php 
                      }
                      ?>
                      </tbody>
                     </table>  

        </div>
     </div>

    </div> <!-- /container -->