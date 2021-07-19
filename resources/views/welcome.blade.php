@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>

    <div class="section-body">
      <div class="col-12">
        <div class="card">
            
            <div class="card-header">
                Masukkan NIK Guru
                
            </div>
            <div class="card-body">
                <div class="input-group">
                  <input id="search-nik" type="text" class="form-control" placeholder="Search">
                  <div class="input-group-btn">
                    <button id="btn-search-nik" class="btn btn-primary"><i class="fas fa-search"></i></button>
                  </div>
                </div>
            </div>
        </div>  
        <div class="card">
          <div class="card-header">
                    <h4>Data Guru Berdasarkan NIK</h4>
                    <div class="card-header-form">
                      {{-- <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form> --}}
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tbody>
                        <tr>
                          <th>Nama Kolom</th>
                          <th>Nilai</th>
                        </tr>
                        <tr>
                          <td>Id Dapodik</td>
                          <td class="align-middle" id="id-dapodik"></td>
                        </tr>
                        <tr>
                            
                            <td>Id formasi</td>
                            <td id="id-formasi"></td>
                        </tr>
                        <tr>
                            
                            <td>Jabatan</td>
                            <td id="jabatan"></td>
                        </tr>
                        <tr>
                            
                            <td>Jabatan Guru</td>
                            <td id="jabatan-guru"></td>
                        </tr>
                        <tr>
                            
                            <td>Jenjang</td>
                            <td id="jenjang"></td>
                        </tr>
                        <tr>
                            <td>Keterangan tagging</td>
                            <td id="ket-tagging"></td>
                        </tr>
                        <tr>
                            
                            <td>Kode Bidang Studi Sertifikasi 1</td>
                            <td id="kode-sertif1"></td>
                        </tr>
                        <tr>
                            
                            <td>Kode Bidang Studi Sertifikasi 2</td>
                            <td id="kode-sertif2"></td>
                        </tr>
                        <tr>
                            
                            <td>Kode Instansi</td>
                            <td id="kode-instansi"></td>
                        </tr>
                        <tr>
                            
                            <td>Kode Prodi</td>
                            <td id="kode-prodi"></td>
                        </tr>
                        <tr>
                            
                            <td>Nama Dapodik</td>
                            <td id="nama-dapodik"></td>
                        </tr>
                        <tr>
                            
                            <td>Nama Instansi</td>
                            <td id="nama-instansi"></td>
                        </tr>
                        <tr>
                            
                            <td>Nama Sekolah</td>
                            <td id="nama-sekolah"></td>
                        </tr>
                        <tr>
                            
                            <td>NIK</td>
                            <td id="nik-guru"></td>
                        </tr>
                        <tr>
                            
                            <td>No KK</td>
                            <td id="no-kk"></td>
                        </tr>
                        <tr>
                            <td>No. Peserta UKG</td>
                            <td id="nopes-ukg"></td>
                        </tr>
                        <tr>
                            <td>NPSN</td>
                            <td id="npsn"></td>
                        </tr>
                        <tr>
                            <td>NRG</td>
                            <td id="nrg"></td>
                        </tr>
                        <tr>
                            <td>NUPTK</td>
                            <td id="nuptk"></td>
                        </tr>
                        <tr>
                            <td>Prodi</td>
                            <td id="nama-prodi"></td>
                        </tr>
                        <tr>
                            <td>Status Aktif 3 Tahun terakhir</td>
                            <td id="status-aktif"></td>
                        </tr>
                        <tr>
                            <td>Status Sekolah</td>
                            <td id="status-sekolah"></td>
                        </tr>
                        <tr>
                            <td>Tagging</td>
                            <td id="tagging"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir Dapodik</td>
                            <td id="tgl-lahir-dapodik"></td>
                        </tr>
                      </tbody></table>
                    </div>
                  </div>      
        </div>

        <div class="card">
          <div class="card-header">
                    <h4>Jabatan yang Sesuai</h4>
                    <div class="card-header-form">
                      <div>
                        <div class="input-group">
                          <input id="search-jabatan" type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button id="btn-search-jabatan" class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Id Jabatan</th>
                            <th>Id Jabatan Menpan</th>
                            <th>Jabatan</th>
                            <th>Jabatan Menpan</th>
                          </tr>
                        </thead>
                        <tbody id="list-jabatan">
                         
                        </tbody>
                      </table>

                    </div>
                  </div>      
        </div>

        <div class="card">
          <div class="card-header">
                    <h4>Formasi yang Tersedia di Instansi Terkait</h4>
                    <div class="card-header-form">
                      <div>
                        <div class="input-group">
                          <input id="search-formasi" type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button id="btn-search-formasi" class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Id Instansi</th>
                            <th>Id Jabatan</th>
                            <th>Jabatan</th>
                            <th>Jenjang</th>
                            <th>Jumlah Terkunci</th>
                            <th>Nama Sekolah</th>
                            <th>NPSN</th>
                            <th>Penetapan Menpan</th>
                            <th>Sisa Kuota</th>
                          </tr>
                        </thead>
                        <tbody id="list-formasi">
                        
                        </tbody>
                      </table>
                    </div>
                  </div>      
        </div>

        
      </div>

    </div>
  </section>
@endsection

