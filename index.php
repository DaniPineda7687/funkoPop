<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.17/dist/css/splide.min.css">
    <link rel="stylesheet" href="styles/main.css">
    <title>FUNKO HOME | Funko</title>
</head>
<body>
    <header>
        <div class="header__main__container">
            
            <div class="section__header__one">
                <div class="header__logo__container">
                    <img src="assets/img/logo.svg" alt="">
                </div>
                <div class="nav__categories__container__desk disabled">
                    <ul>
                        <li class="nav__desk--links" data-target="products__desk"><a href="#">PRODUCTS</a></li>
                        <li class="nav__desk--links" data-target="featured__desk"><a href="#">FEATURED</a></li>
                        <li class="nav__desk--links" data-target="funatics__desk"><a href="#">FUNATICS!</a></li>
                    </ul>
                </div>
            </div>
            <div class="header__menu__container">
                <i class="bi bi-search"></i>
                <i class="bi bi-bag-fill"></i>
                <i class="bi bi-list nav__btn"></i>
            </div>
            <div class="nav__other__options__desk disabled">
                <div class="nav__search">
                    <div class="nav__search__container">
                        <input type="text" name="" id="" placeholder="Search">
                        <i class="bi bi-search"></i>
                    </div>
                </div>
                <div class="nav__profile">
                    <i class="bi bi-person-fill"></i>
                </div>
                <div class="nav__profile">
                    <i class="bi bi-bag-fill"></i>
                </div>
                <div class="nav__country">
                    <i class="bi bi-globe"></i>
                    <p>US</p>
                </div>
            </div>
