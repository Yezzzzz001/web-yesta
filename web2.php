<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Galeri Hati</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background:#d59be7;
    overflow:hidden;
    font-family:Arial, Helvetica, sans-serif;
}

h1{
    text-align:center;
    color:white;
    margin:15px 0;
    text-shadow:2px 2px 5px rgba(0,0,0,.2);
}

.gallery{
    position:relative;
    width:100%;
    height:90vh;
}

.gallery img{
    position:absolute;
    width:160px;
    border-radius:4px;
    box-shadow:0 5px 15px rgba(0,0,0,.2);
    transition:.3s;
}

.gallery img:hover{
    transform:scale(1.08);
    z-index:999;
}


/* ===== FOTO ATAS KIRI ===== */

.gallery img:nth-child(1){
    top:80px;
    left:28%;
}


/* ===== FOTO ATAS KANAN ===== */

.gallery img:nth-child(2){
    top:80px;
    right:28%;
}


/* ===== FOTO SAMPING KIRI ===== */

.gallery img:nth-child(3){
    top:200px;
    left:19%;
}


/* ===== FOTO SAMPING KANAN ===== */

.gallery img:nth-child(4){
    top:200px;
    right:19%;
}


/* ===== FOTO DI ATAS TULISAN ===== */

.gallery img:nth-child(5){
    top:135px;
    left:50%;
    transform:translateX(-50%);
}


/* ===== FOTO BAWAH KIRI ===== */

.gallery img:nth-child(6){
    top:350px;
    left:31%;
}


/* ===== FOTO BAWAH KANAN ===== */

.gallery img:nth-child(7){
    top:350px;
    right:31%;
}


/* ===== FOTO PALING BAWAH KIRI ===== */

.gallery img:nth-child(8){
    top:480px;
    left:38%;
}


/* ===== FOTO PALING BAWAH KANAN ===== */

.gallery img:nth-child(9){
    top:480px;
    right:38%;
}


/* ===== TULISAN TENGAH ===== */

.ucapan{
    position:absolute;
    top:275px;
    left:50%;
    transform:translateX(-50%);
    width:450px;
    text-align:center;
    color:white;
    font-size:32px;
    font-weight:bold;
    line-height:1.3;
    text-shadow:2px 3px 6px rgba(0,0,0,.3);
    z-index:10;
}


/* ===== TOMBOL ===== */

.kembali{
    position:fixed;
    bottom:15px;
    left:50%;
    transform:translateX(-50%);
    text-decoration:none;
    padding:12px 30px;
    background:#ff5e7a;
    color:white;
    border-radius:8px;
    font-weight:bold;
    transition:.3s;
}

.kembali:hover{
    background:#ff2f58;
}


/* ===== RESPONSIVE HP ===== */

@media (max-width:600px){

    .gallery img{
        width:100px;
    }

    .gallery img:nth-child(1){
        left:20%;
        top:70px;
    }

    .gallery img:nth-child(2){
        right:20%;
        top:70px;
    }

    .gallery img:nth-child(3){
        left:5%;
        top:190px;
    }

    .gallery img:nth-child(4){
        right:5%;
        top:190px;
    }

    .gallery img:nth-child(5){
        top:135px;
    }

    .gallery img:nth-child(6){
        left:18%;
        top:370px;
    }

    .gallery img:nth-child(7){
        right:18%;
        top:370px;
    }

    .gallery img:nth-child(8){
        left:28%;
        top:500px;
    }

    .gallery img:nth-child(9){
        right:28%;
        top:500px;
    }

    .ucapan{
        top:250px;
        width:300px;
        font-size:24px;
    }

    h1{
        font-size:25px;
    }
}

</style>
</head>

<body>
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

<h1>💜 Galeri Hati 💜</h1>

<div class="gallery">

    <!-- FOTO 1 -->
    <img src="gambar/gambar1.jpeg" alt="">

    <!-- FOTO 2 -->
    <img src="gambar/gambar1.jpeg" alt="">

    <!-- FOTO 3 -->
    <img src="gambar/gambar1.jpeg" alt="">

    <!-- FOTO 4 -->
    <img src="gambar/gambar1.jpeg" alt="">

    <!-- FOTO 5 DI ATAS TULISAN -->
    <img src="gambar/gambar1.jpeg" alt="">

    <!-- FOTO 6 -->
    <img src="gambar/gambar1.jpeg" alt="">

    <!-- FOTO 7 -->
    <img src="gambar/gambar1.jpeg" alt="">

    <!-- FOTO 8 -->
    <img src="gambar/gambar1.jpeg" alt="">

    <!-- FOTO 9 -->
    <img src="gambar/gambar1.jpeg" alt="">


    <!-- TULISAN TENGAH -->
    <div class="ucapan">
        selamat ulang tahun<br>
        sayangku😘
    </div>

</div>


<!-- TOMBOL SELESAI -->
<a href="fakelogin.php" class="kembali">
    Selesaiii
</a>

</body>
</html>