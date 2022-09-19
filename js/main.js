const navBtnOpen = document.querySelector(".nav__btn");
const navBtnClose = document.querySelector(".nav__close--btn");
const navBar = document.querySelector(".nav__container");
const header = document.querySelector(".header__logo__container");
const mainContent = document.querySelector(".main__content");
navBtnOpen.addEventListener("click",()=>{
    navBar.classList.toggle("nav__active");
    document.body.classList.toggle("nav-open");
    header.classList.toggle("nav__blur");
    mainContent.classList.toggle("nav__blur");
});
navBtnClose.addEventListener("click",()=>{
    navBar.classList.toggle("nav__active");
    document.body.classList.toggle("nav-open");
    header.classList.toggle("nav__blur");
    mainContent.classList.toggle("nav__blur");
});




let splide = new Splide( '.splide', {
    type   : 'loop',
    drag   : 'free',
    perPage: 3,
    
  } );
  
  splide.mount();

const paths = ["/assets/img/product__1.webp","/assets/img/product__2.webp","/assets/img/product__3.webp","/assets/img/product__4.webp"]

const imagesContainer = document.querySelectorAll(".product__card__img");
imagesContainer.forEach((image,index) =>{
    const currentPath = image.childNodes[1].src;
    image.addEventListener("mouseover",()=>{
        image.childNodes[1].src=paths[index]
    })
    image.addEventListener("mouseout",()=>{
        image.childNodes[1].src=currentPath;
    
    })
image.addEventListener("touchenter",()=>{
        image.childNodes[1].src=paths[index]
    })
image.addEventListener("touchend",()=>{
        image.childNodes[1].src=currentPath;
    
    })
})
