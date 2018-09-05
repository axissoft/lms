<?php 
$sub_menu = "400";
include_once("header.php")
?>
<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">미완료주문 내역</h1>
		<div class="container_wr">
			<section id="anc_sodr_list">
				<h2 class="h2_frm">주문상품 목록</h2>
				<ul class="anchor">
					<li><a href="#anc_sodr_list">주문상품 목록</a></li>
					<li><a href="#anc_sodr_orderer">주문하신 분</a></li>
					<li><a href="#anc_sodr_taker">받으시는 분</a></li>
				</ul>
				<div class="local_desc02 local_desc">
					<p>
						주문일시 <strong>2018-07-26 17:52 (목)</strong>
						|
						주문합계 <strong>0</strong>원
					</p>
				</div>
				<div class="tbl_head01 tbl_wrap">
					<table>
						<caption>주문 상품 목록</caption>
						<thead>
							<tr>
								<th scope="col">상품명</th>
								<th scope="col">옵션항목</th>
								<th scope="col">상태</th>
								<th scope="col">수량</th>
								<th scope="col">판매가</th>
								<th scope="col">소계</th>
								<th scope="col">쿠폰</th>
								<th scope="col">포인트</th>
								<th scope="col">배송비</th>
								<th scope="col">포인트반영</th>
								<th scope="col">재고반영</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			</section>
			<section id="anc_sodr_pay">
				<h2 class="h2_frm">주문결제 내역</h2>
				<ul class="anchor">
					<li><a href="#anc_sodr_list">주문상품 목록</a></li>
					<li><a href="#anc_sodr_orderer">주문하신 분</a></li>
					<li><a href="#anc_sodr_taker">받으시는 분</a></li>
				</ul>
				<div class="tbl_head01 tbl_wrap">
					<form name="frmorderform" method="post">
						<input type="hidden" name="od_id" value="2018072617521045">
						<input type="hidden" name="sst" value="">
						<input type="hidden" name="sod" value="">
						<input type="hidden" name="sfl" value="">
						<input type="hidden" name="stx" value="">
						<input type="hidden" name="page" value="0">
						<strong class="sodr_nonpay">미수금 0원</strong>
						<table>
							<caption>주문결제 내역</caption>
							<thead>
								<tr>
									<th scope="col">주문번호</th>
									<th scope="col">결제방법</th>
									<th scope="col">주문총액</th>
									<th scope="col">배송비</th>
									<th scope="col">포인트결제</th>
									<th scope="col">총결제액</th>
									<th scope="col">쿠폰</th>
									<th scope="col">주문취소</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>2018072617521045</td>
									<td class="td_paybybig">신용카드</td>
									<td class="td_numbig td_numsum">0원</td>
									<td class="td_numbig">0원</td>
									<td class="td_numbig">0점</td>
									<td class="td_numbig td_numincome">0원</td>
									<td class="td_numbig td_numcoupon">0원</td>
									<td class="td_numbig td_numcancel">0원</td>
								</tr>
							</tbody>
						</table>
						<div class="btn_confirm01 btn_confirm">
							<input type="submit" value="주문 복구" class="btn_submit">
						</div>
					</form>
				</div>
			</section>
			<section>
				<h2 class="h2_frm">주문자/배송지 정보</h2>
				<ul class="anchor">
					<li><a href="#anc_sodr_list">주문상품 목록</a></li>
					<li><a href="#anc_sodr_orderer">주문하신 분</a></li>
					<li><a href="#anc_sodr_taker">받으시는 분</a></li>
				</ul>
				<div class="compare_wrap">
					<section id="anc_sodr_orderer" class="compare_left">
						<h3>주문하신 분</h3>
						<div class="tbl_frm01">
							<table>
								<caption>주문자/배송지 정보</caption>
								<colgroup>
									<col class="grid_4">
									<col>
								</colgroup>
								<tbody>
									<tr>
										<th scope="row"><span class="sound_only">주문하신 분 </span>이름</th>
										<td>**********</td>
									</tr>
									<tr>
										<th scope="row"><span class="sound_only">주문하신 분 </span>전화번호</th>
										<td>**-****-****</td>
									</tr>
									<tr>
										<th scope="row"><span class="sound_only">주문하신 분 </span>핸드폰</th>
										<td>***-****-****</td>
									</tr>
									<tr>
										<th scope="row"><span class="sound_only">주문하시는 분 </span>주소</th>
										<td>
											<span>******</span>
											<span>*************** ********* ************ ***</span>
											<span>*******</span>
											<span>(*********,***************************)</span>
										</td>
									</tr>
									<tr>
										<th scope="row"><span class="sound_only">주문하신 분 </span>E-mail</th>
										<td>****@****.****</td>
									</tr>
								</tbody>
							</table>
						</div>
					</section>
					<section id="anc_sodr_taker" class="compare_right">
						<h3>받으시는 분</h3>
						<div class="tbl_frm01">
							<table>
								<caption>받으시는 분 정보</caption>
								<colgroup>
									<col class="grid_4">
									<col>
								</colgroup>
								<tbody>
									<tr>
										<th scope="row"><span class="sound_only">받으시는 분 </span>이름</th>
										<td>**********</td>
									</tr>
									<tr>
										<th scope="row"><span class="sound_only">받으시는 분 </span>전화번호</th>
										<td>**-****-****</td>
									</tr>
									<tr>
										<th scope="row"><span class="sound_only">받으시는 분 </span>핸드폰</th>
										<td>***-****-****</td>
									</tr>
									<tr>
										<th scope="row"><span class="sound_only">받으시는 분 </span>주소</th>
										<td>
											<span>******</span>
											<span>*************** ********* ************ ***</span>
											<span>*******</span>
											<span>(*********,***************************)</span>
										</td>
									</tr>
									<tr>
										<th scope="row">전달 메세지</th>
										<td>없음</td>
									</tr>
								</tbody>
							</table>
						</div>
					</section>
				</div>
			</section>
		</div>
	</div>
</div>
<?php
include_once("footer.php")
?>