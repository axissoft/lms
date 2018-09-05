<?php
$sub_menu ="200";
include_once("header.php")
?>
<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">접근가능그룹</h1>
		<div class="container_wr">
			<form name="fboardgroupmember_form" id="fboardgroupmember_form" method="post">
				<input type="hidden" name="mb_id" value="admin" id="mb_id">
				<input type="hidden" name="token" value="" id="token">
				<div class="local_ov01 local_ov">
					<span class="btn_ov01">
						<span class="ov_txt"> 아이디</span>
						<span class="ov_num">admin</span>
					</span>
					<span class="btn_ov01">
						<span class="ov_txt"> 이름</span>
						<span class="ov_num">최고관리자</span>
					</span>
					<span class="btn_ov01">
						<span class="ov_txt"> 닉네임</span>
						<span class="ov_num">최고관리자</span>
					</span>
				</div>    
				<div class="local_cmd01 local_cmd">
					<label for="gr_id">그룹지정</label>
					<select name="gr_id" id="gr_id">
						<option value="">접근가능 그룹을 선택하세요.</option>
					</select>
					<input type="submit" value="선택" class="btn_submit btn" accesskey="s">
				</div>
			</form>
			<form name="fboardgroupmember" id="fboardgroupmember" method="post">
				<input type="hidden" name="sst" value="" id="sst">
				<input type="hidden" name="sod" value="" id="sod">
				<input type="hidden" name="sfl" value="" id="sfl">
				<input type="hidden" name="stx" value="" id="stx">
				<input type="hidden" name="page" value="" id="page">
				<input type="hidden" name="token" value="" id="token">
				<input type="hidden" name="mb_id" value="admin" id="mb_id">
				<input type="hidden" name="w" value="d" id="w">
				<div class="tbl_head01 tbl_wrap">
					<table>
						<caption>접근가능그룹 목록</caption>
						<thead>
							<tr>
								<th scope="col">
									<label for="chkall" class="sound_only">접근가능그룹 전체</label>
									<input type="checkbox" name="chkall" value="1" id="chkall">
								</th>
								<th scope="col">그룹아이디</th>
								<th scope="col">그룹</th>
								<th scope="col">처리일시</th>
							</tr>
						</thead>
						<tbody>						
							<tr>
								<td colspan="4" class="empty_table">접근가능한 그룹이 없습니다.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="btn_list01 btn_list">
					<input type="submit" name="" value="선택삭제" class="btn btn_02">
				</div>
			</form>
		</div>    
	</div>
</div>
<?php
include_once("footer.php")
?>