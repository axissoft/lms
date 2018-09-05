<?php
$sub_menu = "500";
include_once("header.php")
?>
<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">2018-08-01 ~ 2018-08-01 일간 매출현황</h1>
		<div class="container_wr">
			<div class="tbl_head01 tbl_wrap">
				<table>
					<caption>2018-08-01 ~ 2018-08-01 일간 매출현황</caption>
					<thead>
						<tr>
							<th scope="col">주문일</th>
							<th scope="col">주문수</th>
							<th scope="col">주문합계</th>
							<th scope="col">쿠폰</th>
							<th scope="col">무통장</th>
							<th scope="col">가상계좌</th>
							<th scope="col">계좌이체</th>
							<th scope="col">카드입금</th>
							<th scope="col">휴대폰</th>
							<th scope="col">포인트입금</th>
							<th scope="col">주문취소</th>
							<th scope="col">미수금</th>
						</tr>
					</thead>
					<tbody>
						<tr><td colspan="12" class="empty_table">자료가 없습니다.</td></tr>
					</tbody>
					<tfoot>
						<tr>
							<td>합계</td>
							<td class="td_num_right">0</td>
							<td class="td_num_right">0</td>
							<td class="td_num_right">0</td>
							<td class="td_num_right">0</td>
							<td class="td_num_right">0</td>
							<td class="td_num_right">0</td>
							<td class="td_num_right">0</td>
							<td class="td_num_right">0</td>
							<td class="td_num_right">0</td>
							<td class="td_num_right">0</td>
							<td class="td_num_right">0</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>
<?php
include_once("footer.php")
?>