function mobileNav() {
  const list = document.querySelector(".list-menu");
  const garis = document.querySelectorAll(".garis");

  garis[0].classList.toggle("active");
  garis[1].classList.toggle("active");
  garis[2].classList.toggle("active");

  list.classList.toggle("show");
}
