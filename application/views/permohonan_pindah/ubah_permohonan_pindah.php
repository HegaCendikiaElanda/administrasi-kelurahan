<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Ubah Permohonan Pindah</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">Data Permohonan Pindah</li>
                <li class="breadcrumb-item active">Ubah Permohonan Pindah</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-file mr-1"></i>
                    Ubah Permohonan Pindah
                </div>
                <div class="card-body">
                    <!-- <form action=""> -->
                        <?php echo form_open("permohonan_pindah/ubah/".$permohonan_pindah->id_ppindah); ?>
                        <?= $this->session->flashdata('pesan') ;?>
                        <div class="form-group">
                            <label for="input_nik">NIK Pemohon pindah</label>
                            <input type="text" class="form-control" placeholder="Isi dengan NIK pemohon" placeholder="Isi dengan nomor induk kependudukan" name="input_nik" value="<?php echo set_value('input_nik',$permohonan_pindah->nik); ?>">
                            <?= form_error('input_nik','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="input_tanggal">Tanggal Pengajuan</label>
                            <input type="date" class="form-control" name="input_tanggal" value="<?php echo set_value('input_tanggal',$permohonan_pindah->tanggal); ?>">
                            <?= form_error('input_tanggal','<small class="text-danger pl-3">','</small>');?>
                        </div>
						<div class="form-group">
                            <label for="nama">lokasi pindah</label>
                            <input type="text" class="form-control" placeholder="Isi dengan lokasi pindah Anda" name="input_lokasi_pindah" value="<?php echo set_value('input_lokasi_pindah', $permohonan_pindah->lokasi_pindah); ?>">
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