<section class="area-video thumb-box wow fadeInUp" data-wow-delay="0.5s"
    style=" text-align: center; position: relative;">
    <div class="owl-carousel owl-theme" id="owl-video">
        <?php foreach($videos as $key => $value){ ?>
        <div class="videoslide">
            <img src="<?=_upload_hinhanh_l.$value['photo']?>" alt="<?=$value['ten']?>" class="fullVW">
            <div class="icon-video">
                <div class="container">
                    <a itemprop="url" class="qodef-m-play qodef-magnific-popup qodef-popup-item playBut"
                        href="<?=$value['links']?>" data-fancybox="videos">
                        <div class="tenvideo">
                            <?=$value['ten']?>
                        </div>
                        <div class="motavideo">
                            <?= htmlspecialchars_decode($value['mota']) ?>
                        </div>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="11.250vw"
                            height="11.250vw" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7"
                            xml:space="preserve">

                            <polygon class='triangle' id="XMLID_18_" fill="none" stroke-width="5px"
                                stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                        73.5,62.5 148.5,105.8 73.5,149.1 " />
                            <circle class='circle' id="XMLID_17_" fill="none" stroke-width="5px" stroke-linecap="round"
                                stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />
                        </svg>
                        <div class="modelstyle">
                            Model style
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

</section>

<style>
.circle {
    stroke: white;
    stroke-dasharray: 650;
    stroke-dashoffset: 0;
    -webkit-transition: all 1s ease-in-out;
    opacity: 1;
}

.playBut {
    /*  border: 1px solid red;*/
    display: inline-block;
    -webkit-transition: all 0.5s ease;
}

.playBut .triangle {
    -webkit-transition: all 0.7s ease-in-out;
    stroke-dasharray: 240;
    stroke-dashoffset: 480;
    stroke: white;
    transform: translateY(0);
}

.playBut:hover .triangle {
    stroke-dashoffset: 0;
    opacity: 1;
    stroke: white;
    animation: nudge 0.7s ease-in-out;
}

@keyframes nudge {
    0% {
        transform: translateX(0);
    }

    30% {
        transform: translateX(-5px);
    }

    50% {
        transform: translateX(5px);
    }

    70% {
        transform: translateX(-2px);
    }

    100% {
        transform: translateX(0);
    }
}

.playBut:hover .circle {
    stroke-dashoffset: 650;
    opacity: 0;
}

.qodef-m-play::before {
    content: "";
    position: absolute;
    top: 50%;
    right: -25.1vw;
    width: 25.347vw;
    height: 0.139vw;
    background-color: white;
    transform: translateY(-50%);
    transition: width 1s;
}

.qodef-m-play::after {
    content: "";
    position: absolute;
    top: 50%;
    left: -25.069vw;
    width: 25.347vw;
    height: 0.139vw;
    background-color: white;
    transform: translateY(-50%);
    transition: width 1s;
}

.qodef-m-play:hover::before {
    width: 0px !important;
}

.qodef-m-play:hover::after {
    width: 0px !important;
}

.tenvideo {
    font-size: 2.083vw;
    font-family: fontAVOb;
    color: white;
    position: absolute;
    left: -25.069vw;
    top: 2.569vw;
    letter-spacing: 1.389vw;
}

.motavideo {
    font-size: 2.083vw;
    font-family: fontAVO;
    color: white;
    position: absolute;
    left: -25.069vw;
    top: 7.194vw;
}

.modelstyle {
    font-size: 3.856vw;
    position: absolute;
    font-family: HELGA;
    right: -28.819vw;
    top: 2.083vw;
    letter-spacing: 10px;
}
</style>