<?php
use Illuminate\Support\Str;
?>
@extends('frontend/master/master')
@section('title', 'Chi tiết sản phẩm')
@section('main')
<div class="container mt-50">
    <div class="row">
        <div class="col-sm-9">
            <h1 class="page-title">Thư viện &amp; Tin tức</h1>

            @foreach ($news as $item)
                <div class="listtintuc mt-50">
                <div class="row bdb-1px pb-10">
                    <div class="col-lg-3">
                        <a target="_blank" href="{{route('newsite.home',['id'=>$item->id])}}">
                            <img class="mw-100" src="/upload/img/{{$item->image}}" alt="">
                        </a>
                    </div>
                    <div class="col-lg-9">
                        <h3 class="entry-title">
                            <a target="_blank" href="{{route('newsite.home',['id'=>$item->id])}}"
                                title="Công ty cho thuê xe nâng hàng 3 tấn giá rẻ tại Hà Nội">
                                {{$item->title}}
                            </a>
                        </h3>
                        <div  class="entry-description">
                            <p>
                                {!!str::limit(substr($item->content, 100), 400)!!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            


            <div class="custom-pagination mt-50 fr">
                {{-- <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Trở lại</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">tiếp theo</a></li>
                </ul>  --}}
                {{$news->links('frontend.pagination.pagination')}}


            </div>
        </div>
        <div class="col-sm-3 sidebar-shop">
            <section class="widget list-item-product">
                <h2 class="widget-title">@lang('lang.news')</h2>
                @foreach ($newside as $item)
                    
                <div class="prd-info mt-10 bdb-1px pb-10">
                    <div class="row">
                        <div class="col-lg-5">
                            <a href="{{route('newsite.home',['id'=>$item->id])}}" target="_blank">
                                <img style="max-width: 100%;" src="/upload/img/{{$item->image}}"
                                    alt="">
                            </a>
                        </div>
                        <div class="col-lg-7 ">
                            <a target="_blank" class="fw-600" href="{{route('newsite.home',['id'=>$item->id])}}">{{$item->title}}</a>
                        </div>
                    </div>
                </div>
                @endforeach


            </section>
        </div>
    </div>
    
</div>
@endsection