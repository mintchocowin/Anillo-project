//section1 slide
document.addEventListener("DOMContentLoaded", function () {
  const images = document.querySelectorAll(".index-section01-image img");
  const prevButton = document.getElementById("section1prev");
  const nextButton = document.getElementById("section1next");

  let currentIndex = 0;
  const totalImages = images.length;

  // 첫 번째 이미지를 보여줍니다.
  showImage(currentIndex);

  // 이전 버튼 클릭 시
  prevButton.addEventListener("click", function () {
    currentIndex = currentIndex === 0 ? totalImages - 1 : currentIndex - 1;
    showImage(currentIndex);
  });

  // 다음 버튼 클릭 시
  nextButton.addEventListener("click", function () {
    currentIndex = currentIndex === totalImages - 1 ? 0 : currentIndex + 1;
    showImage(currentIndex);
  });

  // 이미지를 표시합니다.
  function showImage(index) {
    // 모든 이미지를 숨깁니다.
    images.forEach((image) => {
      image.style.display = "none";
    });
    // 현재 인덱스의 이미지를 표시합니다.
    images[index].style.display = "block";
  }
});
//section2 slide
document.addEventListener("DOMContentLoaded", function () {
  const arrows = document.querySelectorAll(".index-section02-arrows i");
  const productTexts = document.querySelectorAll(
    ".index-section02-product-info div"
  );
  const images = document.querySelectorAll(".index-section02-image div");
  let currentIndex = 0;

  // 초기화: 첫 번째 상품 텍스트와 이미지만 표시
  showContent(currentIndex);

  arrows.forEach((arrow, index) => {
    arrow.addEventListener("click", function () {
      if (index === 0) {
        currentIndex =
          currentIndex === 0 ? productTexts.length - 1 : currentIndex - 1;
      } else {
        currentIndex =
          currentIndex === productTexts.length - 1 ? 0 : currentIndex + 1;
      }
      showContent(currentIndex);
    });
  });
  autoSlideInterval = setInterval(() => {
    currentIndex =
      currentIndex === productTexts.length - 1 ? 0 : currentIndex + 1;
    showContent(currentIndex);
  }, 5000); // 5초마다 슬라이드

  function showContent(index) {
    // 모든 텍스트와 이미지 숨김
    productTexts.forEach((text) => {
      text.style.display = "none";
    });
    images.forEach((image) => {
      image.style.display = "none";
    });

    // 현재 인덱스에 해당하는 텍스트와 이미지 표시
    productTexts[index].style.display = "block";
    images[index].style.display = "block";
  }
});
//section4

const wrapper = document.querySelector(".product_list");
let pressed = false;
let startX = 0;

wrapper.addEventListener("mousedown", function (e) {
  pressed = true;
  startX = e.clientX;
  console.log(startX);
  //display화살표보임
});
wrapper.addEventListener("mouseleave", function (e) {
  pressed = false;
});

window.addEventListener("mouseup", function (e) {
  pressed = false;
  //display 화살표 사라짐
});
wrapper.addEventListener("mousemove", function (e) {
  if (!pressed) {
    return;
  }
  this.scrollLeft += startX - e.clientX;
});

//section5 parallax

const parallax = document.querySelector(".index-section05");

window.addEventListener("scroll", function () {
  const offset = window.pageYOffset;
  parallax.style.backgroundPositionY = offset * 0.7 + "px";
});
