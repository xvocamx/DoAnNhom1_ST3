<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <base href="{{asset('')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">

    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <header>
      <div class="container-fluid">
      <div class="header-top">
  			<div class="container">
          <div class="pull-left auto-width-left">
            <ul class="top-menu menu-beta l-inline">
              <li><i class="fa fa-home"></i> Chào Mừng Bạn Đến Với Website Của Chúng Tôi</li>
              <li><i class="fa fa-phone"></i> 0797842160</li>
            </ul>
          </div>
          <div class="pull-right auto-width-right">
            <ul class="top-details menu-beta l-inline">
              @if(Auth::check())
              <li><a href="userinfo"><i class="fa fa-user" aria-hidden="true"></i> {!! Auth::user()->name !!}</a></li>
              <li><a href="{{route('getlogout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
              @else
                <li><a href="{{ url('/register') }}">Đăng kí</a></li>
                <li><a href="{{ url('/login') }}">Đăng nhập</a></li>
              @endif
            </ul>
          </div>
          <div class="clearfix"></div>
  			</div> <!-- .container -->
		  </div> <!-- .header-top -->
    <!--header bottom-->
    <div class="header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-6 logo" style="margin-bottom: -20px;margin-top: -20px;">
            <img src="images/logo.jpg" alt="logo" width="150">
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6 search">
            <div class="form-group timkiem">
              <form action="{{url('search')}}" method="get">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="text" name="key" class="form-control" placeholder="Nhập Từ Khóa Để Tìm Kiếm">
                <button name="button" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>
            </div>
            <div class="cart">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i> <a href="{!! route('getCart') !!}">Giỏ hàng ({{ Cart::count() }})</a>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <!--end header bottom-->
    </div>
    <!--menu-->
    @include('layouts.menu')
    <!--end menu-->
    </header>

    <div class="container-fluid">
          @yield('content')
    </div>


    <div id="footer" class="color-div" style="background-color: #d4d3d3;">
    		<div class="container">
    			<div class="row">
    				
    				<div class="col-sm-6">
    					<div class="widget">
    						<h4 class="widget-title">Tổng đài hỗ trợ (Miễn phí gọi)</h4>
    						<div>
    							<ul>
    								<li>Gọi mua: 1800.1060 (7:30 - 22:00)</li>
    								<li> Kỹ thuật: 1800.1763 (7:30 - 22:00)</li>
    								<li> Khiếu nại: 1800.1062 (8:00 - 21:30)</li>
    								<li>Bảo hành: 1800.1064 (8:00 - 21:00)</li>
    							</ul>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-6">
    				 <div class="col-sm-10">
    					<div class="widget">
    						<h4 class="widget-title">Liên Hệ</h4>
    						<div>
    							<div class="contact-info">
    								<p>3© 2018. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày 02/01/2007. GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 04/06/2020.
Địa chỉ: 128 Trần Quang Khải, P. Tân Định, Q.1, TP.Hồ Chí Minh. Điện thoại: 028 38125960. Email: cskh@thegioididong.com. Chịu trách nhiệm nội dung: Huỳnh Văn Tốt. Xem chính sách sử dụng</p>
    							
    							</div>
    						</div>
    					</div>
    				  </div>
    				</div>
    				
    			</div> <!-- .row -->
    		</div> <!-- .container -->
    	</div> <!-- #footer -->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{  asset('js/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{  asset('js/bootstrap.min.js')}}"></script>

    
    @yield('script')
  </body>
</html>
