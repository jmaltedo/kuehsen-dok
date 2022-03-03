// Mobile Menu

document.getElementById("mobile-nav-button").onclick = function() {
  document.getElementById("mobile-nav").style.right = "0";
}

document.getElementById("mobile-nav-close-button").onclick = function() {
  document.getElementById("mobile-nav").style.right = "-320px";
}

function er(e) {
  let c = e.children;
  console.log(c);
  Array.from(c).forEach(element => {
    if (element.classList.contains("hidden")) {
      element.classList.remove("hidden");
    }
    else {
      element.classList.add("hidden");
    }
  });
}

// Armenhaus Bildwechsel
//
// document.getElementById("armenhausUD").onclick = function() {
//   if (document.getElementById("armenhausUD").src.match("/kuehsen-dok/src/img/sozialwesen/armenhausUDsw.jpg"))
//   {
//     document.getElementById("armenhausUD").src = "/kuehsen-dok/src/img/sozialwesen/armenhausUD.jpg";
//     return;
//   }
//   else if (document.getElementById("armenhausUD").src.match("/kuehsen-dok/src/img/sozialwesen/armenhausUD.jpg"))
//   {
//     document.getElementById("armenhausUD").src = "/kuehsen-dok/src/img/sozialwesen/armenhausUDsw.jpg";
//     return;
//   }
// }
