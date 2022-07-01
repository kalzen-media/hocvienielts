@extends('layouts.master')
@section('content')
<section class="slider-home position-relative">
    <div class="swiper" data-swiper-slides="1" data-swiper-speed="1000" data-swiper-parallax="true">
        <div class="swiper-pagination text-white position-absolute mb-30 start-0 w-100 d-none d-lg-block"></div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide h-auto">
                    <img loading="lazy" src="{{asset('hocvienielts/banner-web-1.png')}}" data-swiper-parallax-x="20%"
                        alt="">
                </div>
            </div>

        </div>
    </div>
    <div class="swiper-button-prev swiper-button-position-3 swiper-button-opacity shadow"><svg
            xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
            <path fill="currentColor" fill-rule="evenodd"
                d="m3.96 6.15 5.08-4.515L7.91.365.445 7l7.465 6.635 1.13-1.27L3.96 7.85h15.765v-1.7H3.96Z"
                clip-rule="evenodd" />
        </svg></div>
    <div class="swiper-button-next swiper-button-position-3 swiper-button-opacity shadow"><svg
            xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
            <path fill="currentColor" fill-rule="evenodd"
                d="m16.21 6.15-5.08-4.515 1.13-1.27L19.725 7l-7.465 6.635-1.13-1.27 5.08-4.515H.445v-1.7H16.21Z"
                clip-rule="evenodd" />
        </svg></div>
    </div>
</section>
<section class="about py-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="background-image w-100 h-100 position-relative overflow-hidden" data-show="startbox"
                    style="border-radius: 20px;">
                    <img loading="lazy" src="{{asset('hocvienielts/video-thumbnail.png')}}" alt="video">
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="section-title text-left" data-show="startbox" data-show-delay="100">Giới thiệu chung Về The
                    IELTS Academy</h3>
                <p data-show="startbox" data-show-delay="200">The IELTS Academy – trung tâm luyện thi IELTS uy tín hàng
                    đầu tại Việt Nam có hơn 7 năm kinh nghiệm trong nghiên cứu và giảng dạy IELTS . Với sứ mệnh định
                    hình IELTS TƯ DUY 4 CHIỀU cho người học, The IELTS Academy nỗ lực cống hiến sức trẻ, nhiệt huyết
                    giúp các bạn học IELTS tiếp cận phương pháp giảng dạy mới nhất, hiệu quả nhất, chinh phục mọi mục
                    tiêu IELTS dễ dàng</p>
            </div>
        </div>
    </div>
