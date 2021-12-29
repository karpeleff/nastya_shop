@extends('layouts.shop')

@section('content')
    <div class="main">
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 mb-sm-40"><a class="gallery" href="assets/images/shop/product-7.jpg"><img src="assets/images/shop/product-7.jpg" alt="Single Product Image"/></a>

                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="product-title font-alt">Здесь название продукции</h1>
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-sm-12"><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star-off"></i></span><a class="open-tab section-scroll" href="#reviews">-2customer reviews</a>
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-sm-12">
                                <div class="price font-alt"><span class="amount">£20.00</span></div>
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-sm-12">
                                <div class="description">
                                    <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                                </div>
                            </div>
                        </div>

                        <form method="post" action="/get_order">
                            <div class="row mb-20">
                                @csrf
                                <div class="col-sm-4 mb-sm-20">
                                    <input class="form-control input-lg" type="number" name="count" value="1" max="10" min="1" required="required"/>
                                </div>
                                <br><br><br>
                                <div class="col-sm-4 mb-sm-20">
                                    <input class="form-control input-lg" type="text" name="size" placeholder="размер" required="required"/>
                                </div>
                                <br><br><br>
                                <div class="col-sm-8">

                                      <input class="form-control input-lg" type="text" name="tel" placeholder="+7 ваш  телефон" required="required"/>

                                </div>
                                <br><br><br>

                                <div class="col-sm-8">
                                    <button class="btn btn-border-d btn-round" type="submit">Заказать</button>
                                </div>
                            </div>
                        </form>


                        <div class="row mb-20">
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <hr class="divider-w">
        <section class="module-small">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Похожие вещи</h2>
                    </div>
                </div>
                <div class="row multi-columns-row">
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image"><img src="assets/images/shop/product-11.jpg" alt="Accessories Pack"/>
                                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                            </div>
                            <h4 class="shop-item-title font-alt"><a href="#">Accessories Pack</a></h4>£9.00
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image"><img src="assets/images/shop/product-12.jpg" alt="Men’s Casual Pack"/>
                                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                            </div>
                            <h4 class="shop-item-title font-alt"><a href="#">Men’s Casual Pack</a></h4>£12.00
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image"><img src="assets/images/shop/product-13.jpg" alt="Men’s Garb"/>
                                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                            </div>
                            <h4 class="shop-item-title font-alt"><a href="#">Men’s Garb</a></h4>£6.00
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image"><img src="assets/images/shop/product-14.jpg" alt="Cold Garb"/>
                                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                            </div>
                            <h4 class="shop-item-title font-alt"><a href="#">Cold Garb</a></h4>£14.00
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="divider-w">
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Exclusive products</h2>
                        <div class="module-subtitle font-serif">The languages only differ in their grammar, their pronunciation and their most common words.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel text-center" data-items="5" data-pagination="false" data-navigation="false">
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="ex-product"><a href="#"><img src="assets/images/shop/product-1.jpg" alt="Leather belt"/></a>
                                    <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>£12.00
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="ex-product"><a href="#"><img src="assets/images/shop/product-3.jpg" alt="Derby shoes"/></a>
                                    <h4 class="shop-item-title font-alt"><a href="#">Derby shoes</a></h4>£54.00
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="ex-product"><a href="#"><img src="assets/images/shop/product-2.jpg" alt="Leather belt"/></a>
                                    <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>£19.00
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="ex-product"><a href="#"><img src="assets/images/shop/product-4.jpg" alt="Leather belt"/></a>
                                    <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>£14.00
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="ex-product"><a href="#"><img src="assets/images/shop/product-5.jpg" alt="Chelsea boots"/></a>
                                    <h4 class="shop-item-title font-alt"><a href="#">Chelsea boots</a></h4>£44.00
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="ex-product"><a href="#"><img src="assets/images/shop/product-6.jpg" alt="Leather belt"/></a>
                                    <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>£19.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="module-small bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">About Titan</h5>
                            <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                            <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                            <p>Email:<a href="#">somecompany@example.com</a></p>
                        </div>
                    </div>
                    <div class="col-sm-3">

                    </div>
                    <div class="col-sm-3">

                    </div>
                    <div class="col-sm-3">

                    </div>
                </div>
            </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">TitaN</a>, All Rights Reserved</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
@endsection
