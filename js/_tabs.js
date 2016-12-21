jQuery( document ).ready(function( $ ) {


	$(".our-partners-slider .slider-bl").easySlider({
		auto: false, 
		continuous: true
	});	
	

	$(".for_hidden_form_button").click(function(){
		if ($(".for_hidden_form.form_1").hasClass("open")) {
			$(".for_hidden_form.form_1").removeClass("open");		
		} else {
			$(".for_hidden_form.form_1").addClass("open");
		}
	});

	$(".for_hidden_form_button_2").click(function(){
		if ($(".for_hidden_form.form_2").hasClass("open")) {
			$(".for_hidden_form.form_2").removeClass("open");		
		} else {
			$(".for_hidden_form.form_2").addClass("open");
		}
	});

	$(".for_hidden_form_close").click(function(){
		$(".for_hidden_form").removeClass("open");
	});

	$(".for_hidden_form_bg").click(function(){
		$(".for_hidden_form").removeClass("open");
	});

	$(".project_tabs .tab-1").click(function () {
		$(".project_tabs .tab-item").each(function(){
			$(this).removeClass("active");
		});
		$(".project_blocks .block-item").each(function(){
			$(this).removeClass("active");
		});
		$(".project_tabs .tab-1").addClass("active");
		$(".project_blocks .block-1").addClass("active");
	});

	$(".project_tabs .tab-2").click(function () {
		$(".project_tabs .tab-item").each(function(){
			$(this).removeClass("active");
		});
		$(".project_blocks .block-item").each(function(){
			$(this).removeClass("active");
		});
		$(".project_tabs .tab-2").addClass("active");
		$(".project_blocks .block-2").addClass("active");
	});

	$(".project_tabs .tab-3").click(function () {
		$(".project_tabs .tab-item").each(function(){
			$(this).removeClass("active");
		});
		$(".project_blocks .block-item").each(function(){
			$(this).removeClass("active");
		});
		$(".project_tabs .tab-3").addClass("active");
		$(".project_blocks .block-3").addClass("active");
	});

	$(".project_tabs .tab-4").click(function () {
		$(".project_tabs .tab-item").each(function(){
			$(this).removeClass("active");
		});
		$(".project_blocks .block-item").each(function(){
			$(this).removeClass("active");
		});
		$(".project_tabs .tab-4").addClass("active");
		$(".project_blocks .block-4").addClass("active");
	});

	$(".project_tabs .tab-5").click(function () {
		$(".project_tabs .tab-item").each(function(){
			$(this).removeClass("active");
		});
		$(".project_blocks .block-item").each(function(){
			$(this).removeClass("active");
		});
		$(".project_tabs .tab-5").addClass("active");
		$(".project_blocks .block-5").addClass("active");
	});
	
	
 $(".project_tabs .tab-1").click(function () {
  $(".project_tabs .tab-item").each(function(){
   $(this).removeClass("active");
  });
  $(".project_blocks .block-item").each(function(){
   $(this).removeClass("active");
  });
  $(".project_tabs .tab-1").addClass("active");
  $(".project_blocks .block-1").addClass("active");
 });

 $(".project_tabs .tab-2").click(function () {
  $(".project_tabs .tab-item").each(function(){
   $(this).removeClass("active");
  });
  $(".project_blocks .block-item").each(function(){
   $(this).removeClass("active");
  });
  $(".project_tabs .tab-2").addClass("active");
  $(".project_blocks .block-2").addClass("active");
 });

 $(".project_tabs .tab-3").click(function () {
  $(".project_tabs .tab-item").each(function(){
   $(this).removeClass("active");
  });
  $(".project_blocks .block-item").each(function(){
   $(this).removeClass("active");
  });
  $(".project_tabs .tab-3").addClass("active");
  $(".project_blocks .block-3").addClass("active");
 });

 $(".project_tabs .tab-4").click(function () {
  $(".project_tabs .tab-item").each(function(){
   $(this).removeClass("active");
  });
  $(".project_blocks .block-item").each(function(){
   $(this).removeClass("active");
  });
  $(".project_tabs .tab-4").addClass("active");
  $(".project_blocks .block-4").addClass("active");
 });

 $(".project_tabs .tab-5").click(function () {
  $(".project_tabs .tab-item").each(function(){
   $(this).removeClass("active");
  });
  $(".project_blocks .block-item").each(function(){
   $(this).removeClass("active");
  });
  $(".project_tabs .tab-5").addClass("active");
  $(".project_blocks .block-5").addClass("active");
 });


	$(".moduletable_home_form input#jform_name").attr("placeholder","Имя*");
	$(".moduletable_home_form input#jform_email").attr("placeholder","E-mail*");
	$(".moduletable_home_form input#jform_phone").attr("placeholder","+375 хх ххх хх хх");
	$("input#jform_phone").attr("placeholder","+375 хх ххх хх хх");

	




	$(window).scroll(function() {
		if($(this).scrollTop() > 200) {
			$('.to_top').fadeIn();
		} else {
			$('.to_top').fadeOut();
		}
	});

	$('.to_top').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});




/* меню в шапке для адаптива */
	$(".header_menu_mobile_button").click(function(){
		$(this).addClass("open");
		$(".header_menu_mobile_bg").fadeIn();
		$(".header_menu_mobile_wrap").animate({left:0},500);
	});
	$(".header_menu_mobile_close").click(function(){
		$(".header_menu_mobile_button").removeClass("open");
		$(".header_menu_mobile_wrap").animate({left:"-310px"},500);
		$(".header_menu_mobile_bg").fadeOut();
	});
	$(".header_menu_mobile_bg").click(function(){
		$(".header_menu_mobile_button").removeClass("open");
		$(".header_menu_mobile_wrap").animate({left:"-310px"},500);
		$(".header_menu_mobile_bg").fadeOut();
	});

	$(".moduletable_menu_header_mobile > ul > li.parent span").click(function(){
		if ($(this).parent().hasClass("open")) {
			$(this).parent().removeClass("open");
		} else {
			$(this).parent().addClass("open");
		}
	});






	$(".moduletable_home_form").prepend("<a class='anchor_link' name='form_send'></a>");





});