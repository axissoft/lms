    <div id="wrapper">

    <div id="container" class="">

    <h1 id="container_title">회원관리</h1>
    <div class="container_wr">
        <div class="local_ov01 local_ov">
            <a href="http://g2016.digitree.co.kr/as_admin/member_list.php" class="ov_listall">전체목록</a> <span
                    class="btn_ov01"><span class="ov_txt">총회원수 </span><span class="ov_num"> 1,277명 </span></span>
            <a href="?sst=mb_intercept_date&amp;sod=desc&amp;sfl=&amp;stx=" class="btn_ov01"> <span
                        class="ov_txt">차단 </span><span class="ov_num">0명</span></a>
            <a href="?sst=mb_leave_date&amp;sod=desc&amp;sfl=&amp;stx=" class="btn_ov01"> <span
                        class="ov_txt">탈퇴  </span><span class="ov_num">18명</span></a>
        </div>

        <form id="fsearch" name="fsearch" class="local_sch01 local_sch" method="get">

            <label for="sfl" class="sound_only">검색대상</label>
            <select name="sfl" id="sfl">
                <option value="mb_id">회원아이디</option>
                <option value="mb_nick">닉네임</option>
                <option value="mb_name">이름</option>
                <option value="mb_level">권한</option>
                <option value="mb_email">E-MAIL</option>
                <option value="mb_tel">전화번호</option>
                <option value="mb_hp">휴대폰번호</option>
                <option value="mb_point">포인트</option>
                <option value="mb_datetime">가입일시</option>
                <option value="mb_ip">IP</option>
                <option value="mb_recommend">추천인</option>
            </select>
            <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
            <input type="text" name="stx" value="" id="stx" required="" class="required frm_input">
            <input type="submit" class="btn_submit" value="검색">

        </form>

        <div class="local_desc01 local_desc">
            <p>
                회원자료 삭제 시 다른 회원이 기존 회원아이디를 사용하지 못하도록 회원아이디, 이름, 닉네임은 삭제하지 않고 영구 보관합니다.
            </p>
        </div>


        <form name="fmemberlist" id="fmemberlist" onsubmit="return fmemberlist_submit(this);" method="post">
            <input type="hidden" name="sst" value="mb_datetime">
            <input type="hidden" name="sod" value="desc">
            <input type="hidden" name="sfl" value="">
            <input type="hidden" name="stx" value="">
            <input type="hidden" name="page" value="1">
            <input type="hidden" name="token" value="">

            <div class="tbl_head01 tbl_wrap">
                <table>
                    <caption>회원관리 목록</caption>
                    <thead>
                    <tr>
                        <th scope="col" id="mb_list_chk" rowspan="2">
                            <label for="chkall" class="sound_only">회원 전체</label>
                            <input type="checkbox" name="chkall" value="1" id="chkall" onclick="check_all(this.form)">
                        </th>
                        <th scope="col" id="mb_list_id" colspan="2"><a href="member_list.php">아이디</a></th>
                        <th rowspan="2" id="mb_list_mailc" scope="col"><a href="member_list.php">메일인증</a></th>
                        <th rowspan="2" id="mb_list_mailr" scope="col"><a href="member_list.php">메일수신</a></th>
                        <th rowspan="2" id="mb_list_auth" scope="col">상태</th>
                        <th scope="col" id="mb_list_mobile">휴대폰</th>
                        <th scope="col" id="mb_list_lastcall"><a href="member_list.php">최종접속</a></th>
                        <th rowspan="2" id="mb_list_grp" scope="col"><a href="member_list.php"> 포인트</a></th>
                        <th scope="col" rowspan="2" id="mb_list_mng">관리</th>
                    </tr>
                    <tr>
                        <th scope="col" id="mb_list_name"><a href="member_list.php">이름</a></th>
                        <th scope="col" id="mb_list_nick"><a href="member_list.php">닉네임</a></th>
                        <th scope="col" id="mb_list_tel">전화번호</th>
                        <th scope="col" id="mb_list_join"><a href="member_list.php">가입일</a></th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr class="bg0">
                        <td headers="mb_list_chk" class="td_chk" rowspan="2">
                            <input type="hidden" name="mb_id[0]" value="***********" id="mb_id_0">
                            <label for="chk_0" class="sound_only">********* ************님</label>
                            <?php
                            foreach ($res as $item) { ?>
                                <label for="chk_0" class="sound_only"><?php echo $item->user_id ?>님</label>


                            <?php }

                            ?>
                            <input type="checkbox" name="chk[]" value="0" id="chk_0">
                        </td>
                        <td headers="mb_list_id" colspan="2" class="td_name sv_use">
                            ***********
                        </td>
                        <td rowspan="2" headers="mb_list_mailc"><span class="txt_true">Yes</span></td>
                        <td rowspan="2" headers="mb_list_mailr">
                            <label for="mb_mailling_0" class="sound_only">메일수신</label>
                            <input type="checkbox" name="mb_mailling[0]" checked="" value="1" id="mb_mailling_0">
                        </td>
                        <td rowspan="2" class="td_mbstat" headers="mb_list_auth">
                            정상
                        </td>
                        <td headers="mb_list_mobile" class="td_tel"></td>
                        <td headers="mb_list_lastcall" class="td_date">18-08-01</td>
                        <td rowspan="2" class="td_numsmall" headers="mb_list_grp"><a
                                    href="point_list.php?sfl=mb_id&amp;stx=***********">1,000</a></td>
                        <td headers="mb_list_mng" rowspan="2" class="td_mng td_mng_s"><a
                                    href="./member_form.php?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=&amp;w=u&amp;mb_id=***********"
                                    class="btn btn_03">수정</a></td>
                    </tr>
                    <tr class="bg0">
                        <td headers="mb_list_name" class="td_mbname">*********</td>
                        <td headers="mb_list_nick" class="td_name sv_use">
                            <div><span class="sv_wrap">
  <a href="profile.php?mb_id=***********" class="sv_member" title="************ 자기소개" target="_blank" rel="nofollow"
     onclick="return false;"><span class="profile_img"><img src="<?= base_url('/images/admin') ?>/no_profile.gif"
                                                            alt="no_profile" width="20" height="20"></span> ************</a>  <span
                                            class="sv">
  <a href="memo_form.php?me_recv_mb_id=***********" onclick="win_memo(this.href); return false;">쪽지보내기</a>
  <a href="formmail.php?mb_id=***********&amp;name=%2A%2A%2A%2A%2A%2A%2A%2A%2A%2A%2A%2A&amp;email=jWBfj4yNcWBaXWBcjY4="
     onclick="win_email(this.href); return false;">메일보내기</a>
  <a href="profile.php?mb_id=***********" onclick="win_profile(this.href); return false;">자기소개</a>
  <a href="new.php?mb_id=***********" class="link_new_page" onclick="check_goto_new(this.href, event);">전체게시물</a>
  </span>

  <noscript class="sv_nojs"><span class="sv">
  <a href="memo_form.php?me_recv_mb_id=***********" onclick="win_memo(this.href); return false;">쪽지보내기</a>
  <a href="formmail.php?mb_id=***********&amp;name=%2A%2A%2A%2A%2A%2A%2A%2A%2A%2A%2A%2A&amp;email=jWBfj4yNcWBaXWBcjY4="
     onclick="win_email(this.href); return false;">메일보내기</a>
  <a href="profile.php?mb_id=***********" onclick="win_profile(this.href); return false;">자기소개</a>
  <a href="new.php?mb_id=***********" class="link_new_page" onclick="check_goto_new(this.href, event);">전체게시물</a>
  </span>
