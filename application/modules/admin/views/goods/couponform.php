<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">쿠폰관리</h1>
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
			<form name="fcouponform" method="post">
				<input type="hidden" name="w" value="u">
				<input type="hidden" name="cp_id" value="Z7P7-HGDA-783N-DC1T">
				<input type="hidden" name="sst" value="">
				<input type="hidden" name="sod" value="">
				<input type="hidden" name="sfl" value="">
				<input type="hidden" name="stx" value="">
				<input type="hidden" name="page" value="0">
				<div class="tbl_frm01 tbl_wrap">
					<table>
						<caption>쿠폰관리</caption>
						<colgroup>
							<col class="grid_4">
							<col>
						</colgroup>
						<tbody>
							<tr>
								<th scope="row"><label for="cp_subject">쿠폰이름</label></th>
								<td>
									<input type="text" name="cp_subject" value="신규 회원가입 축하 쿠폰" id="cp_subject" required="" class="required frm_input" size="50">
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="cp_method">쿠폰종류</label></th>
								<td>
									<span class="frm_info">쿠폰 종류를 변경하시면 입력 서식도 일부 변경됩니다.</span>           <select name="cp_method" id="cp_method">
										<option value="0">개별상품할인</option>
										<option value="1">카테고리할인</option>
										<option value="2" selected="selected">주문금액할인</option>
										<option value="3">배송비할인</option>
									</select>
								</td>
							</tr>
							<tr id="tr_cp_target" style="display: none;">
								<th scope="row"><label for="cp_target">적용상품</label></th>
								<td>
									<input type="text" name="cp_target" value="" id="cp_target" class="frm_input">
									<button type="button" id="sch_target" class="btn_frmline">상품검색</button>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="mb_id">회원아이디</label></th>
								<td>
									<input type="text" name="mb_id" value="aasddfg1235" id="mb_id" class="frm_input">
									<a id="sch_member" class="btn_frmline" href="couponmember.php" target="_blank">회원검색</a>
									<input type="checkbox" name="chk_all_mb" id="chk_all_mb" value="1">
									<label for="chk_all_mb">전체회원</label>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="cp_start">사용시작일</label></th>
								<td>
									<span class="frm_info">입력 예: 2018-08-01</span>            <input type="text" name="cp_start" value="2018-08-01" id="cp_start" required="" class="frm_input required hasDatepicker">
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="cp_end">사용종료일</label></th>
								<td>
									<span class="frm_info">입력 예: 2018-08-01</span>            <input type="text" name="cp_end" value="2018-08-07" id="cp_end" required="" class="frm_input required hasDatepicker">
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="cp_type">쿠폰타입</label></th>
								<td>
									<span class="frm_info">쿠폰 타입을 변경하시면 입력 서식도 일부 변경됩니다.</span>           <select name="cp_type" id="cp_type">
										<option value="0" selected="selected">정액할인(원)</option>
										<option value="1">정률할인(%)</option>
									</select>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="cp_price">할인금액</label></th>
								<td>
									<input type="text" name="cp_price" value="2000" id="cp_price" required="" class="frm_input required"> <span id="cp_price_unit">원</span>
								</td>
							</tr>
							<tr id="tr_cp_trunc" style="display: none;">
								<th scope="row"><label for="cp_trunc">절사금액</label></th>
								<td>
									<select name="cp_trunc" id="cp_trunc">
										<option value="1" selected="selected">1원단위</option>
										<option value="10">10원단위</option>
										<option value="100">100원단위</option>
										<option value="1000">1,000원단위</option>
									</select>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="cp_minimum">최소주문금액</label></th>
								<td>
									<input type="text" name="cp_minimum" value="30000" id="cp_minimum" class="frm_input"> 원
								</td>
							</tr>
							<tr id="tr_cp_maximum" style="display: none;">
								<th scope="row"><label for="cp_maximum">최대할인금액</label></th>
								<td>
									<input type="text" name="cp_maximum" value="0" id="cp_maximum" class="frm_input"> 원
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="btn_fixed_top">
					<a href="<?=base_url('/admin/goods')?>/couponlist" class="btn btn_02">목록</a>
					<input type="submit" value="확인" class="btn_submit btn" accesskey="s">
				</div>
			</form>
		</div>    
	</div>
</div>