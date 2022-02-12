<?= $this->extend('admin/template') ?>

<?= $this->section('konten'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid px-lg-4">
            <div class="row">
              <div class="col-md-12 mt-lg-4 mt-4">
              <!-- Page Heading -->
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    
              </div>
    
              
              </div>
          
            
         
    </div>
    
    
         
                        <!-- column -->
                        <div class="col-md-12 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <!-- title -->
                                    <div class="d-md-flex align-items-center">
                                        <div>
                                            <h4 class="card-title">Top Selling Products</h4>
                                            <h5 class="card-subtitle">Overview of Top Selling Items</h5>
                                        </div>
                                    </div>
                                    <!-- title -->
                                </div>
                                <div class="table-responsive">
                                    <table id="account" class="table table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>NIM/NDN</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>Level</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach($account as $a):
                                            ?>
                                            <tr>
                                                <td><?= $a['id_account'];?></td>
                                                <td><?= $a['name'];?></td>
                                                <td><?= $a['email'];?></td>
                                                <td><?= $a['contact'];?></td>
                                                <td><?= $a['level'];?></td>
                                                <td><a href="#">Edit</a></td>
                                                <td><a href="#">Delete</a></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
    
            </div>
    
            </div>
            <!-- /.container-fluid -->
    
          </div>
<?= $this->endSection();?>