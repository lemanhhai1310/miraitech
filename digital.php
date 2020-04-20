<?php $data["title"] = "DIGITAL"; ?>
<?php require "header.php"; ?>
<div class="section_1 uk-section uk-flex uk-flex-bottom uk-background-center-center uk-background-norepeat" data-src="images/bg-digital.png" uk-img>
    <div class="uk-width-1-1">
        <div class="uk-container">
            <div class="uk-margin">
                <div class="img_icon uk-flex-inline uk-padding-small uk-border-circle">
                    <img src="images/digital_icon.png" alt="">
                </div>
            </div>
            <div class="uk-margin-small"><h1 class="uk-display-inline-block uk-text-uppercase bg_txt_1 uk-margin-remove">dịch vụ</h1></div>
            <div class="uk-margin-small"><h1 class="uk-display-inline-block uk-text-uppercase bg_txt_1 uk-margin-remove">Digital Marketing</h1></div>
            <div class="uk-margin-small"><h4 class="uk-display-inline-block uk-text-uppercase bg_txt_2 uk-margin-remove">Tối ưu quảng bá - Bứt phá doanh thu</h4></div>
        </div>
    </div>
</div>
<div class="uk-section digital_about">
    <div class="uk-container uk-container-xsmall uk-margin-medium">
        <div class="uk-margin uk-light">
            <div class="uk-margin digital_intro uk-text-center">
                <span>Digital Marketing</span> là giải pháp hoàn hảo nhằm quảng bá thương hiệu, sản phẩm và dịch vụ đến với hệ thống khách hàng tiềm năng. Trong thời đại công nghệ 4.0 thì Marketing Online chưa bao giờ là đơn giản và dễ dàng nhưng hiệu quả thì không thể phủ nhận. Dịch vụ Digital Marketing của Miratech là lựa chọn thông minh mang lại những bứt phá tuyệt vời cho doanh nghiệp của bạn.
            </div>
            <div class="uk-text-center">
                <div class="line1 uk-position-relative uk-display-inline-block uk-border-circle">
                    <span class="uk-display-inline-block line-left uk-position-center-left-out"></span>
                    <span class="uk-display-inline-block line-right uk-position-center-right-out"></span>
                </div>
            </div>
        </div>
        <div class="uk-text-center"><a href="" class="uk-button btn1 dky uk-button-primary">Đăng ký ngay</a></div>
    </div>
    <div class="uk-container uk-padding-remove">
        <div class="uk-padding-small box2 uk-text-center uk-light">
            <i class="uk-position-center-left"></i>
            <span class="uk-text-uppercase uk-display-inline-block">Các dịch vụ chủ đạo của Miratech</span>
            <i class="uk-position-center-right"></i>
        </div>
    </div>
</div>
<div class="uk-section section_2 uk-background-default">
    <div class="uk-container">
        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-1-3@m">
                <div class="uk-text-center">
                    <div class="uk-margin-medium"><img src="images/go1.png" alt=""></div>
                    <div><img src="images/go2.png" alt=""></div>
                </div>
            </div>
            <div class="uk-width-expand@m">
                <h4 class="title_digital uk-text-uppercase uk-margin-small">Google Adwords</h4>
                <div class="desc_digital">Dịch vụ quảng bá Google Adwords được cho là giải pháp tiềm năng được nhiều doanh nghiệp lựa chọn. Miratech đặc biệt rất am hiểu và có kinh nghiệm về Google Adword hứa hẹn mang lại hiệu quả quảng bá đáng ngạc nhiên.</div>
                <ul class="uk-list uk-list-bullet list_1">
                    <?php
                    $data = array(
                        "Ứng dụng quảng cáo trên Google Adwords trở thành xu hướng và mang lại một nguồn lợi nhuận không tưởng.",
                        "Google Adwords thông minh với từ khóa chuẩn và tiếp cận đúng khách hàng mục tiêu.",
                        "Lượng khách hàng truy cập tăng, số lượng đơn hàng từ Google Adwords tăng nhiều hơn.",
                        "Giúp giảm thiểu chi phí quảng cáo, đạt mức KPI đề ra và tối đa hiệu quả kinh doanh.",
                    );
                    foreach ($data as $k => $v): ?>
                        <li><?= $v; ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="" class="uk-button btn1 dky uk-button-primary">Đăng ký ngay</a>
            </div>
        </div>
    </div>
