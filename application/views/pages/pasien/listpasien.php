<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Data Pasien</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active"> Pasien</li>
               </ol>
            </div>
         </div>
      </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">

               <!-- /.card -->
               <div class="shadow card">

                  <!-- /.card-header -->
                  <div class="card-body">
                     <h6 class="m-0 font-weight-bold text-primary"> <a class="text-info" style="text-decoration: none" class="collapse-item" href="<?php echo base_url() ?>tambahdatapasien"> <i class="fas fa-fw fa-plus text-info"></i> <?php echo $this->lang->line('add'); ?> Data Pasien</h6></a> <br>
                     <div class="table-responsive">
                        <table style="border-collapse: 1;color: #858796;border-bottom: 2px solid #e3e6f0;" id="dataTable" class="table tablelist table-bordered table-striped" width="100%" height="1px" cellspacing="0">
                           <thead>
                              <tr height="20px">
                                 <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('number'); ?></th>
                                 <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">Nama</th>
                                 <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">NIK</th>
                                 <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">Tanggal Lahir</th>
                                  <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">RT/RW</th>
                                  <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">Kelurahan</th>
                                 <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('pengaturan'); ?></th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              $no = 1;
                              foreach ($read as $data) {
                              ?>
                                 <tr>
                                    <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $no ?></td>
                                    <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $data->nama ?></td>
                                    <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $data->nik ?></td>
                                    <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo format_indo($data->tanggallahir) ?></td>
                                     <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $data->rt ?>/<?php echo $data->rw ?></td>
                                     <?php if ($data->id_kelurahan == 0) { ?>
                                         <td style="vertical-align: top;border-top: 1px solid #e3e6f0;">-</td>
                                     <?php } else { ?>
                                         <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $data->nama_kelurahan ?></td>
                                     <?php } ?>
                                    <td style="vertical-align: top;border-top: 1px solid #e3e6f0;">
                                       <a href="<?= base_url('editdatapasien/' . $data->id_pasien); ?>" class="btn btn-sm btn-success" role="button" title="Ubah"><i class="fas fa-fw fa-pencil-alt"></i> <?php echo $this->lang->line('change'); ?> </a>
                                       <a href="#" data-toggle="modal" data-target="#deleteModal" data-id="<?= $data->id_pasien; ?>" class="btn btn-sm btnOpenDeleteModal btn-danger mr-1" title="Hapus" onclick="openDeleteModal(this, 'pasien/deletepasien')" class="btn btn-sm btn-danger" role="button" title="Hapus"> <i class="fas fa-fw fa-trash"></i> <?php echo $this->lang->line('delete'); ?> </a>
                                    </td>
                                 </tr>
                              <?php
                                 $no++;
                              }
                              ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- /.card -->
               </div>
               <!-- /.col -->
            </div>
            <!-- /.row -->
         </div>

         <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Function Javascript -->

<!-- End Function Javascript -->