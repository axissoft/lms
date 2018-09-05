<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">개인결제 관리</h1>
		<div class="container_wr">
			<form name="fpersonalpayform" method="post">
				<input type="hidden" name="w" value="">
				<input type="hidden" name="pp_id" value="">
				<input type="hidden" name="sst" value="">
				<input type="hidden" name="sod" value="">
				<input type="hidden" name="sfl" value="">
				<input type="hidden" name="stx" value="">
				<input type="hidden" name="page" value="">
				<input type="hidden" name="popup" value="">
				<section id="anc_spp_info">
					<h2 class="h2_frm">주문 정보</h2>
					<ul class="anchor">
						<li><a href="#anc_spp_info">주문 정보</a></li>
						<li><a href="#anc_spp_pay">결제 정보</a></li>
					</ul>
					<div class="local_desc02 local_desc">
						<p>주문 관련 기본 정보입니다.</p>
					</div>
					<div class="tbl_frm01 tbl_wrap">
						<table>
							<caption>주문 정보 목록</caption>
							<colgroup>
								<col class="grid_4">
								<col>
							</colgroup>
							<tbody>
								<tr>
									<th scope="row"><label for="pp_name">이름</label></th>
									<td><input type="text" name="pp_name" value="" id="pp_name" required="" class="required frm_input"></td>
								</tr>
								<tr>
									<th scope="row"><label for="pp_price">주문금액</label></th>
									<td><input type="text" name="pp_price" value="" id="pp_price" required="" class="required frm_input" size="15"> 원</td>
								</tr>
								<tr>
									<th scope="row"><label for="od_id">주문번호</label></th>
									<td><input type="text" name="od_id" value="" id="od_id" class="frm_input" size="20"></td>
								</tr>
								<tr>
									<th scope="row"><label for="pp_content">내용</label></th>
									<td><textarea name="pp_content" id="pp_content" rows="8"></textarea></td>
								</tr>
							</tbody>
						</table>
					</div>
				</section>
				<section id="anc_spp_pay" class="cbox">
					<h2 class="h2_frm">결제 정보</h2>
					<ul class="anchor">
						<li><a href="#anc_spp_info">주문 정보</a></li>
						<li><a href="#anc_spp_pay">결제 정보</a></li>
					</ul>        <div class="local_desc02 local_desc">
						<p>결제 관련 정보입니다.</p>
					</div>
					<div class="tbl_frm01 tbl_wrap">
						<table>
							<caption>결제 정보 목록</caption>
							<colgroup>
								<col class="grid_4">
								<col>
							</colgroup>
							<tbody>
								<tr>
									<th scope="row"><label for="pp_receipt_price">결제금액</label></th>
									<td><input type="text" name="pp_receipt_price" value="" id="pp_receipt_price" class="frm_input" size="15"> 원</td>
								</tr>
								<tr>
									<th scope="row"><label for="pp_settle_case">결제방법</label></th>
									<td>
										<select name="pp_settle_case" id="pp_settle_case">
											<option value="" selected="selected">선택</option>
											<option value="무통장">무통장</option>
											<option value="계좌이체">계좌이체</option>
											<option value="가상계좌">가상계좌</option>
											<option value="신용카드">신용카드</option>
											<option value="휴대폰">휴대폰</option>
										</select>
									</td>
								</tr>
								<tr>
									<th scope="row"><label for="pp_receipt_time">결제일시</label></th>
									<td>
										<input type="checkbox" name="pp_receipt_chk" id="pp_receipt_chk" value="2018-08-01 15:54:37">
										<label for="pp_receipt_chk">현재 시간으로 설정</label><br>
										<input type="text" name="pp_receipt_time" value="" id="pp_receipt_time" class="frm_input" maxlength="19">
									</td>
								</tr>
								<tr>
									<th scope="row"><label for="pp_shop_memo">상점메모</label></th>
									<td><textarea name="pp_shop_memo" id="pp_shop_memo" rows="8"></textarea></td>
								</tr>
								<tr>
									<th scope="row"><label for="pp_use">사용</label></th>
									<td>
										<select name="pp_use" id="pp_use">
											<option value="1" selected="selected">사용함</option>
											<option value="0">사용안함</option>
										</select>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</section>
				<div class="btn_fixed_top">
					<input type="submit" value="확인" class="btn_submit btn" accesskey="s">
					<a href="<?=base_url('/admin/goods')?>/personalpaylist?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=" class="btn btn_02">목록</a>
				</div>
			</form>
		</div>
	</div>
</div>