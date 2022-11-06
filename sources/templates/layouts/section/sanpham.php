<section class="sanpham area-sanpham pt85"
    style="background-image: url(<?= _upload_hinhanh_l.$bg_sanpham['photo']?>) !important; background-size:cover;">

    <div class="container">

        <div class="row">

            <div class="item col-12 mb20 mt20i">

                <div class="wrapper-title__news wow slideInLeft" data-wow-delay="0.2s">

                    <a href="san-pham" rel="dofollow" title="Sản phẩm">

                        <span><?= $row_setting["chuky"] ?></span>

                    </a>

                </div>

                <div class="titleSP">
                    SẢN PHẨM
                    <div class="titleSPb">TIÊU BIỂU</div>
                </div>

            </div>

            <div class="mt20 item col-12 span12">
                <div class="grid-12 gap5 gap10-sm">
                    <?php foreach ($danhmucNoibat as $key => $value) {
        $pros = $db->rawQuery("select ten_$lang,photo,photo1,tenkhongdau_$lang as tenkhongdau , type , id from #_baiviet where hienthi=1 and noibat=1 and id_list=? order by id desc",array($value['id']));
    ?>
                    <?php foreach ($pros as $k => $v) {?>
                    <div class="span4 span6-sm">
                        <div class="item__products wow fadeInUp" data-wow-delay="0.2s">
                            <div class="thumb__products o-hidden thumb-box">
                                <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" title="<?=$v["ten_".$lang]?>">
                                    <span class="wrapper-line__box-outline1"></span>
                                    <span class="wrapper-line__box-outline2"></span>
                                    <span class="wrapper-line__box-outline3"></span>
                                    <span class="wrapper-line__box-outline4"></span>
                                    <img src="<?=_upload_baiviet_l.$v["photo"]?>" class="js-loadcover"
                                        alt="<?=$v["ten_".$lang]?>" <?=$func->errorImg()?> />
                                    <div class="hiddenimg">
                                        <img src="<?=_upload_baiviet_l.$v["photo1"]?>" class="js-loadcover"
                                            alt="<?=$v["ten_".$lang]?>" <?=$func->errorImg()?> />
                                    </div>
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
                    <?php }?>
                    <div class="span12">
                        <div class="d-flex justify-content-center">
                            <a href="<?=$moTaGioiThieuThanhXuan['type']?>" class="borderGT pd2">
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