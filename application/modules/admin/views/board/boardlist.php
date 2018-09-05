<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">게시판관리</h1>
		<div class="container_wr">
			<div class="local_ov01 local_ov">
				<a href="#" class="ov_listall">전체목록</a>
				<span class="btn_ov01">
					<span class="ov_txt">생성된 게시판수</span>
					<span class="ov_num"> 11개</span>
				</span>
			</div>
			<form name="fsearch" id="fsearch" class="local_sch01 local_sch" method="get">
				<label for="sfl" class="sound_only">검색대상</label>
				<select name="sfl" id="sfl">
					<option value="bo_table">TABLE</option>
					<option value="bo_subject">제목</option>
					<option value="a.gr_id">그룹ID</option>
				</select>
				<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
				<input type="text" name="stx" value="" id="stx" required="" class="required frm_input">
				<input type="submit" value="검색" class="btn_submit">
			</form>
			<form name="fboardlist" id="fboardlist" method="post">
				<input type="hidden" name="sst" value="a.gr_id, a.bo_table">
				<input type="hidden" name="sod" value="asc">
				<input type="hidden" name="sfl" value="">
				<input type="hidden" name="stx" value="">
				<input type="hidden" name="page" value="1">
				<input type="hidden" name="token" value="">
				<div class="tbl_head01 tbl_wrap">
					<table>
						<caption>게시판관리 목록</caption>
						<thead>
							<tr>
								<th scope="col">
									<label for="chkall" class="sound_only">게시판 전체</label>
									<input type="checkbox" name="chkall" value="1" id="chkall">
								</th>
								<th scope="col"><a href="#">코드</a></th>
								<th scope="col"><a href="#">TABLE</a></th>
								<th scope="col"><a href="#">제목</a></th>
								<th scope="col"><a href="#">검색<br>사용</a></th>
								<th scope="col">관리</th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg0">
								<td class="td_chk">
									<label for="chk_0" class="sound_only">자유게시판</label>
									<input type="checkbox" name="chk[]" value="0" id="chk_0">
								</td>
								<td>b001</td>
								<td>
									<input type="hidden" name="board_table[0]" value="board">
									<a href="#">board</a>
								</td>
								<td>
									<label for="bo_subject_0" class="sound_only">게시판 제목<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="bo_subject[0]" value="자유게시판" id="bo_subject_0" required="" class="required tbl_input bo_subject full_input" size="10">
								</td>
								<td class="td_numsmall">
									<label for="bo_use_search_0" class="sound_only">검색<br>사용</label>
									<input type="checkbox" name="bo_use_search[0]" value="1" id="bo_use_search_0" checked="">
								</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/board')?>/boardform?w=u&amp;bo_table=board&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03">수정</a>
									<a href="#" class="board_copy btn btn_02">삭제</a>
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_chk">
									<label for="chk_1" class="sound_only">BOARDPROTO</label>
									<input type="checkbox" name="chk[]" value="1" id="chk_1">
								</td>
								<td>b002</td>
								<td>
									<input type="hidden" name="board_table[1]" value="BOARDONE">
									<a href="#">BOARDONE</a>
								</td>
								<td>
									<label for="bo_subject_1" class="sound_only">게시판 제목<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="bo_subject[1]" value="BOARDPROTO" id="bo_subject_1" required="" class="required tbl_input bo_subject full_input" size="10">
								</td>
								<td class="td_numsmall">
									<label for="bo_use_search_1" class="sound_only">검색<br>사용</label>
									<input type="checkbox" name="bo_use_search[1]" value="1" id="bo_use_search_1" checked="">
								</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/board')?>/boardform?w=u&amp;bo_table=BOARDONE&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03">수정</a>
									<a href="#" class="board_copy btn btn_02">삭제</a> 
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_chk">
									<label for="chk_2" class="sound_only">복사복사</label>
									<input type="checkbox" name="chk[]" value="2" id="chk_2">
								</td>
								<td>b002</td>
								<td>
									<input type="hidden" name="board_table[2]" value="cptest1">
									<a href="#">cptest1</a>
								</td>
								<td>
									<label for="bo_subject_2" class="sound_only">게시판 제목<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="bo_subject[2]" value="복사복사" id="bo_subject_2" required="" class="required tbl_input bo_subject full_input" size="10">
								</td>
								<td class="td_numsmall">
									<label for="bo_use_search_2" class="sound_only">검색<br>사용</label>
									<input type="checkbox" name="bo_use_search[2]" value="1" id="bo_use_search_2" checked="">
								</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/board')?>/boardform?w=u&amp;bo_table=cptest1&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03">수정</a>
									<a href="#" class="board_copy btn btn_02">삭제</a>
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_chk">
									<label for="chk_3" class="sound_only">자유게시판</label>
									<input type="checkbox" name="chk[]" value="3" id="chk_3">
								</td>
								<td>b003</td>
								<td>
									<input type="hidden" name="board_table[3]" value="free">
									<a href="#">free</a>
								</td>
								<td>
									<label for="bo_subject_3" class="sound_only">게시판 제목<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="bo_subject[3]" value="자유게시판" id="bo_subject_3" required="" class="required tbl_input bo_subject full_input" size="10">
								</td>
								<td class="td_numsmall">
									<label for="bo_use_search_3" class="sound_only">검색<br>사용</label>
									<input type="checkbox" name="bo_use_search[3]" value="1" id="bo_use_search_3" checked="">
								</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/board')?>/boardform?w=u&amp;bo_table=free&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03">수정</a>
									<a href="#" class="board_copy btn btn_02">삭제</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_chk">
									<label for="chk_4" class="sound_only">갤러리</label>
									<input type="checkbox" name="chk[]" value="4" id="chk_4">
								</td>
								<td>b004</td>
								<td>
									<input type="hidden" name="board_table[4]" value="gallery">
									<a href="#">gallery</a>
								</td>
								<td>
									<label for="bo_subject_4" class="sound_only">게시판 제목<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="bo_subject[4]" value="갤러리" id="bo_subject_4" required="" class="required tbl_input bo_subject full_input" size="10">
								</td>
								<td class="td_numsmall">
									<label for="bo_use_search_4" class="sound_only">검색<br>사용</label>
									<input type="checkbox" name="bo_use_search[4]" value="1" id="bo_use_search_4" checked="">
								</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/board')?>/boardform?w=u&amp;bo_table=gallery&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03">수정</a>
									<a href="#" class="board_copy btn btn_02">삭제</a>
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_chk">
									<label for="chk_5" class="sound_only">zizziz</label>
									<input type="checkbox" name="chk[]" value="5" id="chk_5">
								</td>
								<td>b006</td>
								<td>
									<input type="hidden" name="board_table[5]" value="hol">
									<a href="#">hol</a>
								</td>
								<td>
									<label for="bo_subject_5" class="sound_only">게시판 제목<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="bo_subject[5]" value="zizziz" id="bo_subject_5" required="" class="required tbl_input bo_subject full_input" size="10">
								</td>
								<td class="td_numsmall">
									<label for="bo_use_search_5" class="sound_only">검색<br>사용</label>
									<input type="checkbox" name="bo_use_search[5]" value="1" id="bo_use_search_5" checked="">
								</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/board')?>/boardform?w=u&amp;bo_table=hol&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03">수정</a>
									<a href="#" class="board_copy btn btn_02">삭제</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_chk">
									<label for="chk_6" class="sound_only">공지사항</label>
									<input type="checkbox" name="chk[]" value="6" id="chk_6">
								</td>
								<td>b007</td>
								<td>
									<input type="hidden" name="board_table[6]" value="notice">
									<a href="#">notice</a>
								</td>
								<td>
									<label for="bo_subject_6" class="sound_only">게시판 제목<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="bo_subject[6]" value="공지사항" id="bo_subject_6" required="" class="required tbl_input bo_subject full_input" size="10">
								</td>
								<td class="td_numsmall">
									<label for="bo_use_search_6" class="sound_only">검색<br>사용</label>
									<input type="checkbox" name="bo_use_search[6]" value="1" id="bo_use_search_6" checked="">
								</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/board')?>/boardform?w=u&amp;bo_table=notice&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03">수정</a>
									<a href="#" class="board_copy btn btn_02">삭제</a>
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_chk">
									<label for="chk_7" class="sound_only">포토</label>
									<input type="checkbox" name="chk[]" value="7" id="chk_7">
								</td>
								<td>b008</td>
								<td>
									<input type="hidden" name="board_table[7]" value="photo">
									<a href="#">photo</a>
								</td>
								<td>
									<label for="bo_subject_7" class="sound_only">게시판 제목<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="bo_subject[7]" value="포토" id="bo_subject_7" required="" class="required tbl_input bo_subject full_input" size="10">
								</td>
								<td class="td_numsmall">
									<label for="bo_use_search_7" class="sound_only">검색<br>사용</label>
									<input type="checkbox" name="bo_use_search[7]" value="1" id="bo_use_search_7" checked="">
								</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/board')?>/boardform?w=u&amp;bo_table=photo&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03">수정</a>
									<a href="#" class="board_copy btn btn_02">삭제</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_chk">
									<label for="chk_8" class="sound_only">질문답변</label>
									<input type="checkbox" name="chk[]" value="8" id="chk_8">
								</td>
								<td>b009</td>
								<td>
									<input type="hidden" name="board_table[8]" value="qa">
									<a href="#">qa</a>
								</td>
								<td>
									<label for="bo_subject_8" class="sound_only">게시판 제목<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="bo_subject[8]" value="질문답변" id="bo_subject_8" required="" class="required tbl_input bo_subject full_input" size="10">
								</td>
								<td class="td_numsmall">
									<label for="bo_use_search_8" class="sound_only">검색<br>사용</label>
									<input type="checkbox" name="bo_use_search[8]" value="1" id="bo_use_search_8" checked="">
								</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/board')?>/boardform?w=u&amp;bo_table=qa&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03">수정</a>
									<a href="#" class="board_copy btn btn_02">삭제</a>
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_chk">
									<label for="chk_9" class="sound_only">notice</label>
									<input type="checkbox" name="chk[]" value="9" id="chk_9">
								</td>
								<td>b010</td>
								<td>
									<input type="hidden" name="board_table[9]" value="sorigyeol">
									<a href="#">sorigyeol</a>
								</td>
								<td>
									<label for="bo_subject_9" class="sound_only">게시판 제목<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="bo_subject[9]" value="notice" id="bo_subject_9" required="" class="required tbl_input bo_subject full_input" size="10">
								</td>
								<td class="td_numsmall">
									<label for="bo_use_search_9" class="sound_only">검색<br>사용</label>
									<input type="checkbox" name="bo_use_search[9]" value="1" id="bo_use_search_9" checked="">
								</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/board')?>/boardform?w=u&amp;bo_table=sorigyeol&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03">수정</a>
									<a href="#" class="board_copy btn btn_02">삭제</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_chk">
									<label for="chk_10" class="sound_only">테스트트</label>
									<input type="checkbox" name="chk[]" value="10" id="chk_10">
								</td>
								<td>b012</td>
								<td>
									<input type="hidden" name="board_table[10]" value="test22323">
									<a href="#">test22323</a>
								</td>
								<td>
									<label for="bo_subject_10" class="sound_only">게시판 제목<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="bo_subject[10]" value="테스트트" id="bo_subject_10" required="" class="required tbl_input bo_subject full_input" size="10">
								</td>
								<td class="td_numsmall">
									<label for="bo_use_search_10" class="sound_only">검색<br>사용</label>
									<input type="checkbox" name="bo_use_search[10]" value="1" id="bo_use_search_10" checked="">
								</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/board')?>/boardform?w=u&amp;bo_table=test22323&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03">수정</a>
									<a href="#" class="board_copy btn btn_02">삭제</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="btn_fixed_top">
					<input type="submit" name="act_button" value="선택수정" class="btn_02 btn">
				</div>
			</form>
		</div>
	</div> 
</div>