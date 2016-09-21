// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "the-navbar" + " the-card-2" + " the-animate-top" + " the-white";
    } else {
        navbar.className = navbar.className.replace(" the-card-2 the-animate-top the-white", "");
    }
}