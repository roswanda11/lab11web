<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>OOP Motor</title>
    <style>
        body {
            text-align: center;
            height: 100%;
            margin: 0; /* Menghilangkan margin agar footer bisa ditempatkan di bawah */
        }

        .container {
            padding-bottom: 50px; /* Menambahkan padding agar footer tidak tumpang tindih dengan konten */
        }

        footer {
            margin-top: 50px;
    clear: both;
    text-align: center;
    background: linear-gradient(to right, rgb(241, 163, 253), rgb(168, 225, 255));
    padding: 20px;
    color: rgb(255, 255, 255);
    border-radius: 5px;
    font-family: "Raleway SemiBold", sans-serif;
    border: 5px solid rgb(255, 255, 255);
    position: fixed;
    bottom: 0;
    width: 100%;
}
    </style>
</head>

<body>
    <div class="container">
        <?php
        class Mobil
        {
            private $warna;
            private $merk;
            private $harga;

            public function __construct()
            {
                $this->warna = "Biru";
                $this->merk = "BMW";
                $this->harga = "10000000";
            }

            public function gantiWarna($warnaBaru)
            {
                $this->warna = $warnaBaru;
            }

            public function tampilWarna()
            {
                echo "Warna mobilnya : " . $this->warna;
            }
        }

        $a = new Mobil();
        $b = new Mobil();

        echo "<b>Mobil pertama</b><br>";

        $a->tampilWarna();

        echo "<b><br>Mobil pertama ganti warna</b><br>";

        $a->gantiWarna("Merah");

        $a->tampilWarna();

        echo "<br><b>Mobil kedua</b><br>";

        $b->gantiWarna("Hijau");

        $b->tampilWarna();
        ?>
    </div>
    <footer>
        <p>&copy; 2023, Teknik Informatika, <a href="https://wa.me/6285724667129" style="text-decoration: none; color: white;">Febriyani Nurhida</a>, Universitas Pelita Bangsa</p>
    </footer>
</body>

</html>
