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

const navButtons = document.querySelectorAll(".nav__mobile--links");

const menusDisp = document.querySelectorAll(".nav__products__container");

navButtons.forEach(btn =>{
    btn.addEventListener("click",()=>{
        const navMenuActive = document.getElementById(`${btn.dataset.target}`);
        if(btn.classList.contains("nav__mobile--active")){
            console.log("tiene");
        }else{
            console.log("no tiene");
            navButtons.forEach(btn =>{
                btn.classList.remove("nav__mobile--active");
            })
            btn.classList.add("nav__mobile--active");
            menusDisp.forEach(menu =>{
                menu.classList.remove("nav__products--active");
                menu.classList.add("nav__products--disabled");
            })
            navMenuActive.classList.remove("nav__products--disabled");
            console.log(navMenuActive);
            navMenuActive.classList.add("nav__products--active");
            console.log(navMenuActive);
        }
    })
})




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
image.addEventListener("touchstart",()=>{
        image.childNodes[1].src=paths[index]
    })
image.addEventListener("touchmove",()=>{
        image.childNodes[1].src=paths[index]
    })
image.addEventListener("touchend",()=>{
        image.childNodes[1].src=currentPath;
    
    })
})

window.addEventListener("load",()=>{
    if(window.innerWidth>=1100){
        let splide = new Splide( '.splide', {
            type   : 'loop',
            drag   : 'free',
            perPage: 8,
            
          } );
          
          splide.mount();
    }else{
        let splide = new Splide( '.splide', {
            type   : 'loop',
            drag   : 'free',
            perPage: 4,
            
          } );
          
          splide.mount();
    }
})

/*DESKTOP NAVBAR*/
const buttonsDesk = document.querySelectorAll(".nav__desk--links");
const menuNavs = document.querySelectorAll(".nav__products__container__desk");
buttonsDesk.forEach(btn=>{
    btn.addEventListener("mouseover",()=>{
        console.log(btn.dataset.target);
        const menuDesk = document.getElementById(btn.dataset.target);
        console.log(menuDesk);
        menuDesk.classList.add("menu__desk__visible");
    })

    btn.addEventListener("mouseout",()=>{
        menuNavs.forEach(menu=>{
            menu.classList.remove("menu__desk__visible");
        })
    })
})