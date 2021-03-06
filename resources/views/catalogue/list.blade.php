@extends('layouts.app')
@section('meta')
<title>{{ env('APP_NAME')}}</title>
@endsection
@section('content')
<section class="inner-section single-banner" >
        <div class="container">
            <h2>{{ $catalogue->name }}</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $catalogue->name }}</li>
            </ol>
        </div>
    </section>
    <section class="inner-section shop-part">
        <div class="container">
            <div class="row content-reverse">
                <div class="col-lg-3">
                    <div class="shop-widget-promo">
                        <a href="#"><img src="{{ $catalogue->image->url?? '' }}" alt="promo"></a>
                    </div>
                 <!--   <div class="shop-widget">
                        <h6 class="shop-widget-title">Filter by Price</h6>
                        <form>
                            <div class="shop-widget-group"><input type="text" placeholder="Min - 00"><input type="text" placeholder="Max - 5k"></div><button class="shop-widget-btn"><i
                                    class="fas fa-search"></i><span>search</span></button>
                        </form>
                    </div>
                    <div class="shop-widget">
                        <h6 class="shop-widget-title">Filter by Rating</h6>
                        <form>
                            <ul class="shop-widget-list">
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="feat1"><label for="feat1"><i class="fas fa-star active"></i><i
                                                class="fas fa-star active"></i><i class="fas fa-star active"></i><i
                                                class="fas fa-star active"></i><i
                                                class="fas fa-star active"></i></label></div><span class="shop-widget-number">(13)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="feat2"><label for="feat2"><i class="fas fa-star active"></i><i
                                                class="fas fa-star active"></i><i class="fas fa-star active"></i><i
                                                class="fas fa-star active"></i><i class="fas fa-star"></i></label></div>
                                    <span class="shop-widget-number">(28)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="feat3"><label for="feat3"><i class="fas fa-star active"></i><i
                                                class="fas fa-star active"></i><i class="fas fa-star active"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i></label></div><span class="shop-widget-number">(35)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="feat4"><label for="feat4"><i class="fas fa-star active"></i><i
                                                class="fas fa-star active"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i></label></div><span class="shop-widget-number">(47)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="feat5"><label for="feat5"><i class="fas fa-star active"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i></label></div><span class="shop-widget-number">(59)</span>
                                </li>
                            </ul><button class="shop-widget-btn"><i class="far fa-trash-alt"></i><span>clear
                                    filter</span></button>
                        </form>
                    </div>
                    <div class="shop-widget">
                        <h6 class="shop-widget-title">Filter by Tag</h6>
                        <form>
                            <ul class="shop-widget-list">
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="tag1"><label for="tag1">new items</label></div><span class="shop-widget-number">(13)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="tag2"><label for="tag2">sale items</label></div><span class="shop-widget-number">(28)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="tag3"><label for="tag3">rating items</label></div><span class="shop-widget-number">(35)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="tag4"><label for="tag4">feature items</label></div><span class="shop-widget-number">(47)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="tag5"><label for="tag5">discount items</label></div><span class="shop-widget-number">(59)</span>
                                </li>
                            </ul><button class="shop-widget-btn"><i class="far fa-trash-alt"></i><span>clear
                                    filter</span></button>
                        </form>
                    </div>
                    <div class="shop-widget">
                        <h6 class="shop-widget-title">Filter by Brand</h6>
                        <form><input class="shop-widget-search" type="text" placeholder="Search...">
                            <ul class="shop-widget-list shop-widget-scroll">
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="brand1"><label for="brand1">mari gold</label></div><span class="shop-widget-number">(13)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="brand2"><label for="brand2">tredar</label></div><span class="shop-widget-number">(28)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="brand3"><label for="brand3">keya</label></div><span class="shop-widget-number">(35)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="brand4"><label for="brand4">diamond</label></div><span class="shop-widget-number">(47)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="brand5"><label for="brand5">lilly's</label></div><span class="shop-widget-number">(59)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="brand6"><label for="brand6">fremant</label></div><span class="shop-widget-number">(64)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="brand7"><label for="brand7">avocads</label></div><span class="shop-widget-number">(77)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="brand8"><label for="brand8">boroclas</label></div><span class="shop-widget-number">(85)</span>
                                </li>
                            </ul><button class="shop-widget-btn"><i class="far fa-trash-alt"></i><span>clear
                                    filter</span></button>
                        </form>
                    </div>
                    <div class="shop-widget">
                        <h6 class="shop-widget-title">Filter by Category</h6>
                        <form><input class="shop-widget-search" type="text" placeholder="Search...">
                            <ul class="shop-widget-list shop-widget-scroll">
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate1"><label for="cate1">vegetables</label></div><span class="shop-widget-number">(13)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate2"><label for="cate2">groceries</label></div><span class="shop-widget-number">(28)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate3"><label for="cate3">fruits</label></div><span class="shop-widget-number">(35)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate4"><label for="cate4">dairy farm</label></div><span class="shop-widget-number">(47)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate5"><label for="cate5">sea foods</label></div><span class="shop-widget-number">(59)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate6"><label for="cate6">diet foods</label></div><span class="shop-widget-number">(64)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate7"><label for="cate7">dry foods</label></div><span class="shop-widget-number">(77)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate8"><label for="cate8">fast foods</label></div><span class="shop-widget-number">(85)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate9"><label for="cate9">drinks</label></div><span class="shop-widget-number">(92)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate10"><label for="cate10">coffee</label></div><span class="shop-widget-number">(21)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate11"><label for="cate11">meats</label></div><span class="shop-widget-number">(14)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="cate12"><label for="cate12">fishes</label></div><span class="shop-widget-number">(56)</span>
                                </li>
                            </ul><button class="shop-widget-btn"><i class="far fa-trash-alt"></i><span>clear
                                    filter</span></button>
                        </form>
                    </div> -->
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                        </div>
                    </div>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-3">
                    @foreach($catalogue->products as $product)
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                            <!-- <div class="product-label"><label class="label-text sale">sale</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button> -->
                                <a class="product-image" href="{{ route('product.detail',['product' => $product->slug]) }}"><img src="{{ asset($product->images->first()->url ?? '')}}" alt="{{$product->title}}"></a>
                                <div class="product-widget">
                                    <a title="Product View" href="{{ route('product.detail',['product' => $product->slug]) }}" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                            <h6 class="product-name"><a href="{{ route('product.detail',['product' => $product->slug]) }}">{{$product->title}}</a></h6>
                                <h6 class="product-price">
                                    @if($product->regular_price != $product->price)
                                    <del>{{number_format($product->regular_price,0)}}</del>
                                    @endif
                                    <span>{{number_format($product->price,0)}}<small>VNĐ</small></span>
                                </h6>
                                <button class="js-add-to-cart cart-add" data-key="{{$product->id}}" title="Thêm vào giỏ"><i class="fas fa-shopping-basket"></i><span>Mua</span></button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection