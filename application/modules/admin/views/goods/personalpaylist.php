<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">개인결제 관리</h1>
		<div class="container_wr">
			<div class="local_ov01 local_ov">
				<span class="btn_ov01"><span class="ov_txt">전체 </span><span class="ov_num"> 175건 </span></span>
			</div>
			<form name="fsearch" id="fsearch" class="local_sch01 local_sch" method="get">
				<select name="sfl" title="검색대상">
					<option value="pp_id">개인결제번호</option>
					<option value="pp_name">이름</option>
					<option value="od_id">주문번호</option>
				</select>
				<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
				<input type="text" name="stx" value="" id="stx" required="" class="required frm_input">
				<input type="submit" class="btn_submit" value="검색">
			</form>
			<form name="fpersonalpaylist" id="fpersonalpaylist" method="post">
				<input type="hidden" name="sst" value="pp_id">
				<input type="hidden" name="sod" value="desc">
				<input type="hidden" name="sfl" value="">
				<input type="hidden" name="stx" value="">
				<input type="hidden" name="page" value="1">
				<input type="hidden" name="token" value="">
				<div class="tbl_head01 tbl_wrap">
					<table>
						<caption>개인결제 관리 목록</caption>
						<thead>
							<tr>
								<th scope="col">
									<label for="chkall" class="sound_only">개인결제 전체</label>
									<input type="checkbox" name="chkall" value="1" id="chkall" onclick="check_all(this.form)">
								</th>
								<th scope="col">제목</th>
								<th scope="col"><a href="#">주문번호</a></th>
								<th scope="col">주문금액</th>
								<th scope="col">입금금액</th>
								<th scope="col">미수금액</th>
								<th scope="col">입금방법</th>
								<th scope="col"><a href="#">입금일</a></th>
								<th scope="col">사용</th>
								<th scope="col">관리</th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg0">
								<td class="td_chk">
									<input type="hidden" id="pp_id_0" name="pp_id[0]" value="2018072517173435">
									<input type="checkbox" id="chk_0" name="chk[]" value="0" title="내역선택">
								</td>
								<td class="td_left">test</td>
								<td class="td_odrnum3">&nbsp;</td>
								<td class="td_numsum">50,000</td>
								<td class="td_numincome">0</td>
								<td class="td_numrdy">50,000</td>
								<td class="td_payby"></td>
								<td class="td_date"></td>
								<td class="td_boolean">예</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/personalpayform?w=u&amp;pp_id=2018072517173435&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018072517173435 </span>수정</a>									
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_chk">
									<input type="hidden" id="pp_id_1" name="pp_id[1]" value="2018071712512399">
									<input type="checkbox" id="chk_1" name="chk[]" value="1" title="내역선택">
								</td>
								<td class="td_left">15mm 40</td>
								<td class="td_odrnum3">&nbsp;</td>
								<td class="td_numsum">110,000</td>
								<td class="td_numincome">110,000</td>
								<td class="td_numrdy">0</td>
								<td class="td_payby">가상계좌</td>
								<td class="td_date">18-07-18</td>
								<td class="td_boolean">아니오</td>
								<td class="td_mng td_mng_m">
									<a href="#" class="btn btn_03"><span class="sound_only">2018071712512399 </span>수정</a>								
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_chk">
									<input type="hidden" id="pp_id_2" name="pp_id[2]" value="2018052316460166">
									<input type="checkbox" id="chk_2" name="chk[]" value="2" title="내역선택">
								</td>
								<td class="td_left">55555555555</td>
								<td class="td_odrnum3">&nbsp;</td>
								<td class="td_numsum">120,000</td>
								<td class="td_numincome">0</td>
								<td class="td_numrdy">120,000</td>
								<td class="td_payby">가상계좌</td>
								<td class="td_date"></td>
								<td class="td_boolean">예</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/personalpayform?w=u&amp;pp_id=2018052316460166&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018052316460166 </span>수정</a>									
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_chk">
									<input type="hidden" id="pp_id_3" name="pp_id[3]" value="2018042515592333">
									<input type="checkbox" id="chk_3" name="chk[]" value="3" title="내역선택">
								</td>
								<td class="td_left">테스트</td>
								<td class="td_odrnum3">&nbsp;</td>
								<td class="td_numsum">5,000</td>
								<td class="td_numincome">0</td>
								<td class="td_numrdy">5,000</td>
								<td class="td_payby">가상계좌</td>
								<td class="td_date"></td>
								<td class="td_boolean">예</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/personalpayform?w=u&amp;pp_id=2018042515592333&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018042515592333 </span>수정</a>									
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_chk">
									<input type="hidden" id="pp_id_4" name="pp_id[4]" value="2018042514194101">
									<input type="checkbox" id="chk_4" name="chk[]" value="4" title="내역선택">
								</td>
								<td class="td_left">111</td>
								<td class="td_odrnum3">&nbsp;</td>
								<td class="td_numsum">1,000</td>
								<td class="td_numincome">0</td>
								<td class="td_numrdy">1,000</td>
								<td class="td_payby">가상계좌</td>
								<td class="td_date"></td>
								<td class="td_boolean">예</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/personalpayform?w=u&amp;pp_id=2018042514194101&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018042514194101 </span>수정</a>									
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_chk">
									<input type="hidden" id="pp_id_5" name="pp_id[5]" value="2018040410290112">
									<input type="checkbox" id="chk_5" name="chk[]" value="5" title="내역선택">
								</td>
								<td class="td_left">백두산</td>
								<td class="td_odrnum3">&nbsp;</td>
								<td class="td_numsum">700</td>
								<td class="td_numincome">55,000</td>
								<td class="td_numrdy">-54,300</td>
								<td class="td_payby">신용카드</td>
								<td class="td_date"></td>
								<td class="td_boolean">예</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/personalpayform?w=u&amp;pp_id=2018040410290112&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018040410290112 </span>수정</a>									
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_chk">
									<input type="hidden" id="pp_id_6" name="pp_id[6]" value="2018033011352607">
									<input type="checkbox" id="chk_6" name="chk[]" value="6" title="내역선택">
								</td>
								<td class="td_left">ㅇㅇㅇ</td>
								<td class="td_odrnum3">&nbsp;</td>
								<td class="td_numsum">1,111</td>
								<td class="td_numincome">0</td>
								<td class="td_numrdy">1,111</td>
								<td class="td_payby">가상계좌</td>
								<td class="td_date"></td>
								<td class="td_boolean">예</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/personalpayform?w=u&amp;pp_id=2018033011352607&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018033011352607 </span>수정</a>									
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_chk">
									<input type="hidden" id="pp_id_7" name="pp_id[7]" value="2018032809563046">
									<input type="checkbox" id="chk_7" name="chk[]" value="7" title="내역선택">
								</td>
								<td class="td_left">11111</td>
								<td class="td_odrnum3">&nbsp;</td>
								<td class="td_numsum">1</td>
								<td class="td_numincome">0</td>
								<td class="td_numrdy">1</td>
								<td class="td_payby"></td>
								<td class="td_date"></td>
								<td class="td_boolean">예</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/personalpayform?w=u&amp;pp_id=2018032809563046&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018032809563046 </span>수정</a>									
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_chk">
									<input type="hidden" id="pp_id_8" name="pp_id[8]" value="2018032110492373">
									<input type="checkbox" id="chk_8" name="chk[]" value="8" title="내역선택">
								</td>
								<td class="td_left">tteest</td>
								<td class="td_odrnum3">&nbsp;</td>
								<td class="td_numsum">130,000</td>
								<td class="td_numincome">0</td>
								<td class="td_numrdy">130,000</td>
								<td class="td_payby"></td>
								<td class="td_date"></td>
								<td class="td_boolean">예</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/personalpayform?w=u&amp;pp_id=2018032110492373&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018032110492373 </span>수정</a>									
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_chk">
									<input type="hidden" id="pp_id_9" name="pp_id[9]" value="2018030510053123">
									<input type="checkbox" id="chk_9" name="chk[]" value="9" title="내역선택">
								</td>
								<td class="td_left">ㅅㅅㅅㅅ</td>
								<td class="td_odrnum3">&nbsp;</td>
								<td class="td_numsum">150,000</td>
								<td class="td_numincome">111,111</td>
								<td class="td_numrdy">38,889</td>
								<td class="td_payby"></td>
								<td class="td_date"></td>
								<td class="td_boolean">예</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/personalpayform?w=u&amp;pp_id=2018030510053123&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018030510053123 </span>수정</a>									
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_chk">
									<input type="hidden" id="pp_id_10" name="pp_id[10]" value="2018020915005290">
									<input type="checkbox" id="chk_10" name="chk[]" value="10" title="내역선택">
								</td>
								<td class="td_left">홍서방</td>
								<td class="td_odrnum3">&nbsp;</td>
								<td class="td_numsum">15,000</td>
								<td class="td_numincome">0</td>
								<td class="td_numrdy">15,000</td>
								<td class="td_payby">가상계좌</td>
								<td class="td_date"></td>
								<td class="td_boolean">예</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/personalpayform?w=u&amp;pp_id=2018020915005290&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018020915005290 </span>수정</a>									
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_chk">
									<input type="hidden" id="pp_id_11" name="pp_id[11]" value="2018011715032237">
									<input type="checkbox" id="chk_11" name="chk[]" value="11" title="내역선택">
								</td>
								<td class="td_left">TH-블락체크 셔츠-그레이2 금액 확정</td>
								<td class="td_odrnum3"><a href="./orderform.php?od_id=2018011711293484" target="_blank">2018011711293484</a></td>
								<td class="td_numsum">30,000</td>
								<td class="td_numincome">0</td>
								<td class="td_numrdy">30,000</td>
								<td class="td_payby">신용카드</td>
								<td class="td_date">18-02-03</td>
								<td class="td_boolean">예</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/personalpayform?w=u&amp;pp_id=2018011715032237&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018011715032237 </span>수정</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_chk">
									<input type="hidden" id="pp_id_12" name="pp_id[12]" value="2018011319380805">
									<input type="checkbox" id="chk_12" name="chk[]" value="12" title="내역선택">
								</td>
								<td class="td_left">박보검님 개인결제</td>
								<td class="td_odrnum3">&nbsp;</td>
								<td class="td_numsum">50,000</td>
								<td class="td_numincome">0</td>
								<td class="td_numrdy">50,000</td>
								<td class="td_payby">가상계좌</td>
								<td class="td_date"></td>
								<td class="td_boolean">예</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/personalpayform?w=u&amp;pp_id=2018011319380805&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018011319380805 </span>수정</a>									
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_chk">
									<input type="hidden" id="pp_id_13" name="pp_id[13]" value="2018011319371597">
									<input type="checkbox" id="chk_13" name="chk[]" value="13" title="내역선택">
								</td>
								<td class="td_left">정우성님</td>
								<td class="td_odrnum3">&nbsp;</td>
								<td class="td_numsum">50,000</td>
								<td class="td_numincome">0</td>
								<td class="td_numrdy">50,000</td>
								<td class="td_payby">가상계좌</td>
								<td class="td_date"></td>
								<td class="td_boolean">예</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/personalpayform?w=u&amp;pp_id=2018011319371597&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018011319371597 </span>수정</a>									
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_chk">
									<input type="hidden" id="pp_id_14" name="pp_id[14]" value="2017122610454758">
									<input type="checkbox" id="chk_14" name="chk[]" value="14" title="내역선택">
								</td>
								<td class="td_left">testd</td>
								<td class="td_odrnum3">&nbsp;</td>
								<td class="td_numsum">100,000</td>
								<td class="td_numincome">0</td>
								<td class="td_numrdy">100,000</td>
								<td class="td_payby">무통장</td>
								<td class="td_date"></td>
								<td class="td_boolean">예</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/personalpayform?w=u&amp;pp_id=2017122610454758&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2017122610454758 </span>수정</a>									
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="btn_fixed_top">
					<input type="submit" name="act_button" value="선택삭제" class="btn btn_02">
					<a href="<?=base_url('/admin/goods')?>/personalpayform" id="personalpay_add" class="btn btn_01">개인결제 추가</a>
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