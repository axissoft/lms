<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">주문내역출력</h1>
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
			<div class="local_sch03 local_sch">
				<div>
					<form name="forderprint" autocomplete="off">
						<input type="hidden" name="case" value="1">
						<strong class="sch_long">기간별 출력</strong>
						<input type="radio" name="csv" value="xls" id="xls1">
						<label for="xls1">MS엑셀 XLS 데이터</label>
						<input type="radio" name="csv" value="csv" id="csv1">
						<label for="csv1">MS엑셀 CSV 데이터</label>
						<label for="ct_status_p" class="sound_only">출력대상</label>
						<select name="ct_status" id="ct_status_p">
							<option value="주문">주문</option>
							<option value="입금">입금</option>
							<option value="준비">준비</option>
							<option value="배송">배송</option>
							<option value="완료">완료</option>
							<option value="취소">취소</option>
							<option value="반품">반품</option>
							<option value="품절">품절</option>
							<option value="">전체</option>
						</select>
						<label for="fr_date" class="sound_only">기간 시작일</label>
						<input type="text" name="fr_date" value="20180801" id="fr_date" required="" class="required frm_input hasDatepicker" size="10" maxlength="8">
						~
						<label for="to_date" class="sound_only">기간 종료일</label>
						<input type="text" name="to_date" value="20180801" id="to_date" required="" class="required frm_input hasDatepicker" size="10" maxlength="8">
						<input type="submit" value="출력 (새창)" class="btn_submit">
					</form>
				</div>
				<div class="sch_last">
					<form name="forderprint" autocomplete="off">
						<input type="hidden" name="case" value="2">
						<strong class="sch_long">주문번호구간별 출력</strong>
						<input type="radio" name="csv" value="xls" id="xls2">
						<label for="xls2">MS엑셀 XLS 데이터</label>
						<input type="radio" name="csv" value="csv" id="csv2">
						<label for="csv2">MS엑셀 CSV 데이터</label>
						<label for="ct_status_n" class="sound_only">출력대상</label>
						<select name="ct_status" id="ct_status_n">
							<option value="주문">주문</option>
							<option value="입금">입금</option>
							<option value="준비">준비</option>
							<option value="배송">배송</option>
							<option value="완료">완료</option>
							<option value="취소">취소</option>
							<option value="반품">반품</option>
							<option value="품절">품절</option>
							<option value="">전체</option>
						</select>
						<label for="fr_od_id" class="sound_only">주문번호 구간 시작</label>
						<input type="text" name="fr_od_id" id="fr_od_id" required="" class="required frm_input" size="10" maxlength="20">
						~
						<label for="fr_od_id" class="sound_only">주문번호 구간 종료</label>
						<input type="text" name="to_od_id" id="to_od_id" required="" class="required frm_input" size="10" maxlength="20">
						<input type="submit" value="출력 (새창)" class="btn_submit">
					</form>
				</div>
			</div>
			<div class="btn_fixed_top">
				<a href="<?=base_url('/admin/goods')?>/orderlist" class="btn_01 btn ">주문내역</a>
			</div>
			<div class="local_desc01 local_desc">
				<p>기간별 혹은 주문번호구간별 주문내역을 새창으로 출력할 수 있습니다.</p>
			</div>					
		</div>
	</div>
</div>