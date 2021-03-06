<?php $data["title"] = "LIÊN HỆ"; ?>
<?php require "header.php"; ?>
<div class="uk-section-large contact box1 uk-background-cover uk-background-norepeat">
    <div class="uk-container uk-container-small">
        <div class="uk-margin-large uk-light">
            <h2 class="title_g_2 uk-text-center uk-text-uppercase">Thông tin liên hệ</h2>
            <div class="uk-text-center">
                <div class="line1 uk-position-relative uk-display-inline-block uk-border-circle">
                    <span class="uk-display-inline-block line-left uk-position-center-left-out"></span>
                    <span class="uk-display-inline-block line-right uk-position-center-right-out"></span>
                </div>
            </div>
        </div>
        <div class="uk-child-width-1-2@m uk-flex-center uk-grid-small uk-grid-40-m uk-grid-match" uk-grid>
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
    </div>
</div>
<?php require "footer.php"; ?>