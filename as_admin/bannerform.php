<?php 
$sub_menu = "500";
include_once("header.php")
?>
<div id="wrapper">
	<div id="container" class="">
		<h1 id="container_title">배너관리</h1>
		<div class="container_wr">
			<form name="fbanner" method="post" enctype="multipart/form-data">
				<input type="hidden" name="w" value="">
				<input type="hidden" name="bn_id" value="">
				<div class="tbl_frm01 tbl_wrap">
					<table>
						<caption>배너관리</caption>
						<colgroup>
							<col class="grid_4">
							<col>
						</colgroup>
						<tbody>
							<tr>
								<th scope="row">이미지</th>
								<td>
									<input type="file" name="bn_bimg">
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="bn_alt">이미지 설명</label></th>
								<td>
									<span class="frm_info">img 태그의 alt, title 에 해당되는 내용입니다.<br>배너에 마우스를 오버하면 이미지의 설명이 나옵니다.</span>
									<input type="text" name="bn_alt" value="" id="bn_alt" class="frm_input" size="80">
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="bn_url">링크</label></th>
								<td>
									<span class="frm_info">배너클릭시 이동하는 주소입니다.</span><input type="text" name="bn_url" size="80" value="http://" id="bn_url" class="frm_input">
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="bn_device">접속기기</label></th>
								<td>
									<span class="frm_info">배너를 표시할 접속기기를 선택합니다.</span>
									<select name="bn_device" id="bn_device">
										<option value="both">PC와 모바일</option>
										<option value="pc">PC</option>
										<option value="mobile">모바일</option>
									</select>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="bn_position">출력위치</label></th>
								<td>
									<span class="frm_info">왼쪽 : 쇼핑몰화면 왼쪽에 출력합니다.<br>메인 : 쇼핑몰 메인화면(index.php)에만 출력합니다.</span>
									<select name="bn_position" id="bn_position">
										<option value="왼쪽">왼쪽</option>
										<option value="메인">메인</option>
									</select>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="bn_border">테두리</label></th>
								<td>
									<span class="frm_info">배너이미지에 테두리를 넣을지를 설정합니다.</span>
									<select name="bn_border" id="bn_border">
										<option value="0" selected="selected">사용안함</option>
										<option value="1">사용</option>
									</select>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="bn_new_win">새창</label></th>
								<td>
									<span class="frm_info">배너클릭시 새창을 띄울지를 설정합니다.</span>
									<select name="bn_new_win" id="bn_new_win">
										<option value="0" selected="selected">사용안함</option>
										<option value="1">사용</option>
									</select>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="bn_begin_time">시작일시</label></th>
								<td>
									<span class="frm_info">배너 게시 시작일시를 설정합니다.</span>
									<input type="text" name="bn_begin_time" value="2018-08-01 00:00:00" id="bn_begin_time" class="frm_input" size="21" maxlength="19">
									<input type="checkbox" name="bn_begin_chk" value="2018-08-01 00:00:00" id="bn_begin_chk">
									<label for="bn_begin_chk">오늘</label>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="bn_end_time">종료일시</label></th>
								<td>
									<span class="frm_info">배너 게시 종료일시를 설정합니다.</span>
									<input type="text" name="bn_end_time" value="2018-09-01 00:00:00" id="bn_end_time" class="frm_input" size="21" maxlength="19">
									<input type="checkbox" name="bn_end_chk" value="2018-09-01 23:59:59" id="bn_end_chk">
									<label for="bn_end_chk">오늘+31일</label>
								</td>
							</tr>
							<tr>
								<th scope="row"><label for="bn_order">출력 순서</label></th>
								<td>
									<span class="frm_info">배너를 출력할 때 순서를 정합니다. 숫자가 작을수록 먼저 출력됩니다.</span>
									<select name="bn_order" id="bn_order"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50" selected="">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option><option value="70">70</option><option value="71">71</option><option value="72">72</option><option value="73">73</option><option value="74">74</option><option value="75">75</option><option value="76">76</option><option value="77">77</option><option value="78">78</option><option value="79">79</option><option value="80">80</option><option value="81">81</option><option value="82">82</option><option value="83">83</option><option value="84">84</option><option value="85">85</option><option value="86">86</option><option value="87">87</option><option value="88">88</option><option value="89">89</option><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option><option value="94">94</option><option value="95">95</option><option value="96">96</option><option value="97">97</option><option value="98">98</option><option value="99">99</option><option value="100">100</option></select>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="btn_fixed_top">
					<a href="./bannerlist.php" class="btn_02 btn">목록</a>
					<input type="submit" value="확인" class="btn_submit btn" accesskey="s">
				</div>
			</form>
		</div>    
	</div>
</div>
<?php
include_once("footer.php")
?>