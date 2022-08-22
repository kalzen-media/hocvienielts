@extends('layouts.master')
@section('meta')
<title>Học viện IELTS</title>
<meta name="description"
    content="The IELTS Academy – trung tâm luyện thi IELTS uy tín hàng đầu tại Việt Nam có hơn 7 năm kinh nghiệm trong nghiên cứu và giảng dạy IELTS. Với sứ mệnh định hình IELTS TƯ DUY 4 CHIỀU cho người học, The IELTS Academy nỗ lực cống hiến sức trẻ, nhiệt huyết giúp các bạn học IELTS tiếp cận phương pháp giảng dạy mới nhất, hiệu quả nhất, chinh phục mọi mục tiêu IELTS dễ dàng." />
<meta property="og:image" content="{{asset('hocvienielts/video-thumbnail.png')}}">
<meta property="og:type" content="article">
<meta property="og:title" content="Học viện IELTS">
<meta property="og:description"
    content="{{substr('The IELTS Academy – trung tâm luyện thi IELTS uy tín hàng đầu tại Việt Nam có hơn 7 năm kinh nghiệm trong nghiên cứu và giảng dạy IELTS. Với sứ mệnh định hình IELTS TƯ DUY 4 CHIỀU cho người học, The IELTS Academy nỗ lực cống hiến sức trẻ, nhiệt huyết giúp các bạn học IELTS tiếp cận phương pháp giảng dạy mới nhất, hiệu quả nhất, chinh phục mọi mục tiêu IELTS dễ dàng.',0,300)}}">
