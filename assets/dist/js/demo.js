/**
 * AdminLTE Demo Menu
 * ------------------
 * You should not use this file in production.
 * This file is for demo purposes only.
 */

/**Function Untuk Pilih Data Dari Modal */

/** Modal Pada Menu Produk */
function tipeprodukmodal() {
	$(document).on("click", "#tipeproduk", function (e) {
		document.getElementById("idtipeproduk").value = $(this).attr("data-id");
		document.getElementById("tipeproduk").value =
			$(this).attr("data-tipeproduk");
		$("#modaltipeproduk").modal("hide");
	});
}

function categorymodal() {
	$(document).on("click", "#category", function (e) {
		document.getElementById("idcategory").value = $(this).attr("data-id");
		document.getElementById("category").value = $(this).attr("data-category");
		$("#modalcategory").modal("hide");
	});
}

function jenisgaransimodal() {
	$(document).on("click", "#jenisgaransi", function (e) {
		document.getElementById("idjenisgaransi").value = $(this).attr("data-id");
		document.getElementById("jenisgaransi").value =
			$(this).attr("data-jenisgaransi");
		$("#modaljenisgaransi").modal("hide");
	});
}

function brandmodal() {
	$(document).on("click", "#brand", function (e) {
		document.getElementById("idbrand").value = $(this).attr("data-id");
		document.getElementById("brand").value = $(this).attr("data-brand");
		document.getElementById("idjenisgaransi").value = $(this).attr(
			"data-idjenisgaransi"
		);
		document.getElementById("jenisgaransi").value =
			$(this).attr("data-jenisgaransi");
		document.getElementById("idperiodegaransi").value = $(this).attr(
			"data-idperiodegaransi"
		);
		document.getElementById("periodegaransi").value = $(this).attr(
			"data-periodegaransi"
		);
		document.getElementById("idclaimgaransi").value = $(this).attr(
			"data-idclaimgaransi"
		);
		document.getElementById("claimgaransi").value =
			$(this).attr("data-claimgaransi");
		$("#modalbrand").modal("hide");
	});
}
function periodegaransimodal() {
	$(document).on("click", "#periodegaransi", function (e) {
		document.getElementById("idperiodegaransi").value = $(this).attr("data-id");
		document.getElementById("periodegaransi").value = $(this).attr(
			"data-periodegaransi"
		);
		$("#modalperiodegaransi").modal("hide");
	});
}
function etalasemodal() {
	$(document).on("click", "#etalase", function (e) {
		document.getElementById("idetalase").value = $(this).attr("data-id");
		document.getElementById("etalase").value = $(this).attr("data-etalase");
		$("#modaletalase").modal("hide");
	});
}
function claimgaransimodal() {
	$(document).on("click", "#claimgaransi", function (e) {
		document.getElementById("idclaimgaransi").value = $(this).attr("data-id");
		document.getElementById("claimgaransi").value =
			$(this).attr("data-claimgaransi");
		$("#modalclaimgaransi").modal("hide");
	});
}

function satuanbesarmodal() {
	$(document).on("click", "#satuanbesar", function (e) {
		document.getElementById("idsatuanbesar").value = $(this).attr("data-id");
		document.getElementById("satuanbesar").value =
			$(this).attr("data-satuanbesar");
		$("#modalsatuanbesar").modal("hide");
	});
}
function satuankecilmodal() {
	$(document).on("click", "#satuankecil", function (e) {
		document.getElementById("idsatuankecil").value = $(this).attr("data-id");
		document.getElementById("satuankecil").value =
			$(this).attr("data-satuankecil");
		$("#modalsatuankecil").modal("hide");
	});
}
function kondisimodal() {
	$(document).on("click", "#kondisi", function (e) {
		document.getElementById("idkondisi").value = $(this).attr("data-id");
		document.getElementById("kondisi").value = $(this).attr("data-kondisi");
		$("#modalkondisi").modal("hide");
	});
}
function matauangmodal() {
	$(document).on("click", "#matauang", function (e) {
		document.getElementById("idmatauang").value = $(this).attr("data-id");
		document.getElementById("matauang").value = $(this).attr("data-matauang");
		document.getElementById("symbolhargajual").value =
			$(this).attr("data-symbol");
		document.getElementById("symbolhargabeli").value =
			$(this).attr("data-symbol");
		$("#modalmatauang_").modal("hide");
	});
}

function diametermodal() {
	$(document).on("click", "#diameter", function (e) {
		document.getElementById("iddiameter").value = $(this).attr("data-id");
		document.getElementById("diagroup").value = $(this).attr("data-diagroup");
		document.getElementById("diameterfrom").value =
			$(this).attr("data-diameterfrom");
		document.getElementById("diameterto").value =
			$(this).attr("data-diameterto");
		document.getElementById("carat").value = $(this).attr("data-carat");

		$("#modaldiameter").modal("hide");
	});
}
function tipedesignmodal() {
	$(document).on("click", "#tipedesign", function (e) {
		document.getElementById("idtipedesign").value = $(this).attr("data-id");
		document.getElementById("tipedesign").value =
			$(this).attr("data-tipedesign");
		$("#modaltipedesign").modal("hide");
	});
}
/** End Modal Pada Menu Produk */

