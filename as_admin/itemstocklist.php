<?php
$sub_menu="400";
include_once("header.php")
?>
<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">상품재고관리</h1>
		<div class="container_wr">
			<div class="local_ov01 local_ov">
				<a href="#" class="ov_listall">전체목록</a>    <span class="btn_ov01"><span class="ov_txt">전체 상품</span><span class="ov_num">  54개</span></span>
			</div>
			<form name="flist" class="local_sch01 local_sch">
				<input type="hidden" name="doc" value="">
				<input type="hidden" name="sort1" value="it_stock_qty">
				<input type="hidden" name="sort2" value="desc">
				<input type="hidden" name="page" value="1">
				<label for="sel_ca_id" class="sound_only">분류선택</label>
				<select name="sel_ca_id" id="sel_ca_id">
					<option value="">전체분류</option>
					<option value="20">교제</option>
					<option value="2010">&nbsp;&nbsp;&nbsp;TOP</option>
					<option value="201010">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;국어</option>
					<option value="20101010">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;국어책</option>
					<option value="2010101010">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;국어책</option>
					<option value="2010101020">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;국어책</option>
					<option value="20101020">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;국어책</option>
					<option value="201020">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;국어책</option>
					<option value="2020">&nbsp;&nbsp;&nbsp;국어책</option>
					<option value="30">국어책</option>
				</select>
				<label for="sel_field" class="sound_only">검색대상</label>
				<select name="sel_field" id="sel_field">
					<option value="it_name" selected="selected">상품명</option>
					<option value="it_id">상품코드</option>
				</select>
				<label for="search" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
				<input type="text" name="search" id="search" value="" required="" class="frm_input required">
				<input type="submit" value="검색" class="btn_submit">
			</form>
			<div class="local_desc01 local_desc">
				<p>재고수정의 수치를 수정하시면 창고재고의 수치가 변경됩니다.</p>
			</div>
			<form name="fitemstocklist" method="post">
				<input type="hidden" name="sort1" value="it_stock_qty">
				<input type="hidden" name="sort2" value="desc">
				<input type="hidden" name="sel_ca_id" value="">
				<input type="hidden" name="sel_field" value="it_name">
				<input type="hidden" name="search" value="">
				<input type="hidden" name="page" value="1">
				<div class="tbl_head01 tbl_wrap">
					<table>
						<caption>상품재고관리 목록</caption>
						<thead>
							<tr>
								<th scope="col"><a href="#">상품코드</a></th>
								<th scope="col"><a href="#">상품명</a></th>
								<th scope="col"><a href="#">창고재고</a></th>
								<th scope="col">주문대기</th>
								<th scope="col">가재고</th>
								<th scope="col">재고수정</th>
								<th scope="col"><a href="#">판매</a></th>
								<th scope="col"><a href="#">품절</a></th>
								<th scope="col">관리</th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg0">
								<td class="td_numbig">
									<input type="hidden" name="it_id[0]" value="1387871714">
								1387871714        </td>
								<td class="td_left"><a href="#">국어책</a></td>
								<td class="td_num">99,999</td>
								<td class="td_num">0</td>
								<td class="td_num">99,999</td>
								<td class="td_num">
									<label for="stock_qty_0" class="sound_only">재고수정</label>
									<input type="text" name="it_stock_qty[0]" value="99999" id="stock_qty_0" class="frm_input" size="10" autocomplete="off">
								</td>
								<td class="td_chk2">
									<label for="use_0" class="sound_only">판매</label>
									<input type="checkbox" name="it_use[0]" value="1" id="use_0" checked="">
								</td>
								<td class="td_chk2">
									<label for="soldout_0" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[0]" value="1" id="soldout_0">
								</td>
								<td class="td_mng td_mng_s"><a href="./itemform.php?w=u&amp;it_id=1387871714&amp;ca_id=&amp;sel_ca_id=&amp;sel_field=it_name&amp;search=&amp;sort1=it_stock_qty&amp;sort2=desc&amp;page=1" class="btn btn_03">수정</a></td>
							</tr>
							<tr class="bg1">
								<td class="td_numbig">
									<input type="hidden" name="it_id[1]" value="1387871710">
								1387871710        </td>
								<td class="td_left"><a href="#">국어책</a></td>
								<td class="td_num">99,999</td>
								<td class="td_num">0</td>
								<td class="td_num">99,999</td>
								<td class="td_num">
									<label for="stock_qty_1" class="sound_only">재고수정</label>
									<input type="text" name="it_stock_qty[1]" value="99999" id="stock_qty_1" class="frm_input" size="10" autocomplete="off">
								</td>
								<td class="td_chk2">
									<label for="use_1" class="sound_only">판매</label>
									<input type="checkbox" name="it_use[1]" value="1" id="use_1" checked="">
								</td>
								<td class="td_chk2">
									<label for="soldout_1" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[1]" value="1" id="soldout_1">
								</td>
								<td class="td_mng td_mng_s"><a href="./itemform.php?w=u&amp;it_id=1387871710&amp;ca_id=&amp;sel_ca_id=&amp;sel_field=it_name&amp;search=&amp;sort1=it_stock_qty&amp;sort2=desc&amp;page=1" class="btn btn_03">수정</a></td>
							</tr>
							<tr class="bg0">
								<td class="td_numbig">
									<input type="hidden" name="it_id[2]" value="1387871472">
								1387871472        </td>
								<td class="td_left"><a href="#">국어책</a></td>
								<td class="td_num">99,999</td>
								<td class="td_num">0</td>
								<td class="td_num">99,999</td>
								<td class="td_num">
									<label for="stock_qty_2" class="sound_only">재고수정</label>
									<input type="text" name="it_stock_qty[2]" value="99999" id="stock_qty_2" class="frm_input" size="10" autocomplete="off">
								</td>
								<td class="td_chk2">
									<label for="use_2" class="sound_only">판매</label>
									<input type="checkbox" name="it_use[2]" value="1" id="use_2" checked="">
								</td>
								<td class="td_chk2">
									<label for="soldout_2" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[2]" value="1" id="soldout_2">
								</td>
								<td class="td_mng td_mng_s"><a href="./itemform.php?w=u&amp;it_id=1387871472&amp;ca_id=&amp;sel_ca_id=&amp;sel_field=it_name&amp;search=&amp;sort1=it_stock_qty&amp;sort2=desc&amp;page=1" class="btn btn_03">수정</a></td>
							</tr>
							<tr class="bg1">
								<td class="td_numbig">
									<input type="hidden" name="it_id[3]" value="1387870220">
								1387870220        </td>
								<td class="td_left"><a href="#">국어책</a></td>
								<td class="td_num">99,999</td>
								<td class="td_num">0</td>
								<td class="td_num">99,999</td>
								<td class="td_num">
									<label for="stock_qty_3" class="sound_only">재고수정</label>
									<input type="text" name="it_stock_qty[3]" value="99999" id="stock_qty_3" class="frm_input" size="10" autocomplete="off">
								</td>
								<td class="td_chk2">
									<label for="use_3" class="sound_only">판매</label>
									<input type="checkbox" name="it_use[3]" value="1" id="use_3" checked="">
								</td>
								<td class="td_chk2">
									<label for="soldout_3" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[3]" value="1" id="soldout_3">
								</td>
								<td class="td_mng td_mng_s"><a href="./itemform.php?w=u&amp;it_id=1387870220&amp;ca_id=&amp;sel_ca_id=&amp;sel_field=it_name&amp;search=&amp;sort1=it_stock_qty&amp;sort2=desc&amp;page=1" class="btn btn_03">수정</a></td>
							</tr>
							<tr class="bg0">
								<td class="td_numbig">
									<input type="hidden" name="it_id[4]" value="1387870218">
								1387870218        </td>
								<td class="td_left"><a href="#">국어책</a></td>
								<td class="td_num">99,999</td>
								<td class="td_num">0</td>
								<td class="td_num">99,999</td>
								<td class="td_num">
									<label for="stock_qty_4" class="sound_only">재고수정</label>
									<input type="text" name="it_stock_qty[4]" value="99999" id="stock_qty_4" class="frm_input" size="10" autocomplete="off">
								</td>
								<td class="td_chk2">
									<label for="use_4" class="sound_only">판매</label>
									<input type="checkbox" name="it_use[4]" value="1" id="use_4" checked="">
								</td>
								<td class="td_chk2">
									<label for="soldout_4" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[4]" value="1" id="soldout_4">
								</td>
								<td class="td_mng td_mng_s"><a href="./itemform.php?w=u&amp;it_id=1387870218&amp;ca_id=&amp;sel_ca_id=&amp;sel_field=it_name&amp;search=&amp;sort1=it_stock_qty&amp;sort2=desc&amp;page=1" class="btn btn_03">수정</a></td>
							</tr>
							<tr class="bg1">
								<td class="td_numbig">
									<input type="hidden" name="it_id[5]" value="1387870214">
								1387870214        </td>
								<td class="td_left"><a href="#">국어책</a></td>
								<td class="td_num">99,999</td>
								<td class="td_num">0</td>
								<td class="td_num">99,999</td>
								<td class="td_num">
									<label for="stock_qty_5" class="sound_only">재고수정</label>
									<input type="text" name="it_stock_qty[5]" value="99999" id="stock_qty_5" class="frm_input" size="10" autocomplete="off">
								</td>
								<td class="td_chk2">
									<label for="use_5" class="sound_only">판매</label>
									<input type="checkbox" name="it_use[5]" value="1" id="use_5" checked="">
								</td>
								<td class="td_chk2">
									<label for="soldout_5" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[5]" value="1" id="soldout_5">
								</td>
								<td class="td_mng td_mng_s"><a href="./itemform.php?w=u&amp;it_id=1387870214&amp;ca_id=&amp;sel_ca_id=&amp;sel_field=it_name&amp;search=&amp;sort1=it_stock_qty&amp;sort2=desc&amp;page=1" class="btn btn_03">수정</a></td>
							</tr>
							<tr class="bg0">
								<td class="td_numbig">
									<input type="hidden" name="it_id[6]" value="1387869984">
								1387869984        </td>
								<td class="td_left"><a href="#">국어책</a></td>
								<td class="td_num">99,999</td>
								<td class="td_num">0</td>
								<td class="td_num">99,999</td>
								<td class="td_num">
									<label for="stock_qty_6" class="sound_only">재고수정</label>
									<input type="text" name="it_stock_qty[6]" value="99999" id="stock_qty_6" class="frm_input" size="10" autocomplete="off">
								</td>
								<td class="td_chk2">
									<label for="use_6" class="sound_only">판매</label>
									<input type="checkbox" name="it_use[6]" value="1" id="use_6" checked="">
								</td>
								<td class="td_chk2">
									<label for="soldout_6" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[6]" value="1" id="soldout_6">
								</td>
								<td class="td_mng td_mng_s"><a href="./itemform.php?w=u&amp;it_id=1387869984&amp;ca_id=&amp;sel_ca_id=&amp;sel_field=it_name&amp;search=&amp;sort1=it_stock_qty&amp;sort2=desc&amp;page=1" class="btn btn_03">수정</a></td>
							</tr>
							<tr class="bg1">
								<td class="td_numbig">
									<input type="hidden" name="it_id[7]" value="1387869245">
								1387869245        </td>
								<td class="td_left"><a href="#">국어책</a></td>
								<td class="td_num">99,999</td>
								<td class="td_num">0</td>
								<td class="td_num">99,999</td>
								<td class="td_num">
									<label for="stock_qty_7" class="sound_only">재고수정</label>
									<input type="text" name="it_stock_qty[7]" value="99999" id="stock_qty_7" class="frm_input" size="10" autocomplete="off">
								</td>
								<td class="td_chk2">
									<label for="use_7" class="sound_only">판매</label>
									<input type="checkbox" name="it_use[7]" value="1" id="use_7" checked="">
								</td>
								<td class="td_chk2">
									<label for="soldout_7" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[7]" value="1" id="soldout_7">
								</td>
								<td class="td_mng td_mng_s"><a href="./itemform.php?w=u&amp;it_id=1387869245&amp;ca_id=&amp;sel_ca_id=&amp;sel_field=it_name&amp;search=&amp;sort1=it_stock_qty&amp;sort2=desc&amp;page=1" class="btn btn_03">수정</a></td>
							</tr>
							<tr class="bg0">
								<td class="td_numbig">
									<input type="hidden" name="it_id[8]" value="1387869241">
								1387869241        </td>
								<td class="td_left"><a href="#">국어책</a></td>
								<td class="td_num">99,999</td>
								<td class="td_num">0</td>
								<td class="td_num">99,999</td>
								<td class="td_num">
									<label for="stock_qty_8" class="sound_only">재고수정</label>
									<input type="text" name="it_stock_qty[8]" value="99999" id="stock_qty_8" class="frm_input" size="10" autocomplete="off">
								</td>
								<td class="td_chk2">
									<label for="use_8" class="sound_only">판매</label>
									<input type="checkbox" name="it_use[8]" value="1" id="use_8" checked="">
								</td>
								<td class="td_chk2">
									<label for="soldout_8" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[8]" value="1" id="soldout_8">
								</td>
								<td class="td_mng td_mng_s"><a href="./itemform.php?w=u&amp;it_id=1387869241&amp;ca_id=&amp;sel_ca_id=&amp;sel_field=it_name&amp;search=&amp;sort1=it_stock_qty&amp;sort2=desc&amp;page=1" class="btn btn_03">수정</a></td>
							</tr>
							<tr class="bg1">
								<td class="td_numbig">
									<input type="hidden" name="it_id[9]" value="1387868855">
								1387868855        </td>
								<td class="td_left"><a href="#">국어책</a></td>
								<td class="td_num">99,999</td>
								<td class="td_num">0</td>
								<td class="td_num">99,999</td>
								<td class="td_num">
									<label for="stock_qty_9" class="sound_only">재고수정</label>
									<input type="text" name="it_stock_qty[9]" value="99999" id="stock_qty_9" class="frm_input" size="10" autocomplete="off">
								</td>
								<td class="td_chk2">
									<label for="use_9" class="sound_only">판매</label>
									<input type="checkbox" name="it_use[9]" value="1" id="use_9" checked="">
								</td>
								<td class="td_chk2">
									<label for="soldout_9" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[9]" value="1" id="soldout_9">
								</td>
								<td class="td_mng td_mng_s"><a href="./itemform.php?w=u&amp;it_id=1387868855&amp;ca_id=&amp;sel_ca_id=&amp;sel_field=it_name&amp;search=&amp;sort1=it_stock_qty&amp;sort2=desc&amp;page=1" class="btn btn_03">수정</a></td>
							</tr>
							<tr class="bg0">
								<td class="td_numbig">
									<input type="hidden" name="it_id[10]" value="1387868853">
								1387868853        </td>
								<td class="td_left"><a href="#">국어책</a></td>
								<td class="td_num">99,999</td>
								<td class="td_num">0</td>
								<td class="td_num">99,999</td>
								<td class="td_num">
									<label for="stock_qty_10" class="sound_only">재고수정</label>
									<input type="text" name="it_stock_qty[10]" value="99999" id="stock_qty_10" class="frm_input" size="10" autocomplete="off">
								</td>
								<td class="td_chk2">
									<label for="use_10" class="sound_only">판매</label>
									<input type="checkbox" name="it_use[10]" value="1" id="use_10" checked="">
								</td>
								<td class="td_chk2">
									<label for="soldout_10" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[10]" value="1" id="soldout_10">
								</td>
								<td class="td_mng td_mng_s"><a href="./itemform.php?w=u&amp;it_id=1387868853&amp;ca_id=&amp;sel_ca_id=&amp;sel_field=it_name&amp;search=&amp;sort1=it_stock_qty&amp;sort2=desc&amp;page=1" class="btn btn_03">수정</a></td>
							</tr>
							<tr class="bg1">
								<td class="td_numbig">
									<input type="hidden" name="it_id[11]" value="1387868851">
								1387868851        </td>
								<td class="td_left"><a href="#">국어책</a></td>
								<td class="td_num">99,999</td>
								<td class="td_num">0</td>
								<td class="td_num">99,999</td>
								<td class="td_num">
									<label for="stock_qty_11" class="sound_only">재고수정</label>
									<input type="text" name="it_stock_qty[11]" value="99999" id="stock_qty_11" class="frm_input" size="10" autocomplete="off">
								</td>
								<td class="td_chk2">
									<label for="use_11" class="sound_only">판매</label>
									<input type="checkbox" name="it_use[11]" value="1" id="use_11" checked="">
								</td>
								<td class="td_chk2">
									<label for="soldout_11" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[11]" value="1" id="soldout_11">
								</td>
								<td class="td_mng td_mng_s"><a href="./itemform.php?w=u&amp;it_id=1387868851&amp;ca_id=&amp;sel_ca_id=&amp;sel_field=it_name&amp;search=&amp;sort1=it_stock_qty&amp;sort2=desc&amp;page=1" class="btn btn_03">수정</a></td>
							</tr>
							<tr class="bg0">
								<td class="td_numbig">
									<input type="hidden" name="it_id[12]" value="1387871842">
								1387871842        </td>
								<td class="td_left"><a href="#">국어책</a></td>
								<td class="td_num">99,999</td>
								<td class="td_num">0</td>
								<td class="td_num">99,999</td>
								<td class="td_num">
									<label for="stock_qty_12" class="sound_only">재고수정</label>
									<input type="text" name="it_stock_qty[12]" value="99999" id="stock_qty_12" class="frm_input" size="10" autocomplete="off">
								</td>
								<td class="td_chk2">
									<label for="use_12" class="sound_only">판매</label>
									<input type="checkbox" name="it_use[12]" value="1" id="use_12" checked="">
								</td>
								<td class="td_chk2">
									<label for="soldout_12" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[12]" value="1" id="soldout_12">
								</td>
								<td class="td_mng td_mng_s"><a href="./itemform.php?w=u&amp;it_id=1387871842&amp;ca_id=&amp;sel_ca_id=&amp;sel_field=it_name&amp;search=&amp;sort1=it_stock_qty&amp;sort2=desc&amp;page=1" class="btn btn_03">수정</a></td>
							</tr>
							<tr class="bg1">
								<td class="td_numbig">
									<input type="hidden" name="it_id[13]" value="1387868087">
								1387868087        </td>
								<td class="td_left"><a href="#">국어책</a></td>
								<td class="td_num">99,999</td>
								<td class="td_num">0</td>
								<td class="td_num">99,999</td>
								<td class="td_num">
									<label for="stock_qty_13" class="sound_only">재고수정</label>
									<input type="text" name="it_stock_qty[13]" value="99999" id="stock_qty_13" class="frm_input" size="10" autocomplete="off">
								</td>
								<td class="td_chk2">
									<label for="use_13" class="sound_only">판매</label>
									<input type="checkbox" name="it_use[13]" value="1" id="use_13" checked="">
								</td>
								<td class="td_chk2">
									<label for="soldout_13" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[13]" value="1" id="soldout_13">
								</td>
								<td class="td_mng td_mng_s"><a href="./itemform.php?w=u&amp;it_id=1387868087&amp;ca_id=&amp;sel_ca_id=&amp;sel_field=it_name&amp;search=&amp;sort1=it_stock_qty&amp;sort2=desc&amp;page=1" class="btn btn_03">수정</a></td>
							</tr>
							<tr class="bg0">
								<td class="td_numbig">
									<input type="hidden" name="it_id[14]" value="1387871712">
								1387871712        </td>
								<td class="td_left"><a href="#">국어책</a></td>
								<td class="td_num">99,999</td>
								<td class="td_num">0</td>
								<td class="td_num">99,999</td>
								<td class="td_num">
									<label for="stock_qty_14" class="sound_only">재고수정</label>
									<input type="text" name="it_stock_qty[14]" value="99999" id="stock_qty_14" class="frm_input" size="10" autocomplete="off">
								</td>
								<td class="td_chk2">
									<label for="use_14" class="sound_only">판매</label>
									<input type="checkbox" name="it_use[14]" value="1" id="use_14" checked="">
								</td>
								<td class="td_chk2">
									<label for="soldout_14" class="sound_only">품절</label>
									<input type="checkbox" name="it_soldout[14]" value="1" id="soldout_14">
								</td>
								<td class="td_mng td_mng_s"><a href="./itemform.php?w=u&amp;it_id=1387871712&amp;ca_id=&amp;sel_ca_id=&amp;sel_field=it_name&amp;search=&amp;sort1=it_stock_qty&amp;sort2=desc&amp;page=1" class="btn btn_03">수정</a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="btn_fixed_top">
					<a href="./optionstocklist.php" class="btn btn_02">상품옵션재고</a>
					<a href="./itemsellrank.php" class="btn btn_02">상품판매순위</a>
					<input type="submit" value="일괄수정" class="btn_submit btn">
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
<?php
include_once("footer.php")
?>