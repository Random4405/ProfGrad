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

<script type="text/javascript">
var customizerSettings = {
language: "en"
}
</script>
<script src="http://yui.yahooapis.com/3.13.0/build/yui/yui-min.js"></script>
<link rel="stylesheet" type="text/css"
href="http://feldhaus.customizer.cadesignform.dk/assets/feldhaus.css" />
<script src="http://feldhaus.customizer.cadesignform.dk/assets/customizer.js"
type="text/javascript"></script>



<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery-1.9.1.min.js" type="text/javascript" ></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/script.js" type="text/javascript" ></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/tabs.js" type="text/javascript" ></script>
	<div id="vt_body_wrapper">
      <div id="vt_main_wrapper">
		<div id="vt_wrapper" class="clearfix">
			<!-- /////////////////// HEADER LAYOUT ///////////////////////////////-->
			<div id="vt_header_section" class="vt_header_section clearfix">	
                  <div id="vt_drawer_head" class="vt_drawer_head clearfix">	
            		 <?php if ($this->countModules('drawer1 + drawer2 + drawer3 + drawer4 + drawer5 + drawer6 ')) : ?>
                      <div class="vt_wrapper_drawer clearfix">
                      <div class="vt_section clearfix">
                         <div id="vt_drawer" class="vt_drawer clearfix">
                              <?php echo VTEMShowModule('drawer', 'vt_xhtml', 6);?>
                         </div>
                       </div>  
                      </div>
                         <?php endif;?> 
                 
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
                             if ($_SERVER['REQUEST_URI'] == '/services/krovelnye-raboty'):
echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft"> 
<div class="vt_component_inside">
<span id="startOfPageId66"></span>
<div id="k2Container" class="itemView">
	<div class="itemHeader">
	  <div class="itemTitle">
	  <h1 class="itemTitle">Монтаж кровли под ключ</h1>
	  </div>	  		
  </div>       	
  <div class="itemBody">
	  <div class="itemFullText">
<p><img src="/images/krov-rab.jpg" border="0" width="350" style="float: right; margin-left: 15px; margin-right: 15px;" alt="финальны1й этап монтажа кровли, укладка битумной черепицы" /></p>
<p>Если Вы ищете информацию по кровельным работам - значит Вы либо строите дом, либо нацелены осуществить реставрацию своей крыши. <br /><br />Рассматривая расценки на кровельные работы, Вы должны в первую очередь понимать, насколько сложный проект кровли Вы хотите разработать, какие материалы для него хотите использовать и какие этапы работы вообще необходимо учитывать.</p>
<br />


<h2>Основные этапы монтажа кровли под ключ</h2>

<h3>1.Проектирование, снятие замеров и проведение расчетов для кровли</h3>
<p>Установка кровли – это реализация архитектурного проекта, поэтому от сложности и качества самого решения зависит, насколько качественной будет монтаж.</p>
<h3>2. Установка несущей конструкции кровли</h3>
<p>Как известно, надежность и работа системы зависит от всех ее элементов, поэтому внимание к качеству монтажа должно быть высоким на всех этапах строительства, начиная от установки несущей конструкции до конечного покрытия. Стропильная система – это фундамент, от которого будет зависеть качество всей последующей работы.</p>
<h3>3.Установка мансардных окон</h3>
<p>На этом этапе не стоит экономить, потому что для обеспечения профессиональной установки мансардного окна, частично высокие затраты необходимы. Это объясняется тем, что к установке мансардного окна выставляются более высокие требования, чем к установке обычного окна. В своей работе мы предпочитаем мансардные <a href="/catalog/mansardnye-okna-velux" target="_blank">окна Velux</a></p>

<h3>4. Монтаж гидроизоляционных и пароизоляционных материалов, утепление кровли.</h3>
<p>На этом этапе стоит уделить внимание выбору подходящей пленки, применимой для утепления крыши. В этом случае мы доверяем пароизоляционным и гидроизоляционным материалам <a href="/catalog/plenki-delta" target="_blank">Delta</a></p>

<h3>5. Монтаж дымохода и вентиляции</h3>
<p>Иногда происходит так, что поставщик кровельных материалов дают гарантию на свою черепицу от 25 лет, однако реальный срок эксплуатации крыши часто снижается до 10-12 лет. Это происходит из-за неправильно организованной системы вентиляции мансардного этажа. Хорошо сбалансированная система вентиляции чердака защищает Ваши инвестиции в крышу.</p>

<p>Правильная вентиляция крыши:</p>
<ul>
<li>помогает кровле «дышать» и снижает разницу между температурой снаружи и внутри.</li>
<li>снижает влажность под крышей, тем самым сводя к минимуму образование плесени и грибка.</li>
<li>сводит к минимуму образование конденсата, который может ослабить систему отопления в доме.</li>
</ul>

<h3>6. Укладка кровельного материала</h3>
<p>Для того, чтобы не ошибиться в выборе и количестве нужно материала, лучше всего, когда архитектор, заказчик и строитель работают в одной команде и совместно обсуждают все нюансы.</p>
<p>В Минске огромный выбор материалов для устройства кровли. Мы работаем только с проверенными и надежными кровельными материалами:</p>
<ul>
<li><a href="/catalog/krovelnye-materialy/krovlia-iko" target="_blank">Битумная черепица IKO</a></li>
<li><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile" target="_blank">Композитная кровля Metrotile</a></li>
<li><a href="/catalog/krovelnye-materialy/meyer-holsen" target="_blank">Керамическая черепица MeyerHolsen</a> и <a href="/catalog/krovelnye-materialy/imerys" target="_blank">Imerys</a></li>
<li><a href="/catalog/krovelnye-materialy/faltsevaia-krovlia" target="_blank">Фальцевая кровля bp титан-цинка</a></li>
</ul>
<p>Эти материалы европейского производства действительно обладают высочайшим качеством, и дают гарантию на эксплуатацию от 25 лет. Мы работаем только с проверенными брендами, которые не подорвут наш авторитет.</p>
<h3>7. Установка водосточной системы</h3>
<p>Правильно установленная водосточная система не позволит таящему снегу и другим осадкам скапливаться на крыше или спадать лавиной. Мы рекомендуем 2 вида наиболее качественных и востребованных водосточных систем: <a href="/vodostochka/scala-plastics" target="_blank">ScalaPlastics</a> и <a href="/vodostochka/nelissen" target="_blank">Nelissen</a>.</p>
<p>Установка крыши один из самых важных, трудоемких и дорогих этапов в строительстве. От того, насколько качественный материал кровли Вы выберите, и насколько профессионально будет произведена укладка, зависит долговечность Вашего дома и комфортная жизнь в нем без постоянных ремонтных работ. Ну а если же Вы делаете реставрацию кровли в старом доме перед продажей, то должны понимать, что правильная установка кровли может увеличить стоимость дома в разы!</p>
<h2>Схема работы</h2>
<p><img src="/images/shema-raboty-2.jpg" border="0" width="800" alt="схема этапов монтажа кровли под ключ"></p>
<h2>Как определить, что при устройстве кровли допущены ошибки?</h2>

<ol>

<li>Температура воздуха в доме не соответствует требуемой</li>
<li>На потолке появляются водяные пятна, подтеки, изморозь</li>
<li>На штукатурке образовались шелушение и волдыри</li>
<li>Мягкая кровля со временем начала изгибаться или деформироваться</li>
<li>Под черепицей стала скапливаться вода, началось гниение конструкции</li>
<li>Под элементами черепицы собирается мусор</li>
</ol>
<h2>Как формируется цена монтажа кровли?</h2>

<p>Перед началом работы, необходимо обсудить с исполнителями все условия, конечную стоимость всего материала, и отдельно расценки на кровельные работы. Так Вы сможете заранее просчитать все свои затраты и прийти к пониманию того, какую крышу Вы собираетесь строить, насколько сложный проект реализовывать, какие материалы покупать. Что входит в стоимость устройства кровли, наши опытные специалисты с радостью расскажут Вам все от «а» до «я», учитывая все возможные нюансы и пожелания в нашем красивом <b><a href="/contacts">шоуруме на ул. Мележа,5</a></b>.</p>
<p><a href="/services/krovelnye-raboty/montaj-metallocherepicy"><img src="/images/montazh-metallocherepicy.jpg" border="0" width="210" style="float: left; margin-left: 12px; margin-right: 12px;"></a><a href="/services/krovelnye-raboty/montaj-metallocherepicy">Монтаж металлочерепицы</a></p>
<p>Технология укладки металлочерепицы имеет свои особенности. Категорически запрещается нарезка металлочерепицы болгаркой (абразивным кругом). Воздействие высокой температуры приводит к выжиганию цинка, как следствие, начинается быстрый коррозийный процесс, образуется ржавчина на металлочерепице.</p>
<p>&nbsp;</p>
<p><a href="/services/krovelnye-raboty/montaj-bitumnoi-cherepicy"><img src="/images/montazh-bitumnoicherepicy.jpg" border="0" width="210" style="float: left; margin-left: 12px; margin-right: 12px;"></a><a href="/services/krovelnye-raboty/montaj-bitumnoi-cherepicy">Монтаж битумной черепицы</a></p>
<p>В основе битумной черепицы лежит органическая целлюлоза или стеклохолст, благодаря чему этот материал отличает прочность, гибкость и стойкость к деформации. С внешней стороны черепица покрыта минеральной или базальтовой крошкой самых разных оттенков. Помимо того, что это повышает стойкость черепицы к воздействию атмосферных явлений, крошка придает ей декоративность.</p>
<p>&nbsp;</p>
<p><a href="/services/krovelnye-raboty/montaj-kompozitnoi-cherepicy"><img src="/images/compozit-montazh.jpg" border="0" width="210" style="float: left; margin-left: 12px; margin-right: 12px;"></a><a href="/services/krovelnye-raboty/montaj-kompozitnoi-cherepicy">Монтаж композитной черепицы</a></p>
<p>К сожалению, сегодня многие бригады, не имеющие опыта монтажа Mertotile, считают что композитная кровля от металлочерепицы отличается только наличием гранулята. Это в корне не так! Помимо технологических и эксплуатационных характеристик, композитная черепица монтируется совершенно другим способом.</p>
<p>&nbsp;</p>
<p><a href="/services/krovelnye-raboty/montaj-keramicheskoi-cherepicy"><img src="/images/montaj-keramicheskoi.jpg" border="0" width="210" style="float: left; margin-left: 12px; margin-right: 12px;"></a><a href="/services/krovelnye-raboty/montaj-keramicheskoi-cherepicy">Монтаж керамической черепицы</a></p>
<p>Для начала хотелось бы отметить, что монтаж керамической черепицы - это очень сложная и трудоёмкая работа. Именно поэтому укладку керамической кровли необходимо доверять исключительно профессиональным кровельщикам и специалистам в этом деле. На крышах, которые имеют уклон скатов от 10 градусов до 90 градусов, применяют натуральную черепицу.</p>
<p>&nbsp;</p>
<p><a href="/services/krovelnye-raboty/montaj-falcevoy-krovli"><img src="/images/med.jpg" border="0" width="210" style="float: left; margin-left: 12px; margin-right: 12px;"></a><a href="/services/krovelnye-raboty/montaj-falcevoy-krovli">Монтаж фальцевой кровли </a></p>
<p>Фальцевая кровля имеет маленький вес, это дает возможность монтировать легкую основу. Монтаж фальцевой кровли может осуществляться как на традиционную обрешетку, так и на сплошную основу. Если все же основой является обрешетка, то здесь необходимо учитывать такое расстояние между брусьями, чтобы фальцевая кровля не прогнулась.</p>
</div>
	  	       
		<div class="clr"></div>	  
						<div class="itemContentFooter">
			<div class="clr"></div>
		</div>	
	  <div class="clr"></div>
  </div>
<div class="clr"></div>
<div class="clr"></div>
</div>
</div>
</div> 
</div>  
</div>    
</div>
 </div>        
';
elseif ($_SERVER['REQUEST_URI'] == '/services/krovelnye-raboty/montaj-bitumnoi-cherepicy'):
echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft"> 
<div class="vt_component_inside">
<span id="startOfPageId66"></span>
<div id="k2Container" class="itemView">
	<div class="itemHeader">
	  <div class="itemTitle">
	  <h1 class="itemTitle">Монтаж битумной черепицы</h1>
	  </div>	  		
  </div>       	
  <div class="itemBody">
	  <div class="itemFullText">
	  <img src="/images/bitumnaja-cherepitca/iko.jpg" width="800" />

	<p>Данная инструкция разработанна на основании технологической карты по монтажу битумной черепицы IKOи служит пособием для монтажа битумной черепицы других производителей.</p>

