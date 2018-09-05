<?php
$sub_menu="400";
include_once("header.php")
?>
<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">분류관리</h1>
		<div class="container_wr">
			<div class="local_ov01 local_ov">
				<a href="#" class="ov_listall">전체목록</a>
				<span class="btn_ov01">
					<span class="ov_txt">생성된  분류 수</span>
					<span class="ov_num">10개</span>
				</span>
			</div>
			<form name="flist" class="local_sch01 local_sch">
				<input type="hidden" name="page" value="1">
				<input type="hidden" name="save_stx" value="">
				<label for="sfl" class="sound_only">검색대상</label>
				<select name="sfl" id="sfl">
					<option value="ca_name">분류명</option>
					<option value="ca_id">분류코드</option>
					<option value="ca_mb_id">회원아이디</option>
				</select>
				<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
				<input type="text" name="stx" value="" id="stx" required="" class="required frm_input">
				<input type="submit" value="검색" class="btn_submit">
			</form>
			<form name="fcategorylist" method="post" autocomplete="off">
				<input type="hidden" name="sst" value="ca_id">
				<input type="hidden" name="sod" value="asc">
				<input type="hidden" name="sfl" value="">
				<input type="hidden" name="stx" value="">
				<input type="hidden" name="page" value="1">
				<div id="sct" class="tbl_head01 tbl_wrap">
					<table>
						<caption>분류관리 목록</caption>
						<thead>
							<tr>
								<th scope="col"><a href="#">분류코드</a></th>
								<th id="sct_cate" scope="col"><a href="#">분류명</a></th>
								<th id="sct_amount" scope="col"><a href="#">판매가능</a></th>
								<th scope="col">관리</th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg0">
								<td class="td_code">
									<input type="hidden" name="ca_id[0]" value="20">
									<a href="#">10</a>
								</td>
								<td class="sct_name0" headers="sct_cate">
									<div>
										<label for="ca_name_0"><span class="sound_only">1단 분류</span></label>
									</div>
									<input type="text" name="ca_name[0]" value="강좌" id="ca_name_0" required="" class="tbl_input full_input required">
								</td>
								<td class="td_amount" headers="sct_amount">
									<input type="checkbox" name="ca_use[0]" value="1" id="ca_use0" checked="">
									<label for="ca_use0">판매</label>
								</td>
								<td class="td_mng td_mng_s">
									<a href="./categoryform.php?ca_id=20&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03">추가</a>
									<a href="./categoryform.php?w=u&amp;ca_id=20&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_02">
										<span class="sound_only">TOP/PANTS </span>수정
									</a>
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_code">
									<input type="hidden" name="ca_id[1]" value="2010">
									<a href="#">1010</a>
								</td>
								<td class="sct_name1" headers="sct_cate">
									<div>
										<label for="ca_name_1" class="name_lbl">
											<span class="sound_only">TOP/PANTS의하위2단 분류</span>
										</label>
									</div>
									<input type="text" name="ca_name[1]" value="국어" id="ca_name_1" required="" class="tbl_input full_input required">
								</td>
								<td class="td_amount" headers="sct_amount">
									<input type="checkbox" name="ca_use[1]" value="1" id="ca_use1" checked="">
									<label for="ca_use1">판매</label>
								</td>
								<td class="td_mng td_mng_s">
									<a href="./categoryform.php?ca_id=2010&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03">추가</a>
									<a href="./categoryform.php?w=u&amp;ca_id=2010&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_02">
										<span class="sound_only">TOP</span>수정
									</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_code">
									<input type="hidden" name="ca_id[2]" value="201010">
									<a href="#">101010</a>
								</td>
								<td class="sct_name2" headers="sct_cate">
									<div>
										<label for="ca_name_2" class="name_lbl">
											<span class="sound_only">TOP의하위3단 분류</span>
										</label>
									</div>
									<input type="text" name="ca_name[2]" value="영어" id="ca_name_2" required="" class="tbl_input full_input required">
								</td>
								<td class="td_amount" headers="sct_amount">
									<input type="checkbox" name="ca_use[2]" value="1" id="ca_use2" checked="">
									<label for="ca_use2">판매</label>
								</td>
								<td class="td_mng td_mng_s">
									<a href="./categoryform.php?ca_id=201010&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03">추가</a>
									<a href="./categoryform.php?w=u&amp;ca_id=201010&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_02">
										<span class="sound_only">셔츠</span>수정
									</a>
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_code">
									<input type="hidden" name="ca_id[3]" value="20101010">
									<a href="#">10101010</a>
								</td>
								<td class="sct_name3" headers="sct_cate">
									<div>
										<label for="ca_name_3" class="name_lbl">
											<span class="sound_only">셔츠의하위4단 분류</span>
										</label>
									</div>
									<input type="text" name="ca_name[3]" value="수학" id="ca_name_3" required="" class="tbl_input full_input required">
								</td>
								<td class="td_amount" headers="sct_amount">
									<input type="checkbox" name="ca_use[3]" value="1" id="ca_use3" checked="">
									<label for="ca_use3">판매</label>
								</td>
								<td class="td_mng td_mng_s">
									<a href="./categoryform.php?ca_id=20101010&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03">추가</a>
									<a href="./categoryform.php?w=u&amp;ca_id=20101010&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_02">
										<span class="sound_only">체크/슬림 </span>수정
									</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_code">
									<input type="hidden" name="ca_id[4]" value="2010101010">
									<a href="#">1010101010</a>
								</td>
								<td class="sct_name4" headers="sct_cate">
									<div>
										<label for="ca_name_4" class="name_lbl">
											<span class="sound_only">체크/슬림의하위5단 분류</span>
										</label>
									</div>
									<input type="text" name="ca_name[4]" value="미슐" id="ca_name_4" required="" class="tbl_input full_input required">
								</td>
								<td class="td_amount" headers="sct_amount">
									<input type="checkbox" name="ca_use[4]" value="1" id="ca_use4" checked="">
									<label for="ca_use4">판매</label>
								</td>
								<td class="td_mng td_mng_s">
									<a href="./categoryform.php?w=u&amp;ca_id=2010101010&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_02">
										<span class="sound_only">체크</span>수정
									</a>
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_code">
									<input type="hidden" name="ca_id[5]" value="2010101020">
									<a href="#">1010101020</a>
								</td>
								<td class="sct_name4" headers="sct_cate">
									<div>
										<label for="ca_name_5" class="name_lbl">
											<span class="sound_only">체크/슬림의하위5단 분류</span>
										</label>
									</div>
									<input type="text" name="ca_name[5]" value="수학" id="ca_name_5" required="" class="tbl_input full_input required">
								</td>
								<td class="td_amount" headers="sct_amount">
									<input type="checkbox" name="ca_use[5]" value="1" id="ca_use5" checked="">
									<label for="ca_use5">판매</label>
								</td>
								<td class="td_mng td_mng_s">
									<a href="./categoryform.php?w=u&amp;ca_id=2010101020&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_02">
										<span class="sound_only">슬림 </span>수정
									</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_code">
									<input type="hidden" name="ca_id[6]" value="20101020">
									<a href="#">10101020</a>
								</td>
								<td class="sct_name3" headers="sct_cate">
									<div>
										<label for="ca_name_6" class="name_lbl">
											<span class="sound_only">셔츠의하위4단 분류</span>
										</label>
									</div>
									<input type="text" name="ca_name[6]" value="수학" id="ca_name_6" required="" class="tbl_input full_input required">
								</td>
								<td class="td_amount" headers="sct_amount">
									<input type="checkbox" name="ca_use[6]" value="1" id="ca_use6" checked="">
									<label for="ca_use6">판매</label>
								</td>
								<td class="td_mng td_mng_s">
									<a href="./categoryform.php?ca_id=20101020&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03">추가</a>
									<a href="./categoryform.php?w=u&amp;ca_id=20101020&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_02">
										<span class="sound_only">드레스셔츠 </span>수정
									</a>
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_code">
									<input type="hidden" name="ca_id[7]" value="201020">
									<a href="#">101020</a>
								</td>
								<td class="sct_name2" headers="sct_cate">
									<div>
										<label for="ca_name_7" class="name_lbl">
											<span class="sound_only">TOP의하위3단 분류</span>
										</label>
									</div>
									<input type="text" name="ca_name[7]" value="수학" id="ca_name_7" required="" class="tbl_input full_input required">
								</td>
								<td class="td_amount" headers="sct_amount">
									<input type="checkbox" name="ca_use[7]" value="1" id="ca_use7" checked="">
									<label for="ca_use7">판매</label>
								</td>
								<td class="td_mng td_mng_s">
									<a href="./categoryform.php?ca_id=201020&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03">추가</a>
									<a href="./categoryform.php?w=u&amp;ca_id=201020&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_02">
										<span class="sound_only">티 </span>수정
									</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_code">
									<input type="hidden" name="ca_id[8]" value="2020">
									<a href="#">1020</a>
								</td>
								<td class="sct_name1" headers="sct_cate">
									<div>
										<label for="ca_name_8" class="name_lbl">
											<span class="sound_only">TOP/PANTS의하위2단 분류</span>
										</label>
									</div>
									<input type="text" name="ca_name[8]" value="국어" id="ca_name_8" required="" class="tbl_input full_input required">
								</td>
								<td class="td_amount" headers="sct_amount">
									<input type="checkbox" name="ca_use[8]" value="1" id="ca_use8" checked="">
									<label for="ca_use8">판매</label>            </td>
									<td class="td_mng td_mng_s">
										<a href="./categoryform.php?ca_id=2020&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03">추가</a>
										<a href="./categoryform.php?w=u&amp;ca_id=2020&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_02">
											<span class="sound_only">PANTS</span>수정
										</a>
									</td>
								</tr>
								<tr class="bg1">
									<td class="td_code">
										<input type="hidden" name="ca_id[9]" value="30">
										<a href="#">20</a>
									</td>
									<td class="sct_name0" headers="sct_cate">
										<div>
											<label for="ca_name_9">
												<span class="sound_only">교제</span>
											</label>
										</div>
										<input type="text" name="ca_name[9]" value="테스트" id="ca_name_9" required="" class="tbl_input full_input required">
									</td>
									<td class="td_amount" headers="sct_amount">
										<input type="checkbox" name="ca_use[9]" value="1" id="ca_use9" checked="">
										<label for="ca_use9">판매</label>
									</td>
									<td class="td_mng td_mng_s">
										<a href="./categoryform.php?ca_id=30&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03">추가</a>
										<a href="./categoryform.php?w=u&amp;ca_id=30&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_02">
											<span class="sound_only">테스트</span>
											수정
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="btn_fixed_top">
						<input type="submit" value="일괄수정" class="btn_02 btn">
					</div>
				</form>
			</div>    
		</div>
	</div>
<?php
include_once("footer.php")
?>