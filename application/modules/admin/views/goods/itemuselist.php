<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">사용후기</h1>
		<div class="container_wr">
			<div class="local_ov01 local_ov">
				<a href="#" class="ov_listall">전체목록</a>
				<span class="btn_ov01">
					<span class="ov_txt">전체 후기내역</span>
					<span class="ov_num">206건</span>
				</span>
			</div>
			<form name="flist" class="local_sch01 local_sch">
				<input type="hidden" name="page" value="1">
				<input type="hidden" name="save_stx" value="">
				<label for="sca" class="sound_only">분류선택</label>
				<select name="sca" id="sca">
					<option value="">전체분류</option>
					<option value="20">TOP/PANTS</option>
					<option value="2010">&nbsp;&nbsp;&nbsp;TOP</option>
					<option value="201010">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;셔츠</option>
					<option value="20101010">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;체크/슬림</option>
					<option value="2010101010">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;체크</option>
					<option value="2010101020">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;슬림</option>
					<option value="20101020">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;드레스셔츠</option>
					<option value="201020">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;티</option>
					<option value="2020">&nbsp;&nbsp;&nbsp;PANTS</option>
					<option value="30">테스트</option>
				</select>
				<label for="sfl" class="sound_only">검색대상</label>
				<select name="sfl" id="sfl">
					<option value="it_name">상품명</option>
					<option value="a.it_id">상품코드</option>
					<option value="is_name">이름</option>
				</select>
				<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
				<input type="text" name="stx" id="stx" value="" required="" class="frm_input required">
				<input type="submit" value="검색" class="btn_submit">
			</form>
			<form name="fitemuselist" method="post" autocomplete="off">
				<input type="hidden" name="sca" value="">
				<input type="hidden" name="sst" value="is_id">
				<input type="hidden" name="sod" value="desc">
				<input type="hidden" name="sfl" value="a.it_name">
				<input type="hidden" name="stx" value="">
				<input type="hidden" name="page" value="1">
				<div class="tbl_head01 tbl_wrap" id="itemuselist">
					<table>
						<caption>사용후기 목록</caption>
						<thead>
							<tr>
								<th scope="col">
									<label for="chkall" class="sound_only">사용후기 전체</label>
									<input type="checkbox" name="chkall" value="1" id="chkall" onclick="check_all(this.form)">
								</th>
								<th scope="col"><a href="#">상품명</a></th>
								<th scope="col"><a href="#">이름</a></th>
								<th scope="col"><a href="#">제목</a></th>
								<th scope="col"><a href="#">평점</a></th>
								<th scope="col"><a href="#">확인</a></th>
								<th scope="col">관리</th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg0">
								<td class="td_chk">
									<label for="chk_0" class="sound_only">테스트 사용후기</label>
									<input type="checkbox" name="chk[]" value="0" id="chk_0">
									<input type="hidden" name="is_id[0]" value="243">
									<input type="hidden" name="it_id[0]" value="77777">
								</td>
								<td class="td_left"><a href="#">올림푸스 E-PL8 14-42mm EZ Kit</a></td>
								<td class="td_name">
									<span class="sv_wrap">
										<a href="#" class="sv_member" title="김민철 자기소개" target="_blank" rel="nofollow"><span class="profile_img"></span> 김민철</a>
										<span class="sv">
											<a href="#">쪽지보내기</a>
											<a href="#">메일보내기</a>
											<a href="#">자기소개</a>
											<a href="#" class="link_new_page">전체게시물</a>
										</span>
										<noscript class="sv_nojs">
											<span class="sv">
												<a href="#">쪽지보내기</a>
												<a href="#">메일보내기</a>
												<a href="#">자기소개</a>
												<a href="#" class="link_new_page">전체게시물</a>
											</span>
										</noscript>
									</span>
								</td>
								<td class="sit_use_subject td_left">
									<a href="#" class="use_href">테스트<span class="tit_op">열기</span></a>
									<div id="use_div0" class="use_div" style="display:none;">
										<p>ㅁ</p>
									</div>
								</td>
								<td class="td_select">
									<label for="score_0" class="sound_only">평점</label>
									<select name="is_score[0]" id="score_0">
										<option value="5">매우만족</option>
										<option value="4">만족</option>
										<option value="3">보통</option>
										<option value="2">불만</option>
										<option value="1" selected="selected">매우불만</option>
									</select>
								</td>
								<td class="td_chk2">
									<label for="confirm_0" class="sound_only">확인</label>
									<input type="checkbox" name="is_confirm[0]" checked="" value="1" id="confirm_0">
								</td>
								<td class="td_mng td_mng_s">
									<a href="<?=base_url('/admin/goods')?>/itemuseform?w=u&amp;is_id=243&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=&amp;sca=&amp;save_stx=" class="btn btn_03"><span class="sound_only">테스트 </span>수정</a>
								</td>
							</tr> 
						</tbody>
					</table>
				</div>
				<div class="btn_fixed_top">
					<input type="submit" name="act_button" value="선택수정" class="btn btn_02">
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
		</div>
	</div>
</div>