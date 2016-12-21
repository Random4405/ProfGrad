jQuery( document ).ready(function( $ ) {

  $(".sales-main-img").closest(".itemBody").siblings(".itemHeader").find( "h1.itemTitle" ).css("color","#f01e27");

  $(".hex").closest("#vt_main_section").children(".moduletable_feedback").addClass("hidden_element")

    $(".moduletable_gallery_category").next().addClass("tricky-course")
    $(".moduletable_vandersanden_trick").next().addClass("vandersanden-tricky-course")


  $(".custom_video_bl").append("<div class='custom_mobile_info'>+375 29 113 71 99<br>+375 44 581 56 11<br>+375 17 262 62 54<br>info@profgrad.by</div>");
  // $('.main-menu__button').click(function(){
  //  if ($(".main-menu__content").hasClass("show")) {
  //    $('.main-menu__content').removeClass('show');
  //  } else {
  //    $('.main-menu__content').AddClass("show");
  //    }
  //  });

  $("#jform_name").attr("placeholder", "Имя*");
  $("#jform_tel").attr("placeholder", "Телефон*");
  $("#jform_email").attr("placeholder", "E-mail");
  $("#jform_message").attr("placeholder", "Ваш комментарий*");
  $(".qlform_buy .jform_name input").attr("placeholder", "Имя*");
  $(".qlform_buy .jform_email input").attr("placeholder", "E-mail");



  $(".for_form_button").click(function(){
    if ($(".for_hidden_form").hasClass("open")) {
      $(".for_hidden_form").removeClass("open");
    } else {
      $(".for_hidden_form").addClass("open");
    }
  });

  $(".for_hidden_form_close").click(function(){
    $(".for_hidden_form").removeClass("open");
  });

  $(".for_hidden_form_bg").click(function(){
    $(".for_hidden_form").removeClass("open");
  });




  /* slider */
  $(".for_spec_slider").prepend("<div class='main_img'></div>");
  $(".for_spec_slider .main_img").html($(".for_spec_slider .djslider-loader .slider-container li:first-child").html());

  $(".for_spec_slider .slider-container li").click(function() {
    $(".for_spec_slider .main_img img").attr("src",$(this).find("img").attr("src"));
  });





  /* form in footer */
  $(".moduletable_footer_form .jform_mail input").attr("placeholder", "Ваш e-mail");
  $(".moduletable_footer_form .jform_name input").attr("placeholder", "Ваше имя");
  $(".moduletable_footer_form .jform_message textarea").attr("placeholder", "Ваш комментарий");
  $(".moduletable_footer_form .jform_file input").after("<span>.doc, .docx, .txt, .rtf, .pdf, .jpg, .tiff, .png</span>");



  /* формы в попапе */
  $(".moduletable_question_form #jform_name").attr("placeholder", "Имя*");
  $(".moduletable_question_form #jform_email").attr("placeholder", "E-mail");
  $(".moduletable_question_form #jform_phone").attr("placeholder", "Телефон");
  $(".moduletable_question_form #jform_message").attr("placeholder", "Напишите Ваш вопрос");

  $(".moduletable_order_calculation #jform_name").attr("placeholder", "Ваше имя");
  $(".moduletable_order_calculation #jform_email").attr("placeholder", "E-mail");
  $(".moduletable_order_calculation #jform_message").attr("placeholder", "Комментарий");
  $(".moduletable_order_calculation #jform_file-lbl").after("<span>.doc, .docx, .txt, .rtf, .pdf, .jpg, .tiff, .png</span>");

  $(".hex__form .qlform_feedback #jform_name").attr("placeholder", "Имя*");
  $(".hex__form .qlform_feedback #jform_tel").attr("placeholder", "Телефон*");
  $(".hex__form .qlform_feedback #jform_email").attr("placeholder", "E-mail");


  $(".item-question .item-button").click(function(){
    $(".popap_form_bl").fadeIn(300);
    $(".moduletable_question_form").fadeIn(300);
  });	

  $(".item-calculation .item-button").click(function(){
    $(".popap_form_bl").fadeIn(300);
    $(".moduletable_order_calculation").fadeIn(300);
  });	

  $(".popap_form_bg").click(function(){
    $(".popap_form_bl").fadeOut(300);
    $(".moduletable_question_form").fadeOut(300);
    $(".moduletable_order_calculation").fadeOut(300);
  });	

  $(".popap_form_close").click(function(){
    $(".popap_form_bl").fadeOut(300);
    $(".moduletable_question_form").fadeOut(300);
    $(".moduletable_order_calculation").fadeOut(300);
  });

  /* main menu */
  // $(".main-menu__button").click(function () {
  // $(".main-menu-bl").toggleClass("open");
  // $(".header-contacts-list").toggleClass("hidden_element");
  // });

  // $(".main-menu__button").click(function () {
  // 	$("#mask").toggleClass("visible");
  // });

  $(".main-menu__button").click(function () {
    $(".main-menu-bl").toggleClass("open");
    $(".header-contacts-list").toggleClass("hidden_element");
    $("#mask").toggleClass("visible");
  });

  $("#mask").click(function () {
    $(".main-menu-bl").toggleClass("open");
    $(".header-contacts-list").toggleClass("hidden_element");
    $("#mask").toggleClass("visible");
  });


  var numberDopImages = 0;
  $(".hex__gallery-select .hex__gallery-item").each(function () {
    numberDopImages++;
  });

  if (numberDopImages > 5) {
    $(".hex__gallery-select .owl-carousel").owlCarousel({
      items : 5,
      itemsDesktop : [1199,5],
      itemsDesktopSmall : [980,5],
      itemsTablet: [768,4],
      itemsMobile : [479,3],
      navigation : true,
      navigationText : false
    });
  }

  $(".hex__gallery-select .owl-carousel img").click(function () {
    $(".hex__gallery-main-image img").attr("src", $(this).attr("src"));
    $(".hex__gallery-main-image .img__about").text($(this).attr("alt"));
  });


});
