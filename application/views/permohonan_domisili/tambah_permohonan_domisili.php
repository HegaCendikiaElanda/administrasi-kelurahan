<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Tambah Permohonan Domisili</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">Data Permohonan Domisili</li>
                <li class="breadcrumb-item active">Tambah Permohonan Domisili</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-file mr-1"></i>
                    Tambah Permohonan Domisili
                </div>
                <div class="card-body">
                    <!-- <form action=""> -->
                        <?php echo form_open("permohonan_domisili/tambah"); ?>
                        <?= $this->session->flashdata('pesan') ;?>
                        <div class="form-group">
                        <label for="input_nik">NIK Pemohon Domisili</label>
                          <input type="text" class="form-control" placeholder="Isi dengan NIK pemohon" name="input_nik" value="<?php echo set_value('input_nik'); ?>">
                          <?= form_error('input_nik','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Tujuan</label>
                            <input type="text" class="form-control" name="input_tujuan" placeholder="Isi dengan tujuan membuat surat domisili" value="<?php echo set_value('input_tujuan');?>">
                            <?= form_error('input_tujuan','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Tanggal Pengajuan</label>
                            <input type="date" class="form-control" name="input_tanggal" value="<?php echo date('Y-m-d'); ?>" readonly>
                            <?= form_error('input_tanggal','<small class="text-danger pl-3">','</small>');?>
                        </div>

						<div class="form-group">
							<label for="nama">Masa Berlaku</label>
							<input type="date" class="form-control" name="input_masa_berlaku" value="<?php echo date('Y-m-d', strtotime(' + 30 days')); ?>" readonly>
                            <?= form_error('input_masa_berlaku','<small class="text-danger pl-3">','</small>');?>
						</div>
                        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                        <a href="<?php echo base_url('permohonan_domisili');?>"><input type="button" class="btn btn-secondary" value="Batal"></a>
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