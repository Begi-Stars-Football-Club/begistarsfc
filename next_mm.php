

<style>



.begifc_stories{
    color: #000;
    font-size: 2rem;
    /* line-height: 4rem; */
    text-transform: uppercase;
    margin-bottom: 1rem;
    font-family: sans-serif;
    font-weight: 700;
    /* font-family: fcb-condensed-bold; */
}


.begifc_storyteller-container {
    position: relative;
    padding: 0rem 2.4rem 0rem;
    background-color: #fff;
    /* border: .1rem solid #efefef; */
}

.begifc_storyteller-container .widget {
    /*background: #fff;*/
    clear: both;
    padding: 0rem 2.4rem 0rem;
    z-index: 20;
    position: relative;
}
.wrapper {
    width: 100%;
    max-width: 148rem;
    margin: 0 auto;
    padding: 0;
    position: relative;
}

.begifc_storyteller-container header {
    margin-bottom: 1rem;
    display: flex;
    justify-content: center;
}
.widget__header {
    text-align: center;
}


.begifc_storyteller-container .widget__content {
    display: flex;
    flex-direction: column-reverse;
}
.widget_inner{
    height: auto;
    min-height: 13rem;
    max-height: 13rem;
}
.widget_inner_bq{
    --storyteller-inset-start: 12px;
    --storyteller-inset-end: 12px;

    height: 100%;
    box-sizing: border-box;
    display: flex;
    /*font-family: var(--storyteller-font);*/
    position: relative;
    padding-left: calc(var(--storyteller-row-start-inset) - var(--storyteller-row-start-round-cell-stroke-width, 0px));
    padding-right: calc(var(--storyteller-row-end-inset) - var(--storyteller-row-end-round-cell-stroke-width, 0px));
}

.storyScrollBtn-xpMB7W {
    display: flex;
    /* visibility: hidden; */
    opacity: 0;
    transition: visibility 0s ease 100ms;
    -webkit-animation: fadeOut-2x6YH0 ease 100ms;
    animation: fadeOut-2x6YH0 ease 100ms;
    height: 100%;
    align-items: center;
    justify-content: center;
    pointer-events: none;
    z-index: 5;
}


.storyScrollBtn-xpMB7W.scrollLeft-INWdYG::before {
    background: linear-gradient(to right,#fff 0%, rgba(0, 0, 0, 0) 100%);
}

.storyScrollBtn-xpMB7W:not(.hideFade-Sn5uus)::before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    width: 72px;
    height: 100%;
}

.storyScrollBtn-xpMB7W:not(.outside-K9wYJP)::before {
    inset: 0;
}

.scrollArrow-7oRJQx {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border-width: 0;
    background: var(--storyteller-scroll-indicator-background);
    z-index: 1;
    cursor: pointer;
    pointer-events: all;
    background-repeat: no-repeat;
    background-position: 50%;
    background-size: 14px 10px;
    background-image: var(--storyteller-scroll-indicator-icon);
}

.storyScrollBtn-xpMB7W.scrollLeft-INWdYG .scrollArrow-7oRJQx svg, .storyScrollBtn-xpMB7W.scrollLeft-INWdYG .scrollArrow-7oRJQx img {
    /* -webkit-transform: rotate(180deg); */
    /* transform: rotate(180deg); */
}

.storytellerContainer-VXwt8t {
    flex: 1;
    display: flex;
    flex-wrap: nowrap;
    touch-action: auto;
    overflow-x: auto;
    overflow-y: hidden;
    position: relative;
    scroll-behavior: smooth;
    scrollbar-width: none;
    -ms-overflow-style: none;
    padding-left: var(--storyteller-row-start-round-cell-stroke-width, 0px);
    padding-right: var(--storyteller-row-end-round-cell-stroke-width, 0px);
}


.storyCellContainer-x7\+6pO.rectangular-Kd4AdR.fullHeight-0JgPjh {
    height: 100%;
    width: 100px;
    height: 150px;
    flex-shrink: 0;
    height: 100%;
    width: auto;
}

.storyCellContainer-x7\+6pO:first-child {
    margin-left: 0;
}

.storytellerContainer-VXwt8t a {
    text-decoration: none;
    touch-action: auto;
}

