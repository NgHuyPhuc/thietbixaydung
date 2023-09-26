@extends('frontend/master/master')
@section('title', 'Trang chủ')
@section('main')
<div class="container mt-50">
    <div class="row">
        <div class="col-sm-9">
            <header class="entry-header">
                <h1 class="entry-title">{{$about->title}}</h1>		
            </header>
            <div class="entry-content">
                {!! $about->content !!}
            </div>
        </div>
        
        <div class="col-sm-3 sidebar-shop">
            <section class="widget list-item-product">
                <h2 class="widget-title">Tin tức mới</h2>
                @foreach ($news as $item)
                    
                <div class="prd-info mt-10 bdb-1px pb-10">
                    <div class="row">
                        <div class="col-lg-5">
                        <a href="#" target="_blank">
                            <img style="max-width: 100%;" src="img/may-nen-khi-truc-vit-co-dau-3-80x65.jpg" alt="">
                        </a>
                        </div>
                        <div class="col-lg-7 ">
                            <a class="fw-600" href="#">{{$item->title}}</a>
                        </div>
                    </div>
                </div>
                @endforeach


            </section>
        </div>
    </div>
</div>
@endsection