<h2>1. ОБЩИЕ СВЕДЕНИЯ </h2>
<ul>
	<li>Компания ІКО не несет ответственности за протечки, произошедшие вследствие неправильной установки или неправильной подготовки основания кровли. Черепица не должны укладываться непосредственно на теплоизоляцию; между теплоизоляцией и основанием, на которое прибивается черепица должно быть сквозное вентиляционное пространство.</li>
	<li>Незначительное различие в цветах &mdash; это свойственно битумной черепице и не является дефектом. Для уменьшения цветового несоответствия, отдельные листы битумной черепицы должны выбираться и смешиваться случайным образом из нескольких пачек, а затем устанавливаться по диагонали наверх кровли.</li>
	<li>Не удаляйте защитную полоску с обратной стороны листов битумной черепицы. Она служит в целях упаковки, а не для приклейки. <b>Однако, во время установки удалите пленку с обратной стороны битумной черепицы</b> <b>Armour</b><b>Shield</b><b>.</b>(Рисунок 7 -7)</li>
	<li> Клеящая полоса, нанесенная на обратную сторону черепицы, начинает склеиваться под действием тепла солнца. Дополнительная проклейка требуется только в условиях холодной погоды и при установке на крутых крышах. Клей должен иметь подтвержденbе от компании ІКО на совместимость с битумной черепицей ІКО.</li>
	<li><b> Согните упаковку перед открытием для легкого отделения листков черепицы!</b></li>
	<li><b>Предосторожность: в течении солнечного, теплого периода, не ходите по биту мной черепице с солнечной стороны крыши из-за опасности остаатсния следов!</b></li>
</ul>


<h2>2. МАТЕРИАЛЫ ИСПОЛЬЗУЕМЫЕ ДЛЯ КАЧЕСТВЕННОГО МОНТАЖА</h2>
<p align="center"><b><img src="/images/bitumnaja-cherepitca/image110.jpg" width="800" /></b></p>


<h2>3. ТЕРМИНЫ ИСПОЛЬЗУЕМЫЕ В ИНСТРУКЦИИ</h2>

<p align="center"><b><img src="/images/bitumnaja-cherepitca/image111.jpg" width="800" /></b></p>




<h2> 4. ПОДГОТОВКА ОСНОВАНИЯ КРЫШИ</h2>

<h2><b>4.1 </b><b>Основание кровли </b><b>(рисунок 2)</b></h2>

<p><img style="float: left; margin: 8px;" src="/images/bitumnaja-cherepitca/image012.gif" width="335">Основание кровли должно быть гладким, жестким, сухим и надежно закрепленным. Основание должно быль изготовлено из высококачественной фанеры шпунтованной доски или чистообрезанных досок. Максимальная ширина досок для основания &mdash; 15 см. Дерево, используемое для основания, должно быть правильно подготовлено, а также выдержано в условиях естественной влажности. Доски или листы фанеры должны быть установлены в разбежку, т.е. с перевязкой швов и хорошо закреплены. Неправильный подбор материала для основания может привести к тому, что основание &laquo;поведет&raquo; и это может разрушить черепицу.</p>


<h2><img style="float: left; margin: 8px;" src="/images/bitumnaja-cherepitca/image014.gif" height="300"><b>4.2</b><b> Вентиляция </b><b>(рисунок 3)</b></h2>


<br />
<p>Очень важно чтобы рассеянное тепло и водяные пары уходили из кровельной системы через правильно установленную вентиляции. Таким образом, воздух должен свободно циркулировать между теплоизоляцией и основанием, на которое установлена черепица от свесов до конька. Для крыши с уклоном 15-25 градусов, площадь вентиляционного выхода должна составлять 33см<sup>2</sup>, для уклона 25-85 градусов, минимальная площадь должна составлять 16см<sup>2</sup> для каждого м<sup>2</sup> теплоизолированной площади потолка (P), всегда ровно поделённой между скатами и коньком.</p>
<br />
<br />
<br />

<h2><b>4.3 </b><b>Подкладочный материал</b></h2>


<h2>Способ 1: (Рисунок 4а I)</h2>
<p><b>Уклон 15&deg; - 20&deg; </b>. Самый &laquo;продвинутый&raquo; способ &mdash; это иснольэование рулонного материала IKOArmourGardIce&amp; WaterProtector(Защита ІКО от воды и льда &laquo;Армоград&raquo;) от компании ІКО, или схожего с ним, рулонного материала на основе модифицированного битума, которым заклеивают всю площадь основания кровли. Нахлесты между рулонами должны быть 15 см. и по горизонтали &mdash; 8 см.</p>

<p align="center"><img src="/images/bitumnaja-cherepitca/image016.gif" width="250" /><img src="/images/bitumnaja-cherepitca/image018.gif" width="260" /><img src="/images/bitumnaja-cherepitca/image020.gif" width="249" /></p>

<h2>Способ 2: (Рисунок 4а II)</h2>
<p><b>Уклон 15&deg; - 20&deg; </b>. Использование IKOArmourbase15 или схожих с ним материалов, для двойного покрытия всей плоскости основания кровли. Обрежьте начальную полоску шириной 50 см и продолжайте укладывать материал с нахлёстом 50 см по горизонтали и 30 см на концах.</p>

<p><b>Уклон 21&deg; &mdash; 85&deg;(Рисунок 4b)</b>. Вся площадь основания крыши должна быть покрыта материалом IKOArmourbase30 или схожимматериалом для подкладки под битумную черепицу. Подкладочный материал должен быть установлен параллельнокарнизным свесам с нахлестали в 5 см погоризонтали и 10 см на концах материала. Закрепить подкладочный материал таким количеством гвоздей, которое обеспечит его неподвижное состояние на своем месте.</p>



<p><b>Уклон 85&deg; &mdash; 90&deg;</b>. Подкладочный слой не требуется. В этом случае могут использоваться только плитки типа ArmourShield.</p>

<h2>4.4 Ендовы</h2>

<p>Ендовы могут быть закрыты по одному из следующих способов: - <b>О</b>ткрытым <b>способом,- П</b>летенкой пли Закрытым <b>способом.</b> Подготовка основания ендовызависит от способа покрытия.</p>

<h3 style="margin-left: 13pt;"><b>Подготовка при Открытом способе </b>(Рисунок 5)</h3>

<p><img style="float: left; margin: 8px;" src="/images/bitumnaja-cherepitca/image022.gif" height="300">Покройте ендову материалом шириной I метр, например IKOArmourbase30(I). Вертикальные нахлесты должны составлять 30 см и должны быть тщательно проклеены (2). Боковые нахлесты этого материала, должны быль покрыты на 15 см подкладочным материалом основной плоскости кровли (3). Окончательно закройте ендову материалом IKOBi-ArmourValley (Материал Bi-ArmourValleyкомпании IKOдля ендов) или материалом на основе фольги поверх подкладочногослоя ендовы (4). Прибейте гвоздями материал IKOBi-ArmourValley с интервалом в 45 см между гвоздями и на расстоянии 2.5 см от края материала. Если нахлесты неизбежны, то они должны составлять 30 см и должны быть тщательно проклеены клеем или горелкой (5). Материал на основе металла должен быть прикреплен с интервалом 25 см, нахлесты должны составлять 30 см и должны быть проклеены.</p>



<h3><b>При монтаже методом Плетенки пли Закрытым способом с обрезкой</b></h3>
<p>Подготовьте ендову, используя один слой IKOArmourGardIce&amp; WaterProtectorс нахлестами в 30 см. Как альтернативу используйте Armourbase30 (или ее аналог), прибив его на расстоянии 2.5 см от края. Нахлесты должны составлять 30 см и должны быть тщательно проклеены.</p>


<h3><b>4.5 </b><b>Защита карнизов</b> (Рисунок 4с)</h3>
<p><img style="float: left; margin: 8px;" src="/images/bitumnaja-cherepitca/image024.gif" height="180"><br /><br />В климатических условиях, где средняя температура в январе -10&deg;С. карнизы должны быть защищены от наледи, которая может привести к проникновению воды под плитку. Установите материал IKOArmourGardIce&amp; WaterProtectorна поверхности кровли от карнизкого свеса.</p>
<br /><br /><br />

<h3><b>4.6 </b><b>Капельник</b> (Рисунок 4b)</h3>
<p><img style="float: left; margin: 8px;" src="/images/bitumnaja-cherepitca/image020.gif" height="180"><br /><br />Капельники для карнизов и краев крыши должны быть изготовлены из корозийностойкого материала и должны заходить наплоскость крыши как минимум на 8 см от края и обогнув его к низу. Капельники должны быть установлены поверх подкладочного слоя по краям крыши (4) и вдаль карнизных свесов (5).</p><br /><br />



<h2>5. МОНТАЖ ПЛИТОК БИТУМНОЙ ЧЕРЕПИЦЫ</h2>

<h3 align="left">5.1  Прибивание и Приклеивание </h3>

<p>Правильное прибивание, является очень важным момент при монтаже кровельного материала. Прибивайте гвозди так, чтобы головка гвоздя находилась на одном уровне, а не врезалась в поверхность плитки (Рисунок 6а).</p>

<p align="center"><b><img src="/images/bitumnaja-cherepitca/image026.gif" width="480" /></b></p>

<p>Всегда прибивайте гвозди на расстоянии 23 см выше от выреза в листке черепицы и 2.5 см от каждого края листка. Для правильного расположения гвоздей и их количества для каждого типа плитки и наклона крыши смотрите (Рисунок 6b1). Заметьте, что на крутых крышах (&gt; 60&deg;) или в районах сильных ветров необходимо использовать дополнительные гвозди и ручную проклейку клеем IKOShingleStick как показано на (Рисунок 6b2). В течении установки плитки в холодное время дополнительное количество клея должно быть добавлено таким же образом. В районах сильных ветров таблички каждой черепицы должны был, приклеены для. как минимум, нити верхних радов крыши. Силиконовый клей должен применялся в количестве не больше 25мм и экономно.</p>

<p align="center"><img src="/images/bitumnaja-cherepitca/image028.jpg" width="800" /></p>

<h2>НАЧАЛЬНАЯ ПОЛОСА (Рисунок 7)</h2>
<p>Приготовьте начальную полосу посредством обрезания табличек черепицы вдоль линии на уровне верхних концов вырезов. Начните установку начальной полосы с обрезания листа черепицы на половину таблички с краю, для того, чтобы избежать совпадения линии соединения между листками начальной полосы и линией соединения листков первого рада. Начальная полоса должна нависать нал карнизом на 6&mdash; 10 мм игде возможно над краем крыши (3).</p>
<p>Для плитки <b>Cambridge </b>используйте прямоугольную плитку.</p>


<h2>ПЕРВЫЙ РЯД <b>И </b>ПРОЦЕДУРА УСТАНОВКИ (Рисунок 7)</h2>
<h3><b>Первый ряд </b>(4):</h3>
<p>Начните с целого листа черепицы на одном уровне с начальной полосой черепицы, начиная с карниза и края крыши. Прибейте лист черепицы, как показано на Рисунке 6 и продолжайте прибивать также вдоль крыши, используя целые листы черепицы.</p>
<h3><b>Второй ряд </b>(5):</h3>
<p>Отрежьте половину таблички от края листа черепицы и начинайте с края крыши. Прибейте черепицу так, чтобы нижний край табличек был на одном уровне с верхним краем вырезов в первом ряду. (Подберите требуемую величину выпуска для разного наклона ската крыши, согласно таблицы №1, расположенной в конце инструкции).</p>
<h3><b>Третий и последующие ряды </b>(6):</h3>
<p>Начните третий ряд с листа плитки, у которого полностью отрезана одна табличка. Отрезайте дополнительно по половине таблички для каждого последующего ряда. Для максимальной зашиты от дождя с ветром проклеивайте черепицу вдоль края крыши битумным клеем.</p>


<p><b>Внимание: Когда используются плитки Сат</b><b>bridge</b><b>обрезайте </b>10.20.30....<b>см, соответственно от левого края первой черепицы второго, третьего, ... рядов!!!</b></p>

