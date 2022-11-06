<section class="footer "
    style="background-image: url(<?= _upload_hinhanh_l.$bg_footer['photo']?>) !important; background-size:cover;">

    <div class="futto">
        <div class="container">
            <div class="row">
                <div class="col-4 w-100-m item mb20 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="mt20  original footer-top" >
                        <img src="<?=_upload_hinhanh_l.$gioiThieuThanhXuanBackGround['photo'] ?>" alt=""
                            class="logovuong">
                        <div class=" thongtinFooter">
                            <?=htmlspecialchars_decode($gioiThieuThanhXuanBackGround['mota']) ?>
                        </div>

                    </div>
                </div>
                <div class="col-8 w-100-m item mb20 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="title-footer p-relative pb20">
                        <span class="lienhenhanuudai">Liên Hệ Nhận Ưu Đãi</span>
                    </div>
                    <div class="mt20 ">
                        <form action="" method="post" id="form_footer" enctype="multipart/form-data">
                            <div class="form-item footer d-flex">
                                <div class="form-item_left">
                                    <input type="text" class="txt" name="data[email]" data-validate autocomplete="off"
                                        data-messages="<?= _emailvalid?>" data-validate-email
                                        placeholder="NHẬP EMAIL CỦA BẠN" />
                                </div>
                                <div class="form-item_right">
                                    <a href="javascript:void(0)" onclick="G.submitForm('#form_footer');"
                                        class="submit_form footer">
                                        <?= _gui?>
                                    </a>
                                </div>

                                <input type="hidden" name="data[type]" value="nhan-tin" />

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="funiture wow fadeInUp">
            <p>furniture</p>
        </div>
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-4 item colorwhite width100mobile pt15 pb50 wow fadeInLeft mb-m-20"
                        data-wow-delay="0.2s">
                        <ul>
                            <p>THÔNG TIN LIÊN HỆ</p><span></span>
                            <li><?= htmlspecialchars_decode($footer['mota'])?></li>
                        </ul>
                    </div>
                    <div class="col-3 item width100mobile  pt15 pb50 colorwhite wow fadeInDown mb-m-20"
                        data-wow-delay="0.2s">
                        <ul>
                            <p>THÔNG TIN CHÍNH SÁCH</p><span></span>
                            <?php foreach($chinhsach as $key => $value){?>
                            <li class="pt15">
                                <a href="<?= $value['type']?>/<?= $value['tenkhongdau'] ?>" class="colorwhite thongtinFooter">
                                    <img src="assets/images/homedecor/muiten.png" class="pr7"/>
                                    <?=htmlspecialchars_decode($value['ten'])?>

                                </a>
                            </li>
                            <?php }?>
                            <li class="pt15"><img src="assets/images/homedecor/bocongthuong.png" alt=""></li>


                        </ul>
                    </div>
                    <div class="col-2 item pt15 pb50 mobicol-12 wow fadeInUp mb-m-20" data-wow-delay="0.2s">
                        <ul>
                            <p>LIÊN KẾT NHANH</p><span></span>
                            
                            <li>
                                <a href="" class="colorwhite thongtinFooter">
                                    <img src="assets/images/homedecor/muiten.png"  class="pr7"/>
                                    Trang Chủ

                                </a>
                            </li>
                            <li>
                                <a href="gioi-thieu" class="colorwhite thongtinFooter">
                                    <img src="assets/images/homedecor/muiten.png"  class="pr7"/>
                                    Giới Thiệu

                                </a>
                            </li>
                            <li>
                                <a href="san-pham" class="colorwhite thongtinFooter">
                                    <img src="assets/images/homedecor/muiten.png"  class="pr7"/>
                                    Sản Phẩm

                                </a>
                            </li>
                            <li>
                                <a href="bao-gia" class="colorwhite thongtinFooter">
                                    <img src="assets/images/homedecor/muiten.png"  class="pr7"/>
                                    Báo Giá

                                </a>
                            </li>
                            <li>
                                <a href="tin-tuc" class="colorwhite thongtinFooter">
                                    <img src="assets/images/homedecor/muiten.png"  class="pr7"/>
                                    Tin Tức

                                </a>
                            </li>
                            <li>
                                <a href="lien-he" class="colorwhite thongtinFooter">
                                    <img src="assets/images/homedecor/muiten.png"  class="pr7"/>
                                    Liên Hệ

                                </a>
                            </li>
                            


                        </ul>
                    </div>
                    <div class="col-3 item width100mobile pt15 pb50 wow fadeInRight mb-m-20" data-wow-delay="0.2s">
                        <ul>
                        <p>FANPAGE</p></ul><span></span>
                        <div class="fb-page" data-href="<?=$row_setting['facebook']?>" data-width="768"
                            data-height="180" data-small-header="false" data-adapt-container-width="true"
                            data-hide-cover="false" data-show-facepile="true" data-show-posts="true">

                            <div class="fb-xfbml-parse-ignore">

                                <blockquote cite="<?=$row_setting['facebook']?>"><a
                                        href="<?=$row_setting['facebook']?>"><?=$row_setting['name_'.$lang]?></a>

                                </blockquote>

                            </div>

                        </div>
                        <ul class="pt10 justycenter" style="display: flex;">
                            <?php foreach($mangxahoi as $key => $value){?>
                            <li>
                                <a href="<?=$value['link']?>">
                                    <img src="<?=_upload_hinhanh_l.$value['photo']?>" />
                                </a>
                            </li>
                            <?php }?>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>