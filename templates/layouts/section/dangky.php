<section class="dangkybaogia pb50"
    style="background-image: url(<?= _upload_hinhanh_l.$bg_dangky['photo']?>) !important; background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="col-12 item">
                <div class="dangky-form-content pt-sm-55 pt-xs-55">
                    <div class="bocongiuacho">
                        <h3 class="dangky-page-title dangkyindex mg-0 t-uppercase">ĐĂNG KÝ</h3>
                    </div>

                    <div class="nhantuvan">NHẬN TƯ VẤN BÁO GÍA THEO YÊU CẦU</div>
                    <div class="dangky-form mt20">
                        <form action="" id="booking-form" name="booking-form" method="post" accept-charset="utf-8"
                            enctype="multipart/form-data">
                            <div class="gapform">
                                <div class="form-group ">
                                    <input type="text" name="data[ten_vi]" class="css-input" id="dangkyname"
                                        placeholder="HỌ VÀ TÊN">
                                </div>
                                <div class="col-12 flex-form">
                                    <div class="form-group mailform">
                                        <input type="text" name="data[email]" data-validate data-message="Email không được để trống" data-validate-email class="css-input mailform"
                                            id="dangkyEmail" placeholder="NHẬP EMAIL">
                                    </div>
                                    <div class="form-group phoneform">
                                        <input type="text" name="data[dienthoai]" data-validate data-message="Số điện thoại không được để trống" data-validate-phone
                                            class="txt-input-number phoneform css-input" id="dangkyPhone" required
                                            placeholder="NHẬP SỐ ĐIỆN THOẠI">
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="data[noidung]" id="dangkyMessage" class="css-input formNoidung"
                                        placeholder="NỘI DUNG"></textarea>
                                </div>
                                <div class="form-group mt-30">
                                    <div class="box">
                                        <div class="gap20vw">

                                            <div class="khungcapcha">
                                                <span id="captchacode"></span>
                                                <a href="javascript:void(0)" class="js-captcha" data-target="#captchacode">
                                                    <i class="fas fa-sync-alt"></i>
                                                </a>
                                            </div>

                                            <div class="form-group nhapcapcha">
                                                <input type="text" name="captcha" class="capcha css-input capcha"
                                                    id="dangkyCapcha" required placeholder="NHẬP MÃ CAPCHA">
                                            </div>

                                            <div class="form-button buttonGui">
                                                <a href="javascript:void(0)" onclick="_FRAMEWORK.submitForm('#booking-form','',true)" class="guiform">GỬI</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>