<h2>5.2 Установка плитки в ендовах</h2>
<h3><b>Метод открытой ендовы </b>(Рисунок 8А)</h3>
<p>Проведите мелом две линии от конька к карнизу по 15 см в каждую сторону, увеличивая ширину на 1 см, каждый последующий метр в сторону карнизного свеса (1). Обрежьте плитку по этим линиям и отрежьте 5-ти см треугольникот верхнего угла листа плитки, для направления воды в ендову. Установите каждый край листа плитки на 5-и сантиметровую полоску клея (3) и прибейте плитку гвоздями на расстоянии 5 см от проведенных мелом линий (4).</p>

<p align="center"><img src="/images/bitumnaja-cherepitca/image034.gif" width="254" /><img src="/images/bitumnaja-cherepitca/image036.gif" width="253" /><img src="/images/bitumnaja-cherepitca/image038.gif" height="246" /></p>

<h3><b>Метод переплетения </b><b>(</b>Рисунок 8b)</h3>
<p>Установите плитку поверх пересечения плоскостей крыши. Последний лист черепицы должен заходить как минимум на 30 см, на противоположную плоскость крыши (1) и должен быть закреплен дополнительным гвоздем в верхнем углу черепицы (2). Прижмите черепицу плотно к ендове, перед креплением гвоздями. Не прибивайте плитку на расстоянии меньше чем 15 см от центральной линии ендовы.</p>


<h3><b>Метод закрытия с обрезкой </b>(Рисунок 8с),<b>для уклона &gt;23</b>&deg;</h3>
<p>Для улучшния производительности: начинайте монтировать плитку на скате, с меньшим уклоном или меньшей высотой. Первый ряд должен быть переплетен (1) (заступ +25 см на соседнюю плоскость крыши). Не прибивайте его на расстоянии менее 15 см от центральной линии ендовы. Бейте дополнительный гвоздь (2) на конце каждого листа плитки, пересекающей ендову. После укладки, установки плитки на этой плоскости, проведите меловую линию (3) на расстоянии 5 см от центральной линии ендовы, на только что покрытом скате. Затем прибейте плитку на второй скат крыши, обрежьте плитку по меловой линии и отрежьте треугольник со сторонами 5 см от верхнего угла листа плитки (4) для направления воды в ендову. Проклейте каждый край листов плитки, примыкающих к разжелобку клеем, напримерIKOShingleStick (5).</p>


<h2>5.3 Вальмы и коньки (Рисунки 9а и 9b)</h2>

<p> Последние ряды подгоните так, чтобы они с двух сторон равномерно и одинаково покрывали конек крыши. Разделите прямоугольную или шестигранную плитку на отдельные плитки, разрезая их по местам вырезов (1). (для <b>ArmourShield</b>: (А) видимая часть, (В) закрываемая часть). (Рисунок 9а)</p>
<p>Покрывая конек и вальмы плитками, перекрывайте каждые последующие плитки и перегибайте их поверх конька или ребра (вальмы). В холодную погоду прогрейте плитки перед тем как начнете их сгибать. Прибивайте плитки на расстоянии 16 см от конца таблички (2) и на расстоянии 2.5 см от каждой стороны (3). Начинайте закрывать конек со стороны, противоположной преобладающему направлению ветров в данном районе. (Рисунок 9b)</p>

<p><img src="/images/bitumnaja-cherepitca/image040.jpg" width="800" /> </p>

<h2><b>5.4 </b> <b>Планки примыкания</b></h2>

<p> Планки примыкания монтируются согласно рисунка 10а, 10b. Также, Вы можете посмотреть видеоинструкцию по монтажу битумной черепицы, в самом низу данного раздела.</p>




<h2>6.ПРИМЕРНЫЙ РАСХОД БИТУМНОЙ ЧЕРЕПИЦЫ</h2>

<h3><b>6.1 Для основания крыши</b></h3>
<p> Выпуск табличек битумной черепицы зависит от наклона крыши, как показанно в таблице ниже. Битумная черепица не может быть смонтированна на крышах с наклонном не указанным в таблице.</p>

<h3><b>6.2 Для рёбер и коньков</b></h3>
<p> Необходимо заказывать материал примерно на 10 &ndash; 15% больше (в зависимости от кровельных элементов) чем общая площадь покрытия рёбер, коньков и начальной полосы. При монтаже коллекции Cambridge, необходимо заказывать прямоугольную плитку соответствующего цвета, для покрытия ребер и конька.</p>



<h2><b>Пример расчёта материала</b></h2>
<p>Коллекция: Armourglass</p>
<p>Наклон крыши: 32&deg;</p>
<p>Площадь кровли: 240м2</p>
<p>Подсчёт: Наклон кровли 25&deg; - 85&deg; = 3,00м2/в пачке</p>
<p> 240м2 / 3,00 = 80 пачек плитки</p>  
	  
	  
	  
	  
</div>
	  	       
		<div class="clr"></div>	  
						<div class="itemContentFooter">
			<div class="clr"></div>
		</div>	
	  <div class="clr"></div>
  </div>
<div class="clr"></div>
<div class="clr"></div>
</div>
</div>
</div> 
</div>  
</div>    
</div>
 </div>        
';











elseif ($_SERVER['REQUEST_URI'] == '/catalog/krovelnye-materialy'):
echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft"> 
<div class="vt_component_inside">
<span id="startOfPageId66"></span>
<div id="k2Container" class="itemView">
	<div class="itemHeader">
	  <div class="itemTitle">
	  <h1 class="itemTitle">Кровельные материалы</h1>
	  </div>	  		
  </div>       	
  <div class="itemBody">
	  <div class="itemFullText">
<table border="0" cellspacing="3" cellpadding="3">
<tbody>
<tr>
<td>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile"><span>Композитная черепица Metrotile</span></a><br>Metrotile— это кровельное покрытие, которое состоит сразу из нескольких слоев. В ее основе имеется стальной лист, располагающийся между слоями алюмоцинка, представляющего собой сплав кремния, алюминия и цинка, его толщина составляет 20 микрон. Из-за такого способа покрытия сталь полностью предохраняется от коррозийных процессов, агрессивного влияния внешних факторов, а благодаря своей растяжимости и гибкости позволяет создавать кровельное покрытие различной формы, не меняя при этом своих качественных показателей.</p>
<div style="float: left; width: 280px; display: block;">
<ul>
<li><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrobond"> <span> MetroBond</span></a></li>
<li><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroroman"> <span> Metroroman</span></a></li>
<li><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroshake-ii"> <span> MetroShake II</span></a></li>
<li><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrowoodenshake"> <span> MetroWoodenShake</span></a></li>
<li><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroroman-ii"> <span> MetroRoman II</span></a></li>
</ul>
</div>
<div style="float: left; width: 280px; display: block;">
<ul>
<li><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrotile-gallo"> <span> Metrotile Gallo</span></a></li>
<li><span><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrotile-mistral">MetroBondMistral</a></li>
<li><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrosherwood"> <span> MetroSherwood</span></a></li>
<li><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroclassic"> <span> MetroClassic</span></a></li>
<li><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroshingle"> <span> MetroShingle</span></a></li>
</ul>
</div>
</td>
<td valign="top"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile"> <span> <img src="/images/Logo_Metrobond.jpg" border="0" width="150" style="margin-left: 12px; margin-right: 12px;"></span></a></td>
</tr>
<tr>
<td>&nbsp;</td>
<td valign="top">&nbsp;</td>
</tr>
<tr>
<td><a href="/catalog/krovelnye-materialy/krovlia-iko"><span>Битумная черепица IKO</span></a><br>Битумная черепица IKO – один из первых представителей отрасли рынка кровельных материалов. Концерн IKO Industries уже более шестидесяти лет предлагает на международном рынке товар наивысшего качества. Послевоенный рост строительства плодотворно повлиял на развитие индустрии строительных материалов и в 1953 году компанией IKO был представлен первый в мире прототип гонта кровельного материала. Это была первая битумная черепица. С тех пор данная компания предоставляет покупателям только первоклассный продукт по приемлемым ценам.
<p>&nbsp;</p>
<div style="float: left; width: 280px; display: block;">
<ul>
<li><a href="/catalog/krovelnye-materialy/krovlia-iko/xpress"> <span> Кембридж XPRESS</span></a></li>
<li><a href="/catalog/krovelnye-materialy/krovlia-iko/skyline"> <span> Скайлайн</span></a></li>
<li><a href="/catalog/krovelnye-materialy/krovlia-iko/armoshild"> <span> Армошилд</span></a></li>
</ul>
</div>
<div style="float: left; width: 280px; display: block;">
<ul>
<li><a href="/catalog/krovelnye-materialy/krovlia-iko/hex"> <span> Хекс</span></a></li>
<li><a href="/catalog/krovelnye-materialy/krovlia-iko/biber"> <span> Бобровый хвост</span></a></li>
<li><a href="/catalog/krovelnye-materialy/krovlia-iko/3tab"> <span> Тритаб</span></a></li>
</ul>
</div>
</td>
<td valign="top"><a href="/catalog/krovelnye-materialy/krovlia-iko"><span><img src="/images/Logo_IKO.jpg" border="0" style="margin-left: 12px; margin-right: 12px;"></span></a></td>
</tr>
<tr>
<td>&nbsp;</td>
<td valign="top">&nbsp;</td>
</tr>
<tr>
<td><a href="/catalog/krovelnye-materialy/imerys"><span>Керамическая черепица Imerys</span></a><br>Керамическая черепица IMERYS производства Франции – является одним из мировых лидеров качества в своей отрасли. Вот уже почти две сотни лет, французские заводы по производству керамической черепицы выпускают классическую черепицу, по праву считающуюся одной из самых лучших в мире.
<p>&nbsp;</p>
<div style="float: left; width: 280px; display: block;">
<ul>
<li><a href="/catalog/krovelnye-materialy/imerys/pv-10"> <span> PV 10</span></a></li>
<li><a href="/catalog/krovelnye-materialy/imerys/h-10"> <span> H 10</span></a></li>
<li><a href="/catalog/krovelnye-materialy/imerys/arboise-ecaille"> <span> ARBOISE ECAILLE</span></a></li>
<li><a href="/catalog/krovelnye-materialy/imerys/hp-10"> <span> HP 10</span></a></li>
</ul>
</div>
<div style="float: left; width: 280px; display: block;">
<ul>
<li><a href="/catalog/krovelnye-materialy/imerys/omega-10"> <span> OMEGA 10</span></a></li>
<li><a href="/catalog/krovelnye-materialy/imerys/diamant"> <span> DIAMANT</span></a></li>
<li><a href="/catalog/krovelnye-materialy/imerys/arboise-rectangulaire"> <span> ARBOISE RECTANGULAIRE</span></a></li>
<li><a href="/catalog/krovelnye-materialy/imerys/alpha-10"> <span> ALPHA 10 </span></a></li>
</ul>
</div>
</td>
<td valign="top"><a href="/catalog/krovelnye-materialy/imerys"><span><img src="/images/Logo_IMERYS.png" border="0" style="margin-left: 12px; margin-right: 12px;"></span></a></td>
</tr>
<tr>
<td>&nbsp;</td>
<td valign="top">&nbsp;</td>
</tr>
<tr>
<td><a href="/catalog/krovelnye-materialy/meyer-holsen"><span>Керамическая черепица MEYER-HOLSEN </span></a><br>Meyer Holsen - это традиции немецкого качества. В нашем каталоге представлена низкопрофильная, безпазовая, плоская и двойная черепица традиционных для континентальной Европы расцветок. Многие профессионалы кровельного дела отмечают элегантные пропорции, традиционно высокое качество черепицы Meyer Holsen, а также тот факт, что это один из немногих заводов, который может самостоятельно разработать и произвести любой интересующий покупателя цвет.
<p>&nbsp;</p>
<div style="float: left; width: 280px; display: block;">
<ul>
<li><a href="/catalog/krovelnye-materialy/meyer-holsen/vario-holfalc"> <span> Варио Хольфальц</span></a></li>
<li><a href="/catalog/krovelnye-materialy/meyer-holsen/vario-junior-tsvilling"> <span> Варио Юниор Цвиллинг</span></a></li>
<li><a href="/catalog/krovelnye-materialy/meyer-holsen/tandem"> <span> Тандем</span></a></li>
<li><a href="/catalog/krovelnye-materialy/meyer-holsen/dakapo"> <span> Дакапо</span></a></li>
</ul>
</div>
<div style="float: left; width: 280px; display: block;">
<ul>
<li><a href="/catalog/krovelnye-materialy/meyer-holsen/dvojnaja-pazovaja"> <span> Двойная пазовая</span></a></li>
<li><a href="/catalog/krovelnye-materialy/meyer-holsen/ravensberger"> <span> Равенсбергер</span></a></li>
<li><a href="/catalog/krovelnye-materialy/meyer-holsen/bobrovyj-hvost"> <span> Бобровый хвост</span></a></li>
</ul>
</div>
</td>
<td valign="top"><a href="/catalog/krovelnye-materialy/meyer-holsen"><span><img src="/images/logo_Meyer-Holsen.png" border="0" style="margin-left: 12px; margin-right: 12px;"></span></a></td>
</tr>
<tr>
<td>&nbsp;</td>
<td valign="top">&nbsp;</td>
</tr>
<tr>
<td valign="top">
<p><a href="/catalog/krovelnye-materialy/prirodny-slanec-rathscheck">Природный сланец Rathscheck (Германия)</a></p>
<ul>
<li><a href="/catalog/krovelnye-materialy/prirodny-slanec-rathscheck/vidy-ukladki">Виды укладки</a></li>
<li><a href="/catalog/krovelnye-materialy/prirodny-slanec-rathscheck/tipy-materiala">Типы материала</a></li>
<li><a href="/catalog/krovelnye-materialy/prirodny-slanec-rathscheck/razmery-i-kolichestvo">Размер и количество</a></li>
<li><a href="/catalog/krovelnye-materialy/prirodny-slanec-rathscheck/production">Производство</a></li>
</ul>
</td>
<td valign="top">&nbsp;<img src="/images/Rathscheck_Logo.jpg" border="0" alt="" style="display: block; margin-left: auto; margin-right: auto;"></td>
</tr>
<tr>
<td valign="top">
<p><a href="/catalog/krovelnye-materialy/creaton-titania">Керамическая черепица CREATON TITANIA</a> производится в шести популярных и благородных цветах, которые позволят реализовать любую архитектурную идею или замысел, гармонично соединив все элементы экстерьера дома: цоколь, фасад, окна, водосток, кровля, кирпичные вентшахты и трубы, и даже забор и тротуарную брусчатку. Все будет соединено воедино, благодаря изящному внешнему виду этой черепицы.</p>
</td>
<td valign="top"><img src="/images/creaton_logo.png" border="0" width="180" style="display: block; margin-left: auto; margin-right: auto;"></td>
</tr>
<tr>
<td valign="top">
<p><a href="/catalog/krovelnye-materialy/faltsevaia-krovlia">Фальцевая кровля</a> – это&nbsp; кровля, состоящая из листов, скрепленных между собой специальными швами. Такая кровля &nbsp;пользуется спросом уже много веков. Даже Собор Парижской Богоматери имеет фальцевую кровлю, которая верно служит с XIV века. &nbsp;И теперь этот материал &nbsp;считается самым стойким и в тоже время доступным материалом. Ее качество объясняется тем, что она состоит из сплошного листа и не имеет отверстий, что дает ей возможность обеспечивать дому полную герметичность. Даже при очень сильных осадках и ветре такая крыша не допустит протеканий. С каждым годом фальцевая кровля становится все популярнее.</p>
</td>
<td valign="top">&nbsp;</td>
</tr>
</tbody>
</table>	  </div>
	
