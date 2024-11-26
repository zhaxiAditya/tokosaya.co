<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('/css/style.css');?>">

</head>
<body>
    <nav>
        <div class="icon"><a href="<?= base_url('/');?>">Tokosaya<sup>Co</sup></a></div>
        <!--<ul>
            <li>Home</li>
            <li>Home</li>
            <li>Home</li>
        </ul>-->
    </nav>
    <section>
        <form action="">
            <img src="<?= base_url('/assets/logos.jpg');?>" alt="">
            <p>Mepermudah Kelola Toko anda</p>
            <input type="text" placeholder="Email Adress">
            <input type="password" placeholder="Password">
            <button>Register</button>
            <p>Sudah Memilik akun? <a href="<?= base_url('/login');?>">Login</a></p>
        </form>
    </section>
</body>
</html>