//story1

const section1Image = document.querySelector(".section1-main");
const innerHeight = window.innerHeight;
window.addEventListener("scroll", function () {
  const scrollY = window.scrollY;
  const maxScroll = innerHeight; // 이미지를 최대로 확대하길 원하는 스크롤 위치
  const minScale = 1; // 이미지의 최소 스케일
  const maxScale = 1.5; // 이미지의 최대 스케일

  let scale = minScale + (maxScale - minScale) * (scrollY / maxScroll);
  scale = Math.min(maxScale, Math.max(minScale, scale)); // scale 값을 최소 및 최대 스케일 값으로 제한

  section1Image.style.transform = `scale(${scale})`;
});
//story3

const scrollEvent3 = () => {
  const story3Image = document.querySelector(".story-section3-text-hidden");
  const scrollY = window.scrollY;
  const innerHeight = window.innerHeight;
  // console.log(scrollY);
  if (scrollY > innerHeight * 2 + 100 / 2) {
    story3Image.classList.add("active");
    window.removeEventListener("scroll", scrollEvent3);
  }
};
window.addEventListener("scroll", scrollEvent3);

// scroll4;
const scrollEvent4 = () => {
  const story4Image = document.querySelector(".story-section4-image");
  const scrollY = window.scrollY;
  const innerHeight = window.innerHeight;

  if (scrollY > innerHeight * 2.5) {
    story4Image.classList.add("active");
    window.removeEventListener("scroll", scrollEvent4);
  }
};
window.addEventListener("scroll", scrollEvent4);

// 스크롤 이벤트 리스너 등록
// window.addEventListener("scroll", scrollEvent);

// //story4

// const scrollEvent = () => {
//   const hashList = document.querySelector(".hashlist"); // .hashlist 클래스를 가진 요소를 가져옴
//   const scrollY = window.scrollY; // 수직 스크롤 위치를 가져옴
//   if (scrollY > 300) {
//     // 스크롤이 300px 이상 되었을 때
//     hashList.classList.add("active"); // .hashlist 요소에 'active' 클래스 추가
//   } else {
//     // 스크롤이 300px 미만일 때
//     hashList.classList.remove("active"); // .hashlist 요소에서 'active' 클래스 제거
//   }
// };

// // 스크롤 이벤트 리스너 등록
// window.addEventListener("scroll", scrollEvent);
