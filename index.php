<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test</title>
	<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap@5.1.3/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome@5.13/css/all.min.css">

	<script type="text/javascript" src="assets/plugins/jquery@3.4.1/jquery.min.js"></script>
</head>
<style>

	body{
		margin: 0;
		padding: 0;
		background: #F4F4F4;
	}

	/*========== Navigation ==========*/
	.navi-head{
		background-color: #00483D;
	}

	.navi-head ul{
		float: right;
		padding: 0;
		margin: 0;
	}

	.navi-head ul li{
		list-style-type: none;
		float: left;
		padding: 4px 6px;
	}

	.navi-head ul li a{
		text-decoration: none;
		color: white;
		font-size: 0.8rem;
	}
	/*========== * Navigation ==========*/

	/*========== Header ==========*/
	.header .logo{
		text-align: center;
	}

	.header .searchbox{
		background: #fff;
		border-radius: 15px;
		padding: 1px;
		box-shadow: 0 0px 6px #ccc;
		height: 48px;
	}

	.header .searchbox [name="keysearch"]{
		padding: 0px 12px;
		border: none;
		outline: none;
		width: calc(100% - 46px);
	}

	.header .searchbox .btn-search{
		background: linear-gradient(#00917a,#00483d);
		color: white;
		border: none;
		border-radius: 15px;
		width: 45px;
		height: 45px;
		font-size: 1.2rem;
	}

	.header .searchbox .btn-search:hover{
		background: linear-gradient(#00CEAF,#007967);
		cursor: pointer;
	}
	.header .searchbox .btn-search:hover i{
		color: #303030;
	}

	.header .shop-tools .btn-check-order{
		height: 45px;
		border: none;
		background: #00483E;
		color: white;
		padding: 0px 8px;
  		border-radius: 8px;
	}
	.header .shop-tools .btn-check-order .icon{
  		line-height: 45px;
	}

	.header .shop-tools .btn-check-order .title{
		width: 70px;
		font-size: .7rem;
		height: 45px;
		display: flex;
		align-items: center;
	}

	.header .shop-tools .btn-check-order:hover{
		background: #00AE94;
		cursor: pointer;
	}

	.header .shop-tools .btn-cart{
		width: 45px;
		height: 45px;
		border: none;
		background: none;
		position: relative;
	}

	.header .shop-tools .btn-cart .icon{
		position: absolute;
		font-size: 1.5rem;
		top: 5px;
		color: #00483D;
	}

	.header .shop-tools .btn-cart .badge{
		position: absolute;
		color: #FFF;
		width: 20px;
		text-align: center;
		padding: 0;
		line-height: 20px;
		border-radius: 100%;
		background: #FF6801;
		top: 3px;
		right: 3px;
	}


	.header .shop-tools .btn-cart:hover .icon{
		color: #00AE94;
	}
	/*========== * Header ==========*/
	

	/*========== * Menu Head ==========*/
	.menu-head .menus{
		background: #00483D;
		border-radius: 8px;
		position: relative;
	}

	.menu-head .menus>ul{
		height: 60px;
		margin: 0;
		padding: 0;
		color: white;  
		width: fit-content;
  		margin: auto;
	}

	.menu-head .menus>ul>li{
		list-style-type: none;
		text-align: center;
		float: left;
		height: 100%;
		padding: 10px 16px;
	}
	
	.menu-head .menus>ul>li i{
		font-size: 1.3rem;
	}

	.menu-head .menus>ul>li .title{
		font-size: .7rem;
	}

	.menu-head .menus>ul>li>ul{
		position: absolute;
		display: none;
		list-style-type: none;
		z-index: 2;
	}

	.menu-head .menus>ul>li:hover{
		border-bottom: 4px solid #FFB701;
		border-radius: 8px;
		cursor: pointer;
	}

	.menu-head .menus>ul>li:hover ul{
		display: block;
	}
	/*========== * Menu Head ==========*/

	/*========== Main Ads Slide ==========*/
	.main-ads-slide .ads-slides{
		position: relative;
		height: 410px;
		overflow-x: hidden;
		border-radius: 8px;
	}

	.main-ads-slide .ads-slides .item-slide{
		position: absolute;
		width: 1296px;
		height: 100%;
		top: 0;
	}
	.main-ads-slide .btn-ads-slide{
		position: absolute;
		top: 44%;
		background: #fff4;
		color: #3e3e3e;
		width: 40px;
		height: 40px;
		text-align: center;
		border-radius: 100%;
		border: none;
	}

	.main-ads-slide .btn-ads-slide.left{
		left: 15px;
	}

	.main-ads-slide .btn-ads-slide.right{
		right: 15px;
	}

	.main-ads-slide .btn-ads-slide:hover{
		background: #7d7d7d45;
	}

	.main-ads-slide .ads-item{
		border-radius: 8px;
		height: 160px;
	}
	/*========== * Main Ads Slide ==========*/

	/*========== * Main Flash Sale ==========*/
	.main-flash-sale .title{
		color: #FF6801;
		font-size: 1.3rem;
		font-weight: bold;
		letter-spacing: 1px;
	}

	.main-flash-sale .cates ul{
		height: 35px;
		padding: 0;
		margin: 0;
	}

	.main-flash-sale .cates ul li{  
		list-style-type: none;
		float: left;
		border: 1px solid #009981;
		border-radius: 25px;
		padding: 4px 15px;
		margin: 2px 0px 0px 12px;
		font-size: .8rem;
		color: #00483D;
		font-weight: bold;
	}

	.main-flash-sale .cates ul li.active{
		background: #009981;
		color: white;
	}

	.main-flash-sale .cates ul li:hover{
		background: #009981;
		color: white;
		cursor: pointer;
	}

	.main-flash-sale .downtime{
		float: right;
	}
	.main-flash-sale .downtime label.time{
		padding: 3.5px 12px;
		background: #292929;
		color: white;
		font-weight: bold;
		border-radius: 4px;
	}

	.slide{
		white-space: nowrap;
		overflow: hidden;
	}

	.slide:hover{
		cursor: pointer;
	}

	.slide:active{
		cursor: grabbing;
	}

	.main-flash-sale .slide .item{
		background: white;
		width: 220px;
		text-align: center;
		height: 320px;
		padding: 8px 0px;
		border-radius: 8px;
		margin: 4px 16px 4px 0px;
		display: inline-block;
		-webkit-user-select: none; /* Safari */
		-ms-user-select: none; /* IE 10 and IE 11 */
		user-select: none; /* Standard syntax */
		box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.5), 0 1px 1px 0 rgba(0, 0, 0, 0.19);
	}

	.slide .item:nth-last-child(1){
		margin-right: 2px;
	}

	.slide .item:nth-child(1){
		margin-left: 2px;
	}

	.main-flash-sale .slide .item .name{
		font-size: .9rem;
		font-weight: bold;
		text-align: center;
	}

	.main-flash-sale .slide .item .price .before
	, .main-product-list .item .price .before{
		font-size: .7rem;
		text-decoration: line-through;
		text-align: center;
		color: #3c3c3c;
		margin-bottom: -4px;
	}

	.main-flash-sale .slide .item .price .after
	, .main-product-list .item .price .after{
		font-size: 1.1rem;
		font-weight: bold;
		text-align: center;
		color: #FD475A;
	}
	/*========== * Main Flash Sale ==========*/

	/*========== Main Product List ==========*/
	.main-product-list .cate{
		background: #292929;
		width: 230px;
		text-align: center;
		padding: 9px 0px;
		color: white;
		border-radius: 10px;
		font-weight: bold;
	}

	.main-product-list .item{
		background: white;
		text-align: center;
		width: 100%;
		height: 320px;
		padding: 8px 0px;
		border-radius: 8px;
		margin: 4px 16px 4px 0px;
		display: inline-block;
		-webkit-user-select: none; /* Safari */
		-ms-user-select: none; /* IE 10 and IE 11 */
		user-select: none; /* Standard syntax */
		box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.5), 0 1px 1px 0 rgba(0, 0, 0, 0.19);
	}

	.customers .slide .item{
		background: white;
		width: 49.5%;
		text-align: center;
		height: 320px;
		padding: 8px 0px;
		border-radius: 8px;
		margin: 4px 16px 4px 0px;
		display: inline-block;
		-webkit-user-select: none; /* Safari */
		-ms-user-select: none; /* IE 10 and IE 11 */
		user-select: none; /* Standard syntax */
		box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.5), 0 1px 1px 0 rgba(0, 0, 0, 0.19);
	}
	/*========== * Main Product List ==========*/

