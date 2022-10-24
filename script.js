let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.headers .navbar ');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
} ;
window.onscroll = () =>{
    navbar.classList.remove('active');
    menu.classList.remove('fa-times');
} ;


var swiper = new Swiper(".home-slider ", {
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + "</span>";
      },
    },
  });



  var swiper = new Swiper(".box-container3", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 50,
      },
    },
  });


//   let loadMoreBtn = document.querySelector('.package .load-more .btn');
//   let currentItem = 3;

//   loadMoreBtn.onclick = () => {
//     let boxes =[...document.querySelectorAll('.package .box-container3 .box')];
//     for(var i = currentItem;i < currentItem + 3;i++){
//         boxes[i].style.display ='inline-block';
//     };
//     currentItem += 3;
//     if(currentItem >= boxes.length){
//         loadMoreBtn.style.display ='none';
//     }
//   }
  