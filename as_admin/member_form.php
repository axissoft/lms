<?php
$sub_menu ="200";
include_once("header.php")
?>

<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">회원 수정</h1>
		<div class="container_wr">
			<form name="fmember" id="fmember" method="post" enctype="multipart/form-data">
				<input type="hidden" name="w" value="u">
				<input type="hidden" name="sfl" value="">
				<input type="hidden" name="stx" value="">
				<input type="hidden" name="sst" value="">
				<input type="hidden" name="sod" value="">
				<input type="hidden" name="page" value="0">
				<input type="hidden" name="token" value="">
				<div class="tbl_frm01 tbl_wrap">
					<table>
						<caption>회원 수정</caption>
						<colgroup>
							<col class="grid_4">
							<col>
							<col class="grid_4">
							<col>
						</colgroup>
						<tbody>
							<tr>
								<th scope="row"><label for="mb_id">아이디</label></th>
								<td>
									<input type="text" name="mb_id" value="digitree" id="mb_id" readonly="" class="frm_input " size="15" maxlength="20">
									<a href="./boardgroupmember_form.php?mb_id=admin" class="btn_frmline">접근가능그룹보기</a>
								</td>
								<th scope="row"><label for="mb_password">비밀번호</label></th>
								<td>
									<input type="password" name="mb_password" id="mb_password" class="frm_input " size="15" maxlength="20">
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="mb_name">이름(실명)<strong class="sound_only">필수</strong></label></th>
								<td><input type="text" name="mb_name" value="홍길동" id="mb_name" required="" class="required frm_input" size="15" maxlength="20"></td>
								<th scope="row"><label for="mb_nick">닉네임<strong class="sound_only">필수</strong></label></th>
								<td><input type="text" name="mb_nick" value="갈동" id="mb_nick" required="" class="required frm_input" size="15" maxlength="20"></td>
							</tr>
							<tr>
								<th scope="row"><label for="mb_level">회원 권한</label></th>
								<td>
									<select id="mb_level" name="mb_level">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10" selected="selected">10</option>
									</select>
								</td>
								<th scope="row">포인트</th>
								<td><a href="./point_list.php?sfl=mb_id&amp;stx=admin" target="_blank">710</a> 점</td>
							</tr>
							<tr>
								<th scope="row"><label for="mb_email">E-mail<strong class="sound_only">필수</strong></label></th>
								<td><input type="text" name="mb_email" value="admin@domain.com" id="mb_email" maxlength="100" required="" class="required frm_input email" size="30"></td>
								<th scope="row"><label for="mb_homepage">홈페이지</label></th>
								<td><input type="text" name="mb_homepage" value="" id="mb_homepage" class="frm_input" maxlength="255" size="15"></td>
							</tr>
							<tr>
								<th scope="row"><label for="mb_hp">휴대폰번호</label></th>
								<td><input type="text" name="mb_hp" value="" id="mb_hp" class="frm_input" size="15" maxlength="20"></td>
								<th scope="row"><label for="mb_tel">전화번호</label></th>
								<td><input type="text" name="mb_tel" value="" id="mb_tel" class="frm_input" size="15" maxlength="20"></td>
							</tr>
							<tr>
								<th scope="row">주소</th>
								<td colspan="3" class="td_addr_line">
									<label for="mb_zip" class="sound_only">우편번호</label>
									<input type="text" name="mb_zip" value="" id="mb_zip" class="frm_input readonly" size="5" maxlength="6">
									<button type="button" class="btn_frmline">주소 검색</button><br>
									<input type="text" name="mb_addr1" value="" id="mb_addr1" class="frm_input readonly" size="60">
									<label for="mb_addr1">기본주소</label><br>
									<input type="text" name="mb_addr2" value="" id="mb_addr2" class="frm_input" size="60">
									<label for="mb_addr2">상세주소</label>
									<br>
									<input type="text" name="mb_addr3" value="" id="mb_addr3" class="frm_input" size="60">
									<label for="mb_addr3">참고항목</label>
									<input type="hidden" name="mb_addr_jibeon" value=""><br>
								</td>
							</tr>
							<tr>
								<th scope="row">메일 수신</th>
								<td>
									<input type="radio" name="mb_mailling" value="1" id="mb_mailling_yes" checked="checked">
									<label for="mb_mailling_yes">예</label>
									<input type="radio" name="mb_mailling" value="0" id="mb_mailling_no">
									<label for="mb_mailling_no">아니오</label>
								</td>
								<th scope="row"><label for="mb_sms_yes">SMS 수신</label></th>
								<td>
									<input type="radio" name="mb_sms" value="1" id="mb_sms_yes">
									<label for="mb_sms_yes">예</label>
									<input type="radio" name="mb_sms" value="0" id="mb_sms_no" checked="checked">
									<label for="mb_sms_no">아니오</label>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="mb_memo">메모</label></th>
								<td colspan="3"><textarea name="mb_memo" id="mb_memo"></textarea></td>
							</tr>
							<tr>
								<th scope="row">회원가입일</th>
								<td>2018-06-15 00:11:55</td>
								<th scope="row">최근접속일</th>
								<td>2018-08-01 15:07:01</td>
							</tr>
							<tr>
								<th scope="row">IP</th>
								<td colspan="3">182.211.44.248</td>
							</tr>
							<tr>
								<th scope="row"><label for="mb_leave_date">탈퇴일자</label></th>
								<td>
									<input type="text" name="mb_leave_date" value="" id="mb_leave_date" class="frm_input" maxlength="8">
									<input type="checkbox" value="20180801" id="mb_leave_date_set_today">
									<label for="mb_leave_date_set_today">탈퇴일을 오늘로 지정</label>
								</td>
								<th scope="row">접근차단일자</th>
								<td>
									<input type="text" name="mb_intercept_date" value="" id="mb_intercept_date" class="frm_input" maxlength="8">
									<input type="checkbox" value="20180801" id="mb_intercept_date_set_today">
									<label for="mb_intercept_date_set_today">접근차단일을 오늘로 지정</label>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="btn_fixed_top">
					<a href="./member_list.php?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=0" class="btn btn_02">목록</a>
					<input type="submit" value="확인" class="btn_submit btn" accesskey="s">
				</div>
			</form>
		</div>    
	</div>
</div>
<?php
include_once("footer.php")
?>