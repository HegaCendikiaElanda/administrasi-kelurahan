<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Data Permohonan Kartu Keluarga</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">Data Permohonan KK</li>
            </ol>
            <a href="<?php echo base_url('permohonan_kk/tambah');?>" class="btn btn-info mb-4"> Tambah Data</a>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Data Permohonan KK
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No. PKK</th>
                                    <th>Tanggal</th>
                                    <th>Nama Pemohon</th>
                                    <th>Nama Pegawai</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($permohonan_kk)){
                                    foreach($permohonan_kk as $data){
                                    echo "<tr>
                                      <td>".$data->no_pkk."</td>
                                      <td>".$data->tanggal."</td>
                                      <td>".$data->nama_warga."</td>
                                      <td>".$data->nama_pegawai."</td>
                                      <td>
                                      <div class='btn-group'>
                                        <a type='button' class='btn btn-warning' href='". base_url("permohonan_kk/ubah/".$data->no_pkk)."'>Ubah</a>
                                        <a type='button' class='btn btn-danger'href='".base_url("permohonan_kk/hapus/".$data->no_pkk)."'>Hapus</a>
                                      </div>
                                      </td>
                                    </tr>";
                                    }
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