</div>
	  	       
		<div class="clr"></div>	  
						<div class="itemContentFooter">
			<div class="clr"></div>
		</div>	
	  <div class="clr"></div>
  </div>
<div class="clr"></div>
<div class="clr"></div>
</div>
</div>
</div> 
</div>  
</div>    
</div>
 </div>        
';

elseif ($_SERVER['REQUEST_URI'] == '/catalog/fasadnye-materialy/feldhaus-klinker'):
echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft"> 
<div class="vt_component_inside">
<span id="startOfPageId66"></span>
<div id="k2Container" class="itemView">
	<div class="itemHeader">
	  <div class="itemTitle">
	  <h1 class="itemTitle">Клинкерная плитка Feldhaus Klinke в Минске


	  	
	  </h1>
	  </div>
	  
		
  </div>

  <!-- Plugins: AfterDisplayTitle -->
  
  <!-- K2 Plugins: K2AfterDisplayTitle -->
  
	        	
  <div class="itemBody">

	  <!-- Plugins: BeforeDisplayContent -->
	  
	  <!-- K2 Plugins: K2BeforeDisplayContent -->
	  
	  
	  	  <!-- Item text -->
	  <div class="itemFullText">
<p>Выбирая материал для наружной облицовки здания, отделки ступеней крыльца или оборудования цокольных отливов, рекомендуем обратить внимание на такой облицовочный материал, как клинкерная плитка Feldhaus Klinker в Минске.</p>
<p style="text-align: justify;">Форматы плитки, мм:</p>
<p style="text-align: justify;"><b>NF 240х9х71, NF 240х14х71</b><br></p>
<p><a href="/k2-items/configurator-fh"><b><span style="font-size: 18px;">Перейти в конфигуратор клинкерной плитки</span></b></a></p>
<p>

<!-- JoomlaWorks "Simple Image Gallery Pro" Plugin (v2.5.6) starts here -->

</p><ul id="sigProIdc8c1f0a84c" class="sigProContainer sigProClassic sigProClassic">
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R840.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 840
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R840.jpg" title="Click to enlarge image R840.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r840.jpg);">
															<span class="sigProPseudoCaption"><b>R 840
</b></span>
					<span class="sigProCaption" title="R 840
">R 840
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R769.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 769
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R769.jpg" title="Click to enlarge image R769.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r769.jpg);">
															<span class="sigProPseudoCaption"><b>R 769
</b></span>
					<span class="sigProCaption" title="R 769
">R 769
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R767.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 767
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R767.jpg" title="Click to enlarge image R767.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r767.jpg);">
															<span class="sigProPseudoCaption"><b>R 767
</b></span>
					<span class="sigProCaption" title="R 767
">R 767
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R766.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 766
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R766.jpg" title="Click to enlarge image R766.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r766.jpg);">
															<span class="sigProPseudoCaption"><b>R 766
</b></span>
					<span class="sigProCaption" title="R 766
">R 766
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R764.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 764
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R764.jpg" title="Click to enlarge image R764.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r764.jpg);">
															<span class="sigProPseudoCaption"><b>R 764
</b></span>
					<span class="sigProCaption" title="R 764
">R 764
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R762.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 762
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R762.jpg" title="Click to enlarge image R762.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r762.jpg);">
															<span class="sigProPseudoCaption"><b>R 762
</b></span>
					<span class="sigProCaption" title="R 762
">R 762
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R761.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 761
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R761.jpg" title="Click to enlarge image R761.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r761.jpg);">
															<span class="sigProPseudoCaption"><b>R 761
</b></span>
					<span class="sigProCaption" title="R 761
">R 761
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R758.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 758
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R758.jpg" title="Click to enlarge image R758.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r758.jpg);">
															<span class="sigProPseudoCaption"><b>R 758
</b></span>
					<span class="sigProCaption" title="R 758
">R 758
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R757.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 757
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R757.jpg" title="Click to enlarge image R757.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r757.jpg);">
															<span class="sigProPseudoCaption"><b>R 757
</b></span>
					<span class="sigProCaption" title="R 757
">R 757
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R752.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 752
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R752.jpg" title="Click to enlarge image R752.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r752.jpg);">
															<span class="sigProPseudoCaption"><b>R 752
</b></span>
					<span class="sigProCaption" title="R 752
">R 752
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R750.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 750
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R750.jpg" title="Click to enlarge image R750.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r750.jpg);">
															<span class="sigProPseudoCaption"><b>R 750
</b></span>
					<span class="sigProCaption" title="R 750
">R 750
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R749.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 749
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R749.jpg" title="Click to enlarge image R749.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r749.jpg);">
															<span class="sigProPseudoCaption"><b>R 749
</b></span>
					<span class="sigProCaption" title="R 749
">R 749
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R748.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 748
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R748.jpg" title="Click to enlarge image R748.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r748.jpg);">
															<span class="sigProPseudoCaption"><b>R 748
</b></span>
					<span class="sigProCaption" title="R 748
">R 748
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R743.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 743
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R743.jpg" title="Click to enlarge image R743.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r743.jpg);">
															<span class="sigProPseudoCaption"><b>R 743
</b></span>
					<span class="sigProCaption" title="R 743
">R 743
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R742.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 742
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R742.jpg" title="Click to enlarge image R742.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r742.jpg);">
															<span class="sigProPseudoCaption"><b>R 742
</b></span>
					<span class="sigProCaption" title="R 742
">R 742
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R732.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 732
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R732.jpg" title="Click to enlarge image R732.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r732.jpg);">
															<span class="sigProPseudoCaption"><b>R 732
</b></span>
					<span class="sigProCaption" title="R 732
">R 732
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R691.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 691
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R691.jpg" title="Click to enlarge image R691.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r691.jpg);">
															<span class="sigProPseudoCaption"><b>R 691
</b></span>
					<span class="sigProCaption" title="R 691
">R 691
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R690.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 690
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R690.jpg" title="Click to enlarge image R690.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r690.jpg);">
															<span class="sigProPseudoCaption"><b>R 690
</b></span>
					<span class="sigProCaption" title="R 690
">R 690
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R688.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 688
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R688.jpg" title="Click to enlarge image R688.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r688.jpg);">
															<span class="sigProPseudoCaption"><b>R 688
</b></span>
					<span class="sigProCaption" title="R 688
">R 688
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R687.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 687
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R687.jpg" title="Click to enlarge image R687.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r687.jpg);">
															<span class="sigProPseudoCaption"><b>R 687
</b></span>
					<span class="sigProCaption" title="R 687
">R 687
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R686.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 686
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R686.jpg" title="Click to enlarge image R686.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r686.jpg);">
															<span class="sigProPseudoCaption"><b>R 686
</b></span>
					<span class="sigProCaption" title="R 686
">R 686
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R685.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 685
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R685.jpg" title="Click to enlarge image R685.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r685.jpg);">
															<span class="sigProPseudoCaption"><b>R 685
</b></span>
					<span class="sigProCaption" title="R 685
">R 685
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R684.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 684
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R684.jpg" title="Click to enlarge image R684.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r684.jpg);">
															<span class="sigProPseudoCaption"><b>R 684
</b></span>
					<span class="sigProCaption" title="R 684
">R 684
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R682.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 682
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R682.jpg" title="Click to enlarge image R682.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r682.jpg);">
															<span class="sigProPseudoCaption"><b>R 682
</b></span>
					<span class="sigProCaption" title="R 682
">R 682
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R664.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 664
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R664.jpg" title="Click to enlarge image R664.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r664.jpg);">
															<span class="sigProPseudoCaption"><b>R 664
</b></span>
					<span class="sigProCaption" title="R 664
">R 664
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R663.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 663
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R663.jpg" title="Click to enlarge image R663.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r663.jpg);">
															<span class="sigProPseudoCaption"><b>R 663
</b></span>
					<span class="sigProCaption" title="R 663
">R 663
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R560.png" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 560
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R560.png" title="Click to enlarge image R560.png" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r560.jpg);">
															<span class="sigProPseudoCaption"><b>R 560
</b></span>
					<span class="sigProCaption" title="R 560
">R 560
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R555.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 555
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R555.jpg" title="Click to enlarge image R555.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r555.jpg);">
															<span class="sigProPseudoCaption"><b>R 555
</b></span>
					<span class="sigProCaption" title="R 555
">R 555
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R540.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 540
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R540.jpg" title="Click to enlarge image R540.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r540.jpg);">
															<span class="sigProPseudoCaption"><b>R 540
</b></span>
					<span class="sigProCaption" title="R 540
">R 540
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R500.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 500
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R500.jpg" title="Click to enlarge image R500.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r500.jpg);">
															<span class="sigProPseudoCaption"><b>R 500
</b></span>
					<span class="sigProCaption" title="R 500
">R 500
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R435.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 435
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R435.jpg" title="Click to enlarge image R435.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r435.jpg);">
															<span class="sigProPseudoCaption"><b>R 435
</b></span>
					<span class="sigProCaption" title="R 435
">R 435
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R400.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 400
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R400.jpg" title="Click to enlarge image R400.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r400.jpg);">
															<span class="sigProPseudoCaption"><b>R 400
