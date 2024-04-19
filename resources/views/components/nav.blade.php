<header id="header" class="header style-02 header-dark header-sticky header-transparent" style="padding:40px ">
    <div class="header-wrap-stick" style="height: 90px;">
        <div class="header-position">
            <div class="header-middle">
                <div class="lynessa-menu-wapper"></div>
                <div class="header-middle-inner">
                    <div class="header-search-menu">
                        <div class="block-menu-bar">
                            <a class="menu-bar menu-toggle" href="#">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="header-logo-nav d-flex align-items-center">
                        <div class="header-logo">
                            <a href="#">
                                <img alt="rawaaBeauty" style="height: 47px;"
                                    src="/assets/imgs/rounded-logo.png"
                                    class="logo sticky-logo">
                            </a>
                        </div>
                        <div class="box-header-nav menu-nocenter" style="margin: auto">
                            <ul id="menu-primary-menu"
                                class="clone-main-menu lynessa-clone-mobile-menu lynessa-nav main-menu">
                                <li id="menu-item-230"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu ">
                                    <a class="lynessa-menu-item-title black-links tajawal"
                                        href="/">Accueil</a>
                                </li>

                                <li id="menu-item-230"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu ">
                                    <a class="lynessa-menu-item-title black-links tajawal"
                                        href="/">Inspirations</a>
                                </li>
                                <li id="menu-item-230"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu ">
                                    <a class="lynessa-menu-item-title black-links tajawal" title="Collections"  href="/about">À propos</a>
                                </li>
                                <li id="menu-item-230" class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 item-megamenu ">
                                    <a class="lynessa-menu-item-title black-links tajawal"
                                        href="//contact">Contactez nous</a>
                                </li>

                                <li class="menu-item lynessa-dropdown block-language menu_lang" style="display: none">
                                    <span class="toggle-submenu"></span>
                                    <ul class="sub-menu">
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                   @livewire('side-cart')
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile">
        <div class="header-mobile-left">
            <div class="block-menu-bar">
                <a class="menu-bar menu-toggle" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>

            <ul class="wpml-menu">


            </ul>
        </div>
        <div class="header-mobile-mid">
            <div class="header-logo">
                <a href="/"><img alt="Rawaabeauty" src="https://rawaabeauty.com/assets/web/images/rb-black.png"
                        class="logo"></a>
            </div>
        </div>
        <div class="header-mobile-right">
            <div class="header-control-inner">
                <div class="meta-dreaming">


                    <div class="block-minicart block-dreaming lynessa-mini-cart lynessa-dropdown card_header_container"
                        id="">
                        <div class="shopcart-dropdown block-cart-link" data-lynessa="lynessa-dropdown">
                            <a class="block-link link-dropdown" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#272626"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M17 17h-11v-14h-2" />
                                    <path d="M6 5l14 1l-1 7h-13" />
                                </svg>
                                <span class="count">0</span>
                            </a>
                        </div>
                        <div class="widget lynessa widget_shopping_cart" id="card_container">
                            <div class="widget_shopping_cart_content">
                                <h3 class="minicart-title tajawal">Mon panier<span
                                        class="minicart-number-items">0</span></h3>
                                <div class="scroll-wrapper lynessa-mini-cart cart_list product_list_widget"
                                    style="position: relative;">
                                    <ul class="lynessa-mini-cart cart_list product_list_widget scroll-content"
                                        style="height: 100vh; margin-bottom: 0px; margin-right: 0px; max-height: none;">
                                    </ul>
                                    <div class="scroll-element scroll-x">
                                        <div class="scroll-element_outer">
                                            <div class="scroll-element_size"></div>
                                            <div class="scroll-element_track"></div>
                                            <div class="scroll-bar" style="width: 96px;"></div>
                                        </div>
                                    </div>
                                    <div class="scroll-element scroll-y">
                                        <div class="scroll-element_outer">
                                            <div class="scroll-element_size"></div>
                                            <div class="scroll-element_track"></div>
                                            <div class="scroll-bar" style="height: 96px; top: 0px;"></div>
                                        </div>
                                    </div>
                                </div>

                                <p class="lynessa-mini-cart__buttons buttons">
                                    <a href="//card"
                                        class="button lynessa-forward tajawal">Panier</a>
                                    <a href="//card/checkout"
                                        class="button checkout lynessa-forward tajawal">Commander maintenant</a>
                                </p>
                            </div>
                        </div>

                    </div>





                </div>
            </div>
        </div>
    </div>
</header>