/** Modal Pada Menu Cashbank */
function subaccountmodal() {
	$(document).on("click", "#subaccount", function (e) {
		document.getElementById("subaccount").value =
			$(this).attr("data-subaccount");
		document.getElementById("nama").value = $(this).attr("data-nama");
		document.getElementById("idclient").value = $(this).attr("data-idclient");

		$("#modalsubaccount").modal("hide");
		listinvoice();
	});
}
function selectinvoice() {
	$(document).on("click", "#datainvoice", function (e) {
		document.getElementById("nopembelian").value = $(this).attr(
			"data-nomorpembelian"
		);
		document.getElementById("idclientinvoice").value =
			$(this).attr("data-idclient");
		document.getElementById("invoice").value = $(this).attr("data-nomorapr");
		document.getElementById("tanggaljto").value =
			$(this).attr("data-tanggaljto");
		document.getElementById("matauanginvoice").value =
			$(this).attr("data-kodematauang");
		document.getElementById("idmatauanginvoice").value =
			$(this).attr("data-idmatauang");
		document.getElementById("rateinvoice").value = $(this).attr("data-rate");
		document.getElementById("totalpembelian").value =
			$(this).attr("data-total");
		document.getElementById("saldo").value = $(this).attr("data-totalsaldo");
		$("#modalinvoice").modal("hide");
	});
}
function coacashbankdetailmodal() {
	$(document).on("click", "#coacashbankdetail", function (e) {
		document.getElementById("akun").value = $(this).attr("data-akun");
		document.getElementById("namaakun").value = $(this).attr("data-namaakun");
		document.getElementById("idcoa").value = $(this).attr("data-idcoa");

		var namaakun = document.getElementById("namaakun").value;
		var namasubakuncashdetail = document.getElementById(
			"namasubakuncashdetail"
		).value;
		var namacostcentersatu =
			document.getElementById("namacostcentersatu").value;

		document.getElementById("keterangancashdetail").value =
			namaakun +
			"\n" +
			namasubakuncashdetail +
			"\n" +
			namacostcentersatu +
			"\n";
		if (
			namaakun != "" &&
			namasubakuncashdetail != "" &&
			namacostcentersatu != ""
		) {
			document.getElementById("keterangancashdetail").value =
				namaakun +
				"\n" +
				namasubakuncashdetail +
				"\n" +
				namacostcentersatu +
				"\n";
		}
		if (
			namaakun != "" &&
			namasubakuncashdetail == "" &&
			namacostcentersatu != ""
		) {
			document.getElementById("keterangancashdetail").value =
				namaakun + "\n" + namacostcentersatu + "\n";
		}
		if (
			namaakun != "" &&
			namasubakuncashdetail != "" &&
			namacostcentersatu == ""
		) {
			document.getElementById("keterangancashdetail").value =
				namaakun + "\n" + namasubakuncashdetail + "\n";
		}
		if (
			namaakun != "" &&
			namasubakuncashdetail == "" &&
			namacostcentersatu == ""
		) {
			document.getElementById("keterangancashdetail").value = namaakun + "\n";
		}
		if (
			namaakun == "" &&
			namasubakuncashdetail == "" &&
			namacostcentersatu != ""
		) {
			document.getElementById("keterangancashdetail").value =
				namacostcentersatu + "\n";
		}
		autoResizeTextarea(keterangancashdetail);

		// document.getElementById("namaakun").value = $(this).attr('data-namaakun');

		$("#modalcoacashdetail").modal("hide");
		listsubakuncashdetail();
	});
}
function subakuncashdetailmodal() {
	$(document).on("click", "#datasubakuncashdetail", function (e) {
		var keterangancashdetail = document.getElementById("keterangancashdetail");
		// var tambahketerangansubakun = $(this).attr('data-namasubakun') + "\n"
		//var tes = $(this).attr('data-namasubakun')
		//console.log(tes)
		document.getElementById("subakuncashdetail").value =
			$(this).attr("data-subakun");
		document.getElementById("namasubakuncashdetail").value =
			$(this).attr("data-namasubakun");
		// document.getElementById("keterangancashdetail").value = $(this).attr('data-namasubakun');
		// document.getElementById("namaakun").value = $(this).attr('data-namaakun');

		var namaakun = document.getElementById("namaakun").value;
		var namasubakuncashdetail = document.getElementById(
			"namasubakuncashdetail"
		).value;
		var namacostcentersatu =
			document.getElementById("namacostcentersatu").value;

		document.getElementById("keterangancashdetail").value =
			namaakun +
			"\n" +
			namasubakuncashdetail +
			"\n" +
			namacostcentersatu +
			"\n";
		if (
			namaakun != "" &&
			namasubakuncashdetail != "" &&
			namacostcentersatu != ""
		) {
			document.getElementById("keterangancashdetail").value =
				namaakun +
				"\n" +
				namasubakuncashdetail +
				"\n" +
				namacostcentersatu +
				"\n";
		}
		if (
			namaakun != "" &&
			namasubakuncashdetail == "" &&
			namacostcentersatu != ""
		) {
			document.getElementById("keterangancashdetail").value =
				namaakun + "\n" + namacostcentersatu + "\n";
		}
		if (
			namaakun != "" &&
			namasubakuncashdetail != "" &&
			namacostcentersatu == ""
		) {
			document.getElementById("keterangancashdetail").value =
				namaakun + "\n" + namasubakuncashdetail + "\n";
		}
		if (
			namaakun != "" &&
			namasubakuncashdetail == "" &&
			namacostcentersatu == ""
		) {
			document.getElementById("keterangancashdetail").value = namaakun + "\n";
		}
		if (
			namaakun == "" &&
			namasubakuncashdetail == "" &&
			namacostcentersatu != ""
		) {
			document.getElementById("keterangancashdetail").value =
				namacostcentersatu + "\n";
		}
		autoResizeTextarea(keterangancashdetail);
		$("#modalsubakuncashdetail").modal("hide");
	});
}
function costcenterdetailmodal() {
	$(document).on("click", "#costcenterdetail", function (e) {
		var keterangancashdetail = document.getElementById("keterangancashdetail");
		//var tambahketerangancostcenter = $(this).attr('data-namacostcenter') +"\n"
		document.getElementById("costcentersatu").value = $(this).attr(
			"data-kodecostcenter"
		);
		document.getElementById("namacostcentersatu").value = $(this).attr(
			"data-namacostcenter"
		);
		// if ($('#keterangancashdetail').val() == "") {
		//   keterangancashdetail.value = tambahketerangancostcenter;
		// }else if ($('#keterangancashdetail').val()!= "") {
		//   keterangancashdetail.value = keterangancashdetail.value + tambahketerangancostcenter;
		//   autoResizeTextarea(keterangancashdetail);
		// }

		var namaakun = document.getElementById("namaakun").value;
		var namasubakuncashdetail = document.getElementById(
			"namasubakuncashdetail"
		).value;
		var namacostcentersatu =
			document.getElementById("namacostcentersatu").value;

		document.getElementById("keterangancashdetail").value =
			namaakun +
			"\n" +
			namasubakuncashdetail +
			"\n" +
			namacostcentersatu +
			"\n";
		if (
			namaakun != "" &&
			namasubakuncashdetail != "" &&
			namacostcentersatu != ""
		) {
			document.getElementById("keterangancashdetail").value =
				namaakun +
				"\n" +
				namasubakuncashdetail +
				"\n" +
				namacostcentersatu +
				"\n";
		}
		if (
			namaakun != "" &&
			namasubakuncashdetail == "" &&
			namacostcentersatu != ""
		) {
			document.getElementById("keterangancashdetail").value =
				namaakun + "\n" + namacostcentersatu + "\n";
		}
		if (
			namaakun != "" &&
			namasubakuncashdetail != "" &&
			namacostcentersatu == ""
		) {
			document.getElementById("keterangancashdetail").value =
				namaakun + "\n" + namasubakuncashdetail + "\n";
		}
		if (
			namaakun != "" &&
			namasubakuncashdetail == "" &&
			namacostcentersatu == ""
		) {
			document.getElementById("keterangancashdetail").value = namaakun + "\n";
		}
		if (
			namaakun == "" &&
			namasubakuncashdetail == "" &&
			namacostcentersatu != ""
		) {
			document.getElementById("keterangancashdetail").value =
				namacostcentersatu + "\n";
		}
		autoResizeTextarea(keterangancashdetail);
		$("#modalcostcenterdetail").modal("hide");
	});
}

