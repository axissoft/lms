<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">포인트관리</h1>
		<div class="container_wr">
			<div class="local_ov01 local_ov">
				<a href="http://g2016.digitree.co.kr/as_admin/point_list.php" class="ov_listall">전체목록</a>
				<span class="btn_ov01">
					<span class="ov_txt">전체</span>
					<span class="ov_num"> 5,571 건</span>
				</span>
				&nbsp;<span class="btn_ov01">
					<span class="ov_txt">전체 합계</span>
					<span class="ov_num">4,549,523,819점 </span>
				</span>
			</div>
			<form name="fsearch" id="fsearch" class="local_sch01 local_sch" method="get">
				<label for="sfl" class="sound_only">검색대상</label>
				<select name="sfl" id="sfl">
					<option value="mb_id">회원아이디</option>
					<option value="po_content">내용</option>
				</select>
				<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
				<input type="text" name="stx" value="" id="stx" required="" class="required frm_input">
				<input type="submit" class="btn_submit" value="검색">
			</form>
			<form name="fpointlist" id="fpointlist" method="post">
				<input type="hidden" name="sst" value="po_id">
				<input type="hidden" name="sod" value="desc">
				<input type="hidden" name="sfl" value="">
				<input type="hidden" name="stx" value="">
				<input type="hidden" name="page" value="1">
				<input type="hidden" name="token" value="">
				<div class="tbl_head01 tbl_wrap">
					<table>
						<caption>포인트관리 목록</caption>
						<thead>
							<tr>
								<th scope="col">
									<label for="chkall" class="sound_only">포인트 내역 전체</label>
									<input type="checkbox" name="chkall" value="1" id="chkall">
								</th>
								<th scope="col"><a href="#">회원아이디</a></th>
								<th scope="col">이름</th>
								<th scope="col">닉네임</th>
								<th scope="col"><a href="#">포인트 내용</a></th>
								<th scope="col"><a href="#">포인트</a></th>
								<th scope="col"><a href="#">일시</a></th>
								<th scope="col">만료일</th>
								<th scope="col">포인트합</th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg0">
								<td class="td_chk">
									<input type="hidden" name="mb_id[0]" value="*******" id="mb_id_0">
									<input type="hidden" name="po_id[0]" value="7819" id="po_id_0">
									<label for="chk_0" class="sound_only">2018-08-01 첫로그인 내역</label>
									<input type="checkbox" name="chk[]" value="0" id="chk_0">
								</td>
								<td class="td_left"><a href="?sfl=mb_id&amp;stx=*******">*******</a></td>
								<td class="td_left">******</td>
								<td class="td_left sv_use"><div><span class="sv_wrap">
									<a href="#" class="sv_member" title="******* 자기소개" target="_blank" rel="nofollow"><span class="profile_img"></span> *******</a>
									<span class="sv">
										<a href="#">쪽지보내기</a>
										<a href="#">메일보내기</a>
										<a href="#">자기소개</a>
										<a href="#" class="link_new_page">전체게시물</a>
									</span>
								</span></div></td>
								<td class="td_left">2018-08-01 첫로그인</td>
								<td class="td_num td_pt">100</td>
								<td class="td_datetime">2018-08-01 11:11:27</td>
								<td class="td_datetime2">2018-11-08</td>
								<td class="td_num td_pt">100</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="btn_fixed_top">
					<input type="submit" name="act_button" value="선택삭제" class="btn btn_02">
				</div>
			</form>
			<nav class="pg_wrap">
				<span class="pg">
					<span class="sound_only">열린</span>
					<strong class="pg_current">1</strong>
					<span class="sound_only">페이지</span>
					<a href="#" class="pg_page">2<span class="sound_only">페이지</span></a>
					<a href="#" class="pg_page">3<span class="sound_only">페이지</span></a>
					<a href="#" class="pg_page">4<span class="sound_only">페이지</span></a>
					<a href="#" class="pg_page">5<span class="sound_only">페이지</span></a>
					<a href="#" class="pg_page">6<span class="sound_only">페이지</span></a>
					<a href="#" class="pg_page">7<span class="sound_only">페이지</span></a>
					<a href="#" class="pg_page">8<span class="sound_only">페이지</span></a>
					<a href="#" class="pg_page">9<span class="sound_only">페이지</span></a>
					<a href="#" class="pg_page">10<span class="sound_only">페이지</span></a>
					<a href="#" class="pg_page pg_next">다음</a>
					<a href="#" class="pg_page pg_end">맨끝</a>
				</span>
			</nav>
			<section id="point_mng">
				<h2 class="h2_frm">개별회원 포인트 증감 설정</h2>
				<form name="fpointlist2" method="post" id="fpointlist2" autocomplete="off">
					<input type="hidden" name="sfl" value="">
					<input type="hidden" name="stx" value="">
					<input type="hidden" name="sst" value="po_id">
					<input type="hidden" name="sod" value="desc">
					<input type="hidden" name="page" value="1">
					<input type="hidden" name="token" value="112fc9325d7dc267beca4bbf10052f2d">
					<div class="tbl_frm01 tbl_wrap">
						<table>
							<colgroup>
								<col class="grid_4">
								<col>
							</colgroup>
							<tbody>
								<tr>
									<th scope="row"><label for="mb_id">회원아이디<strong class="sound_only">필수</strong></label></th>
									<td><input type="text" name="mb_id" value="" id="mb_id" class="required frm_input" required=""></td>
								</tr>
								<tr>
									<th scope="row"><label for="po_content">포인트 내용<strong class="sound_only">필수</strong></label></th>
									<td><input type="text" name="po_content" id="po_content" required="" class="required frm_input" size="80"></td>
								</tr>
								<tr>
									<th scope="row"><label for="po_point">포인트<strong class="sound_only">필수</strong></label></th>
									<td><input type="text" name="po_point" id="po_point" required="" class="required frm_input"></td>
								</tr>
								<tr>
									<th scope="row"><label for="po_expire_term">포인트 유효기간</label></th>
									<td><input type="text" name="po_expire_term" value="100" id="po_expire_term" class="frm_input" size="5"> 일</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="btn_confirm01 btn_confirm">
						<input type="submit" value="확인" class="btn_submit btn">
					</div>
				</form>
			</section>
		</div>
	</div>
</div>