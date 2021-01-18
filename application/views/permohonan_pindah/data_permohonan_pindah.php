<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Data Permohonan Pindah</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">Data Permohonan Pindah</li>
            </ol>
            <a href="<?php echo base_url('permohonan_pindah/tambah');?>" class="btn btn-info mb-4"> Tambah Data</a>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Data Permohonan Pindah
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nomor Surat</th>
                                    <th>Tanggal</th>
                                    <th>Lokasi Pindah</th>
                                    <th>NIK</th>
                                    <th>Nama Pemohon</th>
                                    <th>Nama Pegawai</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($permohonan_pindah)){
                                    foreach($permohonan_pindah as $data){
                                    echo "<tr>
                                      <td>".$data->id_ppindah."</td>
                                      <td>".$data->tanggal."</td>
                                      <td>".$data->lokasi_pindah."</td>
                                      <td>".$data->nik."</td>
                                      <td>".$data->nama_warga."</td>
                                      <td>".$data->nama_pegawai."</td>
                                      <td>
                                      <div class='btn-group'>
                                        <a type='button' class='btn btn-primary'href='".base_url("permohonan_pindah/detail/".$data->id_ppindah)."'>Detail</a>
                                        <a type='button' class='btn btn-warning' href='".base_url("permohonan_pindah/ubah/".$data->id_ppindah)."'>Ubah</a>
                                        <a type='button' class='btn btn-danger'href='".base_url("permohonan_pindah/hapus/".$data->id_ppindah)."'>Hapus</a>
                                      </div>
                                        
                                      </td>
                                    </tr>";
                                    }
                                }else{
                                    echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Administrasi Kelurahan 2021</div>
            </div>
        </div>
    </footer>
</div>