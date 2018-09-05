<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">회원관리</h1>
		<div class="container_wr">
			<div class="local_ov01 local_ov">
				<a href="member_list.php" class="ov_listall">전체목록</a>
				<span class="btn_ov01">
					<span class="ov_txt">총회원수</span>
					<span class="ov_num"> <?=number_format($total_rows)?>명</span>
				</span>
				<!-- 보류 2018-09-03 jups
				<a href="?sst=mb_intercept_date&amp;sod=desc&amp;sfl=&amp;stx=" class="btn_ov01">
					<span class="ov_txt">차단 </span>
					<span class="ov_num">0명</span>
				</a>
				<a href="?sst=mb_leave_date&amp;sod=desc&amp;sfl=&amp;stx=" class="btn_ov01">
					<span class="ov_txt">탈퇴</span>
					<span class="ov_num">18명</span>
				</a>
				-->
			</div>
			<form id="fsearch" name="fsearch" class="local_sch01 local_sch" method="get">
				<label for="sfl" class="sound_only">검색대상</label>
				<select name="sfl" id="sfl">
					<option value="uid">아이디</option>
					<option value="name">닉네임</option>
					<option value="email">EMAIL</option>
					<option value="mobile">연락처</option>
					<option value="birthday">생년월일</option>
				</select>
				<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
				<input type="text" name="stx" value="" id="stx" required="" class="required frm_input">
				<input type="submit" class="btn_submit" value="검색">
			</form>
			<div class="local_desc01 local_desc">
				<p>
					회원자료 삭제 시 다른 회원이 기존 회원아이디를 사용하지 못하도록 회원아이디, 이름, 닉네임은 삭제하지 않고 영구 보관합니다.
				</p>
			</div>
			<form name="fmemberlist" id="fmemberlist" method="post">
				<input type="hidden" name="sst" value="mb_datetime">
				<input type="hidden" name="sod" value="desc">
				<input type="hidden" name="sfl" value="">
				<input type="hidden" name="stx" value="">
				<input type="hidden" name="page" value="1">
				<input type="hidden" name="token" value="">
				<div class="tbl_head01 tbl_wrap">
					<table>
						<caption>회원관리 목록</caption>
						<thead>
							<tr>
								<th scope="col">
									<label for="chkall" class="sound_only">회원 전체</label>
									<input type="checkbox" name="chkall" value="1" id="chkall">
								</th>
								<th scope="col">아이디</th>
								<th scope="col">상태</th>
								<th scope="col">이름</th>
								<th scope="col">이메일</th>
								<th scope="col">연락처</th>
								<th scope="col">생년월일</th>
								<th scope="col">인증여부</th>
								<th scope="col">가입일</th>
								<th scope="col">관리</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($res as $item): ?>
							<tr class="bg0">
								<td headers="mb_list_chk" class="td_chk">
									<input type="hidden" name="mb_id[0]" value="<?=$item->uid?>" id="mb_id_0">
									<label for="chk_0" class="sound_only">선택</label>
									<input type="checkbox" name="chk[]" value="0" id="chk_0">
								</td>
								<td headers="mb_list_id" class="td_mbid"><?=$item->uid?></td>
								<td headers="mb_list_id" class="td_mbstat"><?=$item->ustatus?></td>
								<td headers="mb_list_id" class="td_name"><?=$item->name?></td>
								<td headers="mb_list_id" class=""><?=$item->email?></td>
								<td headers="mb_list_id" class="td_tel"><?=$item->mobile?></td>
								<td headers="mb_list_id" class="td_date"><?=$item->birthday?></td>
								<td headers="mb_list_id" class="td_date"><span class="txt_true"><?=$item->auth_yn?></span></td>
								<td headers="mb_list_id" class="td_datetime"><?=$item->regdate?></td>
								<td headers="mb_list_mng" class="td_mng td_mng_s"><a href="<?=base_url('/admin/member')?>/memberform/page/<?=$curpage?>/uid/<?=$item->uid?>" class="btn btn_03">수정</a></td>
							</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
				<div class="btn_fixed_top">
					<!-- 선택 수정이 가능한가? 2018-09-04 jups
					<input type="submit" name="act_button" value="선택수정" class="btn btn_02">
					-->
					<input type="submit" name="act_button" value="선택삭제" class="btn btn_02">
				</div>
			</form>

			<!-- pagination 참고 적용다하고 삭제.
			<nav class="pg_wrap">
				<span class="pg">
					<a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=86" class="pg_page pg_start">맨끝</a>
					<a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=11" class="pg_page pg_prev">다음</a>
					<strong class="pg_current">1</strong>
					<a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=2" class="pg_page">2<span class="sound_only">페이지</span></a>
					<a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=3" class="pg_page">3<span class="sound_only">페이지</span></a>
					<a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=4" class="pg_page">4<span class="sound_only">페이지</span></a>
					<a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=5" class="pg_page">5<span class="sound_only">페이지</span></a>
					<a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=6" class="pg_page">6<span class="sound_only">페이지</span></a>
					<a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=7" class="pg_page">7<span class="sound_only">페이지</span></a>
					<a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=8" class="pg_page">8<span class="sound_only">페이지</span></a>
					<a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=9" class="pg_page">9<span class="sound_only">페이지</span></a>
					<a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=10" class="pg_page">10<span class="sound_only">페이지</span></a>
					<a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=11" class="pg_page pg_next">다음</a>
					<a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=86" class="pg_page pg_end">맨끝</a>
				</span>
			</nav>
				-->
			<nav class="pg_wrap">
				<span class="pg">
					<?=$pagination?>
				</span>
			</nav>
		</div>
	</div>
</div>