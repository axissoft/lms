<?php
$sub_menu = "300";
include_once("header.php")
?>
<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">내용 관리</h1>
		<div class="container_wr">
			<form name="frmcontentform" method="post" enctype="MULTIPART/FORM-DATA">
				<input type="hidden" name="w" value="">
				<input type="hidden" name="co_html" value="1">
				<input type="hidden" name="token" value="">
				<div class="tbl_frm01 tbl_wrap">
					<table>
						<caption>내용 관리 목록</caption>
						<colgroup>
							<col class="grid_4">
							<col>
						</colgroup>
						<tbody>
							<tr>
								<th scope="row"><label for="co_subject">제목</label></th>
								<td><input type="text" name="co_subject" value="" id="co_subject" required="" class="frm_input required" size="90"></td>
							</tr>
							<tr>
								<th scope="row">내용</th>
								<td>
									<span class="sound_only">웹에디터 시작</span>
									<form method="post">
									  <textarea id="summernote4" name="editordata"></textarea>
									</form>
									<script>
										$('#summernote4').summernote({						        
							        tabsize: 2,
							        height: 300
							      });
									</script>	
									<span class="sound_only">웹 에디터 끝</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="btn_fixed_top">
						<a href="./contentlist.php" class="btn btn_02">목록</a>
						<input type="submit" value="확인" class="btn btn_submit" accesskey="s">
					</div>
				</form>			
			</div>
		</div>
	</div>
<?php
include_once("footer.php")
?>