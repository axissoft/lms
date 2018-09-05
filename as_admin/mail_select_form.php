<?php
$sub_menu = "200";
include_once("header.php")
?>
<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">회원메일발송</h1>
		<div class="container_wr">
			<div class="local_ov01 local_ov">
				전체회원 1,277명 , 탈퇴대기회원 18명, 정상회원 1,259명 중 메일 발송 대상 선택
			</div>
			<form name="frmsendmailselectform" id="frmsendmailselectform" method="post" autocomplete="off">
				<input type="hidden" name="ma_id" value="123">
				<div class="tbl_frm01 tbl_wrap">
					<table>
						<caption>회원메일발송 대상선택</caption>
						<tbody>
							<tr>
								<th scope="row">회원 ID</th>
								<td>
									<input type="radio" name="mb_id1" value="1" id="mb_id1_all" checked=""> <label for="mb_id1_all">전체</label>
									<input type="radio" name="mb_id1" value="0" id="mb_id1_section"> <label for="mb_id1_section">구간</label>
									<input type="text" name="mb_id1_from" value="" id="mb_id1_from" title="시작구간" class="frm_input"> 에서
									<input type="text" name="mb_id1_to" value="" id="mb_id1_to" title="종료구간" class="frm_input"> 까지
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="mb_email">E-mail</label></th>
								<td>
									<span class="frm_info">메일 주소에 단어 포함 (예 : @demo.sir.kr)</span>
									<input type="text" name="mb_email" value="" id="mb_email" class="frm_input" size="50">
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="mb_mailling">메일링</label></th>
								<td>
									<select name="mb_mailling" id="mb_mailling">
										<option value="1">수신동의한 회원만
										</option><option value="">전체
										</option>
									</select>
								</td>
							</tr>
							<tr>
								<th scope="row">권한</th>
								<td>
									<label for="mb_level_from" class="sound_only">최소권한</label>
									<select name="mb_level_from" id="mb_level_from">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select> 에서
									<label for="mb_level_to" class="sound_only">최대권한</label>
									<select name="mb_level_to" id="mb_level_to">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10" selected="">10</option>
									</select> 까지
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="gr_id">게시판그룹회원</label></th>
								<td>
									<select name="gr_id" id="gr_id">
										<option value="">전체</option>
										<option value="shop">쇼핑몰</option>
										<option value="skin">스킨</option>
									</select>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="btn_confirm01 btn_confirm">
					<input type="submit" value="확인" class="btn_submit">
					<a href="./mail_list.php">목록 </a>
				</div>
			</form>
		</div>    
	</div>
</div>	
<?php
include_once("footer.php")
?>