function coacashbanklawanmodal() {
	$(document).on("click", "#coacashbanklawan", function (e) {
		document.getElementById("akundua").value = $(this).attr("data-akun");
		document.getElementById("namaakundua").value =
			$(this).attr("data-namaakun");
		document.getElementById("idcoadua").value = $(this).attr("data-idcoa");

		var namaakun = document.getElementById("namaakundua").value;
		var namasubakuncashlawan = document.getElementById(
			"namasubakuncashlawan"
		).value;
		var namacostcenterdua = document.getElementById("namacostcenterdua").value;

		document.getElementById("keterangancashlawan").value =
			namaakun + "\n" + namasubakuncashlawan + "\n" + namacostcenterdua + "\n";
		if (
			namaakun != "" &&
			namasubakuncashlawan != "" &&
			namacostcenterdua != ""
		) {
			document.getElementById("keterangancashlawan").value =
				namaakun +
				"\n" +
				namasubakuncashlawan +
				"\n" +
				namacostcenterdua +
				"\n";
		}
		if (
			namaakun != "" &&
			namasubakuncashlawan == "" &&
			namacostcenterdua != ""
		) {
			document.getElementById("keterangancashlawan").value =
				namaakun + "\n" + namacostcenterdua + "\n";
		}
		if (
			namaakun != "" &&
			namasubakuncashlawan != "" &&
			namacostcenterdua == ""
		) {
			document.getElementById("keterangancashlawan").value =
				namaakun + "\n" + namasubakuncashlawan + "\n";
		}
		if (
			namaakun != "" &&
			namasubakuncashlawan == "" &&
			namacostcenterdua == ""
		) {
			document.getElementById("keterangancashlawan").value = namaakun + "\n";
		}
		if (
			namaakun == "" &&
			namasubakuncashlawan == "" &&
			namacostcenterdua != ""
		) {
			document.getElementById("keterangancashlawan").value =
				namacostcenterdua + "\n";
		}
		autoResizeTextarea(keterangancashlawan);
		// document.getElementById("namaakundua").value = $(this).attr('data-namaakun');

		$("#modalcoacashlawan").modal("hide");
		listsubakuncashlawan();
	});
}
function subakuncashlawanmodal() {
	$(document).on("click", "#datasubakuncashlawan", function (e) {
		document.getElementById("subakuncashlawan").value =
			$(this).attr("data-subakun");
		document.getElementById("namasubakuncashlawan").value =
			$(this).attr("data-namasubakun");
		var namaakun = document.getElementById("namaakundua").value;
		var namasubakuncashlawan = document.getElementById(
			"namasubakuncashlawan"
		).value;
		var namacostcenterdua = document.getElementById("namacostcenterdua").value;

		document.getElementById("keterangancashlawan").value =
			namaakun + "\n" + namasubakuncashlawan + "\n" + namacostcenterdua + "\n";
		if (
			namaakun != "" &&
			namasubakuncashlawan != "" &&
			namacostcenterdua != ""
		) {
			document.getElementById("keterangancashlawan").value =
				namaakun +
				"\n" +
				namasubakuncashlawan +
				"\n" +
				namacostcenterdua +
				"\n";
		}
		if (
			namaakun != "" &&
			namasubakuncashlawan == "" &&
			namacostcenterdua != ""
		) {
			document.getElementById("keterangancashlawan").value =
				namaakun + "\n" + namacostcenterdua + "\n";
		}
		if (
			namaakun != "" &&
			namasubakuncashlawan != "" &&
			namacostcenterdua == ""
		) {
			document.getElementById("keterangancashlawan").value =
				namaakun + "\n" + namasubakuncashlawan + "\n";
		}
		if (
			namaakun != "" &&
			namasubakuncashlawan == "" &&
			namacostcenterdua == ""
		) {
			document.getElementById("keterangancashlawan").value = namaakun + "\n";
		}
		if (
			namaakun == "" &&
			namasubakuncashlawan == "" &&
			namacostcenterdua != ""
		) {
			document.getElementById("keterangancashlawan").value =
				namacostcenterdua + "\n";
		}
		autoResizeTextarea(keterangancashlawan);

		$("#modalsubakuncashlawan").modal("hide");
	});
}
function costcenterlawanmodal() {
	$(document).on("click", "#costcenterlawan", function (e) {
		document.getElementById("costcenterdua").value = $(this).attr(
			"data-kodecostcenter"
		);
		document.getElementById("namacostcenterdua").value = $(this).attr(
			"data-namacostcenter"
		);

		var namaakun = document.getElementById("namaakundua").value;
		var namasubakuncashlawan = document.getElementById(
			"namasubakuncashlawan"
		).value;
		var namacostcenterdua = document.getElementById("namacostcenterdua").value;

		document.getElementById("keterangancashlawan").value =
			namaakun + "\n" + namasubakuncashlawan + "\n" + namacostcenterdua + "\n";
		if (
			namaakun != "" &&
			namasubakuncashlawan != "" &&
			namacostcenterdua != ""
		) {
			document.getElementById("keterangancashlawan").value =
				namaakun +
				"\n" +
				namasubakuncashlawan +
				"\n" +
				namacostcenterdua +
				"\n";
		}
		if (
			namaakun != "" &&
			namasubakuncashlawan == "" &&
			namacostcenterdua != ""
		) {
			document.getElementById("keterangancashlawan").value =
				namaakun + "\n" + namacostcenterdua + "\n";
		}
		if (
			namaakun != "" &&
			namasubakuncashlawan != "" &&
			namacostcenterdua == ""
		) {
			document.getElementById("keterangancashlawan").value =
				namaakun + "\n" + namasubakuncashlawan + "\n";
		}
		if (
			namaakun != "" &&
			namasubakuncashlawan == "" &&
			namacostcenterdua == ""
		) {
			document.getElementById("keterangancashlawan").value = namaakun + "\n";
		}
		if (
			namaakun == "" &&
			namasubakuncashlawan == "" &&
			namacostcenterdua != ""
		) {
			document.getElementById("keterangancashlawan").value =
				namacostcenterdua + "\n";
		}
		autoResizeTextarea(keterangancashlawan);
		$("#modalcostcenterlawan").modal("hide");
	});
}

/** End Modal Pada Menu Cashbank */

/** Modal Pada Menu 2D Design */
function karyawanmodal() {
	$(document).on("click", "#karyawan", function (e) {
		document.getElementById("idkaryawan").value = $(this).attr("data-id");
		document.getElementById("nama").value = $(this).attr("data-nama");
		$("#modalkaryawan").modal("hide");
	});
}
function konsepkepalamodal() {
	$(document).on("click", "#konsepkepala", function (e) {
		document.getElementById("idkonsepkepala").value = $(this).attr("data-id");
		document.getElementById("konsepkepala").value =
			$(this).attr("data-konsepkepala");
		$("#modalkonsepkepala").modal("hide");
	});
}
function finishingmodal() {
	$(document).on("click", "#finishing", function (e) {
		document.getElementById("idfinishing").value = $(this).attr("data-id");
		document.getElementById("finishing").value = $(this).attr("data-finishing");
		$("#modalfinishing").modal("hide");
	});
}
function warnaprodukmodal() {
	$(document).on("click", "#warnaproduk", function (e) {
		document.getElementById("idwarnaproduk").value = $(this).attr("data-id");
		document.getElementById("warnaproduk").value =
			$(this).attr("data-warnaproduk");
		$("#modalwarnaproduk").modal("hide");
	});
}

function parcelmodal() {
	$(document).on("click", "#parcel", function (e) {
		document.getElementById("idparcel").value = $(this).attr("data-id");
		document.getElementById("parcel").value =
			$(this).attr("data-parcel") +
			"(" +
			$(this).attr("data-diameterfrom") +
			"-" +
			$(this).attr("data-diameterto") +
			")";
		document.getElementById("shape").value = $(this).attr("data-shape");
		document.getElementById("color").value = $(this).attr("data-color");
		document.getElementById("clarity").value = $(this).attr("data-clarity");
		document.getElementById("harga").value = $(this).attr("data-harga");
		document.getElementById("carat").value = $(this).attr("data-carat");

		$("#modalparcel").modal("hide");
		gethargaprongsetting();
	});
}
function produkmodal() {
	$(document).on("click", "#produk", function (e) {
		document.getElementById("idbarang").value = $(this).attr("data-id");
		document.getElementById("produk").value = $(this).attr("data-produk");
		document.getElementById("tipeproduk").value =
			$(this).attr("data-tipeproduk");
		document.getElementById("brand").value = $(this).attr("data-brand");
		document.getElementById("kondisi").value = $(this).attr("data-kondisi");
		document.getElementById("etalase").value = $(this).attr("data-etalase");
		document.getElementById("hargaproduk").value = $(this).attr("data-harga");
		document.getElementById("hargaproduk_").value = $(this).attr("data-harga_");
		$("#modalproduk").modal("hide");
	});
}
/** End Modal Pada Menu 2D Design */

