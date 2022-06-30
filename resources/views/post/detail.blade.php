@extends('layouts.app')
@section('meta')
<title>{{$post->title}}</title>
<meta name="keywords" content="{{collect($post->tags)->pluck('name')->join(',')}}"/>
<meta name="description" content="{{substr(strip_tags($post->description),0,300)}}"/>
<meta property="og:image" content="{{$post->images()->first()->url??''}}">
<meta property="og:type" content="article">
<meta property="og:title" content="{{$post->title}}">
<meta property="og:description" content="{{substr(strip_tags($post->description),0,300)}}">
@stop
@section('content')
<section class="page-title-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 text-center">
					<div class="page-title-content">
						<h3 class="title text-white">{{ $post->title }}</h3>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
								<li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
    <section class="blog-single-news pdt-110 pdb-90">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7">
					<div class="single-news-details news-wrapper mrb-30">
						<div class="single-news-content">
							<div class="news-thumb">
								<img src="{{$post->images()->first()->url}}" class="img-full" alt="{{ $post->title }}">
								<div class="news-date">
									<div class="entry-date">{{date('d',strtotime($post->updated_at))}} <br> <span>T{{date('m',strtotime($post->updated_at))}}</span></div>
								</div>
							</div>
							<div class="news-description">
								<h4 class="the-title">{{$post->title }}</h4>
                                {!! $post->content !!}
							</div>
							<div class="single-news-tag-social-area clearfix">
								
								<div class="single-news-share text-left text-xl-right">
									<h5 class="mrb-15">Chia sẻ:</h5>
									<ul class="social-icons">
										<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
										<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-5 sidebar-right">
					<aside class="news-sidebar-widget">
						<div class="widget sidebar-widget widget-search mrb-30">
							<form class="search-form">
								<label>
									<input type="search" class="search-field" placeholder="Tìm kiếm...">
								</label>
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<div class="widget sidebar-widget widget-categories">
							<h4 class="mrb-30 single-blog-widget-title">Danh mục</h4>
							<ul class="list">
                            @foreach($categories as $category)
								<li><i class="fas fa-caret-right vertical-align-middle text-primary-color mrr-10"></i><a href="{{ route('post.category', ['alias' => $category->slug]) }}">{{ $category->name }}</a></li>
							@endforeach
                            </ul>
						</div>
						<div class="widget sidebar-widget widget-popular-posts">
							<h4 class="mrb-30 single-blog-widget-title">Bài viết xem nhiều</h4>
                            @foreach ($most_view as $item )
							<div class="single-post media mrb-20">
								<div class="post-image mrr-20">
									<img style="width: 50px; height:50px; object-fit:cover" src="{{$item->images()->first()->url}}" alt="{{ $item->title}}">
								</div>
								<div class="post-content media-body align-self-center">
									<h5 class="mrb-5"><a href="{{ route('post.detail', ['alias' => $item->slug])}}">{{ $item->title }}</a></h5>
									<span class="post-date"><i class="fa fa-clock-o mrr-5"></i>{{date('d/m/Y',strtotime($post->updated_at))}}</span>
								</div>
							</div>
                            @endforeach
						</div>
						<div class="widget sidebar-widget widget-tags">
							<h4 class="mrb-30 single-blog-widget-title">Tags</h4>
							<ul class="list">
								<li><a href="#">Consulting</a></li>
								<li><a href="#">Finance</a></li>
								<li><a href="#">Law</a></li>
								<li><a href="#">Corporate</a></li>
								<li><a href="#">Taxes</a></li>
								<li><a href="#">Meeting</a></li>
								<li><a href="#">Business</a></li>
								<li><a href="#">Investment</a></li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</section>
@endsection