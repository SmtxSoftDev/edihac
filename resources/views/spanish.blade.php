@extends('layouts.app')
  @section('content')
  @section('title')
  Spanish
  @endsection
    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Spanish</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <!-- Basic -->
    <div class="ex-basic-1 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 col-sm-6">
                    <div class="cardMemes"><img class="memImg" src="./images/memes/spain/img1.jpg" alt=""></div>
                    <div class="uk-width-3-4@s">
                        <h6 style="display: inline;">Mascarilla <span style="color: #595959; font-weight: normal">[maskaˈɾiʎa]</span> <span style="color: #1e7e34; font-weight: normal">сущ</span><br> A mask <span style="color: #1e7e34; font-weight: normal">noun</span></h6>
                        <p class="uk-text-justify toggle-text">You got the mask wrong. <br />I'm Zorro idiot.</p><a class="toggle-text-button">Translation</a>
                    </div>
                    <div class="comment">
                        @guest
                            <div class="comBox"><img class="commentImg" src="./images/fun.png" alt="">0</div>
                            <div class="comBox"><img class="commentImg" src="./images/clearness.png" alt="">0</div>
                            <div class="comBox"><img class="commentImg" src="./images/harm.png" alt="">0</div>
                        @else
                            <div class="comBox comFun" onclick="count('#Id1')"><img class="commentImg" src="./images/fun.png" alt=""><div id="Id1">0</div></div>
                            <div class="comBox comClear" onclick="count('#Id2')"><img class="commentImg" src="./images/clearness.png" alt=""><div id="Id2">0</div></div>
                            <div class="comBox comHarm" onclick="count('#Id3')"><img class="commentImg" src="./images/harm.png" alt=""><div id="Id3">0</div></div>
                        @endguest
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-sm-6">
                    <div class="cardMemes"><img class="memImg" src="./images/memes/spain/img2.jpg" alt=""></div>
                    <div class="uk-width-3-4@s">
                        <h6 style="display: inline;">Compartir <span style="color: #595959; font-weight: normal">[kompaɾˈtiɾ]</span> <span style="color: #1e7e34; font-weight: normal">verb</span><br>To share</h6>
                        <p class="uk-text-justify toggle-text">Share this golden horse so they don't break your poor heart anymore.</p><a class="toggle-text-button">Translation</a>
                    </div>
                    <div class="comment">
                        @guest
                            <div class="comBox"><img class="commentImg" src="./images/fun.png" alt="">0</div>
                            <div class="comBox"><img class="commentImg" src="./images/clearness.png" alt="">0</div>
                            <div class="comBox"><img class="commentImg" src="./images/harm.png" alt="">0</div>
                        @else
                            <div class="comBox comFun" onclick="count('#Id4')"><img class="commentImg" src="./images/fun.png" alt=""><div id="Id4">0</div></div>
                            <div class="comBox comClear" onclick="count('#Id5')"><img class="commentImg" src="./images/clearness.png" alt=""><div id="Id5">0</div></div>
                            <div class="comBox comHarm" onclick="count('#Id6')"><img class="commentImg" src="./images/harm.png" alt=""><div id="Id6">0</div></div>
                        @endguest
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-sm-6">
                    <div class="cardMemes"><img class="memImg" src="./images/memes/spain/img3.jpg" alt=""></div>
                    <div class="uk-width-3-4@s">
                        <h6 style="display: inline;">Pez <span style="color: #595959; font-weight: normal">[peθ]</span> <span style="color: #1e7e34; font-weight: normal">noun</span><br>Fish</h6>
                        <p class="uk-text-justify toggle-text">My friends: calm, there are many fish in the sea. <br />My sea:</p><a class="toggle-text-button">Translation</a>
                    </div>
                    <div class="comment">
                        @guest
                            <div class="comBox"><img class="commentImg" src="./images/fun.png" alt="">0</div>
                            <div class="comBox"><img class="commentImg" src="./images/clearness.png" alt="">0</div>
                            <div class="comBox"><img class="commentImg" src="./images/harm.png" alt="">0</div>
                        @else
                            <div class="comBox comFun" onclick="count('#Id7')"><img class="commentImg" src="./images/fun.png" alt=""><div id="Id7">0</div></div>
                            <div class="comBox comClear" onclick="count('#Id8')"><img class="commentImg" src="./images/clearness.png" alt=""><div id="Id8">0</div></div>
                            <div class="comBox comHarm" onclick="count('#Id9')"><img class="commentImg" src="./images/harm.png" alt=""><div id="Id9">0</div></div>
                        @endguest
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-sm-6">
                    <div class="cardMemes"><img class="memImg" src="./images/memes/spain/img4.jpg" alt=""></div>
                    <div class="uk-width-3-4@s">
                        <h6 style="display: inline;">Patógeno <span style="color: #595959; font-weight: normal">[paˈtoxeno]</span> <span style="color: #1e7e34; font-weight: normal">adj</span><br>Pathogenic </h6>
                        <p class="uk-text-justify toggle-text">When they talk about pathogenic agents, I imagine something like this.</p><a class="toggle-text-button">Translation</a>
                    </div>
                    <div class="comment">
                        @guest
                            <div class="comBox"><img class="commentImg" src="./images/fun.png" alt="">0</div>
                            <div class="comBox"><img class="commentImg" src="./images/clearness.png" alt="">0</div>
                            <div class="comBox"><img class="commentImg" src="./images/harm.png" alt="">0</div>
                        @else
                            <div class="comBox comFun" onclick="count('#Id10')"><img class="commentImg" src="./images/fun.png" alt=""><div id="Id10">0</div></div>
                            <div class="comBox comClear" onclick="count('#Id11')"><img class="commentImg" src="./images/clearness.png" alt=""><div id="Id11">0</div></div>
                            <div class="comBox comHarm" onclick="count('#Id12')"><img class="commentImg" src="./images/harm.png" alt=""><div id="Id12">0</div></div>
                        @endguest
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-sm-6">
                    <div class="cardMemes"><img class="memImg" src="./images/memes/spain/img7.jpg" alt=""></div>
                    <div class="uk-width-3-4@s">
                        <h6 style="display: inline;">Trabajo <span style="color: #595959; font-weight: normal">[tɾaˈβaxo]</span> <span style="color: #1e7e34; font-weight: normal">noun</span><br>Work</h6>
                        <p class="uk-text-justify toggle-text">When they ask me for things at work and EVERYTHING is urgent <br />Me:I'm not a robot</p><a class="toggle-text-button">Translation</a>
                    </div>
                    <div class="comment">
                        @guest
                            <div class="comBox"><img class="commentImg" src="./images/fun.png" alt="">0</div>
                            <div class="comBox"><img class="commentImg" src="./images/clearness.png" alt="">0</div>
                            <div class="comBox"><img class="commentImg" src="./images/harm.png" alt="">0</div>
                        @else
                            <div class="comBox comFun" onclick="count('#Id13')"><img class="commentImg" src="./images/fun.png" alt=""><div id="Id13">0</div></div>
                            <div class="comBox comClear" onclick="count('#Id14')"><img class="commentImg" src="./images/clearness.png" alt=""><div id="Id14">0</div></div>
                            <div class="comBox comHarm" onclick="count('#Id15')"><img class="commentImg" src="./images/harm.png" alt=""><div id="Id15">0</div></div>
                        @endguest
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-sm-6">
                    <div class="cardMemes"><img class="memImg" src="./images/memes/spain/img9.jpg" alt=""></div>
                    <div class="uk-width-3-4@s">
                        <h6 style="display: inline;">Perro <span style="color: #595959; font-weight: normal">[ˈpero]</span> <span style="color: #1e7e34; font-weight: normal">noun</span><br>A dog</h6>

                        <p class="uk-text-justify toggle-text">Dogs can't walk on the beach <br />Pigs can</p><a class="toggle-text-button">Translation</a>
                    </div>
                    <div class="comment">
                        @guest
                            <div class="comBox"><img class="commentImg" src="./images/fun.png" alt="">0</div>
                            <div class="comBox"><img class="commentImg" src="./images/clearness.png" alt="">0</div>
                            <div class="comBox"><img class="commentImg" src="./images/harm.png" alt="">0</div>
                        @else
                            <div class="comBox comFun" onclick="count('#Id16')"><img class="commentImg" src="./images/fun.png" alt=""><div id="Id16">0</div></div>
                            <div class="comBox comClear" onclick="count('#Id17')"><img class="commentImg" src="./images/clearness.png" alt=""><div id="Id17">0</div></div>
                            <div class="comBox comHarm" onclick="count('#Id18')"><img class="commentImg" src="./images/harm.png" alt=""><div id="Id18">0</div></div>
                        @endguest
                    </div>
                </div>
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