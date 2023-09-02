@extends("layouts.app")

@section("show")
    

<div class="header">
        <div class="simple__banner">
            <div class="simple__banner-text">
                <a class="simple__banner-link"  href="https://easycep.com/kategori/cep-telefonu-1">
                    TÜM KREDİ KARTLARINDA GEÇERLİ PEŞİN FİYATINA 12 TAKSİT! 
                </a>
            </div>
        </div>
        <div class="container" >
            <div class="header-top d-flex justify-content-between ">
                <div class="header-top--nav" >
                    <ul class=" align-items-center ">
                        <li class ="">
                            <a href="">
                                <i class="bi bi-box-seam me-2"></i>
                            Sipariş Takibi   
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="bi bi-shop-window me-2"></i>
                                Mağazalar
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="header-top--user position-relative " >
                    <div class="header-top-myAcconut  d-flex" >
                        <div class="dropdown ">
                            <a href="#" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" title="Giriş Yap">
                                <i class="bi bi-person-circle me-2"></i>
                                <span class=" d-lg-flex">
                                    Giriş Yap
                                </span>
                                <i class="bi bi-chevron-down ms-2 d-none d-lg-flex"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end  p-4 slideDownIn">
                                <div class="header__top--userLogin d-grid gap-2">
                                    <a href="https://easycep.com/login" class="btn btn-color-ferry" title="Giriş Yap">Giriş Yap</a>
                                    <a href="https://easycep.com/register" class="btn btn-color-ferry" title="Üye Ol">Üye Ol</a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" aria-label="Sepet">
                                <i class="bi bi-bag-fill me-2"></i>
                                <span class=" d-lg-inline-flex">&nbsp;&nbsp;Sepetim</span>
                                <span class="badge bg-danger">1</span>
                            </button>
                            <div class="basketContent dropdown-menu dropdown-menu-end p-3 slideDownIn" style="">
                                <!--<div class="basketCountText pt-3 pb-3 text-center">
                                    <lottie-player class="lottie-icon lottie-basket" src="https://easycep.com/assets/dist/lottie/empty-basket.json?v=1.2.4"></lottie-player>
                                    <p class="isEmpty mt-3">Sepetiniz Boş</p>
                                </div>-->
                                <div class="position-relative" >
                                    <div class="basketCountText2 mb-2">
                                        Sepetinizde 
                                        <strong>1 adet</strong> 
                                        ürün var
                                    </div>
                                </div>
                                <div class="header__top--basketItems">
                                    <div class="header__top--basketItem">
                                        <div class="header__top--basketItemsContent" >
                                            <div class="header__top--basketItemImg">
                                                <img src="https://cdn.easycep.com/assets/_web/img/product/2022/04/s_apple-iphone-8-plus-352-1-1649139673.webp" class="img-fluid">
                                            </div>
                                            <div class="header__top--basketItemContent">
                                                <h6 class="header__top--basketItemTitle">
                                                    <a href="">  </a>
                                                </h6>
                                                <div class="header__top--basketItemCounterAndPrice">
                                                    <div class="header__top--basketItemPrice small">1 Adet</div>
                                                    <div class="header__top--basketItemPrice"> TL</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="header__top--basketSummary">
                                    <span class="text-uppercase">Sepet Toplamı</span>
                                    <strong> TL</strong>
                                </div>
                                <div class="header__top--basketButtons">
                                    <a href="https://easycep.com/checkout" class="btn btn-color-citronella header__top--buyNow" title="Hemen Al">Hemen Al</a>
                                    <a href="https://easycep.com/basket"  class="btn btn-color-light header__top--gotoCart" title="Sepete Git">Sepete Git</a>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="header-content" >
                <div class="header-logo text-align-center mb-3">
                    <a href="https://easycep.com">
                        <img src="https://easycep.com/assets/dist/web/images/logo/logo.svg?v=1.2.37"width="250" height="61">
                    </a>
                </div>
                <div class="header-search" >
                    <div class="header-search-form text-align-center position-relative" >
                        <input   class="text-control js-searchInput" type="text" placeholder="Ürün, marka veya kategori ara" autocomplete="off"  >
                        
                        <button class="btn btn-color-ferry header-search-submit" >
                            <i class="bi bi-search"></i>
                        </button>
                        
                    </div>
                    <ul class="js-searchResults" >
                            
                    </ul>
                </div>
            </div>
        </div>
        <nav class="header-navigation ">
            <div class="container">
                <div class="navigation-wrapper" >
                    <ul class="navigation-list d-flex  text-align-start">
                        <li class="navigation-listItem" >
                            <a href="https://easycep.com/kategori/cep-telefonu-1" class="d-flex flex-column justify-content-center text-center" title="Cep Telefonu">
                                <i class="bi bi-phone"></i>
                                <span class="text-uppercase">Cep Telefonu 
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </a>
                        </li>
                        <li class="navigation-listItem" >
                            <a href="https://easycep.com/kategori/cep-telefonu-1" class="d-flex flex-column justify-content-center text-center" title="Cep Telefonu">
                                <i class="bi bi-smartwatch"></i>
                                <span class="text-uppercase">Akıllı Saat 
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </a>
                        </li>
                        <li class="navigation-listItem" >
                            <a href="https://easycep.com/kategori/cep-telefonu-1" class="d-flex flex-column justify-content-center text-center" title="Cep Telefonu">
                                <i class="bi bi-tablet-landscape"></i>  
                                <span class="text-uppercase">Tablet 
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </a>
                        </li>
                        <li class="navigation-listItem" >
                            <a href="https://easycep.com/kategori/cep-telefonu-1" class="d-flex flex-column justify-content-center text-center" title="Cep Telefonu">
                                <i class="bi bi-laptop"></i>
                                <span class="text-uppercase">Bilgisayar 
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </a>
                        </li>
                        <li class="navigation-listItem" >
                            <a href="https://easycep.com/kategori/cep-telefonu-1" class="d-flex flex-column justify-content-center text-center" title="Cep Telefonu">
                                <i class="bi bi-headphones"></i>
                                <span class="text-uppercase">Aksesuar
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </a>
                        </li>
                        <li class="navigation-listItem" >
                            <a href="https://easycep.com/kategori/cep-telefonu-1 ms-1" class="d-flex flex-column justify-content-center text-center" title="Cep Telefonu">
                                <i class="bi bi-lamp"></i>
                                <span class="text-uppercase">Ev Aletleri 
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </a>
                        </li>
                        <li class="navigation-listItem" >
                            <a href="https://easycep.com/kategori/cep-telefonu-1 ms-1" class="d-flex flex-column justify-content-center text-center" title="Cep Telefonu">
                                <i class="bi bi-lightning-charge"></i>
                                <span class="text-uppercase">E-Scotter 
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class=" nav-sell-device">
                        <a href="https://easycep.com/telefon-sat/" target="_blank" class="d-flex flex-column justify-content-center text-center" title="Cihaz Sat">
                            <i class="material-icons m_devices_other ins-phone-sell-c387"></i>
                            <span class="text-uppercase sp-custom-387-1682353500">Hemen sat</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>


@endsection