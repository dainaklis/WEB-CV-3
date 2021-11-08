
// --------------------------------------------------------------------------------------------------

const hamburgerButton = document.getElementById('hamburger')

const navList = document.getElementById('nav-list')

function toggleButton(){
    navList.classList.toggle('show')
}

hamburgerButton.addEventListener('click', toggleButton) 




// ------------------------------------------------------------------------------------------------


function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) 
        {
          openDropdown.classList.remove('show');
        }
      }
    }
  }


// -----------------------------------------------------------------------------------------------


var disablemenu = document.getElementById("disable");
var enablemenu = document.getElementById("enable");


function disableMenu(){
  disablemenu.style.display = "none";
  enablemenu.style.display = "flex";
}

function enableMenu(){
  disablemenu.style.display = "flex";
  enablemenu.style.display = "none";
}