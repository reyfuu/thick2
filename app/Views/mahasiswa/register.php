<?= $this->extend('mahasiswa/template') ?>

<?= $this->section('konten'); ?>

<!-- column -->
        <form action="" method="post">
            <div class="panel-body">
                <label for="Nama">Nama Proyek</label>
                <input type="text" name="namep" id="Nama" require><br>
            

                <label for="Tipe">Tipe Proyek</label>
                <input type="text" name="tipe" id="Tipe" require><br>

            

                <label for="date">Deadline</label>
                <input type="date" name="date" id="date" require><br>    
            </div>

            <button type="submit">Register Project</button>
        </form>

<?= $this->endSection();?> 