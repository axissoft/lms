<?php
$sub_menu = "400";
include_once("header.php")
?>
<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">TOP/PANTS 하위분류추가</h1>
		<div class="container_wr">
			<form name="fcategoryform" method="post" enctype="multipart/form-data">
				<input type="hidden" name="codedup" value="1">
				<input type="hidden" name="w" value="">
				<input type="hidden" name="sst" value="">
				<input type="hidden" name="sod" value="">
				<input type="hidden" name="sfl" value="">
				<input type="hidden" name="stx" value="">
				<input type="hidden" name="page" value="0">
				<input type="hidden" name="ca_explan_html" value="1">
				<section id="anc_scatefrm_basic">
					<h2 class="h2_frm">필수입력</h2>
					<ul class="anchor">
						<li><a href="#anc_scatefrm_basic">필수입력</a></li>
						<li><a href="#anc_scatefrm_optional">선택입력</a></li>
						<li><a href="#anc_scatefrm_extra">여분필드</a></li></ul>
						<div class="tbl_frm01 tbl_wrap">
							<table>
								<caption>분류 추가 필수입력</caption>
								<colgroup>
									<col class="grid_4">
									<col>
								</colgroup>
								<tbody>
									<tr>
										<th scope="row"><label for="ca_id">분류코드</label></th>
										<td>
											<span class="frm_info">자동으로 보여지는 분류코드를 사용하시길 권해드리지만 직접 입력한 값으로도 사용할 수 있습니다.<br>분류코드는 나중에 수정이 되지 않으므로 신중하게 결정하여 사용하십시오.<br><br>분류코드는 2자리씩 10자리를 사용하여 5단계를 표현할 수 있습니다.<br>0~z까지 입력이 가능하며 한 분류당 최대 1296가지를 표현할 수 있습니다.<br>그러므로 총 3656158440062976가지의 분류를 사용할 수 있습니다.</span>
											<input type="text" name="ca_id" value="2030" id="ca_id" required="" class="required frm_input" size="4" maxlength="4">											
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="ca_name">분류명</label></th>
										<td><input type="text" name="ca_name" value="" id="ca_name" size="38" required="" class="required frm_input"></td>
									</tr>
									<tr>
										<th scope="row"><label for="ca_order">출력순서</label></th>
										<td>
											<span class="frm_info">숫자가 작을 수록 상위에 출력됩니다. 음수 입력도 가능하며 입력 가능 범위는 -2147483648 부터 2147483647 까지입니다.<br><b>입력하지 않으면 자동으로 출력됩니다.</b></span>
											<input type="text" name="ca_order" value="0" id="ca_order" class="frm_input" size="12">
										</td>
									</tr>
									<tr>
										<th scope="row">관리 회원아이디</th>
										<td>
											<input type="hidden" name="ca_mb_id" value="axissoft">axissoft
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="ca_skin_dir">PC용 스킨명</label></th>
										<td>
											<select id="ca_skin_dir" name="ca_skin_dir">
												<option value="">선택</option><option value="theme/basic">(테마) basic</option>
												<option value="ajax-basic">ajax-basic</option>
												<option value="basic">basic</option>
												<option value="headfix">headfix</option>
												<option value="sticker">sticker</option>
											</select>
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="ca_mobile_skin_dir">모바일용 스킨명</label></th>
										<td>
											<select id="ca_mobile_skin_dir" name="ca_mobile_skin_dir">
												<option value="">선택</option><option value="theme/basic">(테마) basic</option>
												<option value="basic">basic</option>
											</select>
										</td>
									</tr>
									<tr>
										<th scope="row">본인확인 체크</th>
										<td>
											<input type="radio" name="ca_cert_use" value="1" id="ca_cert_use_yes">
											<label for="ca_cert_use_yes">사용함</label>
											<input type="radio" name="ca_cert_use" value="0" id="ca_cert_use_no" checked="checked">
											<label for="ca_cert_use_no">사용안함</label>
										</td>
									</tr>
									<tr>
										<th scope="row">성인인증 체크</th>
										<td>
											<input type="radio" name="ca_adult_use" value="1" id="ca_adult_use_yes">
											<label for="ca_adult_use_yes">사용함</label>
											<input type="radio" name="ca_adult_use" value="0" id="ca_adult_use_no" checked="checked">
											<label for="ca_adult_use_no">사용안함</label>
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="ca_skin">출력스킨</label></th>
										<td>
											<span class="frm_info">기본으로 제공하는 스킨은 theme/basic/skin/shop/basic/list.*.skin.php 입니다.</span>                <select id="ca_skin" name="ca_skin" required="" class="required">
												<option value="">선택</option>
												<option value="list.10.skin.php" selected="selected">list.10.skin.php</option>
												<option value="list.20.skin.php">list.20.skin.php</option>
												<option value="list.30.skin.php">list.30.skin.php</option>
												<option value="list.40.skin.php">list.40.skin.php</option>
											</select>
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="ca_img_width">출력이미지 폭</label></th>
										<td>
											<span class="frm_info">쇼핑몰환경설정 &gt; 이미지(소) 넓이가 기본값으로 설정됩니다.<br></span>
											<input type="text" name="ca_img_width" value="230" id="ca_img_width" required="" class="required frm_input" size="5"> 픽셀
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="ca_img_height">출력이미지 높이</label></th>
										<td>
											<span class="frm_info">쇼핑몰환경설정 &gt; 이미지(소) 높이가 기본값으로 설정됩니다.<br></span>
											<input type="text" name="ca_img_height" value="230" id="ca_img_height" required="" class="required frm_input" size="5"> 픽셀
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="ca_list_mod">1줄당 이미지 수</label></th>
										<td>
											<span class="frm_info">한 줄에 설정한 값만큼의 상품을 출력하지만 스킨에 따라 한 줄에 하나의 상품만 출력할 수도 있습니다.</span>
											<input type="text" name="ca_list_mod" size="3" value="4" id="ca_list_mod" required="" class="required frm_input"> 개
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="ca_list_row">이미지 줄 수</label></th>
										<td>
											<span class="frm_info">한 페이지에 출력할 이미지 줄 수를 설정합니다.<br>한 페이지에서 표시하는 상품수는 (1줄당 이미지 수 x 줄 수) 입니다.</span>
											<input type="text" name="ca_list_row" value="5" id="ca_list_row" required="" class="required frm_input" size="3"> 줄
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="ca_mobile_skin">모바일 출력스킨</label></th>
										<td>
											<span class="frm_info">기본으로 제공하는 스킨은 theme/basic/mobile/skin/shop/basic/list.*.skin.php 입니다.</span>
											<select id="ca_mobile_skin" name="ca_mobile_skin" required="" class="required">
												<option value="">선택</option>
												<option value="list.10.skin.php" selected="selected">list.10.skin.php</option>
											</select>
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="ca_mobile_img_width">모바일 출력이미지 폭</label></th>
										<td>
											<span class="frm_info">쇼핑몰환경설정 &gt; 이미지(소) 넓이가 기본값으로 설정됩니다.<br></span>
											<input type="text" name="ca_mobile_img_width" value="230" id="ca_mobile_img_width" required="" class="required frm_input" size="5"> 픽셀
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="ca_mobile_img_height">모바일 출력이미지 높이</label></th>
										<td>
											<span class="frm_info">쇼핑몰환경설정 &gt; 이미지(소) 높이가 기본값으로 설정됩니다.<br></span>
											<input type="text" name="ca_mobile_img_height" value="230" id="ca_mobile_img_height" required="" class="required frm_input" size="5"> 픽셀
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="ca_mobile_list_mod">모바일 1줄당 이미지 수</label></th>
										<td>
											<span class="frm_info">한 줄에 설정한 값만큼의 상품을 출력하지만 스킨에 따라 한 줄에 하나의 상품만 출력할 수도 있습니다.</span>
											<input type="text" name="ca_mobile_list_mod" value="2" id="ca_mobile_list_mod" required="" class="required frm_input" size="3"> 개
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="ca_mobile_list_row">모바일 이미지 줄 수</label></th>
										<td>
											<span class="frm_info">한 페이지에 출력할 이미지 줄 수를 설정합니다.<br>한 페이지에서 표시하는 상품수는 (1줄당 이미지 수 x 줄 수) 입니다.</span>
											<input type="text" name="ca_mobile_list_row" value="2" id="ca_mobile_list_row" required="" class="required frm_input" size="3"> 줄
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="ca_stock_qty">재고수량</label></th>
										<td>
											<span class="frm_info">상품의 기본재고 수량을 설정합니다.<br>재고를 사용하지 않는다면 숫자를 크게 입력하여 주십시오. 예) 999999</span>
											<input type="text" name="ca_stock_qty" size="10" value="9999" id="ca_stock_qty" class="frm_input"> 개
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="ca_sell_email">판매자 E-mail</label></th>
										<td>
											<span class="frm_info">운영자와 판매자가 다른 경우에 사용합니다.<br>이 분류에 속한 상품을 등록할 경우에 기본값으로 입력됩니다.</span>
											<input type="text" name="ca_sell_email" size="40" value="" id="ca_sell_email" class="frm_input">
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="ca_use">판매가능</label></th>
										<td>
											<span class="frm_info">재고가 없거나 일시적으로 판매를 중단하시려면 체크 해제하십시오.<br>체크 해제하시면 상품 출력을 하지 않으며, 주문도 받지 않습니다.</span>
											<input type="checkbox" name="ca_use" checked="" value="1" id="ca_use">
											예
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="ca_nocoupon">쿠폰적용안함</label></th>
										<td>
											<span class="frm_info">설정에 체크하시면 쿠폰생성 때 분류 검색 결과에 노출되지 않습니다.</span>
											<input type="checkbox" name="ca_nocoupon" value="1" id="ca_nocoupon">
											예
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<button type="button" class="shop_category btn_02 btn">테마설정 가져오기</button>
					</section>
					<section id="anc_scatefrm_optional">
						<h2 class="h2_frm">선택 입력</h2>
						<ul class="anchor">
							<li><a href="#anc_scatefrm_basic">필수입력</a></li>
							<li><a href="#anc_scatefrm_optional">선택입력</a></li>
							<li><a href="#anc_scatefrm_extra">여분필드</a></li></ul>
							<div class="tbl_frm01 tbl_wrap">
								<table>
									<caption>분류 추가 선택입력</caption>
									<colgroup>
										<col class="grid_4">
										<col>
									</colgroup>
									<tbody>
										<tr>
											<th scope="row"><label for="ca_include_head">상단파일경로</label></th>
											<td>
												<span class="frm_info">입력하지 않으면 기본 상단 파일을 사용합니다.<br>상단 내용과 달리 PHP 코드를 사용할 수 있습니다.</span>
												<input type="text" name="ca_include_head" value="" id="ca_include_head" class="frm_input" size="60">
											</td>
										</tr>
										<tr>
											<th scope="row"><label for="ca_include_tail">하단 파일 경로</label></th>
											<td>
												<span class="frm_info">입력하지 않으면 기본 하단 파일을 사용합니다.<br>하단 내용과 달리 PHP 코드를 사용할 수 있습니다.</span>
												<input type="text" name="ca_include_tail" value="" id="ca_include_tail" class="frm_input" size="60">
											</td>
										</tr>										
										<tr>
											<th scope="row">상단내용</th>
											<td>
												<span class="frm_info">상품리스트 페이지 상단에 출력하는 HTML 내용입니다.</span>
												<span class="sound_only">웹에디터 시작</span>
												<form method="post">
												  <textarea id="summernote5" name="editordata"></textarea>
												</form>
												<script>
													$('#summernote5').summernote({						        
										        tabsize: 2,
										        height: 300
										      });
												</script>
												<span class="sound_only">웹 에디터 끝</span>
											</td>
										</tr>
										<tr>
											<th scope="row">하단내용</th>
											<td>
												<span class="frm_info">상품리스트 페이지 하단에 출력하는 HTML 내용입니다.</span>
												<span class="sound_only">웹에디터 시작</span>
												<form method="post">
												  <textarea id="summernote6" name="editordata"></textarea>
												</form>
												<script>
													$('#summernote6').summernote({						        
										        tabsize: 2,
										        height: 300
										      });
												</script>
												<span class="sound_only">웹 에디터 끝</span>
											</td>
										</tr>
										<tr>
											<th scope="row">모바일 상단내용</th>
											<td>
												<span class="frm_info">상품리스트 페이지 상단에 출력하는 HTML 내용입니다.</span>
												<span class="sound_only">웹에디터 시작</span>
												<form method="post">
												  <textarea id="summernote7" name="editordata"></textarea>
												</form>
												<script>
													$('#summernote7').summernote({						        
										        tabsize: 2,
										        height: 300
										      });
												</script>
												<span class="sound_only">웹 에디터 끝</span>
											</td>
										</tr>
										<tr>
											<th scope="row">모바일 하단내용</th>
											<td>
												<span class="frm_info">상품리스트 페이지 하단에 출력하는 HTML 내용입니다.</span>
												<span class="sound_only">웹에디터 시작</span>
												<form method="post">
												  <textarea id="summernote8" name="editordata"></textarea>
												</form>
												<script>
													$('#summernote8').summernote({						        
										        tabsize: 2,
										        height: 300
										      });
												</script>
												<span class="sound_only">웹 에디터 끝</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</section>
						<section id="anc_scatefrm_extra">
							<h2>여분필드 설정</h2>
							<ul class="anchor">
								<li><a href="#anc_scatefrm_basic">필수입력</a></li>
								<li><a href="#anc_scatefrm_optional">선택입력</a></li>
								<li><a href="#anc_scatefrm_extra">여분필드</a></li>
							</ul>
							<div class="tbl_frm01 tbl_wrap">
								<table>
									<colgroup>
										<col class="grid_3">
										<col>
									</colgroup>
									<tbody>
										<tr>
											<th scope="row">여분필드1</th>
											<td class="td_extra">
												<label for="ca_1_subj">여분필드 1 제목</label>
												<input type="text" name="ca_1_subj" id="ca_1_subj" value="" class="frm_input">
												<label for="ca_1">여분필드 1 값</label>
												<input type="text" name="ca_1" value="" id="ca_1" class="frm_input">
											</td>
										</tr>
										<tr>
											<th scope="row">여분필드2</th>
											<td class="td_extra">
												<label for="ca_2_subj">여분필드 2 제목</label>
												<input type="text" name="ca_2_subj" id="ca_2_subj" value="" class="frm_input">
												<label for="ca_2">여분필드 2 값</label>
												<input type="text" name="ca_2" value="" id="ca_2" class="frm_input">
											</td>
										</tr>
										<tr>
											<th scope="row">여분필드3</th>
											<td class="td_extra">
												<label for="ca_3_subj">여분필드 3 제목</label>
												<input type="text" name="ca_3_subj" id="ca_3_subj" value="" class="frm_input">
												<label for="ca_3">여분필드 3 값</label>
												<input type="text" name="ca_3" value="" id="ca_3" class="frm_input">
											</td>
										</tr>
										<tr>
											<th scope="row">여분필드4</th>
											<td class="td_extra">
												<label for="ca_4_subj">여분필드 4 제목</label>
												<input type="text" name="ca_4_subj" id="ca_4_subj" value="" class="frm_input">
												<label for="ca_4">여분필드 4 값</label>
												<input type="text" name="ca_4" value="" id="ca_4" class="frm_input">
											</td>
										</tr>
										<tr>
											<th scope="row">여분필드5</th>
											<td class="td_extra">
												<label for="ca_5_subj">여분필드 5 제목</label>
												<input type="text" name="ca_5_subj" id="ca_5_subj" value="" class="frm_input">
												<label for="ca_5">여분필드 5 값</label>
												<input type="text" name="ca_5" value="" id="ca_5" class="frm_input">
											</td>
										</tr>
										<tr>
											<th scope="row">여분필드6</th>
											<td class="td_extra">
												<label for="ca_6_subj">여분필드 6 제목</label>
												<input type="text" name="ca_6_subj" id="ca_6_subj" value="" class="frm_input">
												<label for="ca_6">여분필드 6 값</label>
												<input type="text" name="ca_6" value="" id="ca_6" class="frm_input">
											</td>
										</tr>
										<tr>
											<th scope="row">여분필드7</th>
											<td class="td_extra">
												<label for="ca_7_subj">여분필드 7 제목</label>
												<input type="text" name="ca_7_subj" id="ca_7_subj" value="" class="frm_input">
												<label for="ca_7">여분필드 7 값</label>
												<input type="text" name="ca_7" value="" id="ca_7" class="frm_input">
											</td>
										</tr>
										<tr>
											<th scope="row">여분필드8</th>
											<td class="td_extra">
												<label for="ca_8_subj">여분필드 8 제목</label>
												<input type="text" name="ca_8_subj" id="ca_8_subj" value="" class="frm_input">
												<label for="ca_8">여분필드 8 값</label>
												<input type="text" name="ca_8" value="" id="ca_8" class="frm_input">
											</td>
										</tr>
										<tr>
											<th scope="row">여분필드9</th>
											<td class="td_extra">
												<label for="ca_9_subj">여분필드 9 제목</label>
												<input type="text" name="ca_9_subj" id="ca_9_subj" value="" class="frm_input">
												<label for="ca_9">여분필드 9 값</label>
												<input type="text" name="ca_9" value="" id="ca_9" class="frm_input">
											</td>
										</tr>
										<tr>
											<th scope="row">여분필드10</th>
											<td class="td_extra">
												<label for="ca_10_subj">여분필드 10 제목</label>
												<input type="text" name="ca_10_subj" id="ca_10_subj" value="" class="frm_input">
												<label for="ca_10">여분필드 10 값</label>
												<input type="text" name="ca_10" value="" id="ca_10" class="frm_input">
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</section>
						<div class="btn_fixed_top">
							<input type="submit" value="확인" class="btn_submit btn" accesskey="s">
							<a href="./categorylist.php?'.$qstr.'" class="btn_02 btn">목록</a>
						</div>
					</form>					
				</div>
			</div>
		</div>
<?php
include_once("footer.php")
?>