<!--SECTION DESKTOP-->
            <div class="nav__products__container__desk disabled" id="products__desk">
                <article class="product__nav">
                    <div class="product__img">
                        <img src="assets/img/nav__product-1.png" alt="">
                    </div>
                    <div class="product__description">
                        <p class="product__collection">HEROES</p>
                        <p class="more__description">& Villains</p>
                    </div>
                </article>
    
                <article class="product__nav">
                    <div class="product__img">
                        <img src="assets/img/nav__product-2.png" alt="">
                    </div>
                    <div class="product__description">
                        <p class="product__collection">ANIMATION</p>
                        <p class="more__description">& Cartoons</p>
                    </div>
                </article>
    
                <article class="product__nav">
                    <div class="product__img">
                        <img src="assets/img/nav__product-3.png" alt="">
                    </div>
                    <div class="product__description">
                        <p class="product__collection">Movies</p>
                        <p class="more__description">& TV</p>
                    </div>
                </article>
    
                <article class="product__nav">
                    <div class="product__img">
                        <img src="assets/img/nav__product-4.png" alt="">
                    </div>
                    <div class="product__description">
                        <p class="product__collection">ICONS</p>
                        <p class="more__description">Sports & More</p>
                    </div>
                </article>
    
                <article class="product__nav">
                    <div class="product__img">
                        <img src="assets/img/nav__product-5.png" alt="">
                    </div>
                    <div class="product__description">
                        <p class="product__collection">SHOP</p>
                        <p class="more__description">By Type</p>
                    </div>
                </article>
    
                <article class="product__nav">
                    <div class="product__img">
                        <img src="assets/img/nav__product-6.png" alt="">
                    </div>
                    <div class="product__description">
                        <p class="product__collection">SHOP ALL</p>
                    </div>
                </article>
            </div>

            <div class="nav__products__container__desk disabled" id="featured__desk">
                <article class="product__nav">
                    <div class="product__img">
                        <img src="assets/img/nav__product-7.png" alt="">
                    </div>
                    <div class="product__description">
                        <p class="product__collection">NEW</p>
                        <p class="more__description">Releases</p>
                    </div>
                </article>
    
                <article class="product__nav">
                    <div class="product__img">
                        <img src="assets/img/nav__product-8.png" alt="">
                    </div>
                    <div class="product__description">
                        <p class="product__collection">EXCLUSIVES</p>
                        <p class="more__description">Collectibles</p>
                    </div>
                </article>
    
                <article class="product__nav">
                    <div class="product__img">
                        <img src="assets/img/nav__product-9.png" alt="">
                    </div>
                    <div class="product__description">
                        <p class="product__collection">BEST SELLERS</p>
                        <p class="more__description">Collectibles</p>
                    </div>
                </article>
    
                <article class="product__nav">
                    <div class="product__img">
                        <img src="assets/img/nav__product-10.png" alt="">
                    </div>
                    <div class="product__description">
                        <p class="product__collection">BACK IN STOCK</p>
                        <p class="more__description">Collectibles</p>
                    </div>
                </article>
    
                <article class="product__nav">
                    <div class="product__img">
                        <img src="assets/img/nav__product-11.png" alt="">
                    </div>
                    <div class="product__description">
                        <p class="product__collection">COMING SOON</p>
                        <p class="more__description">Collectibles</p>
                    </div>
                </article>
            </div>
    
            <div class="nav__products__container__desk disabled" id="funatics__desk">
                <article class="product__nav">
                    <div class="product__img">
                        <img src="assets/img/nav__product-12.png" alt="">
                    </div>
                    <div class="product__description">
                        <p class="product__collection">POP!"</p>
                        <p class="more__description">Yourself</p>
                    </div>
                </article>
    
                <article class="product__nav">
                    <div class="product__img">
                        <img src="assets/img/nav__product-13.png" alt="">
                    </div>
                    <div class="product__description">
                        <p class="product__collection">FUN TV</p>
                        <p class="more__description">Videos & More...</p>
                    </div>
                </article>
    
                <article class="product__nav">
                    <div class="product__img">
                        <img src="assets/img/nav__product-14.png" alt="">
                    </div>
                    <div class="product__description">
                        <p class="product__collection">FUNKO BLOG</p>
                        <p class="more__description">Your Daily Dose</p>
                    </div>
                </article>
            </div>
            <!------------------------->


            <nav class="nav__container">
                <div class="nav__header__container">
                    <div class="nav__profile">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div class="nav__close--btn">
                        <i class="bi bi-x"></i>
                    </div>
                </div>
                <div class="nav__categories__container">
                    <ul>
                        <li class="nav__mobile--links nav__mobile--active" data-target="products"><a href="#">PRODUCTS</a></li>
                        <li class="nav__mobile--links" data-target="featured"><a href="#">FEATURED</a></li>
                        <li class="nav__mobile--links" data-target="funatics"><a href="#">FUNATICS!</a></li>
                    </ul>
                </div>
                <div class="nav__products__container nav__products--active" id="products">
                    <article class="product__nav">
                        <div class="product__img">
                            <img src="assets/img/nav__product-1.png" alt="">
                        </div>
                        <div class="product__description">
                            <p class="product__collection">HEROES</p>
                            <p class="more__description">& Villains</p>
                        </div>
                    </article>
        
                    <article class="product__nav">
                        <div class="product__img">
                            <img src="assets/img/nav__product-2.png" alt="">
                        </div>
                        <div class="product__description">
                            <p class="product__collection">ANIMATION</p>
                            <p class="more__description">& Cartoons</p>
                        </div>
                    </article>
        
                    <article class="product__nav">
                        <div class="product__img">
                            <img src="assets/img/nav__product-3.png" alt="">
                        </div>
                        <div class="product__description">
                            <p class="product__collection">Movies</p>
                            <p class="more__description">& TV</p>
                        </div>
                    </article>
        
                    <article class="product__nav">
                        <div class="product__img">
                            <img src="assets/img/nav__product-4.png" alt="">
                        </div>
                        <div class="product__description">
                            <p class="product__collection">ICONS</p>
                            <p class="more__description">Sports & More</p>
                        </div>
                    </article>
        
                    <article class="product__nav">
                        <div class="product__img">
                            <img src="assets/img/nav__product-5.png" alt="">
                        </div>
                        <div class="product__description">
                            <p class="product__collection">SHOP</p>
                            <p class="more__description">By Type</p>
                        </div>
                    </article>
        
                    <article class="product__nav">
                        <div class="product__img">
                            <img src="assets/img/nav__product-6.png" alt="">
                        </div>
                        <div class="product__description">
                            <p class="product__collection">SHOP ALL</p>
                        </div>
                    </article>
                </div>
        
                <div class="nav__products__container nav__products--disabled" id="featured">
                    <article class="product__nav">
                        <div class="product__img">
                            <img src="assets/img/nav__product-7.png" alt="">
                        </div>
                        <div class="product__description">
                            <p class="product__collection">NEW</p>
                            <p class="more__description">Releases</p>
                        </div>
                    </article>
        
                    <article class="product__nav">
                        <div class="product__img">
                            <img src="assets/img/nav__product-8.png" alt="">
                        </div>
                        <div class="product__description">
                            <p class="product__collection">EXCLUSIVES</p>
                            <p class="more__description">Collectibles</p>
                        </div>
                    </article>
        
                    <article class="product__nav">
                        <div class="product__img">
                            <img src="assets/img/nav__product-9.png" alt="">
                        </div>
                        <div class="product__description">
                            <p class="product__collection">BEST SELLERS</p>
                            <p class="more__description">Collectibles</p>
                        </div>
                    </article>
        
                    <article class="product__nav">
                        <div class="product__img">
                            <img src="assets/img/nav__product-10.png" alt="">
                        </div>
                        <div class="product__description">
                            <p class="product__collection">BACK IN STOCK</p>
                            <p class="more__description">Collectibles</p>
                        </div>
                    </article>
        
                    <article class="product__nav">
                        <div class="product__img">
                            <img src="assets/img/nav__product-11.png" alt="">
                        </div>
                        <div class="product__description">
                            <p class="product__collection">COMING SOON</p>
                            <p class="more__description">Collectibles</p>
                        </div>
                    </article>
                </div>
        
                <div class="nav__products__container nav__products--disabled" id="funatics">
                    <article class="product__nav">
                        <div class="product__img">
                            <img src="assets/img/nav__product-12.png" alt="">
                        </div>
                        <div class="product__description">
                            <p class="product__collection">POP!"</p>
                            <p class="more__description">Yourself</p>
                        </div>
                    </article>
        
                    <article class="product__nav">
                        <div class="product__img">
                            <img src="assets/img/nav__product-13.png" alt="">
                        </div>
                        <div class="product__description">
                            <p class="product__collection">FUN TV</p>
                            <p class="more__description">Videos & More...</p>
                        </div>
                    </article>
        
                    <article class="product__nav">
                        <div class="product__img">
                            <img src="assets/img/nav__product-14.png" alt="">
                        </div>
                        <div class="product__description">
                            <p class="product__collection">FUNKO BLOG</p>
                            <p class="more__description">Your Daily Dose</p>
                        </div>
                    </article>
                </div>
        
                <div class="nav__country">
                    <i class="bi bi-globe"></i>
                    <p>UNITED STATES</p>
                </div>
            </nav>
            <div class="nav__background"></div>
        </div>
    </header>
    <main class="main__content">
        <section class="main__promotions">
            <img src="/assets/img/promotion.png" alt="" srcset="">
            <p>New Exclusive: FIVE NIGHTS AT FREDDY'S PEZ 4-PACK</p>
        </section>

        <section class="main__section">
            <div class="main__section__content">
                <p class="main__subtext">FIVE NIGHTS AT FREDDY???S</p>
                <p class="main__title">SNAP TO IT & FIND YOUR TREASURE!</p>
                <p class="main__subtext">Keep an Eye on Our Video Games Collectibles and Catch Them Before They Move!</p>
                <a href="" class="main__section__button">SHOP COLLECTION</a>
            </div>
            <div class="main__section__img">
                <img src="/assets/img/main__image.png" alt="">
            </div>
        </section>

        <section class="section__brands splide" aria-label="Splide Basic HTML Example">
            <div class="splide__track brand__container">
                  <ul class="splide__list">
                      <li class="splide__slide">
                        <img src="/assets/img/brand__1.png" alt="">
                      </li>
                      <li class="splide__slide">
                        <img src="/assets/img/brand__2.png" alt="">
                      </li>
                      <li class="splide__slide">
                        <img src="/assets/img/brand__3.png" alt="">
                      </li>
                      <li class="splide__slide">
                        <img src="/assets/img/brand__4.png" alt="">
                      </li>
                      <li class="splide__slide">
                        <img src="/assets/img/brand__5.png" alt="">
                      </li>
                      <li class="splide__slide">
                        <img src="/assets/img/brand__6.png" alt="">
                      </li>
                      <li class="splide__slide">
                        <img src="/assets/img/brand__7.png" alt="">
                      </li>
                      <li class="splide__slide">
                        <img src="/assets/img/brand__8.png" alt="">
                      </li>
                      <li class="splide__slide">
                        <img src="/assets/img/brand__9.png" alt="">
                      </li>
                      <li class="splide__slide">
                        <img src="/assets/img/brand__10.png" alt="">
                      </li>
                      <li class="splide__slide">
                        <img src="/assets/img/brand__11.png" alt="">
                      </li>
                      <li class="splide__slide">
                        <img src="/assets/img/brand__12.png" alt="">
                      </li>
                      <li class="splide__slide">
                        <img src="/assets/img/brand__13.png" alt="">
                      </li>
                      <li class="splide__slide">
                        <img src="/assets/img/brand__14.png" alt="">
                      </li>
                      <li class="splide__slide">
                        <img src="/assets/img/brand__15.png" alt="">
                      </li>
                      <li class="splide__slide">
                        <img src="/assets/img/brand__16.png" alt="">
                      </li>
                      <li class="splide__slide">
                        <img src="/assets/img/brand__17.png" alt="">
                      </li>
                      <li class="splide__slide">
                        <img src="/assets/img/brand__18.png" alt="">
                      </li>
                      
                  </ul>
            </div>
          </section>

        <section class="collections__container">
            <div class="collection">
                <div class="collection__content">
                    <p class="collection__title">FIVE NIGHTS AT FREDDY???S</p>
                    <p class="collection__description">SNAP TO IT & FIND YOUR TREASURE!</p>
                    <a href="" class="collection__btn">SHOP COLLECTION</a>
                </div>
                <div class="collection__img collection__img__1">
                    
                </div>
            </div>
            <div class="collection collection__2">
                <div class="collection__content">
                    <p class="collection__title">A SHEER CREAM</p>
                    <p class="collection__description">Dig into Our Horror Selection</p>
                    <a href="" class="collection__btn">SHOP COLLECTION</a>
                </div>
                <div class="collection__img collection__img__2">
                    
                </div>
            </div>
        </section>

        <section class="section__products">
            <h2>NEW RELEASES</h2>
            <div class="products__container">
                <div class="product__card">
                    <div class="product__card__img">
                        <img src="/assets/img/promotion.png" alt="">
                    </div>
                    <div class="product__card__description">
                        <p class="product__description--collection">
                            POP! PEZ
                        </p>
                        <p class="product__description--name">
                            FIVE NIGHTS AT FREDDY'S PEZ 4-PACK
                        </p>
                        <p class="product__description--price">
                            $20
                        </p>
                    </div>
                    <a href="" class="add__cart--btn">ADD TO CART</a>
                    <div class="ticket__new">NEW</div>
                </div>

                <div class="product__card">
                    <div class="product__card__img">
                        <img src="/assets/img/product__main__2.webp" alt="">
                    </div>
                    <div class="product__card__description">
                        <p class="product__description--collection">
                            SNAPS!
                        </p>
                        <p class="product__description--name">
                            SNAPS! Foxy - Five Nights at Freddy's
                        </p>
                        <p class="product__description--price">
                            $9
                        </p>
                    </div>
                    <a href="" class="add__cart--btn">ADD TO CART</a>
                    <div class="ticket__new">NEW</div>
                </div>

                <div class="product__card">
                    <div class="product__card__img">
                        <img src="/assets/img/product__main__3.webp" alt="">
                    </div>
                    <div class="product__card__description">
                        <p class="product__description--collection">
                            POP! PEZ
                        </p>
                        <p class="product__description--name">
                            FIVE NIGHTS AT FREDDY'S PEZ 4-PACK
                        </p>
                        <p class="product__description--price">
                            $20
                        </p>
                    </div>
                    <a href="" class="add__cart--btn">ADD TO CART</a>
                    <div class="ticket__new">NEW</div>
                </div>

                <div class="product__card">
                    <div class="product__card__img">
                        <img src="/assets/img/product__main__4.webp" alt="">
                    </div>
                    <div class="product__card__description">
                        <p class="product__description--collection">
                            POP! PEZ
                        </p>
                        <p class="product__description--name">
                            FIVE NIGHTS AT FREDDY'S PEZ 4-PACK
                        </p>
                        <p class="product__description--price">
                            $20
                        </p>
                    </div>
                    <a href="" class="add__cart--btn">ADD TO CART</a>
                    <div class="ticket__new">NEW</div>
                </div>
            </div>
        </section>

        <section class="others__collections">
            <div class="others__collections__content">
                <p class="others__collections__title">
                    WELCOME TO WONDERLAND
                </p>
                <p class="others__collections__description">
                    Shop New Arrivals on Loungefly!
                </p>
                <a href="" class="others__collections__btn">SHOP COLLECTION</a>    
            </div>
            <div class="others__collections__img">
                <img src="/assets/img/others__collections__img__2.png" alt="">
            </div>
        </section>

    </main>
    <section class="social__links">
        <div class="social__links__logo">
            <img src="/assets/img/logo.svg" alt="">
        </div>
        <div class="social__links__face">
            <i class="bi bi-facebook"></i>
        </div>
        <div class="social__links__twitter">
            <i class="bi bi-twitter"></i>
        </div>
        <div class="social__links__instagram">
            <i class="bi bi-instagram"></i>
        </div>
        <div class="social__links__youtube">
            <i class="bi bi-youtube"></i>
        </div>
    </section>

    <section class="apps">
        <div class="app__1">
            <img src="/assets/img/app1.png" alt="">
        </div>
        <div class="app__2">
            <img src="/assets/img/app2.png" alt="">
        </div>
    </section>
    <footer>
        <div class="footer__section__container">

            <div class="account footer__section">
                <p class="footer__section__title">ACCOUNT</p>
                <ul>
                    <li><a href="">Account</a></li>
                    <li><a href="">Order History</a></li>
                    <li><a href="">Pop Yourself</a></li>
                    <li><a href="">Funko Fan Club</a></li>
                    <li><a href="">Notifications Settings</a></li>
                </ul>
            </div>
            <div class="account footer__section">
                <p class="footer__section__title">ASSISTANCE</p>
                <ul>
                    <li><a href="">Support Center</a></li>
                    <li><a href="">Returns Policy</a></li>
                    <li><a href="">Cancellation Policy</a></li>
                    <li><a href="">Replacement Policy</a></li>
                    <li><a href="">Accesibility Statement</a></li>
                    <li><a href="">Terms & Conditions</a></li>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Resellers</a></li>
                </ul>
            </div>
            <div class="account footer__section">
                <p class="footer__section__title">ABOUT FUNKO</p>
                <ul>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Newsroom</a></li>
                    <li><a href="">Funko Cares</a></li>
                    <li><a href="">Investors</a></li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Store Locator</a></li>
                </ul>
            </div>
            <div class="account footer__section">
                <p class="footer__section__title">CONNECT WITH US</p>
                <ul>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Twitter</a></li>
                    <li><a href="">Instagram</a></li>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">YouTube</a></li>
                    <li><a href="">Digital Pop!</a></li>
                    <li><a href="">Loungenfly</a></li>
                    <li><a href="">Funko Games</a></li>
                </ul>
            </div>
            <div class="rights">
                <div class="footer__country">
                    <i class="bi bi-globe"></i>
                    <p>UNITED STATES</p>
                </div>
                <p class="rights-text">?? Funko. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.17/dist/js/splide.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
