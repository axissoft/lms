<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">사용후기</h1>
		<div class="container_wr">
			<form name="fitemuseform" method="post">
				<input type="hidden" name="w" value="u">
				<input type="hidden" name="is_id" value="243">
				<input type="hidden" name="it_id" value="77777">
				<input type="hidden" name="sca" value="">
				<input type="hidden" name="sst" value="">
				<input type="hidden" name="sod" value="">
				<input type="hidden" name="sfl" value="">
				<input type="hidden" name="stx" value="">
				<input type="hidden" name="page" value="0">
				<div class="tbl_frm01 tbl_wrap">
					<table>
						<caption>사용후기 수정</caption>
						<colgroup>
							<col class="grid_4">
							<col>
						</colgroup>
						<tbody>
							<tr>
								<th scope="row">상품명</th>
								<td><a href=#">올림푸스 E-PL8 14-42mm EZ Kit</a></td>
							</tr>
							<tr>
								<th scope="row">이름</th>
								<td>
									<span class="sv_wrap">
										<a href="#" class="sv_member" title="김민철 자기소개" target="_blank" rel="nofollow">
											<span class="profile_img">												
											</span> 김민철
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
							</tr>							
							<tr>
								<th scope="row"><label for="is_subject">제목</label></th>
								<td><input type="text" name="is_subject" required="" class="required frm_input" id="is_subject" size="100" value="테스트"></td>
							</tr>
							<tr>
								<th scope="row">내용</th>
								<td>
									<span class="sound_only">웹에디터 시작</span>
									<form method="post">
									  <textarea id="summernote10" name="editordata"></textarea>
									</form>
									<script>
										$('#summernote10').summernote({						        
							        tabsize: 2,
							        height: 300
							      });
									</script>
									<span class="sound_only">웹 에디터 끝</span></td>
							</tr>
							<tr>
								<th scope="row"><label for="is_reply_subject">답변 제목</label></th>
								<td><input type="text" name="is_reply_subject" class="frm_input" id="is_reply_subject" size="100" value=""></td>
							</tr>
							<tr>
								<th scope="row">답변 내용</th>
								<td>
									<span class="sound_only">웹에디터 시작</span>
									<form method="post">
									  <textarea id="summernote11" name="editordata"></textarea>
									</form>
									<script>
										$('#summernote11').summernote({						        
							        tabsize: 2,
							        height: 300
							      });
									</script>
									<span class="sound_only">웹 에디터 끝</span></td>
								</tr>
								<tr>
									<th scope="row">확인</th>
									<td>
										<input type="radio" name="is_confirm" value="1" id="is_confirm_yes" checked="checked">
										<label for="is_confirm_yes">예</label>
										<input type="radio" name="is_confirm" value="0" id="is_confirm_no">
										<label for="is_confirm_no">아니오</label>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="btn_fixed_top">
						<a href="<?=base_url('/admin/goods')?>/itemuselist?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=0&amp;sca=" class="btn_02 btn">목록</a>
						<input type="submit" value="확인" class="btn_submit btn" accesskey="s">
					</div>
				</form>
			</div>    
		</div>
	</div>