</b></span>
					<span class="sigProCaption" title="R 400
">R 400
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R385.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 385
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R385.jpg" title="Click to enlarge image R385.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r385.jpg);">
															<span class="sigProPseudoCaption"><b>R 385
</b></span>
					<span class="sigProCaption" title="R 385
">R 385
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R335.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 335
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R335.jpg" title="Click to enlarge image R335.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r335.jpg);">
															<span class="sigProPseudoCaption"><b>R 335
</b></span>
					<span class="sigProCaption" title="R 335
">R 335
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R332.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 332
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R332.jpg" title="Click to enlarge image R332.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r332.jpg);">
															<span class="sigProPseudoCaption"><b>R 332
</b></span>
					<span class="sigProCaption" title="R 332
">R 332
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R303.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 303
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R303.jpg" title="Click to enlarge image R303.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r303.jpg);">
															<span class="sigProPseudoCaption"><b>R 303
</b></span>
					<span class="sigProCaption" title="R 303
">R 303
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R287.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 287
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R287.jpg" title="Click to enlarge image R287.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r287.jpg);">
															<span class="sigProPseudoCaption"><b>R 287
</b></span>
					<span class="sigProCaption" title="R 287
">R 287
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R286.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 286
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R286.jpg" title="Click to enlarge image R286.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r286.jpg);">
															<span class="sigProPseudoCaption"><b>R 286
</b></span>
					<span class="sigProCaption" title="R 286
">R 286
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R228.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 228
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R228.jpg" title="Click to enlarge image R228.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r228.jpg);">
															<span class="sigProPseudoCaption"><b>R 228
</b></span>
					<span class="sigProCaption" title="R 228
">R 228
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R220.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 220
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R220.jpg" title="Click to enlarge image R220.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r220.jpg);">
															<span class="sigProPseudoCaption"><b>R 220
</b></span>
					<span class="sigProCaption" title="R 220
">R 220
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProThumb">
		<span class="sigProLinkOuterWrapper">
			<span class="sigProLinkWrapper">
				<a href="/images/fasad-fh/R116.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc8c1f0a84c]" title="R 116
" target="_blank">
										<img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image R116.jpg" title="Click to enlarge image R116.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c8c1f0a84c_r116.jpg);">
															<span class="sigProPseudoCaption"><b>R 116
</b></span>
					<span class="sigProCaption" title="R 116
">R 116
</span>
									</a>
			</span>
		</span>
	</li>
		<li class="sigProClear">&nbsp;</li>
</ul>


<div class="sigProPrintMessage">

	<br>
	<a title="Клинкерная фасадная плитка" href="http://profgrad.by/catalog/fasadnye-materialy/feldhaus-klinker#sigProGalleriac8c1f0a84c">http://profgrad.by/catalog/fasadnye-materialy/feldhaus-klinker#sigProGalleriac8c1f0a84c</a>
</div>


<p>Выбирая материал для наружной облицовки здания, отделки ступеней крыльца или оборудования цокольных отливов, рекомендуем обратить внимание на такой облицовочный материал, как клинкерная плитка Feldhaus Klinker в Минске.</p>
<p>Клинкерная плитка Feldhaus Klinker обладает отличными качественными характеристиками и знаменита своим презентабельным внешним видом. Обладая солидным запасом прочности, клинкерная фасадная плитка способна выдерживать большие механические нагрузки, высокие и низкие температуры, резкие смены погодных условий. Плитка под кирпич Фельдхаус Клинкер не пропускает влагу, препятствует развитию на своей поверхности плесневых грибов, пожаробезопасна, легка в уходе и долговечна.</p>
<p>Все эти качества плитка для фасада Feldhaus Klinker приобретает в результате применения определенной технологии обработки. В качестве материала берется сланцевая глина, в которой отсутствуют примеси солей, мела и известняка. После формирования фасадная плитка проходит процедуру ступенчатого обжига, температура при котором превышает 1200&deg;С. При таком показателе все компоненты глины соединяются и образуют стекловидную массу, которая при остывании обладает очень высокой износостойкостью.</p>
<p>Фасадная плитка под кирпич Фельдхаус Клинкер не только долговечна, но и красива. Она придает зданию изысканность и выгодно выделяет его на фоне других строений. Разнообразная цветовая палитра, представленная 50 оттенками, позволяет создать уникальный дизайн, помогающий вписать здание в окружающий природный ландшафт или урбанистический пейзаж города.</p>
<p>Цена на клинкерную плитку Feldhaus Klinker в Минске, предлагаемая компанией &laquo;ПрофГрад&raquo;, доступна для людей с различным уровнем достатка. К тому же облицовка фасада данным материалом не создает большой дополнительной нагрузки на несущие конструкции, обеспечивая при этом идеальную защиту стен от неблагоприятных атмосферных явлений, механических повреждений.</p>
<p>Фасадная клинкерная плитка под кирпич применяется и для внутренних отделочных работ. Плитка Фельдхаус Клинкер позволяет создавать дизайн интерьеров в стиле лофт, контемпорари, прованс, кантри и скандинавский минимализм.</p>
<p>Фасадная плитка Feldhaus Klinker подходит для облицовки стен, каминов, оконных и дверных проемов. Благодаря своей водонепроницаемости, она используется не только на кухнях и в ванных комнатах, но также в бассейнах и саунах. С помощью данного материала легко можно сделать акцент или выделить определенную зону, визуально изменив пространство комнаты.</p>
<h2>Купить клинкерную плитку Feldhaus Klinker в Минске</h2>
<p>Клинкерная фасадная плитка Фельдхаус Клинкер выставлена на продажу в демонстрационном зале компании &laquo;ПрофГрад&raquo;. Здесь можно ознакомиться с товарами, представленными на стендах и в каталогах, выбрать подходящие образцы изделий, удостовериться в наличии сертификатов качества и соответствия, а также получить ответы на интересующие вопросы от специалистов компании.</p>
<p>Приобретенная клинкерная плитка для фасада может быть доставлена по указанному адресу. Профессиональные строители могут произвести отделочные работы, используя этот и другие материалы, предлагаемые компанией. Полный перечень услуг и товаров можно найти на сайте &laquo;ПрофГрад&raquo;.</p>

	  	       
		<div class="clr"></div>	  
						<div class="itemContentFooter">
			<div class="clr"></div>
		</div>	
	  <div class="clr"></div>
  </div>
<div class="clr"></div>
<div class="clr"></div>
</div>
</div>
</div> 
</div>  
</div>    
</div>
 </div>        
';








elseif ($_SERVER['REQUEST_URI'] == '/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile'):
echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft"> 
<div class="vt_component_inside">
<span id="startOfPageId66"></span>
<div id="k2Container" class="itemView">
	<div class="itemHeader">
	  <div class="itemTitle">
	 <h1 class="itemTitle">Композитная черепица Metrotile</h1>
	 </div>
	 
		
 </div>

 <!-- Plugins: AfterDisplayTitle -->
 
 <!-- K2 Plugins: K2AfterDisplayTitle -->
 
	 	
 <div class="itemBody">

	 <!-- Plugins: BeforeDisplayContent -->
	 
	 <!-- K2 Plugins: K2BeforeDisplayContent -->
	 
	 
	 	 <!-- Item text -->
	 <div class="itemFullText">
	 	<div>
<p>Компания <b>Metrotlie</b> – бельгийский производитель композитной черепицы, имя которого известно на весь мир. Metrotile начал свою работу в 80-х годах, и за четверть века стал крупнейшим производителем и поставщиком на мировом рынке. Каждый человек, который собирается строить дом уже знает, что представляет собой <b>композитная черепица метробонд</b>. Такого быстрого роста и успеха компания добилась за счет уникальной запатентованной технологии. Продукция компании имеет международный сертификат качества ISO 9001 и поставляется в 80 стран мира. Metrotile – фамильная компания, которая бережет свои ценности и в тоже время ориентирована на будущее. Metrotile заботится о своем авторитете и постоянно стремится к развитию, внедряя новейшие технологии. Синергизм инноваций и большого опыта является залогом обладания самых высоких рейтингов среди покупателей. Композитную черепицу в Минске можно найти сегодня в большом ассортименте:</p>
<div>
<table border="0" cellspacing="3" cellpadding="3">
<tbody>
<tr>
<td valign="top">
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrobond"><b>MetroBond</b></a></p>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrobond"><img src="/images/metrobond.png" border="0" height="120" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
</td>
<td valign="top">
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroroman"><b>MetroRoman</b></a></p>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroroman"><img src="/images/metroroman.png" border="0" height="120" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
</td>
<td valign="top">
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroshake-ii"><b>MetroShake II</b></a></p>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroshake-ii"><img src="/images/metroshake2.png" border="0" height="120" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
</td>
<td valign="top">
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrowoodenshake"><b>MetroWoodenShake</b></a></p>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrowoodenshake"><img src="/images/metrowoodenshake.png" border="0" height="120" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
</td>
<td valign="top">
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroroman-ii"><b>MetroRoman II</b></a></p>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroroman-ii"><img src="/images/metroroman2.png" border="0" height="120" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
</td>
</tr>
<tr>
<td valign="top">
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrotile-gallo"><b>Metrotile Gallo</b></a></p>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrotile-gallo"><img src="/images/metrogallo.png" border="0" height="120" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
</td>
<td valign="top">
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrotile-mistral"><b>MetroBondMistral</b></a></p>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrotile-mistral"><img src="/images/metromistral.png" border="0" height="120" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
</td>
<td valign="top">
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrosherwood"><b>MetroSherwood</b></a></p>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrosherwood"><img src="/images/metrosherwood.png" border="0" height="120" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
</td>
<td valign="top">
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroclassic"><b>MetroClassic</b></a></p>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroclassic"><img src="/images/metroclassic.png" border="0" height="120" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
</td>
<td valign="top">
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroshingle"><b>MetroShingle</b></a></p>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroshingle"><img src="/images/metroshingle.png" border="0" height="120" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
</td>
</tr>
</tbody>
</table>
</div>
<div>
<h2>Особенности композитной черепицы Metrotile</h2>
<p>В своей коллекции бренд Metrotile имеет несколько видов кровли:</p>
<p><b>Metrobond - </b>наиболее популярная модель кровли, очень похожая на натуральную черепицу<b>.</b></p>
<p><b>MetroClassic</b> - наиболее универсальная коллекция, подходящая для всех типов сооружений и отлично вписывающаяся в любой проект дома.</p>
<p><b>MetroWoodenShake</b> - одна из наиболее ярких коллекций. За счет четко выраженных борозд, визуально похожих на деревянные дранки, становится отличным акцентом эксклюзивного дизайна.</p>
<p><b>MetroShake</b> - черепица, обладающая четкой фактурой и геометрическими формами, имеет ярко выраженный «полосатый» узор.</p>
<p><b>MetroShingle</b> также создает вид прекрасных древесных материалов.</p>
<p><b>Metroroman</b> - наиболее консервативная коллекция, округлая форма черепицы, отражающая романский стиль в архитектуре.</p>
<h3>Технологичность и эстетичность</h3>
<p><img src="/images/metrotile.jpg" border="0" style="border: 0; float: right; margin-left: 20px; margin-right: 20px;">Для любого хозяина дома и архитектора <b>композитная черепица метробонд</b> - это универсальный материал, применимый в любом проекте, как небольшого частного строения, так и крупного коммерческого или общественного. Разные коллекции этого материала можно применить в любом архитектурном решении - как традиционном, так и ультрасовременном. Черепица имеет множество красивых натуральных оттенков, делая дом элегантным и эффектным. Специальная акриловая глазурь позволяет крыше сохранять цвет на десятилетия благодаря тому, что это покрытие не позволяет проникать ультра-фиолетовым лучам и мелким частицам пыли на сам материал.</p>
<p><b>Композитная черепица Метробонд</b> состоит из нескольких слоев: внутри расположен стальной лист, который с обеих сторон покрыт специальным запатентованным покрытием Magnelis. Такая технология не только защищает материал от химических процессов окружающей среды, но и сохраняет его гибкость, что дает возможность применять его в самых разных и сложных проектах. При этом качество черепицы остается на том же уровне.</p>
<h2>Безопасность и экологичность композитной металлочерепицы Metrotile</h2>
<p>Благодаря постоянной работе над качеством, сегодня композитная черепица метробонд на 100% устойчива к землетрясениям, пожарам, высоким и низким температурам, сильным штормовым ветрам высокого уровня опасности. Также особенностью этой кровли является высокий уровень звукоизоляции. Снег с такой крыши сходит тихо и безопасно, не слышен шум осадков во время дождя, снега и града. Компания Metrotile дает 100% гарантию на молниезащиту.</p>
<h3>Структура черепицы Metrotile</h3>
<p>1. Специальная глазурь.</p>
<p>2.Гранулят из натурального камня</p>
<p>3. Акриловый слой (содержит 65% акрилата). Уникальный секретный рецепт специалистов завода Metrotile.</p>
<p>4. Акриловая грунтовка c каждой стороны, которая защищает от коррозии.</p>
<p>5. Антикоррозийный слой Magnelis</p>
<p>6. Стальной лист.</p>
<p><b>Metrobond</b> адаптируется под минимальный угол кровли. Кровля <b>metrobond</b> в семь раз легче по сравнению с керамической черепицей и очень проста в установке. Также легкий вес играет большую роль для несущих конструкций, не создавая высокого давления на них. И, в конце концов, транспортировка такого материала является наименее затратной.</p>
<p>Благодаря уникальным современным технологиям окрашивания материал сохраняет свой исходный цвет на многие десятилетия. Разработанное компанией специальное высокотехнологичное покрытие Magnelis защищает кровлю от появления ржавчины. Каждый элемент производится из высококачественной стали, имеет непревзойденную прочность и высокий уровень производительности по сравнению с традиционными материалами.</p>
<p>Metrotile дает гарантию на свою кровлю от 50 лет!</p>


