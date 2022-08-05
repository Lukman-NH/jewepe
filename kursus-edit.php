<?php 
    include 'template/header.php';
?>

<!-- Begin Page Content -->     
<div class="container-fluid">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Form Edit Kursus</h4>
    </div>
        <div class="card-body">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Kursus</label>
                    <input type="text" class="form-control" name="nama" required="required" placeholder="Masukkn Nama .."
                    value="Bootstrap Beginner">
                </div>
                <div class="form-group">
                    <label>Keterangan Kursus</label>
                    <textarea name="keterangan" class="form-control textarea" required="required" style="resize: none" rows="10">Membuat dan Merancang aplikasi berbasis web menggunakan Bootstrap
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Durasi Lama Kursus</label>
                    <input type="text" class="form-control" name="harga" required="required" placeholder="Masukan Durasi Kursus .."
                    value="18 Jam">
                </div>
                <hr>
                <button type="submit" class="btn btn-primary btn-icon-split" name="submit">
                    <span class="text">Edit</span>
                </button>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>

<?php 
    include 'template/footer.php';
?>