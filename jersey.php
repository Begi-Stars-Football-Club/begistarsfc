<style>

.jersey{
    position: relative;

}

.jersey img{
    width: 100%;
}


.u-indent {
    margin: 0 2.4rem;
}
.featured-promo {
    position: relative;
    display: block;
    margin: 0 1.6rem;
    overflow: hidden;
    font-family: fcb-light, Arial, Helvetica Neue, Helvetica, sans-serif;
    font-weight: 400;
    background: #fff;
    color: #222;
    margin: 0;
    text-align: center;
}

.featured-promo--active:after, .featured-promo--active:before {
    transform: translateY(0);
}
.featured-promo:before {
    top: 33%;
    left: 0;
    width: 2.4rem;
    height: 24rem;
    background-color: #154284;
    z-index: 10;
    transform: translateY(-200%);
}
.featured-promo:after, .featured-promo:before {
    position: absolute;
    display: block;
    content: "";
    transition: transform .5s ease-in-out;
    transition-delay: 1s;
}


.GotM .featured-promo__image {
    height: 100%;
}
.featured-promo__image {
    display: block;
    z-index: 0;
    height: 44rem;
    overflow: hidden;
    position: relative;
}


@media (min-width: 841px) {
    .GotM .featured-promo__image:before {
        background: linear-gradient(180deg, rgba(24, 23, 51, 0) 0, rgba(24, 23, 51, .3) 60%, #181733 95%);
    }
}


.featured-promo__image:before {
    background: linear-gradient(180deg, rgba(24, 23, 51, 0) 0, rgba(24, 23, 51, .3) 20%, #181733 75%);
}


.featured-promo__image:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: block;
    /* background-color: rgba(24, 23, 51, .7); */
}


.featured-promo__image img {
    width: 100%;
}

.featured-promo__container {
    padding-bottom: 2.8rem;
    display: flex
;
    align-items: flex-end;
    justify-content: center;
}
.featured-promo__container {
    position: absolute;
    width: 100%;
    bottom: 0;
}

.featured-promo__header {
    position: relative;
    z-index: 20;
    padding: 0 4.8rem;
}


@media (min-width: 841px) {
    .GotM .featured-widget__title {
        line-height: 4.8rem;
        font-size: 2.2rem;
    }
}
.featured-promo .featured-widget__title {
    font-family: fcb-extra-bold, Arial, Helvetica Neue, Helvetica, sans-serif;
    font-weight: 800;
    color: var(--new_gold);
    line-height: .9;
    max-width: 79rem;
}
.featured-widget__title {
    display: block;
    color: var(--new_gold);
    font-family: fcb-condensed-bold, Arial, Helvetica Neue, Helvetica, sans-serif;
    font-weight: 800;
    margin: 0 auto;
    text-align: center;
    line-height: 6.4rem;
    font-size: 3.8rem;
    text-shadow: 0 1px 2px rgba(0, 0, 0, .5);
    max-width: 72.1rem;

}

.featured-promo__cta {
    margin: 1.8rem auto 0;
}
.button {
    min-width: 14.8rem;
    position: relative;
    display: inline-block;
    padding: 0 1.6rem;
    line-height: 3.2rem;
    border-radius: 3px;
    border: none;
    text-transform: uppercase;
    text-decoration: none;
    text-align: center;
    color: #fff;
    box-shadow: 0 .2rem .6rem .1rem rgba(0, 0, 0, .2);
    font-size: 1.2rem;
    font-family: fcb-bold, Arial, Helvetica Neue, Helvetica, sans-serif;
    font-weight: 400;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    will-change: transform;
    transform: translateY(0);
    cursor: pointer;
    pointer-events: all;
    transition: color .2s ease, box-shadow .2s ease, transform .2s ease;
}

.button:before {
    background: linear-gradient(270deg, #154284, var(--new_gold));
}

.button--primary:after {
    background: var(--new_gold);
}
.button:after {
    background: linear-gradient(90deg, #154284, var(--new_gold));
    transition: opacity .2s ease;
}
.button:after, .button:before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: .3rem;
    z-index: -1;
    backface-visibility: hidden;
}


.featured-promo--active:after, .featured-promo--active:before {
    transform: translateY(0);
}
.featured-promo:after {
    bottom: 58%;
    right: 0;
    width: 2.4rem;
    height: 14.4rem;
    background-color:var(--new_gold);
    transform: translateY(300%);
}
.featured-promo:after, .featured-promo:before {
    position: absolute;
    display: block;
    content: "";
    transition: transform .5s ease-in-out;
    transition-delay: 1s;
}


</style>




<!-- <div class="jersey">

<img  src="./images/images/begi_win_jersey.jpg" />

<p>Win Our Jersey Today </p>


</div> -->




<section class="featured-promo u-indent margins GotM featured-promo--active" data-observe="featured-promo">

    <div class="featured-promo__bg">
        <picture class="featured-promo__image js-lazy-picture loaded">



            <source srcset="" data-image-src="">

            <img src="./images/images/begi_win_jersey.jpg" alt="WIN THE NEW JERSEY!">
        </picture>
    </div>

    <div class="featured-promo__container">
        <header class="featured-promo__header">

            <div class="featured-widget__title">WIN THE NEW JERSEY!</div>


                <a href="contact_us.php" class="button button--primary featured-promo__cta" data-analytics="true" data-analytics-type="promo widget" data-analytics-section="other" data-analytics-event="4074199: WIN THE NEW JERSEY!" data-analytics-initialised="true">TAKE PART</a>
        </header>
    </div>
</section>