<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Data Permohonan Domisili</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">Data Permohonan Domisili</li>
            </ol>
            <a href="<?php echo base_url('permohonan_domisili/tambah');?>" class="btn btn-info mb-4"> Tambah Data</a>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Data Permohonan Domisili
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No Surat</th>
                                    <th>Tanggal</th>
									<th>Tujuan</th>
									<th>Masa Berlaku</th>
                                    <th>NIK</th>
									<th>Nama Pemohon</th>
                                    <th>Nama Petugas</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($permohonan_domisili)){
                                    foreach($permohonan_domisili as $data){
                                    echo "<tr>
                                      <td>".$data->id_pdomisili."</td>
                                      <td>".$data->tanggal."</td>
                                      <td>".$data->tujuan."</td>
                                      <td>".$data->masa_berlaku."</td>
									  <td>".$data->nik."</td>
									  <td>".$data->nama_warga."</td>
                                      <td>".$data->nama_pegawai."</td>
                                      <td>
                                      <div class='btn-group'>
                                        <a type='button' class='btn btn-warning' href='".base_url("permohonan_domisili/ubah/".$data->id_pdomisili)."'>Ubah</a>
                                        <a type='button' class='btn btn-danger'href='".base_url("permohonan_domisili/hapus/".$data->id_pdomisili)."'>Hapus</a>
                                        
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