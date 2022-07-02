@extends('layouts.master')
@section('meta')
<title>Liên hệ - {{env('APP_NAME')}}</title>
<meta name="keywords" content="{{env('APP_NAME')}}" />
<meta name="description" content="{{env('APP_NAME')}}" />
<meta property="og:image" content="{{env('APP_LOGO')}}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{env('APP_NAME')}}">
<meta property="og:description" content="{{env('APP_NAME')}}">
@stop
@section('content')
<div class="content-wrap ">
    <div class="pt-190 pb-130 bg-linear-gradient shape-parent">
        <!-- Shape-->
        <div class="shape justify-content-end"><img loading="lazy" src="{{ asset('hocvienielts/img/root/contact-2-shape-547x414.png')}}"
                alt="partial" width="547" height="414"></div><!-- Shape-->
        <div class="shape align-items-end justify-content-start"><img loading="lazy"
                src="{{ asset('hocvienielts/img/root/contact-2-shape-558x364.png')}}" alt="partial" width="558" height="364"></div>
        <div class="container">
            <h1 class="m-0 text-center mb-100" data-show="startbox">Liên hệ với The Ielts Academy</h1>
            <div class="row gy-30">
                <div class="col-12 col-lg-4">
                    <!-- Item-->
                    <div class="bg-white rounded-4 shadow py-40 px-50" data-show="startbox">
                        <div class="d-flex">
                            <div class="flex-shrink-0"><svg class="text-accent-1" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="none">
                                    <path fill="currentColor"
                                        d="M16 11.98v2.408a1.604 1.604 0 0 1-1.094 1.527 1.613 1.613 0 0 1-.66.079 15.941 15.941 0 0 1-6.943-2.465A15.672 15.672 0 0 1 2.476 8.71a15.869 15.869 0 0 1-2.47-6.96A1.603 1.603 0 0 1 .96.136C1.163.047 1.384 0 1.607 0h2.414A1.61 1.61 0 0 1 5.63 1.381c.102.77.29 1.528.563 2.256a1.603 1.603 0 0 1-.362 1.694l-1.022 1.02a12.86 12.86 0 0 0 4.827 4.817l1.022-1.02a1.61 1.61 0 0 1 1.697-.36c.73.271 1.489.46 2.26.561A1.61 1.61 0 0 1 16 11.98Z" />
                                </svg></div>
                            <div class="flex-grow-1 ms-15">
                                <h5 class="m-0">Thông tin liên hệ:</h5>
                                <p class="m-0 mt-15">Email: example@gmail.com <br>Phone: 0988765321</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <!-- Item-->
                    <div class="bg-white rounded-4 shadow py-40 px-50" data-show="startbox" data-show-delay="100">
                        <div class="d-flex">
                            <div class="flex-shrink-0"><svg class="text-accent-1" xmlns="http://www.w3.org/2000/svg"
                                    width="15" height="17" fill="none">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M7.5 17S15 12.364 15 6.955c0-1.845-.79-3.614-2.197-4.918C11.397.733 9.49 0 7.5 0 5.51 0 3.603.733 2.197 2.037.79 3.34 0 5.11 0 6.955 0 12.364 7.5 17 7.5 17ZM10 7.286c0 1.341-1.12 2.428-2.5 2.428S5 8.627 5 7.286c0-1.342 1.12-2.429 2.5-2.429S10 5.944 10 7.286Z"
                                        clip-rule="evenodd" />
                                </svg></div>
                            <div class="flex-grow-1 ms-15">
                                <h5 class="m-0">Địa chỉ:</h5>
                                <p class="m-0 mt-15">Số 124 Tô Hiệu, <br>Lê Chân, Hải Phòng</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <!-- Item-->
                    <div class="bg-white rounded-4 shadow py-40 px-50" data-show="startbox" data-show-delay="200">
                        <div class="d-flex">
                            <div class="flex-shrink-0"><svg class="text-accent-1" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="none">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.7 3.379a1 1 0 1 0-2 0v4.8a1 1 0 0 0 .553.894l3.2 1.6a1 1 0 1 0 .894-1.789L8.7 7.561V3.379Z"
                                        clip-rule="evenodd" />
                                </svg></div>
                            <div class="flex-grow-1 ms-15">
                                <h5 class="m-0">Thời gian hoạt động:</h5>
                                <p class="m-0 mt-15">Thứ 2 - Chủ nhật <br>8H - 21H30</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-110">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- Form-->
                        <form data-show="startbox">
                            <div class="row gy-40">
                                <div class="col-12 col-md-6"><input class="form-control" type="text" placeholder="Your Name *"></div>
                                <div class="col-12 col-md-6"><input class="form-control" type="email" placeholder="Your Email *"></div>
                                <div class="col-12 col-md-6"><input class="form-control" type="tel" placeholder="Your Phone *"></div>
                                <div class="col-12 col-md-6"><input class="form-control" type="text" placeholder="Company"></div>
                                <div class="col-12 col-md-6"><select class="form-control">
                                        <option selected="">I interested in ...</option>
                                        <option>Colibri Creative Project</option>
                                        <option>Colibri Project</option>
                                        <option>Happy Moments Photoset</option>
                                        <option>Luxury Car Website</option>
                                        <option>Funny Dog</option>
                                        <option>Creative Branding</option>
                                    </select></div>
                                <div class="col-12 col-md-6"><select class="form-control">
                                        <option selected="">Budget</option>
                                        <option>&lt; 10 000</option>
                                        <option>10-20k</option>
                                        <option>20-30k</option>
                                        <option>&gt; 30 000</option>
                                    </select></div>
                                <div class="col-12 mb-10"><textarea class="form-control" rows="2" placeholder="Message *"></textarea></div>
                                <div class="col-12 col-md-6 col-lg-5">
                                    <div class="form-attach-file"><label class="form-attach-label" for="formFile"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" fill="none">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M24 12.251 13.126 22.953A7.162 7.162 0 0 1 8.103 25a7.162 7.162 0 0 1-5.022-2.047A6.935 6.935 0 0 1 1 18.009c0-1.854.748-3.632 2.08-4.943L13.955 2.365A4.775 4.775 0 0 1 17.303 1c1.256 0 2.46.491 3.348 1.365a4.624 4.624 0 0 1 1.387 3.295 4.624 4.624 0 0 1-1.387 3.296L9.766 19.657a2.387 2.387 0 0 1-1.675.683c-.627 0-1.23-.246-1.674-.683a2.312 2.312 0 0 1-.693-1.648c0-.618.25-1.21.693-1.647l10.046-9.875" />
                                            </svg>Attach file</label><input class="form-control" type="file" id="formFile" hidden></div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="personalData"><label class="form-check-label" for="personalData">I agree with the processing of personal data *</label></div>
                                </div>
                                <div class="col-12 col-lg-3 text-start text-lg-end">
                                    <!-- Button--><button class="btn btn-accent-1">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div><!-- Footer-->

@endsection
@section('scripts')
<script>
$(function() {
    console.log('Contact ready')
})
</script>

@endsection