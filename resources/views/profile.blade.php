<!-- <!DOCTYPE html>
<html>
<head>
    <title>PWL demas</title>
</head>
<body>

    <h1>Judul Besar</h1>
    <h2>Sub Judul</h2>

    <p>Ini adalah teks paragraf.</p>

</body>
</html> -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Dhemas</title>

    <style>
        body {
            margin: 0;
            font-family: Georgia, serif;
            background: #ede0cf;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 380px;
            background: #f8f1e7;
            border: 2px solid #c8b79c;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 8px 18px rgba(0,0,0,0.15);
        }

        h1 {
            margin: 0;
            color: #6b4f3a;
        }

        .line {
            width: 70px;
            height: 2px;
            background: #b89168;
            margin: 15px auto 25px;
        }

        img {
            width: 220px;
            border-radius: 10px;
            border: 4px solid #d6c2a4;
        }

        .info {
            margin-top: 25px;
            text-align: left;
            font-size: 18px;
            line-height: 1.8;
            color: #4b3a2f;
        }

        strong {
            color: #7a5a40;
        }
    </style>
</head>
<body>

    <div class="card">

        <img src="{{ asset('image/mangga.jpeg') }}" alt="Mangga">

        <div class="info">
            <strong>Nama :</strong> Dhemas Ravinagata<br>
            <strong>NPM :</strong> 2457052007
        </div>
    </div>

</body>
</html>