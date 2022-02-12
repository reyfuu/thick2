<?= $this->extend('mahasiswa/template') ?>

<?= $this->section('konten'); ?>

<!-- column -->
<div class="container">


        <form action="" method="post">
        <div class="form-group">
               <h1 class="h3 mb-0 text-gray-800">Process Project</h1>
               </div>
               <div class="form-group">
                    <label for="date">Deadline</label>
                    <input type="date" name="date" id="date" class="form-control" required>
                </div>
                <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" placeholder="title" required>
                </div>
                <div class="form-group">
                <label>Description</label>
                <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>
                </div>
            <button type="submit" class="btn btn-primary">Register Project</button>
        </form>
</div>
<?= $this->endSection();?> 