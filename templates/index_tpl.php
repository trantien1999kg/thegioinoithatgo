
<?php include _sections."gioithieuhomedecor.php"; ?>
<?php include _sections."thietkethicong.php"; ?>
<?php include _sections."sanpham.php"; ?>
<?php include _sections."danhmucnoibat.php"; ?>
<?php include _sections."video.php"; ?>
<?php include _sections."tintuc.php"; ?>
<section class="wrappers-unit" 
    style="background-image: url(<?= _upload_hinhanh_l.$bg_tieuchi['photo']?>) !important; background-size:cover;">
    
    <div class="container">

        <div class="tthomedecor-top">

            <div class="title wow fadeInLeft" data-type="about">
                <div class="lydo">
                <?= $row_setting['scrolltext1_vi']?>
                </div>
                <h2><?= $row_setting['scrolltext2_vi']?></h2>

            </div>
            

        </div>

        <div class="row">
            <div class="grid-12 col-12 gap40 gap10-sm item">
            <?php foreach($sumenh as $key => $value){?>
                <div class="span4 span12-sm">
                    <div class="sumenh wow fadeInUp" data-wow-delay="<?= $key*0.2?>s">
                        <div class="sumenh_thumb">
                            <img src="<?=_upload_baiviet_l.$value['photo']?>" alt="<?=$value['ten']?>" class="tieuchi">
                        </div>
                        <div class="sumenh_content">
                            <?=$value['ten']?>
                        </div>
                    </div>
                </div>
            <?php }?>
            </div>
        </div>
    </div>
</section>

<?php include _sections."feedback.php"; ?>
<?php include _sections."dangky.php"; ?>
<style>
    .title[data-type=about] h2 {
    font-size: 5vw;
    text-align: center;
    line-height: 1.5;
    font-weight: 800;
    font-family: Aptimab;
    background-image: url(<?= _upload_hinhanh_l.$bg_chu['photo']?>);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background-clip: text;
    text-fill-color: transparent;
    -webkit-animation-name: runbgtext;
    animation-name: runbgtext;
    -webkit-animation-duration: 10s;
    animation-duration: 10s;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
    background-size: cover;
}
@keyframes runbgtext {
    0%, 100% {
        background-position: 50% 35%;
    }
    50% {
        background-position: 50% 65%;
    }
}
.lydo {
    font-size: 2.5vw;
    text-align: center;
    line-height: 1.5;
    font-weight: 800;
    font-family: Aptimab;
    background-image: url(<?= _upload_hinhanh_l.$bg_chu['photo']?>);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background-clip: text;
    text-fill-color: transparent;
    -webkit-animation-name: runbgtext;
    animation-name: runbgtext;
    -webkit-animation-duration: 10s;
    animation-duration: 10s;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
    background-size: cover;
}
</style>