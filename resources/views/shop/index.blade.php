@extends('layouts.shop')

@section('content')
    <section class="home-section home-fade home-full-height" id="home">
        <div class="hero-slider">
            <ul class="slides">
                <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;assets/images/shop/slider1.png&quot;);">
                    <div class="titan-caption">
                        <div class="caption-content">
                            <div class="font-alt mb-30 titan-title-size-1">This is   Service Box</div>
                            <div class="font-alt mb-30 titan-title-size-4">Service Box</div>
                            <div class="font-alt mb-40 titan-title-size-1">Быстрая доставка ваших пожеланий</div><a class="section-scroll btn btn-border-w btn-round" href="#latest">Подробнее</a>
                        </div>
                    </div>
                </li>
                <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;assets/images/shop/slider3.png&quot;);">
                    <div class="titan-caption">
                        <div class="caption-content">
                            <div class="font-alt mb-30 titan-title-size-1"> This is Service Box</div>
                            <div class="font-alt mb-40 titan-title-size-4">Быстрая доставка ваших пожеланий</div><a class="section-scroll btn btn-border-w btn-round" href="#latest">Подробнее</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <div class="main">
        <section class="module-small">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">новинки</h2>
                    </div>
                </div>
                <div class="row multi-columns-row">
                    @foreach ($link  as $item)

                            <div class="col-sm-6 col-md-3 col-lg-3">
                                <div class="shop-item">
                                    <div class="shop-item-image"><img src="{{$item['url']}}" alt="Accessories Pack"/>
                                        <form method="post" action="/order_product">
                                            @csrf
                                            <input type="hidden" name="date" value="">
                                            <input type="hidden" name="url" value="">
                                            <input type="hidden" name="pbl_id" value="">
                                        <div class="shop-item-detail"> <button class="btn btn-default btn-round" type="submit">Заказать</button></div>

                                        </form>
                                    </div>
                                    <h4 class="shop-item-title font-alt"><a href="#"></a></h4>
                                    <h4 class="shop-item-title font-alt"><a href="#"></a></h4>
                                </div>
                            </div>


                    @endforeach

                   <!-- <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image"><img src="assets/images/shop/product-8.jpg" alt="Men’s Casual Pack"/>
                                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                            </div>
                            <h4 class="shop-item-title font-alt"><a href="#">Men’s Casual Pack</a></h4>£12.00
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image"><img src="assets/images/shop/product-9.jpg" alt="Men’s Garb"/>
                                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                            </div>
                            <h4 class="shop-item-title font-alt"><a href="#">Men’s Garb</a></h4>£6.00
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image"><img src="assets/images/shop/product-10.jpg" alt="Cold Garb"/>
                                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                            </div>
                            <h4 class="shop-item-title font-alt"><a href="#">Cold Garb</a></h4>£14.00
                        </div>
                    </div>
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
                    </div>-->
                </div>
                <div class="row mt-30">
                    <div class="col-sm-12 align-center"><a class="btn btn-b btn-round" href="#">смотреть еще</a></div>
                </div>
            </div>
        </section>
        <section class="module module-video bg-dark-30" data-background="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt mb-0">Be inspired. Get ahead of trends.</h2>
                    </div>
                </div>
            </div>
            <div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=EMy5krGcoOU', containment:'.module-video', startAt:0, mute:true, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>
        </section>
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
                                <div class="ex-product"><a href="#"><img src="assets/images/shop/product-2.jpg" alt="Derby shoes"/></a>
                                    <h4 class="shop-item-title font-alt"><a href="#">Derby shoes</a></h4>£54.00
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="ex-product"><a href="#"><img src="assets/images/shop/product-3.jpg" alt="Leather belt"/></a>
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
        <hr class="divider-w">
        <section class="module" id="news">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Our News</h2>
                    </div>
                </div>
                <div class="row multi-columns-row post-columns wo-border">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-40">
                            <div class="post-header font-alt">
                                <h2 class="post-title"><a href="#">Receipt of the new collection</a></h2>
                            </div>
                            <div class="post-entry">
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-40">
                            <div class="post-header font-alt">
                                <h2 class="post-title"><a href="#">Sale of summer season</a></h2>
                            </div>
                            <div class="post-entry">
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-40">
                            <div class="post-header font-alt">
                                <h2 class="post-title"><a href="#">New lookbook</a></h2>
                            </div>
                            <div class="post-entry">
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-40">
                            <div class="post-header font-alt">
                                <h2 class="post-title"><a href="#">Receipt of the new collection</a></h2>
                            </div>
                            <div class="post-entry">
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-40">
                            <div class="post-header font-alt">
                                <h2 class="post-title"><a href="#">Sale of summer season</a></h2>
                            </div>
                            <div class="post-entry">
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-40">
                            <div class="post-header font-alt">
                                <h2 class="post-title"><a href="#">New lookbook</a></h2>
                            </div>
                            <div class="post-entry">
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="divider-w">
        <section class="module-small">
            <div class="container">
                <div class="row client">
                    <div class="owl-carousel text-center" data-items="6" data-pagination="false" data-navigation="false">
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="client-logo"><img src="assets/images/client-logo-dark-1.png" alt="Client Logo"/></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="client-logo"><img src="assets/images/client-logo-dark-2.png" alt="Client Logo"/></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="client-logo"><img src="assets/images/client-logo-dark-3.png" alt="Client Logo"/></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="client-logo"><img src="assets/images/client-logo-dark-4.png" alt="Client Logo"/></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="client-logo"><img src="assets/images/client-logo-dark-5.png" alt="Client Logo"/></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="client-logo"><img src="assets/images/client-logo-dark-1.png" alt="Client Logo"/></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="client-logo"><img src="assets/images/client-logo-dark-2.png" alt="Client Logo"/></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="client-logo"><img src="assets/images/client-logo-dark-3.png" alt="Client Logo"/></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="client-logo"><img src="assets/images/client-logo-dark-4.png" alt="Client Logo"/></div>
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
                        <div class="widget">
                            <h5 class="widget-title font-alt">Recent Comments</h5>
                            <ul class="icon-list">
                                <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                                <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                                <li>Andy on <a href="#">Eco bag Mockup</a></li>
                                <li>Jack on <a href="#">Bottle Mockup</a></li>
                                <li>Mark on <a href="#">Our trip to the Alps</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">Blog Categories</h5>
                            <ul class="icon-list">
                                <li><a href="#">Photography - 7</a></li>
                                <li><a href="#">Web Design - 3</a></li>
                                <li><a href="#">Illustration - 12</a></li>
                                <li><a href="#">Marketing - 1</a></li>
                                <li><a href="#">Wordpress - 16</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">Popular Posts</h5>
                            <ul class="widget-posts">
                                <li class="clearfix">
                                    <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-1.jpg" alt="Post Thumbnail"/></a></div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                                        <div class="widget-posts-meta">23 january</div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-2.jpg" alt="Post Thumbnail"/></a></div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                                        <div class="widget-posts-meta">15 February</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
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
