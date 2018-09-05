<? 
$sub_menu = "400";
include_once("header.php")
?>
<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">상품문의</h1>
		<div class="container_wr">
			<form name="fitemqaform" method="post">
				<input type="hidden" name="w" value="u">
				<input type="hidden" name="iq_id" value="163">
				<input type="hidden" name="sca" value="">
				<input type="hidden" name="sst" value="">
				<input type="hidden" name="sod" value="">
				<input type="hidden" name="sfl" value="">
				<input type="hidden" name="stx" value="">
				<input type="hidden" name="page" value="0">
				<div class="local_desc01 local_desc">
					<p>상품에 대한 문의에 답변하실 수 있습니다. 상품 문의 내용의 수정도 가능합니다.</p>
				</div>
				<div class="tbl_frm01 tbl_wrap">
					<table>
						<caption>상품문의 수정</caption>
						<colgroup>
							<col class="grid_4">
							<col>
						</colgroup>
						<tbody>
							<tr>
								<th scope="row">이름</th>
								<td>
									<span class="sv_wrap">
										<a href="#" class="sv_member" title="" target="_blank" rel="nofollow"><span class="profile_img"></span> 엑시스소프트</a>
										<span class="sv">
											<a href="#">쪽지보내기</a>
											<a href="#">메일보내기</a>
											<a href="#">자기소개</a>
											<a href="#">전체게시물</a>
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
							</tr>
							<tr>
								<th scope="row">이메일</th>
								<td>****@****.****</td>
							</tr>
							<tr>
								<th scope="row">휴대폰</th>
								<td></td>
							</tr>
							<tr>
								<th scope="row"><label for="iq_subject">제목</label></th>
								<td><input type="text" name="iq_subject" value="gdfsdsdf" id="iq_subject" required="" class="frm_input required" size="95"></td>
							</tr>
							<tr>
								<th scope="row"><label for="iq_question">질문</label></th>
								<td>
									<span class="sound_only">웹에디터 시작</span>
									<script>document.write("<div class='cke_sc'><button type='button' class='btn_cke_sc'>단축키 일람</button></div>");</script>
									<div class="cke_sc"><button type="button" class="btn_cke_sc">단축키 일람</button></div>
									<script src="http://demo.sir.kr/gnuboard5/plugin/editor/smarteditor2/js/service/HuskyEZCreator.js"></script>
									<script>var g5_editor_url = "http://demo.sir.kr/gnuboard5/plugin/editor/smarteditor2", oEditors = [], ed_nonce = "Q3f3VHw7Y0|1533110829|15875b665494f4f77415cd7652ffdbc7d7451c1d";</script>
									<script src="http://demo.sir.kr/gnuboard5/plugin/editor/smarteditor2/config.js"></script>
									<script>
										$(function(){
											$(".btn_cke_sc").click(function(){
												if ($(this).next("div.cke_sc_def").length) {
													$(this).next("div.cke_sc_def").remove();
													$(this).text("단축키 일람");
												} else {
													$(this).after("<div class='cke_sc_def' />").next("div.cke_sc_def").load("http://demo.sir.kr/gnuboard5/plugin/editor/smarteditor2/shortcut.html");
													$(this).text("단축키 일람 닫기");
												}
											});
											$(document).on("click", ".btn_cke_sc_close", function(){
												$(this).parent("div.cke_sc_def").remove();
											});
										});
									</script>
									<textarea id="iq_question" name="iq_question" class="smarteditor2" maxlength="65536" style="width: 100%; height: 300px; display: none;">&lt;p&gt;ssdadsds&lt;/p&gt;</textarea>
									<iframe frameborder="0" scrolling="no" style="width: 100%; height: 349px;" src="http://demo.sir.kr/gnuboard5/plugin/editor/smarteditor2/SmartEditor2Skin.html"></iframe>
									<span class="sound_only">웹 에디터 끝</span>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="iq_answer">답변</label></th>
								<td><span class="sound_only">웹에디터 시작</span><script>document.write("<div class='cke_sc'><button type='button' class='btn_cke_sc'>단축키 일람</button></div>");</script><div class="cke_sc"><button type="button" class="btn_cke_sc">단축키 일람</button></div>
									<textarea id="iq_answer" name="iq_answer" class="smarteditor2" maxlength="65536" style="width: 100%; height: 300px; display: none;"></textarea><iframe frameborder="0" scrolling="no" style="width: 100%; height: 349px;" src="http://demo.sir.kr/gnuboard5/plugin/editor/smarteditor2/SmartEditor2Skin.html"></iframe>
									<span class="sound_only">웹 에디터 끝</span></td>
									<!-- <td><textarea name="iq_answer" id="iq_answer" rows="7"></textarea></td> -->
								</tr>
							</tbody>
						</table>
					</div>
					<div class="btn_fixed_top">
						<a href="./itemqalist.php?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=0&amp;sca=" class="btn btn_02">목록</a>
						<input type="submit" accesskey="s" value="확인" class="btn_submit btn">
					</div>
				</form>
			</div>
		</div>
	</div>
<?php
include_once("footer.php")
?>