<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $tittle; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css\style.css" rel="stylesheet">
</head>

<body id="bodyLogin">
    <!-- Register section -->
    <div class="container1" id="container">
        <div class="form-container sign-up">
            <form action="#" method="post">
                <h1>Register</h1>
                <span>Gunakan Email Aktif Untuk Registrasi</span>
                <input type="text" placeholder="Nama" name="nama" />
                <input type="text" placeholder="Username" name="username" />
                <input type="email" placeholder="contoh@gmail.com" name="email" />
                <input type="password" placeholder="Password" name="password" />
                <button>Sign Up</button>
            </form>
        </div>



        <!-- login sec -->
        <div class="form-container sign-in">
            <form action="/main">
                <h1>Log In In</h1>
                <span>Gunakan Email dan Password yang telah terdaftar</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <a href="#">Lupa Password?</a>
                <button>Log In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Selamat Datang Kembali!</h1>
                    <p>Masukkan Informasi Personal Untuk login </p>
                    <button class="hidden" id="login">Log In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hallo!</h1>
                    <p>Isi dengan rincian pribadi Anda untuk meregistrasi</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="\js\script.js"></script>
</body>

</html>