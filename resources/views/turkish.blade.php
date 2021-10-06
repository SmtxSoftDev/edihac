@extends('layouts.app')
  @section('content')
  @section('title')
  Turkish
  @endsection
  
    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Turkish</h1>
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
                    <div class="cardMemes"><img class="memImg" src="./images/memes/turkish/img4.png" alt=""></div>
                    <div class="uk-width-3-4@s">
                        <h6 style="display: inline;">Temiz <span style="color: #595959; font-weight: normal">[temiz]</span> <span style="color: #1e7e34; font-weight: normal">adj</span><br>Clean</h6>
                        <p class="uk-text-justify toggle-text">Use the toilet in a clean way. <br />America can shoot Iraq from 5 thousand km, you can’t shoot a 20 cm hole in front of you, a#hole.</p><a class="toggle-text-button">Translation</a>
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
                    <div class="cardMemes"><img class="memImg" src="./images/memes/turkish/img1.png" alt=""></div>
                    <div class="uk-width-3-4@s">
                        <h6 style="display: inline;">Su <span style="color: #595959; font-weight: normal">[su:]</span> <span style="color: #1e7e34; font-weight: normal">noun</span><br>Water</h6>
                        <p class="uk-text-justify toggle-text">"Hot water in the student house" project.</p><a class="toggle-text-button">Translation</a>
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
                    <div class="cardMemes"><img class="memImg" src="./images/memes/turkish/img3.png" alt=""></div>
                    <div class="uk-width-3-4@s">
                        <h6 style="display: inline;">Taraf <span style="color: #595959; font-weight: normal">[taraf]</span> <span style="color: #1e7e34; font-weight: normal">noun</span><br>Side(way)</h6>
                        <p class="uk-text-justify toggle-text">Which way now?</p><a class="toggle-text-button">Translation</a>
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
                    <div class="cardMemes"><img class="memImg" src="./images/memes/turkish/img5.png" alt=""></div>
                    <div class="uk-width-3-4@s">
                        <h6 style="display: inline;">Bulmak <span style="color: #595959; font-weight: normal">[bulmak]</span> <span style="color: #1e7e34; font-weight: normal">verb</span><br>To find</h6>
                        <p class="uk-text-justify toggle-text">Find me the master who made this.</p><a class="toggle-text-button">Translation</a>
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
                    <div class="cardMemes"><img class="memImg" src="./images/memes/turkish/img6.png" alt=""></div>
                    <div class="uk-width-3-4@s">
                        <h6 style="display: inline;">Teknoloji <span style="color: #595959; font-weight: normal">[teknoloji]</span> <span style="color: #1e7e34; font-weight: normal">noun</span><br>Technology</h6>

                        <p class="uk-text-justify toggle-text">This technology is good, how can I use it.</p><a class="toggle-text-button">Translation</a>
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
                    <div class="cardMemes"><img class="memImg" src="./images/memes/turkish/img7.png" alt=""></div>
                    <div class="uk-width-3-4@s">
                        <h6 style="display: inline;">Görmek <span style="color: #595959; font-weight: normal">[gɜːrmek]</span> <span style="color: #1e7e34; font-weight: normal">verb</span><br>To see</h6>
                        <p class="uk-text-justify toggle-text">A man chasing thieves who broke into his home in Sultangazi city, when he could not catch the thieves returned home by a passing car. And when he looked at the surveillance footage, he saw that those who took him home were thieves.</p><a class="toggle-text-button">Translation</a>
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