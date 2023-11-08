<!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
   $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/plugins/summernote/summernote-bs4.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>

<script src="<?= base_url('assets/js/moment.min.js') ?>"></script>
<script src="<?= base_url('assets/js/dataTables.dateTime.min.js') ?>"></script>
<script src="<?= base_url('assets/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jszip.min.js') ?>"></script>
<script src="<?= base_url('assets/js/buttons.html5.min.js') ?>"></script>

<!-- Select2 -->
<script src="<?= base_url('assets/plugins/select2/js/select2.full.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/dist/js/demo.js') ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?= base_url('assets/dist/js/pages/dashboard.js') ?>"></script> -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Lightbox -->
<script src="<?= base_url('assets/plugins/ekko-lightbox/ekko-lightbox.min.js') ?>"></script>

<script src="https://a.kabachnik.info/assets/js/libs/quagga.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- leafllet -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>


<script>
    async function getGeoJsonData(geoJson) {
        try {
            const response = await fetch(geoJson);
            if (response.ok) {
                return await response.json();
            } else {
                throw new Error('Gagal mengambil GeoJSON');
            }
        } catch (error) {
            console.error('Terjadi kesalahan dalam mengambil atau mem-parsing GeoJSON:', error);
            return null;
        }
    }

    async function main() {
        var kelapaGadingBarat = await getGeoJsonData('<?= base_url('assets/geojson/kelapa-gading-barat.geojson') ?>');
        var kelapaGadingTimur = await getGeoJsonData('<?= base_url('assets/geojson/kelapa-gading-timur.geojson') ?>');
        var pegangsaanDua = await getGeoJsonData('<?= base_url('assets/geojson/pegangsaan-dua.geojson') ?>');

        let dataPasien = <?php echo json_encode($pasien); ?>

        if (kelapaGadingBarat !== null) {
            var map = L.map('map').setView([-6.1596905, 106.9005624], 13);
            map.addControl(new L.Control.Fullscreen())

            L.geoJSON(kelapaGadingBarat, {
                onEachFeature: function (feature, layer) {
                    layer.bindPopup("Kelurahan: Kelapa Gading Barat" + "<br>" + "Jumlah Pasien: " + dataPasien['kgb']['jml']);
                },
                style: {
                    color: dataPasien['kgb']['color'],
                    weight: 2,
                    opacity: 1,
                    fillOpacity: 0.5,
                    fillColor: dataPasien['kgb']['color']
                }
            }).addTo(map);

            L.geoJSON(kelapaGadingTimur, {
                onEachFeature: function (feature, layer) {
                    layer.bindPopup("Kelurahan: Kelapa Gading Timur" + "<br>" + "Jumlah Pasien: " + dataPasien['kgt']['jml']);
                },
                style: {
                    color: dataPasien['kgt']['color'],
                    weight: 2,
                    opacity: 1,
                    fillOpacity: 0.5,
                    fillColor: dataPasien['kgt']['color']
                }
            }).addTo(map);

            L.geoJSON(pegangsaanDua, {
                onEachFeature: function (feature, layer) {
                    layer.bindPopup("Kelurahan: Pegangsaan Dua" + "<br>" + "Jumlah Pasien: " + dataPasien['pd']['jml']);
                },
                style: {
                    color: dataPasien['pd']['color'],
                    weight: 2,
                    opacity: 1,
                    fillOpacity: 0.5,
                    fillColor: dataPasien['pd']['color']
                }
            }).addTo(map);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
        }
    }

    main();
</script>

<script>
    $(document).ready(function () {
        var pieDataLapor = <?php echo json_encode($pieDataLapor); ?>;
        var pieDataMakan = <?php echo json_encode($pieDataMakan); ?>;

        const chart_lapor = document.getElementById('chart-lapor');
        const chart_makan = document.getElementById('chart-makan');

        new Chart(chart_lapor, {
            type: 'pie',
            data: pieDataLapor,
            options: {
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                },
                responsive: true
            }
        });

        new Chart(chart_makan, {
            type: 'pie',
            data: pieDataMakan,
            options: {
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                },
                responsive: true
            }
        });
    })
</script>

<script>
   $(function() {
      // Summernote
      $('#summernote').summernote()

   })
   $(function() {
      $('.select2').select2()
   })
</script>
<script>

</script>
<script>
   $(function() {
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
         event.preventDefault();
         var dataGalleryValue = $(this).data('gallery'); // Ambil nilai data-gallery dari elemen yang di-klik
         $(this).ekkoLightbox({
            alwaysShowClose: true,
            gallery_parent: dataGalleryValue // Atur gallery_parent dengan nilai data-gallery
         });
      });
   })
</script>

