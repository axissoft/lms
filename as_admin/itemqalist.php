<? 
$sub_menu="400";
include_once("header.php")
?>
<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">상품문의</h1>
		<div class="container_wr">
			<div class="local_ov01 local_ov">
				<a href="#" class="ov_listall">전체목록</a>
				<span class="btn_ov01">
					<span class="ov_txt"> 전체 문의내역</span>
					<span class="ov_num"> 152건</span>
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
					<option value="a.it_id">상품코드</option>
				</select>
				<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
				<input type="text" name="stx" value="" id="stx" required="" class="frm_input required">
				<input type="submit" value="검색" class="btn_submit">
			</form>
			<form name="fitemqalist" method="post" autocomplete="off">
				<input type="hidden" name="sca" value="">
				<input type="hidden" name="sst" value="iq_id">
				<input type="hidden" name="sod" value="desc">
				<input type="hidden" name="sfl" value="it_name">
				<input type="hidden" name="stx" value="">
				<input type="hidden" name="page" value="1">
				<div class="tbl_head01 tbl_wrap" id="itemqalist">
					<table>
						<caption>상품문의 목록</caption>
						<thead>
							<tr>
								<th scope="col">
									<label for="chkall" class="sound_only">상품문의 전체</label>
									<input type="checkbox" name="chkall" value="1" id="chkall" onclick="check_all(this.form)">
								</th>
								<th scope="col"><a href="#">상품명</a></th>
								<th scope="col"><a href="#">질문</a></th>
								<th scope="col"><a href="#">이름</a></th>
								<th scope="col"><a href="#">답변</a></th>
								<th scope="col">관리</th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg0">
								<td class="td_chk">
									<label for="chk_0" class="sound_only">gdfsdsdf 상품문의</label>
									<input type="checkbox" name="chk[]" value="0" id="chk_0">
									<input type="hidden" name="iq_id[0]" value="163">
								</td>
								<td class="td_left"><a href="#"><img src="" width="50" height="50" alt=""> TH-워싱 스트레치 카고 그레이2</a></td>
								<td class="td_left">
									<a href="#" class="qa_href" target="0">gdfsdsdf <span class="tit_op">열기</span></a>
									<div id="qa_div0" class="qa_div" style="display:none;">
										<div class="qa_q">
											<strong>문의내용</strong>
											<p>ssdadsds</p>
										</div>
										<div class="qa_a">
												<strong>답변</strong>
												답변이 등록되지 않았습니다.
										</div>
									</div>
								</td>
									<td class="td_name">
										<span class="sv_wrap">
											<a href="#" class="sv_member" title="" target="_blank" rel="nofollow">
												<span class="profile_img"></span> 엑시스소프트
											</a>
											<span class="sv">
												<a href="#">쪽지보내기</a>
												<a href="#">메일보내기</a>
												<a href="#">자기소개</a>
												<a href="#" class="link_new_page">전체게시물</a>
											</span>
											<noscript class="sv_nojs">
												<span class="sv">
													<a href="#">쪽지보내기</a>
													<a href="#">메일보내기</a>
													<a href="#">자기소개</a>
													<a href="#" class="link_new_page">전체게시물</a>
												</span>
											</noscript>
									</span>
								</td>
								<td class="td_boolean">&nbsp;</td>
								<td class="td_mng td_mng_s">
									<a href="./itemqaform.php?w=u&amp;iq_id=163&amp;sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=&amp;sca=&amp;save_stx=" class="btn btn_03"><span class="sound_only">gdfsdsdf </span>수정</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="btn_fixed_top">
					<input type="submit" name="act_button" value="선택삭제" class="btn btn_02">
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