<div> 
<table border="0" cellspacing="3" cellpadding="3">
<tbody>
<tr>
<td valign="top">
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrobond"><b>MetroBond</b></a></p>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrobond"><img src="/images/metrobond.png" border="0" height="120" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
</td>
<td valign="top">
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroroman"><b>MetroRoman</b></a></p>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroroman"><img src="/images/metroroman.png" border="0" height="120" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
</td>
<td valign="top">
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroshake-ii"><b>MetroShake II</b></a></p>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroshake-ii"><img src="/images/metroshake2.png" border="0" height="120" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
</td>
<td valign="top">
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrowoodenshake"><b>MetroWoodenShake</b></a></p>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrowoodenshake"><img src="/images/metrowoodenshake.png" border="0" height="120" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
</td>
<td valign="top">
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroroman-ii"><b>MetroRoman II</b></a></p>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroroman-ii"><img src="/images/metroroman2.png" border="0" height="120" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
</td>
</tr>
<tr>
<td valign="top">
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrotile-gallo"><b>Metrotile Gallo</b></a></p>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrotile-gallo"><img src="/images/metrogallo.png" border="0" height="120" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
</td>
<td valign="top">
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrotile-mistral"><b>MetroBondMistral</b></a></p>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrotile-mistral"><img src="/images/metromistral.png" border="0" height="120" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
</td>
<td valign="top">
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrosherwood"><b>MetroSherwood</b></a></p>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrosherwood"><img src="/images/metrosherwood.png" border="0" height="120" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
</td>
<td valign="top">
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroclassic"><b>MetroClassic</b></a></p>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroclassic"><img src="/images/metroclassic.png" border="0" height="120" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
</td>
<td valign="top">
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroshingle"><b>MetroShingle</b></a></p>
<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metroshingle"><img src="/images/metroshingle.png" border="0" height="120" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>	 </div>
	 	 
		<div class="clr"></div>


		
	 <!-- Plugins: AfterDisplayContent -->
	 
	 <!-- K2 Plugins: K2AfterDisplayContent -->
	 
	 <div class="clr"></div>
 </div>

	
 
 
 
	
 
	<div class="clr"></div>

 
 
 
 <!-- Plugins: AfterDisplay -->
 
 <!-- K2 Plugins: K2AfterDisplay -->
 
 
 
	
	
	<div class="clr"></div>
</div>

';


elseif ($_SERVER['REQUEST_URI'] == '/catalog/krovelnye-materialy/krovlia-iko'):
echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft"> 
<div class="vt_component_inside">
<span id="startOfPageId66"></span>
<div id="k2Container" class="itemView">
	<div class="itemHeader">
	  <div class="itemTitle">
	   <h1 class="itemTitle">Битумная мягкая черепица IKO</h1>
	  </div>
	  
		
  </div>

  <!-- Plugins: AfterDisplayTitle -->
  
  <!-- K2 Plugins: K2AfterDisplayTitle -->
  
	        	
  <div class="itemBody">

	  <!-- Plugins: BeforeDisplayContent -->
	  
	  <!-- K2 Plugins: K2BeforeDisplayContent -->
	  
	  
	  	  <!-- Item text -->
	  <div class="itemFullText">
	  	<table rules="none">
<tbody>
<tr>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/krovlia-iko/hex">Хекс</a></p>
</td>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/krovlia-iko/3tab">Тритаб</a></p>
</td>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/krovlia-iko/biber">Бобровый хвост</a></p>
</td>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/krovlia-iko/skyline">Скайлайн</a></p>
</td>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/krovlia-iko/armoshild">Армошилд</a></p>
</td>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/krovlia-iko/xpress">Кембридж</a></p>
</td>
</tr>
<tr>
<td><a href="/catalog/krovelnye-materialy/krovlia-iko/hex" title="Мягкая кровля IKO - Номер один Хекс"><img src="/images/iko/hex_korichnevij_07.jpg" border="0" style="width: 140px; height: 140px; vertical-align: baseline;"></a></td>
<td><a href="/catalog/krovelnye-materialy/krovlia-iko/3tab" title="Битумная черепица IKO - Номер один Тритаб"><img src="/images/iko/Tritab_krasnij_10.jpg" border="0" style="width: 140px; height: 140px; vertical-align: baseline;"></a></td>
<td><a href="/catalog/krovelnye-materialy/krovlia-iko/biber" title="Мягкая кровля IKO - Номер один Бобровый хвост"><img src="/images/iko/Bobrovij%20hvos_zelenij_04.jpg" border="0" style="width: 140px; height: 140px; vertical-align: baseline;"></a></td>
<td><a href="/catalog/krovelnye-materialy/krovlia-iko/skyline" title="Битумная черепица IKO - Скайлайн"><img src="/images/iko/Skyline_dual_brown_27_2.jpg" border="0" style="width: 140px; height: 140px; vertical-align: baseline;"></a></td>
<td><a href="/catalog/krovelnye-materialy/krovlia-iko/armoshild" title="Мягкая кровля IKO - Армошилд"><img src="/images/iko/Armoshield_Shapel_26.jpg" border="0" style="width: 140px; height: 140px; vertical-align: baseline;"></a></td>
<td><a href="/catalog/krovelnye-materialy/krovlia-iko/xpress" title="Мягкая кровля IKO - Кембридж"><img src="/images/iko/Cambridge_Kedr_49.jpg" border="0" style="width: 140px; height: 140px; vertical-align: baseline;"></a></td>
</tr>
</tbody>
</table>
<p>Для фамильного дела самая важная ценность – это авторитет. Компания IKO в этом плане не исключение. IKO имеет долгую историю развития, которой хозяева очень гордятся, и восхищается весь мир.</p>
<p>В 1922 году Исидор Кошицкий в возрасте 17 лет начал свою долгую карьеру в кровельной отрасли, когда пришел на работу продавцом на производство кровельных материалов в бизнес своего отца. Компания успешно процветала в Канаде, что привело к дальнейшему расширению и выходу на европейский рынок в 1972 году. А уже в 1979 году открылись новые заводы в Северной Америке. Сегодня, более чем 60 лет после своего основания, компания выросла в число крупнейших мировых экспортеров битумной черепицы. Теперь компания IKO - предприятие, со штатом более чем 3000 сотрудников и множеством производственных предприятий в Канаде, США, Англии, Бельгии, Голландии, Франции и Словакии.</p>
<h2>Почему стоит купить мягкую кровлю IKO</h2>
<p><b><em>IKO – заботливая кровля</em></b></p>
<p>Базальтовый гранулят удерживает на крыше снег, тем самым обеспечивая возможность избежать резкого схода снега весной. Более того, с черепицей IKO Вам не придется покупать дополнительные снегозадержатели. Битум производства IKO уникален тем, что он обладает очень высокой плотностью и низким риском возгорания. Купить мягкую кровлю – значит защитить свой дом и свою семью.</p>
<p><img src="/images/cherepitsa-iko.jpg" border="0" alt="гибкая черепица Ико, технология монтажа" /></p>
<p><b><em>Гибкая черепица IKO – в дружбе с окружающей средой</em></b></p>
<p>Уникальная мягкая кровля iko производится из окисленного битума. Окисление - это дорогостоящий процесс насыщения материала кислородом, другими словами - быстрое состаривание. Такая крыша не имеет вредного и неприятного химического запаха, хорошо переносит перепад температур, не меняется со временем, не трескается, не пузырится, не становится жесткой. Спустя многие годы, только IKO будет выглядеть как новая. Завод IKO большую часть своего капитала вкладывает в новые технологии, и весь цикл производства кровли происходит на заводе, применяя только собственное натуральное сырье.</p>
<p><b><em>Гибкая черепица IKO – бренд, которому можно доверить свой дом</em></b></p>
<p>При монтаже мягкой кровли за основу берется стеклохолст. Плотность стеклохолста IKO выше, 130 гр./м.кв., а диаметр в 3 раза больше чем, у других производителей! Таким образом, завод способен минимизировать брак и делает <a href="/services/krovelnye-raboty">монтаж кровли</a> идеальной и долговечной. Вы можете не бояться появления заломов и протеканий.</p>
<p>За счет наиболее высокой концентрации битума в черепице IKO эта кровля имеет самые высокие показатели ветроустойчивости.</p>
<p>Гранулы IKO имеют более круглую форму по сравнению с конкурентами. Это дает возможность им более глубоко внедряться в гонт битумной черепицы, тем самым повышая прочность на 30-40% по сравнению с кровельными материалами, где более плоские гранулы.</p>
<p>В коллекции гибкой черепицы Кембридж IKO имеется высокий уровень гидроизоляции за счет 4-х слоев. <b><span style="color: #2fc7a9;">IKO – единственная компания, которая может предоставить платиновую гарантию на свою черепицу от 25 лет!</span></b></p>
<p><b><em>Гибкая черепица IKO – естественная красота вашего дома</em></b></p>
<p>Коллекции IKO отличаются благородными природными оттенками. При окрашивании гранул IKO использует метод, при котором частицы прокрашиваются очень глубоко, что сохраняет нужный оттенок на все время использования. Далее материалы покрываются специальным раствором, отражающим ультра-фиолетовые лучи, благодаря чему кровля не выгорит и будет выглядеть как новая очень долгое время. Все это позволяет забыть о проблемах с кровлей, а лишь получать эстетическое удовольствие и комфортно проживать под крышей своего дома, несмотря на то, что <b>гибкая черепица цена</b> на которую не из дешёвых.</p>
<p><b><em>Гибкая черепица IKO – возможность творчества</em></b></p>
<p>Мягкая кровля iko применима в любом, даже самом нестандартном проекте. Гибкую черепицу применяют при самых маленьких радиусах и крутых изгибах. И все это никаким образом не повлияет на качество и сложность монтажа.</p>

<p>В Минске есть множество предложений битумной кровли, однако аналогов бренду IKO нет нигде. Для того, чтобы посмотреть образцы, оценить материал в живую и получить консультацию, можно приехать в прекрасный просторный шоурум компании «Профград».</p>

<h2>Коллекции гибкой черепицы Iko</h2>

<p>Вы можете познакомиться с коллекциями:</p>