/** Modal Pada Menu Pembelian */
function lawantransaksimodal() {
	$(document).on("click", "#lawantransaksimodal", function (e) {
		document.getElementById("lawantransaksi").value =
			$(this).attr("data-namaclient");
		document.getElementById("idlawantransaksi").value = $(this).attr("data-id");
		$("#modallawantransaksi").modal("hide");
	});
}
function historymodal() {
	$(document).on("click", "#choicehistory", function (e) {
		document.getElementById("idbarang").value = $(this).attr("data-idbarang");
		document.getElementById("namabarang").value =
			$(this).attr("data-namabarang");
		document.getElementById("skuproduk").value = $(this).attr("data-skuproduk");
		document.getElementById("hargaproduk").value =
			$(this).attr("data-hargajual");
		document.getElementById("hargaproduk_").value =
			$(this).attr("data-hargajual_");
		$("#modalhistorylawantransaksi").modal("hide");
	});
}

function lokasimodal() {
	$(document).on("click", "#lokasi", function (e) {
		document.getElementById("idlokasi").value = $(this).attr("data-id");
		document.getElementById("lokasi").value = $(this).attr("data-lokasi");
		$("#modallokasi").modal("hide");
	});
}

function bahanbakupendukungmodal() {
	$(document).on("click", "#bahanbakupendukung", function (e) {
		document.getElementById("idbarang").value = $(this).attr("data-id");
		document.getElementById("namabarang").value = $(this).attr("data-produk");
		document.getElementById("hargaproduk").value = $(this).attr("data-harga");
		document.getElementById("hargaproduk_").value = $(this).attr("data-harga_");
		$("#modalbahanbakupendukung").modal("hide");
		$("#jumlah").focus();
		document.getElementById("btntambahdetailtransaksi").disabled = false;
	});
}

function baranginventorymodal() {
	$(document).on("click", "#baranginventory", function (e) {
		var satuanBesarElement = document.getElementById("satuanbesar");
		var satuanKecilElement = document.getElementById("satuankecil");
		var hargajualproduk = document.getElementById("hargajualproduk");
		var hargajualproduk_ = document.getElementById("hargajualproduk_");
		var butirElement = document.getElementById("butir");

		document.getElementById("idbarang").value = $(this).attr("data-id");
		document.getElementById("skuproduk").value = $(this).attr("data-skuproduk");
		document.getElementById("namabarang").value = $(this).attr("data-produk");
		document.getElementById("jumlah").value = 1;

		if (satuanBesarElement) {
			satuanBesarElement.value = $(this).attr("data-satuanbesar");
		}
		if (satuanKecilElement) {
			satuanKecilElement.value = $(this).attr("data-satuankecil");

			// Memeriksa apakah atribut "data-satuanbesar" sama dengan "data-satuankecil"
			if (
				$(this).attr("data-satuanbesar") == $(this).attr("data-satuankecil")
			) {
				satuanKecilElement.style.display = "none"; // Menyembunyikan elemen "satuankecil"
				butirElement.setAttribute("readonly", "true"); // Menyembunyikan elemen "satuankecil"
			} else {
				satuanKecilElement.style.display = "block"; // Menampilkan elemen "satuankecil"
				butirElement.value = "1"; // Menampilkan elemen "satuankecil"
			}
		}

		if (hargajualproduk) {
			hargajualproduk.value = $(this).attr("data-hargajual");
		}
		if (hargajualproduk_) {
			hargajualproduk_.value = $(this).attr("data-hargajual_");
		}

		$("#modalinventory").modal("hide");
		document.getElementById("btntambahdetailtransaksi").disabled = false;
		$("#jumlah").focus();
	});
}

function baranginventoryvalidasiskumodal() {
	$(document).on("click", "#baranginventory", function (e) {
		document.querySelector(
			`tr#${parentNode.parentNode.parentNode.id} input[name=skuproduk]`
		).value = $(this).attr("data-skuproduk");
		$("#modalinventoryvalidasisku").modal("hide");
	});
}

function diamondmodal() {
	$(document).on("click", "#diamond", function (e) {
		document.getElementById("idbarang").value = $(this).attr("data-id");
		document.getElementById("namabarang").value = $(this).attr("data-parcel");
		document.getElementById("hargaproduk").value = $(this).attr("data-harga");
		document.getElementById("hargaproduk_").value = $(this).attr("data-harga_");
		$("#modaldiamond").modal("hide");
	});
}
/** End Modal Pada Menu Pembelian */

/**Modal Pada Menu SPK */
function projectmodal() {
	$(document).on("click", "#projectmodal", function (e) {
		document.getElementById("namaproject").value =
			$(this).attr("data-namaproject");
		document.getElementById("nama").value = $(this).attr(
			"data-penanggungjawab"
		);
		document.getElementById("idkaryawan").value =
			$(this).attr("data-idkaryawan");
		document.getElementById("idheaderproject").value = $(this).attr("data-id");
		$("#modalproject").modal("hide");
	});
}
/**End Modal Pada Menu SPK */

/** Modal Pada Menu Pembelian Barang Jadi */
$(document).on("click", "#btnmodal", function () {
	var id = $(this).data("id");
	$(".modal-body #id").val(id);
});

$(document).on("click", "#btnfinishing", function () {
	var id = $(this).data("id");
	console.log(id);
	$(".modal-body #id").val(id);
});

$(document).on("click", "#btnparcel", function () {
	var id = $(this).data("id");
	$(".modal-body #id").val(id);
});

function modelmodal() {
	$(document).on("click", "#model", function (e) {
		document.getElementById("modeldesign").value = $(this).attr("data-model");
		document.getElementById("iddetail").value = $(this).attr("data-iddetail");
		// getjumlahdetaildesain()
		$("#modal2ddesign").modal("hide");
	});
}

function finishingmodalspk() {
	$(document).on("click", "#finishingspk", function (e) {
		var id = $("#id").val();
		document.querySelector(`#detail${id} #idfinishing`).value =
			$(this).attr("data-id");
		document.querySelector(`#detail${id} #finishing`).value =
			$(this).attr("data-finishing");

		$("#modalfinishingspk").modal("hide");
	});
}

function warnaprodukmodalspk() {
	$(document).on("click", "#warnaprodukmodalspk", function (e) {
		var id = $("#id").val();

		document.querySelector(`#detail${id} #idwarnaproduk`).value =
			$(this).attr("data-id");
		document.querySelector(`#detail${id} #warnaproduk`).value =
			$(this).attr("data-warnaproduk");

		$("#modalwarnaprodukspk").modal("hide");
	});
}
/** End Modal Pada Menu Pembelian Barang Jadi */

/** Function Modal Pada Menu Serah Terima */
function modalbarangjadi() {
	$(document).on("click", "#barangjadimodal", function (e) {
		document.getElementById("barcode").value = $(this).attr("data-barcode");
		document.getElementById("lokasibarangjadi").value = $(this).attr(
			"data-lokasibarangjadi"
		);
		document.getElementById("idbarangjadi").value =
			$(this).attr("data-idbarangjadi");
		document.getElementById("model").value = $(this).attr("data-model");
		document.getElementById("hargasales").value =
			$(this).attr("data-hargasales");
		document.getElementById("iddetaildesain").value = $(this).attr(
			"data-iddetaildesain"
		);

		$("#modalbarangjadidetail").modal("hide");
		document.getElementById("btnaddbarangjadi").disabled = false;
	});
}
/** End Function Modal Pada Menu Serah Terima */

/** Function Modal Pada Menu Penjualan*/
function modalbarangjadidetailpenjualan() {
	$(document).on("click", "#barangjadipenjualanmodal", function (e) {
		e.preventDefault();
		document.getElementById("barcode").value = $(this).attr("data-barcode");
		document.getElementById("lokasibarangjadi").value = $(this).attr(
			"data-lokasibarangjadi"
		);
		document.getElementById("idbarangjadi").value =
			$(this).attr("data-idbarangjadi");
		document.getElementById("model").value = $(this).attr("data-model");
		document.getElementById("berat").value = $(this).attr("data-beratmaterial");
		document.getElementById("hargasales").value =
			$(this).attr("data-hargasales");
		document.getElementById("iddetaildesain").value = $(this).attr(
			"data-iddetaildesain"
		);

		document.getElementById("btnadddetailpenjualan").disabled = false;

		$("#modalbarangjadipenjualan").modal("hide");
	});
}
/** End Function Modal Pada Menu Penjualan */

