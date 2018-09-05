<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">메뉴추가</h1>
		<div id="menu_frm" class="new_win">        
			<form name="fmenuform" id="fmenuform" class="new_win_con">
				<div class="new_win_desc">
					<label for="me_type">대상선택</label>
					<select name="me_type" id="me_type">
						<option value="">직접입력</option>
						<option value="">게시판그룹</option>
						<option value="">게시판</option>
						<option value="">내용관리</option>
					</select>
				</div>
				<div id="menu_result">
					<div class="tbl_frm01 tbl_wrap">
						<table>
							<colgroup>
								<col class="grid_2">
								<col>
							</colgroup>
							<tbody>
								<tr>
									<th scope="row"><label for="me_name">메뉴<strong class="sound_only"> 필수</strong></label></th>
									<td><input type="text" name="me_name" id="me_name" required="" class="frm_input required"></td>
								</tr>
								<tr>
									<th scope="row"><label for="me_link">링크<strong class="sound_only"> 필수</strong></label></th>
									<td>
										<span class="frm_info">링크는 http://를 포함해서 입력해 주세요.</span>
										<input type="text" name="me_link" id="me_link" required="" class="frm_input full_input required">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="btn_win02 btn_win">
						<button type="button" id="add_manual" class="btn_submit btn">추가</button>
						<button type="button" class="btn_02 btn">창닫기</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>