</div>
<div class="uk-section section_2 uk-background-muted">
    <div class="uk-container">
        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-expand uk-flex-last@m">
                <div class="uk-text-center">
                    <div><img src="images/fb1.png" alt=""></div>
                    <div><img src="images/fb2.png" alt=""></div>
                </div>
            </div>
            <div class="uk-width-2-3@m">
                <h4 class="title_digital uk-text-uppercase uk-margin-small">Facebook Ads</h4>
                <div class="desc_digital">Dịch vụ Facebook Ads tại Miratech tự tin dẫn đầu về chất lượng quảng bá thương hiệu, giúp bạn và doanh nghiệp dễ dàng tiếp cận với hàng triệu người sử dụng facebook.</div>
                <ul class="uk-list uk-list-bullet list_1">
                    <?php
                    $data = array(
                        "Cách tiếp cận thông minh với hệ thống khách hàng trên các nền tảng mạng xã hội.",
                        "Chiến lược quảng cáo trên facebook mang lại tương tác và chuyển đổi cao nhất cho doanh nghiệp.",
                        "Ứng dụng nhiều hình thức quảng cáo fanpage qua hình ảnh, video, website…",
                        "Nghiên cứu fanpage, lên ý tưởng quảng cáo, theo dõi để tối ưu hóa fanpage.",
                    );
                    foreach ($data as $k => $v): ?>
                        <li><?= $v; ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="" class="uk-button btn1 dky uk-button-primary">Đăng ký ngay</a>
            </div>
        </div>
    </div>
</div>
<div class="uk-section section_2 uk-background-default">
    <div class="uk-container">
        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-1-3@m">
                <div class="uk-text-center">
                    <img src="images/dichvuseo.png" alt="">
                </div>
            </div>
            <div class="uk-width-expand@m">
                <h4 class="title_digital uk-text-uppercase uk-margin-small">Dịch vụ SEO website</h4>
                <div class="desc_digital">SEO website tổng thể là một phần quan trọng và không thể thiếu trong chiến lược phát triển kinh doanh. Mặc dù bạn hoàn toàn có thể tự làm SEO nhưng kết quả đạt được thì vô cùng khó.</div>
                <ul class="uk-list uk-list-bullet list_1">
                    <?php
                    $data = array(
                        "SEO giúp website hiển thị ở những vị trí đầu tiên trong kết quả tìm kiếm của google.",
                        "SEO nâng cao mức độ nhận diện thương hiệu thông qua website.",
                        "SEO giúp tăng lượt truy cập của khách hàng tiềm năng đến website tăng đều và ổn định thông qua google.",
                        "Tiết kiệm tối đa chi phí và thời gian cho doanh nghiệp.",
                        "SEO website nâng cao lợi thế cạnh tranh cho doanh nghiệp và tăng doanh thu bền vững.",
                    );
                    foreach ($data as $k => $v): ?>
                    <li><?= $v; ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="" class="uk-button btn1 dky uk-button-primary">Đăng ký ngay</a>
            </div>
        </div>
    </div>
