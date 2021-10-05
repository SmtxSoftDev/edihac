  @extends('layouts.app')
  @section('content')
  @section('title')
  Home
  @endsection  
    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <h1 class="h1-large">Study new words through funny memes</h1>
                        <p class="p-large">Edihac is a platform where you will spend your free time usefully</p>
                        <a class="btn-solid-lg" href="/registration">Sign up for free</a>
                        <a class="btn-outline-lg page-scroll" href="#intro">Discover</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/header.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->
    
    <!-- Customers -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>The most popular languages in the world</h4>
                    <hr class="section-divider">

                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="images/customer-logo-1.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="images/customer-logo-2.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="images/customer-logo-3.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="images/customer-logo-4.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="images/customer-logo-5.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="images/customer-logo-6.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="images/customer-logo-7.png" alt="alternative">
                                </div>
                            </div> <!-- end of swiper-wrapper -->
                        </div> <!-- end of swiper container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of customers -->

    <!-- Introduction -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <img class="img-fluid" src="images/introduction.png" alt="alternative">
                </div> <!-- end of col -->
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2>Edihac is here to enrich your vocabulary</h2>
                        <p>We believe sustainable study of new words through funny and memorable memes. Our entire experience and passion can be found in Edihac and you are invited to use it for your benefit</p>
                        <a class="btn-solid-reg" href="/registration">Sign up</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of introduction -->

    <!-- Features -->
    <div id="features" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Check out all the features</h2>
                    <p class="p-heading">Help us improve our content with your feedback</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <img src="./images/memes/funny.png" alt="" width="300" height="220">
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <img src="./images/memes/unclear.png" alt="" width="300" height="220">
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <img src="./images/memes/harmful.png" alt="" width="300" height="220">
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of features -->

    <!-- Details 1 -->
    <div id="details" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="intro">
                        <h2>Start a learning of foreign words in no more than 3 easy steps with Edihac</h2>
                        <p>To build a solid foundation for your vocabulary, you just need a free place in your memory and a bulletproof strategy. You can rely on our experience in memorization of new words in easy way</p>
                    </div> <!-- end of intro -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-1.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">Step 1</div>
                        <h2>Choose the language you are learning</h2>
                        <p>Scientifically proven methods and clever mnemonic techniques for vocabulary replenishment</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox">Lightbox</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->

    <!-- Details Lightbox -->
    <!-- Lightbox -->
	<div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
			<div class="col-lg-8">
                <div class="image-container">
                    <img class="img-fluid" src="images/details-lightbox.png" alt="alternative">
                </div> <!-- end of image-container -->
			</div> <!-- end of col -->
			<div class="col-lg-4">
                <h3>Goals Setting</h3>
				<hr>
                <p>The app can easily help you track your personal development evolution if you take the time to set it up.</p>
                <h4>User Feedback</h4>
                <p>These are great buttons which can help us to improve our content and make them acceptable.</p>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-chevron-right"></i><div class="media-body">Level selection panel</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-chevron-right"></i><div class="media-body">Statistics of learn words</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-chevron-right"></i><div class="media-body">Events calendar layout</div>
                    </li>
                    <li class="media">
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="/registration">Sign Up</a> <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
			</div> <!-- end of col -->
		</div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of details lightbox -->

    <!-- Details 2 -->
    <div class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">Step 2</div>
                        <h2>Choose your level</h2>
                        <p>Our team of competent designers and funnymen are able to create amazing and structured list of words which will stay in your memory for a long time</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">A — Basic User</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">B — Intermediate</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">C — Proficient User</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-2.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of details 2 -->

    <!-- Details 3 -->
    <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-3.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">Step 3</div>
                        <h2>Create your vocabulary book</h2>
                        <p>We can develop a simple plan for you to learn 1,095 new words in a year. To start using Edihac just sign up and specify language</p>
                        <a class="btn-solid-reg" href="/registration">Sign up now</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of details 3 -->

    <!-- Newsletter -->
	<div class="form-1">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Subscribe And Follow Us</h2>
                    <p class="p-heading">Be part of the story and follow us on Twitter via <a href="https://twitter.com/edihac1">edihac</a> and subscribe to the newsletter for news and updates about our workshops</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Newsletter Form -->
                    <form>
                        <div class="form-group mail">
                            <input type="email" class="form-control-input" id="nemail" required>
                            <label class="label-control" for="nemail">Email address</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Subscribe</button>
                        </div>
                        <div class="form-message">
                            <div id="nmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of newsletter form -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of newsletter -->

    @endsection