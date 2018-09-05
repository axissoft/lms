 <? include_once ("header.php"); ?>

<section id="login">
    <div class="container">
        <input type="text" name="id" id="id" placeholder="아이디" class="ip">
        <input type="password" name="pass" id="pass" placeholder="비밀번호"  class="ip">
        <ul class="check clearfix">
            <li>
                <input type="checkbox" id="auto1" name="auto">
                <label for="auto1"></label>
            </li>
            <li>자동로그인 <span>개인 정보 보호를 위해 보인 기기에서만 이용해 주세요.</span></li>
            <li class="find"><a href="#">아이디(이메일)/비밀번호 찾기 ></a></li>
        </ul>
        <ul class="log_in">
            <li><a href="#">로그인</a></li>
            <li><a href="#">회원가입</a></li>
        </ul>
    </div>
</section>

<? include_once ("footer.php"); ?>    