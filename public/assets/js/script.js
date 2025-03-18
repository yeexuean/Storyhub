//price slider for stock image
const rangeSlide = document.querySelector(".range-slide");
const tooltip = document.querySelector(".tooltip");
const maxVal = parseInt(rangeSlide.max);

function slidePrice() {
  let progress = (rangeSlide.value / maxVal) * 100;
  tooltip.style.left = progress + "%";
  rangeSlide.style.background =
    "linear-gradient(to right, #e15747 ${progress}%,#ddd ${progress}%)";
  tooltip.innerHTML = "$" + rangeSlide.value;
}

window.onload = function () {
  slidePrice();
};

//payment card options
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".card-box").forEach((img) => {
    img.addEventListener("click", function () {
      //remove 'selected' class from all images
      document
        .querySelectorAll(".card-box")
        .forEach((i) => i.classList.remove("selected"));

      //add "selected" class to the clicked image
      this.classList.add("selected");
    });
  });
});
