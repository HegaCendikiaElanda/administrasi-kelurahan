<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Tambah Permohonan Pindah</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">Data Permohonan Pindah</li>
                <li class="breadcrumb-item active">Tambah Permohonan Pindah</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-file mr-1"></i>
                    Tambah Permohonan Pindah
                </div>
                <div class="card-body">
                    <!-- <form action=""> -->
                        <?php echo form_open("permohonan_pindah/tambah"); ?>
                        <?= $this->session->flashdata('pesan') ;?>
                        <div class="form-group">
                         <label for="input_nik">NIK Pemohon pindah</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Isi dengan NIK pemohon" placeholder="Isi dengan nomor induk kependudukan" name="input_nik" value="<?php echo set_value('input_nik'); ?>" required>
                          <!-- <div class="input-group-append">
                            <input type="submit" class="btn btn-info" name="cek_nik" value="Cek">
                          </div> -->
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Tanggal Pengajuan Pindah</label>
                            <input type="date" class="form-control" name="input_tanggal" value="<?php echo date('Y-m-d'); ?>" readonly>
                        </div>
						<div class="form-group">
                            <label for="nama">lokasi pindah</label>
                            <input type="text" class="form-control" placeholder="Isi dengan lokasi pindah" name="input_lokasi_pindah" value="<?php echo set_value('input_lokasi_pindah'); ?>">
                            <?= form_error('input_lokasi_pindah','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                        <a href="<?php echo base_url('permohonan_pindah');?>"><input type="button" class="btn btn-secondary" value="Batal"></a>
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