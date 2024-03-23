//section1 slide
const images = document.querySelector(".index-section01-image");
const arrows = document.querySelectorAll(".arrows");
console.log(images, arrows);

arrows.forEach((arrow, index) => {
  arrow.addEventListener("click", () => {
    images.style.left = `-${index * 100}%`;
  });
});

//section2

//section5 parallax

const parallax = document.querySelector(".index-section05");

window.addEventListener("scroll", function () {
  const offset = window.pageYOffset;
  parallax.style.backgroundPositionY = offset * 0.7 + "px";
});
