<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">상품판매순위</h1>
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
				<a href="#" class="ov_listall">전체목록</a>    <span class="btn_ov01"><span class="ov_txt">등록상품 </span><span class="ov_num"> 49건 </span></span> 
			</div>
			<form name="flist" class="local_sch01 local_sch">
				<input type="hidden" name="doc" value="">
				<input type="hidden" name="sort1" value="ct_status_sum">
				<input type="hidden" name="sort2" value="desc">
				<input type="hidden" name="page" value="1">
				<label for="sel_ca_id" class="sound_only">검색대상</label>
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
				기간설정
				<label for="fr_date" class="sound_only">시작일</label>
				<input type="text" name="fr_date" value="" id="fr_date" required="" class="required frm_input hasDatepicker" size="8" maxlength="8"> 에서
				<label for="to_date" class="sound_only">종료일</label>
				<input type="text" name="to_date" value="20180801" id="to_date" required="" class="required frm_input hasDatepicker" size="8" maxlength="8"> 까지
				<input type="submit" value="검색" class="btn_submit">
			</form>
			<div class="local_desc01 local_desc">
				<p>판매량을 합산하여 상품판매순위를 집계합니다.</p>
			</div>
			<div class="btn_fixed_top">
				<a href="<?=base_url('/admin/goods')?>/itemstocklist" class="btn_02 btn">상품재고관리</a>
				<a href="<?=base_url('/admin/goods')?>/itemlist" class="btn_01 btn">상품등록</a>
			</div>
			<div class="tbl_head01 tbl_wrap">
				<table>
					<caption>상품판매순위 목록</caption>
					<thead>
						<tr>
							<th scope="col">순위</th>
							<th scope="col">상품명</th>
							<th scope="col"><a href="#">쇼핑</a></th>
							<th scope="col"><a href="#">주문</a></th>
							<th scope="col"><a href="#">입금</a></th>
							<th scope="col"><a href="#">준비</a></th>
							<th scope="col"><a href="#">배송</a></th>
							<th scope="col"><a href="#">완료</a></th>
							<th scope="col"><a href="#">취소</a></th>
							<th scope="col"><a href="#">반품</a></th>
							<th scope="col"><a href="#">품절</a></th>
							<th scope="col"><a href="#">합계</a></th>
						</tr>
					</thead>
					<tbody>
						<tr class="bg0">
							<td class="td_num">1</td>
							<td class="td_left"><a href="#">TH-블락체크 셔츠-그레이2 [테스트]</a></td>
							<td class="td_num">31</td>
							<td class="td_num">418</td>
							<td class="td_num">89</td>
							<td class="td_num">93</td>
							<td class="td_num">75</td>
							<td class="td_num">30258</td>
							<td class="td_num">328</td>
							<td class="td_num">31</td>
							<td class="td_num">12</td>
							<td class="td_num">31527</td>
						</tr>
						<tr class="bg1">
							<td class="td_num">2</td>
							<td class="td_left"><a href="#">TH-블락체크 셔츠-그레이2 [면세]</a></td>
							<td class="td_num">60</td>
							<td class="td_num">2467</td>
							<td class="td_num">10138</td>
							<td class="td_num">1052</td>
							<td class="td_num">92</td>
							<td class="td_num">263</td>
							<td class="td_num">350</td>
							<td class="td_num">31</td>
							<td class="td_num">17</td>
							<td class="td_num">15575</td>
						</tr>
						<tr class="bg0">
							<td class="td_num">3</td>
							<td class="td_left"><a href="#">베이직 기모 레글런 차콜레드2</a></td>
							<td class="td_num">0</td>
							<td class="td_num">10022</td>
							<td class="td_num">7</td>
							<td class="td_num">4</td>
							<td class="td_num">5</td>
							<td class="td_num">2005</td>
							<td class="td_num">12</td>
							<td class="td_num">3</td>
							<td class="td_num">1</td>
							<td class="td_num">12061</td>
						</tr>
						<tr class="bg1">
							<td class="td_num">4</td>
							<td class="td_left"><a href="#">TH-블락체크 셔츠-그레이2</a></td>
							<td class="td_num">3</td>
							<td class="td_num">10059</td>
							<td class="td_num">4</td>
							<td class="td_num">17</td>
							<td class="td_num">5</td>
							<td class="td_num">49</td>
							<td class="td_num">27</td>
							<td class="td_num">6</td>
							<td class="td_num">3</td>
							<td class="td_num">10178</td>
						</tr>
						<tr class="bg0">
							<td class="td_num">5</td>
							<td class="td_left"><a href="#">베이직 기모 레글런 오트밀레드2 [30만원 이상 무료]</a></td>
							<td class="td_num">15</td>
							<td class="td_num">502</td>
							<td class="td_num">70</td>
							<td class="td_num">30</td>
							<td class="td_num">28</td>
							<td class="td_num">141</td>
							<td class="td_num">2473</td>
							<td class="td_num">10</td>
							<td class="td_num">2</td>
							<td class="td_num">3292</td>
						</tr>
						<tr class="bg1">
							<td class="td_num">6</td>
							<td class="td_left"><a href="#">TH-파스텔드레스셔츠 - 오렌지</a></td>
							<td class="td_num">0</td>
							<td class="td_num">212</td>
							<td class="td_num">1</td>
							<td class="td_num">0</td>
							<td class="td_num">2003</td>
							<td class="td_num">1</td>
							<td class="td_num">2</td>
							<td class="td_num">0</td>
							<td class="td_num">0</td>
							<td class="td_num">2219</td>
						</tr>
						<tr class="bg0">
							<td class="td_num">7</td>
							<td class="td_left"><a href="#">TH-워싱 스트레치 카고 그레이2</a></td>
							<td class="td_num">0</td>
							<td class="td_num">7</td>
							<td class="td_num">0</td>
							<td class="td_num">8</td>
							<td class="td_num">0</td>
							<td class="td_num">501</td>
							<td class="td_num">4</td>
							<td class="td_num">0</td>
							<td class="td_num">0</td>
							<td class="td_num">523</td>
						</tr>
						<tr class="bg1">
							<td class="td_num">8</td>
							<td class="td_left"><a href="#">컴터테스트2</a></td>
							<td class="td_num">10</td>
							<td class="td_num">60</td>
							<td class="td_num">10</td>
							<td class="td_num">10</td>
							<td class="td_num">46</td>
							<td class="td_num">50</td>
							<td class="td_num">24</td>
							<td class="td_num">25</td>
							<td class="td_num">0</td>
							<td class="td_num">255</td>
						</tr>
						<tr class="bg0">
							<td class="td_num">9</td>
							<td class="td_left"><a href="#">베이직 기모 레글런 오트밀와인2</a></td>
							<td class="td_num">0</td>
							<td class="td_num">102</td>
							<td class="td_num">33</td>
							<td class="td_num">6</td>
							<td class="td_num">9</td>
							<td class="td_num">13</td>
							<td class="td_num">47</td>
							<td class="td_num">3</td>
							<td class="td_num">0</td>
							<td class="td_num">222</td>
						</tr>
						<tr class="bg1">
							<td class="td_num">10</td>
							<td class="td_left"><a href="#">컴터테스트1</a></td>
							<td class="td_num">0</td>
							<td class="td_num">66</td>
							<td class="td_num">20</td>
							<td class="td_num">0</td>
							<td class="td_num">10</td>
							<td class="td_num">0</td>
							<td class="td_num">100</td>
							<td class="td_num">10</td>
							<td class="td_num">0</td>
							<td class="td_num">206</td>
						</tr>
						<tr class="bg0">
							<td class="td_num">11</td>
							<td class="td_left"><a href="#">TH-워싱 스트레치 카고 다크브라운2</a></td>
							<td class="td_num">4</td>
							<td class="td_num">65</td>
							<td class="td_num">5</td>
							<td class="td_num">34</td>
							<td class="td_num">0</td>
							<td class="td_num">46</td>
							<td class="td_num">32</td>
							<td class="td_num">3</td>
							<td class="td_num">6</td>
							<td class="td_num">198</td>
						</tr>
						<tr class="bg1">
							<td class="td_num">12</td>
							<td class="td_left"><a href="#">TH-블락체크 셔츠-그레이2 [착불]</a></td>
							<td class="td_num">3</td>
							<td class="td_num">56</td>
							<td class="td_num">12</td>
							<td class="td_num">12</td>
							<td class="td_num">8</td>
							<td class="td_num">35</td>
							<td class="td_num">32</td>
							<td class="td_num">2</td>
							<td class="td_num">1</td>
							<td class="td_num">171</td>
						</tr>
						<tr class="bg0">
							<td class="td_num">13</td>
							<td class="td_left"><a href="#">TH-파스텔드레스셔츠 - 그린</a></td>
							<td class="td_num">14</td>
							<td class="td_num">55</td>
							<td class="td_num">5</td>
							<td class="td_num">3</td>
							<td class="td_num">15</td>
							<td class="td_num">6</td>
							<td class="td_num">27</td>
							<td class="td_num">8</td>
							<td class="td_num">1</td>
							<td class="td_num">134</td>
						</tr>
						<tr class="bg1">
							<td class="td_num">14</td>
							<td class="td_left"><a href="#">올림푸스 E-PL8 14-42mm EZ Kit</a></td>
							<td class="td_num">5</td>
							<td class="td_num">78</td>
							<td class="td_num">7</td>
							<td class="td_num">4</td>
							<td class="td_num">6</td>
							<td class="td_num">5</td>
							<td class="td_num">5</td>
							<td class="td_num">2</td>
							<td class="td_num">2</td>
							<td class="td_num">114</td>
						</tr>
						<tr class="bg0">
							<td class="td_num">15</td>
							<td class="td_left"><a href="#">TH-블락체크 셔츠-레드2</a></td>
							<td class="td_num">3</td>
							<td class="td_num">21</td>
							<td class="td_num">7</td>
							<td class="td_num">13</td>
							<td class="td_num">2</td>
							<td class="td_num">21</td>
							<td class="td_num">7</td>
							<td class="td_num">3</td>
							<td class="td_num">0</td>
							<td class="td_num">78</td>
						</tr>
					</tbody>
				</table>
			</div>
			<nav class="pg_wrap">
				<span class="pg">
					<span class="sound_only">열린</span>
					<strong class="pg_current">1</strong>
					<span class="sound_only">페이지</span>
					<a href="#" class="pg_page">2<span class="sound_only">페이지</span></a>
					<a href="#" class="pg_page">3<span class="sound_only">페이지</span></a>
					<a href="#" class="pg_page">4<span class="sound_only">페이지</span></a>
					<a href="#" class="pg_page pg_end">맨끝</a>
				</span>
			</nav>
			<script>
				$(function() {
					$("#fr_date, #to_date").datepicker({
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