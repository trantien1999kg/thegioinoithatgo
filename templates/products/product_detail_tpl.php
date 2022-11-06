<!-----------TRANG CHI TIẾT SẢN PHẨM------------>
<?php
	$danhmuc_detail = $db->rawQueryOne("select id,ten_$lang as ten,type,tenkhongdau_$lang as tenkhongdau from #_baiviet_list where hienthi=1 and type=? and id=? limit 0,1",array('san-pham',$row_detail["id_list"]));
    $deschotro = $db->rawQueryOne("select mota_$lang as mota from #_company where type=?",array('desc-hotro'));
    $tin= $db->rawQuery("select ten_$lang as ten , tenkhongdau_$lang as tenkhongdau ,mota_$lang as mota, type , ngaytao, photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('tin-tuc'));

?>
<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6"></script>

<section class="product-detail mt-m-20" id="detail-product">

    <div class="container">

        <div class="grid-12 gap30 gap20-sm">
            <div class="span6 span12-sm">
                <div class="thumb__detail">
                    <a href="<?= _upload_baiviet_l.$row_detail['photo']?>" class="MagicZoom" id="Zoom-1"
                        data-options="variableZoom: true;expand: on; hint: always;zoomWidth: 300; zoomHeight: 300;">

                        <img class="col-12" loading="lazy"
                            style="aspect-ratio:100/100;width:100%;height:auto;object-fit:cover;"
                            src="<?= _upload_baiviet_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>" />

                    </a>
                </div>
                <div class="thumb__other">
                    <?php if(count($photos)>0 || $row_detail['link'] != ""){ ?>

                    <div class="img-bottom">
                        <div class="product-detail-slider owl-carousel owl-theme" id="slider__detail">
                            <?php if( $row_detail['link'] != ""){?>
                            <div class="items items-video">
                                <div class="img">
                                    <a data-fancybox="video" href="<?= $row_detail['link']?>">
                                        <img src="<?= $func->getYoutubeImg($row_detail['link'])?>" width="134"
                                            height="134" class="coverimg" alt="<?= $row_detail['ten_'.$lang]?>">
                                        <span>
                                            <i class="fas fa-play" style="color:#fff;"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <?php }?>

                            <div class="items">
                                <div class="img">
                                    <a data-zoom-id="Zoom-1" href="<?= _upload_baiviet_l.$row_detail['photo']?>"
                                        data-image="<?= _upload_baiviet_l.$row_detail['photo']?>">
                                        <img src="<?= _upload_baiviet_l.$row_detail['photo']?>"
                                            style="aspect-ratio:100/100;width:100%;height:auto;object-fit:cover;"
                                            alt="<?=$row_detail['ten_'.$lang]?>">
                                    </a>
                                </div>
                            </div>
                            <?php foreach($photos as $k=>$v){ ?>

                            <div class="items">
                                <div class="img">
                                    <a data-zoom-id="Zoom-1" href="<?= _upload_baiviet_l.$v['photo']?>"
                                        data-image="<?= _upload_baiviet_l.$v['photo']?>">
                                        <img src="<?= _upload_baiviet_l.$v['photo']?>"
                                            style="aspect-ratio:100/100;width:100%;height:auto;object-fit:cover;"
                                            alt="<?=$row_detail['ten_'.$lang]?>">
                                    </a>
                                </div>
                            </div>

                            <?php } ?>

                        </div>

                    </div>

                    <?php } ?>
                </div>
            </div>
            <div class="span6 span12-sm">
                <div class="box__detail__info">
                    <div class="name__detail">
                        <h1 class="mg0">
                            <?=$row_detail['ten_'.$lang]?>
                        </h1>
                    </div>
                    <div class="space-between col-7">
                        <div class="price_detail mt10">
                            <span><?=($row_detail['giaban']!=0) ? $func->changeMOney($row_detail['giaban'],$lang) : 'Liên hệ'?></span>
                        </div>
                        <?php if($row_detail["giacu"] !=0){ ?>
                        <del
                            class="wrap-productshot__boxbc-content-price-old"><?=($row_detail["giacu"]!=0) ?  $func->changeMoney($row_detail["giacu"],$lang):'';?></del>
                        <?php } ?>
                    </div>
                    <div class="box__options mt10">
                        <div class="row">
                            <div class="item col-6">
                                <div class="text__detail">
                                    <span class="text__detail_label">Lượt xem: </span><?=$row_detail["luotxem"]?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if($row_detail["mota_$lang"] != ""){?>
                    <div class="box__options mt10">
                        <div class="row">
                            <div class="item col-12">
                                <div class="text__detail">
                                    <?=$func->clear_decode($row_detail["mota_$lang"])?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <div class="box__options mt10">
                        <div class="i-shareLinks">
                            <span class="text__detail_label"> Chia sẻ: </span>
                            <?php include_once _source.'shareLinks.php'?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="wrap-categoryhot container col-12 mt30 mb30">

    <div class="grid wide col-12">

        <div class="row2 d-flex flex-wrap">

            <div class="col4 col-12 l-12 m-12 c-12 mb20" style="">

                <div class="">

                    <div class="wrap-categoryhot-title wrap-categoryhot-title--modifiers1">

                        <ul class="nav__product-detail ">

                            <li class="nav__product-detail-items">

                                <a class="nav__product-details-links tablinks active" data-target="MoTa">Thông tin chi
                                    tiết</a>

                            </li>

                            <li class="nav__product-detail-items">

                                <a class="nav__product-details-links tablinks" data-target="DanhGia">Đánh giá</a>

                            </li>

                        </ul>

                    </div>

                    <div class="wrap-tabpanel__detail tabcontent" id="MoTa">
                        <div class="box-content-product">
                            <div class="row">
                                <?php if($row_toc==1 && $deviceType=='computer'){?>
                                <div class="item col__left z-100m">
                                    <div class="sidebar__sticky">
                                        <div class="wrapper-toc">
                                            <div class="content ul-list-detail"></div>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                                <?php 

                                    $col_right = ($row_toc==1 && $deviceType=='computer') ? 'col__right z-100m' : 'col-12';
                        
                                ?>
                                <div class="item <?=$col_right?>">

                                    <div class="row">

                                        <div class="item col-12">

                                            <div class="">
                                                <?php if($row_detail['noidung_'.$lang] != ""){?>
                                                <div class="wrapper-toc mt20">
                                                    <div class="content ul-list-detail">
                                                        <?=htmlspecialchars_decode($row_detail['noidung_'.$lang])?>
                                                    </div>
                                                </div>
                                                <?php }else{?>
                                                <p>Nội dung đang được cập nhật...</p>
                                                <?php }?>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="wrap-tabpanel__detail tabcontent" id="DanhGia">

                        <div class="box-detail-content">

                            <div class="wrapper-toc">

                                <div class="fb-comments" data-href="<?= $func->getCurrentPageURL() ?>" data-width="100%"
                                    data-numposts="5"></div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


    </div>

</section>

<?php if(count($tintuc)>0){ ?>

<section class="wrap-category__index mb30 mt">
    <div class="grid wide grid-mobile container">
        <div>
            <div class="">
                <div class="title-index text-left justify-content-start w-100 pt10 pb10">
                    <p>Sản phẩm liên quan</p>
                </div>
            </div>
            <div class="owl-carousel owl-theme carousel-product-news" id="slider__other">
                <?php foreach($tintuc as $key => $val){ ?>
                <div class="item__products wow fadeInUp" data-wow-delay=" <?=$k * '0.1'?>s">
                    <div class="thumb__products <?= ($val["photo1"] != "")?"":" zoomSP "?> o-hidden thumb-box">
                        <?php if($val["link"] != ""){?>
                        <div class="gvideo">
                            <a href="<?= $val["link"]?>" data-fancybox="video_pro<?=$k?>">
                                <span>
                                    <i class="fas fa-play" style="color:#fff;"></i>
                                </span>
                            </a>
                        </div>
                        <?php }?>
                        <a href="<?=$val["type"]?>/<?=$val["tenkhongdau"]?>" title="<?=$val["ten_".$lang]?>">
                            <span class="wrapper-line__box-outline1"></span>
                            <span class="wrapper-line__box-outline2"></span>
                            <span class="wrapper-line__box-outline3"></span>
                            <span class="wrapper-line__box-outline4"></span>
                            <div class="hover-zoom">
                                <img src="<?=_upload_baiviet_l.$val["photo"]?>" class="js-loadcover"
                                    alt="<?=$val["ten_".$lang]?>" <?=$func->errorImg()?> />
                            </div>
                            <?php if($val["photo1"] != ""){?>
                            <div class="hiddenimg">
                                <img src="<?=_upload_baiviet_l.$val["photo1"]?>" class="js-loadcover"
                                    alt="<?=$val["ten_".$lang]?>" />
                            </div>
                            <?php }?>
                            <div class="hover-products">
                                <div class="hover-products_desc"><span
                                        class="hover-products_bold line-1"><?=$val["ten_".$lang]?></span>
                                    <span class="fontRainSP">
                                        <?= $row_setting["chuky"] ?>
                                    </span>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>
                <?php } ?>

            </div>

        </div>

    </div>

</section>

<?php }?>

<script type="text/javascript">
var buttons = document.getElementsByClassName('tablinks');
var contents = document.getElementsByClassName('tabcontent');

function showContent(id) {
    for (var i = 0; i < contents.length; i++) {
        contents[i].style.display = 'none';
    }
    var content = document.getElementById(id);
    content.style.display = 'block';
}
for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", function() {
        var id = this.getAttribute('data-target');
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove("active");
        }
        this.className += " active";
        showContent(id);
    });
}
showContent('MoTa');
</script>