<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Camera Capture</title>
    <style>
        video, canvas {
            display: block;
            margin: 10px auto;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            display: block;
            margin: 10px auto;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h2 style="text-align:center">Ambil Foto dari Kamera</h2>
    <video id="video" width="320" height="240" autoplay></video>
    <button id="snap">Ambil Foto</button>
    <canvas id="canvas" width="320" height="240"></canvas>
    <form id="uploadForm" method="POST" action="upload.php">
        <input type="hidden" name="image" id="imageData">
        <button type="submit">Simpan ke Server</button>
    </form>