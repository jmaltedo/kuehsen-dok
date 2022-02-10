// Mobile Menu

document.getElementById("mobile-nav-button").onclick = function() {
  document.getElementById("mobile-nav").style.right = "0";
}

document.getElementById("mobile-nav-close-button").onclick = function() {
  document.getElementById("mobile-nav").style.right = "-320px";
}

// Armenhaus Bildwechsel

document.getElementById("armenhausUD").onclick = function() {
  if (document.getElementById("armenhausUD").src == "/kuehsen-dok/src/img/sozialwesen/armenhausUDsw.jpg")
  {
    document.getElementById("armenhausUD").src = "/kuehsen-dok/src/img/sozialwesen/armenhausUD.jpg";
  }
  else if
  {
    document.getElementById("armenhausUD").src = "/kuehsen-dok/src/img/sozialwesen/armenhausUDsw.jpg";
  }
}
