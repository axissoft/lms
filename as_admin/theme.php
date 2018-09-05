<?php
$sub_menu = "100";
include_once("header.php")
?>
<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">테마설정</h1>
		<div class="container_wr">
			<div class="local_wr">
				<span class="btn_ov01">
					<span class="ov_txt">설치된 테마</span>
					<span class="ov_num">1</span>
				</span>
			</div>
			<ul id="theme_list">
				<li>
					<div class="tmli_if">
						<div class="tmli_tit">
							<p>베이직</p>
						</div>
					</div>
					<span class="theme_sl theme_sl_use">사용중</span>
					<button type="button" class="theme_sl theme_deactive" data-theme="basic" data-name="베이직">사용안함</button>        <a href="#" class="theme_pr">미리보기</a>
					<button type="button" class="tmli_dt theme_preview" data-theme="basic">상세보기</button>
				</li>
			</ul>
		</div>
<?php
include_once("footer.php")
?>