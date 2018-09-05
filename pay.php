 <? include_once ("header.php"); ?>

<section id="pay_container">
        <div class="con1">
            <div class="container">
                <div class="con1_top row">
                    <h3 class="tit">마이페이지</h3>
                    <ul class="location">
                        <li><a href="#">홈&nbsp;&nbsp;></a></li>
                        <li><a href="#">&nbsp;&nbsp;마이페이지&nbsp;&nbsp;></a></li>
                        <li><a href="#">&nbsp;&nbsp;장바구니</a></li>
                    </ul>
                </div>
            <div class="con1_bottom">
                <h3 class="tit">장바구니</h3>
                <p class="desc">장바구니에 담은 강의를 확인하고 결제할 수 있는 페이지입니다.</p>
                <div class="right">
                    <div class="right_up">
                        <p class="stit">마이페이지</p>
                        <ul class="category_list">
                            <li class="category"><a href="sub3.php"><img src="images/right-arrow.png"> &nbsp;&nbsp;마이페이지</a></li>
                            <li class="category"><a href="sub2_view.php"><img src="images/right-arrow.png"> &nbsp;&nbsp;회원정보변경</a></li>
                            <li class="category"><a href="bucket.php"><img src="images/right-arrow.png"> &nbsp;&nbsp;장바구니</a></li>
                            <li class="category"><a href="pay.php"><img src="images/right-arrow.png"> &nbsp;&nbsp;결제&amp;배송</a></li>
                            <li class="category"><a href="sub2_view.php"><img src="images/right-arrow.png"> &nbsp;&nbsp;교재배송조회</a></li>
                            <li class="category"><a href="sub2_view.php"><img src="images/right-arrow.png"> &nbsp;&nbsp;1:1답변확인</a></li>
                            <li class="category"><a href="sub2_view.php"><img src="images/right-arrow.png"> &nbsp;&nbsp;기기등록정보</a></li>
                            <li class="category"><a href="sub2_view.php"><img src="images/right-arrow.png"> &nbsp;&nbsp;회원탈퇴</a></li>
                        </ul>
                    </div>                    
                </div>
                <div class="table-responsive pc_pay">
                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>강좌</th>
                            <th>강좌제목</th>
                            <th>옵션권수</th>
                            <th>가격</th>
                            <th>삭제</th>
                        </tr>
                        <tr>
                            <td class="num">1</td>
                            <td class="img"><img src="images/table_img.png"></td>
                            <td class="lec_tit">
                                <ul>
                                    <li>언어</li>
                                    <li>강좌 제목이 들어가는 영역</li>
                                    <li>이지현 선생님</li>
                                    <li>중1-1 &nbsp;&nbsp;|&nbsp;&nbsp; 총 24강 &nbsp;&nbsp;|&nbsp;&nbsp; 2018년 05월</li>
                                    <li>개강일: 05월 12일</li>
                                </ul>
                            </td>
                            <td>
                                <select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </td>
                            <td class="price">130,000원</td>
                            <td><img src="images/garbage.png"></td>
                        </tr>
                        <tr>
                            <td class="num">2</td>
                            <td class="img"><img src="images/table_img.png"></td>
                            <td class="lec_tit">
                                <ul>
                                    <li>언어</li>
                                    <li>강좌 제목이 들어가는 영역</li>
                                    <li>이지현 선생님</li>
                                    <li>중1-1 &nbsp;&nbsp;|&nbsp;&nbsp; 총 24강 &nbsp;&nbsp;|&nbsp;&nbsp; 2018년 05월</li>
                                    <li>개강일: 05월 12일</li>
                                </ul>
                            </td>
                            <td>
                                <select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </td>
                            <td class="price">130,000원</td>
                            <td><img src="images/garbage.png"></td>
                        </tr>
                    </table>
                </div>  
                <div class="m_pay">
                    <ul class="clearfix">
                        <li class="m_img"><img src="images/table_img.png"></li>
                        <li>언어 (이지현 선생님)</li>
                        <li>강좌 제목이 들어가는 영역</li>
                        <li>개강일 : 05월 12일</li>
                        <li>총 24강</li>
                        <li>
                            <select>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </li>
                        <li class="price">130,000원</li>
                        <li><img src="images/garbage.png"></li>
                    </ul>
                    <ul class="clearfix">
                        <li class="m_img"><img src="images/table_img.png"></li>
                        <li>언어 (이지현 선생님)</li>
                        <li>강좌 제목이 들어가는 영역</li>
                        <li>개강일 : 05월 12일</li>
                        <li>총 24강</li>
                        <li>
                            <select>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </li>
                        <li class="price">130,000원</li>
                        <li><img src="images/garbage.png"></li>
                    </ul>
                </div>
                <div class="discount">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 coupon">
                            <ul>
                                <li>할인쿠폰1</li>
                                <li>할인쿠폰 1이 있으시면 번호를 입력해주세요.</li>
                                <li><input type="text" name="coupon" id="coupon1"></li>
                                <li>쿠폰번호입력</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 coupon">
                            <ul>
                                <li>할인쿠폰2</li>
                                <li>할인쿠폰 2이 있으시면 번호를 입력해주세요.</li>
                                <li><input type="text" name="coupon" id="coupon1"></li>
                                <li>쿠폰번호입력</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="t_price clearfix">
                    <p>전체합계</p>
                    <ul class="s_price">
                        <li><img src="images/dot.png">총금액<p>130,000<span>원</span></p></li>
                        <li><img src="images/dot.png">할인금액<p>-10,000<span>원</span></p></li>
                    </ul>
                    <ul class="total_p">
                        <li>총 결제금액</li>
                        <li>120,000<span>원</span></li>
                    </ul>
                </div>
                <div class="info">
                    <p>교재 배송 정보<span>*표시는 필수 입력 항목입니다.</span></p>
                    <ul>
                        <li><img src="images/checked_img.png">구매자정보</li>
                        <li>이름<img src="images/must.png"></li>
                        <li><input type="text" name="name" id="name" placeholder="이름을 입력하세요"></li>
                        <li>휴대폰 전화 번호 입력<img src="images/must.png"></li>
                        <li class="phone">
                            <input type="tel" name="phone" id="phone1">
                            <span>-</span>
                            <input type="tel" name="phone" id="phone2">
                            <span>-</span>
                            <input type="tel" name="phone" id="phone3">
                        </li>
                        <li>이메일<img src="images/must.png"></li>
                        <li class="email">
                            <input type="text" name="email" id="email">
                            <span>@</span>
                            <input type="text" name="email" id="email">
                            <select>
                                <option>직접입력</option>
                                <option>naver.com</option>
                                <option>hanmail.net</option>
                                <option>gmail.com</option>
                            </select>
                        </li>
                        <li>주소<img src="images/must.png"></li>
                        <li class="add"><input type="text" name="add" id="add"><p class="find_add">주소찾기</p></li>
                        <li>상세주소</li>
                        <li class="d_add"><input type="text" name="detail_add" id="detail_add" placeholder="상세주소를 입력하세요."></li>
                        <li>메모</li>
                        <li class="memo"><textarea placeholder="총 500자까지 입력 가능합니다."></textarea></li>
                    </ul>
                </div>
                <div class="method clearfix">
                    <p class="tit">결재 방법 선택</p>
                    <ul>
                        <li><input type="radio" name="pay" value="1" checked><p class="desc">Direct bank transfer<span>여기에 지불방법에 대한 설명글이 들어갑니다.여기에 지불방법에 대한 설명글이 들어갑니다.여기에 지불방법에 대한 설명글이 들어갑니다.</span></p></li>
                        <li><input type="radio" name="pay" value="2"><p class="desc">Cheque Payment</p></li>
                        <li><input type="radio" name="pay" value="3"><p class="desc">PayPal</p></li>
                        <li><input type="radio" name="pay" value="4"><p class="desc">Other payment</p></li>
                    </ul>
                    <p class="s_pay">결재진행</p>
                </div>
            </div>
        </div>        
    </div>
</section>

<? include_once ("footer.php"); ?>    

<script>
$(document).ready(function() {
		$('.category').click(function(){
			$(this).css({
			color : '#b89561'
			})
			
			});
			$('.category').eq(3).trigger('click');
	    
});  
</script>