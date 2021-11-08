
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/gallery.css">

    <!-- IDEDAM GOOGLE FONTS STYLES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <title>Gallery</title>
</head>
<body>
    
    <video autoplay loop class="back-video" muted plays-inline>
        <source src="video/videofonas.mp4" type="video/mp4">
    </video>

    <div class="full-img" id="fullImgBox">
        <img src="https://picsum.photos/id/1015/600" id="fullImg">
        <span onclick="closeFullImg()" >X</span>
    </div>

    <div class="disableGallery">
        <span onclick="disablGallery()" id="disableButton">X</span>
    </div>

    <div class="enableGallery">
        <span onclick="enableGallery()" id="enableButton">V</span>
    </div>

    <div class="img-gallery" id="imgGallery">
        <img src="https://picsum.photos/id/1015/900" onclick="openFullImg(this.src)">
        <img src="https://picsum.photos/id/1016/900" onclick="openFullImg(this.src)">
        <img src="https://picsum.photos/id/1018/900" onclick="openFullImg(this.src)">
        <img src="https://picsum.photos/id/1019/900" onclick="openFullImg(this.src)">
        <img src="https://picsum.photos/id/1029/900" onclick="openFullImg(this.src)">
        <img src="https://picsum.photos/id/1036/900" onclick="openFullImg(this.src)">
        <img src="https://picsum.photos/id/1039/900" onclick="openFullImg(this.src)">
        <img src="https://picsum.photos/id/1037/900" onclick="openFullImg(this.src)">
    </div>


    <script src="https://kit.fontawesome.com/bc9bcc9514.js" crossorigin="anonymous"></script>

    <script src="scripts/galleryapp.js"></script>

</body>
</html>