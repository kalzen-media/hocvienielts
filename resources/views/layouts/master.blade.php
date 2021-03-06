<!DOCTYPE html>
<html lang="vi" class="h-100">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Facebook -->
    <meta property="og:url" content="#">
    <meta property="og:title" content="Học viện IELTS">
    <meta property="og:description" content="Học viện IELTS">

    <meta property="og:image" content="#">
    <meta property="og:image:secure_url" content="#">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Học viện IETLS">
    <meta name="author" content="Kalzen.com">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">

    @yield('meta')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap">
    <!-- Style-->
    <!-- build:css -->
    <link rel="stylesheet" href="{{asset('hocvienielts/vendors/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('hocvienielts/vendors/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{asset('hocvienielts/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('hocvienielts/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('hocvienielts/css/responsive.css')}}">
    <!-- endbuild -->
    <!-- jQuery-->
    <script src="{{asset('hocvienielts/vendors/js/jquery.min.js')}}"></script>
</head>
@include('layouts.navbar')

<body class="has-topbar">
    @yield('content')
    <!-- Footer-->
    <footer class="bg-primary text-white pt-120 pb-100 footerNext">
        <div class="container">
            <div class="row gy-50">
                <div class="col-12 col-lg-3"><a class="d-block mb-30" href="{{ route('index')}}"><img
                            src="{{ asset('hocvienielts/images/logo-white.png')}}"></a>
                    <p class="font-size-15 mb-10">Hotline: {{  $shared_config['hotline']->value }}</p>
                    <p class="font-size-15 mb-10">Email: {{  $shared_config['email']->value }}</p>
                    <ul class="nav text-white align-items-center mb-20 nav-gap-md nav-no-opacity">
                        <li class="nav-item"><a class="nav-link" target="_blank" href="{{  $shared_config['facebook']->value }}"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="8" height="17" fill="none">
                                    <path fill="currentColor"
                                        d="M6.318 2.8h1.391V.202A16.842 16.842 0 0 0 5.683.088c-2.006 0-3.38 1.353-3.38 3.837v2.287H.089v2.902h2.214v7.303h2.713V9.114H7.14l.338-2.902H5.016v-2c0-.839.21-1.413 1.302-1.413Z" />
                                </svg></a></li>
                        <li class="nav-item"><a class="nav-link" target="_blank" href="{{  $shared_config['youtube']->value }}"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="21" height="15" fill="none">
                                    <path fill="currentColor"
                                        d="M19.687 2.485A2.472 2.472 0 0 0 17.953.73C16.423.313 10.29.313 10.29.313s-6.133 0-7.662.416A2.473 2.473 0 0 0 .895 2.485c-.41 1.55-.41 4.782-.41 4.782s0 3.233.41 4.782c.226.855.89 1.5 1.734 1.729 1.53.415 7.662.415 7.662.415s6.132 0 7.662-.415a2.435 2.435 0 0 0 1.734-1.729c.41-1.549.41-4.782.41-4.782s0-3.232-.41-4.782ZM8.285 10.203v-5.87l5.126 2.934-5.126 2.936Z" />
                                </svg></a></li>
                        <li class="nav-item"><a class="nav-link" target="_blank" href="{{  $shared_config['instagram']->value }}"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="17" height="17" fill="none">
                                    <path fill="currentColor"
                                        d="M8.788 4.097C6.47 4.097 4.6 5.95 4.6 8.25c0 2.298 1.87 4.153 4.188 4.153 2.318 0 4.188-1.855 4.188-4.153 0-2.3-1.87-4.153-4.188-4.153Zm0 6.853c-1.498 0-2.723-1.211-2.723-2.7 0-1.49 1.221-2.7 2.723-2.7 1.502 0 2.723 1.21 2.723 2.7 0 1.489-1.225 2.7-2.723 2.7Zm5.336-7.023a.97.97 0 0 1-.977.968.97.97 0 0 1-.976-.968c0-.535.437-.969.976-.969.54 0 .977.434.977.969Zm2.774.983c-.062-1.298-.36-2.447-1.32-3.394C14.624.569 13.465.272 12.156.207c-1.349-.076-5.39-.076-6.74 0C4.113.27 2.954.565 1.995 1.512 1.035 2.46.74 3.61.674 4.906c-.076 1.338-.076 5.346 0 6.683.063 1.298.361 2.447 1.32 3.394.959.947 2.114 1.244 3.423 1.309 1.348.076 5.39.076 6.739 0 1.308-.062 2.468-.358 3.422-1.309.956-.947 1.254-2.096 1.32-3.394.076-1.337.076-5.342 0-6.68Zm-1.742 8.114a2.745 2.745 0 0 1-1.553 1.54c-1.075.423-3.627.325-4.815.325-1.188 0-3.743.095-4.815-.325a2.746 2.746 0 0 1-1.552-1.54c-.427-1.066-.329-3.596-.329-4.774 0-1.179-.094-3.712.329-4.775a2.745 2.745 0 0 1 1.552-1.54C5.048 1.512 7.6 1.61 8.788 1.61c1.188 0 3.743-.094 4.815.325a2.745 2.745 0 0 1 1.553 1.54c.426 1.066.328 3.596.328 4.775 0 1.178.098 3.712-.328 4.774Z" />
                                </svg></a></li>
                    </ul>
                    <p class="font-size-13 text-muted m-0">© 2022 Designed by <a class="text-white" href="https://kalzen.com"
                            target="_blank">Kalzen Media</a></p>
                </div>
                <div class="col-1 d-none d-lg-block"></div>
                <div class="col-12 col-lg-8">
                    <div class="row gy-50">
                        <div class="col-6 col-md-2">
                            <h6 class="display-6 text-white mb-20">Liên kết</h6>
                            <ul class="nav flex-column text-white nav-opacity nav-gap-sm">
                                <li class="nav-item"><a class="nav-link" href="/tin-tuc/doi-loi-tam-su-ve-the-ielts-academy">Giới thiệu</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('post.list')}}">Tin tức</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('contact')}}">Liên hệ</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-5">
                            <h6 class="display-6 text-white mb-20">Khóa học</h6>
                            <ul class="nav flex-column text-white nav-opacity nav-gap-sm">
                                <li class="nav-item"><a class="nav-link" href="/tin-tuc/khoa-hoc-ielts-foudation">IELTS
                                        FOUNDATION</a></li>
                                <li class="nav-item"><a class="nav-link" href="/tin-tuc/khoa-hoc-forward-ielts">FORWARD
                                        IELTS</a></li>
                                <li class="nav-item"><a class="nav-link" href="/tin-tuc/khoa-hoc-ielts-advanced">IELTS
                                        ADVANCED</a></li>
                                <li class="nav-item"><a class="nav-link" href="/tin-tuc/khoa-hoc-ielts-coaching">IELTS
                                        COACHING</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-5">
                            <h6 class="display-6 text-white mb-20">Fanpage</h6>
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftheieltsacademy.edu&tabs=timeline&width=340&height=331&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=372100597106969" width="340" height="331" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- build:js -->
    <script src="{{asset('hocvienielts/vendors/js/bootstrap.js')}}"></script>
    <script src="{{asset('hocvienielts/vendors/js/imagesloaded.pkgd.js')}}"></script>
    <script src="{{asset('hocvienielts/vendors/js/isotope.pkgd.js')}}"></script>
    <script src="{{asset('hocvienielts/vendors/js/jarallax.js')}}"></script>
    <script src="{{asset('hocvienielts/vendors/js/jarallax-element.js')}}"></script>
    <script src="{{asset('hocvienielts/vendors/js/jquery.countdown.js')}}"></script>
    <script src="{{asset('hocvienielts/vendors/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('hocvienielts/vendors/js/ofi.js')}}"></script>
    <script src="{{asset('hocvienielts/vendors/js/jquery.inview.js')}}"></script>
    <script src="{{asset('hocvienielts/vendors/js/swiper-bundle.js')}}"></script>
    <script src="{{asset('hocvienielts/vendors/js/gist-embed.min.js')}}"></script>
    <script src="{{asset('hocvienielts/js/helpers.js')}}"></script>
    <script src="{{asset('hocvienielts/js/controllers/show-on-scroll.js')}}"></script>
    <script src="{{asset('hocvienielts/js/controllers/countdown.js')}}"></script>
    <script src="{{asset('hocvienielts/js/controllers/isotope.js')}}"></script>
    <script src="{{asset('hocvienielts/js/controllers/navbar.js')}}"></script>
    <script src="{{asset('hocvienielts/js/controllers/stretch-column.js')}}"></script>
    <script src="{{asset('hocvienielts/js/controllers/swiper.js')}}"></script>
    <script src="{{asset('hocvienielts/js/controllers/others.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('hocvienielts/js/custom.js')}}"></script>
    @if (session('message'))
    
    <script>
        window.onload = (event) => {
            Swal.fire({
  title: 'Gửi liên hệ thành công!',
  text: 'Chúng tôi sẽ liên hệ lại với bạn trong thời gian sớm nhất!',
  icon: 'success',
  confirmButtonText: 'OK'
})
    };
    </script>
    @endif
<!-- Load Facebook SDK for JavaScript -->
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0&appId=372100597106969&autoLogAppEvents=1" nonce="sVmK5eUb"></script>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>

      <!-- Your Plugin chat code -->
      <div class="fb-customerchat"
        attribution="page_inbox"
        page_id="129367490945559">
      </div>
</body>

</html>