
<?= $this->extend('admin/template') ?>

<?= $this->section('konten'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid px-lg-4">
            <div class="row">
              <div class="col-md-12 mt-lg-4 mt-4">
              <!-- Page Heading -->
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Prodi</h1>
    
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
                                            <h4 class="card-title">Pendaftaran Prodi</h4>
                                            <form>
                                                <div class="form-inline form-group">
                                                    <label>Nama Prodi &nbsp;</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- title -->
                                </div>
                                <div class="table-responsive">
                                    <table class="table v-middle">
                                        <thead>
                                            <tr class="bg-light">
                                                <th class="border-top-0">Prodi</th>
                                                <th class="border-top-0">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <h4 class="m-b-0 font-16">Nama Prodi</h4>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>

                                                    <a href="#" class="btn btn-primary">Edit</a>
                                                    <a href="#"  class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
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