<table rules="none">
<tbody>
<tr>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/krovlia-iko/hex">Хекс</a></p>
</td>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/krovlia-iko/3tab">Тритаб</a></p>
</td>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/krovlia-iko/biber">Бобровый хвост</a></p>
</td>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/krovlia-iko/skyline">Скайлайн</a></p>
</td>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/krovlia-iko/armoshild">Армошилд</a></p>
</td>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/krovlia-iko/xpress">Кембридж</a></p>
</td>
</tr>
<tr>
<td><a href="/catalog/krovelnye-materialy/krovlia-iko/hex"><img src="/images/iko/hex_korichnevij_07.jpg" border="0" style="width: 140px; height: 140px; vertical-align: baseline;" alt="Мягкая кровля IKO - Номер один Хекс"></a></td>
<td><a href="/catalog/krovelnye-materialy/krovlia-iko/3tab"><img src="/images/iko/Tritab_krasnij_10.jpg" alt="Битумная черепица IKO - Номер один Тритаб" border="0" style="width: 140px; height: 140px; vertical-align: baseline;"></a></td>
<td><a href="/catalog/krovelnye-materialy/krovlia-iko/biber"><img src="/images/iko/Bobrovij%20hvos_zelenij_04.jpg" border="0" style="width: 140px; height: 140px; vertical-align: baseline;" alt="Мягкая кровля IKO - Номер один Бобровый хвост"></a></td>
<td><a href="/catalog/krovelnye-materialy/krovlia-iko/skyline"><img src="/images/iko/Skyline_dual_brown_27_2.jpg" border="0" style="width: 140px; height: 140px; vertical-align: baseline;" alt="Битумная черепица IKO - Скайлайн"></a></td>
<td><a href="/catalog/krovelnye-materialy/krovlia-iko/armoshild"><img src="/images/iko/Armoshield_Shapel_26.jpg" border="0" style="width: 140px; height: 140px; vertical-align: baseline;" alt="Мягкая кровля IKO - Армошилд"></a></td>
<td><a href="/catalog/krovelnye-materialy/krovlia-iko/xpress"><img src="/images/iko/Cambridge_Kedr_49.jpg" border="0" style="width: 140px; height: 140px; vertical-align: baseline;" alt="Мягкая кровля IKO - Кембридж"></a></td>
</tr>
</tbody>
</table>
<div style="padding-top: 10px; text-align: center;">Процесс производства битумной черепицы IKO, видео<br><iframe width="560" height="315" src="https://www.youtube.com/embed/aDYH3xxOibY" frameborder="0" allowfullscreen=""></iframe></div>	  </div>
	  	       
		<div class="clr"></div>

	  
		
	  <!-- Plugins: AfterDisplayContent -->
	  
	  <!-- K2 Plugins: K2AfterDisplayContent -->
	  
	  <div class="clr"></div>
  </div>

	
  
  
  
	
  
	<div class="clr"></div>

  
  
  
  <!-- Plugins: AfterDisplay -->
  
  <!-- K2 Plugins: K2AfterDisplay -->
  
  
 
	
	
	<div class="clr"></div>
</div>


';

elseif ($_SERVER['REQUEST_URI'] == '/catalog/mansardnye-okna-velux'):
echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft"> 
<div class="vt_component_inside">
<span id="startOfPageId66"></span>
<div id="k2Container" class="itemView">
	<div class="itemHeader">
	  <div class="itemTitle">
	  <h1 class="itemTitle">Мансардные окна Velux (Велюкс)</h1>
	  </div>	  		
  </div>       	
  <div class="itemBody">
	  <div class="itemFullText">
	  <p><a href="/akcii"><img src="/images/velux-akcia.jpg" border="0" alt="скидка на окна Велюкс, распродажа склада"></a></p>
  	<p><img src="/images/okna-velux.jpg" border="0" width="350" style="float: left; margin-left: 15px; margin-right: 15px;" alt="окна Велюкс после установки, большое мансардное окно на чердаке"></p>
<p>Корни производства окон Velux уходят в Данию  1941 года. Сейчас купить мансардные окна Velux можно в любой стране мира. Окна Velux сделаны так, что могут выдерживать то же внешнее давление, что и сама кровля. Ее система установки и сама технология делает его намного прочнее обычного окна.</p>

<h2>Из каких материалов производят окна Velux?</h2>
<p>Профиль окон Velux изготавливают из сосновой древесины северных пород. Это дерево считается одним из самых крепких и теплоизолирующих. Также производит модели,  рамы которых покрыты полиуретаном. Полиуретан герметичен и со временем не портится.</p>
<p>Мансардные окна, конечно, увеличивают теплопотерю, однако этот недостаток компенсируется тем, что сквозь окно проходит много солнечного света, что согревает комнату и делает ее вентилируемой, жилой и уютной.  Если Вы хотите утеплить мансарду или чердак, то Velux станет идеальным выбором.</p>
<h2>Установка окон Велюкс</h2>
<p>Для того, чтобы мансардные окна не запотевали, создается специальная вентиляция благодаря откосам. Нижний откос выполняется вертикально, а верхний –горизонтально. Так создается конденсация, при которой воздух проходит через все окно. Окна Velux имеют однокамерные и двухкамерные стеклопакеты. Оба вида заполняются инертным газом, который создает теплоизоляцию. В нашей стране лучше использовать однокамерные, так как они лучше пропускают тепло снаружи в летнее время года. Двухкамерные стеклопакеты разработаны для северных стран.</p>
<p>Если Вас интересует вопрос, на сколько часто можно располагать окна на крыше, то здесь существует общее правило - 1 кв. м.стекла  на 10 кв. м. площади крыши. Чаще всего окна в мансарде размещаются на высоте 1 метр, но если окно установлено выше, то используют телескопический стержень для открывания. Также есть технологии, которые позволяют дистанционно управлять окном.</p>
<p>На мансардные окна устанавливают жалюзи и москитные сетки. Еще один важный аксессуар – маркизет. Маркизет - солнцезащитный механизм на окне. Благодаря ему через мансардное окно в жаркую погоду проходит свет, но помещение не перегревается.</p>
<h2>Уход за мансардными окнами</h2>
<p>Зимой на мансардных окнах может скапливаться снег, который нужно обязательно чистить. Лучше устанавливать окна подальше от ендов, так как в этих местах скапливается больше снега. Что касается других осадков и загрязнений, то в этом случае  компанией Velux разработано специальное покрытие на стекле, которое позволяет легко счищать загрязнения. Это происходит за счет расщепления грязи под действием солнечных лучей, и дождь смывает всю грязь бесследно, избавляя Вас от самостоятельной чистки. Но если возникла необходимость помыть окно самостоятельно, оно легко переворачивается наружной стороной внутрь помещения.</p>


<h2>Основные виды мансардных окон Velux:</h2>
<p style="text-align: justify;"><img src="/images/GZL.jpg" border="0" width="200" style="margin-right: 10px; margin-bottom: 10px; float: left;" alt="мансардное окно Velux GZL Базовое, особенности конструкции"><a href="/catalog/mansardnye-okna-velux/okno-gzl">Velux GZL "Базовое"</a>. Наиболее популярный вид окна. Рама сделана из сосновой древесины, покрытой 2 слоями водоотталкивающей эмали. Устройство вентиляции обеспечивает прохождение воздуха 24 куб.м./час.</p>
<p style="text-align: justify;">Ручка в нижней части мансардного окна предлагает удобство открывания даже на большой высоте, т.к. рука человека свободно дотягивается до ручки и имеет возможность открыть окно.</p>
<p></p>
<p></p>
<p style="text-align: justify;"> <img src="/images/GGL.jpg" border="0" width="200" style="width: 265px; height: 233px; margin-right: 10px; margin-bottom: 15px; float: left;"><a href="/catalog/mansardnye-okna-velux/ggl-klassika">Velux GGL "Классика"</a>. Классическое мансардное окно с открыванием по центральной оси. В нем установлен усиленный энергосберегающий стеклопакет. Оно имеет специальную форточку и воздушный фильтр, который обеспечивает поток воздуха до 39 куб.м./час. Рамы также обработаны несколькими слоями антисептика и водоотталкивающего лака. Изнутри стекло покрыто ламинацией «триплекс», снаружи – покрытием для легкой самоочистки стекла. Также возможно дистанционное управление.</p>
<p></p>

<p></p>
<p></p>
<p></p>
<p style="text-align: justify;"><img src="/templates/vt_marketing/GGU.jpg" border="0" width="200" style="width: 264px; height: 241px; margin-right: 10px; margin-bottom: 10px; float: left;"><a href="/catalog/mansardnye-okna-velux/okno-ggu-vlagostoikoe">Velux GGU с полиуретановым покрытием</a>. Рама такого окна оснащена сплошным полиуретановым покрытием. Обладает свойством повышенной устойчивости к влаге.Открывается по центру. Такое окно имеет отличную вентиляцию, которая обеспечивает поток воздуха до 39 куб. м./час, и фильтр, задерживающий снаружи пыль и насекомых. Здесь также возможно дистанционное управление.</p>
<p style="text-align: justify;">Сочетает в себе все характеристики деревянного окна "Классика" (GGL), а в дополнение имеет влагостойкое полиуретановое покрытие. Подходит для любых кровель с углом наклона 15-90°. Влагостойкое покрытие легко моется и не требует дополнительного ухода.</p>
<p></p>
<p style="text-align: justify;"><img src="/templates/vt_marketing/GPL.jpg" border="0" width="200" style="width: 264px; height: 241px; margin-right: 10px; margin-bottom: 10px; float: left;"><a href="/catalog/mansardnye-okna-velux/okno-gpl-panorama">Velux GPL "Панорама" с комбинированным открыванием</a>. Отличие этого окна – двойной способ открытия: снизу вверх ипо центральной оси. Такое окно применяется на крыше с маленьким углом ската около 20 градусов. Это окно может использоваться и в качестве фасадного или аварийного. Раму можно легко развернуть на 180 градусов, чтобы наружная часть оказалось внутри. Это окно также с внутренней стороны оснащено покрытием «триплекс», а с наружной - «easyclean».</p>

<p style="text-align: justify;">В комбинации с карнизным окном или нижним элементом создает эффект полубалкона. Подходит для любых кровель с углом наклона 15-55° (до 75º со специальными пружинами). Изготавливается из клееной древесины сосны с тремя слоями лакового покрытия. </p>
<p></p>
<p style="text-align: justify;"><img src="/templates/vt_marketing/GPU.jpg" border="0" width="200" style="width: 264px; height: 239px; margin-right: 10px; margin-bottom: 10px; float: left;"><a href="/catalog/mansardnye-okna-velux/okno-gpu-panorama-vlagostoikoe">Velux GPU "Панорама" влагостойкое с комбинированным открыванием</a>. Это окно также отличается двойным способом открывания. Такая модель имеет белый цвет за счет красивого прочного полиуретанового покрытия. Подходит для светлых интерьеров.Используется на кровлях с невысоким скатом до 55 градусов. Это окно может использоваться и в качестве фасадного окна или аварийного выхода. Раму такого окна можно легко развернуть на 180 градусов, чтобы наружная часть оказалось внутри. Это окно также с внутренней стороны оснащено покрытием «триплекс», а с наружной - «easyclean».</p>
<p></p>
<p></p>
<p></p>
<p></p>
<p><img src="/images/Integra_interior_vert280x210.jpg" border="0" style="float: left; margin-left: 15px; margin-right: 15px;"><a href="/catalog/mansardnye-okna-velux/integra">Velux INTEGRA "Умное" окно со встроенным электрооборудованием</a>. Комфорт - нажатием одной кнопки. Максимум комфорта. Контролируйте климат и освещение в комнате с помощью пульта дистанционного управления. Использованы современные технологии, основанные на стандарте беспроводной связи io-homecontrol. <br>Уникальный код исключает доступ с «чужого» пульта и пересечение с «чужими» продуктами.</p>
<p>Подходит для любых кровель с углом наклона 15-90°.</p>
<p> </p>
<p><img src="/images/103052-01-exterior_280x210.jpg" border="0" style="float: left; margin-left: 20px; margin-right: 20px;"><a href="/catalog/mansardnye-okna-velux/zenitnoe-okno">Решение Velux для плоских кровель: зенитное окно</a></p>
<p>Дополнительное освещение помещений, расположенных непосредственно под плоской или малоуклонной кровлей. <br>Для кровель с уклоном от 0 до 15º.</p>
<p> </p>
<p> </p>