</section>
<section class="infographic py-60 bg-section-2">
    <div class="container">
        <h3 class="section-title text-center" data-show="startbox" data-show-delay="200">HƠN 1000 GIA ĐÌNH ĐÃ TIN CHỌN
            TIA</h3>
        <div class="row">
            <div class="col-lg-3 col-6" data-show="startbox" data-show-delay="200">
                <div class="box-info p-20 text-center text-dark">
                    <h5 class="number text-primary">05</h5>
                    <p class="text">NĂM KIÊN TRÌ ĐÀO TẠO TƯ DUY ĐỔI MỚI</p>
                </div>
            </div>
            <div class="col-lg-3 col-6" data-show="startbox" data-show-delay="300">
                <div class="box-info p-20 text-center text-dark">
                    <h5 class="number text-primary">99%</h5>
                    <p class="text">HỌC VIÊN & PHỤ HUYNH HÀI LÒNG</p>
                </div>
            </div>
            <div class="col-lg-3 col-6" data-show="startbox" data-show-delay="400">
                <div class="box-info p-20 text-center text-dark">
                    <h5 class="number text-primary">1000+</h5>
                    <p class="text">HỌC VIÊN ĐƯỢC TRUYỀN CẢM HỨNG</p>
                </div>
            </div>
            <div class="col-lg-3 col-6" data-show="startbox" data-show-delay="500">
                <div class="box-info p-20 text-center text-dark">
                    <h5 class="number text-primary">100%</h5>
                    <p class="text">HỌC VIÊN MẤT GỐC ĐẠT MỤC TIÊU</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonial py-60" style="background: url({{asset('hocvienielts/bg-testimonial.png')}});">
    <div class="container">
        <h3 class="section-title text-center text-white">HỌC VIÊN NÓI GÌ VỀ THE IELTS ACADEMY</h3>
        <div class="row">
            <div class="bg-white rounded-4 py-60 px-70 animated" data-show="startbox" data-show-delay="200"
                style="transform: translateY(0px); transition-duration: 500ms; opacity: 1;">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 d-none d-xl-block me-40"><img class="rounded-circle" loading="lazy"
                            src="{{asset('hocvienielts/testimonial-example.png')}}" alt="" height="250" width="250">
                    </div>
                    <div class="flex-grow-1">
                        <div class="fw-bold text-primary font-size-18">BẢO HƯNG – IELTS OVERALL 8.0 </div>
                        <div class="font-size-15 text-dark">Trường THPT chuyên Trần Phú</div>
                        <div class="font-size-15 text-dark mt-40">“Mình có pha quay xe ngoạn mục để nâng tầm đạt 8.0
                            Overall và bất ngờ đạt 7.5 Writing, tất cả là nhờ học Tư duy 4 chiều và Giá trị văn học
                            trong triển khai bài viết của thầy Vũ. Ban đầu, những kiến thức ấy thực sự mình cũng không
                            tin tưởng sẽ giúp ích được gì vì chưa nghe đến bao giờ nhưng thật không ngờ đó là một kho
                            báu có giá trị lớn đến vậy. Mình đoán chắc chỉ có thầy Vũ mới nghĩ ra được phương pháp học
                            IELTS dựa trên kiến thức của ngành Khoa học máy tính độc đáo đến như vậy”.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="team py-60">
    <div class="container">
        <h3 class="section-title text-center text-primary">ĐỘI NGŨ CHUYÊN MÔN TRẺ ĐẦY NHIỆT HUYẾT</h3>
        <div class="row gy-70">
            <!-- Item-->
            <div class="col-12 col-sm-6 col-lg-3 animated" data-show="startbox"
                style="transform: translateY(0px); transition-duration: 500ms; opacity: 1;">
                <!-- Member-->
                <div class="member "><a class="member-image" href="#" data-img-height=""
                        style="--img-height: 114%;"><img loading="lazy"
                            src="{{asset('hocvienielts/img/team/member-8.jpg')}}" alt="team"></a>
                    <div class="member-body"><a class="member-title h4 text-primary" href="#">Nguyễn Đình Vũ</a>
                        <div class="member-subtitle font-size-15 text-gray-dark">The definition of insanity is doing the
                            same thing over and over again and expecting different results - Định nghĩa của sự điên rồ
                            là làm đi làm lại một việc và mong đợi những kết quả khác nhau.</div>
                    </div>
                </div>
            </div><!-- Item-->
            <div class="col-12 col-sm-6 col-lg-3 animated" data-show="startbox" data-show-delay="100"
                style="transform: translateY(0px); transition-duration: 500ms; opacity: 1;">
                <!-- Member-->
                <div class="member "><a class="member-image" href="#" data-img-height=""
                        style="--img-height: 114%;"><img loading="lazy"
                            src="{{asset('hocvienielts/img/team/member-1.jpg')}}" alt="team"></a>
                    <div class="member-body"><a class="member-title h4 text-primary" href="#">Ms. Phương Liên</a>
                        <div class="member-subtitle font-size-15 text-gray-dark">We can be truly successful only at
                            something we're willing to fail at. If we're unwilling to fail, then we're unwilling to
                            succeed - Chúng ta chỉ có thể thực sự thành công ở điều gì đó mà chúng ta sẵn sàng thất bại.
                            Nếu chúng ta không muốn thất bại, thì chúng ta không muốn thành công.</div>
                    </div>
                </div>
            </div><!-- Item-->
            <div class="col-12 col-sm-6 col-lg-3 animated" data-show="startbox" data-show-delay="200"
                style="transform: translateY(0px); transition-duration: 500ms; opacity: 1;">
                <!-- Member-->
                <div class="member "><a class="member-image" href="#" data-img-height=""
                        style="--img-height: 114%;"><img loading="lazy"
                            src="{{asset('hocvienielts/img/team/member-2.jpg')}}" alt="team"></a>
                    <div class="member-body"><a class="member-title h4 text-primary" href="#">Ms. Như Phương</a>
                        <div class="member-subtitle font-size-15 text-gray-dark">You are what you do, not what you say
                            you will do - Bạn là những gì bạn làm, chứ không phải những gì bạn nói bạn sẽ làm.</div>
                    </div>
                </div>
            </div><!-- Item-->
            <div class="col-12 col-sm-6 col-lg-3 animated" data-show="startbox" data-show-delay="300"
                style="transform: translateY(0px); transition-duration: 500ms; opacity: 1;">
                <!-- Member-->
                <div class="member "><a class="member-image" href="#" data-img-height=""
                        style="--img-height: 114%;"><img loading="lazy"
                            src="{{asset('hocvienielts/img/team/member-3.jpg')}}" alt="team"></a>
                    <div class="member-body"><a class="member-title h4 text-primary" href="#">Ms. Khánh Vân </a>
                        <div class="member-subtitle font-size-15 text-gray-dark">Practice makes perfect – Trăm hay không
                            bằng tay làm.</div>
                    </div>
                </div>
            </div><!-- Item-->

        </div>
    </div>
