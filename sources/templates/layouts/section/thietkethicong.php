<section class="thietkethicong">
    <div class="container">
        <div class="row">
            <div class=" col-12 title area-index wow slideInLeft" data-wow-delay="0.2s">
                <a href="thiet-ke-thi-cong" class="titleTKTC">
                    <img src="<?=_upload_hinhanh_l.$icon_tktc['photo']?>" alt="Thiết kế thi công" class="iconTKTC">
                    <h2>THIẾT KẾ THI CÔNG</h2>
                </a>
            </div>
            <div class="owl-carousel owl-theme item" id="owl-tktc">
                <?php foreach($tktc1 as $key => $value){?>
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <div class="hoverimg-modified thietke_thumb thumb-box">
                        <div class="tenTKTC">
                            <?= $value['ten']?>
                        </div>
                        <a href="<?=$value['type']?>/<?=$value['tenkhongdau']?>">
                            <img src="<?= _upload_baiviet_l.$value['photo']?>" alt="" class="js-loadcover">
                            <div class="hover-box">

                                <div class="hover-box_desc"><span class="hover-box_bold"><?= $value['ten']?></span>
                                    <span class="fontRainTKTC">
                                        <?= $row_setting["chuky"] ?>
                                    </span>
                                </div>
                                <span class="hover-box_button">XEM THÊM</span>
                            </div>
                        </a>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>