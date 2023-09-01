const menuButton = document.querySelector(".burger-menu");
const navBar = document.querySelector(".blog-nav");
let menuOpen = false;
//here on click event listener we add or remove some classes and then we change the menuOpen value
menuButton.addEventListener("click", () => {
  if (!menuOpen) {
    menuButton.classList.add("open");
    navBar.classList.add("open");
  } else {
    menuButton.classList.remove("open");
    navBar.classList.remove("open");
  }
  menuOpen = !menuOpen;
});
