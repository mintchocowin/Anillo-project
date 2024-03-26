//aside queryselector

const asidebutton01 = document.querySelector(".aside-logo-login");
const asidehidden = document.querySelector(".aside-hidden");
const asideheaderx = document.querySelector(".aside-header-x");
const asidelogo = document.querySelector(".aside-logo");
const asidechevronup = document.querySelector(".aside-logo-chevron-up");
const asidechevrondown = document.querySelector(".aside-logo-chevron-down");
// asid hidden 클릭이벤트

asidebutton01.addEventListener("click", function () {
  asidehidden.style.display = "block";
  asidelogo.style.display = "none";
});

asideheaderx.addEventListener("click", function () {
  asidehidden.style.display = "none";
  asidelogo.style.display = "block";
});

//aside popup 클릭이벤트
const asidepopup = document.querySelector(".aside-popup");
const asidepopuptextclose = document.querySelector(".aside-popup-text-close");
console.log(asidepopup);

asidepopuptextclose.addEventListener("click", function () {
  asidepopup.style.display = "none";
});

//scroll 숨김

const asidebuttonshow = function () {
  if (window.scrollY > window.innerHeight) {
    asidechevronup.classList.add("show");
  } else {
    asidechevronup.classList.remove("show");
  }
};

window.addEventListener("scroll", asidebuttonshow);

// aside 스크롤업
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
}

asidechevronup.addEventListener("click", scrollToTop);

//aside 스크롤 다운
function scrollToDown() {
  window.scrollTo({
    top: document.body.scrollHeight,
    behavior: "smooth",
  });
}

asidechevrondown.addEventListener("click", scrollToDown);

//슬라이드
const slides = document.querySelector(".aside-popoup-image-wrapper");
const slide = document.querySelectorAll(".aside-popoup-image-wrapper img");
const slidecurrentIdx = 0;
const slideCount = slide.length;
const slideWidth = 231;
const popuppagers = document.querySelectorAll(".aside-popup-buttons div");

// const pagerChange = (e) => {
//   const targetIndex = e.target.dataset.index;
//   popuppagers.forEach((pager, idx) => {
//     popuppagers[idx].classList.remove("active");
//   });
//   for (let i = 0; i < slide.length; i++) {
//     if (targetIndex == i) {
//       popuppagers[i].classList.add("active");
//       slides.style.transform = `translateX(-${slideWidth * i}px)`;
//     }
//   }
// };

// popuppagers.forEach((pager) => {
//   pager.addEventListener("click", pagerChange);
// });
const pagerChange = (e) => {
  const targetIndex = e.target.dataset.index; // 클릭된 요소의 data-index 가져오기
  if (targetIndex !== undefined) {
    // undefined가 아닐 때만 실행
    const activePager = document.querySelector(".aside-popup-button .active");
    activePager.classList.remove("active"); // 이전에 활성화된 pager에서 active 클래스 제거

    const targetPager = e.target;
    targetPager.classList.add("active"); // 클릭된 pager에 active 클래스 추가

    const index = parseInt(targetIndex); // 문자열을 숫자로 변환
    slides.style.transform = `translateX(-${slideWidth * index}px)`; // 해당 인덱스에 해당하는 이미지로 이동
  }
};

makeClone();
function makeClone() {
  for (let i = 0; i < slideCount; i++) {
    const cloneSlide = slide[i].cloneNode(true);
    cloneSlide.classList.add("clone");
    slides.appendChild(cloneSlide);
  }
  for (let i = slideCount - 1; i >= 0; i--) {
    const cloneSlide = slide[i].cloneNode(true);
    cloneSlide.classList.add("clone");
    slides.prepend(cloneSlide);
  }
  updateWidth();
  setInitialPos();
  slides.classList.add("animated");
}
function updateWidth() {
  const currentSlides = document.querySelectorAll(
    ".aside-popoup-image-wrapper img"
  );
  const newSlidecount = currentSlides.length;
  const newWidth = slideWidth * newSlidecount + "px";
  slides.style.width = newWidth;
}
function setInitialPos() {
  const initialTranslateValue = -slideWidth * slideCount;
  slides.style.transform = `translateX(${initialTranslateValue}px)`;
}

//팝업

// const popupCloseDate = localStorage.getItem("CloseDate");
// const asidetodayclose = document.querySelector(".aside-popup-text-todayclose");

// asidetodayclose.addEventListener("click", function () {
//   const today = new Date().toLocaleDateString();
//   popupCloseDate = today;
//   localStorage.setItem("CloseDate", popupCloseDate); //
//   checkPopupStatus();
// });

// function checkPopupStatus() {
//   const today = new Date().toLocaleDateString();
//   const asidepopup = document.querySelector(".aside-popup");

//   if (asidepopup) {
//     if (popupCloseDate !== today) {
//       asidepopup.style.display = "block";
//     } else {
//       asidepopup.style.display = "none";
//     }
//   }
// }

// checkPopupStatus();
