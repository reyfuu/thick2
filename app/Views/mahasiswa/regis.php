<?= $this->extend('mahasiswa/template') ?>

<?= $this->section('konten'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid px-lg-4">
            <div class="row">
              <div class="col-md-12 mt-lg-4 mt-4">
              <!-- Page Heading -->
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Register Project</h1>
    
              </div>
    
              
              </div>
          
            
         
    </div>
        <!-- register form -->
        <form method="post" action="<?= base_url('/mahasiswa/regis-project');  ?>">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label>Name Project</label>
                <input type="name" class="form-control" placeholder="Name Project" required>
                </div>
                <div class="form-group col-md-6">
                <label>Supervisor</label>
                <select name="lecturer" class="form-control">
                    <?php foreach($lecturer as $l) : ?>
                        <option value="<?= $l['id_account'];?>"><?= $l['name'];?></option>
					<?php endforeach; ?>
                </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Project Type</label>
                    <select name="type" class="form-control">
                        <option value="Application">Application</option>
                        <option value="Journal">Journal </option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Head</label>
                    <?php
                        if($status){
                    ?>
                    <select name="head" class="form-control">
                    <option value="">Choose Member</option>
                        <?php foreach($student as $s) : 
                            if($s['id_account'] == $id) continue;     
                        ?>
                            <option value="<?= $s['id_account'];?>"><?= $s['name'];?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php
                        }else{

                    ?>
                    <input type="head-view" class="form-control" placeholder="Head Project" readonly value="<?= $name; ?>">
                    <input type="hidden" name="head" class="form-control" placeholder="Head Project" value="<?= $id; ?>">
                    <?php
                        }
                    ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Member 1</label>
                    <?php
                        if($status){
                    ?>
                    <input type="head-view" class="form-control" placeholder="Head Project" readonly value="<?= $name; ?>">
                    <input type="hidden" name="member1" class="form-control" placeholder="Head Project" value="<?= $id; ?>">
                    <?php
                        }else{
                    ?>
                        <select name="member1" class="form-control">
                        <option value="">Choose Member</option>
                        <?php foreach($student as $s) : 
                                if($s['id_account'] == $id) continue;     
                        ?>
                            <option value="<?= $s['id_account'];?>"><?= $s['name'];?></option>
                        <?php endforeach; ?>
                            </select>
                    <?php
                        }
                    ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Member 2</label>
                    <select name="member2" class="form-control">
                    <option value="">Choose Member</option>
                        <?php foreach($student as $s) : 
                            if($s['id_account'] == $id) continue;     
                        ?>
                            <option value="<?= $s['id_account'];?>"><?= $s['name'];?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    
            </div>
    
            </div>
            <!-- /.container-fluid -->
    
          </div>
<?= $this->endSection();?>