</div>
<div class="uk-section section_2 uk-background-muted">
    <div class="uk-container">
        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-expand uk-flex-last@m">
                <div class="uk-text-center">
                    <img src="images/dichvucontent.png" alt="">
                </div>
            </div>
            <div class="uk-width-2-3@m">
                <h4 class="title_digital uk-text-uppercase uk-margin-small">Dịch vụ viết Content</h4>
                <div class="desc_digital">Content Marketing mang lại những tác động vô cùng quan trọng cho doanh nghiệp, nhưng không phải bất kỳ ai cũng có thể tự tạo ra Content lôi cuốn và hấp dẫn. Giải pháp tối ưu nhất là sử dụng dịch vụ viết bài chuẩn SEO, một trong những thế mạnh của Miratech.</div>
                <ul class="uk-list uk-list-bullet list_1">
                    <?php
                    $data = array(
                        "Viết bài Pr, quảng bá về sản phẩm, dịch vụ và thương hiệu của doanh nghiệp chuyên nghiệp.",
                        "Viết bài Fanpage đạt chuẩn marketing, hỗ trợ chiến lược phát triển Fanpage bền vững.",
                        "Nội dung content hấp dẫn, thu hút, mới mẻ, khơi gợi sự tò mò của khách hàng.",
                        "Content đáp ứng hoàn toàn tiêu chuẩn SEO và tối ưu công nghệ tìm kiếm của Google.",
                        "Đội ngũ cộng tác viên viết bài hùng hậu, có trình độ và kinh nghiệm viết rất tốt, khả năng tư duy, sáng tạo và có thể viết được nhiều lĩnh vực.",
                    );
                    foreach ($data as $k => $v): ?>
                        <li><?= $v; ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="" class="uk-button btn1 dky uk-button-primary">Đăng ký ngay</a>
            </div>
        </div>
    </div>
</div>
<div class="uk-section section_2 uk-background-default">
    <div class="uk-container">
        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-1-3@m">
                <div class="uk-text-center">
                    <img src="images/chamsocwebsite.png" alt="">
                </div>
            </div>
            <div class="uk-width-expand@m">
                <h4 class="title_digital uk-text-uppercase uk-margin-small">Chăm sóc website, fanpage</h4>
                <div class="desc_digital">Lựa chọn dịch vụ chăm sóc, quản trị fanpage, website số 1 tại Miratech sẽ giúp bạn tiết kiệm tối đa chi phí quảng cáo và nhân sự.</div>
                <ul class="uk-list uk-list-bullet list_1">
                    <?php
                    $data = array(
                        "Thu hút, duy trì lượng khách hàng truy cập website thường xuyên, liên tục. Cập nhật nội dung mới mẻ cùng hình ảnh đẹp mỗi ngày",
                        "Chăm sóc hệ thống khách hàng tương tác qua Adword Google, Facebook.",
                        "Theo dõi thứ hạng website trên trang kết quả Google, đăng ký từ khóa để cải thiện thêm thứ hạng.",
                        "Thống kê tất cả các số liệu liên quan đến website, báo cáo chi tiết lượt truy cập mỗi tháng.",
                        "Khắc phục sự cố website nhanh chóng, cam kết bảo trì, lưu trữ website an toàn và hiệu quả.",
                    );
                    foreach ($data as $k => $v): ?>
                        <li><?= $v; ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="" class="uk-button btn1 dky uk-button-primary">Đăng ký ngay</a>
            </div>
        </div>
    </div>
</div>
<div class="uk-section">
    <div class="uk-container uk-container-xsmall">
        <h2 class="uk-text-center uk-light uk-margin title_g_1">Marketing Online</h2>
        <div class="uk-light uk-margin hoso_content uk-text-center">
            <div class="uk-margin">
                Ngày càng cạnh tranh khốc liệt, bạn hãy bắt đầu ngay trước khi đối thủ của bạn trở nên quá mạnh. Hãy liên hệ ngay với Miratech, dịch vụ  <span>Digital Marketing chuyên nghiệp</span> của chúng tôi sẽ đồng hành và đưa thương hiệu của bạn vững vàng trên một tầm cao mới.
            </div>
        </div>
    </div>
</div>
<div class="uk-section uk-background-cover uk-background-norepeat" data-src="images/bg_form.png" uk-img>
    <div class="uk-container">
        <h2 class="uk-text-center uk-light uk-margin-medium title_g_1">Công ty Miratech</h2>
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
<?php require "footer.php"; ?>