function tampilkanDeskripsi(id) {
  const descriptions = document.querySelectorAll(".description");
  descriptions.forEach((item, i) => {
    if (item.classList.contains("active")) {
      item.classList.remove("active");
    } else if (id === i + 1) {
      item.classList.add("active");
    }
  });
}
