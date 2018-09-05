<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">상품관리</h1>
		<div class="container_wr">
			<div class="local_ov01 local_ov">
				<a href="#" class="ov_listall">전체목록</a>
				<span class="btn_ov01">
					<span class="ov_txt">등록된 상품</span>
					<span class="ov_num"> 54건</span>
				</span>
			</div>
			<form name="flist" class="local_sch01 local_sch">
				<input type="hidden" name="page" value="1">
				<input type="hidden" name="save_stx" value="">
				<label for="sca" class="sound_only">분류선택</label>
				<select name="sca" id="sca">
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
				<label for="sfl" class="sound_only">검색대상</label>
				<select name="sfl" id="sfl">
					<option value="it_name" selected="selected">상품명</option>
					<option value="it_id">상품코드</option>
					<option value="it_maker">제조사</option>
					<option value="it_origin">원산지</option>
					<option value="it_sell_email">판매자 e-mail</option>
				</select>
				<label for="stx" class="sound_only">검색어</label>
				<input type="text" name="stx" value="" id="stx" class="frm_input">
				<input type="submit" value="검색" class="btn_submit">
			</form>
			<form name="fitemlistupdate" method="post" autocomplete="off" id="fitemlistupdate">
				<input type="hidden" name="sca" value="">
				<input type="hidden" name="sst" value="it_id">
				<input type="hidden" name="sod" value="desc">
				<input type="hidden" name="sfl" value="it_name">
				<input type="hidden" name="stx" value="">
				<input type="hidden" name="page" value="1">
				<div class="tbl_head01 tbl_wrap">
					<table>
						<caption>상품관리 목록</caption>
						<thead>
							<tr>
								<th scope="col" rowspan="2">
									<label for="chkall" class="sound_only">상품 전체</label>
									<input type="checkbox" name="chkall" value="1" id="chkall" onclick="check_all(this.form)">
								</th>
								<th scope="col" rowspan="2"><a href="#">상품코드</a></th>
								<th scope="col" colspan="5">분류</th>
								<th scope="col" rowspan="2"><a href="#">순서</a></th>
								<th scope="col" rowspan="2"><a href="#">판매</a></th>
								<th scope="col" rowspan="2"><a href="#">품절</a></th>
								<th scope="col" rowspan="2"><a href="#">조회</a></th>
								<th scope="col" rowspan="2">관리</th>
							</tr>
							<tr>
								<th scope="col" id="th_img">이미지</th>
								<th scope="col" id="th_pc_title"><a href="#">상품명</a></th>
								<th id="th_amt" scope="col"><a href="#">판매가격</a></th>
								<th colspan="2" id="th_camt" scope="col"><a href="#">재고</a></th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg0">
								<td rowspan="2" class="td_chk">
									<label for="chk_0" class="sound_only">국어강좌</label>
									<input type="checkbox" name="chk[]" value="0" id="chk_0">
								</td>
								<td rowspan="2" class="td_num">
									<input type="hidden" name="it_id[0]" value="77777">
									77777
								</td>
								<td colspan="5" class="td_sort">
									<label for="ca_id_0" class="sound_only">기본분류</label>
									<select name="ca_id[0]" id="ca_id_0">
										<option value="">강과</option>
										<option value="20" selected="">강과</option>
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
									<label for="ca_id2_0" class="sound_only"> 2차분류</label>
									<select name="ca_id2[0]" id="ca_id2_0">
										<option value="" selected="">선택</option>
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
									<label for="ca_id3_0" class="sound_only"> 3차분류</label>
									<select name="ca_id3[0]" id="ca_id3_0">
										<option value="" selected="">선택</option>
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
								</td>
								<td rowspan="2" class="td_num">
									<label for="order_0" class="sound_only">순서</label>
									<input type="text" name="it_order[0]" value="0" id="order_0" class="tbl_input" size="3">
								</td>
								<td rowspan="2">
									<label for="use_0" class="sound_only">판매여부</label>
									<input type="checkbox" name="it_use[0]" checked="" value="1" id="use_0">
								</td>
								<td rowspan="2">
									<label for="soldout_0" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[0]" value="1" id="soldout_0">
								</td>
								<td rowspan="2" class="td_num">1222</td>
								<td rowspan="2" class="td_mng td_mng_s">
									<a href="<?=base_url('/admin/goods')?>/itemform?w=u&amp;it_id=77777&amp;ca_id=20&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=&amp;sca=&amp;page=1&amp;save_stx=" class="btn btn_03"><span class="sound_only"></span>수정</a>
									<a href="#" class="itemcopy btn btn_02" target="_blank"><span class="sound_only"></span>복사</a>
									<a href="#" class="btn btn_02"><span class="sound_only"></span>보기</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_img"><a href="#"><img src="" width="50" height="50" alt=""></a></td>
								<td headers="th_pc_title" class="td_input">
									<label for="name_0" class="sound_only">상품명</label>
									<input type="text" name="it_name[0]" value="테스트컨텐츠" id="name_0" required="" class="tbl_input required" size="30">
								</td>
								<td class="td_numbig td_input" headers="th_amt">
									<label for="price_0" class="sound_only">판매가격</label>
									<input type="text" name="it_price[0]" value="690000" id="price_0" class="tbl_input sit_amt" size="7">
								</td>
								<td colspan="2" class="td_numbig td_input" headers="th_camt">
									<label for="stock_qty_0" class="sound_only">재고</label>
									<input type="text" name="it_stock_qty[0]" value="5000" id="stock_qty_0" class="tbl_input sit_qty" size="7">
								</td>
							</tr>
							<tr class="bg0">
								<td rowspan="2" class="td_chk">
									<label for="chk_0" class="sound_only">국어강좌</label>
									<input type="checkbox" name="chk[]" value="0" id="chk_0">
								</td>
								<td rowspan="2" class="td_num">
									<input type="hidden" name="it_id[0]" value="77777">
									77777
								</td>
								<td colspan="5" class="td_sort">
									<label for="ca_id_0" class="sound_only">기본분류</label>
									<select name="ca_id[0]" id="ca_id_0">
										<option value="">강과</option>
										<option value="20" selected="">강과</option>
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
									<label for="ca_id2_0" class="sound_only"> 2차분류</label>
									<select name="ca_id2[0]" id="ca_id2_0">
										<option value="" selected="">선택</option>
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
									<label for="ca_id3_0" class="sound_only"> 3차분류</label>
									<select name="ca_id3[0]" id="ca_id3_0">
										<option value="" selected="">선택</option>
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
								</td>
								<td rowspan="2" class="td_num">
									<label for="order_0" class="sound_only">순서</label>
									<input type="text" name="it_order[0]" value="0" id="order_0" class="tbl_input" size="3">
								</td>
								<td rowspan="2">
									<label for="use_0" class="sound_only">판매여부</label>
									<input type="checkbox" name="it_use[0]" checked="" value="1" id="use_0">
								</td>
								<td rowspan="2">
									<label for="soldout_0" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[0]" value="1" id="soldout_0">
								</td>
								<td rowspan="2" class="td_num">1222</td>
								<td rowspan="2" class="td_mng td_mng_s">
									<a href="<?=base_url('/admin/goods')?>/itemform?w=u&amp;it_id=77777&amp;ca_id=20&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=&amp;sca=&amp;page=1&amp;save_stx=" class="btn btn_03"><span class="sound_only"></span>수정</a>
									<a href="#" class="itemcopy btn btn_02" target="_blank"><span class="sound_only"></span>복사</a>
									<a href="#" class="btn btn_02"><span class="sound_only"></span>보기</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_img"><a href="#"><img src="" width="50" height="50" alt=""></a></td>
								<td headers="th_pc_title" class="td_input">
									<label for="name_0" class="sound_only">상품명</label>
									<input type="text" name="it_name[0]" value="테스트컨텐츠" id="name_0" required="" class="tbl_input required" size="30">
								</td>
								<td class="td_numbig td_input" headers="th_amt">
									<label for="price_0" class="sound_only">판매가격</label>
									<input type="text" name="it_price[0]" value="690000" id="price_0" class="tbl_input sit_amt" size="7">
								</td>
								<td colspan="2" class="td_numbig td_input" headers="th_camt">
									<label for="stock_qty_0" class="sound_only">재고</label>
									<input type="text" name="it_stock_qty[0]" value="5000" id="stock_qty_0" class="tbl_input sit_qty" size="7">
								</td>
							</tr>
							<tr class="bg0">
								<td rowspan="2" class="td_chk">
									<label for="chk_0" class="sound_only">국어강좌</label>
									<input type="checkbox" name="chk[]" value="0" id="chk_0">
								</td>
								<td rowspan="2" class="td_num">
									<input type="hidden" name="it_id[0]" value="77777">
									77777
								</td>
								<td colspan="5" class="td_sort">
									<label for="ca_id_0" class="sound_only">기본분류</label>
									<select name="ca_id[0]" id="ca_id_0">
										<option value="">강과</option>
										<option value="20" selected="">강과</option>
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
									<label for="ca_id2_0" class="sound_only"> 2차분류</label>
									<select name="ca_id2[0]" id="ca_id2_0">
										<option value="" selected="">선택</option>
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
									<label for="ca_id3_0" class="sound_only"> 3차분류</label>
									<select name="ca_id3[0]" id="ca_id3_0">
										<option value="" selected="">선택</option>
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
								</td>
								<td rowspan="2" class="td_num">
									<label for="order_0" class="sound_only">순서</label>
									<input type="text" name="it_order[0]" value="0" id="order_0" class="tbl_input" size="3">
								</td>
								<td rowspan="2">
									<label for="use_0" class="sound_only">판매여부</label>
									<input type="checkbox" name="it_use[0]" checked="" value="1" id="use_0">
								</td>
								<td rowspan="2">
									<label for="soldout_0" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[0]" value="1" id="soldout_0">
								</td>
								<td rowspan="2" class="td_num">1222</td>
								<td rowspan="2" class="td_mng td_mng_s">
									<a href="<?=base_url('/admin/goods')?>/itemform?w=u&amp;it_id=77777&amp;ca_id=20&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=&amp;sca=&amp;page=1&amp;save_stx=" class="btn btn_03"><span class="sound_only"></span>수정</a>
									<a href="#" class="itemcopy btn btn_02" target="_blank"><span class="sound_only"></span>복사</a>
									<a href="#" class="btn btn_02"><span class="sound_only"></span>보기</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_img"><a href="#"><img src="" width="50" height="50" alt=""></a></td>
								<td headers="th_pc_title" class="td_input">
									<label for="name_0" class="sound_only">상품명</label>
									<input type="text" name="it_name[0]" value="테스트컨텐츠" id="name_0" required="" class="tbl_input required" size="30">
								</td>
								<td class="td_numbig td_input" headers="th_amt">
									<label for="price_0" class="sound_only">판매가격</label>
									<input type="text" name="it_price[0]" value="690000" id="price_0" class="tbl_input sit_amt" size="7">
								</td>
								<td colspan="2" class="td_numbig td_input" headers="th_camt">
									<label for="stock_qty_0" class="sound_only">재고</label>
									<input type="text" name="it_stock_qty[0]" value="5000" id="stock_qty_0" class="tbl_input sit_qty" size="7">
								</td>
							</tr>
							<tr class="bg0">
								<td rowspan="2" class="td_chk">
									<label for="chk_0" class="sound_only">국어강좌</label>
									<input type="checkbox" name="chk[]" value="0" id="chk_0">
								</td>
								<td rowspan="2" class="td_num">
									<input type="hidden" name="it_id[0]" value="77777">
									77777
								</td>
								<td colspan="5" class="td_sort">
									<label for="ca_id_0" class="sound_only">기본분류</label>
									<select name="ca_id[0]" id="ca_id_0">
										<option value="">강과</option>
										<option value="20" selected="">강과</option>
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
									<label for="ca_id2_0" class="sound_only"> 2차분류</label>
									<select name="ca_id2[0]" id="ca_id2_0">
										<option value="" selected="">선택</option>
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
									<label for="ca_id3_0" class="sound_only"> 3차분류</label>
									<select name="ca_id3[0]" id="ca_id3_0">
										<option value="" selected="">선택</option>
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
								</td>
								<td rowspan="2" class="td_num">
									<label for="order_0" class="sound_only">순서</label>
									<input type="text" name="it_order[0]" value="0" id="order_0" class="tbl_input" size="3">
								</td>
								<td rowspan="2">
									<label for="use_0" class="sound_only">판매여부</label>
									<input type="checkbox" name="it_use[0]" checked="" value="1" id="use_0">
								</td>
								<td rowspan="2">
									<label for="soldout_0" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[0]" value="1" id="soldout_0">
								</td>
								<td rowspan="2" class="td_num">1222</td>
								<td rowspan="2" class="td_mng td_mng_s">
									<a href="<?=base_url('/admin/goods')?>/itemform?w=u&amp;it_id=77777&amp;ca_id=20&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=&amp;sca=&amp;page=1&amp;save_stx=" class="btn btn_03"><span class="sound_only"></span>수정</a>
									<a href="#" class="itemcopy btn btn_02" target="_blank"><span class="sound_only"></span>복사</a>
									<a href="#" class="btn btn_02"><span class="sound_only"></span>보기</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_img"><a href="#"><img src="" width="50" height="50" alt=""></a></td>
								<td headers="th_pc_title" class="td_input">
									<label for="name_0" class="sound_only">상품명</label>
									<input type="text" name="it_name[0]" value="테스트컨텐츠" id="name_0" required="" class="tbl_input required" size="30">
								</td>
								<td class="td_numbig td_input" headers="th_amt">
									<label for="price_0" class="sound_only">판매가격</label>
									<input type="text" name="it_price[0]" value="690000" id="price_0" class="tbl_input sit_amt" size="7">
								</td>
								<td colspan="2" class="td_numbig td_input" headers="th_camt">
									<label for="stock_qty_0" class="sound_only">재고</label>
									<input type="text" name="it_stock_qty[0]" value="5000" id="stock_qty_0" class="tbl_input sit_qty" size="7">
								</td>
							</tr>
							<tr class="bg0">
								<td rowspan="2" class="td_chk">
									<label for="chk_0" class="sound_only">국어강좌</label>
									<input type="checkbox" name="chk[]" value="0" id="chk_0">
								</td>
								<td rowspan="2" class="td_num">
									<input type="hidden" name="it_id[0]" value="77777">
									77777
								</td>
								<td colspan="5" class="td_sort">
									<label for="ca_id_0" class="sound_only">기본분류</label>
									<select name="ca_id[0]" id="ca_id_0">
										<option value="">강과</option>
										<option value="20" selected="">강과</option>
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
									<label for="ca_id2_0" class="sound_only"> 2차분류</label>
									<select name="ca_id2[0]" id="ca_id2_0">
										<option value="" selected="">선택</option>
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
									<label for="ca_id3_0" class="sound_only"> 3차분류</label>
									<select name="ca_id3[0]" id="ca_id3_0">
										<option value="" selected="">선택</option>
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
								</td>
								<td rowspan="2" class="td_num">
									<label for="order_0" class="sound_only">순서</label>
									<input type="text" name="it_order[0]" value="0" id="order_0" class="tbl_input" size="3">
								</td>
								<td rowspan="2">
									<label for="use_0" class="sound_only">판매여부</label>
									<input type="checkbox" name="it_use[0]" checked="" value="1" id="use_0">
								</td>
								<td rowspan="2">
									<label for="soldout_0" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[0]" value="1" id="soldout_0">
								</td>
								<td rowspan="2" class="td_num">1222</td>
								<td rowspan="2" class="td_mng td_mng_s">
									<a href="<?=base_url('/admin/goods')?>/itemform?w=u&amp;it_id=77777&amp;ca_id=20&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=&amp;sca=&amp;page=1&amp;save_stx=" class="btn btn_03"><span class="sound_only"></span>수정</a>
									<a href="#" class="itemcopy btn btn_02" target="_blank"><span class="sound_only"></span>복사</a>
									<a href="#" class="btn btn_02"><span class="sound_only"></span>보기</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_img"><a href="#"><img src="" width="50" height="50" alt=""></a>
								</td>
								<td headers="th_pc_title" class="td_input">
									<label for="name_0" class="sound_only">상품명</label>
									<input type="text" name="it_name[0]" value="테스트컨텐츠" id="name_0" required="" class="tbl_input required" size="30">
								</td>
								<td class="td_numbig td_input" headers="th_amt">
									<label for="price_0" class="sound_only">판매가격</label>
									<input type="text" name="it_price[0]" value="690000" id="price_0" class="tbl_input sit_amt" size="7">
								</td>
								<td colspan="2" class="td_numbig td_input" headers="th_camt">
									<label for="stock_qty_0" class="sound_only">재고</label>
									<input type="text" name="it_stock_qty[0]" value="5000" id="stock_qty_0" class="tbl_input sit_qty" size="7">
								</td>
							</tr>
							<tr class="bg0">
								<td rowspan="2" class="td_chk">
									<label for="chk_0" class="sound_only">국어강좌</label>
									<input type="checkbox" name="chk[]" value="0" id="chk_0">
								</td>
								<td rowspan="2" class="td_num">
									<input type="hidden" name="it_id[0]" value="77777">
									77777
								</td>
								<td colspan="5" class="td_sort">
									<label for="ca_id_0" class="sound_only">기본분류</label>
									<select name="ca_id[0]" id="ca_id_0">
										<option value="">강과</option>
										<option value="20" selected="">강과</option>
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
									<label for="ca_id2_0" class="sound_only"> 2차분류</label>
									<select name="ca_id2[0]" id="ca_id2_0">
										<option value="" selected="">선택</option>
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
									<label for="ca_id3_0" class="sound_only"> 3차분류</label>
									<select name="ca_id3[0]" id="ca_id3_0">
										<option value="" selected="">선택</option>
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
								</td>
								<td rowspan="2" class="td_num">
									<label for="order_0" class="sound_only">순서</label>
									<input type="text" name="it_order[0]" value="0" id="order_0" class="tbl_input" size="3">
								</td>
								<td rowspan="2">
									<label for="use_0" class="sound_only">판매여부</label>
									<input type="checkbox" name="it_use[0]" checked="" value="1" id="use_0">
								</td>
								<td rowspan="2">
									<label for="soldout_0" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[0]" value="1" id="soldout_0">
								</td>
								<td rowspan="2" class="td_num">1222</td>
								<td rowspan="2" class="td_mng td_mng_s">
									<a href="<?=base_url('/admin/goods')?>/itemform?w=u&amp;it_id=77777&amp;ca_id=20&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=&amp;sca=&amp;page=1&amp;save_stx=" class="btn btn_03"><span class="sound_only"></span>수정</a>
									<a href="#" class="itemcopy btn btn_02" target="_blank"><span class="sound_only"></span>복사</a>
									<a href="#" class="btn btn_02"><span class="sound_only"></span>보기</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_img"><a href="#"><img src="" width="50" height="50" alt=""></a></td>
								<td headers="th_pc_title" class="td_input">
									<label for="name_0" class="sound_only">상품명</label>
									<input type="text" name="it_name[0]" value="테스트컨텐츠" id="name_0" required="" class="tbl_input required" size="30">
								</td>
								<td class="td_numbig td_input" headers="th_amt">
									<label for="price_0" class="sound_only">판매가격</label>
									<input type="text" name="it_price[0]" value="690000" id="price_0" class="tbl_input sit_amt" size="7">
								</td>
								<td colspan="2" class="td_numbig td_input" headers="th_camt">
									<label for="stock_qty_0" class="sound_only">재고</label>
									<input type="text" name="it_stock_qty[0]" value="5000" id="stock_qty_0" class="tbl_input sit_qty" size="7">
								</td>
							</tr>
							<tr class="bg0">
								<td rowspan="2" class="td_chk">
									<label for="chk_0" class="sound_only">국어강좌</label>
									<input type="checkbox" name="chk[]" value="0" id="chk_0">
								</td>
								<td rowspan="2" class="td_num">
									<input type="hidden" name="it_id[0]" value="77777">
									77777
								</td>
								<td colspan="5" class="td_sort">
									<label for="ca_id_0" class="sound_only">기본분류</label>
									<select name="ca_id[0]" id="ca_id_0">
										<option value="">강과</option>
										<option value="20" selected="">강과</option>
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
									<label for="ca_id2_0" class="sound_only"> 2차분류</label>
									<select name="ca_id2[0]" id="ca_id2_0">
										<option value="" selected="">선택</option>
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
									<label for="ca_id3_0" class="sound_only"> 3차분류</label>
									<select name="ca_id3[0]" id="ca_id3_0">
										<option value="" selected="">선택</option>
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
								</td>
								<td rowspan="2" class="td_num">
									<label for="order_0" class="sound_only">순서</label>
									<input type="text" name="it_order[0]" value="0" id="order_0" class="tbl_input" size="3">
								</td>
								<td rowspan="2">
									<label for="use_0" class="sound_only">판매여부</label>
									<input type="checkbox" name="it_use[0]" checked="" value="1" id="use_0">
								</td>
								<td rowspan="2">
									<label for="soldout_0" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[0]" value="1" id="soldout_0">
								</td>
								<td rowspan="2" class="td_num">1222</td>
								<td rowspan="2" class="td_mng td_mng_s">
									<a href="<?=base_url('/admin/goods')?>/itemform?w=u&amp;it_id=77777&amp;ca_id=20&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=&amp;sca=&amp;page=1&amp;save_stx=" class="btn btn_03"><span class="sound_only"></span>수정</a>
									<a href="#" class="itemcopy btn btn_02" target="_blank"><span class="sound_only"></span>복사</a>
									<a href="#" class="btn btn_02"><span class="sound_only"></span>보기</a>
								</td>
							</tr>
							<tr class="bg0">
								<td class="td_img"><a href="#"><img src="" width="50" height="50" alt=""></a></td>
								<td headers="th_pc_title" class="td_input">
									<label for="name_0" class="sound_only">상품명</label>
									<input type="text" name="it_name[0]" value="테스트컨텐츠" id="name_0" required="" class="tbl_input required" size="30">
								</td>
								<td class="td_numbig td_input" headers="th_amt">
									<label for="price_0" class="sound_only">판매가격</label>
									<input type="text" name="it_price[0]" value="690000" id="price_0" class="tbl_input sit_amt" size="7">
								</td>
								<td colspan="2" class="td_numbig td_input" headers="th_camt">
									<label for="stock_qty_0" class="sound_only">재고</label>
									<input type="text" name="it_stock_qty[0]" value="5000" id="stock_qty_0" class="tbl_input sit_qty" size="7">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="btn_fixed_top">
					<a href="<?=base_url('/admin/goods')?>/itemform" class="btn btn_01">상품등록</a>					
					<input type="submit" name="act_button" value="선택수정" class="btn btn_02">
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
					<a href="#" class="pg_page pg_end">맨끝</a>
				</span>
			</nav>			
		</div>
	</div>
</div>