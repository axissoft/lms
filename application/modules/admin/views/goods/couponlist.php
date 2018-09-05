<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">쿠폰관리</h1>
		<div class="container_wr"><div class="local_ov">
			<span class="btn_ov01"><span class="ov_txt">전체 </span><span class="ov_num"> 2,429 개</span></span>
		</div>
		<form name="fsearch" id="fsearch" class="local_sch01 local_sch" method="get">
			<select name="sfl" title="검색대상">
				<option value="mb_id">회원아이디</option>
				<option value="cp_subject">쿠폰이름</option>
				<option value="cp_id">쿠폰코드</option>
			</select>
			<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
			<input type="text" name="stx" value="" id="stx" required="" class="required frm_input">
			<input type="submit" class="btn_submit" value="검색">
		</form>
		<form name="fcouponlist" id="fcouponlist" method="post">
			<input type="hidden" name="sst" value="cp_no">
			<input type="hidden" name="sod" value="desc">
			<input type="hidden" name="sfl" value="">
			<input type="hidden" name="stx" value="">
			<input type="hidden" name="page" value="1">
			<input type="hidden" name="token" value="">
			<div class="tbl_head01 tbl_wrap">
				<table>
					<caption>쿠폰관리</caption>
					<thead>
						<tr>
							<th scope="col">
								<label for="chkall" class="sound_only">쿠폰 전체</label>
								<input type="checkbox" name="chkall" value="1" id="chkall" onclick="check_all(this.form)">
							</th>
							<th scope="col">쿠폰종류</th>
							<th scope="col">쿠폰코드</th>
							<th scope="col">쿠폰이름</th>
							<th scope="col">적용대상</th>
							<th scope="col"><a href="#">회원아이디</a></th>
							<th scope="col"><a href="#">사용기한</a></th>
							<th scope="col">사용회수</th>
							<th scope="col">관리</th>
						</tr>
					</thead>
					<tbody>
						<tr class="bg0">
							<td class="td_chk">
								<input type="hidden" id="cp_id_0" name="cp_id[0]" value="Z7P7-HGDA-783N-DC1T">
								<input type="checkbox" id="chk_0" name="chk[]" value="0" title="내역선택">
							</td>
							<td>주문금액할인</td>
							<td>Z7P7-HGDA-783N-DC1T</td>
							<td class="td_left">신규 회원가입 축하 쿠폰</td>
							<td>주문금액</td>
							<td class="td_name sv_use"><div>aasddfg1235</div></td>
							<td class="td_datetime">18-08-01 ~ 18-08-07</td>
							<td class="td_cntsmall">0</td>
							<td class="td_mng td_mng_s">
								<a href="<?=base_url('/admin/goods')?>/couponform?w=u&amp;cp_id=Z7P7-HGDA-783N-DC1T&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">Z7P7-HGDA-783N-DC1T </span>수정</a>
							</td>
						</tr>
						<tr class="bg1">
							<td class="td_chk">
								<input type="hidden" id="cp_id_1" name="cp_id[1]" value="D9RK-122L-4VA3-6K8T">
								<input type="checkbox" id="chk_1" name="chk[]" value="1" title="내역선택">
							</td>
							<td>카테고리할인</td>
							<td>D9RK-122L-4VA3-6K8T</td>
							<td class="td_left">5천원 할인</td>
							<td>체크</td>
							<td class="td_name sv_use"><div>youngcart5</div></td>
							<td class="td_datetime">18-07-31 ~ 18-08-14</td>
							<td class="td_cntsmall">0</td>
							<td class="td_mng td_mng_s">
								<a href="<?=base_url('/admin/goods')?>/couponform?w=u&amp;cp_id=D9RK-122L-4VA3-6K8T&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">D9RK-122L-4VA3-6K8T </span>수정</a>
							</td>
						</tr>
						<tr class="bg0">
							<td class="td_chk">
								<input type="hidden" id="cp_id_2" name="cp_id[2]" value="GH5M-C535-T1YR-VYLN">
								<input type="checkbox" id="chk_2" name="chk[]" value="2" title="내역선택">
							</td>
							<td>주문금액할인</td>
							<td>GH5M-C535-T1YR-VYLN</td>
							<td class="td_left">신규 회원가입 축하 쿠폰</td>
							<td>주문금액</td>
							<td class="td_name sv_use"><div>test11111</div></td>
							<td class="td_datetime">18-07-31 ~ 18-08-06</td>
							<td class="td_cntsmall">0</td>
							<td class="td_mng td_mng_s">
								<a href="<?=base_url('/admin/goods')?>/couponform?w=u&amp;cp_id=GH5M-C535-T1YR-VYLN&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">GH5M-C535-T1YR-VYLN </span>수정</a>
							</td>
						</tr>
						<tr class="bg1">
							<td class="td_chk">
								<input type="hidden" id="cp_id_3" name="cp_id[3]" value="L8AD-M8YQ-MAV1-8X3X">
								<input type="checkbox" id="chk_3" name="chk[]" value="3" title="내역선택">
							</td>
							<td>카테고리할인</td>
							<td>L8AD-M8YQ-MAV1-8X3X</td>
							<td class="td_left">5천원 할인</td>
							<td>체크</td>
							<td class="td_name sv_use"><div>youngcart5</div></td>
							<td class="td_datetime">18-07-28 ~ 18-08-11</td>
							<td class="td_cntsmall">0</td>
							<td class="td_mng td_mng_s">
								<a href="<?=base_url('/admin/goods')?>/couponform?w=u&amp;cp_id=L8AD-M8YQ-MAV1-8X3X&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">L8AD-M8YQ-MAV1-8X3X </span>수정</a>
							</td>
						</tr>
						<tr class="bg0">
							<td class="td_chk">
								<input type="hidden" id="cp_id_4" name="cp_id[4]" value="MDE6-LDBV-53Y3-FVJR">
								<input type="checkbox" id="chk_4" name="chk[]" value="4" title="내역선택">
							</td>
							<td>배송비할인</td>
							<td>MDE6-LDBV-53Y3-FVJR</td>
							<td class="td_left">배송비 쿠폰</td>
							<td>배송비</td>
							<td class="td_name sv_use"><div>youngcart5</div></td>
							<td class="td_datetime">18-07-27 ~ 18-08-10</td>
							<td class="td_cntsmall">0</td>
							<td class="td_mng td_mng_s">
								<a href="<?=base_url('/admin/goods')?>/couponform?w=u&amp;cp_id=MDE6-LDBV-53Y3-FVJR&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">MDE6-LDBV-53Y3-FVJR </span>수정</a>
							</td>
						</tr>
						<tr class="bg1">
							<td class="td_chk">
								<input type="hidden" id="cp_id_5" name="cp_id[5]" value="2J83-M7UT-9PWF-8YJB">
								<input type="checkbox" id="chk_5" name="chk[]" value="5" title="내역선택">
							</td>
							<td>주문금액할인</td>
							<td>2J83-M7UT-9PWF-8YJB</td>
							<td class="td_left">신규 회원가입 축하 쿠폰</td>
							<td>주문금액</td>
							<td class="td_name sv_use"><div>flair</div></td>
							<td class="td_datetime">18-07-27 ~ 18-08-02</td>
							<td class="td_cntsmall">0</td>
							<td class="td_mng td_mng_s">
								<a href="<?=base_url('/admin/goods')?>/couponform?w=u&amp;cp_id=2J83-M7UT-9PWF-8YJB&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2J83-M7UT-9PWF-8YJB </span>수정</a>
							</td>
						</tr>
						<tr class="bg0">
							<td class="td_chk">
								<input type="hidden" id="cp_id_6" name="cp_id[6]" value="F6K2-YUSN-NV4C-CH7A">
								<input type="checkbox" id="chk_6" name="chk[]" value="6" title="내역선택">
							</td>
							<td>주문금액할인</td>
							<td>F6K2-YUSN-NV4C-CH7A</td>
							<td class="td_left">신규 회원가입 축하 쿠폰</td>
							<td>주문금액</td>
							<td class="td_name sv_use"><div>aurora92101</div></td>
							<td class="td_datetime">18-07-27 ~ 18-08-02</td>
							<td class="td_cntsmall">0</td>
							<td class="td_mng td_mng_s">
								<a href="<?=base_url('/admin/goods')?>/couponform?w=u&amp;cp_id=F6K2-YUSN-NV4C-CH7A&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">F6K2-YUSN-NV4C-CH7A </span>수정</a>
							</td>
						</tr>
						<tr class="bg1">
							<td class="td_chk">
								<input type="hidden" id="cp_id_7" name="cp_id[7]" value="7XSB-Y9WW-ZBFD-CB7C">
								<input type="checkbox" id="chk_7" name="chk[]" value="7" title="내역선택">
							</td>
							<td>주문금액할인</td>
							<td>7XSB-Y9WW-ZBFD-CB7C</td>
							<td class="td_left">테스트쿠폰</td>
							<td>주문금액</td>
							<td class="td_name sv_use"><div>전체회원</div></td>
							<td class="td_datetime">18-07-26 ~ 18-08-02</td>
							<td class="td_cntsmall">0</td>
							<td class="td_mng td_mng_s">
								<a href="<?=base_url('/admin/goods')?>/couponform?w=u&amp;cp_id=7XSB-Y9WW-ZBFD-CB7C&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">7XSB-Y9WW-ZBFD-CB7C </span>수정</a>
							</td>
						</tr>
						<tr class="bg0">
							<td class="td_chk">
								<input type="hidden" id="cp_id_8" name="cp_id[8]" value="692M-UMK9-K6R3-17SG">
								<input type="checkbox" id="chk_8" name="chk[]" value="8" title="내역선택">
							</td>
							<td>주문금액할인</td>
							<td>692M-UMK9-K6R3-17SG</td>
							<td class="td_left">3000원 할인쿠폰</td>
							<td>주문금액</td>
							<td class="td_name sv_use"><div>youngcart5</div></td>
							<td class="td_datetime">18-07-26 ~ 18-08-09</td>
							<td class="td_cntsmall">0</td>
							<td class="td_mng td_mng_s">
								<a href="<?=base_url('/admin/goods')?>/couponform?w=u&amp;cp_id=692M-UMK9-K6R3-17SG&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">692M-UMK9-K6R3-17SG </span>수정</a>
							</td>
						</tr>
						<tr class="bg1">
							<td class="td_chk">
								<input type="hidden" id="cp_id_9" name="cp_id[9]" value="34J6-RXSP-XRTD-CG7E">
								<input type="checkbox" id="chk_9" name="chk[]" value="9" title="내역선택">
							</td>
							<td>주문금액할인</td>
							<td>34J6-RXSP-XRTD-CG7E</td>
							<td class="td_left">신규 회원가입 축하 쿠폰</td>
							<td>주문금액</td>
							<td class="td_name sv_use"><div>ham0612</div></td>
							<td class="td_datetime">18-07-25 ~ 18-07-31</td>
							<td class="td_cntsmall">0</td>
							<td class="td_mng td_mng_s">
								<a href="<?=base_url('/admin/goods')?>/couponform?w=u&amp;cp_id=34J6-RXSP-XRTD-CG7E&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">34J6-RXSP-XRTD-CG7E </span>수정</a>
							</td>
						</tr>
						<tr class="bg0">
							<td class="td_chk">
								<input type="hidden" id="cp_id_10" name="cp_id[10]" value="FSXR-21BH-TLD2-DXTF">
								<input type="checkbox" id="chk_10" name="chk[]" value="10" title="내역선택">
							</td>
							<td>주문금액할인</td>
							<td>FSXR-21BH-TLD2-DXTF</td>
							<td class="td_left">신규 회원가입 축하 쿠폰</td>
							<td>주문금액</td>
							<td class="td_name sv_use"><div>asdfdsasaa</div></td>
							<td class="td_datetime">18-07-25 ~ 18-07-31</td>
							<td class="td_cntsmall">0</td>
							<td class="td_mng td_mng_s">
								<a href="<?=base_url('/admin/goods')?>/couponform?w=u&amp;cp_id=FSXR-21BH-TLD2-DXTF&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">FSXR-21BH-TLD2-DXTF </span>수정</a>
							</td>
						</tr>
						<tr class="bg1">
							<td class="td_chk">
								<input type="hidden" id="cp_id_11" name="cp_id[11]" value="MA5Y-YX2B-5Y74-SUBR">
								<input type="checkbox" id="chk_11" name="chk[]" value="11" title="내역선택">
							</td>
							<td>주문금액할인</td>
							<td>MA5Y-YX2B-5Y74-SUBR</td>
							<td class="td_left">3000원 할인쿠폰</td>
							<td>주문금액</td>
							<td class="td_name sv_use"><div>youngcart5</div></td>
							<td class="td_datetime">18-07-24 ~ 18-08-07</td>
							<td class="td_cntsmall">0</td>
							<td class="td_mng td_mng_s">
								<a href="<?=base_url('/admin/goods')?>/couponform?w=u&amp;cp_id=MA5Y-YX2B-5Y74-SUBR&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">MA5Y-YX2B-5Y74-SUBR </span>수정</a>
							</td>
						</tr>
						<tr class="bg0">
							<td class="td_chk">
								<input type="hidden" id="cp_id_12" name="cp_id[12]" value="43S1-FZRH-UJMB-6L29">
								<input type="checkbox" id="chk_12" name="chk[]" value="12" title="내역선택">
							</td>
							<td>주문금액할인</td>
							<td>43S1-FZRH-UJMB-6L29</td>
							<td class="td_left">신규 회원가입 축하 쿠폰</td>
							<td>주문금액</td>
							<td class="td_name sv_use"><div>edden1841</div></td>
							<td class="td_datetime">18-07-24 ~ 18-07-30</td>
							<td class="td_cntsmall">0</td>
							<td class="td_mng td_mng_s">
								<a href="<?=base_url('/admin/goods')?>/couponform?w=u&amp;cp_id=43S1-FZRH-UJMB-6L29&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">43S1-FZRH-UJMB-6L29 </span>수정</a>
							</td>
						</tr>
						<tr class="bg1">
							<td class="td_chk">
								<input type="hidden" id="cp_id_13" name="cp_id[13]" value="72EU-6TUA-WU66-3L3N">
								<input type="checkbox" id="chk_13" name="chk[]" value="13" title="내역선택">
							</td>
							<td>주문금액할인</td>
							<td>72EU-6TUA-WU66-3L3N</td>
							<td class="td_left">3000원 할인쿠폰</td>
							<td>주문금액</td>
							<td class="td_name sv_use"><div>youngcart5</div></td>
							<td class="td_datetime">18-07-24 ~ 18-08-07</td>
							<td class="td_cntsmall">0</td>
							<td class="td_mng td_mng_s">
								<a href="<?=base_url('/admin/goods')?>/couponform?w=u&amp;cp_id=72EU-6TUA-WU66-3L3N&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">72EU-6TUA-WU66-3L3N </span>수정</a>
							</td>
						</tr>
						<tr class="bg0">
							<td class="td_chk">
								<input type="hidden" id="cp_id_14" name="cp_id[14]" value="YMEP-QFFC-VMUP-QKPL">
								<input type="checkbox" id="chk_14" name="chk[]" value="14" title="내역선택">
							</td>
							<td>배송비할인</td>
							<td>YMEP-QFFC-VMUP-QKPL</td>
							<td class="td_left">배송비 쿠폰</td>
							<td>배송비</td>
							<td class="td_name sv_use"><div>youngcart5</div></td>
							<td class="td_datetime">18-07-24 ~ 18-08-07</td>
							<td class="td_cntsmall">0</td>
							<td class="td_mng td_mng_s">
								<a href="<?=base_url('/admin/goods')?>/couponform?w=u&amp;cp_id=YMEP-QFFC-VMUP-QKPL&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">YMEP-QFFC-VMUP-QKPL </span>수정</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="btn_fixed_top">
				<input type="submit" name="act_button" value="선택삭제" class="btn btn_02">
				<a href="<?=base_url('/admin/goods')?>/couponform" id="coupon_add" class="btn btn_01">쿠폰 추가</a> 
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