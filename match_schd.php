<style>
    @font-face {
        font-family: fcb-condensed-bold;
        src: url(./font/FCBARCELONACONDENSED/FCBARCELONACONDENSED.ttf);
    }

    @font-face {
        font-family: fcb-bold;
        src: url(./font/FCBARCELONACONDENSED/FCBARCELONACONDENSED.woff);
    }


    h1, h2, h3, h4, h5, h6,p,div {
    font-family: sans-serif;
}


    .begifcmatches-scroller {
        position: relative;
        padding: 3.4rem 3.4rem 1.4rem;
        border-radius: 1.2rem 1.2rem 0 0;
        background: #fff;
        overflow: hidden;
        border-bottom: 1px solid #efefef;
    }

    .begifcmatches-scroller .widget__header {
        display: flex;
        margin-bottom: 0.5rem;
    }



    .begifcmatches-scroller .widget__title {
        text-align: left;
        flex: 0 0 auto;
        margin-right: 11.8rem;
        margin-bottom: 0;
        align-self: center;
    }

    .widget__title {
        color: #000;
        font-size: 2rem;
        line-height: 4rem;
        text-transform: uppercase;
        margin-bottom: 2rem;
        /*font-family: fcb-condensed-bold, Arial, Helvetica Neue, Helvetica, sans-serif;*/
         font-family:sans-serif;
        font-weight: 400;
    }

    .widget__title-regular {
        /*font-family: fcb-condensed-bold, Arial, Helvetica Neue, Helvetica, sans-serif;*/
        font-weight: 400;
        font-family:sans-serif;
    }

    .countdown--header {
        background-image: none;
        padding: 0;
        flex: 1;
        margin: 0;
        height: auto;
    }


    .countdown {
        position: relative;
        display: flex;
        max-width: 52rem;
        height: 8rem;
        margin: 0 auto;
        padding: 1.2rem 1.6rem;
        border-radius: .5rem;
        background-image: url(../i/bg-elements/stripes-horizontal.png);
        background-size: cover;
        background-repeat: no-repeat;
    }

    .countdown--header .countdown__content {
        flex: 0;
        flex-basis: auto;
        align-self: center;
    }

    .countdown__content--no-sponsor {
        align-items: center;
        display: flex;
    }

    .countdown__content {
        flex: 1;
        margin-right: 1.6rem;
    }

    .countdown--header .countdown__content {
        flex: 0;
        flex-basis: auto;
        align-self: center;
    }

    .countdown__content--no-sponsor {
        align-items: center;
        display: flex;
    }

    .countdown__content {
        flex: 1;
        margin-right: 1.6rem;
    }

    .countdown--header .countdown__title {
        /*font-family: fcb-extra-bold, Arial, Helvetica Neue, Helvetica, sans-serif;*/
        
        font-family:sans-serif;
        font-weight: 400;
        white-space: nowrap;
    }

    .countdown__title {
        white-space: nowrap;
        display: inline-block;
        margin-bottom: .3rem;
    }


    .countdown__title--mobile {
        display: none;
    }


    .countdown--header .countdown__clock {
        font-size: 4.2rem;
        margin-top: 0;
    }

    .countdown__clock {
        display: flex;
        flex: 1;
        margin-top: -.4rem;
        align-items: center;
    }

    .countdown__count {
        display: flex;
        align-items: center;
        font-size: 4.4rem;
    }

    /* 
@supports (-webkit-background-clip:text) or (-webkit-text-fill-color:transparent) {
    .matches-scroller .countdown .days .countdown__value {
        background: linear-gradient(90deg, #cd122d, #a71c3f);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        color: #fff;
    }
} */


    .matches-scroller .countdown .days .countdown__value {
        color: #cd122d;
    }

    .countdown--header .countdown__value {
        line-height: 4rem;
        color: #cd122d;
    }

    .countdown__value {
        min-width: 5.2rem;
        line-height: 4.7rem;
        font-family: fcb-condensed-bold, Arial, Helvetica Neue, Helvetica, sans-serif !important;
        /*font-family:sans-serif;*/
        font-weight: 900;
        /* font-size: 16px; */
    }

    .countdown--header .countdown__separator {
        line-height: 4rem;
    }

    .countdown__separator {
        display: inline-block;
        margin: 0 .2rem;
        line-height: 4.8rem;
        /*font-family: fcb-light, Arial, Helvetica Neue, Helvetica, sans-serif;*/
        font-family:sans-serif;
        font-weight: 400;
    }

    .countdown--header .countdown__count-label {
        /*font-family: fcb-condensed-bold, Arial, Helvetica Neue, Helvetica, sans-serif;*/
        font-family:sans-serif;
        font-weight: 400;
        margin-top: .4rem;
        padding: 0;
        text-align: center;
        font-size: 1rem;
        color: #727272;
        padding-right: .8rem;
        text-transform: uppercase;
        -webkit-text-fill-color: #727272;
    }



    .matches-scroller__controls-header {
        text-align: right;
        position: absolute;
        top: 4.4rem;
        right: 3.4rem;
        left: 0;
        margin: 0;
        font-family: fcb-condensed-bold !important;
    }


    .matches-scroller__control-wrapper {
        display: inline-block;
        margin-right: 1.7rem;
    }

    .matches-scroller__slide-arrow {
        position: relative;
        text-indent: -99rem;
        z-index: 10;
        width: 4rem;
        height: 4rem;
        opacity: 1;
        transition: opacity .3s ease-out;
        overflow: hidden;
        transform: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border: none;
        background: transparent;
    }

    button,
    html input[type=button],
    input[type=reset],
    input[type=submit] {
        -webkit-appearance: button;
        cursor: pointer;
    }


    .matches-scroller__slide-arrow:before {
        background-color: #154284;
        width: 0;
        height: 0;
        opacity: 0;
        transition: width .2s ease-out, height .2s ease-out, opacity .2s ease-out;
        z-index: 20;
    }

    .matches-scroller__slide-arrow:after,
    .matches-scroller__slide-arrow:before {
        content: "";
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 100%;
        transform: translateX(-50%) translateY(-50%);
        z-index: 20;
    }

    .matches-scroller__slide-arrow svg {
        fill: #000;
    }

    .matches-scroller__slide-arrow svg {
        position: absolute;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        top: 50%;
        transition: fill .3s ease-out;
        z-index: 30;
    }




    .matches-scroller__slide-arrow:after {
        border: .1rem solid #e8e8e8;
    }

    .matches-scroller__slide-arrow:after {
        width: 95%;
        height: 95%;
        z-index: 10;
        border: .1rem solid #d8d8d8;
        background: #f8f8f8;
    }

    .matches-scroller__slide-arrow:after,
    .matches-scroller__slide-arrow:before {
        content: "";
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 100%;
        transform: translateX(-50%) translateY(-50%);
        z-index: 20;
    }



    .swiper-horizontal {
        touch-action: pan-y;
    }

    .swiper {
        margin-left: auto;
        margin-right: auto;
        position: relative;
        overflow: hidden;
        list-style: none;
        padding: 0;
        z-index: 1;
        display: block;
    }


    .swiper-wrapper {
        transition-duration: 0ms;
        transition-delay: 0ms;
        /* transform: translate3d(-477.333px, 0px, 0px); */
        padding: 1.5rem 2rem 0.5rem;
        position: relative;
        width: 100%;
        height: 100%;
        z-index: 1;
        display: flex;
        transition-property: transform;
        flex: 1;
        display: flex;
        flex-wrap: nowrap;
        touch-action: auto;
        overflow-x: auto;
        overflow-y: hidden;
        position: relative;
        scroll-behavior: smooth;
        scrollbar-width: none;
    }

    .swiper-slide {
        width:300px;
        margin-right: 24px;
        position: relative;
        transition-property: transform;
        flex-shrink: 0;


    }

    .swiper-backface-hidden .swiper-slide {
        transform: translateZ(0);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .cal-slider .swiper-slide {
        height: auto;
        display: flex;
        flex-direction: column;
    }


    .cal-slider__item-next {
        position: absolute;
        left: 0;
        top: 1rem;
        right: 0;
        font-size: 13px;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    .cal-slider__item-next img {
        height: 14px;
        margin-left: .65rem;
    }

    .cal-slider__item {
        border-radius: 2rem;
        overflow: hidden;
        box-shadow: 0 .5rem 2rem rgba(0, 0, 0, .15);
        background: #fff;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }


    .cal-slider__item--home .cal-slider__item-header {
        /* background: #cf122d; */
        color: #fff;
    }


    .next_gold_bg {
        background: #cf122d;
    }

    .next_navyblue_bg {
        background: #154284;
        color:#fff !important;
    }

    .next_gold_bg{
        /* background-color: var(--new_gold); */
        background-color: var(--new_gold);
        color: #000;
    }




    .cal-slider__item-header--next {
        padding-top: 4rem;
        padding-bottom: 2rem;
    }

    .cal-slider__item-header {
        border-bottom: 1px solid #fff;
        align-items: center;
        justify-content: space-around;
        padding: 2rem 0rem 1rem;
        text-align: center;
        position: relative;
    }

    .cal-slider__item-header,
    .cal-slider__item-body {
        display: flex;
    }

    .cal-slider__item-team {
        max-width: 32%;
        position: relative;
        padding-bottom: 18px;
    }

    .cal-slider img {
        max-width: 100%;
    }

    .cal-slider__item-crest {
        max-width: 60px !important;
        aspect-ratio: 1;
        object-fit: contain;
        margin-bottom: .2rem;
    }

    .cal-slider__item-teamname {
        font-size: 13px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        max-width: 90px;
    }

    .cal-slider__item-comp {
        max-width: 12%;
    }

    .cal-slider__item-body {
        flex-grow: 1;
        flex-direction: column;
        padding: 1rem;
    }

    .cal-slider__item-header,
    .cal-slider__item-body {
        display: flex;
    }

    .cal-slider__item-info {
        margin-bottom: 1rem;
    }

    .cal-slider__item-date {
        /*font-family: fcb-bold, Arial, Helvetica Neue, Helvetica, sans-serif;*/
        font-family:sans-serif;
        font-size: 18px;
        font-weight: 900;
    }

    .cal-slider__item-info>* {
        margin-bottom: .5rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }


    .cal-slider__item-competition,
    .cal-slider__item-venue,
    .cal-slider__item-link {
        font-size: 14px;
    }

    .cal-slider__item-competition {
        margin-bottom: .3rem;
    }

    .cal-slider__item-info>* {
        margin-bottom: .5rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .cal-slider__item-actions {
        margin-top: auto;
    }


    .cal-slider__item--future .cal-slider__item-link {
        color: #154284;
    }

    .cal-slider__item-list--matchcenter {
        position: relative;
        margin-left: 2rem;
    }
/* 
    .cal-slider__item-competition,
    .cal-slider__item-venue,
    .cal-slider__item-link {
        font-size: 16px;
    } */

    

    .cal-slider__item-list--matchcenter:after {
        position: absolute;
        content: '';
        /* background: url(./images/ball.png); */
        /* background-image: url(./images/ball.png) no-repeat left center; */
        /* background-repeat: no-repeat; */
        /* background-size: cover; */
        background-size: 1.4rem;
        left: -2rem;
        right: 0;
        top: 0;
        bottom: 0;
    }



    .cal-slider__item--future .cal-slider__item-list--matchcenter:after {
        /* background-image: url(./images/ball.png)no-repeat left center; */
        /* background-repeat: no-repeat; */
        /* background-size: cover; */

        }

    .cal-slider__item-btn--main {
        background: #fdc52c;
        border-color: #fdc52c;
    }


    .cal-slider__item-btn--sec {
        border-color: #222;
    }


    .cal-slider__item-btn {
        display: block;
        text-align: center;
        font-family:sans-serif;
        font-size: 16px;
        text-transform: uppercase;
        color: #222;
        text-decoration: none;
        /* border: 1px solid #918e8475; */
        border-radius: 1rem;
        line-height: 3rem;
        width: 100%;
        outline: none;
        border: none;
      
    }


    .cal-slider__item-btn:hover{
        background-color: transparent;
        color: #000 !important;
        transition: .2s ease-out;
        border: 1px solid #222;
    }


    .cal-slider__item-list--matchcenter+* {
        margin-top: 2rem;
    }

    .cal-slider__item-list--matchcenter~* {
        margin-top: 1rem;
    }

    /* media */

    @media (min-width: 951px) {
        .cal-slider {
            margin: 0 -3.4rem !important;
        }
    }



    @media (min-width: 768px) {
        .cal-slider__controls {
            display: block !important;
        }
    }

    @supports (-webkit-background-clip:text) or (-webkit-text-fill-color:transparent) {
        .begifcmatches-scroller .countdown .day .countdown__value {
            background: linear-gradient(90deg, #cd122d, #a71c3f);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            color: #fff;
        }
    }

    @supports (-webkit-background-clip:text) or (-webkit-text-fill-color:transparent) {
        .begifcmatches-scroller .countdown .hr .countdown__value {
            background: linear-gradient(90deg, #a71c3f, #712a59);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            color: #fff;
        }
    }

    @supports (-webkit-background-clip:text) or (-webkit-text-fill-color:transparent) {
        .begifcmatches-scroller .countdown .minutes .countdown__value {
            background: linear-gradient(90deg, #712a59, #3a3872);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            color: #fff;
        }
    }


    @supports (-webkit-background-clip:text) or (-webkit-text-fill-color:transparent) {
        .begifcmatches-scroller .countdown .seconds .countdown__value {
            background: linear-gradient(90deg, #3a3872, #154284);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            color: #fff;
        }
    }

    @media(max-width:1084px){
        .matches-scroller__control-wrapper{
            display: none;
        }
    }

    @media(max-width:948px){
        .widget__header{
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .begifcmatches-scroller .widget__title{
            margin-right: 0;
        }

        .begifcmatches-scroller {
    padding: 0rem 3.4rem 1.4rem;
        }
    }


    @media(max-width:760px){
        .begifcmatches-scroller .widget__title,.widget__title-regular{
            font-family: sans-serif;
            font-weight: 600;
        }
    }
    
      @media(max-width:570px){
      .countdown__count {
    font-size: 2.4rem;
}
    }
    


    @media(max-width:495px){
        .swiper-slide{
            width: 250px;
        }
        .begifcmatches-scroller{
            /* padding: 0rem 0.5rem 1.4rem; */
            padding: 0rem 0rem 0rem;
        }

        .cal-slider__item-btn{
            font-size: 14px;
        }
        .countdown__value,.countdown__separator {
            /*font-size: 50px;*/
        }

        /*.defaultimg{*/
        /*    background-image: url(./images/images/begi_mobile/slide_mobile1.jpg)!important;*/
        /*}*/

        .countdown__value {
            min-width: 1.2rem;
        }

        .nextbtn, .prevbtn{
            display: none !important;
        }

        .begifc_storyteller-container{
            padding: 1rem 2.4rem 0rem;
        }

        .widget{
            margin: 20px 0px 10px;
        }

        .GotM .featured-promo__image {
             height: auto;
            }

            .featured-widget__title{
                font-size: inherit !important;
            }

            .featured-promo__cta {
    margin: 0.5rem auto 0 !important;
}

.featured-promo__container .button{
    padding: 0 1.6rem;
    line-height: 2.2rem;
}

.featured-promo__container{
    padding-bottom: 0.5rem !important;
}

.begifc_storyteller-container{
    padding: 0rem 0.4rem 0rem !important;
}
    }
    
    
    @media (max-width: 320px) {
    .countdown__count {
        font-size: 1.5rem;
    }
    
    .countdown--header .countdown__count-label {
     font-family: fcb-condensed-bold, Arial, Helvetica Neue, Helvetica, sans-serif; 
    /*font-family: sans-serif;*/
    font-weight: 400;
    /* margin-top: .4rem; */
    padding: 0;
    text-align: center;
    font-size: .5rem;
    color: #727272;
    padding-right: .8rem;
    text-transform: uppercase;
    -webkit-text-fill-color: #727272;
}

}


/*
    @media (max-width: 948px) {
    .begifcmatches-scroller {
        padding: 0rem 3.4rem 0rem;
    }
}*/





    /* popup form */


    .popup-container{
        display: none;
        position: fixed;
        z-index: 9999;
        background: #000000bf;
        height: 100%;
        width: 100%;
        top: 0;
        padding: 20px;
    }

    .popup-container.show{
        display: flex;
    }

    .close{
        position: absolute;
        right: 10px;
        top: 10px;  
        cursor: pointer;
       
        
    }

    .close svg{
        width: 80px;
        height: 80px;
        color: #fff;
    }

    .tourimg{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .tourimg img{

    }

</style>






<div>

    <section class="begifcmatches-scroller">

        <header class="widget__header">
            <!-- <h3 class="widget__title">BegiFC  <span class="widget__title-regular">Matches</span></h3> -->

            <div class="section-head text-center " style="margin-bottom: 0; margin-top:10px">
                    <h2 class="h2">BEGI STARS FC MATCHES </h2>
                    <div class="dez-separator-outer "><div class="dez-separator bg-primary style-liner"></div></div>
                    <!-- <p>BegiFC upcoming matches Preview.</p> -->
                </div>


            <div class="countdown countdown--header" data-widget="countdown" data-timestamp="1743344100000"
                data-subscribe-elems="">

                <div class="countdown__content countdown__content--no-sponsor">
                    <div class="countdown__title-container">
                        <span class="countdown__title">Next Match</span>
                        <span class="countdown__title countdown__title--mobile">Match Countdown</span>
                    </div>
                </div>



                <div class="countdown__clock js-countdown-clock">



                    <div class="countdown__clock-item day">
                        <div class="countdown__count ">
                            <span class="countdown__value js-countdown-minutes days">13</span>
                            <span class="countdown__separator">:</span>
                        </div>
                        <div class="countdown__count-label">Days</div>
                    </div>



                    <div class="countdown__clock-item hr">
                        <div class="countdown__count">
                            <span class="countdown__value js-countdown-minutes hours" >13</span>
                            <span class="countdown__separator">:</span>
                        </div>
                        <div class="countdown__count-label">Hours</div>
                    </div>


                    <div class="countdown__clock-item minutes">
                        <div class="countdown__count">
                            <span class="countdown__value js-countdown-minutes mins">34</span>
                            <span class="countdown__separator">:</span>
                        </div>
                        <div class="countdown__count-label">mins</div>
                    </div>

                    <div class="countdown__clock-item seconds">
                        <div class="countdown__count">
                            <span class="countdown__value js-countdown-seconds secs">41</span>
                        </div>
                        <div class="countdown__count-label">secs</div>
                    </div>
                </div>



            </div>
        </header>





        <div class="swiper cal-slider">

            <div class="swiper-wrapper">




                <div class="swiper-slide swiper-slide-active">
                    <div
                        class="cal-slider__item cal-slider__item--match cal-slider__item--future cal-slider__item--next cal-slider__item--home">
                        <div class="cal-slider__item-header cal-slider__item-header--next next_navyblue_bg">
                            <div class="cal-slider__item-team cal-slider__item-team--home">
                                <img src="images/images/logobegifc.png"
                                    alt="Begi FC" class="cal-slider__item-crest cal-slider__item-crest--home">
                                <div class="cal-slider__item-teamname cal-slider__item-teamname--home">Begi Stars FC
                                </div>
                            </div>
                            <div class="cal-slider__item-comp">
                                <img src="images/vs.png"
                                    alt="Local Match" class="cal-slider__item-complogo">
                            </div>
                            <div class="cal-slider__item-team cal-slider__item-team--away">
                                <img src="images/clubs/sunshine.png" alt="Girona"
                                    class="cal-slider__item-crest cal-slider__item-crest--away">
                                <div class="cal-slider__item-teamname cal-slider__item-teamname--away">Kano Pillars</div>
                            </div>
                            <div class="cal-slider__item-next"><span class="cal-slider__item-next-text">Next
                                    match</span>
                             
                            </div>
                        </div>
                        <div class="cal-slider__item-body">
                            <div class="cal-slider__item-info">
                                <div class="cal-slider__item-date">Sunday, April 30, 7:15 CET</div>
                                <div class="cal-slider__item-competition">Local Match</div>
                                <div class="cal-slider__item-venue">
                                    Begi Stars FC Stadium,  Lagos State
                                </div>
                            </div>
                            <div class="cal-slider__item-actions">
                                <div class="cal-slider__item-action">
                                    <a href="#"
                                        class="cal-slider__item-link cal-slider__item-list--matchcenter">
                                       </a>
                                       <button
                                        class="cal-slider__item-btn cal-slider__item-btn--sec next_navyblue_bg popupbtn">
                                        Match Day Tour</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="swiper-slide swiper-slide-active">
                    <div
                        class="cal-slider__item cal-slider__item--match cal-slider__item--future cal-slider__item--next cal-slider__item--home">
                        <div class="cal-slider__item-header cal-slider__item-header--next next_gold_bg">
                            <div class="cal-slider__item-team cal-slider__item-team--home">
                                <img src="images/images/logobegifc.png"
                                    alt="Begi FC" class="cal-slider__item-crest cal-slider__item-crest--home">
                                <div class="cal-slider__item-teamname cal-slider__item-teamname--home">Begi Stars FC
                                </div>
                            </div>
                            <div class="cal-slider__item-comp">
                                <img src="images/vs.png"
                                    alt="Local Match" class="cal-slider__item-complogo">
                            </div>
                            <div class="cal-slider__item-team cal-slider__item-team--away">
                                <img src="images/clubs/plateau.png" alt="Girona"
                                    class="cal-slider__item-crest cal-slider__item-crest--away">
                                <div class="cal-slider__item-teamname cal-slider__item-teamname--away">Plateau United</div>
                            </div>
                        
                        </div>
                        <div class="cal-slider__item-body">
                            <div class="cal-slider__item-info">
                                <div class="cal-slider__item-date">Sunday, May 30, 5:30PM</div>
                                <div class="cal-slider__item-competition">Local Match</div>
                                <div class="cal-slider__item-venue">
                                    Begi Stars FC Stadium,  Lagos State
                                </div>
                            </div>
                            <div class="cal-slider__item-actions">
                                <div class="cal-slider__item-action">
                                
                                       <button
                                        class="cal-slider__item-btn cal-slider__item-btn--sec next_navyblue_bg popupbtn">
                                        Match Day Tour</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>









                <div class="swiper-slide swiper-slide-active">
                    <div
                        class="cal-slider__item cal-slider__item--match cal-slider__item--future cal-slider__item--next cal-slider__item--home">
                        <div class="cal-slider__item-header cal-slider__item-header--next next_gold_bg">
                            <div class="cal-slider__item-team cal-slider__item-team--home">
                                <img src="images/images/logobegifc.png"
                                    alt="Begi FC" class="cal-slider__item-crest cal-slider__item-crest--home">
                                <div class="cal-slider__item-teamname cal-slider__item-teamname--home">Begi Stars FC
                                </div>
                            </div>
                            <div class="cal-slider__item-comp">
                                <img src="images/vs.png"
                                    alt="Local Match" class="cal-slider__item-complogo">
                            </div>
                            <div class="cal-slider__item-team cal-slider__item-team--away">
                                <img src="images/clubs/enyimba.png" alt="Girona"
                                    class="cal-slider__item-crest cal-slider__item-crest--away">
                                <div class="cal-slider__item-teamname cal-slider__item-teamname--away">Enyimba FC</div>
                            </div>
                            <div class="cal-slider__item-next"><span class="cal-slider__item-next-text">Next
                                    match</span>
                            </div>
                        </div>
                        <div class="cal-slider__item-body">
                            <div class="cal-slider__item-info">
                                <div class="cal-slider__item-date">Sunday, June 30, 7:15 CET</div>
                                <div class="cal-slider__item-competition">Local Match</div>
                                <div class="cal-slider__item-venue">
                                    Begi Stars FC Stadium,  Lagos State
                                </div>
                            </div>
                            <div class="cal-slider__item-actions">
                                <div class="cal-slider__item-action">
                                <button
                                        class="cal-slider__item-btn cal-slider__item-btn--sec next_navyblue_bg popupbtn">
                                        Match Day Tour</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






                <div class="swiper-slide swiper-slide-active">
                    <div
                        class="cal-slider__item cal-slider__item--match cal-slider__item--future cal-slider__item--next cal-slider__item--home">
                        <div class="cal-slider__item-header cal-slider__item-header--next next_navyblue_bg">
                            <div class="cal-slider__item-team cal-slider__item-team--home">
                                <img src="images/images/logobegifc.png"
                                    alt="Begi FC" class="cal-slider__item-crest cal-slider__item-crest--home">
                                <div class="cal-slider__item-teamname cal-slider__item-teamname--home">BegiStar FC
                                </div>
                            </div>
                            <div class="cal-slider__item-comp">
                                <img src="images/vs.png"
                                    alt="Local Match" class="cal-slider__item-complogo">
                            </div>
                            <div class="cal-slider__item-team cal-slider__item-team--away">
                                <img src="images/clubs/shooting star.png" alt=""
                                    class="cal-slider__item-crest cal-slider__item-crest--away">
                                <div class="cal-slider__item-teamname cal-slider__item-teamname--away">Shooting Stars</div>
                            </div>
                          
                        </div>
                        <div class="cal-slider__item-body">
                            <div class="cal-slider__item-info">
                                <div class="cal-slider__item-date">Sunday, July 30, 7:15PM</div>
                                <div class="cal-slider__item-competition">Local Match</div>
                                <div class="cal-slider__item-venue">
                                    BegiStar FC Stadium,  Lagos State
                                </div>
                            </div>
                            <div class="cal-slider__item-actions">
                                <div class="cal-slider__item-action">
                                <button
                                        class="cal-slider__item-btn cal-slider__item-btn--sec next_navyblue_bg popupbtn">
                                        Match Day Tour</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="swiper-slide swiper-slide-active">
                    <div
                        class="cal-slider__item cal-slider__item--match cal-slider__item--future cal-slider__item--next cal-slider__item--home">
                        <div class="cal-slider__item-header cal-slider__item-header--next next_navyblue_bg">
                            <div class="cal-slider__item-team cal-slider__item-team--home">
                                <img src="images/images/logobegifc.png"
                                    alt="Begi FC" class="cal-slider__item-crest cal-slider__item-crest--home">
                                <div class="cal-slider__item-teamname cal-slider__item-teamname--home">BegiStar FC
                                </div>
                            </div>
                            <div class="cal-slider__item-comp">
                                <img src="images/vs.png"
                                    alt="Local Match" class="cal-slider__item-complogo">
                            </div>
                            <div class="cal-slider__item-team cal-slider__item-team--away">
                                <img src="images/clubs/rivers united.png" alt="Girona"
                                    class="cal-slider__item-crest cal-slider__item-crest--away">
                                <div class="cal-slider__item-teamname cal-slider__item-teamname--away">Rivers Angels</div>
                            </div>
                          
                        </div>
                        <div class="cal-slider__item-body">
                            <div class="cal-slider__item-info">
                                <div class="cal-slider__item-date">Sunday, August 30, 10:00 AM</div>
                                <div class="cal-slider__item-competition">Local Match</div>
                                <div class="cal-slider__item-venue">
                                    BegiStar FC Stadium,  Lagos State
                                </div>
                            </div>
                            <div class="cal-slider__item-actions">
                                <div class="cal-slider__item-action">
                                <button
                                        class="cal-slider__item-btn cal-slider__item-btn--sec next_navyblue_bg popupbtn">
                                        Match Day Tour</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>









                <div class="swiper-slide swiper-slide-active">
                    <div
                        class="cal-slider__item cal-slider__item--match cal-slider__item--future cal-slider__item--next cal-slider__item--home">
                        <div class="cal-slider__item-header cal-slider__item-header--next next_navyblue_bg">
                            <div class="cal-slider__item-team cal-slider__item-team--home">
                                <img src="images/images/logobegifc.png"
                                    alt="Begi FC" class="cal-slider__item-crest cal-slider__item-crest--home">
                                <div class="cal-slider__item-teamname cal-slider__item-teamname--home">Begi FC
                                </div>
                            </div>
                            <div class="cal-slider__item-comp">
                                <img src="images/vs.png"
                                    alt="Local Match" class="cal-slider__item-complogo">
                            </div>
                            <div class="cal-slider__item-team cal-slider__item-team--away">
                                <img src="images/clubs/remo stars.png" alt="Girona"
                                    class="cal-slider__item-crest cal-slider__item-crest--away">
                                <div class="cal-slider__item-teamname cal-slider__item-teamname--away">Ramo Stars</div>
                            </div>
                          
                        </div>
                        <div class="cal-slider__item-body">
                            <div class="cal-slider__item-info">
                                <div class="cal-slider__item-date">Sunday, Sept 30, 3:15PM</div>
                                <div class="cal-slider__item-competition">Local Match</div>
                                <div class="cal-slider__item-venue">
                                    BegiStar FC Stadium,  Lagos State
                                </div>
                            </div>
                            <div class="cal-slider__item-actions">
                                <div class="cal-slider__item-action">
                                <button
                                        class="cal-slider__item-btn cal-slider__item-btn--sec next_navyblue_bg popupbtn">
                                        Match Day Tour</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>








            </div>

        </div>





        <div class="matches-scroller__controls-header cal-slider__controls">
            <div class="matches-scroller__control-wrapper">
                <div class="matches-scroller__button-wrap">
                    <button tabindex="0" class="matches-scroller__slide-arrow matches-scroller__slide-arrow--active matches-scroller__slide-arrow--prev js-prev 
            is-inactive cal-slider__control cal-slider__control--prev" aria-label="Previous slide"
                        aria-controls="swiper-wrapper-9496a21095d10615102" aria-disabled="false">Previous
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                        </svg>
                    </button>

                    <button tabindex="0"
                        class="matches-scroller__slide-arrow matches-scroller__slide-arrow--next js-next cal-slider__control cal-slider__control--next"
                        aria-label="Next slide" aria-controls="swiper-wrapper-9496a21095d10615102"
                        aria-disabled="false">Next
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path d="M10.061 19.061 17.121 12l-7.06-7.061-2.122 2.122L12.879 12l-4.94 4.939z"></path>
                        </svg>


                    </button>
                </div>
            </div>
        </div>


    </section>



</div>




<div class="popup-container" id="popup-container">

        <div class="close" id="close">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" 
            style="fill:var(--new_gold); color:#d8d8d8;msFilter:;">
            <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm4.207 12.793-1.414 1.414L12 13.414l-2.793 2.793-1.414-1.414L10.586 12 7.793 9.207l1.414-1.414L12 10.586l2.793-2.793 1.414 1.414L13.414 12l2.793 2.793z"></path></svg>
        
        </div>




       <div class="tourimg">

            <img src="./images/images/tour.webp" />

       </div>
    
    
  </div>