<?php 
    include 'template/header.php';
?>

<!-- Begin Page Content -->     
<div class="container-fluid">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Form Tambah Kursus</h4>
    </div>
        <div class="card-body">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Kursus</label>
                    <input type="text" class="form-control" name="nama" required="required" placeholder="Masukkn Nama ..">
                </div>
                <div class="form-group">
                    <label>Keterangan Kursus</label>
                    <textarea name="keterangan" class="form-control textarea" required="required" style="resize: none" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label>Durasi Lama Kursus</label>
                    <input type="text" class="form-control" name="harga" required="required" placeholder="Masukan Durasi Kursus ..">
                </div>
                <hr>
                <button type="submit" class="btn btn-primary btn-icon-split" name="submit">
                    <span class="text">Tambah</span>
                </button>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>

<?php 
    include 'template/footer.php';
?>