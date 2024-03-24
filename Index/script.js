//section1 slide

//section5 parallax

const parallax = document.querySelector(".index-section05");

window.addEventListener("scroll", function () {
  const offset = window.pageYOffset;
  parallax.style.backgroundPositionY = offset * 0.9 + "px";
});
