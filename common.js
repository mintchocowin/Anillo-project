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

//팝업 슬라이드



//팝업

// let popupCloseDate = localStorage.getItem("CloseDate");
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
