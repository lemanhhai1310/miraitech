<?php $data["title"] = "TRANG CAM ON"; ?>
<?php require "header.php"; ?>
<div class="uk-section-xlarge thanks uk-position-relative">
    <div class="uk-container uk-container-small">
        <h3 class="uk-text-center uk-margin title_g_3">
            <span>CẢM ƠN BẠN!</span> ĐÃ TIN TƯỞNG<br>
            VÀ LỰA CHỌN SẢN PHẨM <span>CỦA MIRAITECH</span>
        </h3>
        <div class="desc-thanks uk-text-center">“Chúng tôi hy vọng có thể giúp doanh nghiệp của bạn đạt được doanh thu và sự phát triển trong tương lai. Đội ngũ chuyên gia giàu kinh nghiệm sẽ liên hệ và tư vấn cho bạn trong thời gian sớm nhất”.</div>
    </div>
    <span class="uk-display-inline-block uk-position-bottom-center arrow-up"></span>
</div>
<div class="uk-section box1 uk-background-cover uk-background-norepeat" data-src="images/bg_thanks.png" uk-img>
    <div class="uk-container uk-container-small">
        <h3 class="uk-text-center uk-margin-large title_g_3">
            <span>CHỌN MIRAITECH</span> <br>
            CHỌN THÀNH CÔNG CHO DOANH NGHIỆP!
        </h3>
        <div class="uk-child-width-1-2@m uk-flex-center uk-grid-medium uk-grid-match" uk-grid>
            <?php
            $data = array(
                array(
                    "name" => "Tp. Hồ Chí Minh",
                    "phone" => "0975 777 317",
                    "add" => "09B, Cửu Long, Tân Bình, TPHCM, Việt Nam",
                    "check" => "1",
                ),
                array(
                    "name" => "Hà Nội",
                    "phone" => "0986 720 385 ",
                    "add" => "2113, Flc 18 phạm hùng. Mỹ đình 2. Nam từ liêm. Hà nội, Việt Nam",
                    "check" => "0",
                ),
                array(
                    "name" => "Tp. Đà Nẵng",
                    "phone" => "0915 10 55 10",
                    "add" => "81C Lê Văn Hiến, Khuê Mỹ, NGũ Hành Sơn, Việt Nam",
                    "check" => "0",
                ),
            );
            foreach ($data as $k => $v): ?>
                <div>
                    <div class="uk-margin uk-height-1-1 uk-grid-small uk-child-width-auto uk-grid uk-light">
                        <label class="uk-position-relative uk-width-1-1 uk-height-1-1">
                            <input class="uk-radio uk-position-center-left input1" type="radio" name="radio2" <?= ($v['check']) ? 'checked' : '' ?>>
                            <div class="uk-padding-small item_chinhanh uk-height-1-1">
                                <div uk-grid>
                                    <div class="uk-width-1-6" style="width: 50px;"></div>
                                    <div class="uk-width-expand">
                                        <h4 class="title"><?= $v['name'] ?></h4>
                                    </div>
                                </div>
                                <hr>
                                <div uk-grid>
                                    <div class="uk-width-1-6" style="width: 50px;"></div>
                                    <div class="uk-width-expand">
                                        <ul class="uk-list">
                                            <li><img src="images/phone1.png" alt=""><?= $v['phone'] ?></li>
                                            <li><img src="images/maps1.png" alt=""><?= $v['add'] ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="uk-margin-medium uk-text-center camon_txt_1">
            “Tư vấn thiết kế website chuyên nghiệp”
        </div>
    </div>
</div>
<?php require "footer.php"; ?>