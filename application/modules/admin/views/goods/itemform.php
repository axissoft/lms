<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">상품 입력</h1>
		<div class="container_wr">
			<form name="fitemform" method="post" enctype="MULTIPART/FORM-DATA" autocomplete="off">
				<input type="hidden" name="codedup" value="1">
				<input type="hidden" name="w" value="">
				<input type="hidden" name="sca" value="">
				<input type="hidden" name="sst" value="">
				<input type="hidden" name="sod" value="">
				<input type="hidden" name="sfl" value="">
				<input type="hidden" name="stx" value="">
				<input type="hidden" name="page" value="">
				<section id="anc_sitfrm_cate">
					<h2 class="h2_frm">상품분류</h2>
					<div class="local_desc02 local_desc">
						<p>기본분류는 반드시 선택하셔야 합니다. 하나의 상품에 최대 3개의 다른 분류를 지정할 수 있습니다.</p>
					</div>
					<div class="tbl_frm01 tbl_wrap">
						<table>
							<caption>상품분류 입력</caption>
							<colgroup>
								<col class="grid_4">
								<col>
							</colgroup>
							<tbody>
								<tr>
									<th scope="row"><label for="ca_id">기본분류</label></th>
									<td>
										<span class="frm_info">기본분류를 선택하면, 판매/재고/HTML사용/판매자 E-mail 등을, 선택한 분류의 기본값으로 설정합니다.</span>                
										<select name="ca_id" id="ca_id">
											<option value="">선택하세요</option>
											<option value="20" selected="">TOP/PANTS</option>
											<option value="2010">&nbsp;&nbsp;&nbsp;TOP</option>
											<option value="201010">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;셔츠</option>
											<option value="20101010">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;체크/슬림</option>
											<option value="2010101010">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;체크</option>
											<option value="2010101020">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;슬림</option>
											<option value="20101020">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;드레스셔츠</option>
											<option value="201020">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;티</option>
											<option value="2020">&nbsp;&nbsp;&nbsp;PANTS</option>
											<option value="30">테스트</option>
										</select>										
									</td>
								</tr>
								<tr>
									<th scope="row"><label for="ca_id2">2차 분류</label></th>
									<td>
										<span class="frm_info">2차 분류는 기본 분류의 하위 분류 개념이 아니므로 기본 분류 선택시 해당 상품이 포함될 최하위 분류만 선택하시면 됩니다.</span>                <select name="ca_id2" id="ca_id2">
											<option value="">선택하세요</option>
											<option value="20">TOP/PANTS</option>
											<option value="2010">&nbsp;&nbsp;&nbsp;TOP</option>
											<option value="201010">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;셔츠</option>
											<option value="20101010">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;체크/슬림</option>
											<option value="2010101010">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;체크</option>
											<option value="2010101020">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;슬림</option>
											<option value="20101020">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;드레스셔츠</option>
											<option value="201020">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;티</option>
											<option value="2020">&nbsp;&nbsp;&nbsp;PANTS</option>
											<option value="30">테스트</option>
										</select>
									</td>
								</tr>
								<tr>
									<th scope="row"><label for="ca_id3">3차 분류</label></th>
									<td>
										<span class="frm_info">3차 분류는 기본 분류의 하위 분류 개념이 아니므로 기본 분류 선택시 해당 상품이 포함될 최하위 분류만 선택하시면 됩니다.</span>                <select name="ca_id3" id="ca_id3">
											<option value="">선택하세요</option>
											<option value="20">TOP/PANTS</option>
											<option value="2010">&nbsp;&nbsp;&nbsp;TOP</option>
											<option value="201010">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;셔츠</option>
											<option value="20101010">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;체크/슬림</option>
											<option value="2010101010">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;체크</option>
											<option value="2010101020">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;슬림</option>
											<option value="20101020">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;드레스셔츠</option>
											<option value="201020">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;티</option>
											<option value="2020">&nbsp;&nbsp;&nbsp;PANTS</option>
											<option value="30">테스트</option>
										</select>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</section>
				<section id="anc_sitfrm_ini">
					<h2 class="h2_frm">기본정보</h2>
					<div class="tbl_frm01 tbl_wrap">
						<table>
							<caption>기본정보 입력</caption>
							<colgroup>
								<col class="grid_4">
								<col>
								<col class="grid_3">
							</colgroup>
							<tbody>
								<tr>
									<th scope="row">상품코드</th>
									<td colspan="2">
										<!-- 최근에 입력한 코드(자동 생성시)가 목록의 상단에 출력되게 하려면 아래의 코드로 대체하십시오. -->
										<!-- <input type=text class=required name=it_id value="8466893436" size=12 maxlength=10 required> <a href='javascript:;' onclick="codedupcheck(document.all.it_id.value)"><img src='./img/btn_code.gif' border=0 align=absmiddle></a> -->
										<span class="frm_info">상품의 코드는 10자리 숫자로 자동생성합니다. <b>직접 상품코드를 입력할 수도 있습니다.</b><br>상품코드는 영문자, 숫자, - 만 입력 가능합니다.</span>
										<input type="text" name="it_id" value="1533106564" id="it_id" required="" class="frm_input required" size="20" maxlength="20">
										<!-- <button type="button" class="btn_frmline" onclick="codedupcheck(document.all.it_id.value)">중복검사</a> -->
									</td>
								</tr>
								<tr>
									<th scope="row"><label for="it_name">상품명</label></th>
									<td colspan="2">
										<span class="frm_info">HTML 입력이 불가합니다.</span>
										<input type="text" name="it_name" value="" id="it_name" required="" class="frm_input required" size="95">
									</td>
								</tr>
								<tr>
									<th scope="row"><label for="it_basic">기본설명</label></th>
									<td colspan="2">
										<span class="frm_info">상품명 하단에 상품에 대한 추가적인 설명이 필요한 경우에 입력합니다. HTML 입력도 가능합니다.</span>
										<input type="text" name="it_basic" value="" id="it_basic" class="frm_input" size="95">
									</td>
								</tr>
								<tr>
									<th scope="row"><label for="it_order">출력순서</label></th>
									<td colspan="2">
										<span class="frm_info">숫자가 작을 수록 상위에 출력됩니다. <br><b>입력하지 않으면 자동으로 출력됩니다.</b></span>
										<input type="text" name="it_order" value="" id="it_order" class="frm_input" size="12">
									</td>
								</tr>
								<tr>
									<th scope="row">상품유형</th>
									<td>
										<span class="frm_info">메인화면에 유형별로 출력할때 사용합니다.<br>이곳에 체크하게되면 상품리스트에서 유형별로 정렬할때 체크된 상품이 가장 먼저 출력됩니다.</span>
										<input type="checkbox" name="it_type1" value="1" id="it_type1">
										<label for="it_type1">히트 </label>
										<input type="checkbox" name="it_type2" value="1" id="it_type2">
										<label for="it_type2">추천 </label>
										<input type="checkbox" name="it_type3" value="1" id="it_type3">
										<label for="it_type3">신상품 </label>
										<input type="checkbox" name="it_type4" value="1" id="it_type4">
										<label for="it_type4">인기 </label>
										<input type="checkbox" name="it_type5" value="1" id="it_type5">
										<label for="it_type5">할인 </label>
									</td>
									<td class="td_grpset">&nbsp;</td>
								</tr>
								<tr>
									<th scope="row"><label for="it_maker">선생님</label></th>
									<td>입력하지 않으면 상품상세페이지에 출력하지 않습니다.
										<select name="it_notax" id="it_notax">
											<option value="0">홍길동</option>
											<option value="1">홍길동</option>
										</select>
									</td>
									<td class="td_grpset">&nbsp;</td>
								</tr>
								<tr>
									<th scope="row">전체광좌 수</th>
									<td>
										<span class="frm_info">입력하지 않으면 상품상세페이지에 출력하지 않습니다.</span>
										<input type="text" name="it_origin" value="" id="it_origin" class="frm_input" size="40">
									</td>
									<td class="td_grpset">&nbsp;</td>
								</tr>
								<tr>
									<th scope="row">상품설명</th>
									<td colspan="2">
										<span class="sound_only">웹에디터 시작</span>
										<form method="post">
										  <textarea id="summernote9" name="editordata"></textarea>
										</form>
										<script>
											$('#summernote9').summernote({						        
								        tabsize: 2,
								        height: 300
								      });
										</script>										
										<span class="sound_only">웹 에디터 끝</span></td>
									</tr>
								</tbody>
							</table>
						</div>
					</section>
					<section id="anc_sitfrm_cost">
						<h2 class="h2_frm">강좌등록</h2>
						<div class="tbl_frm01 tbl_wrap">
							<table>
								<caption>가격 및 재고 입력</caption>
								<colgroup>
									<col class="grid_4">
									<col>
									<col class="grid_3">
								</colgroup>
								<tbody>
									<tr>
										<th scope="row"><label for="it_price">판매가격</label></th>
										<td colspan="2">
											<input type="text" name="it_price" value="" id="it_price" class="frm_input" size="8"> 원
										</td>
									</tr>
									<tr>
										<th scope="row">제 1강</th>
										<td>
											<input type="text" name="it_origin" value="" id="it_origin" class="frm_input" size="40">
										</td>
										<td class="td_grpset">
											<input type="checkbox" name="chk_ca_it_point_type" value="1" id="chk_ca_it_point_type">
											<label for="chk_ca_it_point_type">맛보기강의</label>
										</td>
									</tr>
									<tr>
										<th scope="row">제 2강</th>
										<td>
											<input type="text" name="it_origin" value="" id="it_origin" class="frm_input" size="40">
										</td>
										<td class="td_grpset">
											<input type="checkbox" name="chk_ca_it_point_type" value="1" id="chk_ca_it_point_type">
											<label for="chk_ca_it_point_type">맛보기강의</label>
										</td>
									</tr>
									<tr>
										<th scope="row">상품선택옵션</th>
										<td colspan="2">
											<div class="sit_option tbl_frm01">
												<span class="frm_info">옵션항목은 콤마(,) 로 구분하여 여러개를 입력할 수 있습니다. 옷을 예로 들어 [옵션1 : 사이즈 , 옵션1 항목 : XXL,XL,L,M,S] , [옵션2 : 색상 , 옵션2 항목 : 빨,파,노]<br><strong>옵션명과 옵션항목에 따옴표(', ")는 입력할 수 없습니다.</strong></span>
												<table>
													<caption>상품선택옵션 입력</caption>
													<colgroup>
														<col class="grid_4">
														<col>
													</colgroup>
													<tbody>
														<tr>
															<th scope="row">
																<label for="opt1_subject">옵션1</label>
																<input type="text" name="opt1_subject" value="" id="opt1_subject" class="frm_input" size="15">
															</th>
															<td>
																<label for="opt1"><b>옵션1 항목</b></label>
																<input type="text" name="opt1" value="" id="opt1" class="frm_input" size="50">
															</td>
														</tr>
														<tr>
															<th scope="row">
																<label for="opt2_subject">옵션2</label>
																<input type="text" name="opt2_subject" value="" id="opt2_subject" class="frm_input" size="15">
															</th>
															<td>
																<label for="opt2"><b>옵션2 항목</b></label>
																<input type="text" name="opt2" value="" id="opt2" class="frm_input" size="50">
															</td>
														</tr>
														<tr>
															<th scope="row">
																<label for="opt3_subject">옵션3</label>
																<input type="text" name="opt3_subject" value="" id="opt3_subject" class="frm_input" size="15">
															</th>
															<td>
																<label for="opt3"><b>옵션3 항목</b></label>
																<input type="text" name="opt3" value="" id="opt3" class="frm_input" size="50">
															</td>
														</tr>
													</tbody>
												</table>
												<div class="btn_confirm02 btn_confirm">
													<button type="button" id="option_table_create" class="btn_frmline">옵션목록생성</button>
												</div>
											</div>
											<div id="sit_option_frm"></div>
										</td>
									</tr>
									<tr>
										<th scope="row">상품추가옵션</th>
										<td colspan="2">
											<div id="sit_supply_frm" class="sit_option tbl_frm01">
												<span class="frm_info">옵션항목은 콤마(,) 로 구분하여 여러개를 입력할 수 있습니다. 스마트폰을 예로 들어 [추가1 : 추가구성상품 , 추가1 항목 : 액정보호필름,케이스,충전기]<br><strong>옵션명과 옵션항목에 따옴표(', ")는 입력할 수 없습니다.</strong></span>
												<table>
													<caption>상품추가옵션 입력</caption>
													<colgroup>
														<col class="grid_4">
														<col>
													</colgroup>
													<tbody>
														<tr>
															<th scope="row">
																<label for="spl_subject_1">추가1</label>
																<input type="text" name="spl_subject[]" id="spl_subject_1" value="" class="frm_input" size="15">
															</th>
															<td>
																<label for="spl_item_1"><b>추가1 항목</b></label>
																<input type="text" name="spl[]" id="spl_item_1" value="" class="frm_input" size="40">
															</td>
														</tr>
													</tbody>
												</table>
												<div id="sit_option_addfrm_btn"><button type="button" id="add_supply_row" class="btn_frmline">옵션추가</button></div>
												<div class="btn_confirm02 btn_confirm">
													<button type="button" id="supply_table_create">옵션목록생성</button>
												</div>
											</div>
											<div id="sit_option_addfrm"></div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</section>
					<section id="anc_sitfrm_cost">
						<h2 class="h2_frm">교제등록</h2>
						<div class="tbl_frm01 tbl_wrap">
							<table>
								<caption>가격 및 재고 입력</caption>
								<colgroup>
									<col class="grid_4">
									<col>
									<col class="grid_3">
								</colgroup>
								<tbody>
									<tr>
										<th scope="row"><label for="it_price">판매가격</label></th>
										<td>
											<input type="text" name="it_price" value="" id="it_price" class="frm_input" size="8"> 원
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="it_stock_qty">재고수량</label></th>
										<td>
											<span class="frm_info"><b>주문관리에서 상품별 상태 변경에 따라 자동으로 재고를 가감합니다.</b> 재고는 규격/색상별이 아닌, 상품별로만 관리됩니다.<br>재고수량을 0으로 설정하시면 품절상품으로 표시됩니다.</span>                <input type="text" name="it_stock_qty" value="" id="it_stock_qty" class="frm_input" size="8"> 개
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="it_buy_min_qty">최소구매수량</label></th>
										<td>
											<span class="frm_info">상품 구매시 최소 구매 수량을 설정합니다.</span>                <input type="text" name="it_buy_min_qty" value="" id="it_buy_min_qty" class="frm_input" size="8"> 개
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="it_buy_max_qty">최대구매수량</label></th>
										<td>
											<span class="frm_info">상품 구매시 최대 구매 수량을 설정합니다.</span>                <input type="text" name="it_buy_max_qty" value="" id="it_buy_max_qty" class="frm_input" size="8"> 개
										</td>
									</tr>
									<tr>
										<th scope="row">상품선택옵션</th>
										<td>
											<div class="sit_option tbl_frm01">
												<span class="frm_info">옵션항목은 콤마(,) 로 구분하여 여러개를 입력할 수 있습니다. 옷을 예로 들어 [옵션1 : 사이즈 , 옵션1 항목 : XXL,XL,L,M,S] , [옵션2 : 색상 , 옵션2 항목 : 빨,파,노]<br><strong>옵션명과 옵션항목에 따옴표(', ")는 입력할 수 없습니다.</strong></span>                    <table>
													<caption>상품선택옵션 입력</caption>
													<colgroup>
														<col class="grid_4">
														<col>
													</colgroup>
													<tbody>
														<tr>
															<th scope="row">
																<label for="opt1_subject">옵션1</label>
																<input type="text" name="opt1_subject" value="" id="opt1_subject" class="frm_input" size="15">
															</th>
															<td>
																<label for="opt1"><b>옵션1 항목</b></label>
																<input type="text" name="opt1" value="" id="opt1" class="frm_input" size="50">
															</td>
														</tr>
														<tr>
															<th scope="row">
																<label for="opt2_subject">옵션2</label>
																<input type="text" name="opt2_subject" value="" id="opt2_subject" class="frm_input" size="15">
															</th>
															<td>
																<label for="opt2"><b>옵션2 항목</b></label>
																<input type="text" name="opt2" value="" id="opt2" class="frm_input" size="50">
															</td>
														</tr>
														<tr>
															<th scope="row">
																<label for="opt3_subject">옵션3</label>
																<input type="text" name="opt3_subject" value="" id="opt3_subject" class="frm_input" size="15">
															</th>
															<td>
																<label for="opt3"><b>옵션3 항목</b></label>
																<input type="text" name="opt3" value="" id="opt3" class="frm_input" size="50">
															</td>
														</tr>
													</tbody>
												</table>
												<div class="btn_confirm02 btn_confirm">
													<button type="button" id="option_table_create" class="btn_frmline">옵션목록생성</button>
												</div>
											</div>
											<div id="sit_option_frm"></div>
										</td>
									</tr>
									<tr>
										<th scope="row">상품추가옵션</th>
										<td>
											<div id="sit_supply_frm" class="sit_option tbl_frm01">
												<span class="frm_info">옵션항목은 콤마(,) 로 구분하여 여러개를 입력할 수 있습니다. 스마트폰을 예로 들어 [추가1 : 추가구성상품 , 추가1 항목 : 액정보호필름,케이스,충전기]<br><strong>옵션명과 옵션항목에 따옴표(', ")는 입력할 수 없습니다.</strong></span>
												<table>
													<caption>상품추가옵션 입력</caption>
													<colgroup>
														<col class="grid_4">
														<col>
													</colgroup>
													<tbody>
														<tr>
															<th scope="row">
																<label for="spl_subject_1">추가1</label>
																<input type="text" name="spl_subject[]" id="spl_subject_1" value="" class="frm_input" size="15">
															</th>
															<td>
																<label for="spl_item_1"><b>추가1 항목</b></label>
																<input type="text" name="spl[]" id="spl_item_1" value="" class="frm_input" size="40">
															</td>
														</tr>
													</tbody>
												</table>
												<div id="sit_option_addfrm_btn"><button type="button" id="add_supply_row" class="btn_frmline">옵션추가</button></div>
												<div class="btn_confirm02 btn_confirm">
													<button type="button" id="supply_table_create">옵션목록생성</button>
												</div>
											</div>
											<div id="sit_option_addfrm"></div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</section>
					<section id="anc_sitfrm_img">
						<h2 class="h2_frm">이미지</h2>
						<div class="tbl_frm01 tbl_wrap">
							<table>
								<caption>이미지 업로드</caption>
								<colgroup>
									<col class="grid_4">
									<col>
								</colgroup>
								<tbody>
									<tr>
										<th scope="row"><label for="it_img1">이미지 1</label></th>
										<td>
											<input type="file" name="it_img1" id="it_img1">
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="it_img2">이미지 2</label></th>
										<td>
											<input type="file" name="it_img2" id="it_img2">
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="it_img3">이미지 3</label></th>
										<td>
											<input type="file" name="it_img3" id="it_img3">
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="it_img4">이미지 4</label></th>
										<td>
											<input type="file" name="it_img4" id="it_img4">
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="it_img5">이미지 5</label></th>
										<td>
											<input type="file" name="it_img5" id="it_img5">
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="it_img6">이미지 6</label></th>
										<td>
											<input type="file" name="it_img6" id="it_img6">
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="it_img7">이미지 7</label></th>
										<td>
											<input type="file" name="it_img7" id="it_img7">
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="it_img8">이미지 8</label></th>
										<td>
											<input type="file" name="it_img8" id="it_img8">
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="it_img9">이미지 9</label></th>
										<td>
											<input type="file" name="it_img9" id="it_img9">
										</td>
									</tr>
									<tr>
										<th scope="row"><label for="it_img10">이미지 10</label></th>
										<td>
											<input type="file" name="it_img10" id="it_img10">
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</section>
				</form>
			</div>
		</div>
	</div>