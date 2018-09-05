<? 
$sub_menu = "500";
include_once("header.php")
?>
<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">매출현황</h1>
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
					<form name="frm_sale_today" action="./sale1today.php" method="get">
						<strong>일일 매출</strong>
						<input type="text" name="date" value="20180801" id="date" required="" class="required frm_input hasDatepicker" size="8" maxlength="8">
						<label for="date">일 하루</label>
						<input type="submit" value="확인" class="btn_submit">
					</form>
				</div>
				<div>
					<form name="frm_sale_date" action="./sale1date.php" method="get">
						<strong>일간 매출</strong>
						<input type="text" name="fr_date" value="20180801" id="fr_date" required="" class="required frm_input hasDatepicker" size="8" maxlength="8">
						<label for="fr_date">일 ~</label>
						<input type="text" name="to_date" value="20180801" id="to_date" required="" class="required frm_input hasDatepicker" size="8" maxlength="8">
						<label for="to_date">일</label>
						<input type="submit" value="확인" class="btn_submit">
					</form>
				</div>
				<div>
					<form name="frm_sale_month" action="./sale1month.php" method="get">
						<strong>월간 매출</strong>
						<input type="text" name="fr_month" value="201801" id="fr_month" required="" class="required frm_input" size="6" maxlength="6">
						<label for="fr_month">월 ~</label>
						<input type="text" name="to_month" value="201808" id="to_month" required="" class="required frm_input" size="6" maxlength="6">
						<label for="to_month">월</label>
						<input type="submit" value="확인" class="btn_submit">
					</form>
				</div>
				<div class="sch_last">
					<form name="frm_sale_year" action="./sale1year.php" method="get">
						<strong>연간 매출</strong>
						<input type="text" name="fr_year" value="2017" id="fr_year" required="" class="required frm_input" size="4" maxlength="4">
						<label for="fr_year">년 ~</label>
						<input type="text" name="to_year" value="2018" id="to_year" required="" class="required frm_input" size="4" maxlength="4">
						<label for="to_year">년</label>
						<input type="submit" value="확인" class="btn_submit">
					</form>
				</div>
			</div>
			<script>
				$(function() {
					$("#date, #fr_date, #to_date").datepicker({
						changeMonth: true,
						changeYear: true,
						dateFormat: "yymmdd",
						showButtonPanel: true,
						yearRange: "c-99:c+99",
						maxDate: "+0d"
					});
				});
			</script>
		</div>
	</div>
</div>    
<?php
include_once("footer.php")
?>