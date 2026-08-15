<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tombol Tersembunyi</title>
    <style>
        /* Tombol tersembunyi awalnya tidak terlihat */
        #tombolTersembunyi {
            display: none;
            margin-top: 20px;
            padding: 10px 20px;
            background: #ff6f61;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        #tombolTersembunyi:hover {
            background: #ff3b2e;
        }
    </style>
</head>
<body>
    <button onclick="tampilkanTombol()">Tekan untuk menampilkan tombol lain</button>

    <button id="tombolTersembunyi">Tombol Tersembunyi 🎉</button>

    <script>
        function tampilkanTombol() {
            document.getElementById("tombolTersembunyi").style.display = "inline-block";
        }
    </script>
</body>
</html>
