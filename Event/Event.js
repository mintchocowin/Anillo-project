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
