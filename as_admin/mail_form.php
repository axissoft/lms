<?php
$sub_menu = "200";
include_once("header.php")
?>
<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">회원메일입력</h1>
		<div class="container_wr">
			<div class="local_desc"><p>메일 내용에 {이름} , {닉네임} , {회원아이디} , {이메일} 처럼 내용에 삽입하면 해당 내용에 맞게 변환하여 메일을 발송합니다.</p></div>
			<form name="fmailform" id="fmailform" method="post">
				<input type="hidden" name="w" value="" id="w">
				<input type="hidden" name="ma_id" value="" id="ma_id">
				<input type="hidden" name="token" value="" id="token">				
				<div class="tbl_frm01 tbl_wrap">
					<table>
						<caption>회원메일입력</caption>
						<colgroup>
							<col class="grid_4">
							<col>
						</colgroup>
						<tbody>
							<tr>
								<th scope="row"><label for="ma_subject">메일 제목<strong class="sound_only">필수</strong></label></th>
								<td><input type="text" name="ma_subject" value="" id="ma_subject" required="" class="required frm_input" size="100"></td>
							</tr>
							<tr>
								<th scope="row"><label for="ma_content">메일 내용<strong class="sound_only">필수</strong></label></th>
								<td>
									<span class="sound_only">웹에디터 시작</span>
									<form method="post">
									  <textarea id="summernote3" name="editordata"></textarea>
									</form>
									<script>
										$('#summernote3').summernote({						        
							        tabsize: 2,
							        height: 300
							      });
									</script>
									<span class="sound_only">웹 에디터 끝</span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="btn_fixed_top ">
					<input type="submit" class="btn_submit btn" accesskey="s" value="확인">
				</div>
			</form>
		</div>    
	</div>
</div>
<?php
include_once("footer.php")
?>