@stop
@section('content')
<section class="slider-home position-relative">
    <div class="swiper" data-swiper-slides="1" data-swiper-speed="1000">
        <div class="swiper-pagination text-white position-absolute mb-30 start-0 w-100 d-none d-lg-block"></div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($slides as $slide)
                <div class="swiper-slide h-auto">
                    <a href="{{$slide->url}}">
                        <img loading="lazy" src="{{ $slide->image}}" data-swiper-parallax-x="20%"
                            alt="{{ $slide->name}}">
                    </a>
                </div>
                @endforeach
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
                <div class="background-image w-100 h-100 position-relative overflow-hidden popup-youtube"
                    data-show="startbox" style="border-radius: 20px;">
                    <a class="popup-video" href="{{  $shared_config['about_video']->value }}">
                        <img loading="lazy" src="{{  $shared_config['about_image']->value }}" alt="video">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="#ffffff"
                                d="M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M10,16.5L16,12L10,7.5V16.5Z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="section-title text-left" data-show="startbox" data-show-delay="100">
                    {{  $shared_config['about_title']->value }}</h3>
                {!! $shared_config['about_content']->value !!}
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
                    <p class="text">NĂM ĐÀO TẠO</br>TƯ DUY ĐỔI MỚI</p>
                </div>
            </div>
            <div class="col-lg-3 col-6" data-show="startbox" data-show-delay="300">
                <div class="box-info p-20 text-center text-dark">
                    <h5 class="number text-primary">99%</h5>
                    <p class="text">HỌC VIÊN & PHỤ HUYNH</br>HÀI LÒNG</p>
                </div>
            </div>
            <div class="col-lg-3 col-6" data-show="startbox" data-show-delay="400">
                <div class="box-info p-20 text-center text-dark">
                    <h5 class="number text-primary">1000+</h5>
                    <p class="text">HỌC VIÊN</br>ĐƯỢC TRUYỀN CẢM HỨNG</p>
                </div>
            </div>
            <div class="col-lg-3 col-6" data-show="startbox" data-show-delay="500">
                <div class="box-info p-20 text-center text-dark">
                    <h5 class="number text-primary">100%</h5>
                    <p class="text">HỌC VIÊN</br>MẤT GỐC ĐẠT MỤC TIÊU</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonial py-60" style="background: url({{asset('hocvienielts/bg-testimonial.png')}});">
    <div class="container">
        <h3 class="section-title text-center text-white">HỌC VIÊN NÓI GÌ VỀ THE IELTS ACADEMY</h3>
        <div class="row">
            <div class="bg-white rounded-4 py-60 px-70 animated mb-40" data-show="startbox" data-show-delay="200"
                style="transform: translateY(0px); transition-duration: 500ms; opacity: 1;">
                <div class="swiper" data-swiper-slides="1">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="text-center d-block d-sm-none mb-10"><img class="rounded-circle"
                                        loading="lazy" src="{{ $testimonial->image }}" alt="hocvien" height="150"
                                        width="150"> </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 d-none d-xl-block me-40"><img class="rounded-circle"
                                            loading="lazy" src="{{ $testimonial->image }}" alt="" height="250"
                                            width="250">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold text-primary font-size-18">{{ $testimonial->name }}
                                        </div>
                                        <div class="font-size-15 text-dark">{{ $testimonial->address }}</div>
                                        <div class="font-size-15 text-dark mt-40">{!! $testimonial->content !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="navigation-holder-1">
                        <div class="swiper-button-prev swiper-button-position-3 swiper-button-primary shadow"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="m3.96 6.15 5.08-4.515L7.91.365.445 7l7.465 6.635 1.13-1.27L3.96 7.85h15.765v-1.7H3.96Z"
                                    clip-rule="evenodd" />
                            </svg></div>
                        <div class="swiper-button-next swiper-button-position-3 swiper-button-primary shadow"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="m16.21 6.15-5.08-4.515 1.13-1.27L19.725 7l-7.465 6.635-1.13-1.27 5.08-4.515H.445v-1.7H16.21Z"
                                    clip-rule="evenodd" />
                            </svg></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="team py-60">
    <div class="container">
        <h3 class="section-title text-center text-primary">ĐỘI NGŨ CHUYÊN MÔN GIÀU KINH NGHIỆM</h3>
        <div class="row gy-70">
            <!-- Item-->
            <div class="swiper mt-90" data-swiper-slides="1" data-swiper-breakpoints="828:2, 1024:3, 1200:4"
                data-swiper-gap="30" data-swiper-grabcursor="true" data-show="startbox" data-show-delay="200">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($teams as $team)
                        <div class="swiper-slide">
                            <div class="member "><a class="member-image" href="#" data-img-height=""
                                    style="--img-height: 114%;"><img class="w-100" style="width: 100vw;" loading="lazy"
                                        src="{{$team->image}}" alt="{{ $team->name }}"></a>
                                <div class="member-body"><a class="member-title h4 text-primary"
                                        href="#">{{ $team->name }}</a>
                                    <div class="member-subtitle font-size-15 text-gray-dark">
                                        {{ $team->description }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="d-flex mt-70 justify-content-center">
                                <div class="swiper-button-prev swiper-button-position-2 swiper-button-gray shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                        <path fill="currentColor" fill-rule="evenodd" d="m3.96 6.15 5.08-4.515L7.91.365.445 7l7.465 6.635 1.13-1.27L3.96 7.85h15.765v-1.7H3.96Z" clip-rule="evenodd" />
                                    </svg></div>
                                <div class="swiper-button-next swiper-button-position-2 swiper-button-gray shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                        <path fill="currentColor" fill-rule="evenodd" d="m16.21 6.15-5.08-4.515 1.13-1.27L19.725 7l-7.465 6.635-1.13-1.27 5.08-4.515H.445v-1.7H16.21Z" clip-rule="evenodd" />
                                    </svg></div>
                            </div>
            </div>
        </div>
    </div>
</section>
<section class="course py-60 bg-section-2">
    <div class="container">
        <h3 class="section-title text-center text-primary">CÁC KHÓA HỌC Ở THE IELTS ACADEMY</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-dark text-white d-lg-none d-md-block d-xl-none"
                    style="background-image: url({{asset('hocvienielts/images/khoa-1.JPG')}}); height: 300px; background-size:cover;">
                    <div class="card-img-overlay align-bottom bottom-0 text-center" style="top: auto">
                        <a id="course-url" href="/tin-tuc/khoa-hoc-forward-ielts" class="btn btn-primary">Xem chi
                            tiết khóa học</a>
                    </div>
                </div>
                <div class="course-item rounded-3 p-20 shadow-sm bg-white active"
                    data-image="{{asset('hocvienielts/images/khoa-1.JPG')}}" data-url="/tin-tuc/khoa-hoc-forward-ielts">
                    <h6 class="text-primary">FORWARD IELTS</h6>
                    <div class="font-size-15">– Khoá học tập trung hoàn thiện 4 kỹ năng Nghe – Nói – Đọc – Viết tiếng
                        Anh học thuật ở cấp độ Sơ cấp – Trung cấp </div>
                </div>
                <div class="card bg-dark text-white d-lg-none d-md-block d-xl-none"
                    style="background-image: url({{asset('hocvienielts/video-thumbnail.png')}}); height: 300px; background-size:cover; margin-top: 20px; margin-bottom: -20px;">
                    <div class="card-img-overlay align-bottom bottom-0 text-center" style="top: auto">
                        <a id="course-url" href="/tin-tuc/khoa-hoc-ielts-foudation" class="btn btn-primary">Xem chi
                            tiết khóa học</a>
                    </div>
                </div>
                <div class="course-item rounded-3 p-20 shadow-sm mt-20 bg-white"
                    data-image="{{asset('hocvienielts/video-thumbnail.png')}}" 
                    data-url="/tin-tuc/khoa-hoc-ielts-foudation">
                    <h6 class="text-primary">IELTS FOUNDATION</h6>
                    <div class="font-size-15">Khoá học nền tảng bổ sung các kiến thức tiếng Anh học thuật ở cấp độ cơ
                        bản giúp học viên sẵn sàng học chuyên sâu về IELTS</div>
                </div>
                <div class="card bg-dark text-white d-lg-none d-md-block d-xl-none"
                    style="background-image: url({{asset('hocvienielts/images/khoa-2.JPG')}}); height: 300px; background-size:cover; margin-top: 20px; margin-bottom: -20px;">
                    <div class="card-img-overlay align-bottom bottom-0 text-center" style="top: auto">
                        <a id="course-url" href="/tin-tuc/khoa-hoc-ielts-advanced" class="btn btn-primary">Xem chi
                            tiết khóa học</a>
                    </div>
                </div>
                <div class="course-item rounded-3 p-20 shadow-sm bg-white mt-20"
                    data-image="{{asset('hocvienielts/images/khoa-2.JPG')}}"
                    data-url="/tin-tuc/khoa-hoc-ielts-advanced">
                    <h6 class="text-primary">IELTS ADVANCED</h6>
                    <div class="font-size-15">Khoá học chuyên sâu 4 kỹ năng ở mức Cao cấp giúp học viên đạt mục tiêu
                        Overall 7.0+ </div>
                </div>
                <div class="card bg-dark text-white d-lg-none d-md-block d-xl-none"
                    style="background-image: url({{asset('hocvienielts/images/khoa-3.JPG')}}); height: 300px; background-size:cover; margin-top: 20px; margin-bottom: -20px;">
                    <div class="card-img-overlay align-bottom bottom-0 text-center" style="top: auto">
                        <a id="course-url" href="/tin-tuc/khoa-hoc-ielts-coaching" class="btn btn-primary">Xem chi
                            tiết khóa học</a>
                    </div>
                </div>
                <div class="course-item rounded-3 p-20 shadow-sm bg-white mt-20"
                    data-image="{{asset('hocvienielts/images/khoa-3.JPG')}}"
                    data-url="/tin-tuc/khoa-hoc-ielts-coaching">
                    <h6 class="text-primary">IELTS COACHING</h6>
                    <div class="font-size-15">Khoá học với mô hình 1-1, 1-2, 1-3 giúp học viên bổ sung cấp tốc trong
                        thời gian ngắn</div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="course-slide h-100 d-none d-lg-block">
                    <div class="card bg-dark text-white h-100 " id="bg-course"
                        style="background-image: url({{asset('hocvienielts/images/khoa-1.JPG')}})">

                        <div class="card-img-overlay align-bottom bottom-0 text-center" style="top: auto">
                            <a id="course-url" href="/tin-tuc/khoa-hoc-ielts-foudation" class="btn btn-primary border-0"
                                style="display:inline-flex">Xem chi
                                tiết khóa học</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-contact py-60">
    <div class="container">
        <form class="bg-primary-dark form-contact form-reg" action="{{ route('contact') }}" method="post">
            @csrf
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
                                <input class="form-control" id="form-reg-name" name="name" type="text"
                                    placeholder="Họ và tên">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label visually-hidden" for="form-reg-phonenumber">Số điện
                                    thoại</label>
                                <input class="form-control" id="form-reg-phonenumber" name="mobile" type="text"
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
                            <label class="form-label visually-hidden" for="form-reg-work">Band điểm mục tiêu?</label>
                            <select class="form-select form-select-default" id="form-reg-work" name="target">
                                <option selected="selected" value="0">Band điểm của bạn</option>
                                <option value="0 - 4.5">0 - 4.5</option>
                                <option value="5.0 - 5.5">5.0 - 5.5</option>
                                <option value="6.0 - 6.5">6.0 - 6.5</option>
                                <option value="7.0 +">7.0 +</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label visually-hidden" for="form-reg-address">Nội dung cần tư
                                vấn?</label>
                            <select class="form-select form-select-default" id="form-reg-address" name="content">
                                <option selected="selected" value="0">Nội dung bạn cần tư vấn</option>
                                <option value="Test năng lực">Test năng lực</option>
                                <option value="Tư vấn khóa học IELTS">Tư vấn khóa học IELTS</option>
                                <option value="Đăng ký thi thử IELTS">Đăng ký thi thử IELTS</option>
                                <option value="Khác">Khác</option>
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