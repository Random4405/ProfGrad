<?php
/* Design by VTEM http://www.vtem.net  All Rights Reserved */
defined( '_JEXEC' ) or die( 'Restricted access' );
JHtml::_('behavior.framework', true);
include_once(JPATH_ROOT . "/templates/" . $this->template . '/vtemtools/default.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

<?php 
include_once(JPATH_ROOT."/templates/".$this->template.'/vtemtools/css_var.php');
?>
<body id="vtem" class="<?php echo css_browser_selector().' '.$pageoption.' '.$pageview.' template-'.$TemplateStyle.' logo-'.$logo;?>">

<script language="JavaScript"><!--  
var message='Запрет копирования!'; function click(e)  
{if (document.all) {if (event.button == 2) {alert(message);return false;}}  
if (document.layers) {if (e.which == 3) {alert(message);return false;}}}  
if (document.layers) {document.captureEvents(Event.MOUSEDOWN);}  
document.onmousedown=click;  

function notcopy()  
{  
alert(message)  
return false  
}  
// -->  
</SCRIPT>

<SCRIPT LANGUAGE="JavaScript">  
  document.ondragstart = test;  
  //запрет на перетаскивание  
  document.onselectstart = test;  
  //запрет на выделение элементов страницы
  document.oncontextmenu = test;  
  //запрет на выведение контекстного меню
  function test() {  
  return false  
  }  
  </SCRIPT> 



<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery-1.9.1.min.js" type="text/javascript" ></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/script.js" type="text/javascript" ></script>
	<div id="vt_body_wrapper">
      <div id="vt_main_wrapper">
		<div id="vt_wrapper" class="clearfix">
			<!-- /////////////////// HEADER LAYOUT ///////////////////////////////-->
			<div id="vt_header_section" class="vt_header_section clearfix">	
                  <div id="vt_drawer_head" class="vt_drawer_head clearfix">	
            		<div><jdoc:include type="modules" name="top_contacts" style="xhtml" /></div> 
                 
                    <div class="vt_wrapper_header clearfix">
                    <div class="vt_section clearfix">			
                         <div id="vt_header" class="vt_header clearfix">
                              <?php echo VTEMShowModule('header', 'vt_xhtml', 6, 'header1', 'header2');?>
                         </div>
                     </div>    
                     </div>
                  </div>  
                   
                  <div align="center"><jdoc:include type="modules" name="bc" style="xhtml" /></div>
                  
                  <?php if ($this->countModules('top1 + top2 + top3 + top4 + top5 + top6 ')) : ?>
                    <div class="vt_wrapper_top clearfix">
                     <div id="vt_top" class="vt_top clearfix">
                          <?php echo VTEMShowModule('top', 'vt_xhtml', 6);?>
                     </div>
                     </div> 
                   <?php endif;?> 
			</div> 
		   <!-- /////////////////// MAIN LAYOUT ///////////////////////////////-->
		   <div id="vt_main_section" class="vt_main_section clearfix">
         
         <?php if ($this->countModules('showcase1 + showcase2 + showcase3 + showcase4 + showcase5 + showcase6 ')) : ?>
              <div class="vt_wrapper_showcase clearfix">
              <div class="vt_section clearfix">	
                 <div id="vt_showcase" class="vt_showcase clearfix">
                      <?php echo VTEMShowModule('showcase', 'vt_xhtml', 6);?> 
                      <div class="clr"></div>    
                 </div>
               </div>  
               </div> 
          <?php endif; ?>  
          <jdoc:include type="modules" name="for-shema-buy" style="xhtml" />                
		 <?php if ($this->countModules('feature1 + feature2 + feature3 + feature4 + feature5 + feature6 ')) : ?>
              <div class="vt_wrapper_feature clearfix">
              <div class="vt_section clearfix">
                 <div id="vt_feature" class="vt_feature clearfix">
                      <?php echo VTEMShowModule('feature', 'vt_xhtml', 6);?>
                      <div class="clr"></div>
                 </div>  
               </div>  
              </div>  
          <?php endif;?> 
                        
            <div id="vt_main_inside" class="clearfix">
              <div id="vt_main_contaner" class="clearfix">
              <div class="vt_section clearfix"> 
              <?php if(($pageview == "wrapper") || ($Layout == "wf")) : 
                       echo '<div id="vt_full">';
                            if($SystemMessages == 1) : 
                               echo '<jdoc:include type="message" />';
                            endif;
                            echo $component.'</div>';
                    else : // LEFT-BODY_RIGHT ////////////////
                            if($this->countModules('left')) : 
                                echo '<div id="vt_nav_left" class="vt_auto_cols '.$navleft.' '.$leftfloat.'">'.$modleft.'</div>';
                            endif;
                                echo '<div id="vt_main_com" class="vt_auto_cols '.$contentwidth.' '.$bodyfloat.'">
                                         <div class="vt_component_inside">';
                                             if($SystemMessages == 1) : 
                                                echo '<jdoc:include type="message" />';
                                             endif; 
                                                echo $component;
                                             if ($this->countModules('inset1 + inset2')) : 
                                                echo '<div id="vt_inset" class="vt_inset clearfix">'.VTEMShowModule('inset', 'vt_xhtml', 2).'</div>';
                                             endif;
                                             //echo '<jdoc:include type="modules" name="inset1" style="xhtml"/>';
                                             //echo '<jdoc:include type="modules" name="inset3" style="xhtml"/>';
                                             //echo '<jdoc:include type="modules" name="inset5" style="xhtml"/>';
                               echo ' </div>
                                    </div>';
                            if($this->countModules('right')) :
                               echo '<div id="vt_nav_right" class="vt_auto_cols '.$navright .' '. $rightfloat.'">'.$modright.'</div>';
                            endif;
                        // END LEFT-BODY_RIGHT ///////////////////////////
                    endif; ?> 
         </div>  
         </div>    
        <?php if ($this->countModules('utility1 + utility2 + utility3 + utility4 + utility5 + utility6 ')) : ?>
           <div class="vt_wrapper_utility clearfix">
           <div class="vt_section clearfix"> 
             <div id="vt_utility" class="vt_utility clearfix">
                    <?php echo VTEMShowModule('utility', 'vt_xhtml', 6);?>
                    <div class="clr"></div>
            </div> 
            </div>
           </div>  
        <?php endif; ?> 
        
        <?php if ($this->countModules('bottom1 + bottom2 + bottom3 + bottom4 + bottom5 + bottom6 ')) : ?>
           <div class="vt_wrapper_bottom clearfix">  
            <div class="vt_section clearfix">
             <div id="vt_bottom" class="vt_bottom clearfix">
                      <?php echo VTEMShowModule('bottom', 'vt_xhtml', 6);?>
                      <div class="clr"></div>
             </div>
            </div>   
           </div>  
        <?php endif; ?>  
     </div>
    </div>             
			<!-- /////////////////// FOOTER LAYOUT ///////////////////////////-->  
           
	<div id="vt_footer_section" class="vt_footer_section clearfix"> 
      <div class="vt_section clearfix">
        <div id="vt_wapper_footer"> 
           <?php if ($this->countModules('footer1 + footer2 + footer3 + footer4 + footer5 + footer6 ')) : ?>
                 <div id="vt_footer" class="vt_footer clearfix">
                        <?php echo VTEMShowModule('footer', 'vt_xhtml', 6);?>
                        <div class="clr"></div>
                </div> 
           <?php endif; ?>
           
           <div class="wapper_copyright_gotop clearfix">
           <?php if ($this->countModules('copyright1 + copyright2 + copyright3 + copyright4 + copyright5 + copyright6 ')) : ?>
                 <div id="vt_copyright" class="vt_copyright clearfix">
                        <?php echo VTEMShowModule('copyright', 'vt_xhtml', 6);?>
                        <?php echo VTEMShowModule('bottom_menu', 'vt_xhtml', 1);?>
<!-- <jdoc:include type="modules" name="right" /> -->
                        <?php if($totop) echo '<div id="gotop"><p><a href="#vtem" title="Back to Top"><span>Go Top</span></a></p></div>';?>
                 </div>
           <?php endif; ?>
           <div class="clr"></div>
            <?php echo $vtcopyright;?> 

           </div>
       </div> 
     </div>       
	</div>
   </div>     
  </div>	   
</div>  
            <jdoc:include type="modules" name="bottom_menu" style="xhtml" />
<?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/vtemtools/debug.php');?>

<div class="for_hidden_form">
      <div class="for_hidden_form_bg"></div>
      <div class="for_hidden_form_forma">
        <div class="for_hidden_form_close"></div>
        <jdoc:include type="modules" name="for_ql_form" style="xhtml" />
      </div>
    </div>


<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'IoxcJOVeLR';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
<!-- {/literal} END JIVOSITE CODE -->


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter29086545 = new Ya.Metrika({id:29086545,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/29086545" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>