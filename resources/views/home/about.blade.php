@extends('layouts.app')
@section('content')
<section class="page-title-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 text-center">
					<div class="page-title-content">
						<h3 class="title text-white">Về chúng tôi</h3>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
								<li class="breadcrumb-item active" aria-current="page">Giới thiệu</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page Title End -->
	<!-- Service Details Section Start -->
	<section class="service-details-page pdt-110 pdb-90">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-5">
					<div class="service-nav-menu mrb-30">
						<div class="service-link-list mb-30">
							<ul class="">
								<li class="active"><a href="#"><i class="fa fa-chevron-right"></i>Air Freight</a></li>
								<li><a href="#"><i class="fa fa-chevron-right"></i>Road Freight</a></li>
								<li><a href="#"><i class="fa fa-chevron-right"></i>Warehousing</a></li>
								<li><a href="#"><i class="fa fa-chevron-right"></i>Supply Chain</a></li>
								<li><a href="#"><i class="fa fa-chevron-right"></i>Ocean Freight</a></li>
								<li><a href="#"><i class="fa fa-chevron-right"></i>Packaging</a></li>
							</ul>
						</div>
					</div>
					<div class="sidebar-widget">
						<div class="brochure-download">
							<h4 class="mrb-40 widget-title">Tải Profile doanh nghiệp</h4>
							<p>Click download để tải hồ sơ doanh nghiệp chúng tôi</p>
							<a href="#" class="cs-btn-one"><span class="far fa-file-pdf mrr-10"></span> Download PDF</a>
						</div>
					</div>
					<div class="sidebar-widget bg-primary-color" data-background="images/bg/abs-bg4.png">
						<div class="contact-information">
							<h3 class="text-white mrb-20">Liên hệ</h3>
							<p class="text-white">Liên hệ với chúng tôi nếu bạn cần chuyên gia tư vấn thêm</p>
							<ul class="list-items text-white mrb-20">
								<li><span class="fas fa-phone alt mrr-10 text-white"></span>0987.654.321</li>
								<li><span class="fas fa-globe mrr-10 text-white"></span>Số 156/109 Trường Chinh - KCN Đồng Hòa, Q. Kiến An, HP</li>
								<li><span class="fas fa-envelope mrr-10 text-white"></span>info@pegasus-marine.vn</li>
							</ul>
							<a href="#" class="cs-btn-one btn-light mrt-15"><span class="fas fa-phone alt mrr-10"></span>Gọi Ngay</a>
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-lg-7">
					<div class="service-detail-text">
						<div class="blog-standared-img slider-blog mrb-35">
							<img class="img-full" src="{{asset('frontend/images/service/service-details1.jpg')}}" alt="">
						</div>
						<h3 class="mrb-20">Giới thiệu</h3>
						<p class="mrb-40">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
						<p class="mrb-40">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment. Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs</p>
						<div class="service-details-content">
							<div class="row d-flex mrb-40">
								<div class="col-lg-12 col-xl-6">
									<h3 class="mrb-20">Service Included</h3>
									<ul class="order-list primary-color mrb-lg-40">
										<li>revolutionary catalysts for chang</li>
										<li>catalysts for chang the Seamlessly</li>
										<li>business applications through</li>
										<li>procedures whereas processes</li>
									</ul>
								</div>
								<div class="col-lg-12 col-xl-6">
									<img class="img-full" src="images/service/service-details-inner-img2.jpg" alt="">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<h3 class="mrb-30">Câu hỏi thường gặp</h3>
								</div>
								<div class="col-lg-12">
									<div class="faq-block">
										<div class="accordion">
											<div class="accordion-item">
												<div class="accordion-header active">
													<h5 class="title">Q: What happens during Freshers' Week?</h5>
													<span class="fas fa-arrow-right"></span>
												</div>
												<div class="accordion-body">
													<p>A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
												</div>
											</div>
											<div class="accordion-item">
												<div class="accordion-header">
													<h5 class="title">Q: What is the transfer application process?</h5>
													<span class="fas fa-arrow-right"></span>
												</div>
												<div class="accordion-body">
													<p>A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
												</div>
											</div>
											<div class="accordion-item">
												<div class="accordion-header">
													<h5 class="title">Q: Why should I attend community college?</h5>
													<span class="fas fa-arrow-right"></span>
												</div>
												<div class="accordion-body">
													<p>A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection