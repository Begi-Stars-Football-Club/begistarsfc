
 <style>
    @font-face {
        font-family: fcb-condensed-bold;
        src: url(./font/FCBARCELONACONDENSED/FCBARCELONACONDENSED.ttf);
    }

    @font-face {
        font-family: fcb-bold;
        src: url(./font/FCBARCELONACONDENSED/FCBARCELONACONDENSED.woff);
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
        /* line-height: 4rem; */
        text-transform: uppercase;
        /* margin-bottom: 2rem; */
        /* font-family: fcb-condensed-bold, Arial, Helvetica Neue, Helvetica, sans-serif; */
        font-weight: 400;
    }

    .widget__title-regular {
        /* font-family: fcb-condensed-bold, Arial, Helvetica Neue, Helvetica, sans-serif; */
        font-weight: 400;
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
        /* font-family: fcb-extra-bold, Arial, Helvetica Neue, Helvetica, sans-serif; */
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
        /* font-family: fcb-condensed-bold, Arial, Helvetica Neue, Helvetica, sans-serif; */
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
        /* font-family: fcb-light, Arial, Helvetica Neue, Helvetica, sans-serif; */
        font-weight: 400;
    }

    .countdown--header .countdown__count-label {
        /* font-family: fcb-condensed-bold, Arial, Helvetica Neue, Helvetica, sans-serif; */
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
        padding: 1.5rem 2rem 2.5rem;
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
        width: 300px;
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
        color: #fff !important;
    }

    .next_gold_bg {
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
        /* font-family: fcb-bold, Arial, Helvetica Neue, Helvetica, sans-serif; */
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
        background: #cc9933;
        border-color: #cc9933;
    }


    .cal-slider__item-btn--sec {
        border-color: #222;
    }


    .cal-slider__item-btn {
        display: block;
        text-align: center;
        /* font-family: sans-serif; */
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


    .cal-slider__item-btn:hover {
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

    @media(max-width:1084px) {
        .matches-scroller__control-wrapper {
            display: none;
        }
    }

    @media(max-width:948px) {
        .widget__header {
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .begifcmatches-scroller .widget__title {
            margin-right: 0;
        }

        .begifcmatches-scroller {
            padding: 0rem 3.4rem 1.4rem;
        }
    }


    @media(max-width:760px) {

        .begifcmatches-scroller .widget__title,
        .widget__title-regular {
            /* font-family: sans-serif; */
            font-weight: 600;
        }
    }

    @media(max-width:495px) {
        .swiper-slide {
            width: 250px;
        }

        .begifcmatches-scroller {
            /* padding: 0rem 0.5rem 1.4rem; */
            padding: 0rem 0rem 0rem;
        }

        .cal-slider__item-btn {
            font-size: 14px;
        }

        .countdown__value,
        .countdown__separator {
            font-size: 50px;
        }

        .defaultimg {
            background-image: url(./images/images/begi_mobile/slide_mobile1.jpg) !important;
        }

        .countdown__value {
            min-width: 2.2rem;
        }

        .nextbtn,
        .prevbtn {
            display: none !important;
        }

        .begifc_storyteller-container {
            padding: 1rem 2.4rem 0rem;
        }

        .widget {
            margin: 20px 0px 10px;
        }

        .GotM .featured-promo__image {
            height: auto;
        }

        .featured-widget__title {
            font-size: inherit !important;
        }

        .featured-promo__cta {
            margin: 0.5rem auto 0 !important;
        }

        .featured-promo__container .button {
            padding: 0 1.6rem;
            line-height: 2.2rem;
        }

        .featured-promo__container {
            padding-bottom: 0.5rem !important;
        }

        .begifc_storyteller-container {
            padding: 0rem 0.4rem 0rem !important;
        }
    }






    /* popup form */


    .popup-container {
        display: none;
        position: fixed;
        z-index: 9999;
        background: #000000bf;
        height: 100%;
        width: 100%;
        top: 0;
        padding: 20px;
    }

    .popup-container.show {
        display: block;
    }

    .close {
        position: absolute;
        right: 10px;
        top: 10px;
        cursor: pointer;


    }

    .close svg {
        width: 80px;
        height: 80px;
        color: #fff;
    }

    .tourimg {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .tourimg img {}





    /* esports carousel */

    .promo-carousel {
        position: relative;
        background: #fff;
        padding: 1.6rem 0;
        overflow: hidden;

        padding: 0rem 0 0rem;
        /* height: 550px; */
    }

    .promo-carousel__container {
        position: relative;
        height: 100%;
    }

    .promo-carousel__content {
        position: relative;
        display: flex;
        flex-flow: column nowrap;
        height: 100%;
    }

    .promo-carousel__nav {
        display: flex;
        justify-content: center;
        position: relative;
        align-items: center;
    }

    .widget__header {
        text-align: center;
    }

    .promo-carousel__carousel {
        flex: 1;
        transition: margin .6s ease;
        overflow-x: auto;
        padding-top: 1.6rem;
        height: 100%;
    }

    .promo-carousel__cards {
        position: relative;
        display: flex;
        transition: transform .8s;
        border: none;
        flex-flow: row nowrap;
        width: 100%;
        overflow: auto;
        scroll-behavior: smooth;
        transition: left 1.4s ease-in-out;
        scrollbar-width: none;
        /* height: 400px; */
        padding: 20px 0;


         /* transition:transform .2s; */
         /* transform-origin: 0 0; */
        /* transition: transform .25s, visibility .25s ease-in; */
    }

    ol,
    ul {
        padding-left: 0;
        margin-top: 0;
        margin-bottom: 0;
    }


    .promo-carousel__card {
        flex: 1 0 auto;
        max-width: 25vw;
        aspect-ratio: 16 / 25;
        color: #fff;
        text-transform: uppercase;
        display: flex;
        flex-flow: column nowrap;
        justify-content: space-between;
        transform: scale(.99);
        transition: transform .5s;
        border-radius: 1rem !important;
        overflow: hidden;
        position: relative;
        padding: 1.6rem;
        margin: 0 .6rem;
        min-width: 25vw;
        will-change: transform;
        z-index: 0;
        -webkit-transition: all 200ms ease-in;
        -webkit-transform: scale(1); 
        -ms-transition: all 200ms ease-in;
        -ms-transform: scale(1); 
        -moz-transition: all 200ms ease-in;
        -moz-transform: scale(1);
        transition: all 200ms ease-in;
        transform: scale(1);   
    }

    .promo-carousel__card:before {
        content: "";
        background-image: linear-gradient(0deg, rgba(25, 24, 51, .9), rgba(25, 24, 51, .5) 25%, rgba(25, 24, 51, .2) 35%, rgba(25, 24, 51, 0) 47%, rgba(25, 24, 51, 0));
        position: absolute;
        height: 100%;
        width: 100%;
        left: 0;
        top: 0;
        z-index: 10;
    }

    .promo-carousel__card:hover {
        
     box-shadow: 0px 0px 10px #444;
     z-index: 2;
    -webkit-transition: all 200ms ease-in;
    -webkit-transform: scale(1.1);
    -ms-transition: all 200ms ease-in;
    -ms-transform: scale(1.1);   
    -moz-transition: all 200ms ease-in;
    -moz-transform: scale(1.1);
    transition: all 200ms ease-in;
    transform: scale(1.1);

    }

    /* .promo-carousel__cards:hover li{
        transform: scale(1.5);
    } */

    .promo-carousel__picture {
        z-index: -1;
    }

    .lazy-image {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }


    .lazy-image.loaded .lazy-image__img {
        opacity: 1;
    }

    .lazy-image__img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        font-family: object-fit\: cover;
        -o-object-position: center;
        object-position: center;
        opacity: 0;
        transition: opacity .25s ease;
    }

    .promo-carousel__link {
        text-transform: uppercase;
        font-size: 1.6rem;
        color: #fff;
        text-decoration: none;
        flex: 1;
        max-width: 100%;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
    }


    .promo-carousel__info {
        height: 100%;
        width: 100%;
        flex-direction: column;
        justify-content: flex-end;
    }

    .promo-carousel__info,
    .promo-carousel__new-label {
        display: flex;
        z-index: 20;
        position: absolute;
        top: 0;
        left: 0;
    }


    .promo-carousel__promo-title-container {
        max-height: 8.4rem;
        overflow: hidden;
    }

    .promo-carousel__promo-title {
        font-size: 1.2rem;
        line-height: 1;
        color: #fff;
        text-transform: uppercase;
        /* font-family: fcb-condensed-bold, Arial, Helvetica Neue, Helvetica, sans-serif; */
        font-weight: 900;
        position: relative;
        padding-right: 2.5rem;
    }

    .promo-carousel__chevron {
        background-repeat: no-repeat;
        background-position: 50%;
        background-image: url(../i/elements/double-chevron.png);
        background-size: 2.3rem 2rem !important;
        padding: 0 1.1rem .3rem;
        margin-left: .6rem;
        transition: margin .2s ease;
    }

    .widget__title{
        display: flex;
        align-items: center;
        background-image: linear-gradient(to right, #00000012, #ffffff30);
        padding: 05px 20px;
        /* border-top-left-radius: 50px; */
        font-weight: 700;
    }

    .widget__title svg{
        width: 50px;
        height: 50px;
    }


    .dez-bnr-inr-c {
    background-position: center center;
    background-size: cover;
    display: flex;
    height: 450px;
    padding-bottom: 60px;
    padding-top: 130px;
    width: 100%;
    align-items: center;
}

.heading h2{
    font-size: 3rem;
}


.heading {
    padding-bottom: .5rem;
}

.mission .content p {
    font-size: 1rem;
}

    @media (min-width: 640px) and (max-width: 840px) {
        .promo-carousel__card {
            max-width: 28vw;
            min-width: 28vw;
        }
    }

    @media (min-width: 640px) and (max-width: 840px) {
        .promo-carousel__chevron {
            background-size: 2.3rem 2rem !important;
            margin-left: .6rem;
        }
    }

    @media (-moz-min-device-pixel-ratio:2),
    (-webkit-min-device-pixel-ratio: 2) {
        .promo-carousel__chevron {
            background-image: url(../i/elements/double-chevron@x2.png);
            background-size: 4.6rem 4rem;
        }
    }

    @supports (-webkit-line-clamp:3) {
        .promo-carousel__promo-title-container {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }
    }

    @media (min-width: 640px) and (max-width: 840px) {
        .promo-carousel__promo-title {
            font-size: 1.8rem;
            line-height: 1;
        }
    }

    /* @media (min-width: 840px) {
    .promo-carousel__card {
        min-height: 20rem;
        min-width: 25.5rem;
        max-height: 20rem;
        max-width: 25.5rem;
        aspect-ratio: 39 / 60;
    }
} */


@media (min-width: 840px) {
    .promo-carousel__card {
        min-height: 22rem;
        min-width: 11.5rem;
        max-height: 22rem;
        max-width: 11.5rem;
        aspect-ratio: 39 / 60;
    }
    
    
}


@media (max-width: 690px) {
    .widget__title{
        white-space: nowrap;

    }

    .promo-carousel__nav{
        flex-wrap: wrap;
        padding: 0 !important;
    }

    .promo-carousel__nav-controls{
        margin-left: inherit !important;
        display: none;
    }

    .about_esp{
        width: 100% !important;
    }


    .promo-carousel__promo-title {
    font-size: 1rem;
    font-weight: 600;
    }

    .widget__title{
        border-top-left-radius: 0px;
    }

    .promo-carousel__card{
        /*min-width: 26vw;*/
        /*max-width: 26vw;*/
        /*min-height: 16rem;*/
        /*max-height: 16rem;*/
        min-width: 30vw;
        max-width: 30vw;
        min-height: 15rem;
        max-height: 15rem;
        aspect-ratio: 16 / 30;
    }
    
    
    .heading h2 {
    font-size:2rem;
}


.mission .mission-points li h5{
        font-size: 1.5rem;
}
    
    .widget__title{
        margin-bottom: 0rem;
    }

    .widget__title {
    /* color: #000; */
    font-size: 1.2rem;
    }


    .promo-carousel__card{
        padding: 1.6rem 5px;
    }
    }

    @media screen and (max-width: 768px) {
    .content-inner {
        padding-top: 10px;
        padding-bottom: 0px;
    }
}

@media only screen and (max-width: 767px) {
    .content-inner {
        padding-bottom: 0px;
    }
}
</style>







<section class="promo-carousel noScrollLeft">
    <div class="promo-carousel__container ">
        <div class="promo-carousel__content">

            <div class="promo-carousel__nav" style="padding: 5px 20px;">
                <header class="widget__header">
                    <span class="widget__title">BEGI STAR FC ESPORTS GAMES  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:var(--new_gold);transform: ;msFilter:;"><path d="M10.296 7.71 14.621 12l-4.325 4.29 1.408 1.42L17.461 12l-5.757-5.71z"></path><path d="M6.704 6.29 5.296 7.71 9.621 12l-4.325 4.29 1.408 1.42L12.461 12z"></path></svg></span>
                </header>

                <div class="promo-carousel__nav-controls js-controls" style="margin-left:auto;">
                   
<!-- 
                <div class="matches-scroller__controls-header cal-slider__controls">
            <div class="matches-scroller__control-wrapper"> -->
                <!-- <div class="matches-scroller__button-wrap"> -->
                    <button tabindex="0" class="matches-scroller__slide-arrow matches-scroller__slide-arrow--active matches-scroller__slide-arrow--prev  
            is-inactive cal-slider__control cal-slider__control--prev esprev" aria-label="Previous slide"
                        aria-controls="swiper-wrapper-9496a21095d10615102" aria-disabled="false">Previous
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                        </svg>
                    </button>

                    <button tabindex="0"
                        class="matches-scroller__slide-arrow matches-scroller__slide-arrow--next  cal-slider__control cal-slider__control--next esnext"
                        aria-label="Next slide" aria-controls="swiper-wrapper-9496a21095d10615102"
                        aria-disabled="false">Next
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path d="M10.061 19.061 17.121 12l-7.06-7.061-2.122 2.122L12.879 12l-4.94 4.939z"></path>
                        </svg>


                    </button>
                <!-- </div>
            </div>
        </div> -->


                </div>
            </div>

            <div class="promo-carousel__carousel js-carousel">
                <ul class="promo-carousel__cards js-items-wrapper" role="group">
                    <li class="promo-carousel__card js-item">
                        <picture class="promo-carousel__picture lazy-image js-lazy-picture loaded" >
                           <img class="lazy-image__img js-faded-image"
                                src="./images/esports/fifa.jpg"
                                alt="202407_Web_Landing_Widgets_600x892_01_Masculí_CAT">
                        </picture>


                        <a class="promo-carousel__link"
                            href="#"
                            target="_self">
                            <div class="promo-carousel__info">
                                <div class="promo-carousel__promo-title-container">
                                    <div class="promo-carousel__promo-title">FIFA / EA FC<span
                                            class="promo-carousel__chevron"></span></div>
                                </div>
                            </div>
                        </a>
                    </li>



                    <li class="promo-carousel__card js-item">
                        <picture class="promo-carousel__picture lazy-image js-lazy-picture loaded" >
                        <img class="lazy-image__img js-faded-image"
                                src="./images/esports/esports2.jpg"
                                alt="202407_Web_Landing_Widgets_600x892_01_Masculí_CAT">
                        </picture>


                        <a class="promo-carousel__link"
                            href=""
                            target="_self">
                            <div class="promo-carousel__info">
                                <div class="promo-carousel__promo-title-container">
                                    <div class="promo-carousel__promo-title">NBA 2K<span
                                            class="promo-carousel__chevron"></span></div>
                                </div>
                            </div>
                        </a>
                    </li>



                    <li class="promo-carousel__card js-item">
                        <picture class="promo-carousel__picture lazy-image js-lazy-picture loaded" >
                           <img class="lazy-image__img js-faded-image"
                                src="./images/esports/pes.jpg"
                                alt="202407_Web_Landing_Widgets_600x892_01_Masculí_CAT">
                        </picture>


                        <a class="promo-carousel__link"
                            href="#"
                            target="_self">
                            <div class="promo-carousel__info">
                                <div class="promo-carousel__promo-title-container">
                                    <div class="promo-carousel__promo-title">PES E-Football<span
                                            class="promo-carousel__chevron"></span></div>
                                </div>
                            </div>
                        </a>
                    </li>





                    
                    <li class="promo-carousel__card js-item">
                        <picture class="promo-carousel__picture lazy-image js-lazy-picture loaded" >
                           <img class="lazy-image__img js-faded-image"
                                src="./images/esports/call_of_duty.jpg"
                                alt="202407_Web_Landing_Widgets_600x892_01_Masculí_CAT">
                        </picture>


                        <a class="promo-carousel__link"
                            href="#"
                            target="_self">
                            <div class="promo-carousel__info">
                                <div class="promo-carousel__promo-title-container">
                                    <div class="promo-carousel__promo-title">CALL OF DUTY E-SPORTS<span
                                            class="promo-carousel__chevron"></span></div>
                                </div>
                            </div>
                        </a>
                    </li>



                    
                    <li class="promo-carousel__card js-item">
                        <picture class="promo-carousel__picture lazy-image js-lazy-picture loaded" >
                           <img class="lazy-image__img js-faded-image"
                                src="./images/esports/esports4.jpg"
                                alt="202407_Web_Landing_Widgets_600x892_01_Masculí_CAT">
                        </picture>


                        <a class="promo-carousel__link"
                            href="#"
                            target="_self">
                            <div class="promo-carousel__info">
                                <div class="promo-carousel__promo-title-container">
                                    <div class="promo-carousel__promo-title">Counter Strike<span
                                            class="promo-carousel__chevron"></span></div>
                                </div>
                            </div>
                        </a>
                    </li>




                    
                    <li class="promo-carousel__card js-item">
                        <picture class="promo-carousel__picture lazy-image js-lazy-picture loaded" >
                           <img class="lazy-image__img js-faded-image"
                                src="./images/esports/esports1.jpg"
                                alt="202407_Web_Landing_Widgets_600x892_01_Masculí_CAT">
                        </picture>


                        <a class="promo-carousel__link"
                            href="#"
                            target="_self">
                            <div class="promo-carousel__info">
                                <div class="promo-carousel__promo-title-container">
                                    <div class="promo-carousel__promo-title">I Racing Esports<span
                                            class="promo-carousel__chevron"></span></div>
                                </div>
                            </div>
                        </a>
                    </li>



                    
                    <li class="promo-carousel__card js-item">
                        <picture class="promo-carousel__picture lazy-image js-lazy-picture loaded" >
                           <img class="lazy-image__img js-faded-image"
                                src="./images/esports/Rocket_League.jpg"
                                alt="202407_Web_Landing_Widgets_600x892_01_Masculí_CAT">
                        </picture>


                        <a class="promo-carousel__link"
                            href="#"
                            target="_self">
                            <div class="promo-carousel__info">
                                <div class="promo-carousel__promo-title-container">
                                    <div class="promo-carousel__promo-title">Rocket League<span
                                            class="promo-carousel__chevron"></span></div>
                                </div>
                            </div>
                        </a>
                    </li>





                    <li class="promo-carousel__card js-item">
                        <picture class="promo-carousel__picture lazy-image js-lazy-picture loaded" >
                           <img class="lazy-image__img js-faded-image"
                                src="./images/esports/valorant_esport.jpg"
                                alt="202407_Web_Landing_Widgets_600x892_01_Masculí_CAT">
                        </picture>


                        <a class="promo-carousel__link"
                            href="#"
                            target="_self">
                            <div class="promo-carousel__info">
                                <div class="promo-carousel__promo-title-container">
                                    <div class="promo-carousel__promo-title">Valorant<span
                                            class="promo-carousel__chevron"></span></div>
                                </div>
                            </div>
                        </a>
                    </li>






                    <li class="promo-carousel__card js-item">
                        <picture class="promo-carousel__picture lazy-image js-lazy-picture loaded" >
                           <img class="lazy-image__img js-faded-image"
                                src="./images/esports/star_craft.jpg"
                                alt="202407_Web_Landing_Widgets_600x892_01_Masculí_CAT">
                        </picture>


                        <a class="promo-carousel__link"
                            href="#"
                            target="_self">
                            <div class="promo-carousel__info">
                                <div class="promo-carousel__promo-title-container">
                                    <div class="promo-carousel__promo-title">Star Craft<span
                                            class="promo-carousel__chevron"></span></div>
                                </div>
                            </div>
                        </a>
                    </li>






                    <li class="promo-carousel__card js-item">
                        <picture class="promo-carousel__picture lazy-image js-lazy-picture loaded" >
                           <img class="lazy-image__img js-faded-image"
                                src="./images/esports/olympics.jpg"
                                alt="202407_Web_Landing_Widgets_600x892_01_Masculí_CAT">
                        </picture>


                        <a class="promo-carousel__link"
                            href="#"
                            target="_self">
                            <div class="promo-carousel__info">
                                <div class="promo-carousel__promo-title-container">
                                    <div class="promo-carousel__promo-title">E -  Olympics<span
                                            class="promo-carousel__chevron"></span></div>
                                </div>
                            </div>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</section>



