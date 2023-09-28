
@extends('frontend/master/master')
@section('title', 'Chi tiết sản phẩm')
@section('main')
<div class="container mt-50">
    <div class="row">
        <div class="col-sm-9">
            <h1 class="page-title">{{$name->ten}}</h1>
            <div class="row">
                @foreach ($listprd as $item)
                    <div class="col-lg-3 mt-40 mr-70 ">
                        <div class="row list-prd">
                            <a href="{{route('detailsite.home',['id'=>$item->id])}}">
                                <img class="mw-100" src="/upload/img/{{$item->image}}" alt="">
                            </a>
                            <h3>
                                <a class="page-title-sm" href="{{route('detailsite.home',['id'=>$item->id])}}">{{$item->ten}}</a>
                            </h3>
                            <p class="price-sm">Giá: {{$item->gia}}</p>

                        </div>
                    </div>
                @endforeach
                

            </div>
            <div class="custom-pagination mt-50 fr">
                {{-- <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Trở lại</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">tiếp theo</a></li>
                </ul>  --}}
                {{$listprd->links('frontend.pagination.pagination')}}

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