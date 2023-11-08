<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">

         <?= $this->session->flashdata('message'); ?>
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1><?php echo $this->lang->line('change'); ?> Data Pasien</h1>
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
         <div class="shadow card">
            <!-- /.card-header -->
            <div class="card-body">
               <?php
               foreach ($pasien as $data) {

               ?>
                  <form action="<?php echo base_url() . 'pasien/updatepasien'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="bmd-label-floating">Pasien<small class="text-danger">*</small></label>
                              <input style="padding-bottom: 10px;" type="hidden" name="idpasien" class="form-control" value="<?= $data->id_pasien ?>" required>
                              <input style="padding-bottom: 10px;" type="text" name="namapasien" class="form-control" value="<?= $data->nama ?>" required>

                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="bmd-label-floating">NIK</label>
                              <input style="padding-bottom: 10px;" type="number" name="nik" class="form-control" value="<?= $data->nik ?>">
                           </div>
                        </div>
                     </div>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="bmd-label-floating">Tanggal Lahir<small class="text-danger">*</small></label>
                                  <input style="padding-bottom: 10px;" type="date" name="tanggallahir" class="form-control" value="<?php echo $data->tanggallahir ?>">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="bmd-label-floating">Kelurahan<small class="text-danger">*</small></label>
                                  <select class="form-control" name="id_kelurahan" id="id_kelurahan">
                                      <option value="">--pilih kelurahan--</option>
                                      <?php foreach ($kelurahan as $item) { ?>
                                          <?php if ($item->id_kelurahan == $data->id_kelurahan) { ?>
                                              <option selected value="<?= $item->id_kelurahan ?>"><?= $item->nama_kelurahan ?></option>
                                          <?php } else { ?>
                                              <option value="<?= $item->id_kelurahan ?>"><?= $item->nama_kelurahan ?></option>
                                          <?php } ?>
                                      <?php } ?>
                                  </select>
                              </div>
                          </div>
                      </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="bmd-label-floating">RT<small class="text-danger">*</small></label>
                              <input style="padding-bottom: 10px;" type="number" name="rt" class="form-control" value="<?= $data->rt; ?>">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="bmd-label-floating">RW<small class="text-danger">*</small></label>
                              <input style="padding-bottom: 10px;" type="number" name="rw" class="form-control" value="<?= $data->rw; ?>">
                           </div>
                        </div>
                     </div>
                  <?php } ?>
                  <button type="submit" class="btn btn-info pull-right"><?php echo $this->lang->line('save'); ?></button>
                  <a href="<?= base_url('listpasien') ?>" class="btn btn-danger">Kembali</a>
                  </form>
            </div>
         </div>
         <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
</div>