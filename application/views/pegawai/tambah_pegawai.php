<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Tambah Pegawai</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">Data Pegawai</li>
                <li class="breadcrumb-item active">Tambah Pegawai</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-file mr-1"></i>
                    Tambah Pegawai
                </div>
                <div class="card-body">
                    <div style="color: red;"><?php echo "<h4>".validation_errors()."</h4>";?></div>
                    <?php echo form_open("pegawai/tambah"); ?>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Isi dengan nama lengkap" name="input_nama" value="<?php echo set_value('input_nama'); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nomor Induk Pegawai</label>
                        <input type="text" placeholder="Isi dengan NIP" class="form-control" name="input_nip" value="<?php echo set_value('input_nip'); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Username</label>
                        <input type="text" class="form-control" placeholder="Isi dengan username" name="input_username" value="<?php echo set_value('input_username'); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Password</label>
                        <input type="password" class="form-control" placeholder="Isi dengan password" name="input_password" value="<?php echo set_value('input_password'); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nomor Handphone</label>
                        <input type="text" class="form-control" placeholder="Isi dengan nomor handphone yang masih aktif" name="input_no_hp" value="<?php echo set_value('input_no_hp'); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">E-Mail</label>
                        <input type="email" class="form-control" placeholder="Isi dengan e-mail yang dapat dihubungi" name="input_email" value="<?php echo set_value('input_email'); ?>" required>
                    </div>
                    <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                    <a href="<?php echo base_url('warga');?>"><input type="button" class="btn btn-secondary" value="Batal"></a>
                    <?php echo form_close(); ?>
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