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

//팝업슬라이드 (button-active,auto-slide )
// const images = document.querySelector(".aside-popup-image");
// const buttons = document.querySelectorAll(".aside-popup-button div");

// buttons.forEach((button, index) => {
//   button.addEventListener("click", () => {
//     images.style.left = `-${index * 231}px`;
//     buttons.forEach((button) => button.classList.remove("active"));
//     button.classList.add("active");
//   });
// });
// const autoSlide = setInterval(nextSlide, slideInterval);

// // 버튼 클릭 시 이벤트 처리
// let currentIndex = 0; // 현재 이미지 인덱스
// const slideInterval = 3000; // 자동 슬라이드 간격 (3초)
// const nextSlide = () => {
//   currentIndex = (currentIndex + 1) % buttons.length;
//   slide(currentIndex);
// };
// buttons.forEach((button, index) => {
//   button.addEventListener("click", () => {
//     clearInterval(autoSlide); // 자동 슬라이드 중지
//     currentIndex = index; // 현재 인덱스 업데이트
//     slide(currentIndex);
//     autoSlide = setInterval(nextSlide, slideInterval); // 자동 슬라이드 재개
//   });
// });

//팝업 슬라이드

const images = document.querySelectorAll(".aside-popup-image img");
const buttons = document.querySelectorAll(".aside-popup-button div");
let currentIndex = 0;

// 초기 이미지와 버튼 스타일 설정
images[currentIndex].style.display = "block";
buttons[currentIndex].classList.add("active");

// 다음 이미지로 이동하는 함수
function nextSlide() {
  images[currentIndex].style.display = "none";
  buttons[currentIndex].classList.remove("active");
  currentIndex = (currentIndex + 1) % images.length;
  images[currentIndex].style.display = "block";
  buttons[currentIndex].classList.add("active");
}

// 버튼 클릭 이벤트 설정
buttons.forEach((button, index) => {
  button.addEventListener("click", () => {
    images[currentIndex].style.display = "none";
    buttons[currentIndex].classList.remove("active");
    currentIndex = index;
    images[currentIndex].style.display = "block";
    buttons[currentIndex].classList.add("active");
  });
});

// 자동 슬라이드 설정

let popupCloseDate = localStorage.getItem("CloseDate");
const asidetodayclose = document.querySelector(".aside-popup-text-todayclose");

asidetodayclose.addEventListener("click", function () {
  const today = new Date().toLocaleDateString();
  popupCloseDate = today;
  localStorage.setItem("CloseDate", popupCloseDate); //
  checkPopupStatus();
});

function checkPopupStatus() {
  const today = new Date().toLocaleDateString();
  const asidepopup = document.querySelector(".aside-popup");

  if (asidepopup) {
    if (popupCloseDate !== today) {
      asidepopup.style.display = "block";
    } else {
      asidepopup.style.display = "none";
    }
  }
}

checkPopupStatus();
