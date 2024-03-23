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
  asidepopup.style.display = "none";
});

asideheaderx.addEventListener("click", function () {
  asidehidden.style.display = "none";
  asidelogo.style.display = "block";
  asidepopup.style.display = "block";
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
const images = document.querySelector(".aside-popup-image");
const buttons = document.querySelectorAll(".aside-popup-button div");

buttons.forEach((button, index) => {
  button.addEventListener("click", () => {
    images.style.left = `-${index * 231}px`;
    buttons.forEach((button) => button.classList.remove("active"));
    button.classList.add("active");
  });
});

//오늘 하루 열지 않기
// 새 창을 열고 현재 날짜를 표시
// var newWindow = window.open("", "_blank");
// var currentDate = new Date();
// newWindow.document.write(
//   "<h1>현재 날짜: " + currentDate.toDateString() + "</h1>"
// );
