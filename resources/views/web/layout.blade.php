<!DOCTYPE html>
<html lang="vi">
<title>Rever | Mua bán, cho thuê nhà đất, căn hộ, đất nền và văn phòng</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="UTF-8" />
<meta name="description" content="Với Rever, việc mua bán, cho thuê, đầu tư bất động sản, nhà đất trở nên hiệu quả và tin cậy hơn. Bạn sẽ dễ dàng tìm được ngôi nhà ưng ý nhất với giá hợp lý." />
<meta name="keywords" content="Rever, mua ban, cho thue, bat dong san, nha dat, van phong, dat nen, biet thu, villa" />
<meta name="author" content="rever.vn" />
<link rel="canonical" href="index.html" />
<link rel="shortcut icon" type="image/x-icon" href="https://static.reverland.com/favicon.ico" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta property="fb:app_id" content="265437617126890" />
<meta property="og:url" content="https://rever.vn/" />
<meta property="og:title" content="Rever | Mua bán, cho thuê nhà đất, căn hộ, đất nền và văn phòng" />
<meta property="og:description" content="Với Rever, việc mua bán, cho thuê, đầu tư bất động sản, nhà đất trở nên hiệu quả và tin cậy hơn. Bạn sẽ dễ dàng tìm được ngôi nhà ưng ý nhất với giá hợp lý." />
<meta property="og:image" content="https://static.reverland.com/images/rever-thumbnail.jpg" />
<meta property="og:image:url" content="https://static.reverland.com/images/rever-thumbnail.jpg" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="320" />
<meta property="og:site_name" content="rever.vn" />
<meta property="og:rich_attachment" content="true" />
<meta property="og:type" content="article" />
<meta property="static-url" content="https://static.reverland.com" />
<meta property="hotline" content="0901 777 667" />
<meta name="apple-itunes-app" content="app-id=265437617126890, app-argument=" />

<link rel="stylesheet" href="{{ URL::asset('web/css/material-design-iconic-font.2.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('web/css/fontawesome.css') }}">

<script src="{{ URL::asset('web/js/jQuery-2.1.4.min.js') }}"></script>
<script src="{{ URL::asset('web/js/external.js') }}"></script>

<link rel="stylesheet" href="{{ URL::asset('web/css/common-page.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('web/css/index.min.css') }}" />

</head>
<body>

	<header id="home" class="main-header">
		<div class="col-left">
			<div class="logo-large">
				<a href="#" title="Rever logo"></a>
			</div>
			<div class="logo">
				<a href="#" title="Rever logo">
					<i class="zmdi zmdi-chevron-down"></i>
				</a>
				<div class="main-nav-menu">
					<div class="login">

						<div class="user-login">
							<a href="#login" title="Đăng nhập / Đăng ký" class="btn-primary btn-black-outline btn-medium">Đăng
							nhập</a>
							<a href="#register" class="btn-primary btn-red-outline btn-medium">Đăng ký</a>
						</div>



					</div>
					
					<!-- nav -->
					@include('web.navbar')
				</div>
			</div>
		</div>
		<div class="col-right">
			@include('web.topmenu')
			<div class="login">

				<a href="#login" title="Đăng nhập / Đăng ký" class="btn-login">Đăng nhập</a>



				<div class="agency-rever">
					<a href="#" title="Môi giới với Rever">Môi giới với Rever</a>
				</div>
			</div>
		</div>

		<div class="search-mobile-component" keyword="TP. Hồ Chí Minh" placeholder="Nhập địa điểm, khu dân cư, tòa nhà"></div>
	</header>
	

	<div class="banner-top-bg" style="background: url('{{ URL::asset('web/imgs/image-topsearch-bg_03.jpg') }}') 50% 50% / cover no-repeat">
		<div class="banner-cover">
			<div class="banner-cover-inner">
				<h1 class="heading-01">Tìm kiếm ngôi nhà bạn yêu thích</h1>
				@include('web.form')
			</div>
		</div>
	</div>

	@yield('content')


<script src="{{ URL::asset('web/js/jquery-ui.min.js') }}"></script>
<script src="{{ URL::asset('web/js/rever-options.min.js') }}"></script>
<script src="{{ URL::asset('web/js/header.min.js') }}"></script>

@include('web.footer')
<script>
	/*Footer*/
	let footerContent = $("#footer .info-container li")

	toggleFooterContent()

	footerContent.click(function (e) {
		if (window.matchMedia("(max-width: 640px)").matches) {
      // don't slideUp when click <a>
      if (e.target.tagName === 'A')
      	return

      footerContent.find("ul").slideUp(300)
      footerContent.find(".zmdi").removeClass("zmdi-chevron-up").addClass("zmdi-chevron-down")
      if (!$(this).find("ul").is(":visible")) {
      	$(this).find("ul").slideDown(300)
      	$(this).find(".zmdi").removeClass("zmdi-chevron-down").addClass("zmdi-chevron-up")
      }
  }
});

	$(window).resize(function () {
		toggleFooterContent()
	})

  /**
   * show/hide footer content depend on max-width
   */
   function toggleFooterContent() {
   	if (window.matchMedia("(max-width: 640px)").matches) {
   		footerContent.find("ul").hide()
   		footerContent.find(".zmdi").removeClass("zmdi-chevron-up").addClass("zmdi-chevron-down")
   	} else {
   		footerContent.find("ul").show()
   	}
   }

   /*Footer - END*/
</script>
<!-- <script async defer src="../static.reverland.com/app_v2/suggest-home.min-1554802454879.js"></script>
<script async defer src="../static.reverland.com/app/favorite.min-1554802454879.js"></script>
<script src="../static.reverland.com/js/owl.carousel.min-1554802454876.js"></script>
<script async defer src="../static.reverland.com/app_v2/header-v2.min-1554802454879.js"></script> -->

</body>
</html>