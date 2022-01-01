@extends('layouts.shop')

@section('content')

    <section class="module" id="news">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">обьявления</h2>
                    <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                </div>
            </div>
            <div class="row multi-columns-row post-columns">
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post mb-20">
                        <div class="post-thumbnail"><a href="#"><img src="assets/images/post-1.jpg" alt="Blog-post Thumbnail"/></a></div>
                        <div class="post-header font-alt">
                            <h2 class="post-title"><a href="#">Our trip to the Alps</a></h2>
                            <div class="post-meta">By&nbsp;<a href="#">Mark Stone</a>&nbsp;| 23 November | 3 Comments
                            </div>
                        </div>
                        <div class="post-entry">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        </div>
                        <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post mb-20">
                        <div class="post-thumbnail"><a href="#"><img src="assets/images/post-2.jpg" alt="Blog-post Thumbnail"/></a></div>
                        <div class="post-header font-alt">
                            <h2 class="post-title"><a href="#">Shore after the tide</a></h2>
                            <div class="post-meta">By&nbsp;<a href="#">Andy River</a>&nbsp;| 11 November | 4 Comments
                            </div>
                        </div>
                        <div class="post-entry">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        </div>
                        <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post mb-20">
                        <div class="post-thumbnail"><a href="#"><img src="assets/images/post-3.jpg" alt="Blog-post Thumbnail"/></a></div>
                        <div class="post-header font-alt">
                            <h2 class="post-title"><a href="#">We in New Zealand</a></h2>
                            <div class="post-meta">By&nbsp;<a href="#">Dylan Woods</a>&nbsp;| 5 November | 15 Comments
                            </div>
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

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Добавить обьявление в этот раздел</h2>
                <div class="module-subtitle font-serif"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <form id="contactForm_1" role="form" method="post" action="/notes_add"   enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label class="sr-only" for="name">Ваше имя</label>
                        <input class="form-control" type="text" id="name" name="name" placeholder="Ваше имя" required="required" data-validation-required-message="Please enter your name."/>
                        <input class="form-control" type="text" id="name" name="category" placeholder="category" required="required" data-validation-required-message="Please enter your name."/>
                        <input class="form-control" type="text" id="name" name="price" placeholder="category" required="required" data-validation-required-message="Please enter your name."/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="email">Телефон</label>
                        <input class="form-control" type="tel" id="tel" name="tel" placeholder="Ваш телефон" required="required" data-validation-required-message="Please enter your tel"/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="7" id="message" name="text" placeholder="Текст обьявления" required="required" data-validation-required-message="Please enter your message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="text-center">
                        <input type="file"  name="file">
                        <br><br><br>
                        <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Добавить</button>
                    </div>
                </form>
                <div class="ajax-response font-alt" id="contactFormResponse"></div>
            </div>
        </div>
    </div>
    <br><br><br>


@endsection
