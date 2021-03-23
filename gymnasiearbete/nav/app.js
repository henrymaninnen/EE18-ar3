
const navToggle = () => {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".links");
  const navLinks = document.querySelector(".links li")

  //toggla naven
  burger.addEventListener("click", () => {
    //toggle nav
    nav.classList.toggle("nav-active");

     //animera links
  navLinks.forEach((link, index) => {
    if (link.style.animation) {
      link.style.animation = "";
    } else {
      link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 1}s`;
    }
  });
  //burger animation
  burger.classList.toggle("toggle");

  });
}

navToggle();