</noscript></span></div>
                        </td>

                        <td headers="mb_list_tel" class="td_tel"></td>
                        <td headers="mb_list_join" class="td_date">18-08-01</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="btn_fixed_top">
                <input type="submit" name="act_button" value="선택수정" onclick="document.pressed=this.value"
                       class="btn btn_02">
                <input type="submit" name="act_button" value="선택삭제" onclick="document.pressed=this.value"
                       class="btn btn_02">

            </div>


        </form>

        <nav class="pg_wrap"><span class="pg"><span class="sound_only">열린</span><strong class="pg_current">1</strong><span class="sound_only">페이지</span>
        <a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=2" class="pg_page">2<span class="sound_only">페이지</span></a>
        <a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=3" class="pg_page">3<span class="sound_only">페이지</span></a>
        <a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=4" class="pg_page">4<span class="sound_only">페이지</span></a>
        <a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=5" class="pg_page">5<span class="sound_only">페이지</span></a>
        <a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=6" class="pg_page">6<span class="sound_only">페이지</span></a>
        <a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=7" class="pg_page">7<span class="sound_only">페이지</span></a>
        <a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=8" class="pg_page">8<span class="sound_only">페이지</span></a>
        <a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=9" class="pg_page">9<span class="sound_only">페이지</span></a>
        <a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=10" class="pg_page">10<span class="sound_only">페이지</span></a>
        <a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=11" class="pg_page pg_next">다음</a>
        <a href="?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=86" class="pg_page pg_end">맨끝</a>
        </span></nav>
        <div class="navi" align="center"><?= $pagination ?></div>

        <script type="text/javascript">
            function fmemberlist_submit(f) {
                if (!is_checked("chk[]")) {
                    alert(document.pressed + " 하실 항목을 하나 이상 선택하세요.");
                    return false;
                }

                if (document.pressed == "선택삭제") {
                    if (!confirm("선택한 자료를 정말 삭제하시겠습니까?")) {
                        return false;
                    }
                }

                return true;
            }
        </script>


        <noscript>
            <p>
                귀하께서 사용하시는 브라우저는 현재 <strong>자바스크립트를 사용하지 않음</strong>으로 설정되어 있습니다.<br>
                <strong>자바스크립트를 사용하지 않음</strong>으로 설정하신 경우는 수정이나 삭제시 별도의 경고창이 나오지 않으므로 이점 주의하시기 바랍니다.
            </p>
        </noscript>

    </div>