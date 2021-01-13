<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Tambah Warga</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">Data Warga</li>
                <li class="breadcrumb-item active">Tambah Warga</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-file mr-1"></i>
                    Tambah Warga
                </div>
                <div class="card-body">
                    <!-- <form action=""> -->
                        <?php echo form_open("warga/tambah"); ?>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Isi dengan nama lengkap Anda" name="input_nama" value="<?php echo set_value('input_nama'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nomor Induk Kependudukan</label>
                            <input type="text" placeholder="Isi dengan NIK Anda" class="form-control" name="input_nik" value="<?php echo set_value('input_nik'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <input type="text" class="form-control" placeholder="Isi dengan alamat Anda" name="input_alamat" value="<?php echo set_value('input_alamat'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Tempat Lahir</label>
                            <input type="text" class="form-control" placeholder="Isi dengan tempat lahir Anda" name="input_tempat_lahir" value="<?php echo set_value('input_tempat_lahir'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="input_tanggal_lahir" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('d-m-Y'); echo set_value('input_tanggal_lahir'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Pekerjaan</label>
                            <input type="text" class="form-control" placeholder="Isi dengan pekerjaan Anda" name="input_pekerjaan" value="<?php echo set_value('input_pekerjaan'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Pendidikan</label>
                            <input type="text" class="form-control" placeholder="Isi dengan pendidikan terakhir Anda" name="input_pendidikan" value="<?php echo set_value('input_pendidikan'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Agama</label>
                            <input type="text" class="form-control" placeholder="Isi dengan agama Anda" name="input_agama" value="<?php echo set_value('input_agama'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Status Perkawinan</label>
                            <input type="text" class="form-control" placeholder="Isi dengan status perkawinan Anda" name="input_status" value="<?php echo set_value('input_status'); ?>">
                        </div>
                        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                        <a href="<?php echo base_url('warga');?>"><input type="button" class="btn btn-secondary" value="Batal"></a>
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