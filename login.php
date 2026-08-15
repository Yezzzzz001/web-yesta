<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dob = trim($_POST["dob"]); // tanggal lahir

    // format date input biasanya yyyy-mm-dd
    if (!empty($dob) && $dob === "2010-08-14") {
        $_SESSION["username"] = "Ananda Fitria Ramadhani";
        header("Location: welcome.php");
        exit();
    } else {
        $error = "Tanggal lahir salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login Ucapan Ulang Tahun</title>
<style>
body {
    margin:0;
    padding:0;
    font-family:Arial, sans-serif;
    background:linear-gradient(135deg,#ff9a9e,#fad0c4);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    overflow:hidden;
    position:relative;
}
.login-box {
    position:relative;
    z-index:10;
    background:#fff;
    padding:30px;
    border-radius:15px;
    box-shadow:0 8px 20px rgba(0,0,0,.15);
    width:300px;
    text-align:center;
}
.login-box input {
    display:block;
    width:90%;
    margin:10px auto;
    padding:10px;
    border:1px solid #ccc;
    border-radius:5px;
}
.login-box button {
    background:#ff6f91;
    color:#fff;
    border:none;
    padding:10px 20px;
    border-radius:25px;
    cursor:pointer;
}
.login-box button:hover {
    background:#ff3b6e;
}
.error { color:red; margin-top:10px; }
</style>
</head>
<body>
<div class="login-box">
    <h2>Eits ada yang Ulang Tahun nih 🎉</h2>
    <form method="POST">
        <!-- input type date -->
        <input type="date" name="dob" required>
        <button type="submit">Masuk Yukk🥳</button>
    </form>
    <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
</div>
</body>
</html>
