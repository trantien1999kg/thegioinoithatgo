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
                        <div class="gapform">
                            <div class="form-group ">
                                <input type="text" name="data[fullname]" class="css-input" id="dangkyname"
                                    placeholder="HỌ VÀ TÊN">
                            </div>
                            <div class="col-12 flex-form">
                                <div class="form-group mailform">
                                    <input type="email" name="data[email]" class="css-input mailform" id="dangkyEmail"
                                        placeholder="NHẬP EMAIL">
                                </div>
                                <div class="form-group phoneform">
                                    <input type="number" name="data[phone]" class="txt-input-number phoneform css-input"
                                        id="dangkyPhone" required placeholder="NHẬP SỐ ĐIỆN THOẠI">
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="data[content]" id="dangkyMessage" class="css-input formNoidung"
                                    placeholder="NỘI DUNG"></textarea>
                            </div>
                            <div class="form-group mt-30">
                                <div class="box">
                                    <div class="gap20vw">

                                        <div class="khungcapcha">
                                            <img height="40" class="cs-pointer imgcapcha" src="img.php"
                                                onclick="$(this).attr('src', 'img.php?rand=' + Math.random())"
                                                alt="Mã capcha" />
                                        </div>

                                        <div class="form-group nhapcapcha">
                                            <input type="text" name="data[capcha]" class="capcha css-input capcha"
                                                id="dangkyCapcha" required placeholder="NHẬP MÃ CAPCHA">
                                        </div>

                                        <div class="form-button">
                                            <button type="button" id="dangky-contact"
                                                class="li-btn-3 guiform">GỬI</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>