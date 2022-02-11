
<?= $this->extend('template/login') ?>

<?= $this->section('konten'); ?>
<div class="container">
    <div class="row">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="location-y panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="text-center panel-relative">Registration</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form action="<?= base_url('/register'); ?>" method="post">
						<?= csrf_field(); ?>
						<input type="hidden" name="level" value="<?= $level; ?>">
						<input type="hidden" name="picture" value="<?= $akun['picture']; ?>">
						<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" value="<?= $akun['email']; ?>" name="email" type="text" readonly>
			    		</div>
						<div class="form-group">
			    			<input class="form-control" placeholder="<?= ($level == 4) ? 'NIM' : 'NIDN';?>" name="id_account" type="text" required>
			    		</div>
              			<div class="form-group">
			    		    <input class="form-control" placeholder="Name <?= ($level == 4) ? '' : '& Title';?>" name="name" type="text" required>
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Contact" name="contact" type="text" <?= ($level == 4) ? 'required' : '';?>>
			    		</div>
			    		<div class="form-group">
							<label>Department</label>
							<select class="form-control" name="department">
							<?php foreach($dep as $p) : ?>
								<option value="<?= $p['id_departement']; ?>"><?= $p['departement']; ?></option>
							<?php endforeach; ?>
							</select>
			    		</div>
						<div class="form-group">
							<label>Concentration </label>
							<select class="form-control" name="concentration">
								<?php foreach($cons as $k) : ?>
								<option value="<?= $k['id_concentration'] ?>"><?= $k['concentration']; ?></option>
								<?php endforeach; ?>
							</select>
			    		</div>
						<div class="form-group">
			    			<input class="form-control" placeholder="Competence" name="competence" type="text" required>
			    		</div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Submit">
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection();?>