@extends('frontend/master/master')
@section('title', 'Chi tiết sản phẩm')
@section('main')
    <div class="container mt-50">
        <div class="row">
            <div class="col-sm-9">
                <div class="content-sidebar-wrap">
                    <div class="row">
                        <div class="col-lg-5">
                            <img style="max-width: 100%;" src="/upload/img/{{$product->image}}" alt="">
                        </div>
                        <div class="col-lg-7">
                            <div class="summary entry-summary">
                                <h1 class="product_title entry-title">{{ $product->ten }}</h1>
                                <div class="product_meta">
                                    <span class="posted_in">Danh mục: <a
                                            href="{{route('listproductsite.home', ['id' =>$product->id_cat])}}"
                                            rel="tag">{{ $product->category->ten }}</a>
                                    </span>
                                </div>
                                <p class="price">Giá: {{ $product->gia }}</p>
                                <div class="woocommerce-product-details__short-description">
                                    <p>{{ $product->description }}</p>
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description">

                    {!! $product->more_description !!}
                </div>
            </div>
            <div class="col-sm-3 sidebar-shop">
                <section id="nav_menu-3" class="widget widget_nav_menu">
                    <h2 class="widget-title">@lang('lang.list-cat')</h2>
                    <div class="menu-danh-muc-container">
                        <ul id="menu-danh-muc" class="menu">
                            @foreach ($category as $item)
                                
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-74">
                                <a href="{{route('listproductsite.home', ['id' =>$item->id])}}">{{$item->ten}}</a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </section>
                <section class="widget list-item-product">
                    <h2 class="widget-title">@lang('lang.hot-prd')</h2>
                    @foreach ($prdside as $item)
                        <div class="prd-info mt-10">
                        <div class="row">
                            <div class="col-lg-5">
                                <a href="{{route('detailsite.home',['id'=>$item->id])}}" target="_blank">
                                    <img style="max-width: 100%;" src="/upload/img/{{$item->image}}" alt="">
                                </a>
                            </div>
                            <div class="col-lg-7 ">
                                <a target="_blank" class="fw-600" href="{{route('detailsite.home',['id'=>$item->id])}}">{{$item->ten}}</a>
                                <p class="price-sm">Giá: {{$item->gia}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </section>
            </div>
        </div>
    </div>
@endsection
