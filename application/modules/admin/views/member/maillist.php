<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">회원메일발송</h1>
		<div class="container_wr">
			<div class="local_desc01 local_desc">
				<p>
					<b>테스트</b>는 등록된 최고관리자의 이메일로 테스트 메일을 발송합니다.<br>
					현재 등록된 메일은 총 123건입니다.<br>
					<strong>주의) 수신자가 동의하지 않은 대량 메일 발송에는 적합하지 않습니다. 수십건 단위로 발송해 주십시오.</strong>
				</p>
			</div>
			<form name="fmaillist" id="fmaillist" action="" method="post">
				<div class="tbl_head01 tbl_wrap">
					<table>
						<caption>회원메일발송 목록</caption>
						<thead>
							<tr>
								<th scope="col"><input type="checkbox" name="chkall" value="1" id="chkall" title="현재 페이지 목록 전체선택"></th>
								<th scope="col">번호</th>
								<th scope="col">제목</th>
								<th scope="col">작성일시</th>
								<th scope="col">테스트</th>
								<th scope="col">보내기</th>
								<th scope="col">미리보기</th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg0">
								<td class="td_chk">
									<label for="chk_0" class="sound_only">test 메일</label>
									<input type="checkbox" id="chk_0" name="chk[]" value="123">
								</td>
								<td class="td_num_c">123</td>
								<td class="td_left"><a href="<?=base_url('/admin/member')?>/mailform?w=u&amp;ma_id=123">test</a></td>
								<td class="td_datetime">2018-07-23 14:48:45</td>
								<td class="td_test"><a href="#">테스트</a></td>
								<td class="td_send"><a href="<?=base_url('/admin/member')?>/mailselectform?ma_id=123">보내기</a></td>
								<td class="td_mng"><a href="<?=base_url('/admin/member')?>/mailpreview?ma_id=123" target="_blank" class="btn btn_03">미리보기</a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="btn_fixed_top">
					<input type="submit" value="선택삭제" class="btn btn_02">
					<a href="<?=base_url('/admin/member')?>/mailform" id="mail_add" class="btn btn_01">메일내용추가</a>
				</div>
			</form>
		</div>    
	</div>
</div>