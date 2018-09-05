<?php
$sub_menu="400";
include_once("header.php")
?>
<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">상품옵션재고관리</h1>
		<div class="container_wr">
			<div class="local_ov01 local_ov">
				<a href="#" class="ov_listall">전체목록</a>    <span class="btn_ov01"><span class="ov_txt">전체 옵션</span><span class="ov_num">  487개</span></span>
			</div>
			<form name="flist" class="local_sch01 local_sch">
				<input type="hidden" name="doc" value="">
				<input type="hidden" name="sort1" value="a.io_stock_qty">
				<input type="hidden" name="sort2" value="desc">
				<input type="hidden" name="page" value="1">
				<label for="sel_ca_id" class="sound_only">분류선택</label>
				<select name="sel_ca_id" id="sel_ca_id">
					<option value="">전체분류</option>
					<option value="20">TOP/PANTS</option>
					<option value="2010">&nbsp;&nbsp;&nbsp;TOP</option>
					<option value="201010">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;셔츠</option>
					<option value="20101010">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;체크/슬림</option>
					<option value="2010101010">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;체크</option>
					<option value="2010101020">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;슬림</option>
					<option value="20101020">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;드레스셔츠</option>
					<option value="201020">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;티</option>
					<option value="2020">&nbsp;&nbsp;&nbsp;PANTS</option>
					<option value="30">테스트</option>
				</select>
				<label for="sel_field" class="sound_only">검색대상</label>
				<select name="sel_field" id="sel_field">
					<option value="b.it_name" selected="selected">상품명</option>
					<option value="a.it_id">상품코드</option>
				</select>
				<label for="search" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
				<input type="text" name="search" id="search" value="" required="" class="frm_input required">
				<input type="submit" value="검색" class="btn_submit">
			</form>
			<form name="fitemstocklist" method="post">
				<input type="hidden" name="sort1" value="a.io_stock_qty">
				<input type="hidden" name="sort2" value="desc">
				<input type="hidden" name="sel_ca_id" value="">
				<input type="hidden" name="sel_field" value="b.it_name">
				<input type="hidden" name="search" value="">
				<input type="hidden" name="page" value="1">
				<div class="tbl_head01 tbl_wrap">
					<table>
						<caption>상품옵션재고관리 목록</caption>
						<thead>
							<tr>
								<th scope="col"><a href="#">상품명</a></th>
								<th scope="col">옵션항목</th>
								<th scope="col">옵션타입</th>
								<th scope="col"><a href="#">창고재고</a></th>
								<th scope="col">주문대기</th>
								<th scope="col">가재고</th>
								<th scope="col">재고수정</th>
								<th scope="col">통보수량</th>
								<th scope="col"><a href="#">판매</a></th>
								<th scope="col">관리</th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg0">
								<td class="td_left">
									<input type="hidden" name="it_id[0]" value="1387869984">
									<input type="hidden" name="io_id[0]" value="M블랙">
									<input type="hidden" name="io_type[0]" value="0">
									<a href="#"><img src="" width="50" height="50" alt=""> TH-베이직 슬림셔츠 블루</a>
								</td>
								<td class="td_left">SIZE : M<br>COLOR : 블랙</td>
								<td class="td_mng">선택옵션</td>
								<td class="td_num">100,001</td>
								<td class="td_num">2</td>
								<td class="td_num">99,999</td>
								<td class="td_num">
									<label for="stock_qty_0" class="sound_only">재고수정</label>
									<input type="text" name="io_stock_qty[0]" value="100001" id="stock_qty_0" class="frm_input" size="8" autocomplete="off">
								</td>
								<td class="td_num">
									<label for="noti_qty_0" class="sound_only">통보수량</label>
									<input type="text" name="io_noti_qty[0]" value="0" id="noti_qty_0" class="frm_input" size="8" autocomplete="off">
								</td>
								<td class="td_chk2">
									<label for="use_0" class="sound_only">판매</label>
									<input type="checkbox" name="io_use[0]" value="1" id="use_0" checked="">
								</td>
								<td class="td_mng td_mng_s"><a href="./itemform.php?w=u&amp;it_id=1387869984&amp;ca_id=&amp;sel_ca_id=&amp;sel_field=b.it_name&amp;search=&amp;sort1=a.io_stock_qty&amp;sort2=desc&amp;page=1" class="btn btn_03">수정</a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="btn_fixed_top">
					<a href="./itemstocklist.php" class="btn btn_02">상품재고관리</a>
					<a href="./itemsellrank.php" class="btn btn_02">상품판매순위</a>
					<input type="submit" value="일괄수정" class="btn_submit btn">
				</div>
			</form>
			<div class="local_desc01 local_desc">
				<p>
					재고수정의 수치를 수정하시면 창고재고의 수치가 변경됩니다.<br>
					창고재고가 부족한 경우 재고수량 뒤에 <span class="sit_stock_qty_alert">!</span><span class="sound_only"> 혹은 재고부족</span>으로 표시됩니다.
				</p>
			</div>
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
<?php
include_once("footer.php")
?>