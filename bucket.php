 <? include_once ("header.php"); ?>

<section id="bucket_container">
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
                <div class="table-responsive pc_bucket">
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
                <div class="m_bucket">
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
                <div class="t_price clearfix">
                    <p class="total">총금액 <span><strong>250,000</strong>원</span></p>
                    <p class="purchase"><a href="pay.php">바로구매</a></p>
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
			$('.category').eq(2).trigger('click');
	    
});  
</script>