<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Tambah Permohonan KTP</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">Data Permohonan KTP</li>
                <li class="breadcrumb-item active">Tambah Permohonan KTP</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-file mr-1"></i>
                    Tambah Permohonan KTP
                </div>
                <div class="card-body">
                    <!-- <form action=""> -->
                        <?php echo form_open("permohonan_ktp/tambah"); ?>
                        <?= $this->session->flashdata('pesan') ;?>
                        <div class="form-group">
                        <label for="input_nik">NIK Pemohon KTP</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Isi dengan NIK pemohon" placeholder="Isi dengan nomor induk kependudukan" name="input_nik" value="<?php echo set_value('input_nik'); ?>" required>
                          <!-- <div class="input-group-append">
                            <input type="submit" class="btn btn-info" name="cek_nik" value="Cek">
                          </div> -->
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Tanggal Pengajuan</label>
                            <input type="date" class="form-control" name="input_tanggal" value="<?php echo date('Y-m-d'); ?>" readonly>
                        </div>
                        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                        <a href="<?php echo base_url('permohonan_ktp');?>"><input type="button" class="btn btn-secondary" value="Batal"></a>
                    <?php echo form_close(); ?>
                    <!-- </form> -->
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