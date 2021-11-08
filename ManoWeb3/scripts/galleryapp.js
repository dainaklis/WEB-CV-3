

var fullImgBox = document.getElementById("fullImgBox");
var fullImg = document.getElementById("fullImg");

function closeFullImg(){
    fullImgBox.style.display = "none";
}

function openFullImg(pic){
    fullImgBox.style.display = "flex";
    fullImg.src = pic;
}

// ----------------------------------------------------------------------

var imgGallery = document.getElementById("imgGallery");
var disableButton = document.getElementById("disableButton");
var enableButton = document.getElementById("enableButton");

function disablGallery(){
    imgGallery.style.display = "none";
    disableButton.style.display = "none";
    enableButton.style.display = "flex";
}

function enableGallery(){
    imgGallery.style.display = "grid";
    disableButton.style.display = "flex";
    enableButton.style.display = "none";
}