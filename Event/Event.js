const goingBtn = document.querySelectorAll(".goingbtn");
const endBtn = document.querySelectorAll(".endbtn");
const eventGoing = document.querySelector("#event_going");
const eventEnd = document.querySelector("#event_end");

for (let i = 0; i < goingBtn.length; i++) {
  goingBtn[i].addEventListener("click", () => {
    eventGoing.style.display = "block";
    eventEnd.style.display = "none";
  });
}

for (let i = 0; i < endBtn.length; i++) {
  endBtn[i].addEventListener("click", () => {
    eventGoing.style.display = "none";
    eventEnd.style.display = "block";
  });
}

function buttonOn(clickedButton) {
  buttons.forEach((button) => {
    button.classList.remove("active");
  });
  clickedButton.classList.add("active");
}

const buttons = document.querySelectorAll(".page-button");
buttons.forEach((button) => {
  button.addEventListener("click", (e) => {
    const clickedButton = e.target;
    const pageNumber = clickedButton.innerText;
    pageOn(pageNumber);
    buttonOn(clickedButton);
  });
});

const pageOn = (pageNumber) => {
  const pages = document.querySelectorAll(".event_page");
  pages.forEach((page) => {
    page.style.display = "none";
  });
  const pageSelected = document.querySelector(`#page${pageNumber}`);
  if (pageSelected) {
    pageSelected.style.display = "block";
  }
};

const prevPageButton = document.getElementById("left");
const nextPageButton = document.getElementById("right");
const pageButtons = document.querySelectorAll(".page-button");
let currentPage = 1;

// 이전 페이지로 이동
prevPageButton.addEventListener("click", function () {
  if (currentPage > 1) {
    currentPage--;
    updatePageButtons();
  }
});

// 다음 페이지로 이동
nextPageButton.addEventListener("click", function () {
  if (currentPage < pageButtons.length) {
    currentPage++;
    updatePageButtons();
  }
});

// 페이지 버튼 클릭 시 해당 페이지로 이동
pageButtons.forEach((button) => {
  button.addEventListener("click", function () {
    currentPage = parseInt(button.textContent);
    updatePageButtons();
  });
});

// 페이지 버튼 활성화 상태 업데이트
function updatePageButtons() {
  pageButtons.forEach((button) => {
    const pageNumber = parseInt(button.textContent);
    if (pageNumber === currentPage) {
      button.classList.add("active");
    } else {
      button.classList.remove("active");
    }
  });
}

// const prevButton = document.querySelector("#left");
// const nextButton = document.querySelector("#right");

// const moveSelectedPageHighlight = () => {
//   const pageNumberButtons = document.querySelectorAll(".page-button");
//   pageNumberButtons.forEach((numberButton) => {
//     if (numberButton.classList.contains("active")) {
//       numberButton.classList.remove("active");
//     }
//   });
//   pageNumberButtons[currentPage - 1].classList.add("active");
// };
// /**
//  * 이전 버튼 클릭 리스너
//  */
// let currentPage = 1;
// prevButton.addEventListener("click", () => {
//   if (currentPage > 1) {
//     currentPage -= 1;
//     setPageOf(currentPage);
//     moveSelectedPageHighlight();
//   }
// });

// /**
//  * 이후 버튼 클릭 리스너
//  */
// nextButton.addEventListener("click", () => {
//   if (currentPage < getTotalPageCount()) {
//     currentPage += 1;
//     setPageOf(currentPage);
//     moveSelectedPageHighlight();
//   }
// });

// const arrows = document.querySelector(".arrow");

// const pages = document.querySelectorAll(".event_page");
// console.log(pages);
// let i = 0;
// const changePage = (direction) => {
//   if (direction === "next") {
//     i++;
//     if (i >= pages.length) {
//       i = 0;
//     }
//     /*     reset(); */
//     buttonOn[i].classList.add("active");
//   } else if (direction === "prev") {
//     i--;
//     if (i < 0) {
//       i - pages.length - 1;
//     }
//     /*     reset(); */
//     buttonOn[i].classList.add("active");
//   }
// };

// arrows.forEach((arrow) => {
//   arrow.addEventListener("click", (e) => {
//     const direction = e.target.id === "left" ? "prev" : "next";
//     changePage(direction);
//   });
// });

// const tabOngoing = document.querySelector("#event_going");
// const tabEnded = document.querySelector("#event_end");
// const endedContent = document.querySelector("#event_end");

// // 페이지네이션 요소
// const prevButton = document.querySelector("#left");
// const nextButton = document.querySelector("#right");
// const pageNumButtons = document.querySelectorAll(".page-button");
// const contentArea = document.querySelectorAll(".event_page");

// let currentPage = 1; // 현재 페이지 번호

// // 탭 전환 기능
// tabOngoing.addEventListener("click", function () {
//   endedContent.style.display = "none";
// });

// tabEnded.addEventListener("click", function () {
//   endedContent.style.display = "block";
//   updatePage(currentPage); // 종료 탭을 클릭할 때 현재 페이지 컨텐츠 표시
// });

// // 페이지 업데이트 함수
// function updatePage(page) {
//   currentPage = page;
//   contentArea.textContent = pagesContent[currentPage - 1];
// }

// // 페이지 번호 버튼 이벤트
// pageNumButtons.forEach((button) => {
//   button.addEventListener("click", function () {
//     updatePage(parseInt(this.value));
//   });
// });

// // 이전 페이지 버튼
// prevButton.addEventListener("click", function () {
//   if (currentPage > 1) {
//     updatePage(currentPage - 1);
//   }
// });

// // 다음 페이지 버튼
// nextButton.addEventListener("click", function () {
//   if (currentPage < pagesContent.length) {
//     updatePage(currentPage + 1);
//   }
// });
