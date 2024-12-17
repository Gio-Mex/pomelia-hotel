let hamburgerBtn = document.querySelector(".hamburger-icon");
let navbar = document.querySelector(".nav-container");
let closeBtn = document.querySelector(".close-icon");

// Navbar handler for mobile devices
hamburgerBtn.addEventListener("click", () => {
  navbar.classList.add("open");
});

closeBtn.addEventListener("click", () => {
  navbar.classList.remove("open");
});
