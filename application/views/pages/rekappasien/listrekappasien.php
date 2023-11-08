<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Data Rekap Pasien</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Rekap Pasien</li>
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
                      <div>
                          <div class="row">
                              <div class="col-md-6">
                                  <a id="btn-excel" class="btn btn-sm btn-primary">Export Excel</a>
                              </div>
                              <div class="col-md-6 d-flex justify-content-end pl-5">
                                  <form action="<?= base_url('rekappasien/listrekappasien') ?>" method="post" class="mb-0">
                                      <div class="form-row">
                                          <div class="form-group col-md-5 mb-0">
                                              <input value="<?= $min ?>" type="date" id="min" name="min" class="form-control form-control-sm" placeholder="Tanggal Awal">
                                          </div>
                                          <div class="form-group col-md-5 mb-0">
                                              <input value="<?= $max ?>" type="date" id="max" name="max" class="form-control form-control-sm" placeholder="Tanggal Akhir">
                                          </div>
                                          <div class="form-group col-md-2 mb-0">
                                              <button type="submit" class="btn btn-sm btn-success" id="btn-filter">Filter</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                      <hr>
                     <div class="table-responsive">
                        <table style="border-collapse: 1;color: #858796;border-bottom: 2px solid #e3e6f0;" id="dataTable" class="table tablelist table-bordered table-striped" width="100%" height="1px" cellspacing="0">
                           <thead>
                              <tr height="20px">
                                 <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('number'); ?></th>
                                 <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">Nama</th>
                                 <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">NIK</th>
                                  <th style="display: none; padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">Tanggal</th>
                                 <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">Tanggal Lahir</th>
                                 <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">RT/RW</th>
                                 <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">Sudah Lapor</th>
                                 <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">Belum Lapor</th>
                                 <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">Sudah Makan</th>
                                 <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">Belum Makan</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              $no = 1;
                              foreach ($listpasien as $data) {
                              ?>
                                 <tr>
                                    <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $no ?></td>
                                    <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $data['nama'] ?></td>
                                    <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $data['nik'] ?></td>
                                     <td style="display: none; vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo date('Y-m-d', strtotime($data['create_date'])) ?></td>
                                    <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo format_indo($data['tanggallahir']) ?></td>
                                    <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $data['rt'] ?>/<?php echo $data['rw'] ?></td>
                                    <?php if ($data['statuslapor'] == 1 and $data['statusmakan'] == 1) { ?>
                                       <td style="vertical-align: top;border-top: 1px solid #e3e6f0;">
                                          <div class="kotak-hijau" style="width: 25px;height: 25px;         background-color: green;"></div>
                                       </td>
                                       <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"></td>
                                       <td style="vertical-align: top;border-top: 1px solid #e3e6f0;">
                                          <div class="kotak-kuning" style="width: 25px;height: 25px;         background-color: yellow;"></div>
                                       </td>
                                       <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"></td>
                                    <?php } ?>
                                    <?php if ($data['statuslapor'] == 1 and $data['statusmakan'] == 0) { ?>
                                       <td style="vertical-align: top;border-top: 1px solid #e3e6f0;">
                                          <div class="kotak-hijau" style="width: 25px;height: 25px;         background-color: green;"></div>
                                       </td>
                                       <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"></td>
                                       <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"></td>
                                       <td style="vertical-align: top;border-top: 1px solid #e3e6f0;">
                                          <div class="kotak-biru" style="width: 25px;height: 25px;         background-color: blue;"></div>
                                       </td>
                                    <?php } ?>
                                    <?php if ($data['statuslapor'] == 0 and $data['statusmakan'] == 0) { ?>
                                       <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"></td>
                                       <td style="vertical-align: top;border-top: 1px solid #e3e6f0;">
                                          <div class="kotak-merah" style="width: 25px;height: 25px;         background-color: red;"></div>
                                       </td>
                                       <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"></td>
                                       <td style="vertical-align: top;border-top: 1px solid #e3e6f0;">
                                          <div class="kotak-biru" style="width: 25px;height: 25px;         background-color: blue;"></div>
                                       </td>
                                    <?php } ?>
                                     <?php if ($data['statuslapor'] == 0 and $data['statusmakan'] == 2) { ?>
                                         <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"></td>
                                         <td style="vertical-align: top;border-top: 1px solid #e3e6f0;">
                                             <div class="kotak-merah" style="width: 25px;height: 25px;         background-color: red;"></div>
                                         </td>
                                         <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"></td>
                                         <td style="vertical-align: top;border-top: 1px solid #e3e6f0;">
                                         </td>
                                     <?php } ?>
                                    <?php if ($data['statuslapor'] == 0 and $data['statusmakan'] == 1) { ?>
                                       <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"></td>
                                       <td style="vertical-align: top;border-top: 1px solid #e3e6f0;">
                                          <div class="kotak-merah" style="width: 25px;height: 25px;         background-color: red;"></div>
                                       </td>
                                       <td style="vertical-align: top;border-top: 1px solid #e3e6f0;">
                                          <div class="kotak-kuning" style="width: 25px;height: 25px;         background-color: yellow;">
                                       </td>
                                       <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"></td>
                                    <?php } ?>

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