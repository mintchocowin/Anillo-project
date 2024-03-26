let dropBtn = document.querySelectorAll(".menu_h2");
let subMenu = document.querySelectorAll(".sub_menu");
let dropIcon = document.querySelectorAll(".dorp_icon");
console.log(dropBtn, subMenu, dropIcon);

// dropBtn.forEach(function (el) {
//   el.addEventListener("click", toggleAccordion);
// });

// function toggleAccordion(el) {
//   let targetText = el.currentTArget.nextElementSigling.classList;
//   let targetAccicon = el.currentTArget.children[0];
//   let target = el.currentTArget;

//   if (targetText.contains("show")) {
//     targetText.remove("show");
//     targetAccicon.classList.remove("anime");
//     target.classList.remove("menu_h2Active");
//   } else {
//     dropBtn.forEach(function (el) {
//       el.classList.remove("menu_h2Active");

//       allTexts.forEach(function (el) {
//         el.classList.remove("shovw");
//       });

//       accicon.forEach(function (el) {
//         el.classList.remove("anime");
//       });
//     });

//     targetText.add("show");
//     target.classList.add("menu_h2Active");
//     targetAccicon.classList.add("anime");
//   }
// }