</section>
<section class="course py-60 bg-section-2">
    <div class="container">
        <h3 class="section-title text-center text-primary">CÁC KHÓA HỌC Ở THE IELTS ACADEMY</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="course-item rounded-3 p-20 shadow-sm bg-white">
                    <h6 class="text-primary">IELTS FOUNDATION</h6>
                    <div class="font-size-15">Khoá học nền tảng bổ sung các kiến thức tiếng Anh học thuật ở cấp độ cơ
                        bản giúp học viên sẵn sàng học chuyên sâu về IELTS</div>
                </div>
                <div class="course-item rounded-3 p-20 shadow-sm bg-white mt-20">
                    <h6 class="text-primary">FORWARD IELTS</h6>
                    <div class="font-size-15">– Khoá học tập trung hoàn thiện 4 kỹ năng Nghe – Nói – Đọc – Viết tiếng
                        Anh học thuật ở cấp độ Sơ cấp – Trung cấp </div>
                </div>
                <div class="course-item rounded-3 p-20 shadow-sm bg-white mt-20">
                    <h6 class="text-primary">IELTS ADVANCED</h6>
                    <div class="font-size-15">Khoá học chuyên sâu 4 kỹ năng ở mức Cao cấp giúp học viên đạt mục tiêu
                        Overall 7.0+ </div>
                </div>
                <div class="course-item rounded-3 p-20 shadow-sm bg-white mt-20">
                    <h6 class="text-primary">IELTS COACHING</h6>
                    <div class="font-size-15">Khoá học với mô hình 1-1, 1-2, 1-3 giúp học viên bổ sung cấp tốc trong
                        thời gian ngắn</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-contact">
    <div class="container">
        <form class="bg-primary-dark form-contact form-reg" action="{{ route('contact') }}" method="post">
            <div class="row align-items-center gy-3">
                <div class="col-lg-3">
                    <h3 class="fs-2 mb-0 text-white">Đăng ký
                        <br class="d-none d-lg-inline"> nhận tư vấn
                    </h3>
                </div>
                <div class="col-lg-9">
                    <div class="row g-20">
                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="form-label visually-hidden" for="form-reg-name">Họ và tên</label>
                            <input class="form-control" id="form-reg-name" name="full_name" type="text"
                                placeholder="Họ và tên">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="form-label visually-hidden" for="form-reg-phonenumber">Số điện thoại</label>
                            <input class="form-control" id="form-reg-phonenumber" name="phone" type="text"
                                placeholder="Số điện thoại">
                            </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label visually-hidden" for="form-reg-Email">Email</label>
                            <input class="form-control" id="form-reg-Email" name="email" type="email"
                                placeholder="Email">
</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label visually-hidden" for="form-reg-work">Band điểm</label>
                            <select class="form-select form-select-default" id="form-reg-work" name="job">
                                <option selected="selected">Band điểm?</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label visually-hidden" for="form-reg-address">Mục tiêu</label>
                            <select class="form-select form-select-default" id="form-reg-address" name="branch_id">
                                <option selected="selected" value="0">Mục tiêu của bạn là?</option>
                              
                            </select>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary text-uppercase shadow-sm w-100" type="submit">Nhận tư
                                vấn</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection