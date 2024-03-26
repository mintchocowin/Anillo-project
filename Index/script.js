//section1 slide
// document.addEventListener("DOMContentLoaded", function () {
//   const arrows = document.querySelectorAll(".index-section02-arrows i");
//   const images = document.querySelectorAll(".index-section02-image div");
//   let currentImageIndex = 0;
// });

//슬라이드
document.addEventListener("DOMContentLoaded", function () {
  const arrows = document.querySelectorAll(".index-section02-arrows i");
  const productTexts = document.querySelectorAll(
    ".index-section02-product-info > div"
  );
  const images = document.querySelectorAll(".index-section02-image div");
  let currentIndex = 0;

  // 초기화: 첫 번째 상품 텍스트와 이미지만 표시
  showContent(currentIndex);

  arrows.forEach((arrow, index) => {
    arrow.addEventListener("click", function () {
      if (index === 0) {
        currentIndex =
          currentIndex === 0 ? productTexts.length - 1 : currentIndex - 1;
      } else {
        currentIndex =
          currentIndex === productTexts.length - 1 ? 0 : currentIndex + 1;
      }
      showContent(currentIndex);
    });
  });

  function showContent(index) {
    // 모든 텍스트와 이미지 숨김
    productTexts.forEach((text) => {
      text.style.display = "none";
    });
    images.forEach((image) => {
      image.style.display = "none";
    });

    // 현재 인덱스에 해당하는 텍스트와 이미지 표시
    productTexts[index].style.display = "block";
    images[index].style.display = "block";
  }
});
//section2 문서 가져오기
// document.addEventListener("DOMContentLoaded", function () {
//   const arrows = document.querySelectorAll(".index-section02-arrows i");
//   const productInfo = document.querySelector(".index-section02-product-info");
//   const imageContainer = document.querySelector(".index-section02-image div");
//   const shopButton = document.querySelector(".index-section02-text button a");

//   let currentIndex = 0;

//   // JSON 파일 로드
//   fetch("json.js")
//     .then((response) => response.json())
//     .then((data) => {
//       showProduct(data.products[currentIndex]);
//     })
//     .catch((error) => console.error("Error loading JSON:", error));

//   arrows.forEach((arrow, index) => {
//     arrow.addEventListener("click", function () {
//       currentIndex = index === 0 ? currentIndex - 1 : currentIndex + 1;
//       if (currentIndex < 0) {
//         currentIndex = 4;
//       } else if (currentIndex > 4) {
//         currentIndex = 0;
//       }
//       fetch("json.js")
//         .then((response) => response.json())
//         .then((data) => {
//           showProduct(data.products[currentIndex]);
//         })
//         .catch((error) => console.error("Error loading JSON:", error));
//     });
//   });

//   function showProduct(product) {
//     // 제품 정보 업데이트
//     productInfo.innerHTML = `
//       <div class="index-section02-text01">
//         <p>${product.title}</p>
//         <p>${product.description}</p>
//         <p>${product.price}</p>
//       </div>
//     `;

//     // 이미지 업데이트
//     imageContainer.innerHTML = `<img src="${product.imageSrc}" alt="" />`;

//     // 쇼핑 버튼 업데이트
//     shopButton.href = product.shopLink;
//   }
// });

document.addEventListener("DOMContentLoaded", function () {
  // AJAX 요청을 통해 JSON 데이터 가져오기
  fetch("json.js")
    .then((response) => response.json())
    .then((data) => {
      // "index-section02-text01" 클래스에 속한 p 태그들에 제품 정보 채우기
      const text01Elements = document.querySelectorAll(
        ".index-section02-text01 p"
      );
      text01Elements.forEach((element, index) => {
        element.textContent =
          data.products[index].title + ": " + data.products[index].description;
      });

      // "index-section02-image" 클래스에 속한 img 태그에 이미지 소스 채우기
      const imageContainer = document.querySelector(
        ".index-section02-image div"
      );
      const imageElements = imageContainer.querySelectorAll("img");
      imageElements.forEach((element, index) => {
        element.src = data.products[index].imageSrc;
        element.alt = data.products[index].title;
      });

      // "SHOP NOW" 버튼에 링크 채우기
      const shopButton = document.querySelector(".index-section02-text button");
      shopButton.parentElement.href = data.products[0].shopLink; // 여기서는 첫 번째 제품의 링크를 사용하겠습니다.
    })
    .catch((error) => console.error("Error loading JSON:", error));
});
//section5 parallax

const parallax = document.querySelector(".index-section05");

window.addEventListener("scroll", function () {
  const offset = window.pageYOffset;
  parallax.style.backgroundPositionY = offset * 0.7 + "px";
});
