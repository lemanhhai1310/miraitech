<?php $data["title"] = "TRANG THIẾT KẾ WEB"; ?>
<?php require "header.php"; ?>
<div class="section_1 uk-section uk-flex uk-flex-bottom uk-background-center-center uk-background-norepeat" data-src="images/bg-thietkeweb.png" uk-img>
    <div class="uk-width-1-1">
        <div class="uk-container">
            <div class="uk-margin">
                <div class="img_icon uk-flex-inline uk-padding-small uk-border-circle">
                    <img src="images/thietkeweb_icon.png" alt="">
                </div>
            </div>
            <div class="uk-margin-small"><h1 class="uk-display-inline-block uk-text-uppercase bg_txt_1 uk-margin-remove">THIẾT KẾ</h1></div>
            <div class="uk-margin-small"><h1 class="uk-display-inline-block uk-text-uppercase bg_txt_1 uk-margin-remove">WEBSITE</h1></div>
            <div class="uk-margin-small"><h4 class="uk-display-inline-block uk-text-uppercase bg_txt_2 uk-margin-remove">cHỌN MIRAITECH - CHỌN THÀNH CÔNG!</h4></div>
        </div>
    </div>
</div>
<div class="uk-section uk-background-cover uk-background-norepeat" data-src="images/bg_form.png" uk-img>
    <div class="uk-container">
        <h2 class="uk-text-center uk-light uk-margin-medium title_g_1">Form đăng ký tư vấn</h2>
        <form action="trangcamon.php">
            <div class="uk-child-width-1-2@m" uk-grid>
                <div>
                    <fieldset class="uk-fieldset form1">
                        <div class="uk-margin">
                            <input class="uk-input" type="text" placeholder="Họ tên">
                        </div>
                        <div class="uk-margin">
                            <input class="uk-input" type="tel" placeholder="Số điện thoại">
                        </div>
                        <div class="uk-margin">
                            <textarea class="uk-textarea" rows="10" placeholder="Lĩnh vực ngành nghề"></textarea>
                        </div>
                        <div class="uk-margin-top">
                            <button type="submit" class="uk-button btn1 uk-button-primary uk-width-1-1">Gửi</button>
                        </div>
                    </fieldset>
                </div>
                <div>
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
                            "add" => "2113, Flc 18 phạm hùng. Mỹ đình 2. <br> Nam từ liêm. Hà nội, Việt Nam",
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
                        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid uk-light">
                            <label class="uk-position-relative uk-width-1-1">
                                <input class="uk-radio uk-position-center-left input1" type="radio" name="radio2" <?= ($v['check']) ? 'checked' : '' ?>>
                                <div class="uk-padding-small item_chinhanh">
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
                    <?php endforeach; ?>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="uk-section">
    <div class="uk-container uk-container-small">
        <div class="uk-margin-large uk-light">
            <h2 class="title_g_2 c1 uk-text-center uk-text-uppercase">CÂU HỎI THƯỜNG GẶP CỦA KHÁCH HÀNG</h2>
            <div class="uk-text-center">
                <div class="line1 uk-position-relative uk-display-inline-block uk-border-circle">
                    <span class="uk-display-inline-block line-left uk-position-center-left-out"></span>
                    <span class="uk-display-inline-block line-right uk-position-center-right-out"></span>
                </div>
            </div>
        </div>
        <ul class="uk-light" uk-accordion>
            <?php
            $data = array(
                array(
                    "title" => "Thiết kế Website mất thời gian bao lâu?",
                    "desc" => array(
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas laoreet pharetra leo sed dictum. Sed dapibus aliquam aliquet. Aenean vestibulum purus auctor leo dictum, vitae pellentesque nunc ultricies. Pellentesque ut dui urna. Pellentesque molestie dictum lorem in vehicula. Fusce nulla neque, volutpat vitae dui eu, ornare vestibulum risus. Phasellus id felis ex. Cras mauris lorem, scelerisque ac viverra sed, sollicitudin id urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum malesuada pulvinar orci non pretium. Morbi vestibulum fermentum sapien vel molestie. Praesent at lacus in massa dignissim dictum. Duis leo ipsum, rhoncus non metus vel, tincidunt sagittis diam. Nullam vulputate, ante non rutrum tincidunt, tortor nibh sagittis magna, nec blandit lacus est vel ipsum.",
                    ),
                    "open" => false,
                ),
                array(
                    "title" => "Website có dễ dàng tìm kiếm không?",
                    "desc" => array(
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas laoreet pharetra leo sed dictum. Sed dapibus aliquam aliquet. Aenean vestibulum purus auctor leo dictum, vitae pellentesque nunc ultricies. Pellentesque ut dui urna. Pellentesque molestie dictum lorem in vehicula. Fusce nulla neque, volutpat vitae dui eu, ornare vestibulum risus. Phasellus id felis ex. Cras mauris lorem, scelerisque ac viverra sed, sollicitudin id urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum malesuada pulvinar orci non pretium. Morbi vestibulum fermentum sapien vel molestie. Praesent at lacus in massa dignissim dictum. Duis leo ipsum, rhoncus non metus vel, tincidunt sagittis diam. Nullam vulputate, ante non rutrum tincidunt, tortor nibh sagittis magna, nec blandit lacus est vel ipsum.",
                    ),
                    "open" => false,
                ),
                array(
                    "title" => "Làm thế nào tôi có liên lạc với MIRAITECH khi tôi ở quá xa?",
                    "desc" => array(
                        "Hiện nay MIRAITECH đã đặt trụ sở tại các thành phố lớn như Hà Nội, Đà Nẵng. Điều này có thể dễ dàng để bạn an tâm, tạo điều kiện để đàm phán thuận lợi & nhanh chóng.",
                        "Tuy nhiên nếu bạn ở quá xa khu vực này, đừng lo, MIRAITECH đều có thể hỗ trợ bạn qua Skype, Zalo, Viber, điện thoại... để có thể tư vấn ký hợp đồng online cũng như hỗ trợ doanh nghiệp suốt thời gian sử dụng Web.",
                    ),
                    "open" => true,
                ),
            );
            foreach ($data as $k => $v): ?>
                <li class="<?= ($v['open']) ? 'uk-open' : '' ?>">
                    <a class="qas_1 uk-accordion-title uk-text-uppercase" href="#"><?= $v["title"] ?></a>
                    <div class="qas_2 uk-accordion-content">
                        <?php foreach ($v["desc"] as $k1 => $v1): ?>
                            <p><?= $v1 ?></p>
                        <?php endforeach; ?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<div class="support_1 uk-section-xsmall uk-background-center-center uk-flex uk-flex-middle uk-background-norepeat uk-background-default" data-src="images/bg_support_girl.png" uk-img>
    <div class="uk-width-1-1">
        <div class="uk-container">
            <div uk-grid>
                <div class="uk-width-2-3@m">
                    <div class="desc">
                        Vậy còn chần chừ gì nữa mà không <span>GỌI NGAY</span> cho <span>MIRAITECH</span> <br>
                        để nhận <span>HỖ TRỢ & GIÁI ĐÁP THẮC MẮC 24/7.</span>
                    </div>
                    <h2 class="title uk-margin">ALO LÀ CÓ MẶT CHỈ CẦN BẠN MUỐN!</h2>
                    <div class="uk-margin-medium">
                        <a href="" class="uk-button dky uk-button-primary uk-button-large">ĐĂNG KÝ BÁO GIÁ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>