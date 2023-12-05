function bayar() {
  const bayar = document.querySelector(".bayar");
  const loading = document.querySelector(".loading");
  const berhasil = document.querySelector(".berhasil");

  berhasil.style = "display : none";
  bayar.classList.toggle("active");
  loading.classList.toggle("active");

  setTimeout(() => {
    loading.classList.toggle("active");
    berhasil.style = "display : block";
    //ini revisinya
    alert("Berhasil Mendaftar");
    setTimeout(() => {
      bayar.classList.toggle("active");
      window.location.href = "pendaftaran.php";
    }, 1000);
  }, 3000);
}
