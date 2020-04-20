<?php $data["title"] = "GIOI THIEU"; ?>
<?php require "header.php"; ?>
<div class="section_1 uk-section uk-flex uk-flex-bottom uk-background-center-center uk-background-norepeat" data-src="images/bg_about.png" uk-img>
    <div class="uk-width-1-1">
        <div class="uk-container">
            <div class="uk-margin-small"><h1 class="uk-display-inline-block uk-text-uppercase bg_txt_1 uk-margin-remove">GIỚI THIỆU CHUNG</h1></div>
            <div class="uk-margin-small"><h4 class="uk-display-inline-block uk-text-uppercase bg_txt_2 uk-margin-remove">THƯƠNG HIỆU NÂNG TẦM GIÁ TRỊ</h4></div>
        </div>
    </div>
</div>
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-margin-large uk-light">
            <h2 class="title_g_2 uk-text-center uk-text-uppercase">GIẢI PHÁP MARKETING CHUYÊN NGHIỆP <br> ĐƯA DOANH NGHIỆP ĐẾN TẦM CAO</h2>
            <div class="uk-text-center">
                <div class="line1 uk-position-relative uk-display-inline-block uk-border-circle">
                    <span class="uk-display-inline-block line-left uk-position-center-left-out"></span>
                    <span class="uk-display-inline-block line-right uk-position-center-right-out"></span>
                </div>
            </div>
        </div>
        <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-small uk-grid-24-m uk-flex-center" uk-grid>
            <?php
            $data = array(
                array(
                    "src" => "images/user/img1.png",
                    "name" => "Long",
                    "author" => "Digital Advertising",
                ),
                array(
                    "src" => "images/user/img2.png",
                    "name" => "hien",
                    "author" => "Seo to-the-moon",
                ),
                array(
                    "src" => "images/user/img3.png",
                    "name" => "nhung",
                    "author" => "Sales-driven creative",
                ),
                array(
                    "src" => "images/user/img4.png",
                    "name" => "nam",
                    "author" => "Video marketing",
                ),
                array(
                    "src" => "images/user/img5.png",
                    "name" => "chi",
                    "author" => "Design brand identity",
                ),
                array(
                    "src" => "images/user/img6.png",
                    "name" => "tung",
                    "author" => "App/ software",
                ),
                array(
                    "src" => "images/user/img7.png",
                    "name" => "sang",
                    "author" => "Design website",
                ),
            );
            foreach ($data as $k => $v): ?>
            <div>
                <div class="box3 uk-light">
                    <div class="uk-cover-container">
                        <img src="<?= $v['src'] ?>" alt="" uk-cover>
                        <canvas width="282" height="282"></canvas>
                        <div class="uk-position-bottom uk-padding-small box4 uk-text-center">
                            <div class="name uk-text-uppercase"><?= $v['name'] ?></div>
                            <div class="author"><?= $v['author'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="uk-section">
    <div class="uk-container uk-container-xsmall">
        <div class="uk-text-center">
            <img src="images/Frame_miraitech.png" alt="">
        </div>
    </div>
</div>
<div class="uk-section">
    <div class="uk-container uk-container-small">
        <div class="uk-margin-large uk-light">
            <h2 class="title_g_2 c1 uk-text-center uk-text-uppercase">6 LÝ DO NÊN CHỌN MIRAITECH</h2>
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
                    "title" => "HỖ TRỢ NHANH CHÓNG",
                    "desc" => array(
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas laoreet pharetra leo sed dictum. Sed dapibus aliquam aliquet. Aenean vestibulum purus auctor leo dictum, vitae pellentesque nunc ultricies. Pellentesque ut dui urna. Pellentesque molestie dictum lorem in vehicula. Fusce nulla neque, volutpat vitae dui eu, ornare vestibulum risus. Phasellus id felis ex. Cras mauris lorem, scelerisque ac viverra sed, sollicitudin id urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum malesuada pulvinar orci non pretium. Morbi vestibulum fermentum sapien vel molestie. Praesent at lacus in massa dignissim dictum. Duis leo ipsum, rhoncus non metus vel, tincidunt sagittis diam. Nullam vulputate, ante non rutrum tincidunt, tortor nibh sagittis magna, nec blandit lacus est vel ipsum.",
                    ),
                    "open" => false,
                ),
                array(
                    "title" => "GIAO DIỆN THIẾT KẾ ĐỘC QUYỀN",
                    "desc" => array(
                        "MIRAITECH sử dụng công nghệ lập trình code mới nhất hiện nay để thiết kế cho khách hàng một giao diện website đẹp, độc quyền, độ bảo mật cao, giao diện thân thiện người dùng.",
                        "Thêm vào đó là tốc độ tải trang Website nhanh, tối ưu chặt chẽ nhờ đội ngũ Design giỏi nhiều năm kinh nghiệm.",
                    ),
                    "open" => true,
                ),
                array(
                    "title" => "Thiết kế Website mất thời gian bao lâu?",
                    "desc" => array(
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas laoreet pharetra leo sed dictum. Sed dapibus aliquam aliquet. Aenean vestibulum purus auctor leo dictum, vitae pellentesque nunc ultricies. Pellentesque ut dui urna. Pellentesque molestie dictum lorem in vehicula. Fusce nulla neque, volutpat vitae dui eu, ornare vestibulum risus. Phasellus id felis ex. Cras mauris lorem, scelerisque ac viverra sed, sollicitudin id urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum malesuada pulvinar orci non pretium. Morbi vestibulum fermentum sapien vel molestie. Praesent at lacus in massa dignissim dictum. Duis leo ipsum, rhoncus non metus vel, tincidunt sagittis diam. Nullam vulputate, ante non rutrum tincidunt, tortor nibh sagittis magna, nec blandit lacus est vel ipsum.",
                    ),
                    "open" => false,
                ),
                array(
                    "title" => "Thiết kế Website mất thời gian bao lâu?",
                    "desc" => array(
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas laoreet pharetra leo sed dictum. Sed dapibus aliquam aliquet. Aenean vestibulum purus auctor leo dictum, vitae pellentesque nunc ultricies. Pellentesque ut dui urna. Pellentesque molestie dictum lorem in vehicula. Fusce nulla neque, volutpat vitae dui eu, ornare vestibulum risus. Phasellus id felis ex. Cras mauris lorem, scelerisque ac viverra sed, sollicitudin id urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum malesuada pulvinar orci non pretium. Morbi vestibulum fermentum sapien vel molestie. Praesent at lacus in massa dignissim dictum. Duis leo ipsum, rhoncus non metus vel, tincidunt sagittis diam. Nullam vulputate, ante non rutrum tincidunt, tortor nibh sagittis magna, nec blandit lacus est vel ipsum.",
                    ),
                    "open" => false,
                ),
                array(
                    "title" => "Thiết kế Website mất thời gian bao lâu?",
                    "desc" => array(
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas laoreet pharetra leo sed dictum. Sed dapibus aliquam aliquet. Aenean vestibulum purus auctor leo dictum, vitae pellentesque nunc ultricies. Pellentesque ut dui urna. Pellentesque molestie dictum lorem in vehicula. Fusce nulla neque, volutpat vitae dui eu, ornare vestibulum risus. Phasellus id felis ex. Cras mauris lorem, scelerisque ac viverra sed, sollicitudin id urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum malesuada pulvinar orci non pretium. Morbi vestibulum fermentum sapien vel molestie. Praesent at lacus in massa dignissim dictum. Duis leo ipsum, rhoncus non metus vel, tincidunt sagittis diam. Nullam vulputate, ante non rutrum tincidunt, tortor nibh sagittis magna, nec blandit lacus est vel ipsum.",
                    ),
                    "open" => false,
                ),
                array(
                    "title" => "Thiết kế Website mất thời gian bao lâu?",
                    "desc" => array(
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas laoreet pharetra leo sed dictum. Sed dapibus aliquam aliquet. Aenean vestibulum purus auctor leo dictum, vitae pellentesque nunc ultricies. Pellentesque ut dui urna. Pellentesque molestie dictum lorem in vehicula. Fusce nulla neque, volutpat vitae dui eu, ornare vestibulum risus. Phasellus id felis ex. Cras mauris lorem, scelerisque ac viverra sed, sollicitudin id urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum malesuada pulvinar orci non pretium. Morbi vestibulum fermentum sapien vel molestie. Praesent at lacus in massa dignissim dictum. Duis leo ipsum, rhoncus non metus vel, tincidunt sagittis diam. Nullam vulputate, ante non rutrum tincidunt, tortor nibh sagittis magna, nec blandit lacus est vel ipsum.",
                    ),
                    "open" => false,
                ),
                array(
                    "title" => "Thiết kế Website mất thời gian bao lâu?",
                    "desc" => array(
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas laoreet pharetra leo sed dictum. Sed dapibus aliquam aliquet. Aenean vestibulum purus auctor leo dictum, vitae pellentesque nunc ultricies. Pellentesque ut dui urna. Pellentesque molestie dictum lorem in vehicula. Fusce nulla neque, volutpat vitae dui eu, ornare vestibulum risus. Phasellus id felis ex. Cras mauris lorem, scelerisque ac viverra sed, sollicitudin id urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum malesuada pulvinar orci non pretium. Morbi vestibulum fermentum sapien vel molestie. Praesent at lacus in massa dignissim dictum. Duis leo ipsum, rhoncus non metus vel, tincidunt sagittis diam. Nullam vulputate, ante non rutrum tincidunt, tortor nibh sagittis magna, nec blandit lacus est vel ipsum.",
                    ),
                    "open" => false,
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
<?php require "footer.php"; ?>