jQuery( document ).ready(function( $ ) { 
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

});