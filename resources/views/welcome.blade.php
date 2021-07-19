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
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                </div>
            </div>
        </div>  
        <div class="card">
          <div class="card-header">
                    <h4>Data Guru Berdasarkan NIK</h4>
                    <div class="card-header-form">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
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
                          <td class="align-middle">
                            Value ID Dapodik
                          </td>
                        </tr>
                        <tr>
                            
                            <td>Id formasi</td>
                            <td></td>
                        </tr>
                        <tr>
                            
                            <td>Jabatan</td>
                            <td></td>
                        </tr>
                        <tr>
                            
                            <td>Jabatan Guru</td>
                            <td></td>
                        </tr>
                        <tr>
                            
                            <td>Jenjang</td>
                            <td></td>
                        </tr>
                        <tr>
                            
                            <td>Keterangan tagging</td>
                            <td></td>
                        </tr>
                        <tr>
                            
                            <td>Kode Bidang Studi Sertifikasi 1</td>
                            <td></td>
                        </tr>
                        <tr>
                            
                            <td>Kode Bidang Studi Sertifikasi 2</td>
                            <td></td>
                        </tr>
                        <tr>
                            
                            <td>Kode Instansi</td>
                            <td></td>
                        </tr>
                        <tr>
                            
                            <td>Kode Prodi</td>
                            <td></td>
                        </tr>
                        <tr>
                            
                            <td>Nama Dapodik</td>
                            <td></td>
                        </tr>
                        <tr>
                            
                            <td>Nama Instansi</td>
                            <td></td>
                        </tr>
                        <tr>
                            
                            <td>Nama Sekolah</td>
                            <td></td>
                        </tr>
                        <tr>
                            
                            <td>NIK</td>
                            <td></td>
                        </tr>
                        <tr>
                            
                            <td>No KK</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>No. Peserta UKG</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>NPSN</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>NRG</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>NUPTK</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Prodi</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Status Aktif 3 Tahun terakhir</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Status Sekolah</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tagging</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir Dapodik</td>
                            <td></td>
                        </tr>
                      </tbody></table>
                    </div>
                  </div>      
        </div>

        <div class="card">
          <div class="card-header">
                    <h4>Jabatan yang Sesuai</h4>
                    <div class="card-header-form">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
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
                          <td>Id Jabatan</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Id Jabatan Menpan</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Jabatan</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Jabatan Menpan</td>
                          <td></td>
                        </tr>
                        
                      </tbody></table>
                    </div>
                  </div>      
        </div>

        <div class="card">
          <div class="card-header">
                    <h4>Formasi yang Tersedia di Instansi Terkait</h4>
                    <div class="card-header-form">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
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
                          <td>Id</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Id instansi</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Id Jabatan</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Jabatan</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Jenjang</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Jumlah Terkunci</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Nama Sekolah</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>NPSN</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Penetapan Menpan</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Sisa Kuota</td>
                          <td></td>
                        </tr>
                      </tbody></table>
                    </div>
                  </div>      
        </div>

        
      </div>

    </div>
  </section>
@endsection