<script>
   function tampilmodalstock() {

      var DataJadwal = this.id;
      var datanya = DataJadwal.split("|");
      $("#isimodalupdatestock").html('<div class="row"><input style="padding-bottom: 10px;" type="hidden" name="idproduk" class="form-control" value=' + datanya[0] + '> <div class="col-md-6"> <label class="bmd-label-floating">SKU Produk</label><input style="padding-bottom: 10px;" type="text" name="skuproduk" class="form-control" readonly value="' + datanya[1] + '"></div></div><div class="row"><div class="col-md-6"> <label class="bmd-label-floating">Stock Lama</label>   <div class="form-group"> <input style="padding-bottom: 10px;text-align: right;" type="number" step="any" readonly value=' + datanya[2] + ' name="stocklama" required class="form-control"></div> </div><div class="col-md-6"> <label>Stock Baru</label><input style="padding-bottom: 10px;text-align:right" type="number" name="stockbaru" class="form-control"></div></div>  ');
   }
</script>
<script type="text/javascript">
   // Periksa apakah URL adalah halaman "listproduk"
   const currentURL = window.location.href;
   // Menggunakan metode split("/") untuk memecah URL menjadi array
   const segments = currentURL.split("/");


   // Fungsi untuk membersihkan sessionStorage Produk
   function clearSessionStorageMasterProduk() {
      sessionStorage.removeItem('savedSearch');
      sessionStorage.removeItem('pageLength');
      sessionStorage.removeItem('currentPage');
   }
   // Fungsi untuk membersihkan sessionStorage Pembelian
   function clearSessionStoragePembelian() {
      sessionStorage.removeItem('jenisPembelian');
      sessionStorage.removeItem('supplier');
      sessionStorage.removeItem('fromPembelian');
      sessionStorage.removeItem('toPembelian');
   }
   // Fungsi untuk membersihkan sessionStorage Pembelian
   function clearSessionStoragePenjualan() {
      sessionStorage.removeItem('jenisPenjualan');
      sessionStorage.removeItem('client');
      sessionStorage.removeItem('fromPenjualan');
      sessionStorage.removeItem('toPenjualan');
   }
   // Fungsi untuk membersihkan sessionStorage Penjualan Online
   function clearSessionStoragePenjualanOnline() {
      sessionStorage.removeItem('namaToko');
      sessionStorage.removeItem('statusKirim');
      sessionStorage.removeItem('jenisKurir');
      sessionStorage.removeItem('from');
      sessionStorage.removeItem('to');
   }


   // Mengambil URI segment yang diinginkan (indeks mulai dari 3 untuk contoh URL di atas)
   const uriSegment1 = segments[3]; // "produk"
   const uriSegment2 = segments[4]; // "123"
   const uriSegment3 = segments[5]; // "detail"

   //Produk
   if (uriSegment2 == "tambahdataproduk" || uriSegment2 == "editdataproduk" || uriSegment2 == "scanproduk" || uriSegment2 == "copydataproduk" || uriSegment2 == "listproduk") {

   } else {
      clearSessionStorageMasterProduk()
   }

   //Pembelian
   if (uriSegment2 == "tambahpembelian" || uriSegment2 == "editdatapembelian" || uriSegment2 == "detaildatapembelian" || uriSegment2 == "listpembelian") {} else {
      clearSessionStoragePembelian()
   }

   //Penjualan
   if (uriSegment2 == "tambahpenjualan" || uriSegment2 == "editdatapenjualan" || uriSegment2 == "detaildatapenjualan" || uriSegment2 == "listpenjualan") {} else {
      clearSessionStoragePenjualan()
   }

   //Penjualan Online
   if (uriSegment2 == "datapenjualanonline" || uriSegment2 == "detailpenjualanonline") {

   } else {
      clearSessionStoragePenjualanOnline()
   }

   // const targetURLpertama = 'http://localhost:8080/diamondstore/listproduk';
   // const targetURLketiga = 'http://localhost:8080/diamondstore/tambahdataproduk';
   // const targetURLkeempat = 'http://localhost:8080/diamondstore/scanproduk';
</script>

<script>
    document.querySelector('#btn-excel').addEventListener('click', function() {
        // Mendapatkan nilai "min" dan "max" dari elemen input
        var min = document.getElementById('min').value;
        var max = document.getElementById('max').value;

        // Membuat URL dengan query parameters "min" dan "max"
        var url = '<?= base_url('exportexcel') ?>?min=' + min + '&max=' + max;

        // Mengarahkan ke URL yang telah dibuat
        window.location.href = url;
    });
</script>

