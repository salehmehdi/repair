@extends("layouts.app")

@section("content")      
<div class="productDetail__wrapper pb-5 mt-5 d-block" >
        <nav class="breadcrumb__wrapper" style="--bs-breadcrumb-divider:'>';" >
            <div class="container">
                <ol class="breadcrumb" >
                    <li class="breadcrumb-item">
                        <a href="" title="Ana Sayfa">Ana Sayfa</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="" title="Yenilenmiş Cep Telefonu">Yenilenmiş Cep Telefonu</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="" title="Apple">Apple</a>
                    </li class="breadcrumb-item">
                    <li class="breadcrumb-item" >
                        <a href="" title="İphone 7">{{$product->title}}</a>
                    </li>
                   
                </ol>
            </div>
        </nav>
        <div class="productDetail__titleWrapper">
            <div class="container">
                <h1 class="product-title">{{$product->title}}</h1>
            
                <div class="product-titleBottom mt-3">
                    <div class="rating commentTabToScroll d-flex">
                        <div class="rating__value">4</div>
                        <div class="rating__stars">
                            <span style="width: 80%"></span>
                        </div>
                        <div class="rating__count">49</div>
                    </div>
                    <div class="productDetail__addToFavoritesWrapper">
                        <a  class="btn btnn product-Favorites align-items-center ">
                            <i class="bi bi-heart"></i>
                            <span>Favorilere Ekle</span>
                        </a>
                    </div>
                    <div class="productDetail__compareWrapper">
                        <button class="btn btnn productDetail__compare add_compare" aria-label="Karşılaştır">
                            <i class="bi bi-arrow-left-right"></i>
                            <span>Karşılaştır</span>
                        </button>
                    </div>
                    <div class="productDetail__shareWrapper ">
                        <button class="btn  btnn productDetail__share ">
                            <i class="bi bi-share"></i>
                            <span>Paylaş</span>
                        </button>      
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="container mt-5" >
            <div class="row" >
                <div class="col-6 productİmg ">
                    <div class="slider">
                        <div class="product">
                            <img class="small-img" src="https://cdn.easycep.com/assets/_web/img/product/2022/04/l_apple-iphone-7-190-1-1648908977.webp" alt="" >
                            <img class="small-img" src="https://cdn.easycep.com/assets/_web/img/product/2022/04/l_apple-iphone-7-190-2-1648908981.webp" alt="" >
                            <img class="small-img" src="https://cdn.easycep.com/assets/_web/img/product/2022/04/l_apple-iphone-7-190-3-1648908983.webp" alt="" >
                        </div>
                        <div class="preview">
                            <div class="magnifier"></div>
                            <img src="https://cdn.easycep.com/assets/_web/img/product/2022/04/l_apple-iphone-7-190-1-1648908977.webp" alt="" class="imagebox">
                        </div>
                    </div>
                    <div class="product-description mt-4 d-block" >
                        <div class="product-descriptionList">
                            <div class="product-descriptionList--item">
                                <i class="bi bi-gem"></i>
                                <p class="product-descriptionList--itemText">
                                    <strong>Parmak İzi Okuyucu : </strong>Var
                                </p>
                            </div>
                            <div class="product-descriptionList--item">
                                <i class="bi bi-gem"></i>
                                <p class="product-descriptionList--itemText">
                                    <strong>RAM : </strong>2 GB
                                </p>
                            </div>
                            <div class="product-descriptionList--item">
                                <i class="bi bi-gem"></i>
                                <p class="product-descriptionList--itemText">
                                    <strong>Hızlı Şarj : </strong>Yok
                                </p>
                            </div>
                            <div class="product-descriptionList--item">
                                <i class="bi bi-gem"></i>
                                <p class="product-descriptionList--itemText">
                                    <strong> Ön Kamera Çözünürlüğü : </strong>7 MP
                                </p>
                            </div>
                            <div class="product-descriptionList--item">
                                <i class="bi bi-gem"></i>
                                <p class="product-descriptionList--itemText">
                                    <strong>Arka Kamera Çözünürlüğü : </strong>12 MP
                                </p>
                            </div>
                            <div class="product-descriptionList--item">
                                <i class="bi bi-gem"></i>
                                <p class="product-descriptionList--itemText">
                                    <strong>Ekran Boyutu : </strong>4.7 inç
                                </p>
                            </div>
                            <div class="product-descriptionReadMore mt-4">
                                <a class="product-descriptionReadMore--link " title="Tümünü Göster">
                                    <span>Tümünü Göster</span>
                                    <i class=" bi bi-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 productDetail__optionsWrapper ">
                    <div class="productDetail__priceWrapper mb-4">
                        <div class="productDetail__price">
                            <div class="productDetail__price--text">{{$product->price}} TL</div>
                        </div>
                    </div>
                    <h6>Kozmetik Durumu</h6>
                    <form class="d-flex mt-3" action="">
                        <div class="productDetail__cosmeticCondition mb-3 " >
                            <label class="btn btn-lg btn-color-white active  ">Mükemmel</label>
                            <label class="btn btn-lg btn-color-white ms-2  ">Çok İyi</label>
                            <label class="btn btn-lg btn-color-white  ms-2 ">İyi</label>
                            <label class="btn btn-lg btn-color-white  ms-2">Outlet</label>
                        </div>
                    </form>
                    <div class="productDetail__colorAndSize mt-5" >
                        <div class="productDetail__size" >
                            <label>Hafıza</label>
                            <div id="main_2176" style="width:100%;" class="bv_atual bv_background">32 GB
                                <i class="arrows_bv bi bi-chevron-down"></i>
                            </div>
                        </div>
                        <div class="productDetail__size" >
                            <label>Renk</label>
                            <div id="main_2176" style="width:100%;" class="bv_atual bv_background">Black
                                <i class="arrows_bv bi bi-chevron-down"></i>
                            </div>
                        </div>
                        <div class="productDetail__size" >
                            <label>Pil Sağlığı</label>
                            <div id="main_2176" style="width:100%;" class="bv_atual bv_background">100%
                                <i class="arrows_bv bi bi-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="productDetail__addToBasketBtnWrapper mt-5">
                        <input class="form-control form-control-lg"  type="number" id="quantity" name="quantity" min="1" value="1">
                        <button  type="button" class="btn btn-color-shoe-wax add-to-cart" data-product-id="{{ $product->id }}">SepeteEkle</button>
                        <button class="btn btn-color-citronella" aria-label="Hemen Al">Hemen Al</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>   

@endsection