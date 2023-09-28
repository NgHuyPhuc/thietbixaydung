<?php
use App\Models\Category;
use App\Models\Newinfo;
?>
<body>
    <div class="header">
        <div class="container">
            <div class="header-content">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo">
                            <a href="{{route('site.home')}}"><img
                                    src="img/logo_1.png">
                                <p>Công ty cổ phần cho thuê thiết bị xây dựng KANAMOTO FECON HASSYU</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="main-text">
                            <h2>Fast Reliable Service</h2>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="top-head">
                            <p><span><i class=" fas fa-mobile-alt"></i> 0912 86 2015</span>
                                <span><i class="fa fa-envelope" aria-hidden="true"></i> anhbn@kfh.com.vn</span>
                            </p>
                            <div class="lang">

                                <ul class="language-chooser language-chooser-image qtranxs_language_chooser"
                                    id="qtranslate-chooser">
                                    <li class="lang-vi active"><a href="{{route('language',['vi'])}}" hreflang="vi"
                                            title="Tiếng Việt (vi)" class="qtranxs_image qtranxs_image_vi"><img
                                                src="https://kfh.com.vn/wp-content/plugins/qtranslate-x/flags/vn.png"
                                                alt="Tiếng Việt (vi)"><span style="display:none">Tiếng Việt</span></a>
                                    </li>
                                    <li class="lang-en"><a href="{{route('language',['en'])}}" hreflang="en"
                                            title="English (en)" class="qtranxs_image qtranxs_image_en"><img
                                                src="https://kfh.com.vn/wp-content/plugins/qtranslate-x/flags/gb.png"
                                                alt="English (en)"><span style="display:none">English</span></a></li>
                                </ul>
                                <div class="qtranxs_widget_end"></div>
                            </div>
                            <p></p>
                        </div>
                        <div class="search-header">
                            <form id="search-form" role="search" method="get" class="" action="{{route('searchsite.home')}}">
                                <input type="search" id="woocommerce-product-search-field-0" class="search-field"
                                    placeholder="Tìm kiếm..." value="" name="keyword" autocomplete="off">
                                <button class="btn-search" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                                {{-- <input type="hidden" name="post_type" value="product" autocomplete="off"> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="horizontal-menu">
        <div class="container">
            <ul class="menu">
                <li><a href="{{route('site.home')}}">@lang('lang.home')</a></li>
                <li><a href="{{route('aboutsite.home')}}">@lang('lang.introduce')</a></li>
                <li class="dropdown menu-item-has-children">
                    <a href="{{route('listproductsite.home')}}">@lang('lang.forklifts')</a>
                    <ul class="dropdown-content">
                        @foreach (Newinfo::where('level', 1)->orderby('id','asc')->take(6)->get() as $item)
                            <li><a href="{{route('newsite.home',['id' => $item->id])}}">{{$item->title}}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li class="dropdown menu-item-has-children">
                    <a href="#products">@lang('lang.product')</a>
                    <ul class="dropdown-content">
                        @foreach (Category::orderby('id','asc')->take(9)->get() as $item)
                            <li><a href="{{route('listproductsite.home',['id' => $item->id])}}">{{$item->ten}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{route('listproductsite.home',['id' => 11])}}">@lang('lang.liquidation-machine')</a></li>
                <li><a href="{{route('listtintuc.home')}}">@lang('lang.new')</a></li>
                {{-- <li><a href="#contact">Tuyển dụng</a></li>
                <li><a href="#contact">Liên hệ</a></li> --}}
            </ul>
        </div>

    </nav>