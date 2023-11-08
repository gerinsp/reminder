<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">

         <?= $this->session->flashdata('message'); ?>
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1><?php echo $this->lang->line('add'); ?> Data Pasien</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Pasien</li>
               </ol>
            </div>
         </div>
      </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <!-- SELECT2 EXAMPLE -->
         <div class="row">
            <div class="col-md-12">
               <div class="shadow card">
                  <!-- /.card-header -->
                  <div class="card-body">
                     <form action="<?php echo base_url() . 'tambahdatapasien'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Nama Pasien<small class="text-danger">*</small></label>
                                 <input style="padding-bottom: 10px;" type="text" name="namapasien" class="form-control" value="<?= set_value('namapasien') ?>">
                                 <?= form_error('namapasien', '<small class="text-danger">', '</small>'); ?>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="bmd-label-floating">NIK</label>
                                 <input style="padding-bottom: 10px;" type="number" name="nik" class="form-control" value="<?= set_value('nik') ?>">
                                 <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                              </div>
                           </div>
                        </div>
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label class="bmd-label-floating">Tanggal Lahir<small class="text-danger">*</small></label>
                                     <input style="padding-bottom: 10px;" type="date" name="tanggallahir" class="form-control" value="<?= set_value('tanggallahir') ?>">
                                     <?= form_error('tanggallahir', '<small class="text-danger">', '</small>'); ?>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label class="bmd-label-floating">Kelurahan<small class="text-danger">*</small></label>
                                     <select class="form-control" name="id_kelurahan" id="id_kelurahan">
                                         <option value="">--pilih kelurahan--</option>
                                         <?php foreach ($kelurahan as $item) { ?>
                                            <?php if ($item->id_kelurahan == set_value('id_kelurahan')) { ?>
                                                 <option selected value="<?= $item->id_kelurahan ?>"><?= $item->nama_kelurahan ?></option>
                                             <?php } else { ?>
                                                 <option value="<?= $item->id_kelurahan ?>"><?= $item->nama_kelurahan ?></option>
                                             <?php } ?>
                                         <?php } ?>
                                     </select>
                                     <?= form_error('id_kelurahan', '<small class="text-danger">', '</small>'); ?>
                                 </div>
                             </div>
                         </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="bmd-label-floating">RT</label>
                                 <input style="padding-bottom: 10px;" type="number" name="rt" class="form-control" value="<?= set_value('rt') ?>">
                                 <?= form_error('rt', '<small class="text-danger">', '</small>'); ?>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="bmd-label-floating">RW</label>
                                 <input style="padding-bottom: 10px;" type="number" name="rw" class="form-control" value="<?= set_value('rw') ?>">
                                 <?= form_error('rw', '<small class="text-danger">', '</small>'); ?>
                              </div>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-info pull-right"><?php echo $this->lang->line('save'); ?></button>
                        <a href="<?= base_url('listpasien') ?>" class="btn btn-danger">Kembali</a>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
</div>