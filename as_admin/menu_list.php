<?php
$sub_menu = "100";
include_once("header.php")
?>
<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">메뉴설정</h1>
		<div class="container_wr">
			<div class="local_desc01 local_desc">
				<p><strong>주의!</strong> 메뉴설정 작업 후 반드시 <strong>확인</strong>을 누르셔야 저장됩니다.</p>
			</div>
			<form name="fmenulist" id="fmenulist" method="post">
				<input type="hidden" name="token" value="">
				<div id="menulist" class="tbl_head01 tbl_wrap">
					<table>
						<caption>메뉴설정 목록</caption>
						<thead>
							<tr>
								<th scope="col">메뉴</th>
								<th scope="col">코드</th>
								<th scope="col">새창</th>
								<th scope="col">순서</th>
								<th scope="col">관리</th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg0 menu_list menu_group_10">
								<td class="td_category">
									<input type="hidden" name="code[]" value="10">
									<label for="me_name_0" class="sound_only"> 메뉴<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="me_name[]" value="쇼핑몰" id="me_name_0" required="" class="required tbl_input full_input">
								</td>
								<td>
									<label for="me_link_0" class="sound_only">코드<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="me_link[]" value="" id="me_link_0" required="" class="required tbl_input full_input">
								</td>
								<td class="td_mng">
									<label for="me_target_0" class="sound_only">새창</label>
									<select name="me_target[]" id="me_target_0">
										<option value="self" selected="selected">사용안함</option>
										<option value="blank">사용함</option>
									</select>
								</td>
								<td class="td_num">
									<label for="me_order_0" class="sound_only">순서</label>
									<input type="text" name="me_order[]" value="0" id="me_order_0" class="tbl_input" size="5">
								</td>
								<td class="td_mng">
									<button type="button" class="btn_add_submenu btn_03" onclick="window.open('menu_form.php')">추가</button>
									<button type="button" class="btn_del_menu btn_02">삭제</button>
								</td>
							</tr>
							<tr class="bg1 menu_list menu_group_10">
								<td class="td_category sub_menu_class">
									<input type="hidden" name="code[]" value="10">
									<label for="me_name_1" class="sound_only"><span class="sound_only">공지사항의 서브</span> 메뉴<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="me_name[]" value="공지사항" id="me_name_1" required="" class="required tbl_input full_input">
								</td>
								<td>
									<label for="me_link_1" class="sound_only">코드<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="me_link[]" value="" id="me_link_1" required="" class="required tbl_input full_input">
								</td>
								<td class="td_mng">
									<label for="me_target_1" class="sound_only">새창</label>
									<select name="me_target[]" id="me_target_1">
										<option value="self" selected="selected">사용안함</option>
										<option value="blank">사용함</option>
									</select>
								</td>
								<td class="td_num">
									<label for="me_order_1" class="sound_only">순서</label>
									<input type="text" name="me_order[]" value="0" id="me_order_1" class="tbl_input" size="5">
								</td>
								<td class="td_mng">
									<button type="button" class="btn_del_menu btn_02">삭제</button>
								</td>
							</tr>
							<tr class="bg0 menu_list menu_group_10">
								<td class="td_category sub_menu_class">
									<input type="hidden" name="code[]" value="10">
									<label for="me_name_2" class="sound_only"><span class="sound_only">자유게시판의 서브</span> 메뉴<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="me_name[]" value="자유게시판" id="me_name_2" required="" class="required tbl_input full_input">
								</td>
								<td>
									<label for="me_link_2" class="sound_only">코드<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="me_link[]" value="" id="me_link_2" required="" class="required tbl_input full_input">
								</td>
								<td class="td_mng">
									<label for="me_target_2" class="sound_only">새창</label>
									<select name="me_target[]" id="me_target_2">
										<option value="self" selected="selected">사용안함</option>
										<option value="blank">사용함</option>
									</select>
								</td>
								<td class="td_num">
									<label for="me_order_2" class="sound_only">순서</label>
									<input type="text" name="me_order[]" value="0" id="me_order_2" class="tbl_input" size="5">
								</td>
								<td class="td_mng">
									<button type="button" class="btn_del_menu btn_02">삭제</button>
								</td>
							</tr>
							<tr class="bg1 menu_list menu_group_10">
								<td class="td_category sub_menu_class">
									<input type="hidden" name="code[]" value="10">
									<label for="me_name_3" class="sound_only"><span class="sound_only">질문답변의 서브</span> 메뉴<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="me_name[]" value="질문답변" id="me_name_3" required="" class="required tbl_input full_input">
								</td>
								<td>
									<label for="me_link_3" class="sound_only">코드<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="me_link[]" value="" id="me_link_3" required="" class="required tbl_input full_input">
								</td>
								<td class="td_mng">
									<label for="me_target_3" class="sound_only">새창</label>
									<select name="me_target[]" id="me_target_3">
										<option value="self" selected="selected">사용안함</option>
										<option value="blank">사용함</option>
									</select>
								</td>
								<td class="td_num">
									<label for="me_order_3" class="sound_only">순서</label>
									<input type="text" name="me_order[]" value="0" id="me_order_3" class="tbl_input" size="5">
								</td>
								<td class="td_mng">
									<button type="button" class="btn_del_menu btn_02">삭제</button>
								</td>
							</tr>
							<tr class="bg0 menu_list menu_group_20">
								<td class="td_category">
									<input type="hidden" name="code[]" value="20">
									<label for="me_name_4" class="sound_only"><span class="sound_only">질문답변의 서브</span> 메뉴<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="me_name[]" value="SIR" id="me_name_4" required="" class="required tbl_input full_input">
								</td>
								<td>
									<label for="me_link_4" class="sound_only">코드<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="me_link[]" value="" id="me_link_4" required="" class="required tbl_input full_input">
								</td>
								<td class="td_mng">
									<label for="me_target_4" class="sound_only">새창</label>
									<select name="me_target[]" id="me_target_4">
										<option value="self">사용안함</option>
										<option value="blank" selected="selected">사용함</option>
									</select>
								</td>
								<td class="td_num">
									<label for="me_order_4" class="sound_only">순서</label>
									<input type="text" name="me_order[]" value="0" id="me_order_4" class="tbl_input" size="5">
								</td>
								<td class="td_mng">
									<button type="button" class="btn_add_submenu btn_03" onclick="window.open('menu_form.php')">추가</button>
									<button type="button" class="btn_del_menu btn_02">삭제</button>
								</td>
							</tr>
							<tr class="bg1 menu_list menu_group_20">
								<td class="td_category sub_menu_class">
									<input type="hidden" name="code[]" value="20">
									<label for="me_name_5" class="sound_only"><span class="sound_only">자게의 서브</span> 메뉴<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="me_name[]" value="자게" id="me_name_5" required="" class="required tbl_input full_input">
								</td>
								<td>
									<label for="me_link_5" class="sound_only">코드<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="me_link[]" value="" id="me_link_5" required="" class="required tbl_input full_input">
								</td>
								<td class="td_mng">
									<label for="me_target_5" class="sound_only">새창</label>
									<select name="me_target[]" id="me_target_5">
										<option value="self">사용안함</option>
										<option value="blank" selected="selected">사용함</option>
									</select>
								</td>
								<td class="td_num">
									<label for="me_order_5" class="sound_only">순서</label>
									<input type="text" name="me_order[]" value="0" id="me_order_5" class="tbl_input" size="5">
								</td>
								<td class="td_mng">
									<button type="button" class="btn_del_menu btn_02">삭제</button>
								</td>
							</tr>
							<tr class="bg0 menu_list menu_group_30">
								<td class="td_category">
									<input type="hidden" name="code[]" value="30">
									<label for="me_name_6" class="sound_only"><span class="sound_only">자게의 서브</span> 메뉴<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="me_name[]" value="스킨" id="me_name_6" required="" class="required tbl_input full_input">
								</td>
								<td>
									<label for="me_link_6" class="sound_only">코드<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="me_link[]" value="" id="me_link_6" required="" class="required tbl_input full_input">
								</td>
								<td class="td_mng">
									<label for="me_target_6" class="sound_only">새창</label>
									<select name="me_target[]" id="me_target_6">
										<option value="self" selected="selected">사용안함</option>
										<option value="blank">사용함</option>
									</select>
								</td>
								<td class="td_num">
									<label for="me_order_6" class="sound_only">순서</label>
									<input type="text" name="me_order[]" value="0" id="me_order_6" class="tbl_input" size="5">
								</td>
								<td class="td_mng">
									<button type="button" class="btn_add_submenu btn_03" onclick="window.open('menu_form.php')">추가</button>
									<button type="button" class="btn_del_menu btn_02">삭제</button>
								</td>
							</tr>
							<tr class="bg1 menu_list menu_group_30">
								<td class="td_category sub_menu_class">
									<input type="hidden" name="code[]" value="30">
									<label for="me_name_7" class="sound_only"><span class="sound_only">N_GALLERY의 서브</span> 메뉴<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="me_name[]" value="N_GALLERY" id="me_name_7" required="" class="required tbl_input full_input">
								</td>
								<td>
									<label for="me_link_7" class="sound_only">코드<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="me_link[]" value="" id="me_link_7" required="" class="required tbl_input full_input">
								</td>
								<td class="td_mng">
									<label for="me_target_7" class="sound_only">새창</label>
									<select name="me_target[]" id="me_target_7">
										<option value="self" selected="selected">사용안함</option>
										<option value="blank">사용함</option>
									</select>
								</td>
								<td class="td_num">
									<label for="me_order_7" class="sound_only">순서</label>
									<input type="text" name="me_order[]" value="0" id="me_order_7" class="tbl_input" size="5">
								</td>
								<td class="td_mng">
									<button type="button" class="btn_del_menu btn_02">삭제</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="btn_fixed_top">
					<button type="button" class="btn btn_02" onclick="window.open('menu_form.php')">메뉴추가<span class="sound_only"> 새창</span></button>
					<input type="submit" name="act_button" value="확인" class="btn_submit btn ">
				</div>
			</form>
		</div>
<?php
include_once("footer.php")
?>