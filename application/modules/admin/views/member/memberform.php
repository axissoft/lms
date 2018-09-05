<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">회원 수정</h1>
		<div class="container_wr">
            <?php echo form_open_multipart('/admin/member/memberModify', 'name="frm" id="frm" novalidate="novalidate"'); ?>
				<input type="hidden" name="page" value="<?=$this->uri->segment(5, 0)?>">
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
								<th scope="row"><label for="uid">아이디</label></th>
								<td>
									<input type="text" name="uid" value="<?=$res->uid?>" id="uid" readonly="readonly" class="frm_input " size="15" maxlength="20">
								</td>
								<th scope="row"><label for="upw">비밀번호</label></th>
								<td>
									<input type="password" name="upw" id="upw" class="frm_input " size="15" maxlength="20">
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="name">이름(닉네임)<strong class="sound_only">필수</strong></label></th>
								<td><input type="text" name="name" value="<?=$res->name?>" id="name" required="" class="required frm_input" size="15" maxlength="20"></td>
								<th scope="row"><label for="birthday">생년월일<strong class="sound_only">필수</strong></label></th>
								<td><input type="text" name="birthday" value="<?=$res->birthday?>" id="birthday" required="" class="required frm_input" size="15" maxlength="20"></td>
							</tr>
							<tr>
								<th scope="row"><label for="ulevel">회원 권한</label></th>
								<td>
									<select id="ulevel" name="ulevel">
                                        <option value="1" <?php if ($res->ulevel == 1) echo 'selected'; ?>>1. 일반</option>
                                        <option value="2" <?php if ($res->ulevel == 2) echo 'selected'; ?>>2</option>
                                        <option value="3" <?php if ($res->ulevel == 3) echo 'selected'; ?>>3</option>
                                        <option value="4" <?php if ($res->ulevel == 4) echo 'selected'; ?>>4</option>
                                        <option value="5" <?php if ($res->ulevel == 5) echo 'selected'; ?>>5. 선생님</option>
                                        <option value="6" <?php if ($res->ulevel == 6) echo 'selected'; ?>>6</option>
                                        <option value="7" <?php if ($res->ulevel == 7) echo 'selected'; ?>>7</option>
                                        <option value="8" <?php if ($res->ulevel == 8) echo 'selected'; ?>>8</option>
                                        <option value="9" <?php if ($res->ulevel == 9) echo 'selected'; ?>>9. 관리자</option>
                                        <option value="10" <?php if ($res->ulevel == 10) echo 'selected'; ?>>10</option>
									</select>
								</td>
								<th scope="row">포인트</th>
								<td><a href="./point_list.php?sfl=mb_id&amp;stx=admin" target="_blank">710</a> 점</td>
							</tr>
							<tr>
								<th scope="row"><label for="email">E-mail<strong class="sound_only">필수</strong></label></th>
								<td><input type="text" name="email" value="<?=$res->email?>" id="email" maxlength="100" required="" class="required frm_input email" size="30"></td>
								<th scope="row"><label for="mobile">연락처</label></th>
								<td><input type="text" name="mobile" value="<?=$res->mobile?>" id="mobile" class="frm_input" size="15" maxlength="20"></td>
							</tr>
							<!-- 현재 미사용 2018-09-04 jups
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
							-->
							<tr>
								<th scope="row">메일 수신</th>
								<td>
									<input type="radio" name="mb_mailling" value="1" id="mb_mailling_yes" checked="checked">
									<label for="mb_mailling_yes">예</label>
									<input type="radio" name="mb_mailling" value="0" id="mb_mailling_no">
									<label for="mb_mailling_no">아니오</label>
								</td>
								<th scope="row"><label for="auth_yn">인증여부</label></th>
								<td>
									<input type="radio" name="auth_yn" value="1" id="auth_yn_yes" checked="checked">
									<label for="auth_yn_yes">완료</label>
									<input type="radio" name="auth_yn" value="0" id="auth_yn_no">
									<label for="auth_yn_no">미완료</label>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="memo">메모</label></th>
								<td colspan="3"><textarea name="memo" id="memo"></textarea></td>
							</tr>
							<tr>
								<th scope="row">포인트</th>
								<td><a href="./point_list.php?sfl=mb_id&amp;stx=admin" target="_blank">710</a> 점</td>
								<th scope="row">IP</th>
								<td>182.211.44.248</td>
							</tr>
							<tr>
								<th scope="row">회원가입일</th>
								<td><?=$res->regdate?></td>
								<th scope="row">최근접속일</th>
								<td class="txt_fail">회원 로그 테이블 추가 후 작업.</td>
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
					<a href="<?=base_url('/admin/member')?>/memberlist/page/<?=$this->uri->segment(5, 0)?>" class="btn btn_02">목록</a>
					<input type="submit" value="수정" class="btn_submit btn" accesskey="s">
				</div>
			</form>
		</div>
	</div>
</div>