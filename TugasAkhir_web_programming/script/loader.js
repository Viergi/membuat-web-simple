const body = document.body;
body.style.overflow = "hidden";

setTimeout(() => {
  const loader = document.getElementById("loader");
  body.style.overflowY = "auto";
  loader.classList.add("active");
}, 2000);

window.onbeforeunload = function () {
  window.scrollTo(0, 0);
};
