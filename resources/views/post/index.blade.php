@extends('layouts.app')
@section('meta')
    @if(isset($category))
    <title>{{$category->name}} - {{env('APP_NAME')}}</title>
    <meta name="keywords" content="{{$category->tags->pluck('name')->join(', ')}}"/>
    <meta name="description" content="{{$category->description}}"/>
    <meta property="og:image" content="{{$category->image?$category->image->url:''}}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{$category->name}}">
    <meta property="og:description" content="{{$category->description}}">
    @else
    <title>Tin tức - {{env('APP_NAME')}}</title>
    <meta name="keywords" content="{{env('APP_NAME')}}"/>
    <meta name="description" content="{{env('APP_NAME')}}"/>
    <meta property="og:image" content="{{env('APP_LOGO')}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{env('APP_NAME')}}">
    <meta property="og:description" content="{{env('APP_NAME')}}">
    @endif
@stop
@section('content')

    <!-- Main Content - start -->
    <main>
        <!-- Breadcrumbs -->
        <div class="b-crumbs-wrap">
            <div class="cont b-crumbs">
                <ul>
                    <li>
                        <a href="/">Trang chủ</a>
                    </li>
                    <li>
                        @if(isset($category))
                        <span>{{$category->name}}</span>
                        @else
                        <span>Tin tức</span>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
        <div class="cont maincont">
            <h1>
                @if(isset($category))
                <span>{{$category->name}}</span>
                @else
                <span>Tin tức</span>
                @endif
            </h1>
            <span class="maincont-line1 maincont-line12"></span>
            <span class="maincont-line2 maincont-line22 blog-line"></span>
            <!-- Blog Sections -->
            <ul class="cont-sections">
                <li class="active">
                    <a href="{{route('post.list')}}">Tất cả</a>
                </li>
                @foreach($categories as $category)
                <li>
                    <a href="{{$category->url}}">{{$category->name}}</a>
                </li>
                @endforeach
            </ul>
            <div class="blog">
                <!-- Blog Posts List - start -->
                <div class="blog-cont">
                    <div id="blog-grid">
                        @foreach($posts as $post)
                        <div class="blog-grid-i">
                            <div class="blog-i">
                                <a href="{{$post->url}}" class="blog-img">
                                    <img src="{{$post->images()->first()->url??''}}" alt="{{$post->title}}">
                                </a>
                                <p class="blog-info">
                                    <a href="{{$post->categories()->first()->url??''}}">{{$post->categories()->first()->name??''}}</a>
                                    <time datetime="{{$post->created_at}}">{{date('d.m.Y',strtotime($post->created_at))}}</time>
                                </p>
                                <h3>
                                    <a href="{{$post->url}}">{{$post->name}}</a>
                                </h3>
                                <p>
                                    {{substr(strip_tags($post->description),0,100)}} <a href="{{$post->url}}">Xem thêm</a>
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Pagination -->
                    <div>
                        {{$posts->appends(request()->only(['keyword']))->links()}}
                    </div>
                </div>
                <!-- Blog Posts List - end -->
                <!-- Blog Sidebar - start -->
                <div class="blog-sb">
                    <div class="blog-search">
                        <h4>Tìm kiếm</h4>
                        <form action="{{route('post.search')}}">
                            <input name="keyword" value="{{request('keyword')}}" type="text" placeholder="Từ khóa..">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="blog-featured-wrap">
                        <h4>Tin nổi bật</h4>
                        @foreach($featured_posts as $post)
                        <div class="blog-featured">
                            <p class="blog-featured-info">
                                <a href="{{$post->categories->first()->url??''}}">{{$post->categories->first()->name??''}}</a>
                                <time datetime="{{$post->created_at}}">{{date('d.m.Y',strtotime($post->created_at))}}</time>
                            </p>
                            <h5>
                                <a href="{{$post->url}}">{{$post->title}}</a>
                            </h5>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Blog Sidebar - end -->
            </div>
        </div>
    </main>
    <!-- Main Content - end -->
@endsection
@section('scripts')
<script>
    $(function(){
        console.log('Post index ready')
    })
</script>
@endsection