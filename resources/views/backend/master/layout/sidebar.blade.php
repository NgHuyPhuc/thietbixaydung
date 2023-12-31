	<!-- sidebar left-->
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
		</form>
        <ul class="nav menu">
			<li class="active"><a href="{{route('admin.home')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Tổng quan</a></li>
			<li><a href="{{route('category.home')}}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper" /></svg> Danh Mục</a></li>
			<li><a href="{{route('product.home')}}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Sản phẩm</a></li>
			<li><a href="{{route('about.home')}}"><svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg> Giới thiệu</a></li>
			<li><a href="{{route('new.home')}}"><svg class="glyph stroked sound on"><use xlink:href="#stroked-sound-on"/></svg> Tin tức</a></li>
			{{-- <li><a href="{{route('payment.home')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad" /></svg> Đơn hàng</a></li> --}}
			@if (Auth::user()->level == 1)
			<li role="presentation" class="divider"></li>
			<li><a href="{{route('useradminsite.home')}}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Quản lý thành viên</a></li>
			{{-- <li><a href="{{route('useradmin.home')}}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Quản lý Admin</a></li> --}}
			@endif
		
		</ul>

	</div>
	<!--/. end sidebar left-->
