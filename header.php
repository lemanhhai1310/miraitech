<?php require "header_head.php"; ?>
<div id="header" uk-sticky>
    <div class="uk-container">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
                <a href="." class="uk-navbar-item uk-padding-remove-left uk-logo"><img src="images/logo.png" alt=""></a>
            </div>
            <div class="uk-navbar-center uk-visible@m">
                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="about.php">Giới thiệu</a></li>
                    <li>
                        <a href="#">Dịch vụ</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="thietkeweb.php">Thiết kế website</a></li>
                                <li><a href="thietkelogo.php">Nhận diện thương hiệu</a></li>
                                <li><a href="digital.php">Digital Marketing</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Báo giá</a></li>
                    <li><a href="#">Kiến Thức</a></li>
                    <li><a href="#">Tuyển dụng</a></li>
                    <li><a href="contact.php">Liên hệ</a></li>
                </ul>
            </div>
            <div class="uk-navbar-right">
                <div class="uk-navbar-item uk-padding-remove-right">
                    <div uk-form-custom="target: > * > span:first-child">
                        <select>
                            <option value="1">English</option>
                            <option value="2">Vietnam</option>
                        </select>
                        <button class="uk-button uk-button-default language_h" type="button" tabindex="-1">
                            <span></span>
                            <span uk-icon="icon: triangle-down"></span>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>