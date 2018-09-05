<?php 
$sub_menu="400";
include_once("header.php")
?>
<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">주문내역</h1>
		<div class="container_wr">
			<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
			<script>
				jQuery(function($){
					$.datepicker.regional["ko"] = {
						closeText: "닫기",
						prevText: "이전달",
						nextText: "다음달",
						currentText: "오늘",
						monthNames: ["1월(JAN)","2월(FEB)","3월(MAR)","4월(APR)","5월(MAY)","6월(JUN)", "7월(JUL)","8월(AUG)","9월(SEP)","10월(OCT)","11월(NOV)","12월(DEC)"],
						monthNamesShort: ["1월","2월","3월","4월","5월","6월", "7월","8월","9월","10월","11월","12월"],
						dayNames: ["일","월","화","수","목","금","토"],
						dayNamesShort: ["일","월","화","수","목","금","토"],
						dayNamesMin: ["일","월","화","수","목","금","토"],
						weekHeader: "Wk",
						dateFormat: "yymmdd",
						firstDay: 0,
						isRTL: false,
						showMonthAfterYear: true,
						yearSuffix: ""
					};
					$.datepicker.setDefaults($.datepicker.regional["ko"]);
				});
			</script>
			<div class="local_ov01 local_ov">
				<a href="http://g2016.digitree.co.kr/as_admin/orderlist.php" class="ov_listall">전체목록</a>
				<span class="btn_ov01">
					<span class="ov_txt">전체 주문내역</span>
					<span class="ov_num"> 2,660건</span>
				</span>
			</div>
			<form name="frmorderlist" class="local_sch01 local_sch">
				<input type="hidden" name="doc" value="">
				<input type="hidden" name="sort1" value="od_id">
				<input type="hidden" name="sort2" value="desc">
				<input type="hidden" name="page" value="1">
				<input type="hidden" name="save_search" value="">
				<label for="sel_field" class="sound_only">검색대상</label>
				<select name="sel_field" id="sel_field">
					<option value="od_id" selected="selected">주문번호</option>
					<option value="mb_id">회원 ID</option>
					<option value="od_name">주문자</option>
					<option value="od_tel">주문자전화</option>
					<option value="od_hp">주문자핸드폰</option>
					<option value="od_b_name">받는분</option>
					<option value="od_b_tel">받는분전화</option>
					<option value="od_b_hp">받는분핸드폰</option>
					<option value="od_deposit_name">입금자</option>
					<option value="od_invoice">운송장번호</option>
				</select>
				<label for="search" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
				<input type="text" name="search" value="" id="search" required="" class="required frm_input" autocomplete="off">
				<input type="submit" value="검색" class="btn_submit">
			</form>
			<form class="local_sch03 local_sch">
				<div>
					<strong>주문상태</strong>
					<input type="radio" name="od_status" value="" id="od_status_all" checked="checked">
					<label for="od_status_all">전체</label>
					<input type="radio" name="od_status" value="주문" id="od_status_odr">
					<label for="od_status_odr">주문</label>
					<input type="radio" name="od_status" value="입금" id="od_status_income">
					<label for="od_status_income">입금</label>
					<input type="radio" name="od_status" value="준비" id="od_status_rdy">
					<label for="od_status_rdy">준비</label>
					<input type="radio" name="od_status" value="배송" id="od_status_dvr">
					<label for="od_status_dvr">배송</label>
					<input type="radio" name="od_status" value="완료" id="od_status_done">
					<label for="od_status_done">완료</label>
					<input type="radio" name="od_status" value="전체취소" id="od_status_cancel">
					<label for="od_status_cancel">전체취소</label>
					<input type="radio" name="od_status" value="부분취소" id="od_status_pcancel">
					<label for="od_status_pcancel">부분취소</label>
				</div>
				<div>
					<strong>결제수단</strong>
					<input type="radio" name="od_settle_case" value="" id="od_settle_case01" checked="checked">
					<label for="od_settle_case01">전체</label>
					<input type="radio" name="od_settle_case" value="무통장" id="od_settle_case02">
					<label for="od_settle_case02">무통장</label>
					<input type="radio" name="od_settle_case" value="가상계좌" id="od_settle_case03">
					<label for="od_settle_case03">가상계좌</label>
					<input type="radio" name="od_settle_case" value="계좌이체" id="od_settle_case04">
					<label for="od_settle_case04">계좌이체</label>
					<input type="radio" name="od_settle_case" value="휴대폰" id="od_settle_case05">
					<label for="od_settle_case05">휴대폰</label>
					<input type="radio" name="od_settle_case" value="신용카드" id="od_settle_case06">
					<label for="od_settle_case06">신용카드</label>
					<input type="radio" name="od_settle_case" value="간편결제" id="od_settle_case07">
					<label for="od_settle_case07">PG간편결제</label>
					<input type="radio" name="od_settle_case" value="KAKAOPAY" id="od_settle_case08">
					<label for="od_settle_case08">KAKAOPAY</label>
				</div>
				<div>
					<strong>기타선택</strong>
					<input type="checkbox" name="od_misu" value="Y" id="od_misu01">
					<label for="od_misu01">미수금</label>
					<input type="checkbox" name="od_cancel_price" value="Y" id="od_misu02">
					<label for="od_misu02">반품,품절</label>
					<input type="checkbox" name="od_refund_price" value="Y" id="od_misu03">
					<label for="od_misu03">환불</label>
					<input type="checkbox" name="od_receipt_point" value="Y" id="od_misu04">
					<label for="od_misu04">포인트주문</label>
					<input type="checkbox" name="od_coupon" value="Y" id="od_misu05">
					<label for="od_misu05">쿠폰</label>
				</div>
				<div class="sch_last">
					<strong>주문일자</strong>
					<input type="text" id="fr_date" name="fr_date" value="" class="frm_input hasDatepicker" size="10" maxlength="10"> ~
					<input type="text" id="to_date" name="to_date" value="" class="frm_input hasDatepicker" size="10" maxlength="10">
					<button type="button" onclick="javascript:set_date('오늘');">오늘</button>
					<button type="button" onclick="javascript:set_date('어제');">어제</button>
					<button type="button" onclick="javascript:set_date('이번주');">이번주</button>
					<button type="button" onclick="javascript:set_date('이번달');">이번달</button>
					<button type="button" onclick="javascript:set_date('지난주');">지난주</button>
					<button type="button" onclick="javascript:set_date('지난달');">지난달</button>
					<button type="button" onclick="javascript:set_date('전체');">전체</button>
					<input type="submit" value="검색" class="btn_submit">
				</div>
			</form>
			<form name="forderlist" id="forderlist" method="post" autocomplete="off">
				<input type="hidden" name="search_od_status" value="">
				<div class="tbl_head01 tbl_wrap">
					<table id="sodr_list">
						<caption>주문 내역 목록</caption>
						<thead>
							<tr>
								<th scope="col" rowspan="3">
									<label for="chkall" class="sound_only">주문 전체</label>
									<input type="checkbox" name="chkall" value="1" id="chkall" onclick="check_all(this.form)">
								</th>
								<th scope="col" id="th_ordnum" rowspan="2" colspan="2"><a href="#">주문번호</a></th>
								<th scope="col" id="th_odrer">주문자</th>
								<th scope="col" id="th_odrertel">주문자전화</th>
								<th scope="col" id="th_recvr">받는분</th>
								<th scope="col" rowspan="3">주문합계<br>선불배송비포함</th>
								<th scope="col" rowspan="3">입금합계</th>
								<th scope="col" rowspan="3">주문취소</th>
								<th scope="col" rowspan="3">쿠폰</th>
								<th scope="col" rowspan="3">미수금</th>
								<th scope="col" rowspan="3">보기</th>
							</tr>
							<tr>
								<th scope="col" id="th_odrid">회원ID</th>
								<th scope="col" id="th_odrcnt">주문상품수</th>
								<th scope="col" id="th_odrall">누적주문수</th>
							</tr>
							<tr>
								<th scope="col" id="odrstat">주문상태</th>
								<th scope="col" id="odrpay">결제수단</th>
								<th scope="col" id="delino">운송장번호</th>
								<th scope="col" id="delicom">배송회사</th>
								<th scope="col" id="delidate">배송일시</th>
							</tr>
						</thead>
						<tbody>
							<tr class="orderlist bg0cancel">
								<td rowspan="3" class="td_chk">
									<input type="hidden" name="od_id[0]" value="2018073020213491" id="od_id_0">
									<label for="chk_0" class="sound_only">주문번호 2018073020213491</label>
									<input type="checkbox" name="chk[]" value="0" id="chk_0">
								</td>
								<td headers="th_ordnum" class="td_odrnum2" rowspan="2" colspan="2">
									<a href="#" class="orderitem">20180730-20213491</a>
									<span class="list_test">테스트</span>
								</td>
								<td headers="th_odrer" class="td_name">
									<span class="sv_wrap">
										<a href="#" class="sv_member" title="" rel="nofollow"><span class="profile_img"></span> 액시스소프트</a>
										<span class="sv">
											<a href="#">쪽지보내기</a>
											<a href="#">메일보내기</a>
											<a href="#">자기소개</a>
											<a href="#" class="link_new_page">전체게시물</a>
										</span>
										<noscript class="sv_nojs"><span class="sv">
											<a href="#">쪽지보내기</a>
											<a href="#">메일보내기</a>
											<a href="#">자기소개</a>
											<a href="#" class="link_new_page">전체게시물</a>
										</span>
									</noscript>
								</span>
							</td>
							<td headers="th_odrertel" class="td_tel">02-3456-7890</td>
							<td headers="th_recvr" class="td_name"><a href="#">액시스소프트</a></td>
							<td rowspan="3" class="td_num td_numsum">34,000</td>
							<td rowspan="3" class="td_num_right">0</td>
							<td rowspan="3" class="td_numcancel1 td_num">34,000</td>
							<td rowspan="3" class="td_num_right">0</td>
							<td rowspan="3" class="td_num_right">0</td>
							<td rowspan="3" class="td_mng td_mng_s">
								<a href="#" class="mng_mod btn btn_02">
									<span class="sound_only">2018073020213491</span>보기
								</a>
							</td>
						</tr>
						<tr class="bg0cancel">
							<td headers="th_odrid">
								<a href="#">axissoft</a>
							</td>
							<td headers="th_odrcnt">1건</td>
							<td headers="th_odrall">2162건</td>
						</tr>
						<tr class="bg0cancel">
							<td headers="odrstat" class="odrstat">
								<input type="hidden" name="current_status[0]" value="취소">취소
							</td>
							<td headers="odrpay" class="odrpay">
								<input type="hidden" name="current_settle_case[0]" value="무통장">무통장
							</td>
							<td headers="delino" class="delino">-
							</td>
							<td headers="delicom">-
							</td>
							<td headers="delidate">-
							</td>
						</tr>
						<tr class="orderlist bg1">
							<td rowspan="3" class="td_chk">
								<input type="hidden" name="od_id[1]" value="2018073016532234" id="od_id_1">
								<label for="chk_1" class="sound_only">주문번호 2018073016532234</label>
								<input type="checkbox" name="chk[]" value="1" id="chk_1">
							</td>
							<td headers="th_ordnum" class="td_odrnum2" rowspan="2" colspan="2">
								<a href="#" class="orderitem">20180730-16532234</a>
								<span class="list_test">테스트</span>
							</td>
							<td headers="th_odrer" class="td_name">
								<span class="sv_wrap">
									<a href="#" class="sv_member" title="" rel="nofollow"><span class="profile_img"></span> 액시스소프트</a>
									<span class="sv">
										<a href="#">쪽지보내기</a>
										<a href="#">메일보내기</a>
										<a href="#">자기소개</a>
										<a href="#" class="link_new_page">전체게시물</a>
									</span>
									<noscript class="sv_nojs">
										<span class="sv">
											<a href="memo_form.php?me_recv_mb_id=axissoft">쪽지보내기</a>
											<a href="#">메일보내기</a>
											<a href="#">자기소개</a>
											<a href="#" class="link_new_page">전체게시물</a>
										</span>
									</noscript>
								</span>
							</td>
							<td headers="th_odrertel" class="td_tel">02-3456-7890</td>
							<td headers="th_recvr" class="td_name"><a href="#">액시스소프트</a></td>
							<td rowspan="3" class="td_num td_numsum">36,000</td>
							<td rowspan="3" class="td_num_right">0</td>
							<td rowspan="3" class="td_numcancel0 td_num">0</td>
							<td rowspan="3" class="td_num_right">0</td>
							<td rowspan="3" class="td_num_right">26,000</td>
							<td rowspan="3" class="td_mng td_mng_s">
								<a href="#" class="mng_mod btn btn_02">
									<span class="sound_only">2018073016532234 </span>보기
								</a>
							</td>
						</tr>
						<tr class="bg1">
							<td headers="th_odrid"><a href="#">axissoft</a></td>
							<td headers="th_odrcnt">1건</td>
							<td headers="th_odrall">2162건</td>
						</tr>
						<tr class="bg1">
							<td headers="odrstat" class="odrstat">
								<input type="hidden" name="current_status[1]" value="주문">주문
							</td>
							<td headers="odrpay" class="odrpay">
								<input type="hidden" name="current_settle_case[1]" value="무통장">무통장<br>포인트
							</td>
							<td headers="delino" class="delino">-
							</td>
							<td headers="delicom">-
							</td>
							<td headers="delidate">-
							</td>
						</tr>
						<tr class="orderlist bg0">
							<td rowspan="3" class="td_chk">
								<input type="hidden" name="od_id[2]" value="2018073015093868" id="od_id_2">
								<label for="chk_2" class="sound_only">주문번호 2018073015093868</label>
								<input type="checkbox" name="chk[]" value="2" id="chk_2">
							</td>
							<td headers="th_ordnum" class="td_odrnum2" rowspan="2" colspan="2">
								<a href="#" class="orderitem">20180730-15093868</a>
								<span class="list_test">테스트</span></td>
								<td headers="th_odrer" class="td_name">****</td>
								<td headers="th_odrertel" class="td_tel">***-****-****</td>
								<td headers="th_recvr" class="td_name"><a href="orderlist.php?sort1=od_id&amp;sort2=desc&amp;sel_field=od_b_name&amp;search=****">****</a></td>
								<td rowspan="3" class="td_num td_numsum">36,000</td>
								<td rowspan="3" class="td_num_right">0</td>
								<td rowspan="3" class="td_numcancel0 td_num">0</td>
								<td rowspan="3" class="td_num_right">0</td>
								<td rowspan="3" class="td_num_right">36,000</td>
								<td rowspan="3" class="td_mng td_mng_s">
									<a href="#" class="mng_mod btn btn_02"><span class="sound_only">2018073015093868 </span>보기</a>
								</td>
							</tr>
							<tr class="bg0">
								<td headers="th_odrid">
									비회원
								</td>
								<td headers="th_odrcnt">1건</td>
								<td headers="th_odrall">0건</td>
							</tr>
							<tr class="bg0">
								<td headers="odrstat" class="odrstat">
									<input type="hidden" name="current_status[2]" value="배송">배송</td>
									<td headers="odrpay" class="odrpay">
										<input type="hidden" name="current_settle_case[2]" value="무통장">무통장</td>
										<td headers="delino" class="delino">-</td>
										<td headers="delicom">-</td>
										<td headers="delidate">-</td>
									</tr>
								</tbody>
								<tfoot>
									<tr class="orderlist">
										<th scope="row" colspan="3">&nbsp;</th>
										<td>&nbsp;</td>
										<td>19건</td>
										<th scope="row">합 계</th>
										<td>1,582,400</td>
										<td>5,000</td>
										<td>433,000</td>
										<td>0</td>
										<td>1,128,500</td>
										<td></td>
									</tr>
								</tfoot>
							</table>
						</div>
						<div class="local_cmd01 local_cmd">
						</div>
						<div class="local_desc02 local_desc">
							<p>
								&lt;무통장&gt;인 경우에만 &lt;주문&gt;에서 &lt;입금&gt;으로 변경됩니다. 가상계좌는 입금시 자동으로 &lt;입금&gt;처리됩니다.<br>
								&lt;준비&gt;에서 &lt;배송&gt;으로 변경시 &lt;에스크로배송등록&gt;을 체크하시면 에스크로 주문에 한해 PG사에 배송정보가 자동 등록됩니다.<br>
								<strong>주의!</strong> 주문번호를 클릭하여 나오는 주문상세내역의 주소를 외부에서 조회가 가능한곳에 올리지 마십시오.
							</p>
						</div>
					</form>
					<nav class="pg_wrap">
						<span class="pg">
							<span class="sound_only">열린</span><strong class="pg_current">1</strong>
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
					<script>
						function set_date(today)
						{
							if (today == "오늘") {
								document.getElementById("fr_date").value = "2018-08-01";
								document.getElementById("to_date").value = "2018-08-01";
							} else if (today == "어제") {
								document.getElementById("fr_date").value = "2018-07-31";
								document.getElementById("to_date").value = "2018-07-31";
							} else if (today == "이번주") {
								document.getElementById("fr_date").value = "2018-07-29";
								document.getElementById("to_date").value = "2018-08-01";
							} else if (today == "이번달") {
								document.getElementById("fr_date").value = "2018-08-01";
								document.getElementById("to_date").value = "2018-08-01";
							} else if (today == "지난주") {
								document.getElementById("fr_date").value = "2018-07-22";
								document.getElementById("to_date").value = "2018-07-28";
							} else if (today == "지난달") {
								document.getElementById("fr_date").value = "2018-07-01";
								document.getElementById("to_date").value = "2018-07-31";
							} else if (today == "전체") {
								document.getElementById("fr_date").value = "";
								document.getElementById("to_date").value = "";
							}
						}
					</script>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include_once("footer.php")
?>