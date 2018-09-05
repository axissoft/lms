<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">미완료주문</h1>
		<div class="container_wr">
			<div class="local_ov01 local_ov">
				<span class="btn_ov01"><span class="ov_txt">전체 </span><span class="ov_num">  1,370 건 </span></span> 
			</div>
			<form name="fsearch" id="fsearch" class="local_sch01 local_sch" method="get">
				<select name="sfl" title="검색대상">
					<option value="od_id">주문번호</option>
				</select>
				<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
				<input type="text" name="stx" value="" id="stx" required="" class="required frm_input">
				<input type="submit" class="btn_submit" value="검색">
			</form>
			<form name="finorderlist" id="finorderlist" method="post">
				<input type="hidden" name="sst" value="od_id">
				<input type="hidden" name="sod" value="desc">
				<input type="hidden" name="sfl" value="">
				<input type="hidden" name="stx" value="">
				<input type="hidden" name="page" value="1">
				<input type="hidden" name="token" value="">
				<div class="tbl_head01 tbl_wrap" id="inorderlist">
					<table>
						<caption>미완료주문 목록</caption>
						<thead>
							<tr>
								<th scope="col">
									<label for="chkall" class="sound_only">미완료주문 전체</label>
									<input type="checkbox" name="chkall" value="1" id="chkall" onclick="check_all(this.form)">
								</th>
								<th scope="col"><a href="#">주문번호</a></th>
								<th scope="col">PG</th>
								<th scope="col">주문자</th>
								<th scope="col">주문자전화</th>
								<th scope="col">받는분</th>
								<th scope="col">주문금액</th>
								<th scope="col">결제방법</th>
								<th scope="col">주문일시</th>
								<th scope="col">관리</th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg0">
								<td class="td_chk">
									<input type="hidden" id="od_id_0" name="od_id[0]" value="2018072617521045">
									<input type="checkbox" id="chk_0" name="chk[]" value="0" title="내역선택">
								</td>
								<td class="td_odrnum2">2018072617521045</td>
								<td class="td_center">KG이니시스</td>
								<td class="td_name">**********</td>
								<td class="td_center">**-****-****</td>
								<td class="td_name">**********</td>
								<td class="td_price">4,100</td>
								<td class="td_center">신용카드</td>
								<td class="td_time">2018-07-26 17:52:29</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/inorderform?od_id=2018072617521045&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018072617521045 </span>보기</a>
									<a href="#" class="btn btn_02"><span class="sound_only">2018072617521045 </span>삭제</a>
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_chk">
									<input type="hidden" id="od_id_1" name="od_id[1]" value="2018072614582543">
									<input type="checkbox" id="chk_1" name="chk[]" value="1" title="내역선택">
								</td>
								<td class="td_odrnum2">2018072614582543</td>
								<td class="td_center">KG이니시스</td>
								<td class="td_name">**********</td>
								<td class="td_center">**-****-****</td>
								<td class="td_name">**********</td>
								<td class="td_price">4,100</td>
								<td class="td_center">신용카드</td>
								<td class="td_time">2018-07-26 14:58:40</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/inorderform?od_id=2018072614582543&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018072614582543 </span>보기</a>
									<a href="#" class="btn btn_02"><span class="sound_only">2018072614582543 </span>삭제</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_chk">
									<input type="hidden" id="od_id_2" name="od_id[2]" value="2018072523320811">
									<input type="checkbox" id="chk_2" name="chk[]" value="2" title="내역선택">
								</td>
								<td class="td_odrnum2">2018072523320811</td>
								<td class="td_center">KG이니시스</td>
								<td class="td_name">**********</td>
								<td class="td_center">**-****-****</td>
								<td class="td_name">**********</td>
								<td class="td_price">0</td>
								<td class="td_center">신용카드</td>
								<td class="td_time">2018-07-25 23:32:18</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/inorderform?od_id=2018072523320811&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018072523320811 </span>보기</a>
									<a href="#" class="btn btn_02"><span class="sound_only">2018072523320811 </span>삭제</a>
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_chk">
									<input type="hidden" id="od_id_3" name="od_id[3]" value="2018072523311983">
									<input type="checkbox" id="chk_3" name="chk[]" value="3" title="내역선택">
								</td>
								<td class="td_odrnum2">2018072523311983</td>
								<td class="td_center">KCP</td>
								<td class="td_name">**********</td>
								<td class="td_center">**-****-****</td>
								<td class="td_name">**********</td>
								<td class="td_price">33,000</td>
								<td class="td_center">신용카드</td>
								<td class="td_time">2018-07-25 23:31:32</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/inorderform?od_id=2018072523311983&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018072523311983 </span>보기</a>
									<a href="#" class="btn btn_02"><span class="sound_only">2018072523311983 </span>삭제</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_chk">
									<input type="hidden" id="od_id_4" name="od_id[4]" value="2018072517144340">
									<input type="checkbox" id="chk_4" name="chk[]" value="4" title="내역선택">
								</td>
								<td class="td_odrnum2">2018072517144340</td>
								<td class="td_center">KCP</td>
								<td class="td_name">**********</td>
								<td class="td_center">**-****-****</td>
								<td class="td_name">**********</td>
								<td class="td_price">34,000</td>
								<td class="td_center">신용카드</td>
								<td class="td_time">2018-07-25 17:14:54</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/inorderform?od_id=2018072517144340&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018072517144340 </span>보기</a>
									<a href="#" class="btn btn_02"><span class="sound_only">2018072517144340 </span>삭제</a>
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_chk">
									<input type="hidden" id="od_id_5" name="od_id[5]" value="2018072517141703">
									<input type="checkbox" id="chk_5" name="chk[]" value="5" title="내역선택">
								</td>
								<td class="td_odrnum2">2018072517141703</td>
								<td class="td_center">KCP</td>
								<td class="td_name">**********</td>
								<td class="td_center">**-****-****</td>
								<td class="td_name">**********</td>
								<td class="td_price">34,000</td>
								<td class="td_center">신용카드</td>
								<td class="td_time">2018-07-25 17:14:34</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/inorderform?od_id=2018072517141703&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018072517141703 </span>보기</a>
									<a href="#" class="btn btn_02"><span class="sound_only">2018072517141703 </span>삭제</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_chk">
									<input type="hidden" id="od_id_6" name="od_id[6]" value="2018072511474542">
									<input type="checkbox" id="chk_6" name="chk[]" value="6" title="내역선택">
								</td>
								<td class="td_odrnum2">2018072511474542</td>
								<td class="td_center">KG이니시스</td>
								<td class="td_name">**********</td>
								<td class="td_center">**-****-****</td>
								<td class="td_name">**********</td>
								<td class="td_price">33,100</td>
								<td class="td_center">신용카드</td>
								<td class="td_time">2018-07-25 11:47:50</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/inorderform?od_id=2018072511474542&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018072511474542 </span>보기</a>
									<a href="#" class="btn btn_02"><span class="sound_only">2018072511474542 </span>삭제</a>
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_chk">
									<input type="hidden" id="od_id_7" name="od_id[7]" value="2018072511465465">
									<input type="checkbox" id="chk_7" name="chk[]" value="7" title="내역선택">
								</td>
								<td class="td_odrnum2">2018072511465465</td>
								<td class="td_center">KCP</td>
								<td class="td_name">**********</td>
								<td class="td_center">**-****-****</td>
								<td class="td_name">**********</td>
								<td class="td_price">33,100</td>
								<td class="td_center">lpay</td>
								<td class="td_time">2018-07-25 11:47:28</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/inorderform?od_id=2018072511465465&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018072511465465 </span>보기</a>
									<a href="#" class="btn btn_02"><span class="sound_only">2018072511465465 </span>삭제</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_chk">
									<input type="hidden" id="od_id_8" name="od_id[8]" value="2018072511020855">
									<input type="checkbox" id="chk_8" name="chk[]" value="8" title="내역선택">
								</td>
								<td class="td_odrnum2">2018072511020855</td>
								<td class="td_center">KG이니시스</td>
								<td class="td_name">**********</td>
								<td class="td_center">**-****-****</td>
								<td class="td_name">*******</td>
								<td class="td_price">5,100</td>
								<td class="td_center">계좌이체</td>
								<td class="td_time">2018-07-25 11:02:29</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/inorderform?od_id=2018072511020855&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018072511020855 </span>보기</a>
									<a href="#" class="btn btn_02"><span class="sound_only">2018072511020855 </span>삭제</a>
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_chk">
									<input type="hidden" id="od_id_9" name="od_id[9]" value="2018072403140864">
									<input type="checkbox" id="chk_9" name="chk[]" value="9" title="내역선택">
								</td>
								<td class="td_odrnum2">2018072403140864</td>
								<td class="td_center">KG이니시스</td>
								<td class="td_name">**********</td>
								<td class="td_center">**-****-****</td>
								<td class="td_name">**********</td>
								<td class="td_price">34,000</td>
								<td class="td_center">계좌이체</td>
								<td class="td_time">2018-07-24 03:15:18</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/inorderform?od_id=2018072403140864&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018072403140864 </span>보기</a>
									<a href="#" class="btn btn_02"><span class="sound_only">2018072403140864 </span>삭제</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_chk">
									<input type="hidden" id="od_id_10" name="od_id[10]" value="2018072317085242">
									<input type="checkbox" id="chk_10" name="chk[]" value="10" title="내역선택">
								</td>
								<td class="td_odrnum2">2018072317085242</td>
								<td class="td_center">KCP</td>
								<td class="td_name">**********</td>
								<td class="td_center">**-****-****</td>
								<td class="td_name">**********</td>
								<td class="td_price">183,900</td>
								<td class="td_center">가상계좌</td>
								<td class="td_time">2018-07-23 17:10:09</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/inorderform?od_id=2018072317085242&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018072317085242 </span>보기</a>
									<a href="#" class="btn btn_02"><span class="sound_only">2018072317085242 </span>삭제</a>
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_chk">
									<input type="hidden" id="od_id_11" name="od_id[11]" value="2018072316270551">
									<input type="checkbox" id="chk_11" name="chk[]" value="11" title="내역선택">
								</td>
								<td class="td_odrnum2">2018072316270551</td>
								<td class="td_center">KCP</td>
								<td class="td_name">**********</td>
								<td class="td_center">**-****-****</td>
								<td class="td_name">**********</td>
								<td class="td_price">183,900</td>
								<td class="td_center">간편결제</td>
								<td class="td_time">2018-07-23 17:08:15</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/inorderform?od_id=2018072316270551&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018072316270551 </span>보기</a>
									<a href="#" class="btn btn_02"><span class="sound_only">2018072316270551 </span>삭제</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_chk">
									<input type="hidden" id="od_id_12" name="od_id[12]" value="2018072316185234">
									<input type="checkbox" id="chk_12" name="chk[]" value="12" title="내역선택">
								</td>
								<td class="td_odrnum2">2018072316185234</td>
								<td class="td_center">KCP</td>
								<td class="td_name">**********</td>
								<td class="td_center">**-****-****</td>
								<td class="td_name">**********</td>
								<td class="td_price">183,900</td>
								<td class="td_center">휴대폰</td>
								<td class="td_time">2018-07-23 16:26:29</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/inorderform?od_id=2018072316185234&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018072316185234 </span>보기</a>
									<a href="#" class="btn btn_02"><span class="sound_only">2018072316185234 </span>삭제</a>
								</td>
							</tr>
							<tr class="bg1">
								<td class="td_chk">
									<input type="hidden" id="od_id_13" name="od_id[13]" value="2018072316181932">
									<input type="checkbox" id="chk_13" name="chk[]" value="13" title="내역선택">
								</td>
								<td class="td_odrnum2">2018072316181932</td>
								<td class="td_center">KCP</td>
								<td class="td_name">**********</td>
								<td class="td_center">**-****-****</td>
								<td class="td_name">**********</td>
								<td class="td_price">183,900</td>
								<td class="td_center">휴대폰</td>
								<td class="td_time">2018-07-23 16:18:32</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/inorderform?od_id=2018072316181932&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018072316181932 </span>보기</a>
									<a href="#" class="btn btn_02"><span class="sound_only">2018072316181932 </span>삭제</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_chk">
									<input type="hidden" id="od_id_14" name="od_id[14]" value="2018072316000822">
									<input type="checkbox" id="chk_14" name="chk[]" value="14" title="내역선택">
								</td>
								<td class="td_odrnum2">2018072316000822</td>
								<td class="td_center">KCP</td>
								<td class="td_name">**********</td>
								<td class="td_center">**-****-****</td>
								<td class="td_name">**********</td>
								<td class="td_price">34,100</td>
								<td class="td_center">간편결제</td>
								<td class="td_time">2018-07-23 16:00:17</td>
								<td class="td_mng td_mng_m">
									<a href="<?=base_url('/admin/goods')?>/inorderform?od_id=2018072316000822&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_03"><span class="sound_only">2018072316000822 </span>보기</a>
									<a href="#" class="btn btn_02"><span class="sound_only">2018072316000822 </span>삭제</a>
								</td>
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
		</div>    
	</div>
</div>