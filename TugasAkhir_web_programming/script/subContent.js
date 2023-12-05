function tampilkanContent(id) {
  const contents = document.querySelectorAll(".sub_content");
  const subTitle = document.querySelectorAll(".sub_title");
  contents.forEach((item, i) => {
    if (id === i + 1) {
      item.classList.add("active");
    } else {
      item.classList.remove("active");
    }
  });
  subTitle.forEach((item, i) => {
    if (id === i + 1) {
      item.classList.add("active");
    } else {
      item.classList.remove("active");
    }
  });
}
