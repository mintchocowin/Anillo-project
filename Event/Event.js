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

const arrows = document.querySelectorAll(".arrow");
const pages = document.querySelectorAll(".event_page");
const nextButton = document.querySelector("#right");
const prevButton = document.querySelector("#left");
let i = 0;
const changePage = (direction) => {
  if (direction === "next") {
    i++;
    if (i >= pages.length) {
      i = 0;
    }
    reset();
    buttons[i].classList.add("active");
  } else if (direction === "prev") {
    i--;
    if (i < 0) {
      i = pages.length - 1;
    }
    reset();
    buttons[i].classList.add("active");
  }
};

/* arrows.forEach((arrow) => {
  arrow.addEventListener("click", (e) => {
    const direction = e.target.id === "left" ? "prev" : "next";
    changePage(direction);
  });
}); */

/* arrows.forEach((arrow) => {
  arrow.addEventListener("click", function () {
    const direction = e.target.id === "left" ? "prev" : "next";
    changePage(direction);
  });
});
 */
