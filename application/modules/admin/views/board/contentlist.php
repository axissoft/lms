<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">내용관리</h1>
		<div class="container_wr">
			<div class="local_ov01 local_ov">
				<span class="btn_ov01"><span class="ov_txt">전체 내용</span><span class="ov_num"> 36건</span></span>
			</div>
			<div class="btn_fixed_top">
				<a href="<?=base_url('/admin/board')?>/contentform" class="btn btn_01">내용 추가</a>
			</div>
			<div class="tbl_head01 tbl_wrap">
				<table>
					<caption>내용관리 목록</caption>
					<thead>
						<tr>
							<th scope="col">코드</th>
							<th scope="col">제목</th>
							<th scope="col">관리</th>
						</tr>
					</thead>
					<tbody>
						<tr class="bg0">
							<td class="td_id">c001</td>
							<td class="td_left">회사소개</td>
							<td class="td_mng td_mng_l">
								<a href="<?=base_url('/admin/board')?>/contentform?w=u&amp;co_id=01_01" class="btn btn_03"><span class="sound_only">회사소개 </span>수정</a>
								<a href="#" class="btn btn_02"><span class="sound_only">회사소개 </span> 보기</a>
								<a href="#" class="btn btn_02"><span class="sound_only">회사소개 </span>삭제</a>
							</td>
						</tr>
						<tr class="bg1">
							<td class="td_id">c002</td>
							<td class="td_left">오시는길</td>
							<td class="td_mng td_mng_l">
								<a href="<?=base_url('/admin/board')?>/contentform?w=u&amp;co_id=01_02" class="btn btn_03"><span class="sound_only">오시는길 </span>수정</a>
								<a href="#" class="btn btn_02"><span class="sound_only">오시는길 </span> 보기</a>
								<a href="#" class="btn btn_02"><span class="sound_only">오시는길 </span>삭제</a>
							</td>
						</tr>
						<tr class="bg0">
							<td class="td_id">c003</td>
							<td class="td_left">테스트컨텐츠</td>
							<td class="td_mng td_mng_l">
								<a href="<?=base_url('/admin/board')?>/contentform?w=u&amp;co_id=1" class="btn btn_03"><span class="sound_only">1 </span>수정</a>
								<a href="#" class="btn btn_02"><span class="sound_only">1 </span> 보기</a>
								<a href="#" class="btn btn_02"><span class="sound_only">1 </span>삭제</a>
							</td>
						</tr>
						<tr class="bg1">
							<td class="td_id">c003</td>
							<td class="td_left">테스트컨텐츠</td>
							<td class="td_mng td_mng_l">
								<a href="<?=base_url('/admin/board')?>/contentform?w=u&amp;co_id=111test111" class="btn btn_03"><span class="sound_only">test111 </span>수정</a>
								<a href="#" class="btn btn_02"><span class="sound_only">test111 </span> 보기</a>
								<a href="#" class="btn btn_02"><span class="sound_only">test111 </span>삭제</a>
							</td>
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
					<a href="#" class="pg_page pg_end">맨끝</a>
				</span>
			</nav>
		</div>    
	</div>
</div>