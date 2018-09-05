<!DOCTYPE html>
<html lang="ko">
<head>
  <title> axissoft lms </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?=base_url("images/favicon.ico")?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <style>
  .ajax_wrap {
	display:none;
	position:absolute;
	padding:0;
	margin:0;
	top:0;
	left:0;
	width:100%;
	height:100%;
	z-index:1000;
    background-color:grey;
    opacity: .7;
 }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
  <script type="text/javascript">
	jQuery.fn.loading = function () {
		this.parent().toggle();
		this.parent().height($("html").height());
		this.css({
			"position":"absolute",
			"top": Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) + $(window).scrollTop()) + "px",
			"left": Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + $(window).scrollLeft()) + "px"
		});
		return this;
	}
//	$( window ).on( "load", function() {
//        console.log("2");
//    });


	$(function(){
		//텍스트편집기
		$('#summernote').summernote({
//				airMode: true,
			placeholder: 'Hello bootstrap 4',
			width: '100%',
			height: '200',
//			toolbar: [
//				// [groupName, [list of button]]
//				['style', ['bold', 'italic', 'underline', 'clear']],
//				['font', ['strikethrough', 'superscript', 'subscript']],
//				['fontsize', ['fontsize']],
//				['color', ['color']],
//				['para', ['ul', 'ol', 'paragraph']],
//				['height', ['height']]
//			]
		});


		//ajax sample
		$('#ajax').on('click',function(){
			$.ajax({
				global: false,
				cache: false,
//				async: false,
				url: "<?=base_url('/Sample/ajax')?>",
				type: "post",
				context: $('#control'),
				dataType: "text",
				data: {
					csrf_token : $("input[name=csrf_token]").val(),
					aa : "111111",
					bb : "222222"
				},
		//		beforeSend:function(){
		//			$(this).html($("<img src='/images/common/img_loading_check.gif' alt='로딩중' class='loadimg' />"));
		//		},
				success: function(json) {
					$(this).html(json);
				},
				error:function(request,status,error){
					console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
					$(this).html("시스템 오류");
				}
			});
		})

		$('#mail').on('click',function(){
			$.ajax({
				global: false,
				cache: false,
				async: true,
				url: "<?=base_url('/Sample/mailto')?>",
				type: "post",
				context: $('#control'),
				dataType: "text",
				data: {
					csrf_token : $("input[name=csrf_token]").val(),
					mailto : $("#mailto").val(),
					from : $("#from").val(),
					title : $("#title").val(),
					message : $("#message").val()
				},
				beforeSend:function(){
					$(".ajax_loader").loading();
				},
				success: function(json) {
					$(this).html(json);
					$(".ajax_loader").loading();
				},
				error:function(request,status,error){
					$(".ajax_loader").loading();
					console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
					$(this).html("시스템 오류");
				}
			});
		})
	})

	function cal(obj){
		console.log($(obj).prop("tagName"));
	}
</script>
</head>
<body>
<div class="container-fluid">
	<button id="ajax">ajax 호출</button>

	<div class="row">
		to : <input type="text" id="mailto" value="jups@starplayer.net" />
		from : <input type="text" id="from" value="jupsoops@gmail.com" />
		title : <input type="text" id="title" value="" />
		message : <input type="text" id="message" value="" /> <button id="mail">메일 발송</button>
	</div>

	<div id="control">컨트롤러</div>
	<?php echo form_open('/member/login_process','name="frm"'); ?>
	<input type="text" name="user_id" value="" />
	<input type="text" name="user_pw" value="" />
	<?php echo form_submit('frm', $this->lang->line('login'));?>


	<div class="jumbotron text-center">
	  <h1>My First Bootstrap Page</h1>
	  <p>Resize this responsive page to see the effect!</p>
	</div>
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
  <div class="row">
	<div id="summernote"></div>
	<button id="edit" class="btn btn-primary" onclick="edit()" type="button">Edit 1</button>
	<button id="save" class="btn btn-primary" onclick="save()" type="button">Save 2</button>
  </div>
</div>
<div class='ajax_wrap'><img src='<?=base_url('/images/loading.apng')?>' class='ajax_loader' /></div>
</body>
</html>