<p> </p>
<p> </p>
<p><a href="/catalog/mansardnye-okna-velux/svetovoy-tonel"><img src="/images/1503-01-STI_w280.jpg" border="0" style="float: left; margin-left: 15px; margin-right: 15px;">Дневной свет для помещений без окон</a></p>
<p>Теперь дневной свет доступен даже для помещений, где установка фасадных или мансардных окон невозможна. Например, в ванной, коридоре, офисных комнатах. Световой туннель Velux позволит вам сделать эти комнаты светлыми и комфортными.<br><br>Световой туннель устанавливается в крышу так же, как мансардное окно Velux. В потолок встраивается плафон диаметром 35 см. Эти два элемента соединяются друг с другом с помощью гофрированной (модели TWF/TLF) или фиксированной (жесткой)трубы (модели TWR/TLR) со светоотражающим покрытием. <br><br>Модели TWF/TWR предназначены для установки в профилированный кровельный материал. Модели TLF/TLR– в плоский кровельный материал.</p>
<p> </p>
<p> </p>
<p><img src="/images/100426-01-CMP-XXL_w280.jpg" border="0" style="float: left; margin-left: 15px; margin-right: 15px;"><a href="/catalog/mansardnye-okna-velux/okno-gdl">GDL CABRIO® балкон в мансарде без надстроек</a></p>
<p>Окно Velux GDL Cabrio монтируется в кровлю, как любое другое мансардное окно. При открывании превращается в настоящий балкон в мансарде. <br><br>Подходит для любых кровель с углом наклона от 35 до 53°.</p>
<p>Может устанавливаться в комбинациях, позволяя создавать самые впечатляющие интерьерные и экстерьерные решения. На картинке окно-балкон (слева) в сочетании с панорамным окном GPL и нижним элементом GIL.</p>
<p><img src="/images/1227-01-LOE_exterior_280x210.jpg" border="0" style="float: left; margin-left: 15px; margin-right: 15px;"><a href="/catalog/mansardnye-okna-velux/terasa">Комплекс наклонных и вертикальных оконных элементов, образующих довольно широкую террасу</a>.<br> <br>Минимально может состоять из одного наклонного и одного вертикального открывающегося элемента.<br><br>Подходит для любых кровель с углом наклона от 35 до 53º.</p>
<p> </p>
<p></p>
<p style="text-align: justify;"><img src="/templates/vt_marketing/GVT.jpg" border="0" width="265" height="198" style="margin-right: 10px; margin-bottom: 10px; float: left;">Окно-люк GVT. Это небольшое окно подходит для выхода через него на крышу. Имеет специальную дверь, открывающуюся наружу на 90 градусов. Покрыто полиуретаном черного цвета. Подходит для неотапливаемых чердачных помещений.</p>
<p style="text-align: justify;">Рама изготовлена из черного полиуретана, створка из анодированного алюминия. Встроенный универсальный оклад.</p>
<p style="text-align: justify;">Формат, мм: 54х83 </p>
<p></p>
<p style="text-align: justify;"><img src="/templates/vt_marketing/GXL.jpg" border="0" width="263" height="195" style="margin-right: 10px; margin-bottom: 10px; float: left;">Эксплуатационный выход GXL. Это окно имеет свойство выхода на крышу. В ней смонтирована специальная дверь, открывающаяся наружу под углом до 73 градусов. Это окно предназначено для отапливаемой мансарды. Подходит для крыш с углом ската до 55 градусов.</p>
<p style="text-align: justify;">Газовый амортизатор в верхней части оконной створки облегчает ее открывание.</p>
<p>Формат, мм: F06 66х118</p>
<p> </p>
<p style="text-align: justify;"><img src="/templates/vt_marketing/GTL.jpg" border="0" width="261" height="261" style="margin-right: 10px; margin-bottom: 10px; float: left;">Аварийный выход GTL. Мансардное окно Velux со всеми характеристиками и функциями окна GPL и одновременно аварийный выход на крышу. </p>
<p style="text-align: justify;">Увеличенный угол окрывания - до 73°. При нажатии ручки для аварийного выхода окно автоматически открывается газовыми амортизаторами. </p>
<p style="text-align: justify;">Подходит для любых кровель с углом наклона от 15 до 55°, где необходим технологический или аварийный выход на крышу.</p>
<p>Форматы, мм.: М08 76х140, S08 114x140</p>
<p> </p>
<p>У нас разработана отличная система скидок для покупателей кровельных материалов, поэтому мы можем предложить выгодные цены на мансардные окна Velux. А все аксессуары Вы также можете приобрести вместе с окном. </p>
<p>В купить мансардные окна Велюкс в Минске можно в компании «Профгад». На ул. Мележа,5 в красивом новом шоуруме Вы можете получить консультацию, узнать какие модели подходят Вашему дому и посмотреть образцы.</p>	  	
</div>
	  	       
		<div class="clr"></div>	  
						<div class="itemContentFooter">
			<div class="clr"></div>
		</div>	
	  <div class="clr"></div>
  </div>
<div class="clr"></div>
<div class="clr"></div>
</div>
</div>
</div> 
</div>  
</div>    
</div>
 </div>        
';
elseif ($_SERVER['REQUEST_URI'] == '/services/krovelnye-raboty/montaj-metallocherepicy'):
echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft"> 
<div class="vt_component_inside">
<span id="startOfPageId66"></span>
<div id="k2Container" class="itemView">
	<div class="itemHeader">
	  <div class="itemTitle">
	  <h1 class="itemTitle">Монтаж металлочерепицы</h1>
	  </div>	  		
  </div>       	
  <div class="itemBody">
	  <div class="itemFullText">
<h3>Технология монтажа кровли из металлочерепицы</h3>

<h3>Монтаж обрешётки</h3>
<p>Саму обрешетку можно выполнить из деревянных обрезных досок, если они хорошо просушены, не имеют поверхностных дефектов и прошли необходимую антисептическую обработку. Учитывая массивность листа металлочерепицы, толщина досок должна быть не менее 20-25 мм, при ширине доски около 100 мм. Принимаемый шаг досок будет зависеть от профиля металлочерепицы и обычно совпадает с поперечным шагом кровельного материала. Доски обрешетки, которые выходят на карниз дома, должны быть короче остальных на 50 мм.</p>
<p style="text-align: center;"><img height="330" src="/images/montag-cherepitcy/image002.jpg" width="624" /></p>
<p>Верхняя часть кровли должна быть более прочной, поэтому шаг досок в районе конька стоит уменьшить. Готовую обрешетку прикрепляют к контробрешетке, используя саморезы или гвозди.</p>
<h3>Монтаж планки карниза</h3>
<p>Карнизная планка устанавливается таким образом, чтобы последний лист металлочерепицы находился над ней. Нахлёст планок между собою, выполнятся не менее, чем 100 мм. После закрепления карнизных планок можно приступать к монтажу самой металлочерепицы.</p>
<p style="text-align: center;"><img height="405" src="/images/montag-cherepitcy/image003.jpg" width="486" /></p>
<h3>Выполняем раскладку и крепление листов металлочерепицы</h3>
<p>Металлочерепичная кровля должна быть не только прочной, но еще и эстетично выглядеть. Для этого необходимо выполнить предварительную раскладку листов, начиная от одного из скатов.</p>
<p style="text-align: center;">&nbsp;<img height="312" src="/images/montag-cherepitcy/image005.png" width="666" /></p>
<p>Последовательность раскладки определяется формой кровли. Например, для шатровой крыши раскладку ведут от середины ската, постепенно продвигаясь влево и вправо. В процессе укладки кровли, становиться необходимой подрезка листов металлочерепицы, для чего листы металлочерепицы разрезаются по факту необходимости при помощи перечисленного ниже инструмента.</p>
<p>Внимание! Применять &laquo;болгарку&raquo; для этих целей недопустимо, поскольку при большой скорости вращения пильного диска на поверхности защитного покрытия листа могут образовываться трещины.</p>
<p style="text-align: center;"><img height="353" src="/images/montag-cherepitcy/image007.jpg" width="699" /></p>
<p>Выравнивание листов производится после окончания раскладки. Если на противоположном торце волны материала не совпадают, можно увеличить нахлест либо использовать доборные элементы. При этом не рекомендуется изменять ранее установленный шаг листов кровельного покрытия.</p>
<p>Крепление каждого листа начинают с его верхней части, которая примыкает к коньку крыши. Первый из листов фиксируется сверху, затем под него подводится второй и выполняется соединение двух смежных листов одновременно. Убедившись, что линия соединения листов представляет собой прямую, выполняют окончательное крепление саморезами по центру листов. В последнюю очередь ввинчивают саморезы в верхнюю часть волны.</p>
<p align="center"><img height="414" src="/images/montag-cherepitcy/image009.jpg" width="434" /></p>
<p>Особое внимание при монтаже уделяют сохранению целостности покрытия. По крыше необходимо передвигаться в мягкой обуви, а также не допускать контакта острых предметов (в частности, стальной стружки) с металлочерепицей.</p>
<p>Контроль правильности укладки листов производят после закрепления 4-5 смежных листов. При необходимости выравнивают нижний край покрытия по карнизу, но не передвигают листы в районе конька.</p>
<h3>Установка планок фронтона и конька крыши</h3>
<p>Привлекательность металлочерепичной кровли обеспечивается качеством обустройства фронтона. Монтаж фронтонных планок производится по направлению снизу вверх, так, чтобы они надежно закрыли торцевые части листов металлочерепицы. С противоположной стороны фронтонные планки прикрепляются к доскам обрешетки.</p>
<p style="text-align: center;"><img height="351" src="/images/montag-cherepitcy/image010.jpg" width="500" /></p>
<p>В качестве коньковых планок лучше принимать закругленные элементы: их монтаж производится легче, а зазоры между элементами конька и покрытия в этом случае окажутся минимальными. Так же при монтаже планок конька потребуются монтаж дополнительных элементов &laquo;коньковых заглушек&raquo;. Перед креплением коньковых планок под них необходимо установить уплотнитель. Он позволит снизить теплопотери через зазоры в коньковой части крыши.</p>
<p style="text-align: center;"><img height="280" src="/images/montag-cherepitcy/image011.jpg" width="623" /></p>
<h3>Устройство Ендовы</h3>
<p>Внутренние углы скатов крыши (ендовы) &ndash; необходимы для своевременного и быстрого удаления с крыши влаги и снега. Узел монтажа ендовы выполняется в следующем порядке: вначале крепится нижняя ендова, первая планку укладывают поверх планки карниза. Поскольку примыкание элементов кровли в этом месте может быть не вполне плотным, для закрытия стыков используется самоклеящийся уплотнитель. После монтажа нижней ендовы, выполняем укладу листов металлочерепицы. Далее устанавливается верхняя ендова с нахлёстом 100мм. Её крепят в верхнюю часть волны металлочерепичного листа.</p>
<p style="text-align: center;"><img height="192" src="/images/montag-cherepitcy/image013.jpg" width="256" /><img height="190" src="/images/montag-cherepitcy/image015.jpg" width="256" /></p>
<p style="text-align: center;"><img height="267" src="/images/montag-cherepitcy/image016.jpg" width="448" /></p>
<h3>Снегозадержатели</h3>
<p>Для обеспечения безопасности и надежного задержания снега на кровле, а также в эстетических целями на крышах часто монтируют снегозадержатели. Планки снегозадержателей устанавливают под второй поперечной волной металлочерепицы. Снегозадержатели могут быть плоскими и трубчатыми и для того чтобы закрепить снегозадержатели к обрешётке необходимо использовать длинные саморезы.</p>
<p align="center">&nbsp;</p>
<p align="center"><img height="444" src="/images/montag-cherepitcy/image018.gif" width="640" /></p>
<p align="center">&nbsp;</p>
<h3>Карнизная планка</h3>
<p>В местах примыкания кровли к стене, для герметичности необходимо установить планки примыкания. Верхняя часть планки крепится непосредственно к фасаду и дополнительно герметизируется силиконом, а нижняя часть крепится кровельными саморезами к верхней части волны металлочерепицы.</p>
<p style="text-align: center;"><img height="444" src="/images/montag-cherepitcy/019.jpg" width="640" /></p>
</div>
	  	       
		<div class="clr"></div>	  
						<div class="itemContentFooter">
			<div class="clr"></div>
		</div>	
	  <div class="clr"></div>
  </div>
<div class="clr"></div>
<div class="clr"></div>
</div>
</div>
</div> 
</div>  
</div>    
</div>
 </div>        
';

else :	 
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
									
endif;	
									
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

<!-- Код тега ремаркетинга Google -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 956632179;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>

<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/956632179/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter34760680 = new Ya.Metrika({id:34760680,
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
<noscript><div><img src="//mc.yandex.ru/watch/34760680" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 956632179;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "rBIHCIyv72AQ85iUyAM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""
src="//www.googleadservices.com/pagead/conversion/956632179/?label=rBIHCIyv72AQ85iUyAM&guid=ON&script=0"/>
</div>
</noscript>


</body>
</html>