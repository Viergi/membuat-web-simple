function updateClock() {
  const clockElement = document.getElementById("clock");
  const now = new Date();
  const hours = now.getHours().toString().padStart(2, "0");
  const minutes = now.getMinutes().toString().padStart(2, "0");
  const seconds = now.getSeconds().toString().padStart(2, "0");
  const timeString = `${hours}:${minutes}:${seconds}`;
  clockElement.textContent = timeString;
}

function updateDate() {
  const dateElement = document.getElementById("date");
  const now = new Date();
  const options = {
    weekday: "long",
    year: "numeric",
    month: "long",
    day: "numeric",
  };
  const dateString = now.toLocaleDateString(undefined, options);
  dateElement.textContent = dateString;
}

setInterval(updateClock, 1000);
setInterval(updateDate, 1000);

updateClock();
updateDate();
