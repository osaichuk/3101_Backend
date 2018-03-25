<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My gallery</title>
    <style>
        body {
            width: 75vw;
            margin: 10px auto;
        }
        h1, h4 {
            text-align: center;
        }
        .gallery {
            display: flex;
            justify-content: space-around;
            flex-flow: row nowrap;
        }
        .imgGallery {
            display: flex;
            justify-content: space-around;
            flex-flow: row wrap;
            flex: 0 0 70%;
        }
        .image img {
            margin: 20px;
            max-width: 250px;
            max-height: 250px;
        }
        .image img:hover {
            border: white solid 3px;
        }
    </style>
</head>
<body>

<h1>Gallery</h1>
<div class="gallery">
    <div class="imgGallery">
        <div class="image"><a href="book-1.php"><img src="img/435212_165.jpg" alt="435212_165.jpg"></a></div>
        <div class="image"><a href="book-2.php"><img src="img/443613_165.jpg" alt="443613_165.jpg"></a></div>
        <div class="image"><a href="book-3.php"><img src="img/450992_165.jpg" alt="450992_165.jpg"></a></div>
        <div class="image"><a href="book-4.php"><img src="img/457528_165.jpg" alt="457528_165.jpg"></a></div>
    </div>
</div>

<h4><a href="statistics.php">Statistics</a></h4>
</body>
</html>

