const header = document.querySelector("header");
window.addEventListener("scroll", function () {
  header.classList.toggle("sticky", window.scrollY > 100);
});

let menu = document.querySelector("#menu-icon");
let navlist = document.querySelector(".navlist");

menu.onclick = () => {
  menu.classList.toggle("bx-x");
  navlist.classList.toggle("open");
  if (navlist.classList.contains("open")) {
    navlist.querySelectorAll("a").forEach((link) => {
      link.style.display = "block";
    });
  } else {
    navlist.querySelectorAll("a").forEach((link) => {
      link.style.display = "none";
    });
  }
};

window.onscroll = () => {
  menu.classList.remove("bx-x");
  navlist.classList.remove("open");
  navlist.querySelectorAll("a").forEach((link) => {
    link.style.display = "none";
  });
};

// ------------------------------------------------------
