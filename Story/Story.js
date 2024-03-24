//story3

const scrollEvent = () => {
  const hashList = document.querySelector(".hashlist"); // .hashlist 클래스를 가진 요소를 가져옴
  const scrollY = window.scrollY; // 수직 스크롤 위치를 가져옴
  if (scrollY > 300) {
    // 스크롤이 300px 이상 되었을 때
    hashList.classList.add("active"); // .hashlist 요소에 'active' 클래스 추가
  } else {
    // 스크롤이 300px 미만일 때
    hashList.classList.remove("active"); // .hashlist 요소에서 'active' 클래스 제거
  }
};

// 스크롤 이벤트 리스너 등록
window.addEventListener("scroll", scrollEvent);

//story4

const scrollEvent = () => {
  const hashList = document.querySelector(".hashlist"); // .hashlist 클래스를 가진 요소를 가져옴
  const scrollY = window.scrollY; // 수직 스크롤 위치를 가져옴
  if (scrollY > 300) {
    // 스크롤이 300px 이상 되었을 때
    hashList.classList.add("active"); // .hashlist 요소에 'active' 클래스 추가
  } else {
    // 스크롤이 300px 미만일 때
    hashList.classList.remove("active"); // .hashlist 요소에서 'active' 클래스 제거
  }
};

// 스크롤 이벤트 리스너 등록
window.addEventListener("scroll", scrollEvent);
