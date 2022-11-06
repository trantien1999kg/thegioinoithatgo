<section class="wrapper-news">

    <div class="container">

        <div class="row d-flex flex-wrap mb60">

            <div class=" col-12 title area-index wow slideInLeft" data-wow-delay="0.2s">
                <a href="thiet-ke-thi-cong" class="titleTKTC">
                    <img src="<?=_upload_hinhanh_l.$icon_tintuc['photo']?>" alt="TIN TỨC NỔI BẬT" class="iconTINTUC">
                    <h2>TIN TỨC NỔI BẬT</h2>
                </a>
            </div>

            <div class="tintuc-tin mt20 item">
                <div class="owl-carousel owl-theme owl-carousel-loop quick-slide" data-height="575" data-dot="1"
                    data-nav='1' data-loop='0' data-play='0' data-lg-items='3' data-md-items='2' data-sm-items='2'
                    data-xs-items="1" <?php if($deviceType=="computer"){ ?> data-margin='30' <?php }else{ ?>
                    data-margin='8' <?php }?>>

                    <?php 
                    foreach($tintuc as $key => $value){ 
                        $tacgia = $db->rawQueryOne("select id , ten_$lang as ten , photo from #_baiviet where hienthi=1 and id=?  order by stt asc,id desc",array($value['id_tacgia']));
                        
                        ?>

                    <div class="section-handbook__box p-relative o-hidden mb-m-20">
                        <div class="section-handbook__box-image hovertintuc">
                            <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>" title="<?= $value['ten']?>"
                                class="d-block p-relative">
                                <img src="<?= _upload_baiviet_l.$value['photo']?>" alt="">
                                <div class="wrappers-news__overflow">

                                    <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>" class="borderGT pd2">
                                        <div class="f1GT pd2">
                                            <button class="wrapper-button__intro"><span>Xem thêm</span></button>
                                        </div>
                                    </a>

                                </div>
                            </a>
                        </div>
                        <div class="section-handbook__box-detail p-relative">

                            <div class="section-handbook__box-detail-view d-flex align-items-center">
                                <span class="d-flex align-items-center">
                                    <img src="<?= _upload_baiviet_l.$tacgia['photo']?>" alt="<?= $tacgia['ten']?>">
                                    <span class="tentacgia"><?= $tacgia['ten']?></span>
                                </span>
                                <span class="viewTintuc"><i class="fas fa-eye"></i> <?= $value['luotxem']?> views</span>
                            </div>


                            <div class="section-handbook__box-detail-title mt15 mb20">
                                <h3 class="titleTintuc">
                                    <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>" class="line-2 "
                                        title="<?= $value['ten']?>"><?= $value['ten']?></a>
                                </h3>
                            </div>
                        </div>
                        <div class="section-handbook__box-time p-absolute wow rollIn" data-wow-delay="0.5s"
                            style="visibility: visible; animation-delay: 0.5s; animation-name: rollIn;">
                            <span>
                                <i class="fa-solid fa-calendar-days"></i> <?= date("d/m/Y",$value['ngaytao'])?>
                            </span>
                        </div>
                    </div>


                    <?php } ?>

                </div>

            </div>
        </div>

        <!-- <div class="section-handbook__box p-relative o-hidden mb-m-20">
            <div class="section-handbook__box-image">
                <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>"
                    title="<?= $value['ten']?>" class="d-block p-relative">
                    <img src="<?= _upload_baiviet_l.$value['photo']?>" alt="" class="js-loadcover" width="100%">
                </a>
            </div>
            <div class="section-handbook__box-detail p-relative">
                <div class="section-handbook__box-detail-view d-flex align-items-center">
                    <span class="d-flex align-items-center">
                        <img src="upload/baiviet/a-truong-5861.png" alt="A. Trường">
                        <span>A. Trường</span>
                    </span>
                    <span><i class="fa-light fa-eye"></i> <?= $value['luotxem']?> views</span>
                </div>
                <div class="section-handbook__box-detail-title mt15 mb20">
                    <h3 class="line-2">
                        <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>"
                            title="<?= $value['ten']?>"><?= $value['ten']?></a>
                    </h3>
                </div>
            </div>
            <div class="section-handbook__box-time p-absolute wow rollIn" data-wow-delay="0.5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: rollIn;">
                <span>
                    <i class="fa-solid fa-calendar-days"></i> <?= date("d/m/Y",$value['ngaytao'])?>
                </span>
            </div>
        </div>-->
    </div>
</section>