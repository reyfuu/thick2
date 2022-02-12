
<?= $this->extend('mahasiswa/template') ?>

<?= $this->section('konten'); ?>

        <!-- Begin Page Content -->

            
         
    </div>
        <!-- register form -->
        <form method="post" action="<?= base_url('/mahasiswa/regis-project');  ?>">
           <div class="container">
               <div class="form-group">
               <h1 class="h3 mb-0 text-gray-800">Register Project</h1>
               </div>
           
                <div class="form-group ">
                <label>Name Project</label>
                <input type="text" name="name" class="form-control" placeholder="Name Project" required>
                </div>
                <div class="form-group ">
                <label>Supervisor</label>
                <select name="lecturer" class="form-control">
                    <?php foreach($lecturer as $l) : ?>
                        <option value="<?= $l['email'];?>"><?= $l['name'];?></option>
					<?php endforeach; ?>
                </select>
                </div>
           
           
                <div class="form-group">
                    <label>Project Type</label>
                    <select name="type" class="form-control">
                        <option value="Application">Application</option>
                        <option value="Journal">Journal </option>
                    </select>
                </div>
                <div class="form-group ">
                    <label for="inputEmail4">Head</label>
                    <?php
                        if($status){
                    ?>
                    <select name="head" class="form-control">
                    <option value="">Choose Member</option>
                        <?php foreach($student as $s) : 
                            if($s['email'] == $id) continue;     
                        ?>
                            <option value="<?= $s['email'];?>"><?= $s['name'];?></option>
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
                <div class="form-group">
                    <label for="date">Deadline</label>
                    <input type="datetime" name="date" id="date">
                </div>
       
       
                <div class="form-group ">
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
                                if($s['email'] == $id) continue;     
                        ?>
                            <option value="<?= $s['email'];?>"><?= $s['name'];?></option>
                        <?php endforeach; ?>
                            </select>
                    <?php
                        }
                    ?>
                </div>
                <div class="form-group ">
                    <label for="inputEmail4">Member 2</label>
                    <select name="member2" class="form-control">
                    <option value="">Choose Member</option>
                        <?php foreach($student as $s) : 
                            if($s['email'] == $id) continue;     
                        ?>
                            <option value="<?= $s['email'];?>"><?= $s['name'];?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
 
        </form>
        
            
    
          
            <!-- /.container-fluid -->
    

<?= $this->endSection();?>