@section('javascript')
  <script type="text/javascript">
    // mencari data berdasarkan nik guru
    $('#btn-search-nik').click( function(){
      var nik = $('#search-nik').val();
      var data = "nik_siak="+nik;

      // data guru berdasarkan nik
      $.ajax({
        url: "http://118.98.166.67/api/refopen/bkn_sscn_v3?"+data,
        type: "GET",
        dataType:"json",
        success: function (data) {
          if( data.length == 0 ){
            alert('Maaf... Data tidak ditemukan')
          }
          else{
            $('#id-dapodik').text(data[0].id_dapodik);
            $('#id-formasi').text(data[0].id_formasi);
            $('#jabatan').text(data[0].jabatan);
            $('#jabatan-guru').text(data[0].jabatan_guru);
            $('#jenjang').text(data[0].jenjang);
            $('#ket-tagging').text(data[0].keterangan_tagging);
            $('#jenjang').text(data[0].jenjang);
            $('#kode-sertif1').text(data[0].kode_bidang_studi_sertifikasi);
            $('#kode-sertif2').text(data[0].kode_bidang_studi_sertifikasi_2);
            $('#kode-instansi').text(data[0].kode_instansi);
            $('#kode-prodi').text(data[0].kode_prodi);
            $('#nama-dapodik').text(data[0].nama_dapodik);
            $('#nama-instansi').text(data[0].nama_instansi);
            $('#nama-sekolah').text(data[0].nama_sekolah);
            $('#nik-guru').text(data[0].nik_);
            $('#no-kk').text(data[0].no_kk);
            $('#nopes-ukg').text(data[0].nopes_ukg);
            $('#npsn').text(data[0].npsn);
            $('#nrg').text(data[0].nrg);
            $('#nuptk').text(data[0].nuptk);
            $('#nama-prodi').text(data[0].prodi);
            $('#status-aktif').text(data[0].status_aktif_3_tahun_terakhir);
            $('#status-sekolah').text(data[0].status_sekolah);
            $('#tagging').text(data[0].tagging);
            $('#tgl-lahir-dapodik').text(data[0].tanggal_lahir_dapodik);

            if( data[0].kode_prodi != null && data[0].kode_instansi != null ){
              var data_jabatan = 
                "kodeProdi="+ data[0].kode_prodi +
                "&kodeInstansi=" + data[0].kode_instansi +
                "&kodeSertif=null" ;

              // data jabatan
              $.ajax({
                url: "http://118.98.166.67/api/ref/bkn_sscn_Formasi_jabatan?"+data_jabatan,
                type: "GET",
                dataType:"json",
                success: function (dataJabatan) {
                  var element_jabatan = '';
                  dataIdJabatanMenpan = [];

                  for (i = 0 ; i < dataJabatan.length ; i++) {
                    if( dataJabatan[i].id_jabatan_menpan != null ){
                      dataIdJabatanMenpan.push(dataJabatan[i].id_jabatan_menpan);
                    }

                    element_jabatan +=
                      '<tr>' +
                          '<td>'+ dataJabatan[i].id_jabatan_menpan +'</td>'+
                          '<td>'+ dataJabatan[i].id_jabatan +'</td>' +
                          '<td>'+ dataJabatan[i].jabatan +'</td>' +
                          '<td>'+ dataJabatan[i].jabatan_menpan +'</td>' +
                        '</tr>' ;
                  }

                  $('#list-jabatan').html(element_jabatan);

                  for (j = 0 ; j < dataIdJabatanMenpan.length ; j++) {
                    var dataFormasi = 
                      "kodeProdi="+ data[0].kode_prodi +
                      "&kodeInstansi=" + data[0].kode_instansi +
                      "&idJabatanMenpan=" + dataIdJabatanMenpan[j] +
                      "&kodeSertif=null" ;

                    // data formasi
                    $.ajax({
                      url: "http://118.98.166.67/api/ref/bkn_sscn_FormasiPer_prodiInstansi?"+dataFormasi,
                      type: "GET",
                      dataType:"json",
                      success: function (dataFormasi) {
                        var element_formasi = $('#list-formasi').html();

                        for (k = 0 ; k < dataFormasi.length ; k++) {
                          element_formasi +=
                            '<tr>' +
                                '<td>'+ dataFormasi[k].id_ +'</td>'+
                                '<td>'+ dataFormasi[k].id_instance +'</td>' +
                                '<td>'+ dataFormasi[k].id_jabatan +'</td>' +
                                '<td>'+ dataFormasi[k].jabatan +'</td>' +
                                '<td>'+ dataFormasi[k].jenjang +'</td>' +
                                '<td>'+ dataFormasi[k].jml_terkunci +'</td>' +
                                '<td>'+ dataFormasi[k].nama +'</td>' +
                                '<td>'+ dataFormasi[k].npsn +'</td>' +
                                '<td>'+ dataFormasi[k].penetapan_menpan +'</td>' +
                                '<td>'+ dataFormasi[k].sisa_kuota +'</td>' +
                              '</tr>' ;
                        }

                        $('#list-formasi').html(element_formasi);

                      },
                      error: function (dataFormasi) {
                        console.log(dataFormasi);
                      }
                    });
                  }

                },
                error: function (dataJabatan) {
                    console.log(dataJabatan);
                }
              });
            }
          }
        },
        error: function (data) {
            console.log(data);
        }
      });

    });

    // cari jabatan
    $('#btn-search-jabatan').click( function(){
      var key_jabatan = $('#search-jabatan').val();
      search("list-jabatan", key_jabatan);
    });

    // cari formasi
    $('#btn-search-formasi').click( function(){
      var key_formasi = $('#search-formasi').val();
      search("list-formasi", key_formasi);
    });

    function search(nama_tabel, input){
      var filter, tr, td, i, txtValue;
      filter  = input.toUpperCase();
      table   = document.getElementById(nama_tabel);
      tr    = table.getElementsByTagName("tr");
      col   = table.getElementsByTagName("td");

      for (i = 0; i < tr.length; i++) {
        for (j = 0; j < col.length; j++) {
          td = tr[i].getElementsByTagName("td")[j];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
              break;
            } else {
              tr[i].style.display = "none";
            }
          }   
        }  
      }
    }

  </script>
@endsection

