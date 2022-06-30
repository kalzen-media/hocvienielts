@extends('layouts.app')
@section('meta')
<title>Liên hệ - {{env('APP_NAME')}}</title>
<meta name="keywords" content="{{env('APP_NAME')}}"/>
<meta name="description" content="{{env('APP_NAME')}}"/>
<meta property="og:image" content="{{env('APP_LOGO')}}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{env('APP_NAME')}}">
<meta property="og:description" content="{{env('APP_NAME')}}">
@stop
@section('content')
<section class="page-title-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 text-center">
					<div class="page-title-content">
						<h3 class="title text-white">Liên hệ</h3>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
								<li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page Title End -->
	<!-- Contact Section Start -->
	<section class="contact-section pdt-110 pdb-95 pdb-lg-90" data-background="{{ asset('frontend/images/bg/abs-bg1.png')}}">
		<div class="container">
			<div class="row mrb-60">
				<div class="col-lg-7">
					<div class="contact-form">
						<form action="#">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mrb-25">
										<input type="text" name="name" placeholder="Họ và tên" class="form-control" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mrb-25">
										<input type="text" name="phone" placeholder="Số điện thoại" class="form-control" required>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group mrb-25">
										<input type="email" name="email" placeholder="Email" class="form-control" required>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group mrb-25">
										<textarea rows="4" name="message" placeholder="Nội dung" class="form-control" required></textarea>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="form-group">
										<button type="submit" name="submit" class="cs-btn-one btn-md btn-round btn-primary-color element-shadow" value="Send">Gửi ngay</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-5">
					<!-- Google Map Start -->
					<div class="mapouter fixed-height">
						<div class="gmap_canvas">
							<iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Graz&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
							<a href="https://www.whatismyip-address.com/"></a>
						</div>
					</div>
					<!-- Google Map End -->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-xl-4">
					<div class="contact-block d-flex mrb-30">
						<div class="contact-icon">
							<i class="webex-icon-map1"></i>
						</div>
						<div class="contact-details mrl-30">
							<h5 class="icon-box-title mrb-10">Địa chỉ</h5>
							<p class="mrb-0">Số 156/109 Trường Chinh - KCN Đồng Hòa, Q. Kiến An, HP</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-xl-4">
					<div class="contact-block d-flex mrb-30">
						<div class="contact-icon">
							<i class="webex-icon-Phone2"></i>
						</div>
						<div class="contact-details mrl-30">
							<h5 class="icon-box-title mrb-10">Hotline</h5>
							<p class="mrb-0">0987.654.321</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-xl-4">
					<div class="contact-block d-flex mrb-30">
						<div class="contact-icon">
							<i class="webex-icon-envelope"></i>
						</div>
						<div class="contact-details mrl-30">
							<h5 class="icon-box-title mrb-10">Email</h5>
							<p class="mrb-0">info@pegasus-marine.vn</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('scripts')
<script>
    $(function(){
        console.log('Contact ready')
    })
</script>

@endsection