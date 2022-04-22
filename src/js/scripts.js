// Mobile Menu

document.getElementById("mobile-nav-button").onclick = function() {
  document.getElementById("mobile-nav").style.right = "0";
}

document.getElementById("mobile-nav-close-button").onclick = function() {
  document.getElementById("mobile-nav").style.right = "-320px";
}

// FUNKTION Erwin Rickert

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

// FUNKTION Wappen

var x = true;
window.onscroll = function() {
  if ((window.innerHeight + window.scrollY) >= document.body.scrollHeight) {
      document.getElementById("kw_background").classList.add("kwb_animation");
      document.getElementById("bauernhaus").classList.add("bh_visibility");
      for(let i = 1; i <= 6; i++) {
        document.getElementById("bhe" + i).classList.add("bhe" + i + "_color");
      }
      if(x==true) {
        wkcolor();
        wkcolorreset()
        x = false;
      }
    }
  }
function wkcolor(){
  var i = 1;
  var iv = setInterval(function() {
    document.getElementById("wke" + i).style.backgroundColor = "red";
    i++;
    if(i==8) {
      clearInterval(iv);
    }
  },300);
}
function wkcolorreset(){
  setTimeout(function() {
    for(let i = 1; i <= 7; i++) {
      document.getElementById("wke"+i).style.backgroundColor = "white";
    }
  }, 5500);
}

// FUNKTION Flip Picture

function flip(p){
  if (p.classList.contains("flip")) {
    p.classList.remove("flip");
  }
  else {
    p.classList.add("flip");
  }
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
