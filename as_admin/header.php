<!doctype html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta http-equiv="imagetoolbar" content="no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<title> 액시스소프트 관리자</title>
	<link rel="stylesheet" href="css/admin.css">
	<link rel="stylesheet" href="css/sms5.css">
	<link rel="stylesheet" href="css/summernote-lite.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/admin.js"></script>
	<script src="js/jquery.menu.js"></script>
	<script src="js/summernote-lite.js"></script>
	<script src="js/Chart.js"></script>
</head>
<body>
	<div id="hd_login_msg">홍길동님 로그인 중 <a href="#">로그아웃</a></div>
	<div id="to_content"><a href="#container">본문 바로가기</a></div>
	<header id="hd">
		<h1>액시스소프트</h1>
		<div id="hd_top">
			<button type="button" id="btn_gnb" class="btn_gnb_close">메뉴</button>
			<div id="logo"><a href="index.php"><img src="img/logo.png" alt="관리자"></a></div>
			<div id="tnb">
				<ul>
					<li class="tnb_li"><a href="#" class="tnb_shop" target="_blank" title="쇼핑몰 바로가기">쇼핑몰 바로가기</a></li>
					<li class="tnb_li"><a href="#" class="tnb_community" target="_blank" title="커뮤니티 바로가기">커뮤니티 바로가기</a></li>
					<li class="tnb_li"><button type="button" class="tnb_mb_btn">관리자<span class="">메뉴열기</span></button>
						<ul class="tnb_mb_area">
							<li><a href="#">관리자정보</a></li>
							<li id="tnb_logout"><a href="#">로그아웃</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<nav id="gnb" class="gnb_large">
			<h2>관리자 주메뉴</h2>
			<ul class="gnb_ul">
				<li class="gnb_li <? if ($sub_menu=='100') echo "on\""; ?>">
					<button type="button" class="btn_op menu-100 menu-order-1" title="환경설정">환경설정</button>
					<div class="gnb_oparea_wr">
						<div class="gnb_oparea">
							<h3>환경설정</h3>
							<ul>
								<li data-menㅊu="100100"><a href="config_form.php" class="gnb_2da  ">기본환경설정</a></li>
								<li data-menu="100280"><a href="theme.php" class="gnb_2da gnb_grp_style gnb_grp_div">테마설정</a></li>
								<li data-menu="100290"><a href="menu_list.php" class="gnb_2da gnb_grp_style ">메뉴설정</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="gnb_li <? if ($sub_menu=='200') echo "on\""; ?>">
					<button type="button" class="btn_op menu-200 menu-order-2" title="회원관리">회원관리</button>
					<div class="gnb_oparea_wr">
						<div class="gnb_oparea">
							<h3>회원관리</h3>
							<ul>
								<li data-menu="200100"><a href="member_list.php" class="gnb_2da  ">회원관리</a></li>
								<li data-menu="200300"><a href="mail_list.php" class="gnb_2da  ">회원메일발송</a></li>
								<li data-menu="200200"><a href="point_list.php" class="gnb_2da  gnb_grp_div">포인트관리</a>
							</ul>
						</div>
					</div>
				</li>
				<li class="gnb_li <? if ($sub_menu=='300') echo "on\""; ?>">
					<button type="button" class="btn_op menu-300 menu-order-3" title="게시판관리">게시판관리</button>
					<div class="gnb_oparea_wr">
						<div class="gnb_oparea">
							<h3>게시판관리</h3>
							<ul>
								<li data-menu="300100"><a href="board_list.php" class="gnb_2da  ">게시판관리</a></li>
								<li data-menu="300600"><a href="contentlist.php" class="gnb_2da gnb_grp_style gnb_grp_div">내용관리</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li class="gnb_li <? if ($sub_menu=='400') echo "on\""; ?>">
					<button type="button" class="btn_op menu-400 menu-order-4" title="쇼핑몰관리">쇼핑몰관리</button>
					<div class="gnb_oparea_wr">
						<div class="gnb_oparea">
							<h3>쇼핑몰관리</h3>
							<ul>
								<li data-menu="400400"><a href="orderlist.php" class="gnb_2da gnb_grp_style gnb_grp_div">주문내역</a></li>
								<li data-menu="400440"><a href="personalpaylist.php" class="gnb_2da gnb_grp_style ">개인결제관리</a></li>
								<li data-menu="400200"><a href="categorylist.php" class="gnb_2da  gnb_grp_div">분류관리</a></li>
								<li data-menu="400300"><a href="itemlist.php" class="gnb_2da  ">상품관리</a></li>
								<li data-menu="400660"><a href="teacher_list.php" class="gnb_2da  ">강사관리</a></li>
								<li data-menu="400650"><a href="itemuselist.php" class="gnb_2da  ">사용후기</a></li>
								<li data-menu="400620"><a href="itemstocklist.php" class="gnb_2da  ">교제재고관리</a></li>
								<li data-menu="400800"><a href="couponlist.php" class="gnb_2da  ">쿠폰관리</a></li>
								<li data-menu="400410"><a href="inorderlist.php" class="gnb_2da gnb_grp_style ">미완료주문</a></li>
							</ul>
						</div>
					</div>
					</li>
					<li class="gnb_li <? if ($sub_menu=='500') echo "on\""; ?>">
						<button type="button" class="btn_op menu-500 menu-order-5" title="쇼핑몰현황/기타">상품현황/기타</button>
						<div class="gnb_oparea_wr">
							<div class="gnb_oparea">
								<h3>상품현황/기타</h3>
								<ul>
									<li data-menu="500110"><a href="sale1.php" class="gnb_2da  ">매출현황</a></li>
									<li data-menu="500120"><a href="orderprint.php" class="gnb_2da gnb_grp_style gnb_grp_div">주문내역출력</a></li>
									<li data-menu="500500"><a href="bannerlist.php" class="gnb_2da gnb_grp_style gnb_grp_div">배너관리</a></li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</nav>
		</header>
		<script>
			$(document).ready(function(){

				var menu_cookie_key = 'g5_admin_btn_gnb';

				$(".tnb_mb_btn").click(function(){
					$(".tnb_mb_area").toggle();
				});

				$("#btn_gnb").click(function(){

					var $this = $(this);

					try {
						if( ! $this.hasClass("btn_gnb_open") ){
							set_cookie(menu_cookie_key, 1, 60*60*24*365);
						} else {
							delete_cookie(menu_cookie_key);
						}
					}
					catch(err) {
					}

					$("#container").toggleClass("container-small");
					$("#gnb").toggleClass("gnb_small");
					$this.toggleClass("btn_gnb_open");

				});

				$(".gnb_ul li .btn_op" ).click(function() {
					$(this).parent().addClass("on").siblings().removeClass("on");
				});

			});
		</script>