/* Function Modal Pada Menu Project */

function produkjadimodal() {
	$(document).on("click", "#produkjadi", function (e) {
		document.getElementById("idprodukjadi").value = $(this).attr("data-id");
		document.getElementById("namaprodukjadi").value =
			$(this).attr("data-produk");
		$("#modalprodukjadi").modal("hide");
	});
}
/* End Function Modal Pada Menu Project */

/** Function Buatan Sendiri */

function openUpdateStatusKirimModal(elem, link) {
	const nomorinvoice = $(elem).data("nomorinvoice");
	$("#nomorinvoicestatuskirim").attr("value", nomorinvoice);
	$("#formupdatestatuskirim").attr("action", link);
}

function previewPassword(elem, id) {
	const iconEye = elem.lastChild;
	// const elmPassword =
	//   elem.parentElement.parentElement.parentElement.firstElementChild;
	const elmPassword = document.getElementById(id);
	if (iconEye.classList.contains("fa-eye-slash")) {
		iconEye.classList.replace("fa-eye-slash", "fa-eye");
		elmPassword.setAttribute("type", "text");
	} else {
		iconEye.classList.replace("fa-eye", "fa-eye-slash");
		elmPassword.setAttribute("type", "password");
	}
}

function openDeleteModal(elem, link) {
	const id = $(elem).data("id");
	$("#valueId").attr("value", id);
	$("#formLinkDelete").attr("action", link);
}
function openUpdateStockModal(elem, link) {
	const id = $(elem).data("id");
	const skuproduk = $(elem).data("skuproduk");
	const stock = $(elem).data("stock");
	const namaproduk = $(elem).data("namaproduk");
	$("#idproduk").attr("value", id);
	$("#namaproduk").attr("value", namaproduk);
	$("#skuproduk").attr("value", skuproduk);
	$("#stocklama").attr("value", stock);
	$("#formupdatestock").attr("action", link);
}

function openEditPembelianModal(elem) {
	const idheaderpembelian = $(elem).data("idheaderpembelian");
	$("#idheaderpembelian").attr("value", idheaderpembelian);
}
function openHapusPembelianModal(elem) {
	const idheaderpembelian = $(elem).data("idheaderpembelian");
	const nomorpembelian = $(elem).data("nomorpembelian");
	const faktursupplier = $(elem).data("faktursupplier");

	$("#id_headerpembelianhapus").attr("value", idheaderpembelian);
	$("#nomorpembelian").attr("value", nomorpembelian);
	$("#faktursupplier").attr("value", faktursupplier);
}
function openEditPenjualanModal(elem) {
	const idheaderpenjualan = $(elem).data("idheaderpenjualan");
	$("#idheaderpenjualan").attr("value", idheaderpenjualan);
}
function openHapusPenjualanModal(elem) {
	const idheaderpenjualan = $(elem).data("idheaderpenjualan");
	const nomorpenjualan = $(elem).data("nomorpenjualan");

	$("#id_headerpenjualanhapus").attr("value", idheaderpenjualan);
	$("#nomorpenjualan").attr("value", nomorpenjualan);
}
function openEditProjectModal(elem) {
	const idheaderproject = $(elem).data("idheaderproject");

	$("#idheaderproject").attr("value", idheaderproject);
}
function openHapusProjectModal(elem) {
	const idheaderproject = $(elem).data("idheaderproject");

	$("#id_headerprojecthapus").attr("value", idheaderproject);
}
function openEditSpkModal(elem) {
	const idheaderspk = $(elem).data("idheaderspk");

	$("#idheaderspk").attr("value", idheaderspk);
}
function openHapusSpkModal(elem) {
	const idheaderspk = $(elem).data("idheaderspk");

	$("#id_headerspkhapus").attr("value", idheaderspk);
}
function openEditPeminjamanBarangModal(elem) {
	const idheaderpeminjamanbarang = $(elem).data("idheaderpeminjamanbarang");

	$("#idheaderpeminjamanbarang").attr("value", idheaderpeminjamanbarang);
}
function openHapusPeminjamanBarangModal(elem) {
	const idheaderpeminjamanbarang = $(elem).data("idheaderpeminjamanbarang");

	$("#idheaderpeminjamanbaranghapus").attr("value", idheaderpeminjamanbarang);
}
function openStockCardProdukModal(elem, link) {
	const id = $(elem).data("id");
	$("#idprodukstockcard").attr("value", id);
	$("#formstockcardproduk").attr("action", link);
}
function openPrintBarcodeModal(elem, link) {
	const barcode = $(elem).data("barcodeproduk");
	const sku = $(elem).data("skuproduk");
	const nama = $(elem).data("namaproduk");
	console.log(barcode);
	$("#barcodeproduk").attr("value", barcode);
	$("#skuprodukbarcode").attr("value", sku);
	$("#namaprodukbarcode").attr("value", nama);
	$("#formbarcodeproduk").attr("action", link);
}

document.querySelectorAll(".js-nilai").forEach((elm) => {
	elm.addEventListener("keyup", function (e) {
		elm.value = convertRupiah(elm.value);
	});
});

function convertRupiah(angka, prefix) {
	var number_string = angka.replace(/[^,\d]/g, "").toString(),
		split = number_string.split(","),
		sisa = split[0].length % 3,
		rupiah = split[0].substr(0, sisa),
		ribuan = split[0].substr(sisa).match(/\d{3}/g);

	if (ribuan) {
		separator = sisa ? "." : "";
		rupiah += separator + ribuan.join(".");
	}

	rupiah = split[1] !== undefined ? rupiah + "," + split[1] : rupiah;
	return prefix === undefined ? rupiah : rupiah ? prefix + rupiah : "";
}

/** End Function Buatan Sendiri */

/** Javascript Komponen HTML */
document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
	const dropZoneElement = inputElement.closest(".drop-zone");

	dropZoneElement.addEventListener("click", (e) => {
		inputElement.click();
	});

	inputElement.addEventListener("change", (e) => {
		if (inputElement.files.length) {
			updateThumbnail(dropZoneElement, inputElement.files[0]);
		}
	});

	dropZoneElement.addEventListener("dragover", (e) => {
		e.preventDefault();
		dropZoneElement.classList.add("drop-zone--over");
	});

	["dragleave", "dragend"].forEach((type) => {
		dropZoneElement.addEventListener(type, (e) => {
			dropZoneElement.classList.remove("drop-zone--over");
		});
	});

	dropZoneElement.addEventListener("drop", (e) => {
		e.preventDefault();

		if (e.dataTransfer.files.length) {
			inputElement.files = e.dataTransfer.files;
			updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
		}

		dropZoneElement.classList.remove("drop-zone--over");
	});
});

/**
 * Updates the thumbnail on a drop zone element.
 *
 * @param {HTMLElement} dropZoneElement
 * @param {File} file
 */
