<?php foreach ($danhmucNoibat as $key => $value) {
        $sanphamcon = $db->rawQuery("select ten_$lang,photo,photo1,tenkhongdau_$lang as tenkhongdau , type , id,link from #_baiviet where hienthi=1 and id_list=? order by id desc limit 0,$limitsp",array($value['id']));
    ?>
<section class="sanpham area-sanpham"
    style="background-image: url(<?= _upload_hinhanh_l.$bg_sanpham['photo']?>) !important; background-size:cover;">

    <div class="container">

        <div class="row">

            <div class="item col-12 mb20 mt20i">

                <div class="titleSP">
                    <div class="titleSPb"><?=$value['ten']?></div>
                </div>

            </div>

            <div class="mt20 item col-12 span12">
                <div class="grid-12 gap5 gap10-sm">

                    <?php foreach ($sanphamcon as $k => $v) {?>
                    <div class="span4 span6-sm">
                        <div class="item__products wow fadeInUp" data-wow-delay=" <?=$k * '0.2'?>s">
                            <div class="thumb__products <?= ($v["photo1"] != "")?"":" zoomSP "?> o-hidden thumb-box">
                                <?php if($v["link"] != ""){?>
                                <div class="gvideo">
                                    <a href="<?= $v["link"]?>" data-fancybox="video_pro<?=$key.$k?>">
                                        <span>
                                            <i class="fas fa-play" style="color:#fff;"></i>
                                        </span>
                                    </a>
                                </div>
                                <?php }?>
                                <a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>">
                                    <span class="wrapper-line__box-outline1"></span>
                                    <span class="wrapper-line__box-outline2"></span>
                                    <span class="wrapper-line__box-outline3"></span>
                                    <span class="wrapper-line__box-outline4"></span>
                                    <div class="hover-zoom">
                                        <img src="<?=_upload_baiviet_l.$v["photo"]?>" class="js-loadcover"
                                            alt="<?=$v["ten_".$lang]?>" />
                                    </div>
                                    <?php if($v["photo1"] != ""){?>
                                    <div class="hiddenimg">
                                        <img src="<?=_upload_baiviet_l.$v["photo1"]?>" class="js-loadcover"
                                            alt="<?=$v["ten_".$lang]?>" />
                                    </div>
                                    <?php }?>
                                    <a href="<?= ($v['link'] != '')? $v['link'] : $v["type"] ."/". $v["tenkhongdau"] ?>"
                                        <?= ($v['link'] != '')?"data-fancybox=videos'":"" ?>
                                        title="<?=$v["ten_".$lang]?>">

                                    </a>
                                    <div class="hover-products">
                                        <div class="hover-products_desc"><span
                                                class="hover-products_bold"><?=$v["ten_".$lang]?></span>
                                            <span class="fontRainSP">
                                                <?= $row_setting["chuky"] ?>
                                            </span>
                                        </div>
                                    </div>

                                </a>

                            </div>

                        </div>
                    </div>
                    <?php }?>

                    <div class="span12">
                        <div class="d-flex justify-content-center">
                            <a href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>" class="borderGT pd2">
                                <div class="f1GT pd2">
                                    <button class="wrapper-button__intro"><span>Xem thêm</span></button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>
<?php }?>