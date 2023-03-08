<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <title>Login Siswa - Aplikasi Pembayaran SPP</title>
</head>
<body>
    <section>
        <div class="form-box">
           <div class="form-value">
            <form action="proses-login-siswa.php" method="post">
                <h2>LOGIN SISWA</h2>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="nisn" name="nisn"required>
                    <label for="">Nisn</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="nis" name="nis" required>
                    <label for="">Nis</label>
                </div>
                <div class="form-group mb-2">
                    <button type="submit" class="btn btn-danger"> LOGIN </button>
                </div>
                <a href="index2.php"> Login Sebagai Admin/Petugas </a>
                </div>
            </form>
           </div> 
        </div>
    </section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>