.storyteller-bq7AJb *, .storyteller-bq7AJb div, .storyteller-bq7AJb *:before, .storyteller-bq7AJb *:after {
    box-sizing: border-box;
}

.storyCellContainer-x7\+6pO {
    text-decoration: none;
    margin: 0 calc(var(--storyteller-row-tile-spacing) / 2);
    position: relative;
}

.rectangular-Kd4AdR .storyCell-WAKj5m {
    border-radius: var(--storyteller-primitives-corner-radius);
    padding: var(--storyteller-rectangular-tile-padding);
    box-shadow: none;
    color: #fff;
    justify-content: flex-end;
    will-change: box-shadow;
}

.storyteller-bq7AJb *, .storyteller-bq7AJb div, .storyteller-bq7AJb *:before, .storyteller-bq7AJb *:after {
    box-sizing: border-box;
}

.storyCell-WAKj5m {
    border: 0;
    display: flex;
    flex-direction: column;
    height: 100%;
    overflow: hidden;
    position: relative;
    transition: box-shadow .2s ease-in-out;
    touch-action: auto;
    width: 100%;
    word-break: break-word;
}


.storyCell-WAKj5m .rectangularBackground-eXSm7Y {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    border-radius: 8px;
}

.storyCell-WAKj5m img {
    -webkit-user-select: none;
    user-select: none;
}

.storyCell-WAKj5m>* {
    z-index: 3;
}


.chip-iMw6G6.newChipAlignLeft-Awj7bB {
    left: 8px;
}

.chip-iMw6G6.newChip-mzzrHi {
    background: #f5bf2c;
}

.chip-iMw6G6.inRow-2DyRTh {
    position: absolute;
}

.chip-iMw6G6 {
    border-radius: 8px;
    font-size: 11px;
    letter-spacing: -0.01em;
    line-height: 1.2727272727;
    padding: 1px 5px;
    text-transform: uppercase;
    top: 8px;
    color: #000;
    font-weight: 600;
}

.storyCell-WAKj5m>* {
    z-index: 3;
}


.storyteller-container [class*="storyTitle"] {
    margin: calc(-1*8px);
    padding: calc(2* 8px 8px 8px);
    width: calc(100% + 2* 8px);
}

.rectangular-Kd4AdR .storyTitle-OMQgdD {
    color:#eee;
    text-align: center;
    font-size: 18px;
}

