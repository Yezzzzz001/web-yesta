<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Supaya tidak muncul Undefined array key
    $dob = trim($_POST["dob"] ?? "");

    // Cek tanggal lahir
    if ($dob === "2010-08-14") {
        $_SESSION["username"] = "Ananda Fitria Ramadhani";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login Ucapan Ulang Tahun</title>

<style>

* {
    box-sizing: border-box;
}

body {
    margin: 0;
    padding: 0;

    font-family: Arial, sans-serif;

    background: linear-gradient(
        135deg,
        #ff9a9e,
        #fad0c4
    );

    display: flex;
    justify-content: center;
    align-items: center;

    height: 100vh;

    overflow: hidden;
}


/* Kotak login */

.login-box {

    background: white;

    padding: 30px;

    border-radius: 15px;

    box-shadow:
        0 8px 20px rgba(0,0,0,.15);

    width: 300px;

    text-align: center;
}


/* Judul */

.login-box h2 {

    margin-top: 0;

    margin-bottom: 20px;

    font-size: 23px;
}


/* Input tanggal */

.login-box input {

    display: block;

    width: 90%;

    margin: 10px auto;

    padding: 10px;

    border: 1px solid #ccc;

    border-radius: 5px;

    font-size: 14px;
}


/* Tombol utama */

.login-box button {

    background: #ff6f91;

    color: white;

    border: none;

    padding: 11px 20px;

    border-radius: 25px;

    cursor: pointer;

    font-weight: bold;

    transition: .3s;
}


.login-box button:hover {

    background: #ff3b6e;

    transform: scale(1.03);
}


/* Tulisan salah */

#errorText {

    color: red;

    font-size: 15px;

    font-weight: bold;

    margin-top: 15px;

    display: none;
}


/* Tombol rahasia */

#hiddenButton {

    display: none;

    margin: 15px auto 0;

    background: #9b59b6;
}


#hiddenButton:hover {

    background: #8e44ad;
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

<div class="login-box">

    <h2>
        Lohh kok udah balik lagi??😝
    </h2>


    <form onsubmit="cekLogin(event)">

        <!-- Tanggal lahir -->

        <input
            type="date"
            id="dob"
            name="dob"
            required
        >


        <!-- Tombol masuk -->

        <button type="submit">
            Coba masuk lagi deh🥳
        </button>

    </form>


    <!-- Muncul setelah klik pertama -->

    <p id="errorText">
        Tanggal Lahir salah!<br>
        Coba Klik lagi dehh😜
    </p>


    <!-- Tombol tersembunyi -->

    <button
        type="button"
        id="hiddenButton"
        onclick="masukWeb()"
    >
        Masuk sekarang 💗
    </button>

</div>



<script>

let jumlahKlik = 0;


function cekLogin(event) {

    // Jangan reload halaman

    event.preventDefault();


    jumlahKlik++;


    const errorText =
        document.getElementById("errorText");

    const hiddenButton =
        document.getElementById("hiddenButton");


    /*
    =========================
    KLIK PERTAMA
    =========================
    */

    if (jumlahKlik === 1) {

        errorText.style.display = "block";

    }


    /*
    =========================
    KLIK KEDUA
    =========================
    */

    else if (jumlahKlik === 2) {

        alert(
            "⚠️ PERINGATAN ⚠️\n\n" +
            "Kamu yakin masih mau coba lagi?? 😭\n\n" +
            "Ini slide terakhir lohh... 👀"
        );


        /*
        Setelah klik OK
        tombol tersembunyi muncul
        */

        hiddenButton.style.display = "block";

    }

}


/*
=========================
TOMBOL TERSEMBUNYI
=========================
*/

function masukWeb() {

    window.location.href = "web3.php";

}

</script>


</body>
</html>