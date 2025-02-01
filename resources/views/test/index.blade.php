<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        img {
            width: 200px;
            height: 150px;
            margin: 10px;
        }
        .gallery {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .gallery div {
            margin: 10px;
        }
        .cross {
            position: absolute;
            width: 50px;
            height: 50px;
            transform: rotate(45deg);
            background: red;
            color: white;
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            line-height: 50px;
        }
    </style>
</head>
<body>
    <h1>Gallery of Jakkarawut 66222420031 (นาย จักราวุธ ไหมเกื้อ)</h1>
    <div class="gallery">
        <div>
            <img src="{{ $ant }}" alt="Ant">
            <br>Ant
        </div>
        <div>
            <img src="{{ $bird }}" alt="Bird">
            <br>Bird
        </div>
        <div>
            <img src="{{ $cat }}" alt="Cat">
            <br>Cat
        </div>
        <div style="position: relative;">
            <img src="{{ $god }}" alt="God">
            <div class="cross" style="top: 40px; left: 70px;">X</div>
            <br>God
        </div>
        <div style="position: relative;">
            <img src="{{ $spider }}" alt="Spider">
            <div class="cross" style="top: 40px; left: 70px;">X</div>
            <br>Spider
        </div>
    </div>
</body>
</html>