</style>
<body>
	<header>
		<!-- Navigation Head -->
		<div class="navi-head">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div>
							<ul>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
								<li><a href="#">Item 4</a></li>
								<li><a href="#">Item 5</a></li>
								<li><a href="#">Item 6</a></li>
								<li><a href="#">Item 7</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- * Navigation Head -->

		<!-- Header -->
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-xl-2 mt-3">
						<div class="logo"><img src="assets/img/logo.png" height="45px"></div>
					</div>
					<div class="col-xl-8 mt-3">
						<div class="searchbox">
							<input type="text" name="keysearch" id="keysearch" /><button class="btn-search"><i class="fad fa-search"></i></button>
						</div>
					</div>
					<div class="shop-tools col-xl-2 mt-3">
						<div class="shop-tools">
							<button class="btn-check-order float-start">
								<div class="float-start icon"><i class="fal fa-shipping-fast" style="font-size: 1.2rem;"></i></div>
								<div class="float-start title">Kiểm tra đơn hàng</div>
							</button>

							<button class="btn-cart float-start ms-2">
								<div class="icon"><i class="far fa-shopping-cart"></i></div>
								<div class="badge">1</div>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- * Header -->

		<!-- Header Menu -->
		<div class="menu-head">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 mt-3">
						<div class="menus">
							<ul>
								<li>
									<i class="fal fa-home"></i>
									<div class="title">Home</div>
									<div class="menu-child"></div>
									<ul>
										<li>Item 1</li>
										<li>Item 1</li>
										<li>Item 1</li>
										<li>Item 1</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- * Header Menu -->
	</header>

	<!-- Main ads -->
	<section>
		<div class="main-ads-slide">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 mt-3">
						<div style="position: relative;">
							<div class="ads-slides"></div>
							<button class="btn-ads-slide left" onclick="animationSlide(-1)"><i class="fas fa-caret-left"></i></button>
							<button class="btn-ads-slide right" onclick="animationSlide(1)"><i class="fas fa-caret-right"></i></button>
						</div>
					</div>

					<div class="col-xl-3 mt-3">
						<div class="ads-item"><img src="assets/img/ads-lst-1.png" width="100%"></div>
					</div>
					<div class="col-xl-3 mt-3">
						<div class="ads-item"><img src="assets/img/ads-lst-2.jpg" width="100%"></div>
					</div>
					<div class="col-xl-3 mt-3">
						<div class="ads-item"><img src="assets/img/ads-lst-1.png" width="100%"></div>
					</div>
					<div class="col-xl-3 mt-3">
						<div class="ads-item"><img src="assets/img/ads-lst-2.jpg" width="100%"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- * Main ads -->

	<!-- Flash sale -->
	<section>
		<div class="main-flash-sale">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 mt-4">
						<div class="title">
							<label>F</label><i class="fas fa-bolt"></i><label>ASH SALE ONLINE</label>
						</div>
					</div>
					<div class="col-xl-6 mt-4">
						<div class="cates">
							<ul>
								<li class="active">Điện thoại/Tablet</li>
								<li>Laptop/Màn hình/Tivi</li>
								<li>Đồng hồ/Phụ kiện</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 mt-4">
						<div class="downtime">
							<label class="time">1</label>
							<label class="time">2</label>
							<label>:</label>
							<label class="time">3</label>
							<label class="time">4</label>
							<label>:</label>
							<label class="time">5</label>
							<label class="time">6</label>
						</div>
					</div>
					<div class="col-xl-12 mt-1">
						<div class="slide"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- * Flash sale -->

	<!-- Main Product -->
	<section>
		<div class="main-product-list">
			<div class="container">
				<div class="row">
					<!-- Category -->
					<div class="col-xl-12 mt-4">
						<div class="cate">
							Điện thoại nổi bật
						</div>
					</div>
					<!-- * Category -->
					<?php for($i = 0; $i < 12; $i++): ?>
					<!-- Item -->
					<div class="col-xl-2 mt-1">
						<div class="item">
							<img src="assets/img/iphone14promax.png" draggable="false" width="180px" height="225px">
							<div>Iphone 14 Pro Max</div>
							<div class="price">
								<div class="before">33,900,000 đ</div>
								<div class="after">38,900,000 đ</div>
							</div>
						</div>
					</div>
					<!-- * Item -->
					<?php endfor; ?>

					<!-- Category -->
					<div class="col-xl-12 mt-4">
						<div class="cate">
							Khách hàng
						</div>
					</div>
					<!-- * Category -->
					<div class="customers col-xl-12 mt-1">
						<div class="slide">
							<div class="item"></div>
							<div class="item"></div>
							<div class="item"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- * Main Product -->

	<footer class="mt-5">
		
	</footer>
