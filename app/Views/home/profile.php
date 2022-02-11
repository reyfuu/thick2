
<?= $this->extend('template/profile') ?>

<?= $this->section('konten'); ?>
<div class="container d-flex justify-content-center">
    <div class="card p-3 py-4">
        <div class="text-center"> <img src="<?= $akun['gambar']; ?>" width="100" class="rounded-circle">
            <h3 class="mt-2"><?= $akun['nama']; ?></h3> <span class="mt-1 clearfix"><?= $level;?></span>
            <div class="row mt-3 mb-3">
                <div class="col-md-12">
                    <h5>Berhasi Login</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection();?>