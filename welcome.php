<?php
session_start();
$name = $_SESSION["username"] ?? "Tamu";
$message = $_SESSION["message"] ?? "";
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Selamat Ulang Tahun</title>

<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(135deg, #ffd6e8, #fff5fa);
    overflow: hidden;
    position: relative;
}

/* Efek love jatuh */
.love {
    position: fixed;
    top: -10vh;
    font-size: 30px;
    opacity: 0.4;
    animation: fallLove linear infinite;
    pointer-events: none;
    z-index: 0;
}

@keyframes fallLove {
    0% { transform: translateY(0) rotate(0deg); opacity: 0.4; }
    100% { transform: translateY(110vh) rotate(360deg); opacity: 0; }
}

/* Konten utama */
.welcome-box, .slide-container, .modal {
    position: relative;
    z-index: 10;
}

.welcome-box {
    width: 95%;
    max-width: 1100px;
    margin: 40px auto;
    text-align: center;
}

.welcome-box h1 {
    font-size: 40px;
    margin-bottom: 35px;
    line-height: 1.5;
}

/* Area teks scroll */
.slide-container {
    width: 90%;
    max-width: 950px;
    background: #fff;
    border: 8px solid #ffb6c1;
    border-radius: 25px;
    padding: 25px;
    box-shadow: 0 8px 20px rgba(0,0,0,.15);
    font-size: 22px;
    line-height: 2;
    color: #444;
    text-align: center;
    margin: 0 auto 40px auto;
    overflow: hidden;
    height: 400px; /* tinggi jendela teks */
    position: relative;
}

.slide-text {
    position: absolute;
    width: 100%;
    animation: scrollUp 40s linear infinite; /* durasi bisa diatur */
}

@keyframes scrollUp {
    0% { top: 100%; }
    100% { top: -100%; }
}

/* Tombol */
button {
    margin-top: 30px;
    padding: 14px 30px;
    font-size: 18px;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    transition: .3s;
    background: #ff6f91;
    color: #fff;
    box-shadow: 0 5px 15px rgba(0,0,0,.15);
}

button:hover {
    transform: scale(1.05);
    background: #ff3b6e;
}

#tombolTersembunyi {
    display: none;
    margin-top: 20px;
    padding: 14px 30px;
    background: #ff6f91;
    color: #fff;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    box-shadow: 0 5px 15px rgba(0,0,0,.15);
}

#tombolTersembunyi:hover {
    background: #ff3b6e;
}

/* Modal */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,.5);
}

.modal-content {
    background: #fff;
    width: 340px;
    max-width: 90%;
    margin: 15% auto;
    padding: 25px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 10px 25px rgba(0,0,0,.25);
}

.modal-content h2 {
    color: #ff6f61;
    margin-bottom: 15px;
}

.close-btn {
    background: #ff6f61;
    color: #fff;
    border: none;
    padding: 12px 25px;
    border-radius: 25px;
    cursor: pointer;
    font-size: 16px;
}

.close-btn:hover {
    background: #ff3b2e;
}
</style>

<script>
// generate love acak
document.addEventListener("DOMContentLoaded", () => {
    const emojis = ["💖","💞","💕","💓","💗","💘","💝"];
    for (let i = 0; i < 60; i++) {
        const love = document.createElement("div");
        love.className = "love";
        love.textContent = emojis[Math.floor(Math.random() * emojis.length)];
        love.style.left = Math.random() * 100 + "vw";
        love.style.animationDuration = 4 + Math.random() * 6 + "s";
        love.style.fontSize = 20 + Math.random() * 40 + "px";
        love.style.animationDelay = Math.random() * 5 + "s";
        document.body.appendChild(love);
    }
});

function showModal() {
    document.getElementById("peringatanModal").style.display = "block";
}
function closeModal() {
    document.getElementById("peringatanModal").style.display = "none";
    document.getElementById("tombolTersembunyi").style.display = "inline-block";
}
</script>
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

<div class="welcome-box">
    <h1>🎂 Selamat Ulang Tahun sayangkuuu❤️❤️, <?php echo htmlspecialchars($name); ?>! 🎂</h1>

    <div class="slide-container">
        <div class="slide-text">
            <p>
               happyyyy birthdayyyyy sayangggggggggggg 🤍🤍🤍🤍🤍<br>
selamaaattttt ulanggg tahunnnn yaaaaaa sayangggggggg 🥺💗<br>
sekarangggg kamuuuu udahhhhh 16 tahunnnnnnn 🫶🏻🫶🏻🫶🏻<br> <br>
semogaaaaa dii umurr keeee 16 iniiii kamuuu selaluuuu diberiiii kesehatannnnnn, kebahagiaannnnnn, rezekiiii yanggggg banyaaaaakkkkk, dannnn semogaaaaa semuuaaaaaa keinginannnn kamuuu satttuuuu persatttuuuu bisaaaaa terwujuddddddd 🤲🏻🤍<br> <br>
makasiiiiiiii yaaaaa sayanggggggg udahhhhh jadiiii bagiaaannnnn dariii hidupppp akuuuuuu 🥺💗 makasiiiiiiii udahhhhh selaluuuu adaaaaa, selaluuuu sabarrrrr, selaluuuu ngertiiiiinnnn akuuuu, dannnn udahhhhh mauuuuu nemeninnnn akuuuuuu sampaiiiii sekarannnggggg 🫂💗<br> <br>
semogaaaaa dii umurr kamuuu yangggg baruuuu iniiii, kamuuu bisaaaaa jadiiiii versiiii terbaikkkkk dariii diriiii kamuuu sendiriiiiiiii 🥺🫶🏻 janganngggg lupaaaaa buattttt selaluuuuu senengggggg yaaaaaa sayangggggg, karenAAAA kamuuu pantespppp dapettttt banyaaaaakkkkk kebahagiaannnnnn 💗💗💗<br> <br>
sekaliiiii lagiiiiii, selammmmmmattttt ulanggggg tahunnnnnnn sayangggggggggggggg 🤍🎂🎉<br>
semogaaaaa 16 tahunnnnn iniiii jadiiiii tahunnnn yangggggg penuhhhh dengannnnnn hal-hal baikkkkkkkk, penuhhhh dengannnnnn kebahagiaannnnnn, dannnn penuhhhh dengannnnnn ceritAAAA indahhhhh bersammmmm akuuuuuu 🥺💗<br> <br>
i loveeeeeee youuuuuuuuu sayangggggggggggg 🤍🤍🤍<br>
            </p>
        </div>
    </div>

   

    <button onclick="showModal()">Sudah Selesaiii🥳</button>
    <button id="tombolTersembunyi" onclick="location.href='web2.php'">Lanjutt😘</button>

    <div id="peringatanModal" class="modal">
        <div class="modal-content">
            <h2>⚠️JANGANNN KELUARR DULUU!!!</h2>
            <p>masihh adaa sesuatuu lohh sayanggg🫰🫰</p>
            <button class="close-btn" onclick="closeModal()">OK</button>
        </div>
    </div>
</div>
</body>
</html>