</body>
<script>
	var menu = [
		{
			icon: "fal fa-mobile-android",
			title: "Điện thoại"
		},{
			icon: "fal fa-watch",
			title: "Đồng hồ"
		},{
			icon: "fal fa-laptop",
			title: "Laptop"
		},{
			icon: "fal fa-desktop",
			title: "Màn hình"
		},{
			icon: "fal fa-tv-music",
			title: "Smart TV"
		},{
			icon: "fal fa-tablet-alt",
			title: "Tablet"
		},{
			icon: "fal fa-headphones",
			title: "Âm thanh"
		},{
			icon: "fal fa-house-signal",
			title: "Smart Home"
		},{
			icon: "fal fa-usb-drive",
			title: "Phụ kiện"
		},{
			icon: "fal fa-tools",
			title: "Sửa chữa"
		},{
			icon: "fal fa-sim-card",
			title: "Sim thẻ"
		},{
			icon: "fal fa-newspaper",
			title: "Tin tức"
		},{
			icon: "fal fa-bolt",
			title: "Ưu đãi"
		},
	]
	var slide = [
		{
			title: "Titleaaaaaaaaaaaaaaaaaaa",
			src: "assets/img/slide-0.jpg"
		},
		{
			title: "Titleaaaaaaaaaaaaaaaaaaa",
			src: "assets/img/slide-1.jpg"
		},
		{
			title: "Titleaaaaaaaaaaaaaaaaaaa",
			src: "assets/img/slide-2.jpg"
		}
	]
	var flashSale = [
		{
			name: "Iphone 14 Pro Max",
			thumb: "assets/img/iphone14promax.png",
			price: {
				after: 38900000,
				before: 33900000,
				unit: "đ"
			}
		},
		{
			name: "ROG Phone 6 Pro",
			thumb: "assets/img/rog6pro.png",
			price: {
				after: 22900000,
				before: 17900000,
				unit: "đ"
			}
		},
		{
			name: "Rubia 6s Pro",
			thumb: "assets/img/rubia6spro.png",
			price: {
				after: 38900000,
				before: 33900000,
				unit: "đ"
			}
		},
		{
			name: "Samsung S22 Ultra",
			thumb: "assets/img/s22ultra.png",
			price: {
				after: 32900000,
				before: 27900000,
				unit: "đ"
			}
		},
		{
			name: "Iphone 14 Pro Max",
			thumb: "assets/img/iphone14promax.png",
			price: {
				after: 38900000,
				before: 33900000,
				unit: "đ"
			}
		},
		{
			name: "ROG Phone 6 Pro",
			thumb: "assets/img/rog6pro.png",
			price: {
				after: 22900000,
				before: 17900000,
				unit: "đ"
			}
		},
		{
			name: "Rubia 6s Pro",
			thumb: "assets/img/rubia6spro.png",
			price: {
				after: 38900000,
				before: 33900000,
				unit: "đ"
			}
		},
		{
			name: "Samsung S22 Ultra",
			thumb: "assets/img/s22ultra.png",
			price: {
				after: 32900000,
				before: 27900000,
				unit: "đ"
			}
		},
	]


	loadMenu();
	loadSlide();
	loadFlashSale();
	window.setInterval('animationSlide(1)', 9000);

	function loadMenu(){
		for(var i = 0; i < menu.length; i++){
			$(".menu-head .menus>ul").append(itemMenu(menu[i]))
		}
	}

	function itemMenu(data){
		return `<li>
					<i class="${data.icon}"></i>
					<div class="title">${data.title}</div>
				</li>`
	}

	function loadSlide(){
		for(var i = 0; i < slide.length; i++){
			$(".ads-slides").append(itemSlide(slide[i], i))
		}
	}

	function itemSlide(data, position){
		var style = `style="left: ${position * 1296}px"`
		return `<div class="item-slide" ${style}><img src="${data.src}" width="100%" height="100%"></div>`
	}

	function animationSlide(position){
		var leftPos = $('.ads-slides').scrollLeft();
		var width = $(".ads-slides").width();
		if(leftPos >= width * (slide.length - 1)){
			$(".ads-slides").animate({scrollLeft: 0}, 800);
			return;
		}
		$(".ads-slides").animate({scrollLeft: leftPos + width * position}, 800);
	}

	function loadFlashSale(){
		for(var i = 0; i < flashSale.length; i++){
			$(".main-flash-sale .slide").append(itemFlashSale(flashSale[i]))
		}
	}

	function itemFlashSale(data){
		return `
			<div class="item">
				<img src="${data.thumb}" width="180px" height="225px" draggable="false">
				<div class="name">${data.name}</div>
				<div class="price">
					<div class="before">${data.price.before.toLocaleString()} ${data.price.unit}</div>
					<div class="after">${data.price.after.toLocaleString()} ${data.price.unit}</div>
				</div>
			</div>`
	}

	const slider = document.querySelector('.slide');
	let mouseDown = false;
	let startX, scrollLeft;

	let startDragging = function (e) {
	  mouseDown = true;
	  startX = e.pageX - slider.offsetLeft;
	  scrollLeft = slider.scrollLeft;
	};
	let stopDragging = function (event) {
	  mouseDown = false;
	};

	slider.addEventListener('mousemove', (e) => {
	  e.preventDefault();
	  if(!mouseDown) { return; }
	  const x = e.pageX - slider.offsetLeft;
	  const scroll = x - startX;
	  slider.scrollLeft = scrollLeft - scroll;
	});

	// Add the event listeners
	slider.addEventListener('mousedown', startDragging, false);
	slider.addEventListener('mouseup', stopDragging, false);
	slider.addEventListener('mouseleave', stopDragging, false);
</script>
</html>