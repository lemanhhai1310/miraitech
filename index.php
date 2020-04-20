<?php $data["title"] = "Home"; ?>
<?php require "header.php"; ?>
<div class="uk-section baogia uk-background-cover uk-background-norepeat" data-src="images/bg_baogia.png" uk-img>
    <div class="uk-container">
        <div class="uk-margin">
            <h2 class="title_g_2 c1 uk-text-center uk-text-uppercase">Đăng ký báo giá</h2>
        </div>
        <div class="uk-flex-center" uk-grid>
            <div class="uk-width-2-5@m">
                <form class="form_f uk-position-relative" action="trangcamon.php">
                    <input class="uk-input uk-form-large uk-box-shadow-medium" type="email" placeholder="Nhập email hoặc số phone">
                    <button type="submit" class="uk-button uk-button-secondary uk-position-center-right"><span uk-icon="icon: chevron-right; ratio: 1"></span></button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="uk-section hosonangluc uk-position-relative uk-text-center uk-background-cover uk-background-norepeat" data-src="images/bg_hoso.png" uk-img>
    <img class="uk-position-top-center icon_hoso" src="images/hosonangluc_icon.png" alt="">
    <div class="uk-container uk-container-xsmall">
        <div class="uk-margin-medium uk-light">
            <h2 class="title_g_2 c1 uk-text-center uk-text-capitalize">Hồ sơ năng lực</h2>
        </div>
        <div class="uk-light uk-margin-medium hoso_content">
            <div class="uk-margin">Trải qua hơn 10 năm làm nghề, <span>MIRAITECH</span> được phát triển bởi đội ngũ nhân viên trẻ đầy nhiệt huyết, vững chuyên môn, cầu tiến đã gặt hái vô số thành công vang dội trên nhiều lĩnh vực</div>
            <div class="uk-margin">
                <hr class="uk-width-medium uk-margin-auto">
            </div>
            <div class="uk-margin">Là lựa chọn số 1 của các tập đoàn, doanh nghiệp trên con đường tìm kiếm giải pháp phát triển kinh doanh và nâng tầm thương hiệu.</div>
            <div class="uk-margin">
                <hr class="uk-width-medium uk-margin-auto">
            </div>
            <div class="uk-margin">Chúng tôi chứng minh năng lực của mình bằng thước đo hiệu quả công việc và những giá trị thiết thực mà bạn nhận được khi trao gửi niềm tin ở Miraitech.</div>
        </div>
        <a href="" class="uk-button btn1 uk-button-primary">XEM HỒ SƠ</a>
    </div>
</div>
<?php require "footer.php"; ?>