<script>
   $(document).ready(function() {
//        var minDate, maxDate;
// // // // Custom filtering function which will search data in column four between two values
//        DataTable.ext.search.push(function (settings, data, dataIndex) {
//             return true
//        });
// //
// //        $('#min').val(new DateTime(new Date(), {
// //            format: 'dddd, Do'
// //        }))
// //
// // // Create date inputs
//        minDate = new DateTime('#min', {
//            format: 'dddd, Do'
//        });
//        maxDate = new DateTime('#max', {
//            format: 'dddd, Do'
//        });

// DataTables initialisation

       var table = $('.tablelist').DataTable({});

// Refilter the table
//        $('#min, #max').on('change', function () {
//            table.draw();
//        });
   });
   $(document).ready(function() {
      $('#tableprodukjadi').DataTable({});
   });
   // $(document).ready(function() {
   //    $('#tableclient').DataTable({});
   // });
   // $(function() {
   //    // Summernote
   //    $('.tablelist').DataTable({});
   // })


   //   $(document).ready(function() {
   //       $('#tabledesigner').DataTable();
   //   });
   //   $(document).ready(function() {
   //       $('#dataTableTipeDesign').DataTable();
   //   });
   //   $(document).ready(function() {
   //       $('#dataTableMaterial').DataTable();
   //   });
   //   $(document).ready(function() {
   //       $('#dataTableHeadConcept').DataTable();
   //   });
   //   $(document).ready(function() {
   //       $('#dataTableFinishing').DataTable();
   //   });
   //   $(document).ready(function() {
   //       $('#dataTableWarnaProduk').DataTable();
   //   });
   //   $(document).ready(function() {
   //       $('#dataTableParcelDesign').DataTable();
   //   });
   //   $(document).ready(function() {
   //       $('#dataTableParcel').DataTable();
   //   });
   //   $(document).ready(function() {
   //       $('#tableproduk').DataTable();
   //   });
   //   $(document).ready(function() {
   //       $('#tablemodel').DataTable();
   //   });
   //   $(document).ready(function() {
   //       $('#tablematerialspk').DataTable();
   //   });
   //   $(document).ready(function() {
   //       $('#tablefinishingspk').DataTable();
   //   });
   //   $(document).ready(function() {
   //       $('#tablewarnaprodukspk').DataTable();
   //   });
   //   $(document).ready(function() {
   //       $('#tablelokasi').DataTable();
   //   });
   //   $(document).ready(function() {
   //       $('#tableclient').DataTable();
   //   });
   //   $(document).ready(function() {
   //       $('#tablematauang').DataTable();
   //   });
   //   $(document).ready(function() {
   //       $('#tablereference').DataTable();
   //   });
   //   $(document).ready(function() {
   //       $('#tableserahterimabarangjadi').DataTable();
   //   });
   //   $(document).ready(function() {
   //       $('#tablebarangjadi').DataTable();
   //   });
</script>
<!-- <script>
   //   $(function() {
   //       //Initialize Select2 Elements
   //       $('.select2').select2()

   //       //Initialize Select2 Elements
   //       $('.select2bs4').select2({
   //          theme: 'bootstrap4'
   //       })
   //   })
   // 
</script> -->
<script>
   <?php if ($this->session->flashdata('success')) { ?>
      var isi = <?php echo json_encode($this->session->flashdata('success')) ?>

      Swal.fire({
         icon: 'success',
         title: 'Berhasil',
         text: isi
      })
   <?php } ?>
   <?php if ($this->session->flashdata('error')) { ?>
      var isi = <?php echo json_encode($this->session->flashdata('error')) ?>

      Swal.fire({
         icon: 'error',
         title: 'Gagal',
         text: isi
      })
   <?php } ?>
   <?php if ($this->session->flashdata('warning')) { ?>
      var isi = <?php echo json_encode($this->session->flashdata('warning')) ?>

      Swal.fire({
         icon: 'warning',
         title: 'Peringatan',
         text: isi
      })
   <?php } ?>
   <?php if ($this->session->flashdata('warningimport')) { ?>
      var isi = <?php echo json_encode($this->session->flashdata('warningimport')) ?>

      Swal.fire({
         icon: 'warning',
         title: '<h5 style:"margin-bottom:0px;padding-bottom:0px">Silahkan cek kembali field sku produk berdasarkan data di bawah :</h5>',
         text: isi
      })
   <?php } ?>
</script>

<script>
   function formatNumber(number) {
      return new Intl.NumberFormat('id-ID', {
         minimumFractionDigits: 2,
         maximumFractionDigits: 2,
      }).format(number);
   }

   function converttanggalIndo(string) {
      bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

      tanggal = string.split("-")[2];
      bulan = string.split("-")[1];
      tahun = string.split("-")[0];

      return tanggal + " " + bulanIndo[Math.abs(bulan)] + " " + tahun;
   }
</script>

</body>

</html>