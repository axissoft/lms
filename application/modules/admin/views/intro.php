<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title"> 관리</h1>
		<div class="container_wr">
			<section class="chart">
				<canvas id="myChart"></canvas>
					<script>
						var ctx = document.getElementById('myChart').getContext('2d');
						var chart = new Chart(ctx, {
						    // The type of chart we want to create
						    type: 'bar',

						    // The data for our dataset
						    data: {
						        labels: ["January", "February", "March", "April", "May", "June", "July"],
						        datasets: [{
						            label: "My First dataset",
						            backgroundColor: 'rgb(255, 99, 132)',
						            borderColor: 'rgb(255, 99, 132)',
						            data: [0, 10, 5, 2, 20, 30, 45],
						        }]
						    },

						    // Configuration options go here
						    options: {responsive: true}
						});
					</script>
			</section>
			<section id="anc_sidx_settle">
				<h2>결제수단별 주문현황</h2>
				<ul class="anchor sidx_anchor">
					<li><a href="#anc_sidx_ord">주문현황</a></li>
					<li><a href="#anc_sidx_rdy">입금완료미배송내역</a></li>
					<li><a href="#anc_sidx_wait">미입금주문내역</a></li>
					<li><a href="#anc_sidx_ps">사용후기</a></li>
					<li><a href="#anc_sidx_qna">상품문의</a></li>
				</ul>
				<div id="sidx_settle" class="tbl_head01 tbl_wrap">
					<table>
						<thead>
							<tr>
								<th scope="col" rowspan="2">구분</th>
								<th scope="col" colspan="2">07-29 (일)</th>
								<th scope="col" colspan="2">07-30 (월)</th>
								<th scope="col" colspan="2">07-31 (화)</th>
							</tr>
							<tr>
								<th scope="col">건수</th>
								<th scope="col">금액</th>
								<th scope="col">건수</th>
								<th scope="col">금액</th>
								<th scope="col">건수</th>
								<th scope="col">금액</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row" id="th_val_1" class="td_category">신용카드</th>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr>
								<th scope="row" id="th_val_2" class="td_category">계좌이체</th>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr>
								<th scope="row" id="th_val_3" class="td_category">가상계좌</th>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr>
								<th scope="row" id="th_val_4" class="td_category">무통장</th>
								<td>1</td>
								<td>36,000</td>
								<td>4</td>
								<td>104,900</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr>
								<th scope="row" id="th_val_5" class="td_category">휴대폰</th>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr>
								<th scope="row" id="th_val_6" class="td_category">포인트</th>
								<td>0</td>
								<td>0</td>
								<td>1</td>
								<td>10,000</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr>
								<th scope="row" id="th_val_7" class="td_category">쿠폰</th>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
						</tbody>
					</table>
				</div>
			</section>
			<div class="sidx sidx_cs">
				<section id="anc_sidx_oneq">
					<h2>1:1문의</h2>
					<ul class="anchor sidx_anchor">
						<li><a href="#anc_sidx_ord">주문현황</a></li>
						<li><a href="#anc_sidx_rdy">입금완료미배송내역</a></li>
						<li><a href="#anc_sidx_wait">미입금주문내역</a></li>
						<li><a href="#anc_sidx_ps">사용후기</a></li>
						<li><a href="#anc_sidx_qna">상품문의</a></li>
					</ul>
					<div class="ul_01 ul_wrap">
						<ul>
							<li>
								<span class="oneq_cate oneq_span">회원</span>
								<a href="#" target="_blank" class="oneq_link">test</a>
								<span class="sv_wrap">
									<a href="#" class="sv_member" title="액시스소프트 자기소개" target="_blank" rel="nofollow"><span class="profile_img"></span>액시스소프트</a>
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
							</li>
							<li>
								<span class="oneq_cate oneq_span">회원</span>
								<a href="#" target="_blank" class="oneq_link">r</a>
								<span class="sv_wrap">
									<a href="#" class="sv_member" title="액시스소프트 자기소개" target="_blank" rel="nofollow">
										<span class="profile_img"></span> 액시스소프트
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
											<a href="#" >자기소개</a>
											<a href="#" class="link_new_page">전체게시물</a>
										</span>
									</noscript>
								</span>
							</li>
						</ul>
					</div>
					<div class="btn_list03 btn_list">
						<a href="#">1:1문의 더보기</a>
					</div>
				</section>
				<section id="anc_sidx_qna">
					<h2>상품문의</h2>
					<ul class="anchor sidx_anchor">
						<li><a href="#anc_sidx_ord">주문현황</a></li>
						<li><a href="#anc_sidx_rdy">입금완료미배송내역</a></li>
						<li><a href="#anc_sidx_wait">미입금주문내역</a></li>
						<li><a href="#anc_sidx_ps">사용후기</a></li>
						<li><a href="#anc_sidx_qna">상품문의</a></li>
					</ul>
					<div class="ul_01 ul_wrap">
						<ul>
							<li>
								<a href="<?=base_url('/admin/goods')?>/itemqaform?w=u&amp;iq_id=160" class="qna_link">ㅅㅅㅅ</a>
								<span class="sv_wrap">
									<a href="#" class="sv_member" title="액시스소프트 자기소개" target="_blank" rel="nofollow">
										<span class="profile_img"></span> 액시스소프트
									</a>
									<span class="sv">
										<a href="#">쪽지보내기</a>
										<a href="#">메일보내기</a>
										<a href="#" >자기소개</a>
										<a href="#" class="link_new_page">전체게시물</a>
									</span>
									<noscript class="sv_nojs">
										<span class="sv">
											<a href="#">쪽지보내기</a>
											<a href="#">메일보내기</a>
											<a href="#" >자기소개</a>
											<a href="#" class="link_new_page">전체게시물</a>
										</span>
									</noscript>
								</span>
							</li>
							<li>
								<a href="<?=base_url('/admin/goods')?>/itemqaform?w=u&amp;iq_id=157" class="qna_link">ㅇㅇㅇ</a>
								<span class="sv_wrap">
									<a href="#" class="sv_member" title="액시스소프트 자기소개" target="_blank" rel="nofollow"><span class="profile_img"></span> 액시스소프트</a>
									<span class="sv">
										<a href="#">쪽지보내기</a>
										<a href="#">메일보내기</a>
										<a href="#" >자기소개</a>
										<a href="#" class="link_new_page">전체게시물</a>
									</span>

									<noscript class="sv_nojs"><span class="sv">
										<a href="#">쪽지보내기</a>
										<a href="#">메일보내기</a>
										<a href="#" >자기소개</a>
										<a href="#" class="link_new_page">전체게시물</a>
									</span>
								</noscript></span>
							</li>
						</ul>
					</div>

					<div class="btn_list03 btn_list">
						<a href="<?=base_url('/admin/goods')?>/itemqalist?sort1=iq_answer&amp;sort2=asc">상품문의 더보기</a>
					</div>
				</section>

				<section id="anc_sidx_ps">
					<h2>사용후기</h2>
					<ul class="anchor sidx_anchor">
						<li><a href="#anc_sidx_ord">주문현황</a></li>
						<li><a href="#anc_sidx_rdy">입금완료미배송내역</a></li>
						<li><a href="#anc_sidx_wait">미입금주문내역</a></li>
						<li><a href="#anc_sidx_ps">사용후기</a></li>
						<li><a href="#anc_sidx_qna">상품문의</a></li>
					</ul>
					<div class="ul_01 ul_wrap">
						<ul>
							<li>
								<a href="<?=base_url('/admin/goods')?>/itemuseform?w=u&amp;is_id=2" class="ps_link">넘이쁘네요^^</a>
								<span class="sv_wrap">
									<a href="#" class="sv_member" title="이좌근 자기소개" target="_blank" rel="nofollow">
										<span class="profile_img"></span> 이좌근
									</a>
									<span class="sv">
										<a href="#">쪽지보내기</a>
										<a href="#">메일보내기</a>
										<a href="#" >자기소개</a>
										<a href="#" class="link_new_page">전체게시물</a>
									</span>
									<noscript class="sv_nojs">
										<span class="sv">
											<a href="#">쪽지보내기</a>
											<a href="#">메일보내기</a>
											<a href="#" >자기소개</a>
											<a href="#" class="link_new_page">전체게시물</a>
										</span>
									</noscript>
								</span>
							</li>
							<li>
								<a href="<?=base_url('/admin/goods')?>/itemuseform?w=u&amp;is_id=1" class="ps_link">후기 테스트</a>
								<span class="sv_wrap">
									<a href="#" class="sv_member" title="test 자기소개" target="_blank" rel="nofollow">
										<span class="profile_img"></span> test
									</a>
									<span class="sv">
										<a href="#">쪽지보내기</a>
										<a href="#" >자기소개</a>
										<a href="#" class="link_new_page">전체게시물</a>
									</span>
									<noscript class="sv_nojs">
										<span class="sv">
											<a href="#">쪽지보내기</a>
											<a href="#">자기소개</a>
											<a href="#" class="link_new_page">전체게시물</a>
										</span>
									</noscript>
								</span>
							</li>
						</ul>
					</div>
					<div class="btn_list03 btn_list">
						<a href="<?=base_url('/admin/goods')?>/itemuselist?sort1=is_confirm&amp;sort2=asc">사용후기 더보기</a>
					</div>
				</section>
			</div>						
		</div>    
		<footer id="ft">
			<p>
				AXISSOFT<br>
				<button type="button" class="scroll_top"><span class="top_img"></span><span class="top_txt">TOP</span></button>
			</p>
		</footer>			
	</body>
</html>