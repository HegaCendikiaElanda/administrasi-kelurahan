<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Data Permohonan KTP</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">Data Permohonan KTP</li>
            </ol>
            <a href="<?php echo base_url('permohonan_ktp/tambah');?>" class="btn btn-info mb-4"> Tambah Data</a>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Data Permohonan KTP
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No Permohonan KTP</th>
                                    <th>Tanggal</th>
                                    <th>NIK</th>
                                    <th>Nama Pemohon</th>
                                    <th>Nama Petugas</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($permohonan_ktp)){
                                    foreach($permohonan_ktp as $data){
                                    echo "<tr>
                                      <td>".$data->no_pktp."</td>
                                      <td>".$data->tanggal."</td>
                                      <td>".$data->nik."</td>
                                      <td>".$data->nama_warga."</td>
                                      <td>".$data->nama_pegawai."</td>
                                      <td>
                                      <div class='btn-group'>
                                        <a type='button' class='btn btn-warning' href='".base_url("permohonan_ktp/ubah/".$data->no_pktp)."'>Ubah</a>
                                        <a type='button' class='btn btn-danger'href='".base_url("permohonan_ktp/hapus/".$data->no_pktp)."'>Hapus</a>
                                        
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
<!--cek--!>
