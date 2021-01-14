<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Data Pegawai</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">Data Pegawai</li>
            </ol>
            <a href="<?php echo base_url('pegawai/tambah');?>" class="btn btn-info mb-4"> Tambah Data</a>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Data Pegawai
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>No Hp</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($pegawai)){
                                    foreach($pegawai as $data){
                                    echo "<tr>
                                      <td>".$data->nama."</td>
                                      <td>".$data->nip."</td>
                                      <td>".$data->no_hp."</td>
                                      <td>".$data->email."</td>
                                      <td>
                                      <div class='btn-group'>
                                        <a type='button' class='btn btn-warning' href='".base_url("pegawai/ubah/".$data->id_pegawai)."'>Ubah</a>
                                        <a type='button' class='btn btn-danger'href='".base_url("pegawai/hapus/".$data->id_pegawai)."'>Hapus</a>
                                        
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