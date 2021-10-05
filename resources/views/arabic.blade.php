@extends('layouts.app')
  @section('content')
  @section('title')
  Arabic
  @endsection  

<!-- Header -->
<header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Arabic</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <!-- Basic -->
    <div class="ex-basic-1 pt-5 pb-5">
        <div class="container">
            <div class="row">
            <h4>At the moment, this content is empty, but soon it will be filled with cool moms</h4>
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->
    <!-- Copyright -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="moreMemes"><a style="text-decoration: none; color: #FFFFFF;" href="#your-link">More memes</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->


    <!-- Overlay -->
    <div class="overlay">
        <div class="popup">
            <div class="popupFun">
                <h2 class="popupTitle">Yeah it's really funny!</h2>
            </div>

            <div class="popupNotClear">
                <h2 class="popupTitle">The author of the post will soon review the translation</h2>
            </div>

            <div class="popupHarmfulness">
                <h2 class="popupTitle">Made your point</h2>
                <label class="popupCont">Racism
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>

                <label class="popupCont">Nazism
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>


                <label class="popupCont">Anti-Semitism
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>

                <label class="popupCont">Sexism
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>


                <label class="popupCont">Your option
                    <input class="popupContText" type="text">
                </label>

                <button class="popupBtnSent">Send</button>
            </div>

            <div class="popupThanks">
                <h2 class="popupTitle">Thanks for your feedback!</h2>
                <p class="popupSubtitle">We will urgently check the post</p>
            </div>
            <div class="popupClose"></div>
        </div>
    </div>

    @endsection