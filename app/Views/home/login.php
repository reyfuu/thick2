
<?= $this->extend('template/login') ?>

<?= $this->section('konten'); ?>
<div class="container">
    <div class="row">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-body">
			    		<a class="btn btn-lg " href="<?= $google; ?>"><img src="<?= base_url('/asset/img/google.png'); ?>"  alt="google" width="300px" ></a>
			    </div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection();?>