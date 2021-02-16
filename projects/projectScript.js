const button = document.querySelector("button");
const popup = document.querySelector(".popup-wrapper");
const close = document.querySelector(".popup-close");

button.addEventListener("click", () => {
  popup.style.display = "block";
});

close.addEventListener("click", () => {
  popup.style.display = "none";
});

popup.addEventListener("click", () => {
  popup.style.display = "none";
});

setTimeout(() => {
  popup.style.display = "block";
}, 3000);

class Dropdown {
  constructor(container) {
    this.container = container;
    this.trigger = container.querySelector(".trigger");
    this.content = container.querySelector(".content");
  }
  init() {
    this.trigger.addEventListener("click", () => {
      this.trigger.classList.toggle("active");
      this.content.classList.toggle("active");
    });
  }
}

const dropdowns = document.querySelectorAll(".dropdown");

dropdowns.forEach((dropdown) => {
  const instance = new Dropdown(dropdown);
  instance.init();
});
