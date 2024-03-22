//section2

//section5 parallax

const parallax = document.querySelector(".index-section05");

window.addEventListener("scroll", function () {
  const offset = window.pageYOffset;
  parallax.style.backgroundPositionY = offset * 0.7 + "px";
});
