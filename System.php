<?php
// Data pribadi
$nama     = "Nama Kamu";
$nim      = "123456789";
$fakultas = "Fakultas Ilmu Komputer";
$prodi    = "Informatika";

// Sosial media (kalau belum punya Github, bisa dikosongin atau nanti update)
$sosmed = [
    "Instagram" => "https://instagram.com/affmns_",
    "LinkedIn"  => "https://linkedin.com/in/username",
    "Facebook"  => "https://facebook.com/username",
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Personal Web - <?php echo $nama; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: #f0f2f5;
            margin: 0;
            padding: 0;
        }
        .container {
            margin-top: 50px;
        }
        /* Foto profil */
        .profile-pic {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            border: 4px solid #333;
            background-image: url('Affan.jpg'); /* ganti dengan nama file fotomu */
            background-size: cover;
            background-position: center;
            margin: auto;
        }
        /* Info pribadi */
        .info {
            margin-top: 20px;
            font-size: 18px;
        }
        .info p {
            margin: 5px 0;
        }
        /* Sosial media */
        .social-icons {
            margin-top: 25px;
        }
        .social-icons a {
            margin: 0 12px;
            padding: 10px 15px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 8px;
            color: white;
            background: #333;
            transition: 0.3s;
        }
        .social-icons a:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Foto Profil -->
        <div class="profile-pic"></div>

        <!-- Informasi -->
        <div class="info">
            <?php 
                echo "<p><b>$nama</b></p>";
                echo "<p>NIM: $nim</p>";
                echo "<p>$fakultas</p>";
                echo "<p>Program Studi: $prodi</p>";
            ?>
        </div>

        <!-- Sosial Media -->
        <div class="social-icons">
            <?php 
                foreach($sosmed as $nama => $link){
                    echo "<a href='$link' target='_blank'>$nama</a>";
                }
            ?>
        </div>
    </div>
</body>
</html>
