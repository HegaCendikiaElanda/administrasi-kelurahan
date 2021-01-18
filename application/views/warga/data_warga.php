<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Data Warga</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">Data Warga</li>
            </ol>
            <a href="<?php echo base_url('warga/tambah');?>" class="btn btn-info mb-4"> Tambah Data</a>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Data Warga
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Pekerjaan</th>
                                    <th>Pendidikan</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($warga)){
                                    foreach($warga as $data){
                                    echo "<tr>
                                      <td>".$data->nama."</td>
                                      <td>".$data->nik."</td>
                                      <td>".$data->tempat_lahir."</td>
                                      <td>".$data->tanggal_lahir."</td>
                                      <td>".$data->pekerjaan."</td>
                                      <td>".$data->pendidikan."</td>
                                      <td>".$data->status_perkawinan."</td>
                                      <td>
                                      <div class='btn-group'>
                                        <a type='button' class='btn btn-warning' href='".base_url("warga/ubah/".$data->id_warga)."'>Ubah</a>
                                        <a type='button' class='btn btn-danger'href='".base_url("warga/hapus/".$data->id_warga)."'>Hapus</a>
                                        
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