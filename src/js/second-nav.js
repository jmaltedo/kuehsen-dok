// SECOND-NAV HINT

if (document.getElementById("second-nav").scrollLeft < (document.getElementById("second-nav").scrollWidth - document.getElementById("second-nav").clientWidth - 20)) {
  document.getElementById("hint2").style.opacity = "100%";
}
document.getElementById("second-nav").onscroll = function() {
  if (document.getElementById("second-nav").scrollLeft <= 20) {
    document.getElementById("hint1").style.opacity = "0%";
  }
  else {
    document.getElementById("hint1").style.opacity = "100%";
  }
  if (document.getElementById("second-nav").scrollLeft >= (document.getElementById("second-nav").scrollWidth - document.getElementById("second-nav").clientWidth - 20)) {
    document.getElementById("hint2").style.opacity = "0%";
  }
  else {
    document.getElementById("hint2").style.opacity = "100%";
  }
}