.rectangular-Kd4AdR .storyTitle-OMQgdD{
    color: #eee;
    text-align: center;
    font-size: 18px;
    /* background: #0000009e; */
    background-image: linear-gradient(to top, #000000fa, #00000045, #fafafa14);
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    padding: 10px 0;
    position: absolute;
    height: 100%;
    width: 100%;
    display: flex
;
    flex-direction: column;
    align-items: center;
    justify-content: end;
}

.mglr{
    margin: 5px 0px;
}


.storyScrollBtn-xpMB7W.scrollRight-HxVo0U {
    right: 20px;
}

@media(max-width:500px){
    .storyScrollBtn-xpMB7W.scrollRight-HxVo0U {
    right: 0px;
}

.begifc_storyteller-container .widget{
    padding: 0rem .4rem 0rem;
}
}

.storyScrollBtn-xpMB7W:not(.outside-K9wYJP) {
    position: absolute;
    width: 72px;
    display: flex;
    justify-content: flex-end;
}

.storyScrollBtn-xpMB7W.visible-zorq0n {
    visibility: visible;
    transition: visibility 0s ease 0s;
    opacity: 1;
    -webkit-animation: fadeIn-gTr8K8 ease 100ms;
    animation: fadeIn-gTr8K8 ease 100ms;
}



.storyScrollBtn-xpMB7W.scrollRight-HxVo0U::before {
    background: linear-gradient(to left, #fff 0%, rgba(0, 0, 0, 0) 100%);
}


.storyScrollBtn-xpMB7W:not(.hideFade-Sn5uus)::before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    width: 100px;
    height: 100%;
}

.storyScrollBtn-xpMB7W:not(.outside-K9wYJP)::before {
    inset: 0;
}

.scrollArrow-7oRJQx {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border-width: 0;
    background: #fff;
    z-index: 1;
    cursor: pointer;
    pointer-events: all;
    background-repeat: no-repeat;
    background-position: 50%;
    background-size: 14px 10px;
}


.storyteller-bq7AJb {
    height: 100%;
    box-sizing: border-box;
    display: flex;
    position: relative;
    padding-left: calc(var(--storyteller-row-start-inset) - var(--storyteller-row-start-round-cell-stroke-width, 0px));
    padding-right: calc(var(--storyteller-row-end-inset) - var(--storyteller-row-end-round-cell-stroke-width, 0px));
}
</style>


<div class="section-full bg-white ">
<div class="containerr">

<section class="begifc_storyteller-container">






<div class="widget wrapper" style="margin: 05px 0px;">

<div class="section-head text-center ">
                    <h2 class="h2">BEGI STARS FC UPDATES</h2>
                    <div class="dez-separator-outer "><div class="dez-separator bg-primary style-liner"></div></div>
                    <!-- <p>Trending news and tips happening in BegiFC.</p> -->
                </div>

<!-- <header class="widget__header" style="text-align: left;">
<span class="begifc_stories"> BEGI FC UPDATES</span>
</header> -->
<!-- <img src="images/logo.png" width="193" height="89" alt=""> -->

<div class="widget__content">

    <div class="widget_inner">
        <div class="widget_inner_bq">

        <div class="storyScrollBtn-xpMB7W scrollLeft-INWdYG ">
            <button class="scrollArrow-7oRJQx prevbtn" >
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" 
            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
            <path d="m5 12 7 6v-5h6v-2h-6V6z"></path></svg>
        </button>
        </div>

        
      



        <div class="storytellerContainer-VXwt8t" style="gap: 10px;">

        <a href="#" 
        class="storyCellContainer-x7+6pO rectangular-Kd4AdR fullHeight-0JgPjh" style="width: 170px; height: 200px;">
        <div class="storyCell-WAKj5m">
            <img src="./images/images/beg_thumbnail/thumbnail.jpg" alt="Ready 🤟" class="rectangularBackground-eXSm7Y" style="opacity: 1;"><span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>
        <div class="storyTitle-OMQgdD">Unstoppable Force</div>

        <span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>

        </div>
        </a>

 
        <a href="#" 
        class=" storyCellContainer-x7+6pO rectangular-Kd4AdR fullHeight-0JgPjh" style="width: 170px; height: 200px;">
        <div class="storyCell-WAKj5m">
            <img src="./images/images/beg_thumbnail/thumbnail2.jpg" alt="Ready 🤟" class="rectangularBackground-eXSm7Y" style="opacity: 1;"><span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>
        <div class="storyTitle-OMQgdD">Rising Stars</div>

        <span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>

        </div>
            </a>




            <a href="#" 
        class=" storyCellContainer-x7+6pO rectangular-Kd4AdR fullHeight-0JgPjh" style="width: 170px; height: 200px;">
        <div class="storyCell-WAKj5m">
            <img src="./images/images/beg_thumbnail/thumbnail3.jpg" alt="Ready 🤟" class="rectangularBackground-eXSm7Y" style="opacity: 1;"><span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>
        <div class="storyTitle-OMQgdD">Magic Feets</div>

        <span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>

        </div>
            </a>



            <a href="#" 
        class=" storyCellContainer-x7+6pO rectangular-Kd4AdR fullHeight-0JgPjh" style="width: 170px; height: 200px;">
        <div class="storyCell-WAKj5m">
            <img src="./images/images/beg_thumbnail/thumbnail4.jpg" alt="Ready 🤟" class="rectangularBackground-eXSm7Y" style="opacity: 1;"><span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>
        <div class="storyTitle-OMQgdD">Silent Assassin</div>

        <span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>

        </div>
            </a>


            <a href="#" 
        class=" storyCellContainer-x7+6pO rectangular-Kd4AdR fullHeight-0JgPjh" style="width: 170px; height: 200px;">
        <div class="storyCell-WAKj5m">
            <img src="./images/images/beg_thumbnail/thumbnail5.jpg" alt="Ready 🤟" class="rectangularBackground-eXSm7Y" style="opacity: 1;"><span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>
        <div class="storyTitle-OMQgdD">The Sniper</div>

        <span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>

        </div>
            </a>




            <a href="#" 
        class=" storyCellContainer-x7+6pO rectangular-Kd4AdR fullHeight-0JgPjh" style="width: 170px; height: 200px;">
        <div class="storyCell-WAKj5m">
            <img src="./images/images/beg_thumbnail/thumbnail6.jpg" alt="Ready 🤟" class="rectangularBackground-eXSm7Y" style="opacity: 1;"><span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>
        <div class="storyTitle-OMQgdD">Defensive Rock</div>

        <span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>

        </div>
            </a>



            <a href="#" 
        class=" storyCellContainer-x7+6pO rectangular-Kd4AdR fullHeight-0JgPjh" style="width: 170px; height: 200px;">
        <div class="storyCell-WAKj5m">
            <img src="./images/images/beg_thumbnail/thumbnail7.jpg" alt="Ready 🤟" class="rectangularBackground-eXSm7Y" style="opacity: 1;"><span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>
        <div class="storyTitle-OMQgdD">Clutch King</div>

        <span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>

        </div>
            </a>


            <a href="#" 
        class=" storyCellContainer-x7+6pO rectangular-Kd4AdR fullHeight-0JgPjh" style="width: 170px; height: 200px;">
        <div class="storyCell-WAKj5m">
            <img src="./images/images/beg_thumbnail/thumbnail8.jpg" alt="Ready 🤟" class="rectangularBackground-eXSm7Y" style="opacity: 1;"><span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>
        <div class="storyTitle-OMQgdD">Sharp Shooters</div>

        <span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>

        </div>
            </a>

            <a href="#" 
        class=" storyCellContainer-x7+6pO rectangular-Kd4AdR fullHeight-0JgPjh" style="width: 170px; height: 200px;">
        <div class="storyCell-WAKj5m">
            <img src="./images/images/beg_thumbnail/thumbnail9.jpg" alt="Ready 🤟" class="rectangularBackground-eXSm7Y" style="opacity: 1;"><span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>
        <div class="storyTitle-OMQgdD">Speed Demons</div>

        <span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>

        </div>
            </a>

        

            <a href="#" 
        class=" storyCellContainer-x7+6pO rectangular-Kd4AdR fullHeight-0JgPjh" style="width: 170px; height: 200px;">
        <div class="storyCell-WAKj5m">
            <img src="./images/images/beg_thumbnail/thumbnail10.jpg" alt="Ready 🤟" class="rectangularBackground-eXSm7Y" style="opacity: 1;"><span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>
        <div class="storyTitle-OMQgdD">Goal Machines</div>

        <span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>

        </div>
            </a>


            <a href="#" 
        class=" storyCellContainer-x7+6pO rectangular-Kd4AdR fullHeight-0JgPjh" style="width: 170px; height: 200px;">
        <div class="storyCell-WAKj5m">
            <img src="./images/images/beg_thumbnail/thumbnail11.jpg" alt="Ready 🤟" class="rectangularBackground-eXSm7Y" style="opacity: 1;"><span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>
        <div class="storyTitle-OMQgdD">Mastermind</div>

        <span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>

        </div>
            </a>


            <a href="#" 
        class=" storyCellContainer-x7+6pO rectangular-Kd4AdR fullHeight-0JgPjh" style="width: 170px; height: 200px;">
        <div class="storyCell-WAKj5m">
            <img src="./images/images/beg_thumbnail/thumbnail12.jpg" alt="Ready 🤟" class="rectangularBackground-eXSm7Y" style="opacity: 1;"><span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>
        <div class="storyTitle-OMQgdD">Tactical Genius</div>

        <span role="presentation" class="chip-iMw6G6 newChip-mzzrHi newChipAlignLeft-Awj7bB inRow-2DyRTh">new</span>

        </div>
            </a>


        </div>


        <div class="storyScrollBtn-xpMB7W scrollRight-HxVo0U visible-zorq0n">
            <button class="scrollArrow-7oRJQx nextbtn">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m19 12-7-6v5H6v2h6v5z"></path></svg>
            </button>
        </div>

        </div>

    </div>


</div>


</div>

</div>
</div>

</section>