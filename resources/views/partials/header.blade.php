    <header class="header-style-two">
        <div class="header-wrapper">
            <div class="header-top-area bg-primary-color d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 header-top-left-part">
                            <span class="address"><i class="webexflaticon flaticon-placeholder-1"></i> Số 156/109 Trường Chinh - KCN Đồng Hòa, Q. Kiến An, HP</span>
                            <span class="phone"><i class="webexflaticon flaticon-send"></i> info@pegasus-marine.vn</span>
                        </div>
                        <div class="col-lg-4 header-top-right-part text-right">
                            <ul class="social-links">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="header-navigation-area two-layers-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a class="navbar-brand logo f-left" href="{{ route('home') }}">
                                <img id="logo-image" class="img-center" src="{{ asset('frontend/images/logo.jpg') }}" alt="">
                            </a>
                            <div class="mobile-menu-right"></div>
                            <div class="header-searchbox-style-two d-none d-xl-block">
                                <div class="side-panel side-panel-trigger text-right d-none d-lg-block">
                                    <span class="bar1"></span>
                                    <span class="bar2"></span>
                                    <span class="bar3"></span>
                                </div>
                                <div class="show-searchbox">
                                    <a href="#"><i class="webex-icon-Search"></i></a>
                                </div>
                                <div class="toggle-searchbox">
                                    <form action="#" id="searchform-all" method="get">
                                        <div>
                                            <input type="text" id="s" class="form-control" placeholder="Search...">
                                            <div class="input-box">
                                                <input type="submit" value="" id="searchsubmit"><i
                                                    class="fas fa-search"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="side-panel-content">
                                <div class="close-icon">
                                    <button><i class="webex-icon-cross"></i></button>
                                </div>
                                <div class="side-panel-logo mrb-30">
                                    <a href="index.html">
                                        <img src="images/logo-sidebar-dark.png" alt="" />
                                    </a>
                                </div>
                                <div class="side-info mrb-30">
                                    <div class="side-panel-element mrb-25">
                                        <h4 class="mrb-10">Địa chỉ</h4>
                                        <ul class="list-items">
                                            <li><span class="fa fa-map-marker-alt mrr-10 text-primary-color"></span>Số 156/109 Trường Chinh - KCN Đồng Hòa, Q. Kiến An, HP</li>
                                            <li><span
                                                    class="fas fa-envelope mrr-10 text-primary-color"></span>info@pegasus-marine.vn</li>
                                            <li><span class="fas fa-phone-alt mrr-10 text-primary-color"></span>0987.654.321</li>
                                        </ul>
                                    </div>
                                    <div class="side-panel-element mrb-30">
                                        <h4 class="mrb-15">Pintarest</h4>
                                        <ul class="pintarest-list">
                                            <li>
                                                <a href="#"><img class="img-full" src="images/side-panel/1.jpg"
                                                        alt=""></a>
                                            </li>
                                            <li>
                                                <a href="#"><img class="img-full" src="images/side-panel/2.jpg"
                                                        alt=""></a>
                                            </li>
                                            <li>
                                                <a href="#"><img class="img-full" src="images/side-panel/3.jpg"
                                                        alt=""></a>
                                            </li>
                                            <li>
                                                <a href="#"><img class="img-full" src="images/side-panel/4.jpg"
                                                        alt=""></a>
                                            </li>
                                            <li>
                                                <a href="#"><img class="img-full" src="images/side-panel/5.jpg"
                                                        alt=""></a>
                                            </li>
                                            <li>
                                                <a href="#"><img class="img-full" src="images/side-panel/6.jpg"
                                                        alt=""></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h4 class="mrb-15">Social List</h4>
                                <ul class="social-list">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="main-menu f-right">
                                <nav id="mobile-menu-right">
                                    <ul>
                                        <li>
                                            <a href="{{ route('home') }}">Trang chủ</a>
                                        </li>
                                        <li><a href="{{ route('about') }}">Giới thiệu</a></li>
                                        <li class="has-sub">
                                            <a href="#">Dịch vụ</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Tư vấn an ninh</a></li>
                                                <li><a href="#">Tư vấn quản lý hàng hải</a></li>
                                                <li><a href="#">Logistic</a></li>
                                                <li><a href="#">Quản lý thuyền viên</a></li>
                                                <li><a href="#">Cung ứng thuyền viên</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-sub right-view">
                                            <a href="#">Tin tức</a>
                                            <ul class="sub-menu">
                                            <li><a href="#">Tin tức thế giới</a></li>
                                                <li><a href="#">Tin tức hoạt động</a></li>
                                                
                                                <li><a href="#">Tin tức nội bộ</a></li>
                                            </ul>
                                        </li>
                                        <li class="right-view">
                                            <a href="{{ route('contact') }}">Liên hệ</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>