function updateThumbnail(dropZoneElement, file) {
	let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

	// First time - remove the prompt
	if (dropZoneElement.querySelector(".drop-zone__prompt")) {
		dropZoneElement.querySelector(".drop-zone__prompt").remove();
	}

	// First time - there is no thumbnail element, so lets create it
	if (!thumbnailElement) {
		thumbnailElement = document.createElement("div");
		thumbnailElement.classList.add("drop-zone__thumb");
		dropZoneElement.appendChild(thumbnailElement);
	}

	thumbnailElement.dataset.label = file.name;

	// Show thumbnail for image files
	if (file.type.startsWith("image/")) {
		const reader = new FileReader();

		reader.readAsDataURL(file);
		reader.onload = () => {
			thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
		};
	} else {
		thumbnailElement.style.backgroundImage = null;
	}

	thumbnailElement.querySelector(".img-preview").remove();
}
/* eslint-disable camelcase */

/** End Javascript Komponen HTML */

(function ($) {
	"use strict";

	// setTimeout(function () {
	//   if (window.___browserSync___ === undefined && Number(localStorage.getItem('AdminLTE:Demo:MessageShowed')) < Date.now()) {
	//     localStorage.setItem('AdminLTE:Demo:MessageShowed', (Date.now()) + (15 * 60 * 1000))
	//     // eslint-disable-next-line no-alert
	//     alert('You load AdminLTE\'s "demo.js", \nthis file is only created for testing purposes!')
	//   }
	// }, 1000)

	function capitalizeFirstLetter(string) {
		return string.charAt(0).toUpperCase() + string.slice(1);
	}

	function createSkinBlock(colors, callback, noneSelected) {
		var $block = $("<select />", {
			class: noneSelected
				? "custom-select mb-3 border-0"
				: "custom-select mb-3 text-light border-0 " +
				  colors[0].replace(/accent-|navbar-/, "bg-"),
		});

		if (noneSelected) {
			var $default = $("<option />", {
				text: "None Selected",
			});

			$block.append($default);
		}

		colors.forEach(function (color) {
			var $color = $("<option />", {
				class: (typeof color === "object" ? color.join(" ") : color)
					.replace("navbar-", "bg-")
					.replace("accent-", "bg-"),
				text: capitalizeFirstLetter(
					(typeof color === "object" ? color.join(" ") : color)
						.replace(/navbar-|accent-|bg-/, "")
						.replace("-", " ")
				),
			});

			$block.append($color);
		});
		if (callback) {
			$block.on("change", callback);
		}

		return $block;
	}

	var $sidebar = $(".control-sidebar");
	var $container = $("<div />", {
		class: "p-3 control-sidebar-content",
	});

	$sidebar.append($container);

	// Checkboxes

	$container.append('<h5>Customize AdminLTE</h5><hr class="mb-2"/>');

	var $dark_mode_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $("body").hasClass("dark-mode"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$("body").addClass("dark-mode");
		} else {
			$("body").removeClass("dark-mode");
		}
	});
	var $dark_mode_container = $("<div />", { class: "mb-4" })
		.append($dark_mode_checkbox)
		.append("<span>Dark Mode</span>");
	$container.append($dark_mode_container);

	$container.append("<h6>Header Options</h6>");
	var $header_fixed_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $("body").hasClass("layout-navbar-fixed"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$("body").addClass("layout-navbar-fixed");
		} else {
			$("body").removeClass("layout-navbar-fixed");
		}
	});
	var $header_fixed_container = $("<div />", { class: "mb-1" })
		.append($header_fixed_checkbox)
		.append("<span>Fixed</span>");
	$container.append($header_fixed_container);

	var $dropdown_legacy_offset_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $(".main-header").hasClass("dropdown-legacy"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$(".main-header").addClass("dropdown-legacy");
		} else {
			$(".main-header").removeClass("dropdown-legacy");
		}
	});
	var $dropdown_legacy_offset_container = $("<div />", { class: "mb-1" })
		.append($dropdown_legacy_offset_checkbox)
		.append("<span>Dropdown Legacy Offset</span>");
	$container.append($dropdown_legacy_offset_container);

	var $no_border_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $(".main-header").hasClass("border-bottom-0"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$(".main-header").addClass("border-bottom-0");
		} else {
			$(".main-header").removeClass("border-bottom-0");
		}
	});
	var $no_border_container = $("<div />", { class: "mb-4" })
		.append($no_border_checkbox)
		.append("<span>No border</span>");
	$container.append($no_border_container);

	$container.append("<h6>Sidebar Options</h6>");

	var $sidebar_collapsed_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $("body").hasClass("sidebar-collapse"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$("body").addClass("sidebar-collapse");
			$(window).trigger("resize");
		} else {
			$("body").removeClass("sidebar-collapse");
			$(window).trigger("resize");
		}
	});
	var $sidebar_collapsed_container = $("<div />", { class: "mb-1" })
		.append($sidebar_collapsed_checkbox)
		.append("<span>Collapsed</span>");
	$container.append($sidebar_collapsed_container);

	$(document).on(
		"collapsed.lte.pushmenu",
		'[data-widget="pushmenu"]',
		function () {
			$sidebar_collapsed_checkbox.prop("checked", true);
		}
	);
	$(document).on("shown.lte.pushmenu", '[data-widget="pushmenu"]', function () {
		$sidebar_collapsed_checkbox.prop("checked", false);
	});

	var $sidebar_fixed_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $("body").hasClass("layout-fixed"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$("body").addClass("layout-fixed");
			$(window).trigger("resize");
		} else {
			$("body").removeClass("layout-fixed");
			$(window).trigger("resize");
		}
	});
	var $sidebar_fixed_container = $("<div />", { class: "mb-1" })
		.append($sidebar_fixed_checkbox)
		.append("<span>Fixed</span>");
	$container.append($sidebar_fixed_container);

	var $sidebar_mini_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $("body").hasClass("sidebar-mini"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$("body").addClass("sidebar-mini");
		} else {
			$("body").removeClass("sidebar-mini");
		}
	});
	var $sidebar_mini_container = $("<div />", { class: "mb-1" })
		.append($sidebar_mini_checkbox)
		.append("<span>Sidebar Mini</span>");
	$container.append($sidebar_mini_container);

	var $sidebar_mini_md_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $("body").hasClass("sidebar-mini-md"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$("body").addClass("sidebar-mini-md");
		} else {
			$("body").removeClass("sidebar-mini-md");
		}
	});
	var $sidebar_mini_md_container = $("<div />", { class: "mb-1" })
		.append($sidebar_mini_md_checkbox)
		.append("<span>Sidebar Mini MD</span>");
	$container.append($sidebar_mini_md_container);

	var $sidebar_mini_xs_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $("body").hasClass("sidebar-mini-xs"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$("body").addClass("sidebar-mini-xs");
		} else {
			$("body").removeClass("sidebar-mini-xs");
		}
	});
	var $sidebar_mini_xs_container = $("<div />", { class: "mb-1" })
		.append($sidebar_mini_xs_checkbox)
		.append("<span>Sidebar Mini XS</span>");
	$container.append($sidebar_mini_xs_container);

	var $flat_sidebar_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $(".nav-sidebar").hasClass("nav-flat"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$(".nav-sidebar").addClass("nav-flat");
		} else {
			$(".nav-sidebar").removeClass("nav-flat");
		}
	});
	var $flat_sidebar_container = $("<div />", { class: "mb-1" })
		.append($flat_sidebar_checkbox)
		.append("<span>Nav Flat Style</span>");
	$container.append($flat_sidebar_container);

	var $legacy_sidebar_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $(".nav-sidebar").hasClass("nav-legacy"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$(".nav-sidebar").addClass("nav-legacy");
		} else {
			$(".nav-sidebar").removeClass("nav-legacy");
		}
	});
	var $legacy_sidebar_container = $("<div />", { class: "mb-1" })
		.append($legacy_sidebar_checkbox)
		.append("<span>Nav Legacy Style</span>");
	$container.append($legacy_sidebar_container);

	var $compact_sidebar_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $(".nav-sidebar").hasClass("nav-compact"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$(".nav-sidebar").addClass("nav-compact");
		} else {
			$(".nav-sidebar").removeClass("nav-compact");
		}
	});
	var $compact_sidebar_container = $("<div />", { class: "mb-1" })
		.append($compact_sidebar_checkbox)
		.append("<span>Nav Compact</span>");
	$container.append($compact_sidebar_container);

	var $child_indent_sidebar_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $(".nav-sidebar").hasClass("nav-child-indent"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$(".nav-sidebar").addClass("nav-child-indent");
		} else {
			$(".nav-sidebar").removeClass("nav-child-indent");
		}
	});
	var $child_indent_sidebar_container = $("<div />", { class: "mb-1" })
		.append($child_indent_sidebar_checkbox)
		.append("<span>Nav Child Indent</span>");
	$container.append($child_indent_sidebar_container);

	var $child_hide_sidebar_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $(".nav-sidebar").hasClass("nav-collapse-hide-child"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$(".nav-sidebar").addClass("nav-collapse-hide-child");
		} else {
			$(".nav-sidebar").removeClass("nav-collapse-hide-child");
		}
	});
	var $child_hide_sidebar_container = $("<div />", { class: "mb-1" })
		.append($child_hide_sidebar_checkbox)
		.append("<span>Nav Child Hide on Collapse</span>");
	$container.append($child_hide_sidebar_container);

	var $no_expand_sidebar_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $(".main-sidebar").hasClass("sidebar-no-expand"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$(".main-sidebar").addClass("sidebar-no-expand");
		} else {
			$(".main-sidebar").removeClass("sidebar-no-expand");
		}
	});
	var $no_expand_sidebar_container = $("<div />", { class: "mb-4" })
		.append($no_expand_sidebar_checkbox)
		.append("<span>Disable Hover/Focus Auto-Expand</span>");
	$container.append($no_expand_sidebar_container);

	$container.append("<h6>Footer Options</h6>");
	var $footer_fixed_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $("body").hasClass("layout-footer-fixed"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$("body").addClass("layout-footer-fixed");
		} else {
			$("body").removeClass("layout-footer-fixed");
		}
	});
	var $footer_fixed_container = $("<div />", { class: "mb-4" })
		.append($footer_fixed_checkbox)
		.append("<span>Fixed</span>");
	$container.append($footer_fixed_container);

	$container.append("<h6>Small Text Options</h6>");

	var $text_sm_body_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $("body").hasClass("text-sm"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$("body").addClass("text-sm");
		} else {
			$("body").removeClass("text-sm");
		}
	});
	var $text_sm_body_container = $("<div />", { class: "mb-1" })
		.append($text_sm_body_checkbox)
		.append("<span>Body</span>");
	$container.append($text_sm_body_container);

	var $text_sm_header_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $(".main-header").hasClass("text-sm"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$(".main-header").addClass("text-sm");
		} else {
			$(".main-header").removeClass("text-sm");
		}
	});
	var $text_sm_header_container = $("<div />", { class: "mb-1" })
		.append($text_sm_header_checkbox)
		.append("<span>Navbar</span>");
	$container.append($text_sm_header_container);

	var $text_sm_brand_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $(".brand-link").hasClass("text-sm"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$(".brand-link").addClass("text-sm");
		} else {
			$(".brand-link").removeClass("text-sm");
		}
	});
	var $text_sm_brand_container = $("<div />", { class: "mb-1" })
		.append($text_sm_brand_checkbox)
		.append("<span>Brand</span>");
	$container.append($text_sm_brand_container);

	var $text_sm_sidebar_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $(".nav-sidebar").hasClass("text-sm"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$(".nav-sidebar").addClass("text-sm");
		} else {
			$(".nav-sidebar").removeClass("text-sm");
		}
	});
	var $text_sm_sidebar_container = $("<div />", { class: "mb-1" })
		.append($text_sm_sidebar_checkbox)
		.append("<span>Sidebar Nav</span>");
	$container.append($text_sm_sidebar_container);

	var $text_sm_footer_checkbox = $("<input />", {
		type: "checkbox",
		value: 1,
		checked: $(".main-footer").hasClass("text-sm"),
		class: "mr-1",
	}).on("click", function () {
		if ($(this).is(":checked")) {
			$(".main-footer").addClass("text-sm");
		} else {
			$(".main-footer").removeClass("text-sm");
		}
	});
	var $text_sm_footer_container = $("<div />", { class: "mb-4" })
		.append($text_sm_footer_checkbox)
		.append("<span>Footer</span>");
	$container.append($text_sm_footer_container);

	// Color Arrays

	var navbar_dark_skins = [
		"navbar-primary",
		"navbar-secondary",
		"navbar-info",
		"navbar-success",
		"navbar-danger",
		"navbar-indigo",
		"navbar-purple",
		"navbar-pink",
		"navbar-navy",
		"navbar-lightblue",
		"navbar-teal",
		"navbar-cyan",
		"navbar-dark",
		"navbar-gray-dark",
		"navbar-gray",
	];

	var navbar_light_skins = [
		"navbar-light",
		"navbar-warning",
		"navbar-white",
		"navbar-orange",
	];

	var sidebar_colors = [
		"bg-primary",
		"bg-warning",
		"bg-info",
		"bg-danger",
		"bg-success",
		"bg-indigo",
		"bg-lightblue",
		"bg-navy",
		"bg-purple",
		"bg-fuchsia",
		"bg-pink",
		"bg-maroon",
		"bg-orange",
		"bg-lime",
		"bg-teal",
		"bg-olive",
	];

	var accent_colors = [
		"accent-primary",
		"accent-warning",
		"accent-info",
		"accent-danger",
		"accent-success",
		"accent-indigo",
		"accent-lightblue",
		"accent-navy",
		"accent-purple",
		"accent-fuchsia",
		"accent-pink",
		"accent-maroon",
		"accent-orange",
		"accent-lime",
		"accent-teal",
		"accent-olive",
	];

	var sidebar_skins = [
		"sidebar-dark-primary",
		"sidebar-dark-warning",
		"sidebar-dark-info",
		"sidebar-dark-danger",
		"sidebar-dark-success",
		"sidebar-dark-indigo",
		"sidebar-dark-lightblue",
		"sidebar-dark-navy",
		"sidebar-dark-purple",
		"sidebar-dark-fuchsia",
		"sidebar-dark-pink",
		"sidebar-dark-maroon",
		"sidebar-dark-orange",
		"sidebar-dark-lime",
		"sidebar-dark-teal",
		"sidebar-dark-olive",
		"sidebar-light-primary",
		"sidebar-light-warning",
		"sidebar-light-info",
		"sidebar-light-danger",
		"sidebar-light-success",
		"sidebar-light-indigo",
		"sidebar-light-lightblue",
		"sidebar-light-navy",
		"sidebar-light-purple",
		"sidebar-light-fuchsia",
		"sidebar-light-pink",
		"sidebar-light-maroon",
		"sidebar-light-orange",
		"sidebar-light-lime",
		"sidebar-light-teal",
		"sidebar-light-olive",
	];

	// Navbar Variants

	$container.append("<h6>Navbar Variants</h6>");

	var $navbar_variants = $("<div />", {
		class: "d-flex",
	});
	var navbar_all_colors = navbar_dark_skins.concat(navbar_light_skins);
	var $navbar_variants_colors = createSkinBlock(navbar_all_colors, function () {
		var color = $(this)
			.find("option:selected")
			.attr("class")
			.replace("bg-", "navbar-");
		var $main_header = $(".main-header");
		$main_header.removeClass("navbar-dark").removeClass("navbar-light");
		navbar_all_colors.forEach(function (color) {
			$main_header.removeClass(color);
		});

		$(this).removeClass().addClass("custom-select mb-3 text-light border-0 ");

		if (navbar_dark_skins.indexOf(color) > -1) {
			$main_header.addClass("navbar-dark");
			$(this).addClass(color).addClass("text-light");
		} else {
			$main_header.addClass("navbar-light");
			$(this).addClass(color);
		}

		$main_header.addClass(color);
	});

	var active_navbar_color = null;
	var $main_header = $(".main-header");
	if ($main_header.length > 0) {
		$main_header[0].classList.forEach(function (className) {
			if (
				navbar_all_colors.indexOf(className) > -1 &&
				active_navbar_color === null
			) {
				active_navbar_color = className.replace("navbar-", "bg-");
			}
		});
	}

	$navbar_variants_colors
		.find("option." + active_navbar_color)
		.prop("selected", true);
	$navbar_variants_colors
		.removeClass()
		.addClass("custom-select mb-3 text-light border-0 ")
		.addClass(active_navbar_color);

	$navbar_variants.append($navbar_variants_colors);

	$container.append($navbar_variants);

	// Sidebar Colors

	$container.append("<h6>Accent Color Variants</h6>");
	var $accent_variants = $("<div />", {
		class: "d-flex",
	});
	$container.append($accent_variants);
	$container.append(
		createSkinBlock(
			accent_colors,
			function () {
				var color = $(this).find("option:selected").attr("class");
				var $body = $("body");
				accent_colors.forEach(function (skin) {
					$body.removeClass(skin);
				});

				var accent_color_class = color.replace("bg-", "accent-");

				$body.addClass(accent_color_class);
			},
			true
		)
	);

	var active_accent_color = null;
	$("body")[0].classList.forEach(function (className) {
		if (accent_colors.indexOf(className) > -1 && active_accent_color === null) {
			active_accent_color = className.replace("navbar-", "bg-");
		}
	});

	// $accent_variants.find('option.' + active_accent_color).prop('selected', true)
	// $accent_variants.removeClass().addClass('custom-select mb-3 text-light border-0 ').addClass(active_accent_color)

	$container.append("<h6>Dark Sidebar Variants</h6>");
	var $sidebar_variants_dark = $("<div />", {
		class: "d-flex",
	});
	$container.append($sidebar_variants_dark);
	var $sidebar_dark_variants = createSkinBlock(
		sidebar_colors,
		function () {
			var color = $(this).find("option:selected").attr("class");
			var sidebar_class = "sidebar-dark-" + color.replace("bg-", "");
			var $sidebar = $(".main-sidebar");
			sidebar_skins.forEach(function (skin) {
				$sidebar.removeClass(skin);
				$sidebar_light_variants
					.removeClass(skin.replace("sidebar-dark-", "bg-"))
					.removeClass("text-light");
			});

			$(this)
				.removeClass()
				.addClass("custom-select mb-3 text-light border-0")
				.addClass(color);

			$sidebar_light_variants.find("option").prop("selected", false);
			$sidebar.addClass(sidebar_class);
			$(".sidebar").removeClass("os-theme-dark").addClass("os-theme-light");
		},
		true
	);
	$container.append($sidebar_dark_variants);

	var active_sidebar_dark_color = null;
	var $main_sidebar = $(".main-sidebar");
	if ($main_sidebar.length > 0) {
		$main_sidebar[0].classList.forEach(function (className) {
			var color = className.replace("sidebar-dark-", "bg-");
			if (
				sidebar_colors.indexOf(color) > -1 &&
				active_sidebar_dark_color === null
			) {
				active_sidebar_dark_color = color;
			}
		});
	}

	$sidebar_dark_variants
		.find("option." + active_sidebar_dark_color)
		.prop("selected", true);
	$sidebar_dark_variants
		.removeClass()
		.addClass("custom-select mb-3 text-light border-0 ")
		.addClass(active_sidebar_dark_color);

	$container.append("<h6>Light Sidebar Variants</h6>");
	var $sidebar_variants_light = $("<div />", {
		class: "d-flex",
	});
	$container.append($sidebar_variants_light);
	var $sidebar_light_variants = createSkinBlock(
		sidebar_colors,
		function () {
			var color = $(this).find("option:selected").attr("class");
			var sidebar_class = "sidebar-light-" + color.replace("bg-", "");
			var $sidebar = $(".main-sidebar");
			sidebar_skins.forEach(function (skin) {
				$sidebar.removeClass(skin);
				$sidebar_dark_variants
					.removeClass(skin.replace("sidebar-light-", "bg-"))
					.removeClass("text-light");
			});

			$(this)
				.removeClass()
				.addClass("custom-select mb-3 text-light border-0")
				.addClass(color);

			$sidebar_dark_variants.find("option").prop("selected", false);
			$sidebar.addClass(sidebar_class);
			$(".sidebar").removeClass("os-theme-light").addClass("os-theme-dark");
		},
		true
	);
	$container.append($sidebar_light_variants);

	var active_sidebar_light_color = null;
	if ($main_sidebar.length > 0) {
		$main_sidebar[0].classList.forEach(function (className) {
			var color = className.replace("sidebar-light-", "bg-");
			if (
				sidebar_colors.indexOf(color) > -1 &&
				active_sidebar_light_color === null
			) {
				active_sidebar_light_color = color;
			}
		});
	}

	if (active_sidebar_light_color !== null) {
		$sidebar_light_variants
			.find("option." + active_sidebar_light_color)
			.prop("selected", true);
		$sidebar_light_variants
			.removeClass()
			.addClass("custom-select mb-3 text-light border-0 ")
			.addClass(active_sidebar_light_color);
	}

	var logo_skins = navbar_all_colors;
	$container.append("<h6>Brand Logo Variants</h6>");
	var $logo_variants = $("<div />", {
		class: "d-flex",
	});
	$container.append($logo_variants);
	var $clear_btn = $("<a />", {
		href: "#",
	})
		.text("clear")
		.on("click", function (e) {
			e.preventDefault();
			var $logo = $(".brand-link");
			logo_skins.forEach(function (skin) {
				$logo.removeClass(skin);
			});
		});

	var $brand_variants = createSkinBlock(
		logo_skins,
		function () {
			var color = $(this)
				.find("option:selected")
				.attr("class")
				.replace("bg-", "navbar-");
			var $logo = $(".brand-link");

			if (color === "navbar-light" || color === "navbar-white") {
				$logo.addClass("text-black");
			} else {
				$logo.removeClass("text-black");
			}

			logo_skins.forEach(function (skin) {
				$logo.removeClass(skin);
			});

			if (color) {
				$(this)
					.removeClass()
					.addClass("custom-select mb-3 border-0")
					.addClass(color)
					.addClass(
						color !== "navbar-light" && color !== "navbar-white"
							? "text-light"
							: ""
					);
			} else {
				$(this).removeClass().addClass("custom-select mb-3 border-0");
			}

			$logo.addClass(color);
		},
		true
	).append($clear_btn);
	$container.append($brand_variants);

	var active_brand_color = null;
	var $brand_link = $(".brand-link");
	if ($brand_link.length > 0) {
		$brand_link[0].classList.forEach(function (className) {
			if (logo_skins.indexOf(className) > -1 && active_brand_color === null) {
				active_brand_color = className.replace("navbar-", "bg-");
			}
		});
	}

	if (active_brand_color) {
		$brand_variants.find("option." + active_brand_color).prop("selected", true);
		$brand_variants
			.removeClass()
			.addClass("custom-select mb-3 text-light border-0 ")
			.addClass(active_brand_color);
	}
})(jQuery);
