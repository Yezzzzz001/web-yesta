<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Website Ulang Tahun 🎂</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e64fcf;
            text-align: center;
            padding-top: 50px;
            margin: 0;
        }

        h1 {
            color: #ffffff;
        }

        /* Sembunyikan iframe YouTube */
        #ytAudio {
            width: 0;
            height: 0;
            border: none;
            visibility: hidden;
        }

        /* Slideshow */
        .slideshow {
            position: relative;
            width: 400px;
            height: 250px;
            margin: 30px auto;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        .slideshow img {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            object-fit: cover;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .slideshow img.active {
            opacity: 1;
        }

        /* Container kata-kata */
        .kata-kata {
            width: 500px;
            max-width: 85%;
            margin: 25px auto;
            padding: 25px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
            color: #555;
            line-height: 1.7;
        }

        .kata-kata h2 {
            color: #ff5c8a;
            margin-top: 0;
        }

        .kata-kata p {
            margin: 10px 0;
        }

        .doa {
            color: #777;
            font-size: 15px;
        }

        /* Tampilan HP */
        @media (max-width: 600px) {
            body {
                padding-top: 30px;
            }

            h1 {
                font-size: 25px;
                padding: 0 15px;
            }

            .slideshow {
                width: 90%;
                height: 220px;
            }

            .kata-kata {
                width: 85%;
                padding: 20px;
            }
        }
    </style>
    
</head>

<body>

    <h1>Selamat Ulang Tahun Sayangnyaaa akuuu 🎉</h1>

    <!-- YouTube autoplay audio -->
   <audio id="bgm" loop>
    <source src="audio/audio2.mp3" type="audio/mp3">
    Browser kamu tidak mendukung audio.
</audio>

<script>
window.addEventListener("load", function () {
    const audio = document.getElementById("bgm");
    audio.play().catch(() => {
        document.body.addEventListener("click", () => audio.play(), { once: true });
    });
});
</script>

    <!-- Slideshow gambar -->
    <div class="slideshow">
        <img src="gambar/gambar10.jpeg" class="active" alt="Foto 1">
        <img src="gambar/gambar2.jpeg" alt="Foto 2">
        <img src="gambar/gambar1.jpeg" alt="Foto 3">
        <img src="gambar/gambar8.jpeg" alt="Foto 4">
    </div>

    <!-- Container kata-kata -->
    <div class="kata-kata">

        <h2>💗 Happy Sweet 16 💗</h2>

        <p>
            Selamat ulang tahun yang ke-16 tahun yaaa sayanggg 🎂❤️
            Semoga di umur yang baru ini kamu selalu dikelilingi
            hal-hal baik dan orang-orang yang sayang sama kamu.
        </p>

        <p class="doa">
            Semoga selalu diberi kesehatan, kebahagiaan,
            dimudahkan dalam setiap urusan, dilancarkan sekolahnya,
            dan semua impian serta cita-citanya bisa tercapai.
            Semoga kamu selalu menjadi pribadi yang lebih baik
            dan bahagia setiap harinya. Aamiin 🤲🏻💗
        </p>

        <p>
            Sekali lagi, happy birthday yang ke-16 yaaa 🎉🎂
        </p>

    </div>

    <script>
        let index = 0;
        const slides = document.querySelectorAll(".slideshow img");

        function showNextImage() {
            slides[index].classList.remove("active");
            index = (index + 1) % slides.length;
            slides[index].classList.add("active");
        }

        // Ganti gambar setiap 3 detik
        setInterval(showNextImage, 3000);
    </script>

</body>
</html>