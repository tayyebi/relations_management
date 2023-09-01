//here we got our element in html
const menuButton = document.querySelector(".burger-menu");
const sideBar = document.querySelector(".app-sidebar");
const cover = document.querySelector("#cover");
const body = document.querySelector(".homepage");
//at the start our menu is close
let menuOpen = false;
//here on click event listener we add or remove some classes and then we change the menuOpen value
menuButton.addEventListener("click", () => {
  if (!menuOpen) {
    menuButton.classList.add("open");
    sideBar.classList.add("open");
    cover.classList.add("cover");
    body.classList.add("open");
  } else {
    menuButton.classList.remove("open");
    sideBar.classList.remove("open");
    cover.classList.remove("cover");
    body.classList.remove("open");
  }
  menuOpen = !menuOpen;
});

cover.addEventListener("click", () => {
  menuButton.classList.remove("open");
  sideBar.classList.remove("open");
  cover.classList.remove("cover");
  body.classList.remove("open");
  //   menuOpen = false;
});
