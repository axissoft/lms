<?php
$sub_menu = "100";
include_once("header.php");
?>
<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">환경설정</h1>
		<div class="container_wr">
			<form name="fconfig" onsubmit="return fconfig_check(this)" method="post" enctype="MULTIPART/FORM-DATA">
				<input type="hidden" name="token" value="">
				<section id="anc_scf_info">
					<h2 class="h2_frm">사업자정보</h2>
					<div class="local_desc02 local_desc">
						<p>
							사업자정보는 tail.php 와 content.php 에서 표시합니다.<br>
							대표전화번호는 SMS 발송번호로 사용되므로 사전등록된 발신번호와 일치해야 합니다.
						</p>
					</div>
					<div class="tbl_frm01 tbl_wrap">
						<table>
							<caption>사업자정보 입력</caption>
							<colgroup>
							<col class="grid_4">
							<col>
							<col class="grid_4">
							<col>
						</colgroup>
						<tbody>
							<tr>
								<th scope="row"><label for="de_admin_company_name">회사명</label></th>
								<td>
									<input type="text" name="de_admin_company_name" value="" id="de_admin_company_name" class="frm_input" size="30">
								</td>
								<th scope="row"><label for="de_admin_company_saupja_no">사업자등록번호</label></th>
								<td>
									<input type="text" name="de_admin_company_saupja_no" value="" id="de_admin_company_saupja_no" class="frm_input" size="30">
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_admin_company_owner">대표자명</label></th>
								<td colspan="3">
									<input type="text" name="de_admin_company_owner" value="" id="de_admin_company_owner" class="frm_input" size="30">
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_admin_company_tel">대표전화번호</label></th>
								<td>&nbsp;</td>
								<th scope="row"><label for="de_admin_company_fax">팩스번호</label></th>
								<td>
									<input type="text" name="de_admin_company_fax" value="" id="de_admin_company_fax" class="frm_input" size="30">
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_admin_tongsin_no">통신판매업 신고번호</label></th>
								<td>
									<input type="text" name="de_admin_company_tel" value="" id="de_admin_company_tel" class="frm_input" size="30" />
									<input type="text" name="de_admin_tongsin_no" value="" id="de_admin_tongsin_no" class="frm_input" size="30">
								</td>
								<th scope="row"><label for="de_admin_buga_no">부가통신 사업자번호</label></th>
								<td>
									<input type="text" name="de_admin_buga_no" value="" id="de_admin_buga_no" class="frm_input" size="30">
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_admin_company_zip">사업장우편번호</label></th>
								<td>
									<input type="text" name="de_admin_company_zip" value="" id="de_admin_company_zip" class="frm_input" size="10">
								</td>
								<th scope="row"><label for="de_admin_company_addr">사업장주소</label></th>
								<td>
									<input type="text" name="de_admin_company_addr" value="" id="de_admin_company_addr" class="frm_input" size="30">
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_admin_info_name">정보관리책임자명</label></th>
								<td>
									<input type="text" name="de_admin_info_name" value="" id="de_admin_info_name" class="frm_input" size="30">
								</td>
								<th scope="row"><label for="de_admin_info_email">정보책임자 e-mail</label></th>
								<td>
									<input type="text" name="de_admin_info_email" value="" id="de_admin_info_email" class="frm_input" size="30">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</section>
			<section id="anc_scf_payment">
				<h2 class="h2_frm">결제설정</h2>
				<div class="tbl_frm01 tbl_wrap">
					<table>
						<caption>결제설정 입력</caption>
						<colgroup>
						<col class="grid_4">
						<col>
					</colgroup>
					<tbody>
						<tr>
							<th scope="row"><label for="de_bank_use">무통장입금사용</label></th>
							<td>
								<span class="frm_info">주문시 무통장으로 입금을 가능하게 할것인지를 설정합니다.<br>사용할 경우 은행계좌번호를 반드시 입력하여 주십시오.</span>
								<select id="de_bank_use" name="de_bank_use">
									<option value="0">사용안함</option>
									<option value="1" selected="selected">사용</option>
								</select>
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="de_bank_account">은행계좌번호</label></th>
							<td>
								<textarea name="de_bank_account" id="de_bank_account">OO은행 12345-67-89012 예금주명
									OO은행 12345-67-89012 예금주명</textarea>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_iche_use">계좌이체 결제사용</label></th>
								<td>
									<span class="frm_info">주문시 실시간 계좌이체를 가능하게 할것인지를 설정합니다.</span>
									<select id="de_iche_use" name="de_iche_use">
										<option value="0">사용안함</option>
										<option value="1" selected="selected">사용</option>
									</select>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_vbank_use">가상계좌 결제사용</label></th>
								<td>
									<span class="frm_info">주문별로 유일하게 생성되는 일회용 계좌번호입니다. 주문자가 가상계좌에 입금시 상점에 실시간으로 통보가 되므로 업무처리가 빨라집니다.</span>
									<select name="de_vbank_use" id="de_vbank_use">
										<option value="0">사용안함</option>
										<option value="1" selected="selected">사용</option>
									</select>
								</td>
							</tr>
							<tr id="kcp_vbank_url" class="pg_vbank_url" style="display: table-row;">
								<th scope="row">NHN KCP 가상계좌<br>입금통보 URL</th>
								<td>
									<span class="frm_info">NHN KCP 가상계좌 사용시 다음 주소를 <strong><a href="http://admin.kcp.co.kr" target="_blank">NHN KCP 관리자</a> &gt; 상점정보관리 &gt; 정보변경 &gt; 공통URL 정보 &gt; 공통URL 변경후</strong>에 넣으셔야 상점에 자동으로 입금 통보됩니다.</span>
								</td>
							</tr>
							<tr id="inicis_vbank_url" class="pg_vbank_url" style="display: none;">
								<th scope="row">KG이니시스 가상계좌 입금통보 URL</th>
								<td>
									<span class="frm_info">KG이니시스 가상계좌 사용시 다음 주소를 <strong><a href="https://iniweb.inicis.com/" target="_blank">KG이니시스 관리자</a> &gt; 거래조회 &gt; 가상계좌 &gt; 입금통보방식선택 &gt; URL 수신 설정</strong>에 넣으셔야 상점에 자동으로 입금 통보됩니다.</span>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_hp_use">휴대폰결제사용</label></th>
								<td>
									<span class="frm_info">주문시 휴대폰 결제를 가능하게 할것인지를 설정합니다.</span>                
									<select id="de_hp_use" name="de_hp_use">
										<option value="0">사용안함</option>
										<option value="1" selected="selected">사용</option>
									</select>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_card_use">신용카드결제사용</label></th>
								<td>
									<span class="frm_info">주문시 신용카드 결제를 가능하게 할것인지를 설정합니다.</span>
									<select id="de_card_use" name="de_card_use">
										<option value="0">사용안함</option>
										<option value="1" selected="selected">사용</option>
									</select>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_card_noint_use">신용카드 무이자할부사용</label></th>
								<td>
									<span class="frm_info">주문시 신용카드 무이자할부를 가능하게 할것인지를 설정합니다.<br>사용으로 설정하시면 PG사 가맹점 관리자 페이지에서 설정하신 무이자할부 설정이 적용됩니다.<br>사용안함으로 설정하시면 PG사 무이자 이벤트 카드를 제외한 모든 카드의 무이자 설정이 적용되지 않습니다.</span>
									<select id="de_card_noint_use" name="de_card_noint_use">
										<option value="0" selected="selected">사용안함</option>
										<option value="1">사용</option>
									</select>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_easy_pay_use">PG사 간편결제 버튼 사용</label></th>
								<td>
									<span class="frm_info">주문서 작성 페이지에 PG사 간편결제(PAYCO, PAYNOW, KPAY) 버튼의 별도 사용 여부를 설정합니다.</span>
									<select id="de_easy_pay_use" name="de_easy_pay_use">
										<option value="0">노출안함</option>
										<option value="1" selected="selected">노출함</option>
									</select>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_taxsave_use">현금영수증<br>발급사용</label></th>
								<td>
									<span class="frm_info">관리자는 설정에 관계없이 <a href="#">주문내역</a> &gt; 보기에서 발급이 가능합니다.<br>현금영수증 발급 취소는 PG사에서 지원하는 현금영수증 취소 기능을 사용하시기 바랍니다.</span>
									<select id="de_taxsave_use" name="de_taxsave_use">
										<option value="0">사용안함</option>
										<option value="1" selected="selected">사용</option>
									</select>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="cf_use_point">포인트 사용</label></th>
								<td>
									<span class="frm_info"><a href="#" target="_blank">환경설정 &gt; 기본환경설정</a>과 동일한 설정입니다.</span>
									<input type="checkbox" name="cf_use_point" value="1" id="cf_use_point" checked=""> 사용
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_settle_min_point">결제 최소포인트</label></th>
								<td>
									<span class="frm_info">회원의 포인트가 설정값 이상일 경우만 주문시 결제에 사용할 수 있습니다.<br>포인트 사용을 하지 않는 경우에는 의미가 없습니다.</span>
									<input type="text" name="de_settle_min_point" value="5000" id="de_settle_min_point" class="frm_input" size="10"> 점
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_settle_max_point">최대 결제포인트</label></th>
								<td>
									<span class="frm_info">주문 결제시 최대로 사용할 수 있는 포인트를 설정합니다.<br>포인트 사용을 하지 않는 경우에는 의미가 없습니다.</span>
									<input type="text" name="de_settle_max_point" value="50000" id="de_settle_max_point" class="frm_input" size="10"> 점
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_settle_point_unit">결제 포인트단위</label></th>
								<td>
									<span class="frm_info">주문 결제시 사용되는 포인트의 절사 단위를 설정합니다.</span>
									<select id="de_settle_point_unit" name="de_settle_point_unit">
										<option value="100" selected="selected">100</option>
										<option value="10">10</option>
										<option value="1">1</option>
									</select> 점
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_card_point">포인트부여</label></th>
								<td>
									<span class="frm_info">신용카드, 계좌이체, 휴대폰 결제시 포인트를 부여할지를 설정합니다. (기본값은 '아니오')</span>
									<select id="de_card_point" name="de_card_point">
										<option value="0">아니오</option>
										<option value="1" selected="selected">예</option>
									</select>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_point_days">주문완료 포인트</label></th>
								<td>
									<span class="frm_info">주문자가 회원일 경우에만 주문완료시 포인트를 지급합니다. 주문취소, 반품 등을 고려하여 포인트를 지급할 적당한 기간을 입력하십시오. (기본값은 7일)<br>0일로 설정하는 경우에는 주문완료와 동시에 포인트를 지급합니다.</span>                주문 완료 
									<input type="text" name="de_point_days" value="0" id="de_point_days" class="frm_input" size="2"> 일 이후에 포인트를 지급
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_pg_service">결제대행사</label></th>
								<td>
									<input type="hidden" name="de_pg_service" id="de_pg_service" value="kcp">
									<span class="frm_info">쇼핑몰에서 사용할 결제대행사를 선택합니다.</span>
									<ul class="de_pg_tab">
										<li class="tab-current"><a href="#kcp_info_anchor" data-value="kcp" title="NHN KCP 선택하기">NHN KCP</a></li>
										<li class=""><a href="#lg_info_anchor" data-value="lg" title="LG유플러스 선택하기">LG유플러스</a></li>
										<li class=""><a href="#inicis_info_anchor" data-value="inicis" title="KG이니시스 선택하기">KG이니시스</a></li>
									</ul>
								</td>
							</tr>
							<tr class="pg_info_fld kcp_info_fld" id="kcp_info_anchor">
								<th scope="row">
									<label for="de_kcp_mid">KCP SITE CODE</label><br>
									<a href="#" id="scf_kcpreg" class="kcp_btn">NHN KCP서비스신청하기</a>
								</th>
								<td>
									<span class="frm_info">NHN KCP 에서 받은 SR 로 시작하는 영대문자, 숫자 혼용 총 5자리 중 SR 을 제외한 나머지 3자리 SITE CODE 를 입력하세요.<br>만약, 사이트코드가 SR로 시작하지 않는다면 NHN KCP에 사이트코드 변경 요청을 하십시오. 예) SR9A3</span>
									<span class="sitecode">SR</span>
									<input type="text" name="de_kcp_mid" value="***" id="de_kcp_mid" class="frm_input code_input" size="2" maxlength="3"> 영대문자, 숫자 혼용 3자리
								</td>
							</tr>
							<tr class="pg_info_fld kcp_info_fld">
								<th scope="row"><label for="de_kcp_site_key">NHN KCP SITE KEY</label></th>
								<td>
									<span class="frm_info">25자리 영대소문자와 숫자 - 그리고 _ 로 이루어 집니다. SITE KEY 발급 NHN KCP 전화: 1544-8660<br>예) 1Q9YRV83gz6TukH8PjH0xFf__</span>
									<input type="text" name="de_kcp_site_key" value="********-**************__" id="de_kcp_site_key" class="frm_input" size="36" maxlength="25">
								</td>
							</tr>
							<tr class="pg_info_fld lg_info_fld" id="lg_info_anchor">
								<th scope="row">
									<label for="cf_lg_mid">LG유플러스 상점아이디</label><br>
									<a href="#" id="scf_lgreg" class="lg_btn">LG유플러스 서비스신청하기</a>
								</th>
								<td>
									<span class="frm_info">LG유플러스에서 받은 si_ 로 시작하는 상점 ID를 입력하세요.<br>만약, 상점 ID가 si_로 시작하지 않는다면 LG유플러스에 사이트코드 변경 요청을 하십시오. 예) si_lguplus<br><a href="http://demo.sir.kr/gnuboard5/adm/config_form.php#anc_cf_cert">기본환경설정 &gt; 본인확인</a> 설정의 LG유플러스 상점아이디와 동일합니다.</span>
									<span class="sitecode">si_</span>
									<input type="text" name="cf_lg_mid" value="*********" id="cf_lg_mid" class="frm_input code_input" size="10" maxlength="20"> 영문자, 숫자 혼용
								</td>
							</tr>
							<tr class="pg_info_fld lg_info_fld">
								<th scope="row"><label for="cf_lg_mert_key">LG유플러스 MERT KEY</label></th>
								<td>
									<span class="frm_info">LG유플러스 상점MertKey는 상점관리자 -&gt; 계약정보 -&gt; 상점정보관리에서 확인하실 수 있습니다.<br>예) 95160cce09854ef44d2edb2bfb05f9f3<br><a href="http://demo.sir.kr/gnuboard5/adm/config_form.php#anc_cf_cert">기본환경설정 &gt; 본인확인</a> 설정의 LG유플러스 MERT KEY와 동일합니다.</span>
									<input type="text" name="cf_lg_mert_key" value="********************************" id="cf_lg_mert_key" class="frm_input " size="36" maxlength="50">
								</td>
							</tr>
							<tr class="pg_info_fld inicis_info_fld" id="inicis_info_anchor">
								<th scope="row">
									<label for="de_inicis_mid">KG이니시스 상점아이디</label><br>
									<a href="#" id="scf_kgreg" class="kg_btn">KG이니시스 서비스신청하기</a>
								</th>
								<td>
									<span class="frm_info">KG이니시스로 부터 발급 받으신 상점아이디(MID) 10자리 중 SIR 을 제외한 나머지 7자리를 입력 합니다.<br>만약, 상점아이디가 SIR로 시작하지 않는다면 계약담당자에게 변경 요청을 해주시기 바랍니다. (Tel. 02-3430-5858) 예) SIRpaytest</span>
									<span class="sitecode">SIR</span>
									<input type="text" name="de_inicis_mid" value="*******" id="de_inicis_mid" class="frm_input code_input" size="10" maxlength="10"> 영문소문자(숫자포함 가능)
								</td>
							</tr>
							<tr class="pg_info_fld inicis_info_fld">
								<th scope="row"><label for="de_inicis_admin_key">KG이니시스 키패스워드</label></th>
								<td>
									<span class="frm_info">KG이니시스에서 발급받은 4자리 상점 키패스워드를 입력합니다.<br>KG이니시스 상점관리자 패스워드와 관련이 없습니다.<br>키패스워드 값을 확인하시려면 상점측에 발급된 키파일 안의 readme.txt 파일을 참조해 주십시오</span>
									<input type="text" name="de_inicis_admin_key" value="****" id="de_inicis_admin_key" class="frm_input" size="5" maxlength="4">
								</td>
							</tr>
							<tr class="pg_info_fld inicis_info_fld">
								<th scope="row"><label for="de_inicis_sign_key">KG이니시스 웹결제 사인키</label></th>
								<td>
									<span class="frm_info">KG이니시스에서 발급받은 웹결제 사인키를 입력합니다.<br>관리자 페이지의 상점정보 &gt; 계약정보 &gt; 부가정보의 웹결제 signkey생성 조회 버튼 클릭, 팝업창에서 생성 버튼 클릭 후 해당 값을 입력합니다.</span>
									<input type="text" name="de_inicis_sign_key" value="********************************" id="de_inicis_sign_key" class="frm_input" size="40" maxlength="50">
								</td>
							</tr>
							<tr class="pg_info_fld inicis_info_fld">
								<th scope="row">
									<label for="de_samsung_pay_use">KG이니시스 삼성페이 사용</label>
									<a href="#" class="kg_btn">삼성페이 서비스신청하기</a>
								</th>
								<td>
									<span class="frm_info">체크시 KG이니시스 삼성페이를 사용합니다.( 모바일 결제시 주문화면에 삼성페이 버튼이 출력됩니다. ) <br>실결제시 반드시 결제대행사 KG이니시스 항목에 상점 아이디와 키패스워드를 입력해 주세요.</span>
									<input type="checkbox" name="de_samsung_pay_use" value="1" id="de_samsung_pay_use" checked="">
									<label for="de_samsung_pay_use">사용</label>
								</td>
							</tr>
							<tr class="pg_info_fld inicis_info_fld">
								<th scope="row">
									<label for="de_inicis_lpay_use">KG이니시스 L.pay 사용</label>
								</th>
								<td>
									<span class="frm_info">체크시 KG이니시스 L.pay를 사용합니다. <br>실결제시 반드시 결제대행사 KG이니시스 항목의 상점 정보( 아이디, 키패스워드, 웹결제 사인키 )를 입력해 주세요.</span>
									<input type="checkbox" name="de_inicis_lpay_use" value="1" id="de_inicis_lpay_use" checked="">
									<label for="de_inicis_lpay_use">사용</label>
								</td>
							</tr>
							<tr class="pg_info_fld inicis_info_fld">
								<th scope="row">
									<label for="de_inicis_cartpoint_use">KG이니시스 신용카드 포인트 결제</label>
								</th>
								<td>
									<span class="frm_info">신용카드 포인트 결제에 대해 이니시스와 계약을 맺은 상점에서만 적용하는 옵션입니다.<br>체크시 pc 결제에서는 신용카드 포인트 사용 여부에 대한 팝업창에 사용 버튼과 사용안함 버튼이 표기되어 결제하는 고객의 선택여부에 따라 신용카드 포인트 결제가 가능합니다.<br>모바일에서는 신용카드 포인트 사용이 가능합니다.</span>
									<input type="checkbox" name="de_inicis_cartpoint_use" value="1" id="de_inicis_cartpoint_use">
									<label for="de_inicis_cartpoint_use">사용</label>
								</td>
							</tr>
							<tr class="kakao_info_fld">
								<th scope="row">
									<label for="de_kakaopay_mid">카카오페이 상점MID</label>
									<a href="#" class="kakao_btn">카카오페이 서비스신청하기</a>
								</th>
								<td>
									<span class="frm_info">카카오페이로 부터 발급 받으신 상점아이디(MID) 10자리 중 첫 KHSIR과 끝 m 을 제외한 영문4자리를 입력 합니다. 예) KHSIRtestm</span>
									<span class="sitecode">KHSIR</span>
									<input type="text" name="de_kakaopay_mid" value="****" id="de_kakaopay_mid" class="frm_input code_input" size="5" maxlength="4">
									<span class="sitecode">m</span>
								</td>
							</tr>
							<tr class="kakao_info_fld">
								<th scope="row"><label for="de_kakaopay_key">카카오페이 상점키</label></th>
								<td>
									<span class="frm_info">카카오페이로 부터 발급 받으신 상점 서명키를 입력합니다.</span>
									<input type="text" name="de_kakaopay_key" value="*********************************/*************************/**/***********************==" id="de_kakaopay_key" class="frm_input" size="100">
								</td>
							</tr>
							<tr class="kakao_info_fld">
								<th scope="row"><label for="de_kakaopay_enckey">카카오페이 상점 EncKey</label></th>
								<td>
									<span class="frm_info">카카오페이로 부터 발급 받으신 상점 인증 전용 EncKey를 입력합니다.</span>
									<input type="text" name="de_kakaopay_enckey" value="****************" id="de_kakaopay_enckey" class="frm_input" size="20">
								</td>
							</tr>
							<tr class="kakao_info_fld">
								<th scope="row"><label for="de_kakaopay_hashkey">카카오페이 상점 HashKey</label></th>
								<td>
									<span class="frm_info">카카오페이로 부터 발급 받으신 상점 인증 전용 HashKey를 입력합니다.</span>
									<input type="text" name="de_kakaopay_hashkey" value="****************" id="de_kakaopay_hashkey" class="frm_input" size="20">
								</td>
							</tr>
							<tr class="kakao_info_fld">
								<th scope="row"><label for="de_kakaopay_cancelpwd">카카오페이 결제취소 비밀번호</label></th>
								<td>
									<span class="frm_info">카카오페이 상점관리자에서 설정하신 취소 비밀번호를 입력합니다.<br>입력하신 비밀번호와 상점관리자에서 설정하신 비밀번호가 일치하지 않으면 취소가 되지 않습니다.</span>
									<input type="text" name="de_kakaopay_cancelpwd" value="*********" id="de_kakaopay_cancelpwd" class="frm_input" size="20">
								</td>
							</tr>
							<tr class="naver_info_fld">
								<th scope="row">
									<label for="de_naverpay_mid">네이버페이 가맹점 아이디</label>
									<a href="#" class="naver_btn">네이버페이 서비스신청하기</a>
								</th>
								<td>
									<span class="frm_info">네이버페이 가맹점 아이디를 입력합니다.</span><input type="text" name="de_naverpay_mid" value="*******" id="de_naverpay_mid" class="frm_input" size="20" maxlength="50">
								</td>
							</tr>
							<tr class="naver_info_fld">
								<th scope="row">
									<label for="de_naverpay_cert_key">네이버페이 가맹점 인증키</label>
								</th>
								<td>
									<span class="frm_info">네이버페이 가맹점 인증키를 입력합니다.</span><input type="text" name="de_naverpay_cert_key" value="********-****-****-****-************" id="de_naverpay_cert_key" class="frm_input" size="50" maxlength="100">
								</td>
							</tr>
							<tr class="naver_info_fld">
								<th scope="row">
									<label for="de_naverpay_button_key">네이버페이 버튼 인증키</label>
								</th>
								<td>
									<span class="frm_info">네이버페이 버튼 인증키를 입력합니다.</span>
									<input type="text" name="de_naverpay_button_key" value="********-****-****-****-************" id="de_naverpay_button_key" class="frm_input" size="50" maxlength="100">
								</td>
							</tr>
							<tr class="naver_info_fld">
								<th scope="row"><label for="de_naverpay_test">네이버페이 결제테스트</label></th>
								<td>
									<span class="frm_info">네이버페이 결제테스트 여부를 설정합니다. 검수 과정 중에는 <strong>예</strong>로 설정해야 하며 최종 승인 후 <strong>아니오</strong>로 설정합니다.</span>
									<select id="de_naverpay_test" name="de_naverpay_test">
										<option value="1" selected="selected">예</option>
										<option value="0">아니오</option>
									</select>
								</td>
							</tr>
							<tr class="naver_info_fld">
								<th scope="row">
									<label for="de_naverpay_mb_id">네이버페이 결제테스트 아이디</label>
								</th>
								<td>
									<span class="frm_info">네이버페이 결제테스트를 위한 테스트 회원 아이디를 입력합니다. 네이버페이 검수 과정에서 필요합니다.</span>
									<input type="text" name="de_naverpay_mb_id" value="naverpay" id="de_naverpay_mb_id" class="frm_input" size="20" maxlength="20">
								</td>
							</tr>
							<tr class="naver_info_fld">
								<th scope="row">네이버페이 상품정보 XML URL</th>
								<td>
									<span class="frm_info">네이버페이에 상품정보를 XML 데이터로 제공하는 페이지입니다. 검수과정에서 아래의 URL 정보를 제공해야 합니다.</span>
								</td>
							</tr>
							<tr class="naver_info_fld">
								<th scope="row">
									<label for="de_naverpay_sendcost">네이버페이 추가배송비 안내</label>
								</th>
								<td>
									<span class="frm_info">네이버페이를 통한 결제 때 구매자에게 보여질 추가배송비 내용을 입력합니다.<br>예) 제주도 3,000원 추가, 제주도 외 도서·산간 지역 5,000원 추가</span>
									<input type="text" name="de_naverpay_sendcost" value="제주도 3,000원 추가, 제주도 외 도서·산간 지역 5,000원 추가" id="de_naverpay_sendcost" class="frm_input" size="70">
								</td>
							</tr>
							<tr>
								<th scope="row">에스크로 사용</th>
								<td>
									<span class="frm_info">에스크로 결제를 사용하시려면, 반드시 결제대행사 상점 관리자 페이지에서 에스크로 서비스를 신청하신 후 사용하셔야 합니다.<br>에스크로 사용시 배송과의 연동은 되지 않으며 에스크로 결제만 지원됩니다.</span>
									<input type="radio" name="de_escrow_use" value="0" checked="" id="de_escrow_use1">
									<label for="de_escrow_use1">일반결제 사용</label>
									<input type="radio" name="de_escrow_use" value="1" id="de_escrow_use2">
									<label for="de_escrow_use2"> 에스크로결제 사용</label>
								</td>
							</tr>
							<tr>
								<th scope="row">결제 테스트</th>
								<td>
									<span class="frm_info">PG사의 결제 테스트를 하실 경우에 체크하세요. 결제단위 최소 1,000원</span>
									<input type="radio" name="de_card_test" value="0" id="de_card_test1">
									<label for="de_card_test1">실결제</label>
									<input type="radio" name="de_card_test" value="1" checked="" id="de_card_test2">
									<label for="de_card_test2">테스트결제</label>
									<div class="scf_cardtest kcp_cardtest">
										<a href="#" target="_blank" class="btn_frmline">실결제 관리자</a>
										<a href="#" target="_blank" class="btn_frmline">테스트 관리자</a>
										<button type="button" class="scf_cardtest_btn btn_frmline">테스트결제 팁 더보기</button></div>
										<div class="scf_cardtest lg_cardtest scf_cardtest_hide">
											<a href="#" target="_blank" class="btn_frmline">실결제 관리자</a>
											<a href="#" target="_blank" class="btn_frmline">테스트 관리자</a>
											<button type="button" class="scf_cardtest_btn btn_frmline">테스트결제 팁 더보기</button></div>
											<div class="scf_cardtest inicis_cardtest scf_cardtest_hide">
												<a href="#" class="btn_frmline">상점 관리자</a>
												<button type="button" class="scf_cardtest_btn btn_frmline">테스트결제 팁 더보기</button></div>
												<div id="scf_cardtest_tip" class="scf_cardtest_tip">
													<strong>일반결제 사용시 테스트 결제</strong>
													<dl>
														<dt>신용카드</dt><dd>1000원 이상, 모든 카드가 테스트 되는 것은 아니므로 여러가지 카드로 결제해 보셔야 합니다.<br>(BC, 현대, 롯데, 삼성카드)</dd>
														<dt>계좌이체</dt><dd>150원 이상, 계좌번호, 비밀번호는 가짜로 입력해도 되며, 주민등록번호는 공인인증서의 것과 일치해야 합니다.</dd>
														<dt>가상계좌</dt><dd>1원 이상, 모든 은행이 테스트 되는 것은 아니며 "해당 은행 계좌 없음" 자주 발생함.<br>(광주은행, 하나은행)</dd>
														<dt>휴대폰</dt><dd>1004원, 실결제가 되며 다음날 새벽에 일괄 취소됨</dd>
													</dl>
													<strong>에스크로 사용시 테스트 결제</strong><br>
													<dl>
														<dt>신용카드</dt><dd>1000원 이상, 모든 카드가 테스트 되는 것은 아니므로 여러가지 카드로 결제해 보셔야 합니다.<br>(BC, 현대, 롯데, 삼성카드)</dd>
														<dt>계좌이체</dt><dd>150원 이상, 계좌번호, 비밀번호는 가짜로 입력해도 되며, 주민등록번호는 공인인증서의 것과 일치해야 합니다.</dd>
														<dt>가상계좌</dt><dd>1원 이상, 입금통보는 제대로 되지 않음.</dd>
														<dt>휴대폰</dt><dd>테스트 지원되지 않음.</dd>
													</dl>
													<ul id="kcp_cardtest_tip" class="scf_cardtest_tip_adm">
														<li>테스트결제의 <a href="http://testadmin8.kcp.co.kr/assist/login.LoginAction.do" target="_blank">상점관리자</a> 로그인 정보는 NHN KCP로 문의하시기 바랍니다. (기술지원 1544-8661)</li>
														<li><b>일반결제</b>의 테스트 사이트코드는 <b>T0000</b> 이며, <b>에스크로 결제</b>의 테스트 사이트코드는 <b>T0007</b> 입니다.</li>
													</ul>
													<ul id="lg_cardtest_tip" class="scf_cardtest_tip_adm scf_cardtest_tip_adm_hide">
														<li>테스트결제의 <a href="http://pgweb.dacom.net:7085/" target="_blank">상점관리자</a> 로그인 정보는 LG유플러스 상점아이디 첫 글자에 t를 추가해서 로그인하시기 바랍니다. 예) tsi_lguplus</li>
													</ul>
													<ul id="inicis_cardtest_tip" class="scf_cardtest_tip_adm scf_cardtest_tip_adm_hide">
														<li><b>일반결제</b>의 테스트 사이트 mid는 <b>INIpayTest</b> 이며, <b>에스크로 결제</b>의 테스트 사이트 mid는 <b>iniescrow0</b> 입니다.</li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<th scope="row"><label for="de_tax_flag_use">복합과세 결제</label></th>
											<td>
												<span class="frm_info">복합과세(과세, 비과세) 결제를 사용하려면 체크하십시오.<br>복합과세 결제를 사용하기 전 PG사에 별도로 결제 신청을 해주셔야 합니다. 사용시 PG사로 문의하여 주시기 바랍니다.</span>
												<input type="checkbox" name="de_tax_flag_use" value="1" id="de_tax_flag_use" checked=""> 사용
											</td>
										</tr>
									</tbody>
								</table>								
							</div>
						</section>
						<section id="anc_scf_delivery">
							<h2>배송설정</h2>
							<div class="tbl_frm01 tbl_wrap">
								<table>
									<caption>배송설정 입력</caption>
									<colgroup>
									<col class="grid_4">
									<col>
								</colgroup>
								<tbody>
									<tr>
										<th scope="row"><label for="de_delivery_company">배송업체</label></th>
										<td>
											<span class="frm_info">이용 중이거나 이용하실 배송업체를 선택하세요.</span>                <select name="de_delivery_company" id="de_delivery_company">
											<option value="">없음</option>
											<option value="자체배송">자체배송</option>
											<option value="경동택배">경동택배</option>
											<option value="대신택배">대신택배</option>
											<option value="동부택배">동부택배</option>
											<option value="로젠택배">로젠택배</option>
											<option value="우체국" selected="selected">우체국</option>
											<option value="이노지스택배">이노지스택배</option>
											<option value="한진택배">한진택배</option>
											<option value="롯데택배">롯데택배</option>
											<option value="CJ대한통운">CJ대한통운</option>
											<option value="CVSnet편의점택배">CVSnet편의점택배</option>
											<option value="KG옐로우캡택배">KG옐로우캡택배</option>
											<option value="KGB택배">KGB택배</option>
											<option value="KG로지스">KG로지스</option>
											<option value="건영택배">건영택배</option>
											<option value="호남택배">호남택배</option>
										</select>
									</td>
								</tr>
								<tr>
									<th scope="row"><label for="de_send_cost_case">배송비유형</label></th>
									<td>
										<span class="frm_info"><strong>금액별차등</strong>으로 설정한 경우, 주문총액이 배송비상한가 미만일 경우 배송비를 받습니다.<br><strong>무료배송</strong>으로 설정한 경우, 배송비상한가 및 배송비를 무시하며 착불의 경우도 무료배송으로 설정합니다.<br><strong>상품별로 배송비 설정을 한 경우 상품별 배송비 설정이 우선</strong> 적용됩니다.<br>예를 들어 무료배송으로 설정했을 때 특정 상품에 배송비가 설정되어 있으면 주문시 배송비가 부과됩니다.</span>                <select name="de_send_cost_case" id="de_send_cost_case">
										<option value="차등" selected="selected">금액별차등</option>
										<option value="무료">무료배송</option>
									</select>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_send_cost_limit">배송비상한가</label></th>
								<td>
									<span class="frm_info">배송비유형이 '금액별차등'일 경우에만 해당되며 배송비상한가를 여러개 두고자 하는 경우는 <b>;</b> 로 구분합니다.<br><br>예를 들어 20000원 미만일 경우 4000원, 30000원 미만일 경우 3000원 으로 사용할 경우에는 배송비상한가를 20000;30000 으로 입력하고 배송비를 4000;3000 으로 입력합니다.</span>                <input type="text" name="de_send_cost_limit" value="20000;30000;40000" size="40" class="frm_input" id="de_send_cost_limit"> 원
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_send_cost_list">배송비</label></th>
								<td>
									<input type="text" name="de_send_cost_list" value="4000;3000;2000" size="40" class="frm_input" id="de_send_cost_list"> 원
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="de_hope_date_use">희망배송일사용</label></th>
								<td>
									<span class="frm_info">'예'로 설정한 경우 주문서에서 희망배송일을 입력 받습니다.</span>                <select name="de_hope_date_use" id="de_hope_date_use">
									<option value="0" selected="selected">사용안함</option>
									<option value="1">사용</option>
								</select>
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="de_hope_date_after">희망배송일지정</label></th>
							<td>
								<span class="frm_info">오늘을 포함하여 설정한 날 이후부터 일주일 동안을 달력 형식으로 노출하여 선택할수 있도록 합니다.</span>                <input type="text" name="de_hope_date_after" value="3" id="de_hope_date_after" class="frm_input" size="5"> 일
							</td>
						</tr>
						<tr>
							<th scope="row">배송정보</th>
							<td>
								<span class="sound_only">웹에디터 시작</span>
								<form method="post">
								  <textarea id="summernote" name="editordata"></textarea>
								</form>
								<script>
									$('#summernote').summernote({						        
						        tabsize: 2,
						        height: 300
						      });
								</script>
								<span class="sound_only">웹 에디터 끝</span>
							</td>
							</tr>
							<tr>
								<th scope="row">교환/반품</th>
								<td>
									<span class="sound_only">웹에디터 시작</span>
									<form method="post">
									  <textarea id="summernote2" name="editordata"></textarea>
									</form>
									<script>
										$('#summernote2').summernote({						        
							        tabsize: 2,
							        height: 300
							      });
									</script>
									<span class="sound_only">웹 에디터 끝</span></td>
								</tr>
							</tbody>
						</table>
					</div>
				</section>
			</div>
		</form>
	</div>
</div>

<?php
include_once("footer.php");
?>