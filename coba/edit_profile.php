<form method="post" action="../coba/proses_edit_profile.php" enctype="multipart/form-data">

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" value="<?= $_SESSION['Login_user'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" value="<?= $_SESSION['pass'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Foto Profile</label>
        <input type="file" name="fileFoto" class="form-control">
    </div>
    <div class="text-end">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>

</form>