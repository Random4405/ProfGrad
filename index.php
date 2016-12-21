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


<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/owl.carousel.css" />

<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/media.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/media_others.css" />

<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/temp-styles.css" />


<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&subset=cyrillic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&subset=cyrillic-ext" rel="stylesheet">
 -->
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
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-80712240-1', 'auto');
ga('send', 'pageview');

</script>


<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery-1.9.1.min.js" type="text/javascript" ></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/owl.carousel.min.js" type="text/javascript" ></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/script.js" type="text/javascript" ></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/tabs.js" type="text/javascript" ></script>
  <div id="vt_body_wrapper">
      <div id="vt_main_wrapper">
    <div id="vt_wrapper" class="clearfix">
      <!-- /////////////////// HEADER LAYOUT ///////////////////////////////-->
      <div id="vt_header_section" class="vt_header_section clearfix">
        <div class="vt_section">
          <div class="header-content container clearfix">
            <div class="menu_top_button"></div>
            <jdoc:include type="modules" name="header-content" style="xhtml" />
          </div>
        </div>
        <div class="menu_top_bg"></div>
        <div class="header-menu">
          <div class="menu_top_close"></div>
          <div class="vt_section clearfix">
            <jdoc:include type="modules" name="header-menu" style="xhtml" />
          </div>
      </div>
      <div id="vt_drawer_head" class="vt_drawer_head clearfix">
        <?php if ($this->countModules('top1 + top2 + top3 + top4 + top5 + top6 ')) : ?>
          <div class="vt_wrapper_top clearfix">
           <div id="vt_top" class="vt_top clearfix">
                <?php echo VTEMShowModule('top', 'vt_xhtml', 6);?>
           </div>
           </div>
         <?php endif;?>
      </div>
       <!-- /////////////////// MAIN LAYOUT ///////////////////////////////-->
<div class="main-layout-section">
       <?php if ($this->countModules('sidebar')) : ?>
       <div id="vt_sidebar_section" class="vt_sidebar_section clearfix">
          <jdoc:include type="modules" name="sidebar" style="xhtml" />
       </div>
       <div id="vt_main_section" class="vt_main_section clearfix ml400 mr150">
       <?php else : ?>
       <div id="vt_main_section" class="vt_main_section clearfix">
      <?php endif; ?>

       <jdoc:include type="modules" name="pre-content" style="xhtml" />

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

elseif ($_SERVER['REQUEST_URI'] == '/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrobond'):
  echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft">
                                         <div class="vt_component_inside">



<!-- Start K2 Item Layout -->
<span id="startOfPageId6"></span>

<div id="k2Container" class="itemView">

  <!-- Plugins: BeforeDisplay -->

  <!-- K2 Plugins: K2BeforeDisplay -->





  <div class="itemHeader">


        <!-- Item title -->
    <div class="itemTitle">
    <h1 class="itemTitle">Композитная черепица MetroBond</h1>

    </h1>
    </div>


  </div>

  <!-- Plugins: AfterDisplayTitle -->

  <!-- K2 Plugins: K2AfterDisplayTitle -->



  <div class="itemBody">


    <div class="itemFullText">
<p>Традиционный классический профиль <b>MetroBond</b>, создает эффект натуральной черепичной кровли. Превосходно сочетается с различными архитектурными стилями и замыслами.</p>

<table cellpadding="10" cellspacing="10">
<tr>
<td>
<img src="/images/metrobond_1.jpg" border="0" width="500" style="float: left; margin-left: 135px; margin-right: 25px;" />
</td>
<td>
<p><b>Технические характеристики:</b></p>
<ul>
<li>Длина <b>1330 мм</b></li>
<li>Ширина <b>410 мм</b></li>
<li>Площадь <b>0.55 м²</b></li>
<li>Высота волны <b>37 мм</b></li>
<li>Вес шт <b>2.95 кг</b></li>
<li>Вес м²<b> 6.3 кг</b></li>
<li>Расход <b>2.17 шт/м²</b></li>
<li>Цена от <b>553</b></li>
<li><b>Стальная основа</b></li>
</ul>

</td>

<tr>
<td>

<p><img src="/images/metrobond-inner.jpg" border="0" width="300" style="float: left; margin-left: 235px; margin-right: 25px;"></p>

</td>
<td>
<ul>
<li>
Акриловая глазурь
</li>
<li>
Гранулы натурального камня
</li>
<li>
Минералонаполненное связующее
</li>
<li>
Акриловый грунт
</li>
<li>
Magnelis® ZM 300 г/м2
</li>
<li>
Сталь ArcelorMittal, т. 0,45мм
</li>
<li>
Magnelis® ZM 300 г/м2
</li>
<li>
Акриловый грунт
</li>
</ul>
<p>

</td>
</tr>

</table>


<br />
<table style="margin-left: 20px; margin-right: 20px;">
<tr>
<p style="font-size: 36px;text-align: center;">Цветовая гамма</p>

<td width="135px;">&nbsp;
</td>

<td>
 <ul id="sigProId17f75d4c47" class="sigProContainer sigProClassic sigProClassic">


    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
<span class="sigProLinkWrapper">
  <a href="/images/metrobond-color/ugol.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery17f75d4c47]" title="Уголь
" target="_blank">
  <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image ugol.jpg" title="Click to enlarge image ugol.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_17f75d4c47_ugol.jpg);">
<span class="sigProPseudoCaption"><b>Уголь
</b></span>
    <span class="sigProCaption" title="Уголь
">Уголь
</span>
</a>
</span>
    </span>
  </li>
<li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
<span class="sigProLinkWrapper">
  <a href="/images/metrobond-color/terakotta.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery17f75d4c47]" title="Теракотта
" target="_blank">
  <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image terakotta.jpg" title="Click to enlarge image terakotta.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_17f75d4c47_terakotta.jpg);">
<span class="sigProPseudoCaption"><b>Теракотта
</b></span>
    <span class="sigProCaption" title="Теракотта
">Теракотта
</span>
</a>
</span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
<span class="sigProLinkWrapper">
  <a href="/images/metrobond-color/salmon.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery17f75d4c47]" title="Салмон
" target="_blank">
  <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image salmon.jpg" title="Click to enlarge image salmon.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_17f75d4c47_salmon.jpg);">
<span class="sigProPseudoCaption"><b>Салмон
</b></span>
    <span class="sigProCaption" title="Салмон
">Салмон
</span>
</a>
</span>
    </span>
  </li>

      <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/metrobond-color/red.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery17f75d4c47]" title="Красный
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image red.jpg" title="Click to enlarge image red.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_17f75d4c47_red.jpg);">
                              <span class="sigProPseudoCaption"><b>Красный
</b></span>
          <span class="sigProCaption" title="Красный
">Красный
</span>
                  </a>
      </span>
    </span>
  </li>





    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/metrobond-color/peschanaya-duna.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery17f75d4c47]" title="Песчаная дюна
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image peschanaya-duna.jpg" title="Click to enlarge image peschanaya-duna.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_17f75d4c47_peschanaya-duna.jpg);">
                              <span class="sigProPseudoCaption"><b>Песчаная дюна
</b></span>
          <span class="sigProCaption" title="Песчаная дюна
">Песчаная дюна
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/metrobond-color/ohra.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery17f75d4c47]" title="Охра
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image ohra.jpg" title="Click to enlarge image ohra.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_17f75d4c47_ohra.jpg);">
                              <span class="sigProPseudoCaption"><b>Охра
</b></span>
          <span class="sigProCaption" title="Охра
">Охра
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/metrobond-color/kuba.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery17f75d4c47]" title="Куба
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image kuba.jpg" title="Click to enlarge image kuba.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_17f75d4c47_kuba.jpg);">
                              <span class="sigProPseudoCaption"><b>Куба
</b></span>
          <span class="sigProCaption" title="Куба
">Куба
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/metrobond-color/kofe.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery17f75d4c47]" title="Кофе
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image kofe.jpg" title="Click to enlarge image kofe.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_17f75d4c47_kofe.jpg);">
                              <span class="sigProPseudoCaption"><b>Кофе
</b></span>
          <span class="sigProCaption" title="Кофе
">Кофе
</span>
                  </a>
      </span>
    </span>
  </li>





    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/metrobond-color/kedr.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery17f75d4c47]" title="Кедр
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image kedr.jpg" title="Click to enlarge image kedr.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_17f75d4c47_kedr.jpg);">
                              <span class="sigProPseudoCaption"><b>Кедр
</b></span>
          <span class="sigProCaption" title="Кедр
">Кедр
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/metrobond-color/kamen-oreh.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery17f75d4c47]" title="Каменный орех
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image kamen-oreh.jpg" title="Click to enlarge image kamen-oreh.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_17f75d4c47_kamen-oreh.jpg);">
                              <span class="sigProPseudoCaption"><b>Каменный орех
</b></span>
          <span class="sigProCaption" title="Каменный орех
">Каменный орех
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/metrobond-color/green.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery17f75d4c47]" title="Зелёный
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image green.jpg" title="Click to enlarge image green.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_17f75d4c47_green.jpg);">
                              <span class="sigProPseudoCaption"><b>Зелёный
</b></span>
          <span class="sigProCaption" title="Зелёный
">Зелёный
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/metrobond-color/burgundia.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery17f75d4c47]" title="Бургундия
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image burgundia.jpg" title="Click to enlarge image burgundia.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_17f75d4c47_burgundia.jpg);">
                              <span class="sigProPseudoCaption"><b>Бургундия
</b></span>
          <span class="sigProCaption" title="Бургундия
">Бургундия
</span>
                  </a>
      </span>
    </span>
  </li>


    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/metrobond-color/braun.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery17f75d4c47]" title="Браун
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image braun.jpg" title="Click to enlarge image braun.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_17f75d4c47_braun.jpg);">
                              <span class="sigProPseudoCaption"><b>Браун
</b></span>
          <span class="sigProCaption" title="Браун
">Браун
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/metrobond-color/bordo.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery17f75d4c47]" title="Бордо
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image bordo.jpg" title="Click to enlarge image bordo.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_17f75d4c47_bordo.jpg);">
                              <span class="sigProPseudoCaption"><b>Бордо
</b></span>
          <span class="sigProCaption" title="Бордо
">Бордо
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/metrobond-color/black.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery17f75d4c47]" title="Чёрный
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image black.jpg" title="Click to enlarge image black.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_17f75d4c47_black.jpg);">
                              <span class="sigProPseudoCaption"><b>Чёрный
</b></span>
          <span class="sigProCaption" title="Чёрный
">Чёрный
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/metrobond-color/antik-sery.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery17f75d4c47]" title="Антик серый
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image antik-sery.jpg" title="Click to enlarge image antik-sery.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_17f75d4c47_antik-sery.jpg);">
                              <span class="sigProPseudoCaption"><b>Антик серый
</b></span>
          <span class="sigProCaption" title="Антик серый
">Антик серый
</span>
                  </a>
      </span>
    </span>
  </li>

    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/metrobond-color/antik-red.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery17f75d4c47]" title="Антик красный
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image antik-red.jpg" title="Click to enlarge image antik-red.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_17f75d4c47_antik-red.jpg);">
                              <span class="sigProPseudoCaption"><b>Антик красный
</b></span>
          <span class="sigProCaption" title="Антик красный
">Антик красный
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/metrobond-color/antik-black.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery17f75d4c47]" title="Антик чёрный
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_17f75d4c47_antik-black.jpg); margin-left: 20px; margin-right: 20px;">
                              <span class="sigProPseudoCaption"><b>Антик чёрный
</b></span>
          <span class="sigProCaption" title="Антик чёрный
">Антик чёрный
</span>
                  </a>
      </span>
    </span>
  </li>
</ul>



<p></p>
<p>


</p><ul id="sigProIdbcf9d266e2" class="sigProContainer sigProClassic sigProClassic">
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/metrobond/f68b2d7da730dc05e76ecab8c1bfc0a4.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallerybcf9d266e2]" title="" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" title="Click to enlarge image f68b2d7da730dc05e76ecab8c1bfc0a4.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_bcf9d266e2_f68b2d7da730dc05e76ecab8c1bfc0a4.jpg);">
                              <span class="sigProPseudoCaption"><b></b></span>
          <span class="sigProCaption" title=""></span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/metrobond/761b2f29021cb1a8715417c0f4ce2090.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallerybcf9d266e2]" title="" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" title="Click to enlarge image 761b2f29021cb1a8715417c0f4ce2090.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_bcf9d266e2_761b2f29021cb1a8715417c0f4ce2090.jpg);">
                              <span class="sigProPseudoCaption"><b></b></span>
          <span class="sigProCaption" title=""></span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/metrobond/39d309d0c191ad0396507af63ece1d52.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallerybcf9d266e2]" title="" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image 39d309d0c191ad0396507af63ece1d52.jpg" title="Click to enlarge image 39d309d0c191ad0396507af63ece1d52.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_bcf9d266e2_39d309d0c191ad0396507af63ece1d52.jpg);">
                              <span class="sigProPseudoCaption"><b></b></span>
          <span class="sigProCaption" title=""></span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProClear">&nbsp;</li>
</ul>


<div class="sigProPrintMessage">

  <br>
  <a title="MetroBond" href="http://profgrad.by/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrobond#sigProGalleriabcf9d266e2">http://profgrad.by/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile/metrobond#sigProGalleriabcf9d266e2</a>
</div>

<!-- JoomlaWorks "Simple Image Gallery Pro" Plugin (v2.5.6) ends here -->
</td>

</tr>
</table>


<p></p>



<p>Для создания надежной и долговечной кровли стоит позаботиться о подборе качественных материалов. Обустроить стильный и привлекательный внешний вид крыши позволит черепица MetroBond. Созданная известной бельгийской торговой маркой продукция отличается отличными эксплуатационными характеристиками и натуральным внешним исполнением.</p>
<p>Уникальная кровля Метробонд обладает множеством преимуществ:</p>
<ul>
  <li>Этот материал для обустройства кровли можно отнести к элитному, так как он обладает безупречным внешним обликом и имеет специальное покрытие, которое позволяет материалу на протяжении долгих лет сохранять свой первоначальный внешний облик.</li>
  <li>Кровельный материал прекрасно гармонирует с любым видом внешней отделки. Какая бы конструкция кровли ни была выбрана, с такой черепицей она будет выглядеть модно и оригинально.</li>
  <li>Долговечность материала. Даже в сложных климатических условиях подобная продукция сможет сохранить свои качественные характеристики. Длительное воздействие ультрафиолетового излучения, различные осадки и другие внешние факторы не способны испортить крышу.</li>
  <li>Специальный слой из натурального каменного гранулята делает покрытие особенно ценным. Оно не имеет металлического блеска, что позволяет получить более привлекательный дизайн. При этом материал отличается прекрасными тепло- и звукоизоляционными характеристиками. Использованная для создания дома композитная кровля MetroBond внесет в жизнь больше комфорта и уюта. При этом дом будет выглядеть уникально и презентабельно.</li>
</ul>
<h2>Выгодные цены на черепицу Метробонд в Минске!</h2>
<p>Если вам нужно купить композитную черепицу Метробонд в Минске, то наш интернет-магазин станет самым правильным решением. Этот материал для внешней отделки позволит вам создать стильную и долговечную кровлю, которая обеспечит максимально комфортные условия проживания в доме.</p>
<p>Мы предлагаем самые выгодные цены на кровельные материалы, что позволит вам существенно сэкономить на ремонте. Даже при незначительных расходах на отделочных материалах строение будет смотреться оригинально и неповторимо.</p>

<div><!-- START: Modules Anywhere --><!--  Modules Anywhere Message: The module cannot be placed because it is not published or assigned to this page. --><!-- END: Modules Anywhere --></div>	  </div>

    <div class="clr"></div>

    <div class="clr"></div>
  </div>


  <div class="clr"></div>



  <div class="clr"></div>
</div>
<!-- End K2 Item Layout -->
 </div>
                                    </div>
</div>

</div>
</div>
</div>
 </div>
';

elseif ($_SERVER['REQUEST_URI'] == '/catalog/krovelnye-materialy/creaton-titania'):
  echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft">
                                         <div class="vt_component_inside" id="yui_3_13_0_1_1466405141779_49">



<!-- Start K2 Item Layout -->
<span id="startOfPageId487"></span>

<div id="k2Container" class="itemView">

  <!-- Plugins: BeforeDisplay -->

  <!-- K2 Plugins: K2BeforeDisplay -->





  <div class="itemHeader">


        <!-- Item title -->
    <div class="itemTitle">
<h1>Керамическая черепица CREATON TITANIA</h1>



    </h1>
    </div>


  </div>

  <!-- Plugins: AfterDisplayTitle -->

  <!-- K2 Plugins: K2AfterDisplayTitle -->

    <div class="itemToolbar">
    <ul>






          </ul>
    <div class="clr"></div>
  </div>


  <div class="itemBody">

    <!-- Plugins: BeforeDisplayContent -->

    <!-- K2 Plugins: K2BeforeDisplayContent -->


        <!-- Item text -->
    <div class="itemFullText">
      <p><img src="/images/titania-main2.jpg" border="0" width="160" style="float: left; margin-left: 12px; margin-right: 12px;">Керамическая черепица CREATON TITANIA производится в шести популярных и благородных цветах, которые позволят реализовать любую архитектурную идею или замысел, гармонично соединив все элементы экстерьера дома: цоколь, фасад, окна, водосток, кровля, кирпичные вентшахты и трубы, и даже забор и тротуарную брусчатку. Все будет соединено воедино, благодаря изящному внешнему виду этой черепицы.</p>
<p>Обратившись к нам, Вы сможете осуществить расчет стоимости кровли со всеми необходимыми элементами кровельной конструкции (теплоизоляция, подкровельные пленки, водосток и т.д.).</p>
<p>&nbsp;</p>
<div style="float: left; width: 600px; display: block;">
<div class="project_tabs">
<div class="tab-item tab-1 active">Цвета</div>
<div class="tab-item tab-2">Характеристики</div>
<div class="tab-item tab-3">Преимущества</div>
<div class="tab-item tab-4">Фотогалерея</div>
</div>
<div class="project_blocks">
<div class="block-item block-1 active">
<p style="text-align: justify;"><b>Цвета CREATON TITANIA:</b> черная глазурь, кирпичный ангоб, коричневая глазурь, черный матовый ангоб, красное вино глазурь, сланцевый ангоб.</p>
<p>

<!-- JoomlaWorks "Simple Image Gallery Pro" Plugin (v2.5.6) starts here -->

</p><ul id="sigProIdc22ea5683d" class="sigProContainer sigProClassic sigProClassic">
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/titania/6_w_kol_lupka_angobowana__2__02.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc22ea5683d]" title="черный матовый ангоб
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image 6_w_kol_lupka_angobowana__2__02.jpg" title="Click to enlarge image 6_w_kol_lupka_angobowana__2__02.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c22ea5683d_6_w_kol_lupka_angobowana__2__02.jpg);">
                              <span class="sigProPseudoCaption"><b>черный матовый ангоб
</b></span>
          <span class="sigProCaption" title="черный матовый ангоб
">черный матовый ангоб
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/titania/5_ciemnobrazowa_angobowana__2__02.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc22ea5683d]" title="коричневая глазурь
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image 5_ciemnobrazowa_angobowana__2__02.jpg" title="Click to enlarge image 5_ciemnobrazowa_angobowana__2__02.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c22ea5683d_5_ciemnobrazowa_angobowana__2__02.jpg);">
                              <span class="sigProPseudoCaption"><b>коричневая глазурь
</b></span>
          <span class="sigProCaption" title="коричневая глазурь
">коричневая глазурь
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/titania/4_miedziana_angobowana__2__04.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc22ea5683d]" title="кирпичный ангоб
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image 4_miedziana_angobowana__2__04.jpg" title="Click to enlarge image 4_miedziana_angobowana__2__04.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c22ea5683d_4_miedziana_angobowana__2__04.jpg);">
                              <span class="sigProPseudoCaption"><b>кирпичный ангоб
</b></span>
          <span class="sigProCaption" title="кирпичный ангоб
">кирпичный ангоб
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/titania/3_brazowa_glazurowana__2__01.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc22ea5683d]" title="сланцевый ангоб
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image 3_brazowa_glazurowana__2__01.jpg" title="Click to enlarge image 3_brazowa_glazurowana__2__01.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c22ea5683d_3_brazowa_glazurowana__2__01.jpg);">
                              <span class="sigProPseudoCaption"><b>сланцевый ангоб
</b></span>
          <span class="sigProCaption" title="сланцевый ангоб
">сланцевый ангоб
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/titania/2_czarna_glazurowana__2__01.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc22ea5683d]" title="черная глазурь
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image 2_czarna_glazurowana__2__01.jpg" title="Click to enlarge image 2_czarna_glazurowana__2__01.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c22ea5683d_2_czarna_glazurowana__2__01.jpg);">
                              <span class="sigProPseudoCaption"><b>черная глазурь
</b></span>
          <span class="sigProCaption" title="черная глазурь
">черная глазурь
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/titania/1_czerwien_winna_angobowana__2__01.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[galleryc22ea5683d]" title="красное вино глазурь
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image 1_czerwien_winna_angobowana__2__01.jpg" title="Click to enlarge image 1_czerwien_winna_angobowana__2__01.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_c22ea5683d_1_czerwien_winna_angobowana__2__01.jpg);">
                              <span class="sigProPseudoCaption"><b>красное вино глазурь
</b></span>
          <span class="sigProCaption" title="красное вино глазурь
">красное вино глазурь
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProClear">&nbsp;</li>
</ul>


<div class="sigProPrintMessage">

  <br>
  <a title="Titania" href="http://profgrad.by/catalog/krovelnye-materialy/creaton-titania#sigProGalleriac22ea5683d">http://profgrad.by/catalog/krovelnye-materialy/creaton-titania#sigProGalleriac22ea5683d</a>
</div>

<!-- JoomlaWorks "Simple Image Gallery Pro" Plugin (v2.5.6) ends here -->

<p></p>
</div>
<div class="block-item block-2">
<p><b>Размер, мм.:</b> 324 х 515</p>
<p><b>Вес 1 шт., кг.:</b> 4,9</p>
<p><b>Кол-во в 1 м.кв. (при шаге обрешетки,мм: 400), шт.:</b> 9,2</p>
<p><b>Кол-во в паллете, шт.:</b> 192</p>
<p><b>Шаг обрешетки, диапазон, мм.:</b> 382-425</p>
</div>
<div class="block-item block-3">
<p>Одно из самых больших преимуществ керамической черепицы CREATON TITANIA -<b> низкая цена</b>. Наша компания предлагает Вам беспрецедентную и очень низкую цену, которая позволит Вам выгодно сэкономить деньги.</p>
</div>
<div class="block-item block-4">

<!-- JoomlaWorks "Simple Image Gallery Pro" Plugin (v2.5.6) starts here -->

<ul id="sigProId7bb175484c" class="sigProContainer sigProClassic sigProClassic">
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/titania-galery/6.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery7bb175484c]" title="Увеличить фото
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image 6.jpg" title="Click to enlarge image 6.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_7bb175484c_6.jpg);">
                              <span class="sigProPseudoCaption"><b>Увеличить фото
</b></span>
          <span class="sigProCaption" title="Увеличить фото
">Увеличить фото
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/titania-galery/5.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery7bb175484c]" title="Увеличить фото
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image 5.jpg" title="Click to enlarge image 5.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_7bb175484c_5.jpg);">
                              <span class="sigProPseudoCaption"><b>Увеличить фото
</b></span>
          <span class="sigProCaption" title="Увеличить фото
">Увеличить фото
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/titania-galery/3.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery7bb175484c]" title="Увеличить фото
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image 3.jpg" title="Click to enlarge image 3.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_7bb175484c_3.jpg);">
                              <span class="sigProPseudoCaption"><b>Увеличить фото
</b></span>
          <span class="sigProCaption" title="Увеличить фото
">Увеличить фото
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/titania-galery/2.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery7bb175484c]" title="Увеличить фото
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image 2.jpg" title="Click to enlarge image 2.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_7bb175484c_2.jpg);">
                              <span class="sigProPseudoCaption"><b>Увеличить фото
</b></span>
          <span class="sigProCaption" title="Увеличить фото
">Увеличить фото
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProClear">&nbsp;</li>
</ul>


<div class="sigProPrintMessage">
  View the embedded image gallery online at:
  <br>
  <a title="Titania" href="http://profgrad.by/catalog/krovelnye-materialy/creaton-titania#sigProGalleria7bb175484c">http://profgrad.by/catalog/krovelnye-materialy/creaton-titania#sigProGalleria7bb175484c</a>
</div>

<!-- JoomlaWorks "Simple Image Gallery Pro" Plugin (v2.5.6) ends here -->

</div>
</div>
</div>
<div style="float: left; width: 200px; display: block; font-size: 12px;">
<p><a href="/downloads/titania/bukletCREATONTITANIA_rus.pdf"><img src="/images/pdf.png" border="0" width="25" style="float: left; margin-left: 5px; margin-right: 5px;">БУКЛЕТ CREATON TITANIA - ЯЗЫК РУССКИЙ</a></p>
<p><a href="/downloads/titania/bukletCREATONTITANIA_nem.pdf"><img src="/images/pdf.png" border="0" width="25" style="float: left; margin-left: 5px; margin-right: 5px;">БУКЛЕТ CREATON TITANIA НА ЯЗЫКЕ ПРОИЗВОДИТЕЛЯ - ЯЗЫК НЕМЕЦКИЙ (ГЕРМАНИЯ)</a></p>
<p><a href="/downloads/titania/CREATON_price.pdf"><img src="/images/pdf.png" border="0" width="25" style="float: left; margin-left: 5px; margin-right: 5px;">КЕРАМИЧЕСКАЯ ЧЕРЕПИЦА CREATON TITANIA ПРАЙС-ЛИСТ</a></p>







</div>	  </div>




    <div class="clr"></div>




    <div class="clr"></div>
  </div>

    <!-- Social sharing -->

    <div class="itemLinks">




    <div class="clr"></div>
  </div>





  <div class="clr"></div>




  <!-- Plugins: AfterDisplay -->

  <!-- K2 Plugins: K2AfterDisplay -->


 <p>Выбирая материал для обустройства надежной и долговечной кровли, стоит останавливаться только на проверенных покрытиях. Созданная известной европейской торговой маркой керамическая черепица Креатон Титаниа сделает даже непримечательное строение очень стильным и привлекательным. Уникальная кровля CREATON TITANIA обладает множеством качественных преимуществ:</p>
<ul>
  <li>Продукция представлена в крупном формате, что позволяет получить уникальную кровлю на самых выгодных условиях. Такая особенность обеспечивает малый расход покрытия &ndash; для обустройства 1 квадратного метра достаточно всего 9 элементов. Это также обеспечивает быстрый и простой монтаж материала.</li>
  <li>Покрытие отличается внутренней профилированной поверхностью, благодаря которой обустроенная крыша становится более прочной и долговечной.</li>
  <li>Наличие специальной замковой системы обеспечивает оптимальное устранение осадков, которые бы могли повлиять на эксплуатационные характеристики кровли.</li>
  <li>Материал достаточно универсальный, что дает возможность использовать его для крыши, уклон которой составляет от 10 до 90 градусов.</li>
  <li>Несмотря на большой формат черепицы, она обладает хорошей эластичностью, что дает возможность применять ее для обустройства любой по конфигурации крыши.</li>
  <li>Привлекательный внешний облик материала делает его оптимальным решением для оформления стильного и современного фасада. А разнообразное цветовое оформление позволяет подобрать самый оптимальный вариант для уже имеющейся внешней отделки.</li>
</ul>
<p>Несмотря на столь большое количество преимуществ, цены на черепицу CREATON TITANIA в Минске доступны для каждого. Этот высококачественный материал быстро и доступно позволит преобразить любой дом, сделав проживание в нем комфортным и приятным.</p>



  <div class="clr"></div>
</div>
<!-- End K2 Item Layout -->
 </div>
                                    </div>                                  </div>
</div>
</div>
</div>
 </div>
';

elseif ($_SERVER['REQUEST_URI'] == '/catalog/krovelnye-materialy/prirodny-slanec-rathscheck'):
  echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft">
                                         <div class="vt_component_inside" id="yui_3_13_0_1_1466147714242_49">



<!-- Start K2 Item Layout -->
<span id="startOfPageId449"></span>

<div id="k2Container" class="itemView">

  <!-- Plugins: BeforeDisplay -->

  <!-- K2 Plugins: K2BeforeDisplay -->





  <div class="itemHeader" id="yui_3_13_0_1_1466147714242_48">


        <!-- Item title -->
    <div class="itemTitle" id="yui_3_13_0_1_1466147714242_47">
    <h1 class="itemTitle" id="yui_3_13_0_1_1466147714242_46">Сланцевая кровля Rathscheck (Германия)</h1>
    </div>


  </div>

  <!-- Plugins: AfterDisplayTitle -->

  <!-- K2 Plugins: K2AfterDisplayTitle -->



  <div class="itemBody">


    <div class="itemIntroText">
      <p><img src="/images/slanec_kam.jpg" border="0" alt=""></p>
<p><a href="/k2-items/prirodny-slanec-rathscheck/vidy-ukladki">Виды укладки</a> | <a href="/k2-items/prirodny-slanec-rathscheck/tipy-materiala">Типы материала</a> | <a href="/k2-items/prirodny-slanec-rathscheck/razmery-i-kolichestvo">Размеры и количество</a> | <a href="/k2-items/prirodny-slanec-rathscheck/production">Производство</a></p>	  </div>

  <h2>Кровельный сланец Rathscheck</h2>
<p>Одним из самых важных элементов любого строения является крыша. Чтобы она на протяжении многих лет могла справляться со своим основным предназначением, стоит основательно подойти к вопросу выбора кровельных материалов.</p>
<p>Если еще в девятнадцатом веке такой материал, как натуральный сланец, применялся в качестве материала для отопления, то сегодня его используют для создания стильной кровли. Созданная еще в 1793 году немецкая компания Rathscheck и сегодня радует разработкой экологически чистой и долговечной продукции для внешней отделки. Производимая этой торговой маркой немецкая сланцевая кровля станет просто находкой для любого дома. Она позволит воплотить в реальность даже самые замысловатые дизайнерские проекты. Предлагаемая нами сланцевая черепица от Rathscheck обладает множеством уникальных характеристик:</p>
<ul>
  <li>Оригинальный внешний облик материала. Вся немецкая продукция выполнена в уникальном дизайне, который не имеет в мире аналогов.</li>
  <li>Престижность кровли. Благодаря представленным у нас изделиям от Rathscheck можно создавать свой стильный и неповторимый фасад.</li>
  <li>Отличные эксплуатационные возможности материала. Выполненная из сланца кровля отличается прекрасными тепло- и звукоизоляционными способностями. Более того, продукция сможет справиться со значительными нагрузками и различными внешними факторами.</li>
  <li>Экологическая чистота продукции. Сланец представляет собой полностью природный материал, в котором не имеется вредных для здоровья людей и окружающей среды веществ.</li>
</ul>
<p>Несмотря на столь большое количество преимуществ, цена на сланцевую кровлю очень выгодна. Это позволит вам получить крышу, которая будет отличаться непревзойденным стилем и долговечностью.</p>
<h2>Купить сланцевую черепицу Rathscheck в Минске</h2>
<p>Предлагаемая нами цена сланцевой кровли позволит вам обустроить надежный и оригинальный фасад, который будет радовать своей эстетичностью долгие годы. Какой бы ни была конструкция крыши, такой материал сможет превратить ее в настоящее произведение искусства. Стоимость сланцевой черепицыу нас полностью оправдывает ее качественные характеристики, оригинальный дизайн и долговечность.</p>


    <div class="clr"></div>



    <!-- Plugins: AfterDisplayContent -->

    <!-- K2 Plugins: K2AfterDisplayContent -->

    <div class="clr"></div>
  </div>







  <div class="clr"></div>








  <div class="clr"></div>
</div>
<!-- End K2 Item Layout -->
 </div>
                                    </div>
</div>
</div>
</div>
 </div>
';







elseif ($_SERVER['REQUEST_URI'] == '/catalog/bruschatka/feldhaus-klinker'):
  echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft">
                                         <div class="vt_component_inside" id="yui_3_13_0_1_1466148501148_49">



<!-- Start K2 Item Layout -->
<span id="startOfPageId40"></span>

<div id="k2Container" class="itemView">

  <!-- Plugins: BeforeDisplay -->

  <!-- K2 Plugins: K2BeforeDisplay -->





  <div class="itemHeader" id="yui_3_13_0_1_1466148501148_48">


        <!-- Item title -->
    <div class="itemTitle" id="yui_3_13_0_1_1466148501148_47">
    <h1 class="itemTitle" id="yui_3_13_0_1_1466148501148_46">

      Клинкерная брусчатка FELDHAUS KLINKER



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
      <p><img src="/images/fh.jpg" border="0" alt="" style="margin-right: 15px; float: left;"></p>
<p>Брусчатка компании FeldhausKlinker- это не только отличные физико-механические и эксплуатационные свойства, но и гармоничное сочетание с природным ландшафтом. Функциональная и эстетичная составляющие этой брусчатки способны долгое время радовать глаз игрой рисунка и цветом дорожного покрытия.&nbsp;Преимуществами брусчатки компании FeldhausKlinker являются не только ее декоративные качества, но и высокая функциональность. Она способны выдерживать большие статические и динамические нагрузки, благодаря чему клинкерная брусчатка FeldhausKlinker рекомендуется для мощения территориальных участков с интенсивным транспортным и пешеходным движением.</p>
<p>К основным преимуществам можно причислить повышенную прочность, которая достигается за счет технологии обжига при температуре 1200C, высокую морозостойкость, устойчивость к воздействию влажности и агрессивных химических веществ (солей, щелочей и т.д.), а так же то, что цвет брусчатки не меняется с течением времени благодаря однородной структуре по всей толщине.</p>
<p>На загородном участке, около шикарного особняка или скромного, но уютного домика, всё должно быть прекрасно. Живописный газон, зеленеющие деревья, цветы всевозможных расцветок… Осталось позаботиться только об одном, и этот нюанс –&nbsp;<strong>брусчатка </strong>FeldhausKlinker.</p>
<p><img src="/images/brus_fh.jpg" border="0" width="800"></p>
<p>Клинкерная брусчатка немецкой компании Feldhaus Klinker позволит вам забыть о быстрой изнашиваемости покрытия. Отличное европейское качество, которым может похвастаться этот производитель, сделало&nbsp;мощение брусчаткой&nbsp;лёгким и доступным. Технология давняя и проверенная, но при этом достаточно простая.&nbsp;</p>
<p>Мы сотрудничаем с поставщиком, заслужившим уважение на европейском и мировом рынке. Вы сможете найти и заказать самые лучшие образцы, которые имеются у нас в широком ассортименте.&nbsp;Клинкерная брусчатка&nbsp;от немецкого производителя компании FeldhausKlinker – это отличный материал, который прослужит вам долгие годы.»</p>


<h2>Актуальные цены на клинкерную брусчатку уточняйте у наших менеджеров</h2>
<p>Форматы брусчатки FELDHAUS KLINKER, мм:</p>
<p>SKF 200х100х40, KF 200х100х45, KDF 200х100х52</p>
<p>

<!-- JoomlaWorks "Simple Image Gallery Pro" Plugin (v2.5.6) starts here -->

</p><ul id="sigProId3ccc63c2b8" class="sigProContainer sigProClassic sigProClassic">
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/brus-fh/b808.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery3ccc63c2b8]" title="B 608
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image b808.jpg" title="Click to enlarge image b808.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_3ccc63c2b8_b808.jpg);">
                              <span class="sigProPseudoCaption"><b>B 608
</b></span>
          <span class="sigProCaption" title="B 608
">B 608
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/brus-fh/b609.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery3ccc63c2b8]" title="B 609
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image b609.jpg" title="Click to enlarge image b609.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_3ccc63c2b8_b609.jpg);">
                              <span class="sigProPseudoCaption"><b>B 609
</b></span>
          <span class="sigProCaption" title="B 609
">B 609
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/brus-fh/b502.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery3ccc63c2b8]" title="B 502
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image b502.jpg" title="Click to enlarge image b502.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_3ccc63c2b8_b502.jpg);">
                              <span class="sigProPseudoCaption"><b>B 502
</b></span>
          <span class="sigProCaption" title="B 502
">B 502
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/brus-fh/b409.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery3ccc63c2b8]" title="B 409
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image b409.jpg" title="Click to enlarge image b409.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_3ccc63c2b8_b409.jpg);">
                              <span class="sigProPseudoCaption"><b>B 409
</b></span>
          <span class="sigProCaption" title="B 409
">B 409
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/brus-fh/b408.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery3ccc63c2b8]" title="B 408
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image b408.jpg" title="Click to enlarge image b408.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_3ccc63c2b8_b408.jpg);">
                              <span class="sigProPseudoCaption"><b>B 408
</b></span>
          <span class="sigProCaption" title="B 408
">B 408
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/brus-fh/b405.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery3ccc63c2b8]" title="B 405
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image b405.jpg" title="Click to enlarge image b405.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_3ccc63c2b8_b405.jpg);">
                              <span class="sigProPseudoCaption"><b>B 405
</b></span>
          <span class="sigProCaption" title="B 405
">B 405
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/brus-fh/b403.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery3ccc63c2b8]" title="B 403
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image b403.jpg" title="Click to enlarge image b403.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_3ccc63c2b8_b403.jpg);">
                              <span class="sigProPseudoCaption"><b>B 403
</b></span>
          <span class="sigProCaption" title="B 403
">B 403
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/brus-fh/b402.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery3ccc63c2b8]" title="B 402
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image b402.jpg" title="Click to enlarge image b402.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_3ccc63c2b8_b402.jpg);">
                              <span class="sigProPseudoCaption"><b>B 402
</b></span>
          <span class="sigProCaption" title="B 402
">B 402
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/brus-fh/b273.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery3ccc63c2b8]" title="B 273
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image b273.jpg" title="Click to enlarge image b273.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_3ccc63c2b8_b273.jpg);">
                              <span class="sigProPseudoCaption"><b>B 273
</b></span>
          <span class="sigProCaption" title="B 273
">B 273
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/brus-fh/b249.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery3ccc63c2b8]" title="B 249
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image b249.jpg" title="Click to enlarge image b249.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_3ccc63c2b8_b249.jpg);">
                              <span class="sigProPseudoCaption"><b>B 249
</b></span>
          <span class="sigProCaption" title="B 249
">B 249
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/brus-fh/b248.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery3ccc63c2b8]" title="B 248
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image b248.jpg" title="Click to enlarge image b248.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_3ccc63c2b8_b248.jpg);">
                              <span class="sigProPseudoCaption"><b>B 248
</b></span>
          <span class="sigProCaption" title="B 248
">B 248
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProThumb">
    <span class="sigProLinkOuterWrapper">
      <span class="sigProLinkWrapper">
        <a href="/images/brus-fh/b203.jpg" class="sigProLink" style="width:180px;height:140px;" rel="lightbox[gallery3ccc63c2b8]" title="B 203
" target="_blank">
                    <img class="sigProImg" src="/plugins/content/jw_sigpro/jw_sigpro/includes/images/transparent.gif" alt="Click to enlarge image b203.jpg" title="Click to enlarge image b203.jpg" style="width:180px;height:140px;background-image:url(/cache/jw_sigpro/jwsigpro_cache_3ccc63c2b8_b203.jpg);">
                              <span class="sigProPseudoCaption"><b>B 203
</b></span>
          <span class="sigProCaption" title="B 203
">B 203
</span>
                  </a>
      </span>
    </span>
  </li>
    <li class="sigProClear">&nbsp;</li>
</ul>


<div class="sigProPrintMessage">
  <br>
  <a title="Клинкерная брусчатка FELDHAUS KLINKER" href="http://profgrad.by/catalog/bruschatka/feldhaus-klinker#sigProGalleria3ccc63c2b8">http://profgrad.by/catalog/bruschatka/feldhaus-klinker#sigProGalleria3ccc63c2b8</a>
</div>

<!-- JoomlaWorks "Simple Image Gallery Pro" Plugin (v2.5.6) ends here -->

<p></p>	  </div>

    <div class="clr"></div>


        <div class="itemContentFooter">


      <span class="itemHits">



      <div class="clr"></div>
    </div>

    <!-- Plugins: AfterDisplayContent -->

    <!-- K2 Plugins: K2AfterDisplayContent -->

    <div class="clr"></div>
  </div>







  <div class="clr"></div>




  <!-- Plugins: AfterDisplay -->

  <!-- K2 Plugins: K2AfterDisplay -->





  <div class="clr"></div>
</div>
<!-- End K2 Item Layout -->
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
    <h1 class="itemTitle">Клинкерная плитка Feldhaus Klinke в Минске</h1>
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

<h2>Актуальные цены на фасадную клинкерную плитку уточняйте у наших менеджеров</h2>

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

<table align="center">
<tr>
<td width="100%">
<h3>Мансардные окна VELUX OPTIMA Класс Стандарт</h3>
<p>Линия окон VELUX OPTIMA Класс Стандарт предназначена для комнат мансардного типа. Выгодно отличается наличием ручки-планки. Для удобства потребителей предусмотрено два варианта крепления ручки:</p>
<ul style="line-height: 25px;">
  <li>Ручка размещается внизу оконной конструкции, если окно расположено высоко под потолком и нет возможности открыть его без дополнительных приспособлений.</li>
  <li>Верхний вариант крепления предусмотрен для низко расположенных окон, которые позволяют получить прекрасный обзор местности. В этом случае до ручки не помешает добраться даже рядом расположенная мебель.</li>
  <li>Встроенная система вентиляции позволяет выполнять проветривание помещения даже при закрытом окне.</li>
  <li>Предусмотрены два варианта позиций окна для выполнения проветривания.</li>
  <li>С наружной стороны оконного проема установлены закаленные стекла, это защищает конструкцию от града.</li>
  <li>Применение рамы, которая более узкая, чем обычная, увеличило оконные проемы, и поток попадающего в комнату света вырос на 10%.</li>
</ul>
</td></tr>
</table>
<table width="900px;">

<tr>
<td width="50%">
<a href="/catalog/mansardnye-okna-velux/gzr-3050" >GZR 3050 Ручка сверху</a><br />
<ul style="line-height: 25px;">
  <li> Ручка вверху: удобная ручка-планка (Алюминиевая)</li>
  <li> Деревянная рама</li>
  <li> Комплексная защита от непогоды</li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
</ul>

</td>

<td width="50%">

<img src="/images/gzr_124982%2001_940x940.png" border="0" width="350" align="right">
</td>
</tr>

<tr>
<td  width="50%">

<a href="/catalog/mansardnye-okna-velux/gzr-3050b" >GZR 3050B Ручка снизу</a><br />
<ul style="line-height: 25px;">
  <li> Ручка снизу: базовая, 3-х позиционная ручка (Цинк)</li>
  <li> Деревянная рама</li>
  <li> Комплексная защита от непогоды</li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
</ul>

</td>

<td width="50%">

<img src="/images/gzr b_124981 01_940x940.png" border="0" width="350" align="right">
</td></tr>
</table>
<table width="900px;">

<tr>

<td>
<h3>Мансардные окна VELUX OPTIMA Класс Комфорт</h3>

<p>Окна VELUX OPTIMA Класс Оптима предназначены для установки в мансардных помещениях. Они отличаются современным дизайном исполнения, высоким качеством отделки. Узкая оконная рама придает конструкции стильный элегантный вид, который хорошо дополняется качественно выполненной отделкой деревянной поверхности.</p>
<p>Применение в окнах стеклопакетов триплекс защищает потребителей от возможного появления осколков. При разрушении кусочки стекла остаются на пленке. Особые устройства обеспечивают вентиляцию помещений при закрытых окнах. Кроме того, предусмотрено два положения рамы в режиме проветривания.</p>
<p>В связи с тем, что окна устанавливаются на крыши, которые имеют угол наклона, предусмотрена дополнительная защита от снега на зимний период. Для этого по низу окна и его боковым поверхностям в рамах предусмотрены дополнительные уплотнительные элементы. Они выполняют герметизацию неподвижной части окна и боковых поверхностей поворотной рамы.</p>
<p>Конструкция GLR 3073 BTIS предназначена для любителей экспериментов, тех, кто на момент покупки не определился с местом установки окна и, следовательно, не может выбрать, какой из вариантов мест расположения ручки предпочесть. Для этого случая предусмотрена установка двух ручек.</p>
<p>Окно GLP 0073 BIS отличается от всей серии и признано наилучшим вариантом для комнат повышенной влажности, таких как ванная, кухня. Имеет белоснежную конструкцию, легко обслуживается, хорошо моется. С учетом возможного расположения окна под углом на крыше внутренняя полость заполнена вспененным полистиролом.</p>

</td>
</tr>
</table>
<table width="900px;">

<tr>
<td>
<a href="/catalog/mansardnye-okna-velux/glr-3073" >GLR 3073 Ручка сверху</a><br />
<ul style="line-height: 25px;">
  <li> Ручка вверху: удобная ручка-планка (Алюминиевая)</li>
  <li> Деревянная рама</li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
  <li> Дополнительная снеговая защита и защита от сквозняков</li>
  <li> Безопасный стеклопакет &quot;Триплекс&quot;</li>
  <li> Стильный дизайн</li>
</ul>


</td>

<td>

<img src="/images/glr_cross sale_124979 01_940x940.png" border="0" width="350" align="right">
</td>
</tr>
<tr>
<td>
<a href="/catalog/mansardnye-okna-velux/glr-3073b" >GLR 3073B Ручка внизу</a><br />
<ul style="line-height: 25px;">
  <li> Ручка снизу: стильная элегантая, 3-х позиционная ручка (Цинк)</li>
  <li> Деревянная рама</li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
  <li> Дополнительная снеговая защита и защита от сквозняков</li>
  <li> Безопасный стеклопакет &quot;Триплекс&quot;</li>
  <li> Стильный дизайн</li>
</ul>

</td>
<td>


<img src="/images/glr b_cross sale_124978 01_940x940.png" border="0" width="350" align="right">
</td></tr>


<tr>
<td>
<a href="/catalog/mansardnye-okna-velux/glr-3073bt" >GLR 3073BT Ручка вверху и снизу</a><br />
<ul style="line-height: 25px;">
  <li> Две ручки открывания: вверху и снизу</li>
  <li> Деревянная рама</li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
  <li> Дополнительная снеговая защита и защита от сквозняков</li>
  <li> Безопасный стеклопакет &quot;Триплекс&quot;</li>
  <li> Стильный дизайн</li>
</ul>


</td>

<td>

<img src="/images/glr bt_cross sale_124980 01_940x940.png" border="0" width="350" align="right">
</td>
</tr>


<tr>
<td>
<a href="/catalog/mansardnye-okna-velux/glp-0073b" >GLP 0073B Белый пластик</a><br />
<ul style="line-height: 25px;">
  <li> Ручка снизу: стильная элегатная, 3-х позиционная ручка (Цинк) </li>
  <li> ПВХ-рама: улучшенный ПВХ-профиль окна (адаптирован для скатных кровель)</li>
  <li> Влагостойкий белый пластик - легко мыть</li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
  <li> Дополнительная снеговая защита и защита от сквозняков</li>
  <li> Безопасный стеклопакет &quot;Триплекс&quot;</li>
  <li> Стильный дизайн</li>
</ul>

</td>

<td>


<img src="/images/glp_cross sale_124983 01_940x940.png" border="0" width="350" align="right">
</td></tr>
</table>
<table width="900px;">

<tr>
<td>
<h3>Мансардные окна VELUX PREMIUM</h3>


<p>Серия окон VELUX PREMIUM будет высоко оценена любителями комфорта и уюта. При изготовлении окон для мансарда этой линии применялись новейшие компьютерные разработки и технологические решения, использован стильный дизайн в отделке оконных блоков. Все это выгодно отличает окна данной линии от аналогичных конструкций.</p>
<p>Применяемая технология изоляции за счет герметичного уплотнителя по периметру окна ThermoTechnology<sup>тм</sup>позволяет сохранить теплый микроклимат в холодный период, что помогает экономить на оплате энергоносителей. В окнах данной серии используется более совершенная конструкция клапана-форточки. Кроме того, что это позволяет выполнять проветривание помещений при закрытом окне, устройство дает возможность определить, в каком положении клапан находится в данный момент.</p>
<p>Применение сменного фильтра, который можно мыть в процессе эксплуатации, создает постоянный приток в помещение очищенного от пыли и насекомых воздуха. Главным отличием окон этой серии считается возможность управлять всеми операциями, связанными с эксплуатацией окон, через пульт. Трудно переоценить те преимущества, которые дает человеку власть над окном и над его аксессуарами, причем на расстоянии. Достаточно нескольких движений пальцами по сенсорному пульту управления, и вы получаете массу возможностей:</p>
<ul>
  <li>Можно впустить в комнату свежий воздух, позволить солнечному свету заполнить пространство.</li>
  <li>Применение режима &laquo;В отпуске&raquo; позволяет создать иллюзию постоянного движения в квартире на период отсутствия. По заранее заданной команде в установленное время будет обеспечено движение штор и окон, как в случае присутствия человека.</li>
  <li>Разработан режим, который на период отсутствия жильцов обеспечивает автоматическое закрытие всех окон.</li>
  <li>Имеется возможность определить индивидуально время закрытия и открытия окон. Эта команда будет выполняться автоматически.</li>
  <li>Удобный стильный дизайн пульта позволяет хранить его на поверхности мебели, носить в карманах и крепить на стене при необходимости.</li>
</ul>
<p>VELUX CABRIOсчитается наибольшим достижением серии VELUX PREMIUM. Элегантный и стильный дизайн дает возможность быть наедине с природой, не выходя из мансарды.</p>
</td>
</tr>
</table>
<table width="900px;">
<tr>
<td>
<a href="/catalog/mansardnye-okna-velux/ggl-3070" >GGL 3070 Дерево</a><br />
<ul style="line-height: 25px;">
  <li> Ручка вверху: удобная ручка-планка (Алюминиевая) с клапаном-форточкой для проветривания</li>
  <li> Деревянная рама</li>
  <li> ThermoTechnology<sup>тm</sup></li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
  <li> Дополнительная снеговая защита и защита от сквозняков</li>
  <li> Безопасный стеклопакет &quot;Триплекс&quot;</li>
  <li> Стильный дизайн</li>
</ul>


</td>
<td>

<img src="/images/ggl_cross sale_116271 01_940x940.png" border="0" width="350" align="right">
</td>
</tr>

<tr>
<td>
<a href="/catalog/mansardnye-okna-velux/ggu-0070" >GGU 0070 Полиуретан</a><br />
<ul style="line-height: 25px;">
  <li> Ручка вверху: удобная ручка-планка (Алюминиевая) с клапаном-форточкой для проветривания</li>
  <li> Деревянная рама, покрытая влагостойким полиуретановым покрытием. Для влажных помещений</li>
  <li> ThermoTechnology<sup>тm</sup></li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
  <li> Дополнительная снеговая защита и защита от сквозняков</li>
  <li> Безопасный стеклопакет &quot;Триплекс&quot;</li>
  <li> Стильный дизайн</li>
</ul>
<div>

</div>
</td>
<td>


<img src="/images/ggu_cross sale_116626 01_940x940.png" border="0" width="350" align="right">
</td></tr>


<tr>
<td>
<a href="/catalog/mansardnye-okna-velux/ggl-3066-ggu-0066" >GGL 3066 / GGU 0066 Супертеплые окна</a><br />
<ul style="line-height: 25px;"l>
  <li> Ручка вверху: удобная ручка-планка (Алюминиевая) с клапаном-форточкой для проветривания</li>
  <li> Деревянная рама / Деревянная рама, покрытая влагостойким полиуретановым покрытием. Для влажных помещений</li>
  <li> ThermoTechnology<sup>тm</sup></li>
  <li> Двухкамерный стеклопакет</li>
  <li> &quot;Анти-роса&quot;: внешнее покрытие стекла</li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
  <li> Дополнительная снеговая защита и защита от сквозняков</li>
  <li> Безопасный стеклопакет &quot;Триплекс&quot;</li>
  <li> Стильный дизайн</li>
</ul>

</td>

<td>
<img src="/images/ggl_cross sale_116271 01_940x940.jpg" border="0" width="350" align="right">
</td>
</tr>

<tr>
<td>
<a href="/catalog/mansardnye-okna-velux/integra-ggu-0070-integra-ggl-3070" >INTEGRA GGU 0070 / INTEGRA GGL 3070</a><br />
<ul style="line-height: 25px;">
  <li> Ручка вверху: удобная ручка-планка (Алюминиевая) с клапаном-форточкой для проветривания</li>
  <li> Деревянная рама / Деревянная рама, покрытая влагостойким полиуретановым покрытием. Для влажных помещений</li>
  <li> ThermoTechnology<sup>тm</sup></li>
  <li> Двухкамерный стеклопакет (в этой серии доступен по спец.заказу)</li>
  <li> Датчик дождя</li>
  <li> Сенсорный пульт (автоматические программы)</li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
  <li> Дополнительная снеговая защита и защита от сквозняков</li>
  <li> Безопасный стеклопакет &quot;Триплекс&quot;</li>
  <li> Стильный дизайн</li>
</ul>

</td>

<td>


<img src="/images/velux-ggu-integra-outside.jpg" border="0" width="350" align="right">
</td></tr>

<tr>

<td>
<a href="/catalog/mansardnye-okna-velux/gpu0070-gpl3070" >GPU0070 / GPL3070 Панорамные окна</a><br />
<ul style="line-height: 25px;">
  <li> Ручка вверху: удобная ручка-планка (Алюминиевая) с клапаном-форточкой для проветривания, и ручка снизу.</li>
  <li> Деревянная рама / Деревянная рама, покрытая влагостойким полиуретановым покрытием. Для влажных помещений</li>
  <li> ThermoTechnology<sup>тm</sup></li>
  <li> Двухкамерный стеклопакет (в этой серии доступен по спец.заказу)</li>
  <li> Два варианта открывания: по оси по-середине или по верхней оси</li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
  <li> Дополнительная снеговая защита и защита от сквозняков</li>
  <li> Безопасный стеклопакет &quot;Триплекс&quot;</li>
  <li> Стильный дизайн</li>
</ul>

</td>

<td>
<img src="/images/1391185671-37681200.jpg" border="0" width="350" align="right">
</td></tr>
</table>


<table width="900px;">



<tr><td>
<p><img src="/images/Integra_interior_vert280x210.jpg" border="0" width="280" style="float: left; margin-left: 10px; margin-right: 10px;"><a href="/catalog/mansardnye-okna-velux/integra">Velux INTEGRA "Умное" окно со встроенным электрооборудованием</a>. Комфорт - нажатием одной кнопки. Максимум комфорта. Контролируйте климат и освещение в комнате с помощью пульта дистанционного управления. Использованы современные технологии, основанные на стандарте беспроводной связи io-homecontrol.</p><p>Уникальный код исключает доступ с «чужого» пульта и пересечение с «чужими» продуктами.</p></td></tr>
<p>Подходит для любых кровель с углом наклона 15-90°.</p>
<tr>
<td>
&nbsp;
</td>
</tr>
<tr><td>
<p><img src="/images/103052-01-exterior_280x210.jpg" border="0" width="280" style="float: left; margin-left: 10px; margin-right: 10px;"><a href="/catalog/mansardnye-okna-velux/zenitnoe-okno">Решение Velux для плоских кровель: зенитное окно</a>. Дополнительное освещение помещений, расположенных непосредственно под плоской или малоуклонной кровлей. <br>Для кровель с уклоном от 0 до 15º.</p>
</tr>
<tr>
<td>
&nbsp;
</td>
</tr>
<tr><td>
<p><a href="/catalog/mansardnye-okna-velux/svetovoy-tonel"><img width="280" src="/images/1503-01-STI_w280.jpg" border="0" style="float: left; margin-left: 10px; margin-right: 10px;">Дневной свет для помещений без окон</a>. Теперь дневной свет доступен даже для помещений, где установка фасадных или мансардных окон невозможна. Например, в ванной, коридоре, офисных комнатах. Световой туннель Velux позволит вам сделать эти комнаты светлыми и комфортными.</p><p>Световой туннель устанавливается в крышу так же, как мансардное окно Velux. В потолок встраивается плафон диаметром 35 см. Эти два элемента соединяются друг с другом с помощью гофрированной (модели TWF/TLF) или фиксированной (жесткой)трубы (модели TWR/TLR) со светоотражающим покрытием. </p><p>Модели TWF/TWR предназначены для установки в профилированный кровельный материал. Модели TLF/TLR– в плоский кровельный материал.</p>
</td></tr>
<tr>
<td>
&nbsp;
</td>
</tr>
<tr><td>
<p style="text-align: justify;"><img src="/templates/vt_marketing/GVT.jpg" border="0" width="280"  style="float: left; margin-left: 10px; margin-right: 10px;">Окно-люк GVT. Это небольшое окно подходит для выхода через него на крышу. Имеет специальную дверь, открывающуюся наружу на 90 градусов. Покрыто полиуретаном черного цвета. Подходит для неотапливаемых чердачных помещений.</p>
<p>Рама изготовлена из черного полиуретана, створка из анодированного алюминия. Встроенный универсальный оклад.</p>
<p>Формат, мм: 54х83 </p>
</td></tr>
<tr>
<td>
&nbsp;
</td>
</tr>
<tr><td>
<p><img src="/templates/vt_marketing/GXL.jpg" border="0" width="280" style="float: left; margin-left: 10px; margin-right: 10px;">Эксплуатационный выход GXL. Это окно имеет свойство выхода на крышу. В ней смонтирована специальная дверь, открывающаяся наружу под углом до 73 градусов. Это окно предназначено для отапливаемой мансарды. Подходит для крыш с углом ската до 55 градусов.</p>
<p>Газовый амортизатор в верхней части оконной створки облегчает ее открывание.</p>
<p>Формат, мм: F06 66х118</p>
</td></tr>
<tr>
<td>
&nbsp;
</td>
</tr>
<tr><td>
<p><img src="/templates/vt_marketing/GTL.jpg" border="0" width="280" style="float: left; margin-left: 10px; margin-right: 10px;">Аварийный выход GTL. Мансардное окно Velux со всеми характеристиками и функциями окна GPL и одновременно аварийный выход на крышу. </p>
<p>Увеличенный угол окрывания - до 73°. При нажатии ручки для аварийного выхода окно автоматически открывается газовыми амортизаторами. </p>
<p>Подходит для любых кровель с углом наклона от 15 до 55°, где необходим технологический или аварийный выход на крышу.</p>
<p>Форматы, мм.: М08 76х140, S08 114x140</p>
</td></tr>
<tr>
<td>
&nbsp;
</td>
</tr>
<tr><td>

<p>У нас разработана отличная система скидок для покупателей кровельных материалов, поэтому мы можем предложить выгодные цены на мансардные окна Velux. А все аксессуары Вы также можете приобрести вместе с окном. </p>
<p>В купить мансардные окна Велюкс в Минске можно в компании «Профгад». На ул. Мележа,5 в красивом новом шоуруме Вы можете получить консультацию, узнать какие модели подходят Вашему дому и посмотреть образцы.</p>
</td></tr>
</table>
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
<p>Компания <b>Metrotlie</b> – бельгийский производитель композитной черепицы, имя которого известно на весь мир. Metrotile начал свою работу в 80-х годах, и за четверть века стал крупнейшим производителем и поставщиком на мировом рынке. Каждый человек, который собирается строить дом уже знает, что представляет собой <b>композитная черепица Метробонд</b>. Такого быстрого роста и успеха компания добилась за счет уникальной запатентованной технологии. Продукция компании имеет международный сертификат качества ISO 9001 и поставляется в 80 стран мира. Metrotile – фамильная компания, которая бережет свои ценности и в тоже время ориентирована на будущее. Metrotile заботится о своем авторитете и постоянно стремится к развитию, внедряя новейшие технологии. Синергизм инноваций и большого опыта является залогом обладания самых высоких рейтингов среди покупателей. Композитную черепицу в Минске можно найти сегодня в большом ассортименте:</p>
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
<p><b>MetroShake</b> - металлочерепица, обладающая четкой фактурой и геометрическими формами, имеет ярко выраженный «полосатый» узор.</p>
<p><b>MetroShingle</b> также создает вид прекрасных древесных материалов.</p>
<p><b>Metroroman</b> - наиболее консервативная коллекция, округлая форма композитной черепицы, отражающая романский стиль в архитектуре.</p>
<h2>Технологичность и эстетичность черепицы Metrotile</h2>
<p><img src="/images/metrotile.jpg" border="0" style="border: 0; float: right; margin-left: 20px; margin-right: 20px;">Для любого хозяина дома и архитектора <b>композитная черепица метробонд</b> - это универсальный материал, применимый в любом проекте, как небольшого частного строения, так и крупного коммерческого или общественного. Разные коллекции этого материала можно применить в любом архитектурном решении - как традиционном, так и ультрасовременном. Черепица имеет множество красивых натуральных оттенков, делая дом элегантным и эффектным. Специальная акриловая глазурь позволяет крыше сохранять цвет на десятилетия благодаря тому, что это покрытие не позволяет проникать ультра-фиолетовым лучам и мелким частицам пыли на сам материал.</p>
<p><b>Композитная черепица Метробонд</b> состоит из нескольких слоев: внутри расположен стальной лист, который с обеих сторон покрыт специальным запатентованным покрытием Magnelis. Такая технология не только защищает материал от химических процессов окружающей среды, но и сохраняет его гибкость, что дает возможность применять его в самых разных и сложных проектах. При этом качество черепицы остается на том же уровне.</p>
<h2>Безопасность и экологичность композитной металлочерепицы Metrotile</h2>
<p>Благодаря постоянной работе над качеством, сегодня композитная черепица метробонд на 100% устойчива к землетрясениям, пожарам, высоким и низким температурам, сильным штормовым ветрам высокого уровня опасности. Также особенностью этой кровли является высокий уровень звукоизоляции. Снег с такой крыши сходит тихо и безопасно, не слышен шум осадков во время дождя, снега и града. Компания Metrotile дает 100% гарантию на молниезащиту.</p>
<h2>Структура композитной черепицы Metrotile</h2>
<p>1. Специальная глазурь.</p>
<p>2.Гранулят из натурального камня</p>
<p>3. Акриловый слой (содержит 65% акрилата). Уникальный секретный рецепт специалистов завода Metrotile.</p>
<p>4. Акриловая грунтовка c каждой стороны, которая защищает от коррозии.</p>
<p>5. Антикоррозийный слой Magnelis</p>
<p>6. Стальной лист.</p>
<p><b>Черепица Metrobond</b> адаптируется под минимальный угол кровли. Композитная кровля <b>metrobond</b> в семь раз легче по сравнению с керамической черепицей и очень проста в установке. Также легкий вес играет большую роль для несущих конструкций, не создавая высокого давления на них. И, в конце концов, транспортировка такого материала является наименее затратной.</p>
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
<h2>Цены на композитную черепицу Metrotile уточняйте по телефонам, указанным на сайте.</h2>



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







elseif ($_SERVER['REQUEST_URI'] == '/catalog/cherdachnye-lestnicy'):
  echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft">
                                         <div class="vt_component_inside" id="yui_3_13_0_1_1466148855218_49">



<!-- Start K2 Item Layout -->
<span id="startOfPageId492"></span>

<div id="k2Container" class="itemView">

  <!-- Plugins: BeforeDisplay -->

  <!-- K2 Plugins: K2BeforeDisplay -->





  <div class="itemHeader" id="yui_3_13_0_1_1466148855218_53">


        <!-- Item title -->
    <div class="itemTitle" id="yui_3_13_0_1_1466148855218_52">
    <h1 class="itemTitle" id="yui_3_13_0_1_1466148855218_51">

      Чердачные лестницы



    </h1>
    </div>


  </div>

  <!-- Plugins: AfterDisplayTitle -->

  <!-- K2 Plugins: K2AfterDisplayTitle -->



  <div class="itemBody" id="yui_3_13_0_1_1466148855218_48">

    <!-- Plugins: BeforeDisplayContent -->

    <!-- K2 Plugins: K2BeforeDisplayContent -->


            <!-- Item introtext -->
    <div class="itemIntroText" id="yui_3_13_0_1_1466148855218_47">
      <p id="yui_3_13_0_1_1466148855218_46"><span><img src="/images/clickFix-block.jpg" border="0" width="250" style="float: left; margin-left: 15px; margin-right: 15px;">ЧЕРДАЧНЫЕ&nbsp;ЛЕСТНИЦЫ&nbsp;помогают получить доступ на чердак и при этом сэкономить пространство в помещении. Все чердачные лестницы VELTA складываются и полностью убираются в потолок, не занимая места ни в жилом помещении, ни на чердаке. </span></p>
<div>&nbsp;<span>В ассортименте чердачных лестницы VELTA представлены модели для разных помещений.</span></div>
<div>&nbsp;</div>
<div>&nbsp;*Сравнение лестницы VELTA "Престиж" с технологией ClickFIX (измеренный коэффициент сопротивления теплопередаче K= 2,0 М2С°/Вт) c лестницей VELTA традиционной конструкции с утеплением 70 мм (K=1,3 М2С°/Вт).</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<p><img src="/images/NLL-2610B-int.jpg" border="0" style="float: left; margin-left: 20px; margin-right: 20px;"><b>Модель "Базовая"</b></p>
<ul>
<li>Самая доступная по цене лестница VELTA</li>
<li>Утепление 20 мм</li>
<li>Крышка люка древесного цвета</li>
</ul>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><b>Основные особенности:</b></p>
<ul>
<li>Уникальная запатентованная технология ClickFIX®</li>
<li>Быстрая и легкая установка с использованием простых инструментов</li>
<li>Крышка люка толщиной 26 мм, выполненная из материала с высокими теплоизоляционными характеристиками, сохраняет тепло до 50% лучше по сравнению с традиционными чердачными лестницами</li>
<li>17 кг, на 25% легче по сравнению с традиционными лестницами</li>
<li>Нет элементов весом более 11 кг, что обеспечивает безопасную установку силами 1 человека</li>
<li>3-х секционная складная лестница не занимает пространства в помещении и на чердаке</li>
<li>Крышка люка древесного цвета с обеих сторон оптимально вписывается в интерьер</li>
<li>Противоскользящие насечки на ножках для безопасного подъема</li>
<li>Спрятанные шарниры обеспечивают легкую покраску крышки люка в случае необходимости</li>
<li>Класс герметичности - 4 (тест при давлении 600 Pa) надежно защищает от сквозняков. Тестированы в соответствии со стандартом EN 12207</li>
<li>Балансировочные пружины обеспечивают легкое открывание-закрывание</li>
<li>Деревянный стержень в комплекте для удобства открывания и закрывания</li>
<li>Насадки на ножках обеспечивают эстетичный внешний вид, устойчивость лестницы и исключают вероятность подрезать лестницу под неверным углом.</li>
<li>Чердачные лестницы протестированы в соответствии с европейским стандартом EN 14975: тестовая нагрузка 265 кг, максимальная рабочая нагрузка 150 kg</li>
<li>Коэффициент сопротивления теплопередаче - 0,72 m2°C/ W (измерена вся конструкция)</li>
</ul>
<p><b>Размеры и чертеж</b></p>
<p><b><img src="/images/2610b-sizes.jpg" border="0" alt=""></b></p>
<table style="width: 100%;" cellspacing="5" cellpadding="8">
<thead>
<tr><th colspan="2">Технические характеристики модели "Базовая" NLL 2610B</th></tr>
</thead>
<tbody>
<tr>
<td><b>Тип</b></td>
<td>складная, 3 секции ClickFIX</td>
</tr>
<tr class="odd">
<td><b>Короб</b></td>
<td>ель</td>
</tr>
<tr>
<td><b>Цвет крышки люка</b></td>
<td>древесный</td>
</tr>
<tr class="odd">
<td rowspan="1"><b>Материал крышки люка</b></td>
<td rowspan="1">«сэндвич» 26 мм (2х3 ХДВ белого цвета, 20 мм полистирол)</td>
</tr>
<tr>
<td rowspan="1"><b>Утепление</b></td>
<td rowspan="1">20 мм</td>
</tr>
<tr class="odd">
<td rowspan="1"><b>Направляющие</b></td>
<td rowspan="1">ель, 21х69 мм</td>
</tr>
<tr>
<td rowspan="1"><b>Ступени</b></td>
<td rowspan="1">бук, 17,5х54 мм</td>
</tr>
<tr class="odd">
<td rowspan="1"><b>Допустимая нагрузка</b></td>
<td rowspan="1">150 кг</td>
</tr>
<tr>
<td rowspan="1"><b>В комплекте</b></td>
<td rowspan="1">насадки на ножки<br>стержень для открывания</td>
</tr>
<tr class="odd">
<td rowspan="1"><b>Опционально</b></td>
<td rowspan="1">дополнительная секция<br>поручень</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><img src="/images/NLL-3610-int.jpg" border="0" style="float: left; margin-left: 20px; margin-right: 20px;"><b>Модель "Стандарт"</b></p>
<ul>
<li>На 40% теплее лестницы "Эконом"</li>
<li>Утепление 30 мм</li>
<li>Крышка люка белого цвета</li>
</ul>
<p><b>Модель "Стандарт-компакт"</b></p>
<ul>
<li>Для помещений, где нет места для установки лестницы стандартного размера</li>
<li>Для установки в проем уменьшенного размера</li>
</ul>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><b>Основные особенности:</b></p>
<ul>
<li>Уникальная запатентованная <b>технология ClickFIX®</b></li>
<li><b>Быстрая и легкая установка </b>с использованием простых инструментов</li>
<li>Крышка люка толщиной 36 мм, выполненная из материала с высокими теплоизоляционными характеристиками, <b>сохраняет тепло до 50% лучше</b> по сравнению с традиционными чердачными лестницами</li>
<li>21 кг, <b>на 25% легче по сравнению с традиционными лестницами</b></li>
<li>Нет элементов весом более 10 кг, что обеспечивает безопасную <b>установку силами 1 человека</b></li>
<li>3-х секционная складная лестница не занимает пространства в помещении и на чердаке</li>
<li>Крышка люка белого цвета с обеих сторон оптимально вписывается в интерьер</li>
<li><b>Противоскользящие насечки </b>на ножках для безопасного подъема</li>
<li>Спрятанные шарниры обеспечивают легкую покраску крышки люка в случае необходимости</li>
<li>Класс герметичности - 4 (тест при давлении 600 Pa)<b> надежно защищает от сквозняков. </b>Тестированы в соответствии со стандартом EN 12207</li>
<li>Балансировочные пружины обеспечивают<b> легкое открывание-закрывание</b></li>
<li>Деревянный стержень в комплекте для удобства открывания и закрывания</li>
<li>Насадки на ножках обеспечивают <b>эстетичный внешний вид</b>, устойчивость лестницы и исключают вероятность подрезать лестницу под неверным углом.</li>
<li>Чердачные лестницы протестированы в соответствии с европейским стандартом EN 14975: тестовая нагрузка 265 кг, максимальная рабочая нагрузка 150 kg</li>
<li>Коэффициент сопротивления теплопередаче - 1,01 m2°C/ W (измерена вся конструкция)</li>
</ul>
<p><b>Размеры и чертеж</b></p>
<p><b><img src="/images/3610-3620-sizes.jpg" border="0" alt=""></b></p>
<table style="width: 100%;" cellspacing="5" cellpadding="8">
<thead>
<tr><th colspan="3">Технические характеристики</th></tr>
</thead>
<tbody>
<tr>
<td rowspan="1">&nbsp;</td>
<td rowspan="1" colspan="1"><b>Стандарт NLL 3610</b></td>
<td rowspan="1"><b>Стандарт-Компакт NLL 3620</b></td>
</tr>
<tr class="odd">
<td><b>Тип</b></td>
<td colspan="1"><span style="font-size: 10.9px;">складная, 3 секции </span><span style="font-size: 10.9px;">Cli</span><span style="font-size: 10.9px;">ck</span><span style="font-size: 10.9px;">FIX</span></td>
<td>складная, 4 секции ClickFIX</td>
</tr>
<tr>
<td><b>Короб</b></td>
<td colspan="1"><span style="font-size: 10.9px;">ель</span></td>
<td>ель</td>
</tr>
<tr class="odd">
<td><b>Цвет крышки люка</b></td>
<td colspan="1">белый</td>
<td>белый</td>
</tr>
<tr>
<td rowspan="1"><b>Материал крышки люка</b></td>
<td rowspan="1" colspan="1"><span style="font-size: 10.9px;">«сэндвич» 36 мм (2х3 ХДВ белого цвета, 30 мм полистирол)</span></td>
<td rowspan="1">«сэндвич» 36 мм (2х3 ХДВ белого цвета, 30 мм полистирол)</td>
</tr>
<tr class="odd">
<td rowspan="1"><b>Утепление</b></td>
<td rowspan="1" colspan="1"><span style="font-size: 10.9px;">3</span><span style="font-size: 10.9px;">0 мм</span></td>
<td rowspan="1">30 мм</td>
</tr>
<tr>
<td rowspan="1"><b>Направляющие</b></td>
<td rowspan="1" colspan="1"><span style="font-size: 10.9px;">ель, 21х69 мм</span></td>
<td rowspan="1">сосна, 21х69 мм</td>
</tr>
<tr class="odd">
<td rowspan="1"><b>Ступени</b></td>
<td rowspan="1" colspan="1"><span style="font-size: 10.9px;">бук, 17,5х54 мм </span></td>
<td rowspan="1">бук, 17,5х54 мм</td>
</tr>
<tr>
<td rowspan="1"><b>Допустимая нагрузка</b></td>
<td rowspan="1" colspan="1">150 кг</td>
<td rowspan="1">150 кг</td>
</tr>
<tr class="odd">
<td rowspan="1"><b>В комплекте</b></td>
<td rowspan="1" colspan="1"><span style="font-size: 10.9px;">насадки на ножки</span><br style="font-size: 10.9px;"><span style="font-size: 10.9px;">стержень для открывания</span></td>
<td rowspan="1">насадки на ножки<br>стержень для открывания</td>
</tr>
<tr>
<td rowspan="1"><b>Опционально</b></td>
<td rowspan="1" colspan="1"><span style="font-size: 10.9px;">поручень<br>дополнительная секция</span></td>
<td rowspan="1">поручень</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><img src="/images/NLL-5620-int.jpg" border="0" style="float: left; margin-left: 20px; margin-right: 20px;"><b>Модель "Комфорт"</b></p>
<ul>
<li>В 2 раза теплее лестницы "Эконом"</li>
<li>Утепление 50 мм</li>
<li>Поручень в комплекте для безопасного подъема по лестнице</li>
</ul>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><b>Основные особенности:</b></p>
<ul>
<li>Уникальная запатентованная технология ClickFIX®</li>
<li>Быстрая и легкая установка с использованием простых инструментов</li>
<li>Крышка люка толщиной 56 мм, выполненная из материала с высокими теплоизоляционными характеристиками, сохраняет тепло до 50% лучше по сравнению с традиционными чердачными лестницами</li>
<li>25 кг, на 25% легче по сравнению с традиционными лестницами</li>
<li>Нет элементов весом более 11 кг, что обеспечивает безопасную установку силами 1 человека</li>
<li>3-х секционная складная лестница не занимает пространства в помещении и на чердаке</li>
<li>Крышка люка белого цвета с обеих сторон оптимально вписывается в интерьер</li>
<li>Противоскользящие насечки на ножках для безопасного подъема</li>
<li>Спрятанные шарниры обеспечивают легкую покраску крышки люка в случае необходимости</li>
<li>Класс герметичности - 4 (тест при давлении 600 Pa) надежно защищает от сквозняков. Тестированы в соответствии со стандартом EN 12207</li>
<li>Балансировочные пружины обеспечивают легкое открывание-закрывание</li>
<li>Деревянный стержень в комплекте для удобства открывания и закрывания</li>
<li>Насадки на ножках обеспечивают эстетичный внешний вид, устойчивость лестницы и исключают вероятность подрезать лестницу под неверным углом.</li>
<li>Чердачные лестницы протестированы в соответствии с европейским стандартом EN 14975: тестовая нагрузка 265 кг, максимальная рабочая нагрузка 150 kg</li>
<li>Коэффициент сопротивления теплопередаче - 1,54 m2°C/ W (измерена вся конструкция)</li>
<li>Поручень в комплекте для дополнительного комфорта и безопасности</li>
</ul>
<p><b>Размеры и чертеж</b></p>
<p><b><img src="/images/5620-sizes.jpg" border="0" alt=""></b></p>
<table style="width: 100%;" cellspacing="5" cellpadding="8">
<thead>
<tr><th colspan="2">Технические характеристики модели "Комфорт" NLL 5620</th></tr>
</thead>
<tbody>
<tr>
<td><b>Тип</b></td>
<td>складная, 3 секции ClickFIX</td>
</tr>
<tr class="odd">
<td><b>Короб</b></td>
<td>ель</td>
</tr>
<tr>
<td><b>Цвет крышки люка</b></td>
<td>белый</td>
</tr>
<tr class="odd">
<td rowspan="1"><b>Материал крышки люка</b></td>
<td rowspan="1">«сэндвич» 56 мм (2х3 ХДВ белого цвета, 50 мм полистирол)</td>
</tr>
<tr>
<td rowspan="1"><b>Утепление</b></td>
<td rowspan="1">50 мм</td>
</tr>
<tr class="odd">
<td rowspan="1"><b>Направляющие</b></td>
<td rowspan="1">сосна, 21х69 мм</td>
</tr>
<tr>
<td rowspan="1"><b>Ступени</b></td>
<td rowspan="1">бук, 17,5х54 мм</td>
</tr>
<tr class="odd">
<td rowspan="1"><b>Допустимая нагрузка</b></td>
<td rowspan="1">150 кг</td>
</tr>
<tr>
<td rowspan="1"><b>В комплекте</b></td>
<td rowspan="1">насадки на ножки<br>стержень для открывания<br>поручень</td>
</tr>
<tr class="odd">
<td rowspan="1"><b>Опционально</b></td>
<td rowspan="1">дополнительная секция</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><img src="/images/NLL-7630-int.jpg" border="0" style="float: left; margin-left: 20px; margin-right: 20px;"><b>Модель "Престиж"</b></p>
<ul>
<li>В 2,8 раз теплее лестницы "Эконом"</li>
<li>Утепление 70 мм</li>
<li>Поручень в комплекте для безопасного подъема по лестнице</li>
<li>Пластиковые наличники в комплекте для идеальной отделки</li>
</ul>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><b>Основные особенности:</b></p>
<ul>
<li>Уникальная запатентованная технология ClickFIX®</li>
<li>Быстрая и легкая установка с использованием простых инструментов</li>
<li>Крышка люка толщиной 76 мм, выполненная из материала с высокими теплоизоляционными характеристиками, сохраняет тепло до 50% лучше по сравнению с традиционными чердачными лестницами</li>
<li>27 кг, на 25% легче по сравнению с традиционными лестницами</li>
<li>Нет элементов весом более 11 кг, что обеспечивает безопасную установку силами 1 человека</li>
<li>3-х секционная складная лестница не занимает пространства в помещении и на чердаке</li>
<li>Крышка люка белого цвета с обеих сторон оптимально вписывается в интерьер</li>
<li>Противоскользящие насечки на ножках для безопасного подъема</li>
<li>Спрятанные шарниры обеспечивают легкую покраску крышки люка в случае необходимости</li>
<li>Класс герметичности - 4 (тест при давлении 600 Pa) надежно защищает от сквозняков. Тестированы в соответствии со стандартом EN 12207</li>
<li>Балансировочные пружины обеспечивают легкое открывание-закрывание</li>
<li>Деревянный стержень в комплекте для удобства открывания и закрывания</li>
<li>Насадки на ножках обеспечивают эстетичный внешний вид, устойчивость лестницы и исключают вероятность подрезать лестницу под неверным углом.</li>
<li>Чердачные лестницы протестированы в соответствии с европейским стандартом EN 14975: тестовая нагрузка 265 кг, максимальная рабочая нагрузка 150 kg</li>
<li>Коэффициент сопротивления теплопередаче - 1,54 m2°C/ W (измерена вся конструкция)</li>
<li>Поручень в комплекте для дополнительного комфорта и безопасности</li>
<li>2 контура уплотнения для защиты от сквозняков</li>
<li>Пластиковые наличники для идеальной отделки</li>
</ul>
<p><b>Размеры и чертеж</b></p>
<p><img src="/images/7630-sizes.jpg" border="0" alt=""></p>
<table style="width: 100%;" cellspacing="5" cellpadding="8">
<thead>
<tr><th colspan="2">Технические характеристики модели "Престиж" NLL 7630</th></tr>
</thead>
<tbody>
<tr>
<td><b>Тип</b></td>
<td>складная, 3 секции ClickFIX</td>
</tr>
<tr class="odd">
<td><b>Короб</b></td>
<td>окрашенная белой краской ель</td>
</tr>
<tr>
<td><b>Цвет крышки люка</b></td>
<td>белый</td>
</tr>
<tr class="odd">
<td rowspan="1"><b>Материал крышки люка</b></td>
<td rowspan="1">«сэндвич» 76 мм (2х3 ХДВ белого цвета, 70 мм полистирол)</td>
</tr>
<tr>
<td rowspan="1"><b>Утепление</b></td>
<td rowspan="1">70 мм</td>
</tr>
<tr class="odd">
<td rowspan="1"><b>Направляющие</b></td>
<td rowspan="1">сосна, 21х84 мм</td>
</tr>
<tr>
<td rowspan="1"><b>Ступени</b></td>
<td rowspan="1">бук, 17,5х69 мм</td>
</tr>
<tr class="odd">
<td rowspan="1"><b>Допустимая нагрузка</b></td>
<td rowspan="1">150 кг</td>
</tr>
<tr>
<td rowspan="1"><b>В комплекте</b></td>
<td rowspan="1">насадки на ножки<br>стержень для открывания<br>поручень<br>пластиковые наличники</td>
</tr>
<tr class="odd">
<td rowspan="1"><b>Опционально</b></td>
<td rowspan="1">дополнительная секция</td>
</tr>
</tbody>
</table>	  </div>
            <!-- Item fulltext -->
    <div class="itemFullText">

<p><span><img src="/images/clickFix-block.jpg" border="0" width="250" style="float: left; margin-left: 15px; margin-right: 15px;">ЧЕРДАЧНЫЕ&nbsp;ЛЕСТНИЦЫ&nbsp;помогают получить доступ на чердак и при этом сэкономить пространство в помещении. Все чердачные лестницы VELTA складываются и полностью убираются в потолок, не занимая места ни в жилом помещении, ни на чердаке. </span></p>  <div>&nbsp;<span>В ассортименте чердачных лестницы VELTA представлены модели для разных помещений.</span></div>  <div>&nbsp;</div>  <div>&nbsp;*Сравнение лестницы VELTA "Престиж" с технологией ClickFIX (измеренный коэффициент сопротивления теплопередаче K= 2,0 М2С°/Вт) c лестницей VELTA традиционной конструкции с утеплением 70 мм (K=1,3 М2С°/Вт).</div>  <div>&nbsp;</div>  <div>&nbsp;</div>  <div>&nbsp;</div>  <div>&nbsp;</div>  <div>&nbsp;</div>  <div>&nbsp;</div>  <div>&nbsp;</div>  <div>&nbsp;</div>  <div>&nbsp;</div>  <div>&nbsp;</div>  <div>&nbsp;</div>  <div>&nbsp;</div>  <p><img src="/images/NLL-2610B-int.jpg" border="0" style="float: left; margin-left: 20px; margin-right: 20px;"><b>Модель "Базовая"</b></p>  <ul>  <li>Самая доступная по цене лестница VELTA</li>  <li>Утепление 20 мм</li>  <li>Крышка люка древесного цвета</li>  </ul>  <p>&nbsp;</p>  <p>&nbsp;</p>  <p>&nbsp;</p>  <p>&nbsp;</p>  <p><b>Основные особенности:</b></p>  <ul>  <li>Уникальная запатентованная технология ClickFIX®</li>  <li>Быстрая и легкая установка с использованием простых инструментов</li>  <li>Крышка люка толщиной 26 мм, выполненная из материала с высокими теплоизоляционными характеристиками, сохраняет тепло до 50% лучше по сравнению с традиционными чердачными лестницами</li>  <li>17 кг, на 25% легче по сравнению с традиционными лестницами</li>  <li>Нет элементов весом более 11 кг, что обеспечивает безопасную установку силами 1 человека</li>  <li>3-х секционная складная лестница не занимает пространства в помещении и на чердаке</li>  <li>Крышка люка древесного цвета с обеих сторон оптимально вписывается в интерьер</li>  <li>Противоскользящие насечки на ножках для безопасного подъема</li>  <li>Спрятанные шарниры обеспечивают легкую покраску крышки люка в случае необходимости</li>  <li>Класс герметичности - 4 (тест при давлении 600 Pa) надежно защищает от сквозняков. Тестированы в соответствии со стандартом EN 12207</li>  <li>Балансировочные пружины обеспечивают легкое открывание-закрывание</li>  <li>Деревянный стержень в комплекте для удобства открывания и закрывания</li>  <li>Насадки на ножках обеспечивают эстетичный внешний вид, устойчивость лестницы и исключают вероятность подрезать лестницу под неверным углом.</li>  <li>Чердачные лестницы протестированы в соответствии с европейским стандартом EN 14975: тестовая нагрузка 265 кг, максимальная рабочая нагрузка 150 kg</li>  <li>Коэффициент сопротивления теплопередаче - 0,72 m2°C/ W (измерена вся конструкция)</li>  </ul>  <p><b>Размеры и чертеж</b></p>  <p><b><img src="/images/2610b-sizes.jpg" border="0" alt=""></b></p>  <table style="width: 100%;" cellspacing="5" cellpadding="8">  <thead>  <tr><th colspan="2">Технические характеристики модели "Базовая" NLL 2610B</th></tr>  </thead>  <tbody>  <tr>  <td><b>Тип</b></td>  <td>складная, 3 секции ClickFIX</td>  </tr>  <tr class="odd">  <td><b>Короб</b></td>  <td>ель</td>  </tr>  <tr>  <td><b>Цвет крышки люка</b></td>  <td>древесный</td>  </tr>  <tr class="odd">  <td rowspan="1"><b>Материал крышки люка</b></td>  <td rowspan="1">«сэндвич» 26 мм (2х3 ХДВ белого цвета, 20 мм полистирол)</td>  </tr>  <tr>  <td rowspan="1"><b>Утепление</b></td>  <td rowspan="1">20 мм</td>  </tr>  <tr class="odd">  <td rowspan="1"><b>Направляющие</b></td>  <td rowspan="1">ель, 21х69 мм</td>  </tr>  <tr>  <td rowspan="1"><b>Ступени</b></td>  <td rowspan="1">бук, 17,5х54 мм</td>  </tr>  <tr class="odd">  <td rowspan="1"><b>Допустимая нагрузка</b></td>  <td rowspan="1">150 кг</td>  </tr>  <tr>  <td rowspan="1"><b>В комплекте</b></td>  <td rowspan="1">насадки на ножки<br>стержень для открывания</td>  </tr>  <tr class="odd">  <td rowspan="1"><b>Опционально</b></td>  <td rowspan="1">дополнительная секция<br>поручень</td>  </tr>  </tbody>  </table>  <p>&nbsp;</p>  <p>&nbsp;</p>  <p><img src="/images/NLL-3610-int.jpg" border="0" style="float: left; margin-left: 20px; margin-right: 20px;"><b>Модель "Стандарт"</b></p>  <ul>  <li>На 40% теплее лестницы "Эконом"</li>  <li>Утепление 30 мм</li>  <li>Крышка люка белого цвета</li>  </ul>  <p><b>Модель "Стандарт-компакт"</b></p>  <ul>  <li>Для помещений, где нет места для установки лестницы стандартного размера</li>  <li>Для установки в проем уменьшенного размера</li>  </ul>  <p>&nbsp;</p>  <p>&nbsp;</p>  <p><b>Основные особенности:</b></p>  <ul>  <li>Уникальная запатентованная <b>технология ClickFIX®</b></li>  <li><b>Быстрая и легкая установка </b>с использованием простых инструментов</li>  <li>Крышка люка толщиной 36 мм, выполненная из материала с высокими теплоизоляционными характеристиками, <b>сохраняет тепло до 50% лучше</b> по сравнению с традиционными чердачными лестницами</li>  <li>21 кг, <b>на 25% легче по сравнению с традиционными лестницами</b></li>  <li>Нет элементов весом более 10 кг, что обеспечивает безопасную <b>установку силами 1 человека</b></li>  <li>3-х секционная складная лестница не занимает пространства в помещении и на чердаке</li>  <li>Крышка люка белого цвета с обеих сторон оптимально вписывается в интерьер</li>  <li><b>Противоскользящие насечки </b>на ножках для безопасного подъема</li>  <li>Спрятанные шарниры обеспечивают легкую покраску крышки люка в случае необходимости</li>  <li>Класс герметичности - 4 (тест при давлении 600 Pa)<b> надежно защищает от сквозняков. </b>Тестированы в соответствии со стандартом EN 12207</li>  <li>Балансировочные пружины обеспечивают<b> легкое открывание-закрывание</b></li>  <li>Деревянный стержень в комплекте для удобства открывания и закрывания</li>  <li>Насадки на ножках обеспечивают <b>эстетичный внешний вид</b>, устойчивость лестницы и исключают вероятность подрезать лестницу под неверным углом.</li>  <li>Чердачные лестницы протестированы в соответствии с европейским стандартом EN 14975: тестовая нагрузка 265 кг, максимальная рабочая нагрузка 150 kg</li>  <li>Коэффициент сопротивления теплопередаче - 1,01 m2°C/ W (измерена вся конструкция)</li>  </ul>  <p><b>Размеры и чертеж</b></p>  <p><b><img src="/images/3610-3620-sizes.jpg" border="0" alt=""></b></p>  <table style="width: 100%;" cellspacing="5" cellpadding="8">  <thead>  <tr><th colspan="3">Технические характеристики</th></tr>  </thead>  <tbody>  <tr>  <td rowspan="1">&nbsp;</td>  <td rowspan="1" colspan="1"><b>Стандарт NLL 3610</b></td>  <td rowspan="1"><b>Стандарт-Компакт NLL 3620</b></td>  </tr>  <tr class="odd">  <td><b>Тип</b></td>  <td colspan="1"><span style="font-size: 10.9px;">складная, 3 секции </span><span style="font-size: 10.9px;">Cli</span><span style="font-size: 10.9px;">ck</span><span style="font-size: 10.9px;">FIX</span></td>  <td>складная, 4 секции ClickFIX</td>  </tr>  <tr>  <td><b>Короб</b></td>  <td colspan="1"><span style="font-size: 10.9px;">ель</span></td>  <td>ель</td>  </tr>  <tr class="odd">  <td><b>Цвет крышки люка</b></td>  <td colspan="1">белый</td>  <td>белый</td>  </tr>  <tr>  <td rowspan="1"><b>Материал крышки люка</b></td>  <td rowspan="1" colspan="1"><span style="font-size: 10.9px;">«сэндвич» 36 мм (2х3 ХДВ белого цвета, 30 мм полистирол)</span></td>  <td rowspan="1">«сэндвич» 36 мм (2х3 ХДВ белого цвета, 30 мм полистирол)</td>  </tr>  <tr class="odd">  <td rowspan="1"><b>Утепление</b></td>  <td rowspan="1" colspan="1"><span style="font-size: 10.9px;">3</span><span style="font-size: 10.9px;">0 мм</span></td>  <td rowspan="1">30 мм</td>  </tr>  <tr>  <td rowspan="1"><b>Направляющие</b></td>  <td rowspan="1" colspan="1"><span style="font-size: 10.9px;">ель, 21х69 мм</span></td>  <td rowspan="1">сосна, 21х69 мм</td>  </tr>  <tr class="odd">  <td rowspan="1"><b>Ступени</b></td>  <td rowspan="1" colspan="1"><span style="font-size: 10.9px;">бук, 17,5х54 мм </span></td>  <td rowspan="1">бук, 17,5х54 мм</td>  </tr>  <tr>  <td rowspan="1"><b>Допустимая нагрузка</b></td>  <td rowspan="1" colspan="1">150 кг</td>  <td rowspan="1">150 кг</td>  </tr>  <tr class="odd">  <td rowspan="1"><b>В комплекте</b></td>  <td rowspan="1" colspan="1"><span style="font-size: 10.9px;">насадки на ножки</span><br style="font-size: 10.9px;"><span style="font-size: 10.9px;">стержень для открывания</span></td>  <td rowspan="1">насадки на ножки<br>стержень для открывания</td>  </tr>  <tr>  <td rowspan="1"><b>Опционально</b></td>  <td rowspan="1" colspan="1"><span style="font-size: 10.9px;">поручень<br>дополнительная секция</span></td>  <td rowspan="1">поручень</td>  </tr>  </tbody>  </table>  <p>&nbsp;</p>  <p>&nbsp;</p>  <p><img src="/images/NLL-5620-int.jpg" border="0" style="float: left; margin-left: 20px; margin-right: 20px;"><b>Модель "Комфорт"</b></p>  <ul>  <li>В 2 раза теплее лестницы "Эконом"</li>  <li>Утепление 50 мм</li>  <li>Поручень в комплекте для безопасного подъема по лестнице</li>  </ul>  <p>&nbsp;</p>  <p>&nbsp;</p>  <p>&nbsp;</p>  <p>&nbsp;</p>  <p><b>Основные особенности:</b></p>  <ul>  <li>Уникальная запатентованная технология ClickFIX®</li>  <li>Быстрая и легкая установка с использованием простых инструментов</li>  <li>Крышка люка толщиной 56 мм, выполненная из материала с высокими теплоизоляционными характеристиками, сохраняет тепло до 50% лучше по сравнению с традиционными чердачными лестницами</li>  <li>25 кг, на 25% легче по сравнению с традиционными лестницами</li>  <li>Нет элементов весом более 11 кг, что обеспечивает безопасную установку силами 1 человека</li>  <li>3-х секционная складная лестница не занимает пространства в помещении и на чердаке</li>  <li>Крышка люка белого цвета с обеих сторон оптимально вписывается в интерьер</li>  <li>Противоскользящие насечки на ножках для безопасного подъема</li>  <li>Спрятанные шарниры обеспечивают легкую покраску крышки люка в случае необходимости</li>  <li>Класс герметичности - 4 (тест при давлении 600 Pa) надежно защищает от сквозняков. Тестированы в соответствии со стандартом EN 12207</li>  <li>Балансировочные пружины обеспечивают легкое открывание-закрывание</li>  <li>Деревянный стержень в комплекте для удобства открывания и закрывания</li>  <li>Насадки на ножках обеспечивают эстетичный внешний вид, устойчивость лестницы и исключают вероятность подрезать лестницу под неверным углом.</li>  <li>Чердачные лестницы протестированы в соответствии с европейским стандартом EN 14975: тестовая нагрузка 265 кг, максимальная рабочая нагрузка 150 kg</li>  <li>Коэффициент сопротивления теплопередаче - 1,54 m2°C/ W (измерена вся конструкция)</li>  <li>Поручень в комплекте для дополнительного комфорта и безопасности</li>  </ul>  <p><b>Размеры и чертеж</b></p>  <p><b><img src="/images/5620-sizes.jpg" border="0" alt=""></b></p>  <table style="width: 100%;" cellspacing="5" cellpadding="8">  <thead>  <tr><th colspan="2">Технические характеристики модели "Комфорт" NLL 5620</th></tr>  </thead>  <tbody>  <tr>  <td><b>Тип</b></td>  <td>складная, 3 секции ClickFIX</td>  </tr>  <tr class="odd">  <td><b>Короб</b></td>  <td>ель</td>  </tr>  <tr>  <td><b>Цвет крышки люка</b></td>  <td>белый</td>  </tr>  <tr class="odd">  <td rowspan="1"><b>Материал крышки люка</b></td>  <td rowspan="1">«сэндвич» 56 мм (2х3 ХДВ белого цвета, 50 мм полистирол)</td>  </tr>  <tr>  <td rowspan="1"><b>Утепление</b></td>  <td rowspan="1">50 мм</td>  </tr>  <tr class="odd">  <td rowspan="1"><b>Направляющие</b></td>  <td rowspan="1">сосна, 21х69 мм</td>  </tr>  <tr>  <td rowspan="1"><b>Ступени</b></td>  <td rowspan="1">бук, 17,5х54 мм</td>  </tr>  <tr class="odd">  <td rowspan="1"><b>Допустимая нагрузка</b></td>  <td rowspan="1">150 кг</td>  </tr>  <tr>  <td rowspan="1"><b>В комплекте</b></td>  <td rowspan="1">насадки на ножки<br>стержень для открывания<br>поручень</td>  </tr>  <tr class="odd">  <td rowspan="1"><b>Опционально</b></td>  <td rowspan="1">дополнительная секция</td>  </tr>  </tbody>  </table>  <p>&nbsp;</p>  <p>&nbsp;</p>  <p><img src="/images/NLL-7630-int.jpg" border="0" style="float: left; margin-left: 20px; margin-right: 20px;"><b>Модель "Престиж"</b></p>  <ul>  <li>В 2,8 раз теплее лестницы "Эконом"</li>  <li>Утепление 70 мм</li>  <li>Поручень в комплекте для безопасного подъема по лестнице</li>  <li>Пластиковые наличники в комплекте для идеальной отделки</li>  </ul>  <p>&nbsp;</p>  <p>&nbsp;</p>  <p>&nbsp;</p>  <p>&nbsp;</p>  <p><b>Основные особенности:</b></p>  <ul>  <li>Уникальная запатентованная технология ClickFIX®</li>  <li>Быстрая и легкая установка с использованием простых инструментов</li>  <li>Крышка люка толщиной 76 мм, выполненная из материала с высокими теплоизоляционными характеристиками, сохраняет тепло до 50% лучше по сравнению с традиционными чердачными лестницами</li>  <li>27 кг, на 25% легче по сравнению с традиционными лестницами</li>  <li>Нет элементов весом более 11 кг, что обеспечивает безопасную установку силами 1 человека</li>  <li>3-х секционная складная лестница не занимает пространства в помещении и на чердаке</li>  <li>Крышка люка белого цвета с обеих сторон оптимально вписывается в интерьер</li>  <li>Противоскользящие насечки на ножках для безопасного подъема</li>  <li>Спрятанные шарниры обеспечивают легкую покраску крышки люка в случае необходимости</li>  <li>Класс герметичности - 4 (тест при давлении 600 Pa) надежно защищает от сквозняков. Тестированы в соответствии со стандартом EN 12207</li>  <li>Балансировочные пружины обеспечивают легкое открывание-закрывание</li>  <li>Деревянный стержень в комплекте для удобства открывания и закрывания</li>  <li>Насадки на ножках обеспечивают эстетичный внешний вид, устойчивость лестницы и исключают вероятность подрезать лестницу под неверным углом.</li>  <li>Чердачные лестницы протестированы в соответствии с европейским стандартом EN 14975: тестовая нагрузка 265 кг, максимальная рабочая нагрузка 150 kg</li>  <li>Коэффициент сопротивления теплопередаче - 1,54 m2°C/ W (измерена вся конструкция)</li>  <li>Поручень в комплекте для дополнительного комфорта и безопасности</li>  <li>2 контура уплотнения для защиты от сквозняков</li>  <li>Пластиковые наличники для идеальной отделки</li>  </ul>  <p><b>Размеры и чертеж</b></p>  <p><img src="/images/7630-sizes.jpg" border="0" alt=""></p>  <table style="width: 100%;" cellspacing="5" cellpadding="8">  <thead>  <tr><th colspan="2">Технические характеристики модели "Престиж" NLL 7630</th></tr>  </thead>  <tbody>  <tr>  <td><b>Тип</b></td>  <td>складная, 3 секции ClickFIX</td>  </tr>  <tr class="odd">  <td><b>Короб</b></td>  <td>окрашенная белой краской ель</td>  </tr>  <tr>  <td><b>Цвет крышки люка</b></td>  <td>белый</td>  </tr>  <tr class="odd">  <td rowspan="1"><b>Материал крышки люка</b></td>  <td rowspan="1">«сэндвич» 76 мм (2х3 ХДВ белого цвета, 70 мм полистирол)</td>  </tr>  <tr>  <td rowspan="1"><b>Утепление</b></td>  <td rowspan="1">70 мм</td>  </tr>  <tr class="odd">  <td rowspan="1"><b>Направляющие</b></td>  <td rowspan="1">сосна, 21х84 мм</td>  </tr>  <tr>  <td rowspan="1"><b>Ступени</b></td>  <td rowspan="1">бук, 17,5х69 мм</td>  </tr>  <tr class="odd">  <td rowspan="1"><b>Допустимая нагрузка</b></td>  <td rowspan="1">150 кг</td>  </tr>  <tr>  <td rowspan="1"><b>В комплекте</b></td>  <td rowspan="1">насадки на ножки<br>стержень для открывания<br>поручень<br>пластиковые наличники</td>  </tr>  <tr class="odd">  <td rowspan="1"><b>Опционально</b></td>  <td rowspan="1">дополнительная секция</td>  </tr>  </tbody>  </table>
    </div>

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
<!-- End K2 Item Layout -->
 </div>
                                    </div></div>
 </div>
';







elseif ($_SERVER['REQUEST_URI'] == '/catalog/fasadnye-materialy/smesi-sopro/sopro-s-no-1-400'):
  echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft">
                                         <div class="vt_component_inside" id="yui_3_13_0_1_1466154323185_49">



<!-- Start K2 Item Layout -->
<span id="startOfPageId443"></span>

<div id="k2Container" class="itemView">

  <!-- Plugins: BeforeDisplay -->

  <!-- K2 Plugins: K2BeforeDisplay -->





  <div class="itemHeader" id="yui_3_13_0_1_1466154323185_48">


        <!-- Item title -->
    <div class="itemTitle" id="yui_3_13_0_1_1466154323185_47">
    <h1 class="itemTitle" id="yui_3_13_0_1_1466154323185_46">

      Высокоэластичный клеевой раствор



    </h1>
    </div>


  </div>

  <!-- Plugins: AfterDisplayTitle -->

  <!-- K2 Plugins: K2AfterDisplayTitle -->



  <div class="itemBody">

    <!-- Plugins: BeforeDisplayContent -->

    <!-- K2 Plugins: K2BeforeDisplayContent -->


            <!-- Item introtext -->
    <div class="itemIntroText">
      <table style="width: 537px;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="padding: 3px;" valign="top">
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td><img src="/images/sopro-1.jpg" border="0" style="float: right; margin-left: 15px; margin-right: 15px;">Высокоэластичный клеевой раствор на основе цемента для укладки крупноформатных плиток и керамогранита, клинкера и натурального камня стойкого к прокрашиванию.</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>
<ul>
<li class="dbdot">Классификация С2 ТЕ согл. DIN-EN 12004</li>
<li class="dbdot">Классификация S1 согл. DIN-EN 12002</li>
<li class="dbdot">Соответствует немецким требованиям к высокоэластичным растворам, что подтверждает знак "FLEXMORTEL"</li>
<li class="dbdot">Высокая стабильность на вертикальных основаниях благодаря армирующиv волокнам</li>
<li class="dbdot">Для облицовки фасадов зданий, балконов и террас</li>
<li class="dbdot">Для крупноформатного керамогранита</li>
<li class="dbdot">Для теплых полов</li>
<li class="dbdot">Для бассейнов и резервуаров с питьевой водой</li>
<li class="dbdot">Для внутренних и наружных работ</li>
</ul>
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
</td>
<td class="g_vll" width="1">&nbsp;</td>
</tr>
</tbody>
</table>
<table style="width: 537px;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="g_vlr" colspan="3"><img src="http://ru.sopro.com/content/pictures/global.box/bn.gif" border="0" alt="" width="1" height="1"></td>
</tr>
<tr>
<td class="g_vll" width="1">&nbsp;</td>
<td style="padding: 3px;" valign="top">
<table style="width: 100%;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td><b>Расход, потребление - ок. 1,1 кг/м² на миллиметр толщины слоя<br></b></td>
</tr>
<tr>
<td><b class="spf_x">Упаковка</b>&nbsp; - Мешок 25 кг <br> <b class="spf_x">Поставка - </b>Поддоны 1000 кг</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>	  </div>
            <!-- Item fulltext -->
    <div class="itemFullText">

<table style="width: 537px;" border="0" cellspacing="0" cellpadding="0">  <tbody>  <tr>  <td style="padding: 3px;" valign="top">  <table border="0" cellspacing="0" cellpadding="0">  <tbody>  <tr>  <td><img src="/images/sopro-1.jpg" border="0" style="float: right; margin-left: 15px; margin-right: 15px;">Высокоэластичный клеевой раствор на основе цемента для укладки крупноформатных плиток и керамогранита, клинкера и натурального камня стойкого к прокрашиванию.</td>  </tr>  <tr>  <td>&nbsp;</td>  </tr>  <tr>  <td>  <ul>  <li class="dbdot">Классификация С2 ТЕ согл. DIN-EN 12004</li>  <li class="dbdot">Классификация S1 согл. DIN-EN 12002</li>  <li class="dbdot">Соответствует немецким требованиям к высокоэластичным растворам, что подтверждает знак "FLEXMORTEL"</li>  <li class="dbdot">Высокая стабильность на вертикальных основаниях благодаря армирующиv волокнам</li>  <li class="dbdot">Для облицовки фасадов зданий, балконов и террас</li>  <li class="dbdot">Для крупноформатного керамогранита</li>  <li class="dbdot">Для теплых полов</li>  <li class="dbdot">Для бассейнов и резервуаров с питьевой водой</li>  <li class="dbdot">Для внутренних и наружных работ</li>  </ul>  </td>  </tr>  <tr>  <td>&nbsp;</td>  </tr>  </tbody>  </table>  </td>  <td class="g_vll" width="1">&nbsp;</td>  </tr>  </tbody>  </table>  <table style="width: 537px;" border="0" cellspacing="0" cellpadding="0">  <tbody>  <tr>  <td class="g_vlr" colspan="3"><img src="http://ru.sopro.com/content/pictures/global.box/bn.gif" border="0" alt="" width="1" height="1"></td>  </tr>  <tr>  <td class="g_vll" width="1">&nbsp;</td>  <td style="padding: 3px;" valign="top">  <table style="width: 100%;" border="0" cellspacing="0" cellpadding="0">  <tbody>  <tr>  <td><b>Расход, потребление - ок. 1,1 кг/м² на миллиметр толщины слоя<br></b></td>  </tr>  <tr>  <td><b class="spf_x">Упаковка</b>&nbsp; - Мешок 25 кг <br> <b class="spf_x">Поставка - </b>Поддоны 1000 кг</td>  </tr>  </tbody>  </table>  </td>  </tr>  </tbody>  </table>
    </div>

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
<!-- End K2 Item Layout -->
 </div>
                                    </div> </div>
';

elseif ($_SERVER['REQUEST_URI'] == '/catalog/mansardnye-okna-velux/glr-3073'):
  echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft">
                                         <div class="vt_component_inside" id="yui_3_13_0_1_1466154614334_49">



<!-- Start K2 Item Layout -->
<span id="startOfPageId519"></span>

<div id="k2Container" class="itemView">

  <!-- Plugins: BeforeDisplay -->

  <!-- K2 Plugins: K2BeforeDisplay -->





  <div class="itemHeader" id="yui_3_13_0_1_1466154614334_48">


        <!-- Item title -->
    <div class="itemTitle" id="yui_3_13_0_1_1466154614334_47">
    <h1 class="itemTitle" id="yui_3_13_0_1_1466154614334_46">

      GLR 3073 Ручка сверху



    </h1>
    </div>


  </div>

  <!-- Plugins: AfterDisplayTitle -->

  <!-- K2 Plugins: K2AfterDisplayTitle -->



  <div class="itemBody">

    <!-- Plugins: BeforeDisplayContent -->

    <!-- K2 Plugins: K2BeforeDisplayContent -->


            <!-- Item introtext -->
    <div class="itemIntroText">
      <p><strong><img src="/images/glr_cross sale_124979 01_940x940.png" border="0" width="350" style="float: right; margin-left: 12px; margin-right: 12px;">Мансардное окно GLR 3073</strong>- мансардные окна линии VELUX OPTIMA Комфорт обладают всеми свойствами окон линии VELUX OPTIMA, а кроме того имеют дополнительные преимущества. Это мансардные окна с современным дизайном, безопасным ламинированным стеклопакетом «триплекс» и дополнительной снеговой защитой по выгодной цене.</p>
<p><strong>Описание Мансардного окна GLR 3073:</strong></p>
<p>- Ручка вверху: удобная ручка-планка (Алюминиевая)<br>- Деревянная рама<br>- Больше света на 10%<br>- Встроенная вентиляция<br>- Закаленное стекло: защита от града<br>- Фильтр от пыли и насекомых<br>- Дополнительная снеговая защита и защита от сквозняков<br>- Безопасный стеклопакет "Триплекс"<br>- Стильный дизайн</p>
<div style="float: left; width: 430px; display: block;">
<h3>Как выбрать удобный для вас тип открывания?</h3>
<p>-Классическая верхняя ручка-планка VELUX идеальна при установке окна на оптимальной высоте 90-120 см от пола. Рекомендовано ГОСТом.<br>-Окна с нижней ручкой удобны в случае, если окно расположено на высоте от 130 до 160 см от пола. Например, если в мансарде высокий пристенок.<br>-Классическая верхняя ручка-планка VELUX идеальна при установке окна на оптимальной высоте 90-120 см от пола. Рекомендовано ГОСТом.<br>-Окна с нижней ручкой удобны в случае, если окно расположено на высоте от 130 до 160 см от пола. Например, если в мансарде высокий пристенок.</p>
</div>
<div style="float: left; width: 380px; display: block;">&nbsp;</div>
<div style="text-align: center;">
<div style="overflow: hidden; display: inline-block; text-align: left;">
<div style="float: left; width: 260px; padding: 5px; display: block;">
<h4>Дополнительная снеговая защита</h4>
<img src="/images/121190 01_940x940.jpg" border="0" width="250" style="vertical-align: baseline; padding: 5px;">
<p>Если мансардное окно установлено в малоуклонную крышу и нерегулярно очищается от снега и льда, то конструкция окна подвергается дополнительной нагрузке в период таяния снега и перепада температур. Для таких случаев мы предусмотрели дополнительную снеговоую защиту. Она гарантирует наилучшую защиту окон от тающего снега. Окна с данной технологией, дополнительным уплотнением от сквозняков и стойким к граду стеклопакетом – идеальный выбор для регионов с суровыми зимами.</p>
</div>
<div style="float: left; width: 260px; padding: 5px; display: block;">
<h4 style="text-align: left;">Стильный дизайн</h4>
<img src="/images/glr_glr b_stylish  interior design _feature_126670_126680_940x940.jpg" border="0" width="250" style="vertical-align: baseline; padding: 5px;">
<p>Любители современного дизайна высоко оценят внешний вид окон VELUX OPTIMA Комфорт: безупречно гладкую поверхность дерева и конструкцию с элегантной тонкой рамой. Вентиляционный клапан имеет два положения для проветривания, выполнен в лаконичном стиле с плавными линиями и закругленными краями.</p>
</div>
<div style="float: left; width: 260px; padding: 5px; display: block;">
<h4>Безопасный стеклопакет</h4>
<img src="/images/safety pane_119036 01_940x940.jpg" border="0" width="250" style="vertical-align: baseline; padding: 5px;">
<p>Любители современного дизайна высоко оценят внешний вид окон VELUX OPTIMA Комфорт: безупречно гладкую поверхность дерева и конструкцию с элегантной тонкой рамой. Вентиляционный клапан имеет два положения для проветривания, выполнен в лаконичном стиле с плавными линиями и закругленными краями.</p>
</div>
</div>
</div>
<p>&nbsp;</p>
<h3>Мансардное окно GLR 3073: угол наклона кровли, размеры окон, площадь остекления</h3>
<p><img src="/images/GLR 3073IS.jpg" border="0" style="width: 160px; height: 363px; float: left;"></p>	  </div>
            <!-- Item fulltext -->
    <div class="itemFullText">

<p><strong><img src="/images/glr_cross sale_124979 01_940x940.png" border="0" width="350" style="float: right; margin-left: 12px; margin-right: 12px;">Мансардное окно GLR 3073</strong>- мансардные окна линии VELUX OPTIMA Комфорт обладают всеми свойствами окон линии VELUX OPTIMA, а кроме того имеют дополнительные преимущества. Это мансардные окна с современным дизайном, безопасным ламинированным стеклопакетом «триплекс» и дополнительной снеговой защитой по выгодной цене.</p>  <p><strong>Описание Мансардного окна GLR 3073:</strong></p>  <p>- Ручка вверху: удобная ручка-планка (Алюминиевая)<br>- Деревянная рама<br>- Больше света на 10%<br>- Встроенная вентиляция<br>- Закаленное стекло: защита от града<br>- Фильтр от пыли и насекомых<br>- Дополнительная снеговая защита и защита от сквозняков<br>- Безопасный стеклопакет "Триплекс"<br>- Стильный дизайн</p>  <div style="float: left; width: 430px; display: block;">  <h3>Как выбрать удобный для вас тип открывания?</h3>  <p>-Классическая верхняя ручка-планка VELUX идеальна при установке окна на оптимальной высоте 90-120 см от пола. Рекомендовано ГОСТом.<br>-Окна с нижней ручкой удобны в случае, если окно расположено на высоте от 130 до 160 см от пола. Например, если в мансарде высокий пристенок.<br>-Классическая верхняя ручка-планка VELUX идеальна при установке окна на оптимальной высоте 90-120 см от пола. Рекомендовано ГОСТом.<br>-Окна с нижней ручкой удобны в случае, если окно расположено на высоте от 130 до 160 см от пола. Например, если в мансарде высокий пристенок.</p>  </div>  <div style="float: left; width: 380px; display: block;">&nbsp;</div>  <div style="text-align: center;">  <div style="overflow: hidden; display: inline-block; text-align: left;">  <div style="float: left; width: 260px; padding: 5px; display: block;">  <h4>Дополнительная снеговая защита</h4>  <img src="/images/121190 01_940x940.jpg" border="0" width="250" style="vertical-align: baseline; padding: 5px;">  <p>Если мансардное окно установлено в малоуклонную крышу и нерегулярно очищается от снега и льда, то конструкция окна подвергается дополнительной нагрузке в период таяния снега и перепада температур. Для таких случаев мы предусмотрели дополнительную снеговоую защиту. Она гарантирует наилучшую защиту окон от тающего снега. Окна с данной технологией, дополнительным уплотнением от сквозняков и стойким к граду стеклопакетом – идеальный выбор для регионов с суровыми зимами.</p>  </div>  <div style="float: left; width: 260px; padding: 5px; display: block;">  <h4 style="text-align: left;">Стильный дизайн</h4>  <img src="/images/glr_glr b_stylish  interior design _feature_126670_126680_940x940.jpg" border="0" width="250" style="vertical-align: baseline; padding: 5px;">  <p>Любители современного дизайна высоко оценят внешний вид окон VELUX OPTIMA Комфорт: безупречно гладкую поверхность дерева и конструкцию с элегантной тонкой рамой. Вентиляционный клапан имеет два положения для проветривания, выполнен в лаконичном стиле с плавными линиями и закругленными краями.</p>  </div>  <div style="float: left; width: 260px; padding: 5px; display: block;">  <h4>Безопасный стеклопакет</h4>  <img src="/images/safety pane_119036 01_940x940.jpg" border="0" width="250" style="vertical-align: baseline; padding: 5px;">  <p>Любители современного дизайна высоко оценят внешний вид окон VELUX OPTIMA Комфорт: безупречно гладкую поверхность дерева и конструкцию с элегантной тонкой рамой. Вентиляционный клапан имеет два положения для проветривания, выполнен в лаконичном стиле с плавными линиями и закругленными краями.</p>  </div>  </div>  </div>  <p>&nbsp;</p>  <h3>Мансардное окно GLR 3073: угол наклона кровли, размеры окон, площадь остекления</h3>  <p><img src="/images/GLR 3073IS.jpg" border="0" style="width: 160px; height: 363px; float: left;"></p>
    </div>

    <div class="clr"></div>


        <div class="itemContentFooter">

            <!-- Item Hits -->
      <span class="itemHits">
        Read <b>186</b> times			</span>


      <div class="clr"></div>
    </div>

    <!-- Plugins: AfterDisplayContent -->

    <!-- K2 Plugins: K2AfterDisplayContent -->

    <div class="clr"></div>
  </div>







  <div class="clr"></div>




  <!-- Plugins: AfterDisplay -->

  <!-- K2 Plugins: K2AfterDisplay -->





  <div class="clr"></div>
</div>
<!-- End K2 Item Layout -->
 </div>
 </div>';



elseif ($_SERVER['REQUEST_URI'] == '/catalog/krovelnye-materialy/meyer-holsen'):
  echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft">
                                         <div class="vt_component_inside" id="yui_3_13_0_1_1466150625459_50">



<!-- Start K2 Item Layout -->
<span id="startOfPageId48"></span>

<div id="k2Container" class="itemView">

  <!-- Plugins: BeforeDisplay -->

  <!-- K2 Plugins: K2BeforeDisplay -->





  <div class="itemHeader" id="yui_3_13_0_1_1466150625459_55">


        <!-- Item title -->
    <div class="itemTitle" id="yui_3_13_0_1_1466150625459_54">
    <h1 class="itemTitle">

      Керамическая черепица MEYER HOLSEN



    </h1>
    </div>


  </div>

  <!-- Plugins: AfterDisplayTitle -->

  <!-- K2 Plugins: K2AfterDisplayTitle -->



  <div class="itemBody" id="yui_3_13_0_1_1466150625459_49">

    <!-- Plugins: BeforeDisplayContent -->

    <!-- K2 Plugins: K2BeforeDisplayContent -->


        <!-- Item text -->
    <div class="itemFullText" id="yui_3_13_0_1_1466150625459_48">
      <table rules="none">
<tbody>
<tr>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/meyer-holsen/vario-holfalc">Варио Хольфальц</a></p>
</td>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/meyer-holsen/vario-junior-tsvilling">Варио Юниор Цвиллинг</a></p>
</td>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/meyer-holsen/tandem">Тандем</a></p>
</td>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/meyer-holsen/dakapo">Дакапо</a></p>
</td>
</tr>
<tr>
<td><a href="/catalog/krovelnye-materialy/meyer-holsen/vario-holfalc" target="_blank" title="Керамическая черепица Варио Хольфальц"><img src="http://www.mastertile.by/uploads/img/MEYER-HOLSEN/%D0%93%D0%9B%D0%90%D0%92%D0%9D%D0%90%D0%AF/Eleganz_Vario_Holf_2.jpg" border="0" style="width: 153px; height: 242px;"></a></td>
<td><a href="/catalog/krovelnye-materialy/meyer-holsen/vario-junior-tsvilling" target="_blank" title="Керамическая черепица Варио Юниор Цвиллинг"><img src="http://www.mastertile.by/uploads/img/MEYER-HOLSEN/%D0%93%D0%9B%D0%90%D0%92%D0%9D%D0%90%D0%AF/Aktuell_Vario_Jun_1.jpg" border="0" style="width: 275px; height: 242px;"></a></td>
<td><a href="/catalog/krovelnye-materialy/meyer-holsen/tandem" target="_blank" title="Керамическая черепица Тандем"><img src="http://www.mastertile.by/uploads/img/MEYER-HOLSEN/%D0%93%D0%9B%D0%90%D0%92%D0%9D%D0%90%D0%AF/Aktuell_Tandem_1.jpg" border="0" style="width: 242px; height: 242px;"></a></td>
<td><a href="/catalog/krovelnye-materialy/meyer-holsen/dakapo" title="Керамическая черепица Дакапо"><img src="http://www.mastertile.by/uploads/img/MEYER-HOLSEN/%D0%93%D0%9B%D0%90%D0%92%D0%9D%D0%90%D0%AF/Klassik_Dakapo_1.jpg" border="0" style="width: 151px; height: 242px;"></a></td>
</tr>
<tr>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/meyer-holsen/dvojnaja-pazovaja">Двойная пазовая</a></p>
</td>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/meyer-holsen/ravensberger">Равенсбергер</a></p>
</td>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/meyer-holsen/bobrovyj-hvost">Бобровый хвост</a></p>
</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><a href="/catalog/krovelnye-materialy/meyer-holsen/dvojnaja-pazovaja" target="_blank" title="Керамическая черепица Двойная пазовая"><img src="http://www.mastertile.by/uploads/img/MEYER-HOLSEN/%D0%93%D0%9B%D0%90%D0%92%D0%9D%D0%90%D0%AF/Eleganz_Double_1.jpg" border="0" style="width: 148px; height: 242px;"></a></td>
<td><a href="/catalog/krovelnye-materialy/meyer-holsen/ravensberger" target="_blank" title="Керамическая черепица Равенсбергер"><img src="http://www.mastertile.by/uploads/img/MEYER-HOLSEN/%D0%93%D0%9B%D0%90%D0%92%D0%9D%D0%90%D0%AF/Aktuell_Ravens_1.jpg" border="0" style="width: 272px; height: 242px;"></a></td>
<td><a href="/catalog/krovelnye-materialy/meyer-holsen/bobrovyj-hvost" target="_blank" title="Керамическая черепица Бобровый хвост"><img src="http://www.mastertile.by/uploads/img/MEYER-HOLSEN/%D0%93%D0%9B%D0%90%D0%92%D0%9D%D0%90%D0%AF/Eleganz_Bober_1.jpg" border="0" style="width: 242px; height: 242px;"></a></td>
</tr>
</tbody>
</table>
<p>Компания MeyerHolsen занимается производством керамической черепицы более 150 лет. И на протяжении всего времени этот завод остается одним из крупнейших производителей и поставщиков. В Европе керамическая кровля – самая популярная черепица. Ее высокий спрос объясняется&nbsp; одним из самых долгих сроков эксплуатации и эстетичностью внешнего вида.</p>
<p>Фамильные ценности MeyerHolsen можно описать несколькими категориями:</p>
<h2>Экологичность керамической черепицы MeyerHolsen</h2>
<p>Одна из основных целей производства этого немецкого бренда – дружественность природе. Забота об окружающей среде и здоровье людей проявляется не только в выборе состава черепицы, но и в самом процессе производства.</p>
<p>Черепица производится только из натуральных материалов, а сам завод вкладывает большие средства в технологии, которые позволяют производству быть безвредным для окружающей среды. Эти факты еще раз подчеркивают то, что завод, просуществовав 150 лет, планирует продолжать свою деятельность, развиваться и производить полезные материалы для следующих поколений. Этим нельзя не восхищаться!</p>
<p>&nbsp;</p>
<p><img src="/images/mh.jpg" border="0" width="800"></p>

<p id="yui_3_13_0_1_1466150625459_52">Представители MeyerHolsen чтут свои традиции и выбирают среди своего опыта и новых технологий самое лучшее. Например, отличительной особенностью этого материала является то, что каждый элемент кровли на заводе до сих пор проверяется вручную! Этот традиционный метод до сегодняшнего дня имеет силу потому, что дает возможность бренду оставаться лидером в своей отрасли, минимизировать брак и поддержать десятилетиями отработанный авторитет.&nbsp; На многих памятниках архитектуры и известных европейских шедевриальных строениях Вы можете увидеть черепицу MeyerHolsen.</p>
<h2>Качество керамической кровли MeyerHolsen</h2>
<p id="yui_3_13_0_1_1466150625459_47">Как уже говорилось выше, работники MeyerHolsen ставят в приоритете качество продукции, а не объем производства. Этот показатель прослеживается, начиная с использования натурального продукта, добываемого из собственных глиняных карьеров, до проверки звука и визуального осмотра каждого произведенного элемента. Немецкие производители ставят себе высокую планку стандарта качества и стремятся соответствовать ей во всем. Срок эксплуатации керамической черепицы от 100 лет! При этом на протяжении всего срока использования <strong id="yui_3_13_0_1_1466150625459_46">керамическая черепица meyerholsen сохраняет все свои свойства. Более того, эта кровля не требует дополнительных периодических покрасок, обладает непревзойденными показателями&nbsp; огнестойкости, водонепроницаемости и морозостойкости. Для большинства немцев MeyerHolsen– показатель качества и богатства.&nbsp; «МейерХолсен»&nbsp; - черепица премиум-класса.</p>
<h2>Модели керамической черепицы</h2>
<p>Коллекции MeyerHolsen не похожи на модели других производителей керамической черепицы. Этот продукт уникальный и приобретается только настоящими ценителями эксклюзивных, дорогих и вечных продуктов, которые знакомы уже ни одному поколению. В коллекциях meyerholsen можно также проследить традиционность цветов от античного красного до черного сланцевого. В целом для любого архитектора работа с таким дорогим и красивым материалом становится удовольствием, более того сама черепица универсальна и применима в любом проекте. В нашем каталоге Вы можете посмотреть на низкопрофильную, безпазовую, плоскую и двойную черепицу.</p>

<p>Если керамическая кровля - это материал, который Вы планируете использовать для своего дома, то Вам просто необходимо познакомиться с коллекциями MeyerHolsen в просторном и красивом шоуруме компании «Профград».</p>
<p>&nbsp;</p>
<table rules="none">
<tbody>
<tr>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/meyer-holsen/vario-holfalc">Варио Хольфальц</a></p>
</td>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/meyer-holsen/vario-junior-tsvilling">Варио Юниор Цвиллинг</a></p>
</td>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/meyer-holsen/tandem">Тандем</a></p>
</td>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/meyer-holsen/dakapo">Дакапо</a></p>
</td>
</tr>
<tr>
<td><a href="/catalog/krovelnye-materialy/meyer-holsen/vario-holfalc" target="_blank" title="Керамическая черепица Варио Хольфальц"><img src="http://www.mastertile.by/uploads/img/MEYER-HOLSEN/%D0%93%D0%9B%D0%90%D0%92%D0%9D%D0%90%D0%AF/Eleganz_Vario_Holf_2.jpg" border="0" style="width: 153px; height: 242px;"></a></td>
<td><a href="/catalog/krovelnye-materialy/meyer-holsen/vario-junior-tsvilling" target="_blank" title="Керамическая черепица Варио Юниор Цвиллинг"><img src="http://www.mastertile.by/uploads/img/MEYER-HOLSEN/%D0%93%D0%9B%D0%90%D0%92%D0%9D%D0%90%D0%AF/Aktuell_Vario_Jun_1.jpg" border="0" style="width: 275px; height: 242px;"></a></td>
<td><a href="/catalog/krovelnye-materialy/meyer-holsen/tandem" target="_blank" title="Керамическая черепица Тандем"><img src="http://www.mastertile.by/uploads/img/MEYER-HOLSEN/%D0%93%D0%9B%D0%90%D0%92%D0%9D%D0%90%D0%AF/Aktuell_Tandem_1.jpg" border="0" style="width: 242px; height: 242px;"></a></td>
<td><a href="/catalog/krovelnye-materialy/meyer-holsen/dakapo" title="Керамическая черепица Дакапо"><img src="http://www.mastertile.by/uploads/img/MEYER-HOLSEN/%D0%93%D0%9B%D0%90%D0%92%D0%9D%D0%90%D0%AF/Klassik_Dakapo_1.jpg" border="0" style="width: 151px; height: 242px;"></a>&nbsp;</td>
</tr>
<tr>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/meyer-holsen/dvojnaja-pazovaja">Двойная пазовая</a></p>
</td>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/meyer-holsen/ravensberger">Равенсбергер</a></p>
</td>
<td>
<p style="text-align: center;"><a href="/catalog/krovelnye-materialy/meyer-holsen/bobrovyj-hvost">Бобровый хвост</a></p>
</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><a href="/catalog/krovelnye-materialy/meyer-holsen/dvojnaja-pazovaja" target="_blank" title="Керамическая черепица Двойная пазовая"><img src="http://www.mastertile.by/uploads/img/MEYER-HOLSEN/%D0%93%D0%9B%D0%90%D0%92%D0%9D%D0%90%D0%AF/Eleganz_Double_1.jpg" border="0" style="width: 148px; height: 242px;"></a></td>
<td><a href="/catalog/krovelnye-materialy/meyer-holsen/ravensberger" target="_blank" title="Керамическая черепица Равенсбергер"><img src="http://www.mastertile.by/uploads/img/MEYER-HOLSEN/%D0%93%D0%9B%D0%90%D0%92%D0%9D%D0%90%D0%AF/Aktuell_Ravens_1.jpg" border="0" style="width: 272px; height: 242px;"></a></td>
<td><a href="/catalog/krovelnye-materialy/meyer-holsen/bobrovyj-hvost" target="_blank" title="Керамическая черепица Бобровый хвост"><img src="http://www.mastertile.by/uploads/img/MEYER-HOLSEN/%D0%93%D0%9B%D0%90%D0%92%D0%9D%D0%90%D0%AF/Eleganz_Bober_1.jpg" border="0" style="width: 242px; height: 242px;"></a></td>
</tr>
</tbody>
</table>	  </div>

    <div class="clr"></div>


        <div class="itemContentFooter">




      <div class="clr"></div>
    </div>

    <!-- Plugins: AfterDisplayContent -->

    <!-- K2 Plugins: K2AfterDisplayContent -->

    <div class="clr"></div>
  </div>







  <div class="clr"></div>




  <!-- Plugins: AfterDisplay -->

  <!-- K2 Plugins: K2AfterDisplay -->





  <div class="clr"></div>
</div>
<!-- End K2 Item Layout -->
 </div>
                                    </div></div>
</div>
 </div>
';





elseif ($_SERVER['REQUEST_URI'] == '/catalog/krovelnye-materialy/imerys'):
  echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft">
<div class="vt_component_inside">
<span id="startOfPageId66"></span>
<div id="k2Container" class="itemView">
  <div class="itemHeader">
    <div class="itemTitle">
   <h1 class="itemTitle">Керамическая черепица IMERYS</h1>
   </div>


 </div>

 <!-- Plugins: AfterDisplayTitle -->

 <!-- K2 Plugins: K2AfterDisplayTitle -->


 <div class="itemBody">

   <!-- Plugins: BeforeDisplayContent -->

   <!-- K2 Plugins: K2BeforeDisplayContent -->


     <!-- Item text -->
   <div class="itemFullText">
<table border="0" cellspacing="3" cellpadding="3">
<tbody>
<tr>
<td style="text-align: center;">
<p><a href="/catalog/krovelnye-materialy/imerys/omega-10">Omega 10</a></p>
<p><a href="/catalog/krovelnye-materialy/imerys/omega-10"><img src="/images/_omega%2010_resize.jpg" border="0" width="180" /></a></p>
</td>
<td style="text-align: center;">
<p><a href="/catalog/krovelnye-materialy/imerys/diamant">Diamant</a></p>
<p><a href="/catalog/krovelnye-materialy/imerys/diamant"><img src="/images/_Diamant_resize.jpg" border="0" width="180" /></a></p>
</td>
<td style="text-align: center;">
<p><a href="/catalog/krovelnye-materialy/imerys/hp-10">HP 10</a></p>
<p><a href="/catalog/krovelnye-materialy/imerys/hp-10"><img src="/images/_HP%2010_resize.jpg" border="0" width="180" /></a></p>
</td>
<td style="text-align: center;">
<p><a href="/catalog/krovelnye-materialy/imerys/arboise-ecaille">Arboise Ecaille</a></p>
<p><a href="/catalog/krovelnye-materialy/imerys/arboise-ecaille"><img src="/images/_Arboise%20Ecaille_resize.jpg" border="0" width="180" /></a></p>
</td>
</tr>
<tr>
<td style="text-align: center;">
<p><a href="/catalog/krovelnye-materialy/imerys/alpha-10">Alpha 10</a></p>
<p><a href="/catalog/krovelnye-materialy/imerys/alpha-10"><img src="/images/_Alpha%2010_resize.jpg" border="0" width="180" /></a></p>
</td>
<td style="text-align: center;">
<p><a href="/catalog/krovelnye-materialy/imerys/arboise-rectangulaire">Arboise Rectangulaire</a></p>
<p><a href="/catalog/krovelnye-materialy/imerys/arboise-rectangulaire"><img src="/images/_Arboise%20Rectangul_resize.jpg" border="0" width="180" /></a></p>
</td>
<td style="text-align: center;">
<p><a href="/catalog/krovelnye-materialy/imerys/h-10">H 10</a></p>
<p><a href="/catalog/krovelnye-materialy/imerys/h-10"><img src="/images/_H%2010_resize.jpg" border="0" width="180" /></a></p>
</td>
<td style="text-align: center;">
<p><a href="/catalog/krovelnye-materialy/imerys/pv-10">PV 10</a></p>
<p><a href="/catalog/krovelnye-materialy/imerys/pv-10"><img src="/images/_PV%2010_resize.jpg" border="0" width="180" /></a></p>
</td>
</tr>
</tbody>
</table>
<p><img src="/images/imerys.jpg" border="0" width="350" style="float: right; margin-left: 15px; margin-right: 15px;" /></p>
<h2>История черепицы Imerys</h2>
<p>Бренд Imerys не сильно нуждается в представлении,так как это – мировой лидер в сфере производства натуральной черепицы. Завод начал работу около 200 лет назад и с тех пор идет только по пути развития. Этот бренд по-настоящему легендарный и вызывает только восхищение. Из небольшого предприятия, основанного в 1811 году, <b>Imerys</b> превратился в мирового производственного гиганта. Сегодня на заводах компанииработает около 16026 сотрудников, годовой оборот производства в 2012 году составил 3 885 000 000 евро! Эти цифры, конечно же, говорят о безусловном авторитете продукта, который производит это предприятие.</p>
<h2>Технология производства керамической кровли</h2>
<p>Керамическая кровля - прочный  красивый материал, с низким уровнем энергопотребления, и является одним  из самых популярных материалов в мире.</p>
<p>Как авторитетная компания, Imerys не может стоять на месте, пользуясь только опытом поколений. На сегодняшний день одним из сильных сторон производства является применение специально разработанных серьезных технологий, которые позволяют сделать материал наиболее качественным. В команде работает 240 инженеров и техников, завод имеет 14 экспериментальных лабораторий. Производство черепицы Imerys -  сложный и долгий процесс, который начинается с тщательной предварительной обработки сырья и заканчивается полностью автоматизированной формовкой, обжигом и глазуровкой плиток. Все образцы проходят несколько этапов серьезной лабораторной проверки.</p>
<h2>Натуральная черепица Imerys и окружающая среда</h2>
<p>Как игрок на мировой арене, этот материал особенно чувствителен к проблемам устойчивого развития и стремится постоянно совершенствовать свои производственные процессы. Таким образом, вся работа  по добычи ископаемых материалов проводится по согласованию  с местным населением и с заботой об окружающей среде. В своих рабочих процессах компанияиспользует биотопливо, все направления работы производятся в соответствии с сертификатом ISO 14001. Завод активно разрабатывает методы восстановления ископаемого материала, который добывается для производства кровли. <b>Керамическая черепица</b> производится из натуральной красной глины - надежного, экологичного и престижного материала.</p>
<h2>Качество и цена керамической кровли</h2>
<p>Сомневаться в качестве керамической черепицы  нет причин. Imerys дает гарантию на свою кровлю 30 лет, при этом срок службы черепицы от 70 лет! Натуральный материал не только безопасен, но и также обладает сверх-прочностью, водонепроницаемостью, превосходной устойчивостью к разным температурам. Это не только престиж, это разумный выбор для качественной жизни. Соотношение «<b>цена</b> /качество» - это  логичный выбор тех, кто хочет оставить свой дом следующим поколениям.</p>
<h3>Выбор и применение керамической кровли Imerys</h3>
<p>Керамическая черепица -  это традиционный материал для устройства кровли, который используется с древних  времен, и до сегодняшнего дня практически не существует равных ему по качеству и сроку службы. На сегодняшний день Imerys имеет около 60 разных моделей. Также <b>керамическая черепица Imerys </b>-  это большое количество изысканных оттенков и неподражаемо элегантная  крыша в традиционном римском стиле. Керамическая черепица превосходно сочетается с кирпичными фасадами, создавая законченный образ богатого шедевра архитектуры. В ассортименте  более 100 различных оттенков, дружественных природе.</p>
<p>Продукция активно применяется как в строительстве нового дома, так и в реставрации кровли. Архитектор может применить черепицу в имитации старинной крыши, или сланцевой кровли. Этот вид кровли часто применяется в средиземноморском и прованском стилях, но также ее можно использовать в проектах  в стиле хай-тех и функциональный минимализм.</p>
<h3>Основные виды натуральной черепицы Imerys</h3>
<p><b>Alpha 10</b> – эта керамическая черепица превосходно подходит для укладки кровли ультрасовременных проектов.</p>
<p><b>ArboiseEcaille</b> – наиболее популярная коллекция. Такую черепицу использовали еще 2 века назад, и до сих пор она осталась наиболее востребованной и универсальной.</p>
<p><b>ArboiseRectangulaire</b> -  имеет плоскую форму и также как и Alpha 10  прекрасно и утонченно смотрится на современных  строениях.</p>
<p><b>Diamant</b> – черепица, обладающая необычной формой, бестселлер среди черепиц этого вида за 2013-2014 года.</p>
<p><b>H 10</b> – эта коллекция подходит для ценителей минимализма в дизайне и архитектуре.</p>
<p><b>Omega 10</b> – эта коллекция широко используется в строительстве загородных домов в классическом прованском стиле.</p>
<p><b>PV 10</b> – идеальная коллекция для классического стиля.</p>
<p><b>HP10</b> – коллекция, похожая на сланец. Такую черепицу можно увидеть как на новых домах, так и на известных старинных исторических строениях.</p>
<table border="0" cellspacing="3" cellpadding="3">
<tbody>
<tr>
<td style="text-align: center;">
<p><a href="/catalog/krovelnye-materialy/imerys/omega-10">Omega 10</a></p>
<p><a href="/catalog/krovelnye-materialy/imerys/omega-10"><img src="/images/_omega%2010_resize.jpg" border="0" width="180" /></a></p>
</td>
<td style="text-align: center;">
<p><a href="/catalog/krovelnye-materialy/imerys/diamant">Diamant</a></p>
<p><a href="/catalog/krovelnye-materialy/imerys/diamant"><img src="/images/_Diamant_resize.jpg" border="0" width="180" /></a></p>
</td>
<td style="text-align: center;">
<p><a href="/catalog/krovelnye-materialy/imerys/hp-10">HP 10</a></p>
<p><a href="/catalog/krovelnye-materialy/imerys/hp-10"><img src="/images/_HP%2010_resize.jpg" border="0" width="180" /></a></p>
</td>
<td style="text-align: center;">
<p><a href="/catalog/krovelnye-materialy/imerys/arboise-ecaille">Arboise Ecaille</a></p>
<p><a href="/catalog/krovelnye-materialy/imerys/arboise-ecaille"><img src="/images/_Arboise%20Ecaille_resize.jpg" border="0" width="180" /></a></p>
</td>
</tr>
<tr>
<td style="text-align: center;">
<p><a href="/catalog/krovelnye-materialy/imerys/alpha-10">Alpha 10</a></p>
<p><a href="/catalog/krovelnye-materialy/imerys/alpha-10"><img src="/images/_Alpha%2010_resize.jpg" border="0" width="180" /></a></p>
</td>
<td style="text-align: center;">
<p><a href="/catalog/krovelnye-materialy/imerys/arboise-rectangulaire">Arboise Rectangulaire</a></p>
<p><a href="/catalog/krovelnye-materialy/imerys/arboise-rectangulaire"><img src="/images/_Arboise%20Rectangul_resize.jpg" border="0" width="180" /></a></p>
</td>
<td style="text-align: center;">
<p><a href="/catalog/krovelnye-materialy/imerys/h-10">H 10</a></p>
<p><a href="/catalog/krovelnye-materialy/imerys/h-10"><img src="/images/_H%2010_resize.jpg" border="0" width="180" /></a></p>
</td>
<td style="text-align: center;">
<p><a href="/catalog/krovelnye-materialy/imerys/pv-10">PV 10</a></p>
<p><a href="/catalog/krovelnye-materialy/imerys/pv-10"><img src="/images/_PV%2010_resize.jpg" border="0" width="180" /></a></p>
</td>
</tr>
</tbody>
</table>

<h2>Цены на керамическую черепицу Imerys уточняйте по телефонам, указанным на сайте.</h2>
</div>

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

elseif ($_SERVER['REQUEST_URI'] == '/catalog/fasadnye-materialy/vandersanden'):
  echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft">
<div class="vt_component_inside">
<span id="startOfPageId66"></span>
<div id="k2Container" class="itemView">
  <div class="itemHeader">
   <div class="itemTitle">
   <h1 class="itemTitle">Клинкерный кирпич VANDERSANDEN ручной формовки</h1>
   </div>


 </div>

 <!-- Plugins: AfterDisplayTitle -->

 <!-- K2 Plugins: K2AfterDisplayTitle -->


 <div class="itemBody">

   <div class="itemIntroText">
    <p style="text-align:center;"><a href="/fasadnye-materialy/cveta-vandersanden"><span style="font-size: 18px;">Кликнете на баннер, чтобы посмотреть цвета, коллекции</span></a></p>
<p><a href="/fasadnye-materialy/cveta-vandersanden" target="_blank"><img src="/images/briks-but.png" border="0" width="800" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);" /></a></p>
<p>Клинкерный кирпич Vandersanden не нуждаются в представлении. Бельгийский завод Vandersanden изготавливает свой материал уже столетие .Сегодня в мире существует много культур. Предпочтения в стиле и нравы постоянно меняются, но облицовочный кирпич не перестает быть востребованным. Состаренный кирпич ручной формовки Вандерсанден в зависимости от своего оттенка может дополнить роскошь помещения с дорогим антиквариатом или подчеркнуть брутальность ультрасовременного дерзкого дизайна, стать прекрасным элементом теплого романтического стиля или встроиться в деловую серьезную атмосферу здания коммерческого назначения. Облицовочный кирпич объединяет совершенно разные вкусы. На сегодняшний день продажа кирпича облицовочного осуществляется почти во всех странах мира. Эта мода не проходит никогда, и дизайнеры постоянно обращаются к кирпичу и плитке ручной формовки для самых разных проектов квартир, ресторанов, салонов и других общественных помещений. </p>
<p><img src="/images/vander-1.jpg" border="0" alt="укладка клинкерного кирпича вандерсанден, фото" width="500" style="float: left; margin-left: 12px; margin-right: 12px;" />Изготавливается кирпич Vandersanden путем ручной формовки. Все его коллекции имеют потертости, которые создают эффект «старины». Поэтому такая плитка и кирпич применяется не только в новых постройках, но и при реставрации памятников архитектуры.</p>
<p>Если Вас интересует клинкерный кирпич ручной формовки, Вы должны знать, что по своим характеристикам этот продукт превосходит любые фасадные краски, штукатурки. Vandersanden отличается тем, что материал создается путем смешивания редких пород глины, что делает его очень морозоустойчивым, он не теряет свой цвет даже через десятки лет службы.</p>
<p>За его свойства и красоту этот материал можно назвать драгоценным. Кирпич ручной формовки вандерсанден обладает высокими показателями водопоглощения. В каждом элементе есть поры, которые впитывают воду и потом пропускают ее обратно, тем самым не давая осадкам пробраться до утеплителя. Если Вы решили купить кирпич ручной формовки, Вы можете быть уверены, что этот материал не только украсит Ваши стены, но и избавит Вас от ремонта фасада на долгие годы. Кирпич Vandersanden является одним из самых надежных материалов для защиты фасада.</p>
<p><img src="/images/vander-2.jpg" border="0" alt="vandersanden" title="vandersanden" width="500" style="float: right; margin-left: 12px; margin-right: 12px;" />Плитка Вандерсанден также применяется при облицовке фасада и в интерьере. По своим свойствам она ничем не уступает кирпичу, однако является более экономичной для заказчика. При этом кирпичная плитка имеет узкие бруски, благодаря чему облицовка не уменьшает площадь пространства.</p>
<p>В компании «Профград» можно увидеть очень много разных оттенков кирпича и скачать текстуры для проектирования. Благодаря последним разработкам завода – signa панелям Vandersanden, из этого материала можно создавать любую форму. Плитка Vandersanden дает возможность мыслить творчески и испытывать эстетическое наслаждение, придавая любой постройке или помещению культурную оболочку. Вы можете купить кирпич облицовочный в Минске в компании «Профград». Здесь в красивом шоуруме на ул.Мележа,5 Вы можете посмотреть на образцы всех коллекций в живую.</p>
<p><a href="/fasadnye-materialy/cveta-vandersanden"><span style="font-size: 18px;">Смотреть цвета, коллекции</span></a></p>	 </div>
 <h2>Цены на клинкерный кирпич ручной формовки уточняйте по телефонам, указанным на сайте.</h2>


</div>

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

elseif ($_SERVER['REQUEST_URI'] == '/catalog/krovelnye-materialy/faltsevaia-krovlia'):
  echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft">
<div class="vt_component_inside">
<span id="startOfPageId66">
<div id="k2Container" class="itemView">
  <div class="itemHeader">
   <div class="itemTitle">
   <h1 class="itemTitle">Фальцевая кровля в Минске</h1>
   </div>


 </div>

 <!-- Plugins: AfterDisplayTitle -->

 <!-- K2 Plugins: K2AfterDisplayTitle -->


 <div class="itemBody">
<p>Фальцевая кровля – это кровля, состоящая из листов, скрепленных между собой специальными швами. Такой кровельный материал пользуется спросом уже много веков. Даже Собор Парижской Богоматери имеет фальцевую кровлю, которая верно служит с XIV века. И теперь этот материал считается самым стойким и в тоже время доступным материалом. Ее качество объясняется тем, что она состоит из сплошного листа и не имеет отверстий, что дает ей возможность обеспечивать дому полную герметичность. Даже при очень сильных осадках и ветре такая крыша не допустит протеканий. С каждым годом фальцевая кровля становится все популярнее.</p>

<h2>Установка фальцевой кровли</h2>
<p>Фальцевый материал очень легкий, что значительно упрощает монтаж, делая эту кровлю доступной по цене. Снегозадержатели легко устанавливаются на кровлю, не повреждая ее. При установке такой кровли рекомендуется подкладывать шумопоглащающую мембрану.</p>
<p>Минимальный угол кровли, при котором может использоваться этот материал – 5 градусов. Фальцевые листы могут располагаться как угодно, на любых формах и углах. Его прекрасно используют как в современных, так и традиционных проектах. В плане цвета фальцевую кровлю можно сделать любой за счет специального полимерного покрытия.</p>
<h2>Надежность и долговечность фальцевой кровли</h2>
<p>Как уже говорилось выше, фальцевая кровля исключает протечки воды, а благородные металлы, из которых она изготавливается, не подвергаются коррозии, не ржавеют. Высота шва всего 2,5 см, что делает ее красивой и совершенно герметичной. Снаружи не видно мест крепежа, что позволяет избежать образования коррозии на крепежных элементах. Еще одна характеристика – абсолютная пожароустойчивость.</p>
<p>В результате монтажа фальцевая крыша собирается в цельную конструкцию, которая не подвергается изменениям формы. За счет гладкой поверхности вода стекает с кровли беспрепятственно. Также в отличие от других кровельных материалов, фальцевую кровлю легко чистить от грязи.</p>




<h2>Виды фальцевой кровли</h2>
<p>Сегодня фальцевая кровля предлагается из листовой и рулонной нержавеющей стали. Также используется благородный цветной металл для фальцевой кровли - медь, алюминий, цинк-титан.</p>

<p><a href="/catalog/krovelnye-materialy/faltsevaia-krovlia/faltsevaja-krovlia-iz-zink-titana"><img src="/images/titan.jpg" border="0" style="border: 0px #0000ee; width: 200px; margin-right: 10px; float: left;" /></a><a href="/catalog/krovelnye-materialy/faltsevaia-krovlia/faltsevaja-krovlia-iz-zink-titana">Цинк-титан</a><br />Цинк-титан – непревзойденный по прочности и долговечности материал для изготовления кровель и фасадов, по совокупности рабочих характеристик относится к материалам класса Элит. Химический состав сплава титан-цинк - 99,9% химически чистого цинка, 0,02% титана в сплаве увеличивают прочность материала, микродобавки меди и алюминия – придают высокую пластичность готовым материалам.</p>
<p><a href="/catalog/krovelnye-materialy/faltsevaia-krovlia/faltsevaja-krovlia-iz-medi"><img src="/images/med.jpg" border="0" style="border: 0px #0000ee; width: 200px; margin-right: 10px; float: left;" /></a><a href="/catalog/krovelnye-materialy/faltsevaia-krovlia/faltsevaja-krovlia-iz-medi">Медь</a><br />Каждый собственник индивидуального жилого дома стремится применить надежное и долговечное кровельное покрытие. Чтобы под крышей дома было уютно и спокойно, чтобы она не пропускала ни капли дождя. В Европе уже давно стали применять кровлю из меди. И это не только эстетичное, но экономичное решение. При профессиональном монтаже срок ее службы достигает 150-ти лет.</p>
<p><a href="/catalog/krovelnye-materialy/faltsevaia-krovlia/falcevaya-alumini"><img src="/images/alumin.jpg" border="0" style="border: 0px #0000ee; width: 200px; margin-right: 10px; float: left;" /></a><a href="/catalog/krovelnye-materialy/faltsevaia-krovlia/falcevaya-alumini">Алюминий</a><br />Правильный выбор материала для кровли чрезвычайно важен. В списке надежных кровельных материалов далеко не последнюю строчку занимает алюминий: общеизвестно, что это металл легкий, крыши из него практичны и долговечны. Нет нареканий на материал и со стороны кровельщиков: монтаж алюминиевой кровли простой и удобный, не требует специальных навыков и умений.</p>
<p><a href="/catalog/krovelnye-materialy/faltsevaia-krovlia/faltsevaja-krovlia-iz-stali"><img src="/images/stal.jpg" border="0" style="border: 0px #0000ee; width: 200px; margin-right: 10px; float: left;" /></a><a href="/catalog/krovelnye-materialy/faltsevaia-krovlia/faltsevaja-krovlia-iz-stali">Сталь</a><br />Все больше заказчиков делают разумный выбор в пользу надежности и эффективности фальцевой кровли! Потому что фальцевая кровля - это максимальная гидроизоляция всей кровельной конструкции; это защита кровельных элементов от любых погодных условий на протяжении всего срока эксплуатации дома; это возможность изготовления кровельных штрипс любой необходимой длины; это монтаж в короткие сроки.</p>

 <h2>Купить фальцевую кровлю в Минске, актуальную цену на уточняйте по телефонам, указанным на сайте.</h2>


</div>

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



elseif ($_SERVER['REQUEST_URI'] == '/catalog/krovelnye-materialy'):
  echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft">
<div class="vt_component_inside">
<span id="startOfPageId66">
<div id="k2Container" class="itemView">
  <div class="itemHeader">
   <div class="itemTitle">
   <h1 class="itemTitle">Кровельные материалы в Минске</h1>
   </div>


 </div>

 <!-- Plugins: AfterDisplayTitle -->

 <!-- K2 Plugins: K2AfterDisplayTitle -->


 <div class="itemBody">

<table border="0" cellspacing="3" cellpadding="3">
<tbody>
<tr>
<td>
<p><b><a href="/k2-items/metrotile">Композитная кровля Metrotile</a></b><br />Metrotile — это кровельный материал, который состоит сразу из нескольких слоев. В ее основе имеется стальной лист, располагающийся между слоями алюмоцинка, представляющего собой сплав кремния, алюминия и цинка, его толщина составляет 20 микрон.</p>
<div style="float: left; width: 280px; display: block;">
<ul>
<li><a href="/k2-items/metrotile/metrobond"> <span> MetroBond</span></a></li>
<li><a href="/k2-items/metrotile/metroroman"> <span> Metroroman</span></a></li>
<li><a href="/k2-items/metrotile/metroshake2"> <span> MetroShake II</span></a></li>
<li><a href="/k2-items/metrotile/metrowoodenshake"> <span> MetroWoodenShake</span></a></li>
<li><a href="/k2-items/metrotile/metroroman-ii"> <span> MetroRoman II</span></a></li>
</ul>
</div>
<div style="float: left; width: 280px; display: block;">
<ul>
<li><a href="/k2-items/metrotile/metrotile-gallo"> <span> Metrotile Gallo</span></a></li>
<li><a href="/k2-items/metrotile/metrobondmistral"> <span> MetroBondMistral</span></a></li>
<li><a href="/k2-items/metrotile/metrosherwood"> <span> MetroSherwood</span></a></li>
<li><a href="/k2-items/metrotile/metroclassic"> <span> MetroClassic</span></a></li>
<li><a href="/k2-items/metrotile/metroshingle"> <span> MetroShingle</span></a></li>
</ul>
</div>
</td>
<td valign="top"><a href="/k2-items/metrotile"> <span> <img src="/images/Logo_Metrobond.jpg" border="0" width="150" style="margin-left: 12px; margin-right: 12px;" /></span></a></td>
</tr>
<tr>
<td> </td>
<td valign="top"> </td>
</tr>
<tr>
<td><b><a href="/k2-items/bitum-cherepitsa-iko">Битумная кровля IKO</a></b><br />Битумная черепица IKO – один из первых представителей отрасли рынка кровельных материалов. Концерн IKO Industries уже более шестидесяти лет предлагает на международном рынке товар наивысшего качества.
<p> </p>
<div style="float: left; width: 280px; display: block;">
<ul>
<li><a href="/k2-items/bitum-cherepitsa-iko/xpress"> <span> Кембридж XPRESS</span></a></li>
<li><a href="/k2-items/bitum-cherepitsa-iko/skyline"> <span> Скайлайн</span></a></li>
<li><a href="/k2-items/bitum-cherepitsa-iko/armoshild"> <span> Армошилд</span></a></li>
</ul>
</div>
<div style="float: left; width: 280px; display: block;">
<ul>
<li><a href="/k2-items/bitum-cherepitsa-iko/hex"> <span> Хекс</span></a></li>
<li><a href="/k2-items/bitum-cherepitsa-iko/biber"> <span> Бобровый хвост</span></a></li>
<li><a href="/k2-items/bitum-cherepitsa-iko/3tab"> <span> Тритаб</span></a></li>
</ul>
</div>
</td>
<td valign="top"><a href="/k2-items/bitum-cherepitsa-iko"><span><img src="/images/Logo_IKO.jpg" border="0" style="margin-left: 12px; margin-right: 12px;" /></span></a></td>
</tr>
<tr>
<td> </td>
<td valign="top"> </td>
</tr>
<tr>
<td><b><a href="/k2-items/imerys">Керамическая черепица Imerys</a></b><br />Керамическая черепица IMERYS производства Франции – является одним из мировых лидеров качества в своей отрасли.
<p> </p>
<div style="float: left; width: 280px; display: block;">
<ul>
<li><a href="/k2-items/imerys/pv-10"> <span> PV 10</span></a></li>
<li><a href="/k2-items/imerys/h-10"> <span> H 10</span></a></li>
<li><a href="/k2-items/imerys/arboise-ecaille"> <span> ARBOISE ECAILLE</span></a></li>
<li><a href="/k2-items/imerys/hp-10"> <span> HP 10</span></a></li>
</ul>
</div>
<div style="float: left; width: 280px; display: block;">
<ul>
<li><a href="/k2-items/imerys/omega-10"> <span> OMEGA 10</span></a></li>
<li><a href="/k2-items/imerys/diamant"> <span> DIAMANT</span></a></li>
<li><a href="/k2-items/imerys/arboise-rectangulaire"> <span> ARBOISE RECTANGULAIRE</span></a></li>
<li><a href="/k2-items/imerys/alpha-10"> <span> ALPHA 10 </span></a></li>
</ul>
</div>
</td>
<td valign="top"><a href="/k2-items/imerys"><span><img src="/images/Logo_IMERYS.png" border="0" style="margin-left: 12px; margin-right: 12px;" /></span></a></td>
</tr>
<tr>
<td> </td>
<td valign="top"> </td>
</tr>
<tr>
<td><b><a href="/k2-items/meyer-holsen">Керамическая черепица MEYER-HOLSEN </a></b><br />Meyer Holsen - это традиции немецкого качества. В нашем каталоге представлена низкопрофильная, безпазовая, плоская и двойная черепица традиционных для континентальной Европы расцветок.
<p> </p>
<div style="float: left; width: 280px; display: block;">
<ul>
<li><a href="/k2-items/meyer-holsen/vario-holfalc"> <span> Варио Хольфальц</span></a></li>
<li><a href="/k2-items/meyer-holsen/vario-junior-tsvilling"> <span> Варио Юниор Цвиллинг</span></a></li>
<li><a href="/k2-items/meyer-holsen/tandem"> <span> Тандем</span></a></li>
<li><a href="/k2-items/meyer-holsen/dakapo"> <span> Дакапо</span></a></li>
</ul>
</div>
<div style="float: left; width: 280px; display: block;">
<ul>
<li><a href="/k2-items/meyer-holsen/dvojnaja-pazovaja"> <span> Двойная пазовая</span></a></li>
<li><a href="/k2-items/meyer-holsen/ravensberger"> <span> Равенсбергер</span></a></li>
<li><a href="/k2-items/meyer-holsen/bobrovyj-hvost"> <span> Бобровый хвост</span></a></li>
</ul>
</div>
</td>
<td valign="top"><a href="/k2-items/meyer-holsen"><span><img src="/images/logo_Meyer-Holsen.png" border="0" style="margin-left: 12px; margin-right: 12px;" /></span></a></td>
</tr>
<tr>
<td> </td>
<td valign="top"> </td>
</tr>
<tr>
<td valign="top">
<p><b><a href="/catalog/krovelnye-materialy/prirodny-slanec-rathscheck">Природный сланец Rathscheck (Германия)</a></b></p>
<ul>
<li><a href="/k2-items/prirodny-slanec-rathscheck/vidy-ukladki">Виды укладки</a></li>
<li><a href="/k2-items/prirodny-slanec-rathscheck/tipy-materiala">Типы материала</a></li>
<li><a href="/k2-items/prirodny-slanec-rathscheck/razmery-i-kolichestvo">Размер и количество</a></li>
<li><a href="/k2-items/prirodny-slanec-rathscheck/production">Производство</a></li>
</ul>
</td>
<td valign="top"> <img src="/images/Rathscheck_Logo.jpg" border="0" alt="" style="display: block; margin-left: auto; margin-right: auto;" /></td>
</tr>
<tr>
<td valign="top">
<p><b><a href="/catalog/krovelnye-materialy/creaton-titania">Керамическая кровля CREATON TITANIA</a></b> производится в шести популярных и благородных цветах, которые позволят реализовать любую архитектурную идею или замысел, гармонично соединив все элементы экстерьера дома.</p>
</td>
<td valign="top"><img src="/images/creaton_logo.png" border="0" width="180" style="display: block; margin-left: auto; margin-right: auto;" /></td>
</tr>
<tr>
<td valign="top">
<p><b><a href="/catalog/krovelnye-materialy/faltsevaia-krovlia">Фальцевая кровля</a></b> – это  кровля, состоящая из листов, скрепленных между собой специальными швами. Такая кровля  пользуется спросом уже много веков. Даже Собор Парижской Богоматери имеет фальцевую кровлю, которая верно служит с XIV века.  </p>
<ul>
<li><a href="/catalog/krovelnye-materialy/faltsevaia-krovlia/faltsevaja-krovlia-iz-zink-titana">Цинк-титан</a></li>
<li><a href="/catalog/krovelnye-materialy/faltsevaia-krovlia/faltsevaja-krovlia-iz-medi">Медь</a></li>
<li><a href="/catalog/krovelnye-materialy/faltsevaia-krovlia/falcevaya-alumini">Алюминий</a></li>
<li><a href="/catalog/krovelnye-materialy/faltsevaia-krovlia/faltsevaja-krovlia-iz-stali">Сталь</a></li>
</ul>
</td>
<td valign="top"> </td>
</tr>
</tbody>
</table>


<p>В прежние времена у дачников, которые ремонтировали крыши своих домов, очень большой популярностью пользовался рубероид. Это не очень надежный, но исключительно дешевый материал, который производят из эпоксидных смол и нефтепродуктов. Сегодня при ремонте крыш рубероид практически не используют &ndash; на рынке появилось много других качественных и доступных по цене материалов.</p>

<h2>Гибкая битумная кровля</h2>
<p>Они гораздо экологичнее и безопаснее рубероида, который при нагревании и тем более &ndash; горении выделяет в атмосферу очень токсичные вещества. Все-таки, нефтепродукты, из которых его получают, трудно назвать безопасным сырьем. А вот <a href="/catalog/krovelnye-materialy/krovlia-iko">мягкая кровля</a>, которую выбирают современные дачники, в основном производится из натурального битума. Его, в свою очередь, получают из натуральной древесной смолы, которая гораздо экологичнее любых неорганических соединений.</p>
<p>Отличительной чертой мягкой кровли является высочайший уровень звукопоглощения, который гораздо выше, чем у металлочерепицы. Клеевое соединение придаёт кровле абсолютную герметичность, поэтому гибкая черепица рекомендуется для использования в районах с влажным дождливым климатом. При этом мягкая кровля проявляет отличную жаропрочность и морозоустойчивость, не подвержена процессам гниения, коррозии, расслаивания и растрескивания. Гибкость черепицы сохраняется при любых температурах, тем самым способствуя постоянным амортизирующим свойствам. Битумная масса на основе из стеклохолста обладает высокой прочностью и устойчива к механическим нагрузкам, обеспечивая долговечность и износостойкость как всей кровле, так и отдельным её элементам.</p>
<p>Битумное покрытие придётся по вкусу тем, кто привык разумно и экономно вести строительные работы, ведь даже самая сложная геометрия поверхности кровли не будет препятствием для укладки гибкой черепицы, при том, что она позволяет свести к минимуму объёмы отходов монтажа. Если же покрываемая поверхность достаточно проста, то смонтировать кровлю на ней под силу даже самостоятельно.</p>
<p>Эстетические свойства битумной черепицы также не могут остаться незамеченными. Кроме широкой гаммы расцветок, свойственной и другим видам покрытий, элементы гибкой черепицы могут выпускаться во множестве вариантов форм. Это отличная возможность придать кровле уникальную, привлекательную внешность. Обычно производители гибкой черепицы дают гарантию на изделие около 30 лет, но опыт показывает, что реальный срок службы значительно превышает гарантийный.</p>

<p>Технология производства битума достаточно сложна и основана на переработке природной смолы и добавлении в нее определенных вяжущих полимерных соединений. Иногда вместо них в битумные составы может добавляться бензин либо его производные. Конечно, материалы, изготовленные из такого битума, уже не столь экологичны, поэтому перед их покупкой у продавца необходимо попросить предоставить гигиенический сертификат.</p>

<h2>Композитная кровля</h2>

<p><a href="/catalog/krovelnye-materialy/kompozitnaya-cherepica-metrotile">Композитная металлочерепица</a> &ndash; еще один распространенный и при этом абсолютно экологически чистый материал. Его изготавливают из высококачественной легированной либо нержавеющей стали. Также в процессе производства она может:</p>
<ol>
<li>Покрываться антикоррозийными составами;</li>
<li>Обрабатываться специальными антибликовыми соединениями;</li>
<li>Покрываться средством, предотвращающим выгорание данного материала на свету. </li>
</ol>

<p>Выбор кровли из металлочерепицы не так прост, как кажется на первый взгляд. В настоящее время рынок кровельных материалов предлагает металлочерепицу с разнообразными вариантами полимерного покрытия.
Первый этап производства данного кровельного покрытия практически одинаков для всех видов металлочерепицы – стальной оцинкованный лист подвергается пассивировке и двусторонней грунтовке. На втором этапе нижний слой листа покрывается защитным слоем лака, а верхний – полимером.</p>

<p>Самый популярный кровельных материалов - то металлочерепица с покрытием из глянцевого полиэстера. Данный вид кровли имеет хорошие показатели по антикоррозиной устойчивости, а также по противостоянию воздействию ультрафиолетового излучения. Большим плюсом является и сравнительно небольшая цена черепицы из металла. Однако имеется у данного материала и существенная особенность – малая толщина полиэстерного покрытия способствует слабой устойчивости к механическим повреждениям, особенно это актуально при транспортировке и монтаже металлочерепицы.</p>
<p>Существует и матовый вариант полиэстерного покрытия, он не дает бликов на солнце, что отмечается потребителями, как явное достоинство.
Металлочерепица также выпускается производителями с покрытием из пурала (полиамид в сочетании с полиуретаном). Толщина такого слоя обычно равна 0,05 мм, что обуславливает его устойчивость к механическим воздействиям и позволяет долго сохранять первоначальный цвет кровельного материала. Разумеется, что и стоимость такой металлочерепицы будет выше, чем у полиэстерного варианта.</p>
<p>Следует заметить, что в дополнение к металлочерепице с покрытием из пурала или пластизола хозяева дома нередко выбирают в качестве фасадного отделочного материала сайдинг, как более простой виниловый вариант, так и цокольный. Виниловый сайдинг придает дому опрятный, законченный вид. Цокольный сайдинг обычно имитирует кирпич или камень, от такого здания веет респектабельностью и достатком.
<p>Самой дорогой следует признать металлочерепицу с покрытием из пластизола, такой полимерный слой имеет толщину в 0.2 мм, что придает высокую прочность данному кровельному материалу. Но и тут есть свои особенности. Такую металлочерепицу не рекомендуется использовать в районах с жарким климатом.</p>
<h2>Керамическая кровля</h2>
<p>Наконец, стабильно высоким спросом пользуются и кровельные материалы из натуральной керамики. Смотрится такая <a href="/catalog/krovelnye-materialy/imerys">керамическа черепица</a> просто великолепно, да и по своим практическим свойствам фактически безупречна. Ее также покупает все больше людей.</p>


 <h2>Купить кровлю в Минске. Актуальную цену на черепицу  уточняйте по телефонам, указанным на сайте.</h2>


</div>

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




elseif ($_SERVER['REQUEST_URI'] == '/services/fasadnye-raboty'):
  echo '
<div id="vt_main_com" class="vt_auto_cols contentwidthl floatleft">
<div class="vt_component_inside">
<span id="startOfPageId66"></span>
<div id="k2Container" class="itemView">
  <div class="itemHeader">
   <div class="itemTitle">
   <h1 class="itemTitle">Фасадные работы в Минске</h1>
   </div>


 </div>

 <!-- Plugins: AfterDisplayTitle -->

 <!-- K2 Plugins: K2AfterDisplayTitle -->


 <div class="itemBody">

<p>Компания «ПрофГрад» предлагает клиентам по всей Беларуси фасадные работы по приемлемым ценам!</p>
<p>Фасад любого дома – это его «лицо». Именно по фасаду складывается первое впечатление о здании, создается его имидж. И точно так же, как дом требует постоянного ухода и обновления изнутри, фасад требует ухода и обновления снаружи.</p>
<p>Мы поможем вернуть вашему дому былую прелесть, сделаем его более современным, заставим прохожих любоваться обновленным зданием!</p>
<h2>Утепление, облицовка и отделка фасадов под ключ</h2>
<p>Зачастую клиентам кажется, что они справятся с этим сами. Но все же лучше довериться профессионалам. Ведь фасадные работы представляют собой целый комплекс услуг, который непосилен простому обывателю:</p>
<ul>
<li>Очистка фасада. Процесс заключается в удалении грязи, ржавчины, извести и других отложений со стен и окон. Производится мощной струей воды с применением специальных средств, путем пескоструйной очистки, посредством обычной  мойки.</li>
<li>Отделка фасада. Включает в себя обновление облицовки здания (окраска, декоративный кирпич, сайдинг и т.д.) и придание ему защитных свойств.</li>
<li>Ремонт. Проводится как мелкое (местное), так и полное восстановление декора и функциональных качеств фасада. </li>
<li>Утепление фасада. В данном случае речь идет о двух видах работ. Более дешевый – «мокрый» фасад, когда теплоизолятор монтируется с помощью специального клея, дополнительного крепежа и последующего оштукатуривания. Более дорогой – навесной фасад с вентиляцией, который устанавливается путем специальной технологии: между фасадным слоем и поверхностью здания создается вентилируемый слой.</li>
</ul>
<p>Работы производятся в жилых и в нежилых зданиях разной высотности с помощью специального арсенала: строительных лесов, люлек, снаряжения для строительного альпинизма. </p>

<p>Помимо основных видов работ отделка фасадов в Минске и других городах включает множество нюансов. Наша компания предлагает:</p>
<ul>
<li>очистку от старой краски;</li>
<li>герметизацию межпанельных швов;</li>
<li>снятие старой штукатурки и наложение новой;</li>
<li>шпатлевку и грунтовку поверхности;</li>
<li>конечную отделку и окраску.</li>
</ul>

<p>Профессионалы компании «ПрофГрад» проложат гидроизоляционный слой на кровле, балконах, козырьках зданий; удалят последствия пожара, остатки после ремонтных и строительных работ; окрасят здание в любой цвет и облицуют любым декором; придадут фасаду водоотталкивающие свойства. Наши строительные альпинисты проведут высотный монтаж вентиляции, водосточных труб, карнизов, решеток, оконных отливов и других конструкций.</p>
<h2>Отделка и облицовка фасада качественными материалами!</h2>
<p>Конечно, внешняя отделка дома всегда зависит от вкусов, предпочтений и финансовых возможностей клиентов. На сегодня для наружной облицовки используется множество материалов: плитка, сайдинг, оштукатуривание, вагонка. Мы предлагаем клиентам такую услугу как облицовка дома кирпичом и клинкерной плиткой! Этот вид отделки создает презентабельный облик здания, в корне меняет его экстерьер, многократно продлевает срок службы фасада. </p>
<p>Вы можете выбрать любые виды перечисленных выше услуг.  Мы воплотим ваши мечты в реальность, учтем все ваши пожелания. Вы сами сможете участвовать в разработке проекта фасада и следить за ходом выполнения фасадных работ.</p>



<p>В нашей компании работают только профессионалы своего дела! Сотрудники постоянно повышают квалификацию и осваивают самые современные методы, которые появляются на международном строительном рынке. Мы имеем значительный опыт фасадных работ по всей стране!</p>
<p>Мы ценим и уважаем каждого клиента и подходим к делу с полной ответственностью. Даем гарантии на произведенные фасадные работы и предлагаем оптимальные расценки. Компания «ПрофГрад» - ваш надежный партнер! Обращайтесь к нам в любое время!</p>
 <h2>Цены на фасадные работы в Минске уточняйте по телефонам, указанным на сайте.</h2>


</div>

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
<tr><p style="text-align: left; font-size:120%;"><a href="/catalog/krovelnye-materialy/krovlia-iko/hex">Самоклеющаяся битумная черепица Iko Хекс</a></p></tr>
<tr>
<td>
<a href="/catalog/krovelnye-materialy/krovlia-iko/hex" title="Мягкая кровля IKO - Номер один Хекс" id="yui_3_13_0_1_1464269536551_66"><img style="float: left; margin: 5px;" width="180px;" src="/images/iko/hex_korichnevij_07.jpg" src="/images/iko/hex_korichnevij_07.jpg" border="0"></a>
</td>
<td>
<ul>
<li>Цена: от 5,49 евро/м2</li>
<li>Гарантия: 20 лет</li>
<li>Это черепица, обладающая самой лучшей ценой среди всех импортных черепиц в Беларуси.  Качественная мягкая кровля традиционной формы в виде шестиугольных “сот”. Полностью самоклеющаяся.</li>
</ul>
</td>
</tr>
</table>

<table rules="none">
<tr><p style="text-align: left; font-size:120%;"><a href="/catalog/krovelnye-materialy/krovlia-iko/3tab">Битумная черепица Iko Тритаб</a></p></tr>
<tr>
<td>
<a href="/catalog/krovelnye-materialy/krovlia-iko/3tab" title="Битумная черепица IKO - Номер один Тритаб" id="yui_3_13_0_1_1464269536551_81"><img style="float: left; margin: 5px;" src="/images/iko/Tritab_krasnij_10.jpg" src="/images/iko/Tritab_krasnij_10.jpg" border="0" width="180px;"></a>
</td>
<td>
<ul>
<li>Цена: от 6,19 евро/м2</li>
<li>Гарантия: 20 лет</li>
<li>Исполненный в форме прямоугольников, традиционных для западного кровельного стиля, популярного в США и Канаде.</li>
</ul>
</td>
</tr>
</table>

<table rules="none">
<tr><p style="text-align: left; font-size:120%;"><a href="/catalog/krovelnye-materialy/krovlia-iko/biber">Битумная черепица Iko Бобровый хвост</a></p></tr>
<tr>
<td>
<a href="/catalog/krovelnye-materialy/krovlia-iko/biber" title="Мягкая кровля IKO - Номер один Бобровый хвост" id="yui_3_13_0_1_1464269536551_89"><img style="float: left; margin: 5px;" src="/images/iko/Bobrovij%20hvos_zelenij_04.jpg" src="/images/iko/Bobrovij%20hvos_zelenij_04.jpg" border="0" width="180px;"></a>
</td>
<td>
<ul>
<li>Цена: от 6,69 евро/м2</li>
<li>Гарантия: 20 лет</li>
<li>Выполненна в форме закругленных прямоугольников, напоминающие бобровый хвост, которые имитируют старую черепичную кровлю из натуральной глины.</li>
</ul>
</td>
</tr>
</table>

<table rules="none">
<tr><p style="text-align: left; font-size:120%;"><a href="/catalog/krovelnye-materialy/krovlia-iko/skyline">Самоклеющаяся битумная черепица Iko Скайлайн</a></p></tr>
<tr>
<td>
<a href="/catalog/krovelnye-materialy/krovlia-iko/skyline" title="Битумная черепица IKO - Скайлайн" id="yui_3_13_0_1_1464269536551_97"><img style="float: left; margin: 5px;" src="/images/iko/Skyline_dual_brown_27_2.jpg" src="/images/iko/Skyline_dual_brown_27_2.jpg" border="0" width="180px;"></a>
</td>
<td>
<ul>
<li>Цена: от 5,49 евро/м2</li>
<li>Гарантия: 25 лет</li>
<li>Исполнена в виде прямоугольников с "тенями". Для тех, кто предпочитает правильные геометрические формы и четкие линии в дизайне крыши дома.</li>
</ul>
</td>
</tr>
</table>

<table rules="none">
<tr><p style="text-align: left; font-size:120%;"><a href="/catalog/krovelnye-materialy/krovlia-iko/armoshild">Самоклеющаяся битумная черепица Iko Армошилд  </a></p>
</tr>
<tr>
<td>
<a href="/catalog/krovelnye-materialy/krovlia-iko/armoshild" title="Мягкая кровля IKO - Армошилд" id="yui_3_13_0_1_1464269536551_105"><img style="float: left; margin: 5px;" src="/images/iko/Armoshield_Shapel_26.jpg" src="/images/iko/Armoshield_Shapel_26.jpg" border="0" width="180px;"></a>
</td>
<td>
<ul>
<li>Цена: от 6,99 евро/м2</li>
<li>Гарантия: 25 лет</li>
<li>Выполнена в форме традиционных шестиугольных "сот". Самоклеющаяся коллекция черепицы очень надежна, может противостоять самым сильным ветрам и ураганам, благодаря клеевой основе с обратной стороны гонта. </li>
</ul>
</td>
</tr>
</table>

<table rules="none">
<tr><p style="text-align: left; font-size:120%;"><a href="/catalog/krovelnye-materialy/krovlia-iko/xpress">Самоклеющаяся битумная черепица Iko Кембридж XPRESS</a></p></tr>
<tr>
<td>
<a href="/catalog/krovelnye-materialy/krovlia-iko/xpress" title="Мягкая кровля IKO - Кембридж" id="yui_3_13_0_1_1464269536551_113"><img style="float: left; margin: 5px;" src="/images/iko/Cambridge_Kedr_49.jpg" src="/images/iko/Cambridge_Kedr_49.jpg" border="0" width="180px;"></a>
</td>
<td>
<ul>
<li>Цена: от 9,49 евро/м2</li>
<li>Гарантия: 30 лет</li>
<li>Одна из самых надежных кровельных черепиц в линейке концерна IKO Sales International, которая является результатом применения на практике многолетнего опыта изготовления качественных и долговечных кровельных материалов.</li>
</ul>
</td>
</tr>
</table>


  <!--
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
-->
<p>Для фамильного дела самая важная ценность – это авторитет. Компания IKO в этом плане не исключение. IKO имеет долгую историю развития, которой хозяева очень гордятся, и восхищается весь мир.</p>
<p>В 1922 году Исидор Кошицкий в возрасте 17 лет начал свою долгую карьеру в кровельной отрасли, когда пришел на работу продавцом на производство кровельных материалов в бизнес своего отца. Компания успешно процветала в Канаде, что привело к дальнейшему расширению и выходу на европейский рынок в 1972 году. А уже в 1979 году открылись новые заводы в Северной Америке. Сегодня, более чем 60 лет после своего основания, компания выросла в число крупнейших мировых экспортеров мягкой битумной черепицы. Теперь компания IKO - предприятие, со штатом более чем 3000 сотрудников и множеством производственных предприятий в Канаде, США, Англии, Бельгии, Голландии, Франции и Словакии.</p>
<h2>Почему стоит купить мягкую битумную кровлю IKO</h2>
<p>Базальтовый гранулят удерживает на крыше снег, тем самым обеспечивая возможность избежать резкого схода снега весной. Более того, с черепицей IKO Вам не придется покупать дополнительные снегозадержатели. Битум производства IKO уникален тем, что он обладает очень высокой плотностью и низким риском возгорания. Купить мягкую кровлю – значит защитить свой дом и свою семью.</p>
<p><img src="/images/cherepitsa-iko.jpg" border="0" alt="гибкая черепица Ико, технология монтажа" /></p>
<p><b><em>Гибкая черепица IKO – в дружбе с окружающей средой</em></b></p>
<p>Уникальная мягкая кровля iko производится из окисленного битума. Окисление - это дорогостоящий процесс насыщения материала кислородом, другими словами - быстрое состаривание. Такая кровля не имеет вредного и неприятного химического запаха, хорошо переносит перепад температур, не меняется со временем, не трескается, не пузырится, не становится жесткой. Спустя многие годы, только IKO будет выглядеть как новая. Завод IKO большую часть своего капитала вкладывает в новые технологии, и весь цикл производства кровли происходит на заводе, применяя только собственное натуральное сырье.</p>
<p><b><em>Мягкая кровля IKO – бренд, которому можно доверить свой дом</em></b></p>
<p>При монтаже мягкой кровли за основу берется стеклохолст. Плотность стеклохолста IKO выше, 130 гр./м.кв., а диаметр в 3 раза больше чем, у других производителей! Таким образом, завод способен минимизировать брак и делает <a href="/services/krovelnye-raboty">монтаж кровли</a> идеальной и долговечной. Вы можете не бояться появления заломов и протеканий.</p>
<p>За счет наиболее высокой концентрации битума в черепице IKO эта кровля имеет самые высокие показатели ветроустойчивости. Гранулы мягкой кровли IKO имеют более круглую форму по сравнению с конкурентами. Это дает возможность им более глубоко внедряться в гонт битумной мягкой кровли, тем самым повышая прочность на 30-40% по сравнению с кровельными материалами, где более плоские гранулы.</p>
<p>В коллекции мягкой черепицы Кембридж IKO имеется высокий уровень гидроизоляции за счет 4-х слоев. <b><span style="color: #2fc7a9;">IKO – единственная компания, которая может предоставить платиновую гарантию на свою черепицу от 25 лет!</span></b></p>
<p><b><em>Гибкая черепица IKO – естественная красота вашего дома</em></b></p>
<p>Коллекции IKO отличаются благородными природными оттенками. При окрашивании гранул IKO использует метод, при котором частицы прокрашиваются очень глубоко, что сохраняет нужный оттенок на все время использования. Далее материалы покрываются специальным раствором, отражающим ультра-фиолетовые лучи, благодаря чему кровля не выгорит и будет выглядеть как новая очень долгое время. Все это позволяет забыть о проблемах с кровлей, а лишь получать эстетическое удовольствие и комфортно проживать под крышей своего дома, несмотря на высокие цены на гибкую черепицу.</p>
<p><b><em>Гибкая черепица IKO – возможность творчества</em></b></p>
<p>Мягкая кровля iko применима в любом, даже самом нестандартном проекте. Гибкую черепицу применяют при самых маленьких радиусах и крутых изгибах. И все это никаким образом не повлияет на качество и сложность монтажа.</p>


<h2>Купить гибкую черепицу в Минске по выгодной цене!</h2>
<p>В Минске множество предложений по покупке битумной мягкой кровли, однако аналогов бренду IKO нет нигде. Перед покупкой рекомендуем Вам посетить наш <a href="/about-profgrad/show-room">шоурум</a>, чтобы оценить качество материала вживую, а так же и получить консультацию от специалистов нашей компании, уточнить цену. </p>

<h2>Коллекции гибкой битумной черепицы Iko</h2>

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
<p>Цена гибкой битумной черепицы зависит от сложности монтажа и выбранного материала кровли.</p>

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

<table align="center">
<tr>
<td width="100%">
<h3>Мансардные окна VELUX OPTIMA Класс Стандарт</h3>
<p>Линия окон VELUX OPTIMA Класс Стандарт предназначена для комнат мансардного типа. Выгодно отличается наличием ручки-планки. Для удобства потребителей предусмотрено два варианта крепления ручки:</p>
<ul>
  <li>Ручка размещается внизу оконной конструкции, если окно расположено высоко под потолком и нет возможности открыть его без дополнительных приспособлений.</li>
  <li>Верхний вариант крепления предусмотрен для низко расположенных окон, которые позволяют получить прекрасный обзор местности. В этом случае до ручки не помешает добраться даже рядом расположенная мебель.</li>
  <li>Встроенная система вентиляции позволяет выполнять проветривание помещения даже при закрытом окне.</li>
  <li>Предусмотрены два варианта позиций окна для выполнения проветривания.</li>
  <li>С наружной стороны оконного проема установлены закаленные стекла, это защищает конструкцию от града.</li>
  <li>Применение рамы, которая более узкая, чем обычная, увеличило оконные проемы, и поток попадающего в комнату света вырос на 10%.</li>
</ul>
</td></tr>
</table>
<table width="900px;">

<tr>
<td width="50%">
<a href="/catalog/mansardnye-okna-velux/gzr-3050" >GZR 3050 Ручка сверху</a><br />
<ul>
  <li> Ручка вверху: удобная ручка-планка (Алюминиевая)</li>
  <li> Деревянная рама</li>
  <li> Комплексная защита от непогоды</li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
</ul>

</td>

<td width="50%">

<img src="/images/gzr_124982%2001_940x940.png" border="0" width="350" align="right">
</td>
</tr>

<tr>
<td  width="50%">

<a href="/catalog/mansardnye-okna-velux/gzr-3050b" >GZR 3050B Ручка снизу</a><br />
<ul>
  <li> Ручка снизу: базовая, 3-х позиционная ручка (Цинк)</li>
  <li> Деревянная рама</li>
  <li> Комплексная защита от непогоды</li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
</ul>

</td>

<td width="50%">

<img src="/images/gzr b_124981 01_940x940.png" border="0" width="350" align="right">
</td></tr>
</table>
<table width="900px;">

<tr>

<td>
<h3>Мансардные окна VELUX OPTIMA Класс Комфорт</h3>

<p>Окна VELUX OPTIMA Класс Оптима предназначены для установки в мансардных помещениях. Они отличаются современным дизайном исполнения, высоким качеством отделки. Узкая оконная рама придает конструкции стильный элегантный вид, который хорошо дополняется качественно выполненной отделкой деревянной поверхности.</p>
<p>Применение в окнах стеклопакетов триплекс защищает потребителей от возможного появления осколков. При разрушении кусочки стекла остаются на пленке. Особые устройства обеспечивают вентиляцию помещений при закрытых окнах. Кроме того, предусмотрено два положения рамы в режиме проветривания.</p>
<p>В связи с тем, что окна устанавливаются на крыши, которые имеют угол наклона, предусмотрена дополнительная защита от снега на зимний период. Для этого по низу окна и его боковым поверхностям в рамах предусмотрены дополнительные уплотнительные элементы. Они выполняют герметизацию неподвижной части окна и боковых поверхностей поворотной рамы.</p>
<p>Конструкция GLR 3073 BTIS предназначена для любителей экспериментов, тех, кто на момент покупки не определился с местом установки окна и, следовательно, не может выбрать, какой из вариантов мест расположения ручки предпочесть. Для этого случая предусмотрена установка двух ручек.</p>
<p>Окно GLP 0073 BIS отличается от всей серии и признано наилучшим вариантом для комнат повышенной влажности, таких как ванная, кухня. Имеет белоснежную конструкцию, легко обслуживается, хорошо моется. С учетом возможного расположения окна под углом на крыше внутренняя полость заполнена вспененным полистиролом.</p>

</td>
</tr>
</table>
<table width="900px;">

<tr>
<td>
<a href="/catalog/mansardnye-okna-velux/glr-3073" >GLR 3073 Ручка сверху</a><br />
<ul>
  <li> Ручка вверху: удобная ручка-планка (Алюминиевая)</li>
  <li> Деревянная рама</li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
  <li> Дополнительная снеговая защита и защита от сквозняков</li>
  <li> Безопасный стеклопакет &quot;Триплекс&quot;</li>
  <li> Стильный дизайн</li>
</ul>


</td>

<td>

<img src="/images/glr_cross sale_124979 01_940x940.png" border="0" width="350" align="right">
</td>
</tr>
<tr>
<td>
<a href="/catalog/mansardnye-okna-velux/glr-3073b" >GLR 3073B Ручка внизу</a><br />
<ul>
  <li> Ручка снизу: стильная элегантая, 3-х позиционная ручка (Цинк)</li>
  <li> Деревянная рама</li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
  <li> Дополнительная снеговая защита и защита от сквозняков</li>
  <li> Безопасный стеклопакет &quot;Триплекс&quot;</li>
  <li> Стильный дизайн</li>
</ul>

</td>
<td>


<img src="/images/glr b_cross sale_124978 01_940x940.png" border="0" width="350" align="right">
</td></tr>


<tr>
<td>
<a href="/catalog/mansardnye-okna-velux/glr-3073bt" >GLR 3073BT Ручка вверху и снизу</a><br />
<ul>
  <li> Две ручки открывания: вверху и снизу</li>
  <li> Деревянная рама</li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
  <li> Дополнительная снеговая защита и защита от сквозняков</li>
  <li> Безопасный стеклопакет &quot;Триплекс&quot;</li>
  <li> Стильный дизайн</li>
</ul>


</td>

<td>

<img src="/images/glr bt_cross sale_124980 01_940x940.png" border="0" width="350" align="right">
</td>
</tr>


<tr>
<td>
<a href="/catalog/mansardnye-okna-velux/glp-0073b" >GLP 0073B Белый пластик</a><br />
<ul>
  <li> Ручка снизу: стильная элегатная, 3-х позиционная ручка (Цинк) </li>
  <li> ПВХ-рама: улучшенный ПВХ-профиль окна (адаптирован для скатных кровель)</li>
  <li> Влагостойкий белый пластик - легко мыть</li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
  <li> Дополнительная снеговая защита и защита от сквозняков</li>
  <li> Безопасный стеклопакет &quot;Триплекс&quot;</li>
  <li> Стильный дизайн</li>
</ul>

</td>

<td>


<img src="/images/glp_cross sale_124983 01_940x940.png" border="0" width="350" align="right">
</td></tr>
</table>
<table width="900px;">

<tr>
<td>
<h3>Мансардные окна VELUX PREMIUM</h3>


<p>Серия окон VELUX PREMIUM будет высоко оценена любителями комфорта и уюта. При изготовлении окон для мансарда этой линии применялись новейшие компьютерные разработки и технологические решения, использован стильный дизайн в отделке оконных блоков. Все это выгодно отличает окна данной линии от аналогичных конструкций.</p>
<p>Применяемая технология изоляции за счет герметичного уплотнителя по периметру окна ThermoTechnology<sup>тм</sup>позволяет сохранить теплый микроклимат в холодный период, что помогает экономить на оплате энергоносителей. В окнах данной серии используется более совершенная конструкция клапана-форточки. Кроме того, что это позволяет выполнять проветривание помещений при закрытом окне, устройство дает возможность определить, в каком положении клапан находится в данный момент.</p>
<p>Применение сменного фильтра, который можно мыть в процессе эксплуатации, создает постоянный приток в помещение очищенного от пыли и насекомых воздуха. Главным отличием окон этой серии считается возможность управлять всеми операциями, связанными с эксплуатацией окон, через пульт. Трудно переоценить те преимущества, которые дает человеку власть над окном и над его аксессуарами, причем на расстоянии. Достаточно нескольких движений пальцами по сенсорному пульту управления, и вы получаете массу возможностей:</p>
<ul>
  <li>Можно впустить в комнату свежий воздух, позволить солнечному свету заполнить пространство.</li>
  <li>Применение режима &laquo;В отпуске&raquo; позволяет создать иллюзию постоянного движения в квартире на период отсутствия. По заранее заданной команде в установленное время будет обеспечено движение штор и окон, как в случае присутствия человека.</li>
  <li>Разработан режим, который на период отсутствия жильцов обеспечивает автоматическое закрытие всех окон.</li>
  <li>Имеется возможность определить индивидуально время закрытия и открытия окон. Эта команда будет выполняться автоматически.</li>
  <li>Удобный стильный дизайн пульта позволяет хранить его на поверхности мебели, носить в карманах и крепить на стене при необходимости.</li>
</ul>
<p>VELUX CABRIOсчитается наибольшим достижением серии VELUX PREMIUM. Элегантный и стильный дизайн дает возможность быть наедине с природой, не выходя из мансарды.</p>
</td>
</tr>
</table>
<table width="900px;">
<tr>
<td>
<a href="/catalog/mansardnye-okna-velux/ggl-3070" >GGL 3070 Дерево</a><br />
<ul>
  <li> Ручка вверху: удобная ручка-планка (Алюминиевая) с клапаном-форточкой для проветривания</li>
  <li> Деревянная рама</li>
  <li> ThermoTechnology<sup>тm</sup></li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
  <li> Дополнительная снеговая защита и защита от сквозняков</li>
  <li> Безопасный стеклопакет &quot;Триплекс&quot;</li>
  <li> Стильный дизайн</li>
</ul>


</td>
<td>

<img src="/images/ggl_cross sale_116271 01_940x940.png" border="0" width="350" align="right">
</td>
</tr>

<tr>
<td>
<a href="/catalog/mansardnye-okna-velux/ggu-0070" >GGU 0070 Полиуретан</a><br />
<ul>
  <li> Ручка вверху: удобная ручка-планка (Алюминиевая) с клапаном-форточкой для проветривания</li>
  <li> Деревянная рама, покрытая влагостойким полиуретановым покрытием. Для влажных помещений</li>
  <li> ThermoTechnology<sup>тm</sup></li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
  <li> Дополнительная снеговая защита и защита от сквозняков</li>
  <li> Безопасный стеклопакет &quot;Триплекс&quot;</li>
  <li> Стильный дизайн</li>
</ul>
<div>

</div>
</td>
<td>


<img src="/images/ggu_cross sale_116626 01_940x940.png" border="0" width="350" align="right">
</td></tr>


<tr>
<td>
<a href="/catalog/mansardnye-okna-velux/ggl-3066-ggu-0066" >GGL 3066 / GGU 0066 Супертеплые окна</a><br />
<ul>
  <li> Ручка вверху: удобная ручка-планка (Алюминиевая) с клапаном-форточкой для проветривания</li>
  <li> Деревянная рама / Деревянная рама, покрытая влагостойким полиуретановым покрытием. Для влажных помещений</li>
  <li> ThermoTechnology<sup>тm</sup></li>
  <li> Двухкамерный стеклопакет</li>
  <li> &quot;Анти-роса&quot;: внешнее покрытие стекла</li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
  <li> Дополнительная снеговая защита и защита от сквозняков</li>
  <li> Безопасный стеклопакет &quot;Триплекс&quot;</li>
  <li> Стильный дизайн</li>
</ul>

</td>

<td>
<img src="/images/ggl_cross sale_116271 01_940x940.jpg" border="0" width="350" align="right">
</td>
</tr>

<tr>
<td>
<a href="/catalog/mansardnye-okna-velux/integra-ggu-0070-integra-ggl-3070" >INTEGRA GGU 0070 / INTEGRA GGL 3070</a><br />
<ul>
  <li> Ручка вверху: удобная ручка-планка (Алюминиевая) с клапаном-форточкой для проветривания</li>
  <li> Деревянная рама / Деревянная рама, покрытая влагостойким полиуретановым покрытием. Для влажных помещений</li>
  <li> ThermoTechnology<sup>тm</sup></li>
  <li> Двухкамерный стеклопакет (в этой серии доступен по спец.заказу)</li>
  <li> Датчик дождя</li>
  <li> Сенсорный пульт (автоматические программы)</li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
  <li> Дополнительная снеговая защита и защита от сквозняков</li>
  <li> Безопасный стеклопакет &quot;Триплекс&quot;</li>
  <li> Стильный дизайн</li>
</ul>

</td>

<td>


<img src="/images/velux-ggu-integra-outside.jpg" border="0" width="350" align="right">
</td></tr>

<tr>

<td>
<a href="/catalog/mansardnye-okna-velux/gpu0070-gpl3070" >GPU0070 / GPL3070 Панорамные окна</a><br />
<ul>
  <li> Ручка вверху: удобная ручка-планка (Алюминиевая) с клапаном-форточкой для проветривания, и ручка снизу.</li>
  <li> Деревянная рама / Деревянная рама, покрытая влагостойким полиуретановым покрытием. Для влажных помещений</li>
  <li> ThermoTechnology<sup>тm</sup></li>
  <li> Двухкамерный стеклопакет (в этой серии доступен по спец.заказу)</li>
  <li> Два варианта открывания: по оси по-середине или по верхней оси</li>
  <li> Больше света на 10%</li>
  <li> Встроенная вентиляция</li>
  <li> Закаленное стекло: защита от града</li>
  <li> Фильтр от пыли и насекомых</li>
  <li> Дополнительная снеговая защита и защита от сквозняков</li>
  <li> Безопасный стеклопакет &quot;Триплекс&quot;</li>
  <li> Стильный дизайн</li>
</ul>

</td>

<td>
<img src="/images/1391185671-37681200.jpg" border="0" width="350" align="right">
</td></tr>
</table>


<table width="900px;">



<tr><td>
<p><img src="/images/Integra_interior_vert280x210.jpg" border="0" width="280" style="float: left; margin-left: 10px; margin-right: 10px;"><a href="/catalog/mansardnye-okna-velux/integra">Velux INTEGRA "Умное" окно со встроенным электрооборудованием</a>. Комфорт - нажатием одной кнопки. Максимум комфорта. Контролируйте климат и освещение в комнате с помощью пульта дистанционного управления. Использованы современные технологии, основанные на стандарте беспроводной связи io-homecontrol.</p><p>Уникальный код исключает доступ с «чужого» пульта и пересечение с «чужими» продуктами.</p></td></tr>
<p>Подходит для любых кровель с углом наклона 15-90°.</p>


<tr><td>
<p><img src="/images/103052-01-exterior_280x210.jpg" border="0" width="280" style="float: left; margin-left: 10px; margin-right: 10px;"><a href="/catalog/mansardnye-okna-velux/zenitnoe-okno">Решение Velux для плоских кровель: зенитное окно</a>. Дополнительное освещение помещений, расположенных непосредственно под плоской или малоуклонной кровлей. <br>Для кровель с уклоном от 0 до 15º.</p>
</tr>
<tr>
<td>
&nbsp;
</td>
</tr>
<tr><td>
<p><a href="/catalog/mansardnye-okna-velux/svetovoy-tonel"><img width="280" src="/images/1503-01-STI_w280.jpg" border="0" style="float: left; margin-left: 10px; margin-right: 10px;">Дневной свет для помещений без окон</a>. Теперь дневной свет доступен даже для помещений, где установка фасадных или мансардных окон невозможна. Например, в ванной, коридоре, офисных комнатах. Световой туннель Velux позволит вам сделать эти комнаты светлыми и комфортными.</p><p>Световой туннель устанавливается в крышу так же, как мансардное окно Velux. В потолок встраивается плафон диаметром 35 см. Эти два элемента соединяются друг с другом с помощью гофрированной (модели TWF/TLF) или фиксированной (жесткой)трубы (модели TWR/TLR) со светоотражающим покрытием. </p><p>Модели TWF/TWR предназначены для установки в профилированный кровельный материал. Модели TLF/TLR– в плоский кровельный материал.</p>
</td></tr>
<tr>
<td>
&nbsp;
</td>
</tr>
<tr><td>
<p style="text-align: justify;"><img src="/templates/vt_marketing/GVT.jpg" border="0" width="280"  style="float: left; margin-left: 10px; margin-right: 10px;">Окно-люк GVT. Это небольшое окно подходит для выхода через него на крышу. Имеет специальную дверь, открывающуюся наружу на 90 градусов. Покрыто полиуретаном черного цвета. Подходит для неотапливаемых чердачных помещений.</p>
<p>Рама изготовлена из черного полиуретана, створка из анодированного алюминия. Встроенный универсальный оклад.</p>
<p>Формат, мм: 54х83 </p>
</td></tr>
<tr>
<td>
&nbsp;
</td>
</tr>
<tr><td>
<p><img src="/templates/vt_marketing/GXL.jpg" border="0" width="280" style="float: left; margin-left: 10px; margin-right: 10px;">Эксплуатационный выход GXL. Это окно имеет свойство выхода на крышу. В ней смонтирована специальная дверь, открывающаяся наружу под углом до 73 градусов. Это окно предназначено для отапливаемой мансарды. Подходит для крыш с углом ската до 55 градусов.</p>
<p>Газовый амортизатор в верхней части оконной створки облегчает ее открывание.</p>
<p>Формат, мм: F06 66х118</p>
</td></tr>
<tr>
<td>
&nbsp;
</td>
</tr>
<tr><td>
<p><img src="/templates/vt_marketing/GTL.jpg" border="0" width="280" style="float: left; margin-left: 10px; margin-right: 10px;">Аварийный выход GTL. Мансардное окно Velux со всеми характеристиками и функциями окна GPL и одновременно аварийный выход на крышу. </p>
<p>Увеличенный угол окрывания - до 73°. При нажатии ручки для аварийного выхода окно автоматически открывается газовыми амортизаторами. </p>
<p>Подходит для любых кровель с углом наклона от 15 до 55°, где необходим технологический или аварийный выход на крышу.</p>
<p>Форматы, мм.: М08 76х140, S08 114x140</p>
</td></tr>
<tr>
<td>
&nbsp;
</td>
</tr>
<tr><td>
<p>У нас разработана отличная система скидок для покупателей кровельных материалов, поэтому мы можем предложить выгодные цены на мансардные окна Velux. А все аксессуары Вы также можете приобрести вместе с окном. </p>
<p>В купить мансардные окна Велюкс в Минске можно в компании «Профгад». На ул. Мележа,5 в красивом новом шоуруме Вы можете получить консультацию, узнать какие модели подходят Вашему дому и посмотреть образцы.</p>
</td></tr>
</table>
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
if ($_SERVER['REQUEST_URI'] == '/fasadnye-materialy/cveta-vandersanden'):

  echo '<div><h2>Клинкерный кирпич ручной формовки Vandersanden</h2>
  <p>Обустройство фасада является очень ответственным мероприятием, от которого зависит не только внешний облик строения, но и его эксплуатационные возможности. Учитывая все это, бельгийская торговая марка VANDERSANDEN смогла создать уникальный клинкерный кирпич ручной формовки.</p>
  <p>Материал совместил в себе инновационные технологии и обаяние исторических архитектурных решений. Выбрав для внешней облицовки именно такую продукцию, можно получить эффектный, презентабельный и уникальный фасад со множеством качественных преимуществ.</p>
  <p>Искусственно состаренный кирпич придаст внешнему виду здания особую пикантность, превратив его в настоящее произведение искусства. Огромный ассортимент цветовых и фактурных решений позволяет реализовывать самые замысловатые архитектурные решения.</p>
  <p>Но не только привлекательность и креативный подход к оформлению продукции отличает производителя Vandersanden. Компания прикладывает огромное количество усилий для того, чтобы клинкерная плитка под кирпич отлично справлялась с различными негативными внешними факторами, в том числе:</p>
  <ul>
  <li>температурными перепадами;</li>
  <li>осадками;</li>
  <li>попаданием прямых солнечных лучей.</li>
  </ul>
  <p>Такой профессиональный подход и делает отделочные материалы этой компании столь популярными.</p>
  <h2>Состаренный кирпич под плитку &ndash; идеальный выбор для отделки фасада!</h2>
  <p>Выбирая для декорирования фасада облицовочный кирпич ручной формовки Vandersanden, можно получить множество преимуществ:</p>
  <ul>
  <li>Вся продукция производится путем ручной формовки, что позволяет контролировать безупречность качества.</li>
  <li>Во всех коллекциях этого бренда используется эффект &laquo;старины&raquo;, благодаря которому кирпич может применяться не только для декорирования новых построек, но и в процессе реставрации важных архитектурных конструкций.</li>
  <li>Эксплуатационные характеристики кирпича значительно превосходят традиционную фасадную штукатурку или краску. В процессе его производства выполняется смешивание редких пород глины, что и придает материалу прочность, морозоустойчивость, способность не терять свой первоначальный внешний облик даже после десятков лет эксплуатации.</li>
  <li>Хорошие показатели водопоглощения &ndash; еще одно неоспоримое достоинство продукции Vandersanden. Благодаря такой особенности клинкерная плитка под кирпич препятствует проникновению влаги к утеплителю, сохраняя тем самым теплоизоляционные свойства строения.</li>
  <li>Огромный ассортимент дизайнерских решений, среди которых можно подобрать самый удачный вариант для отдельного строения.</li>
  </ul>
  <p>Отделочные материалы от компании Vandersanden, несмотря на безупречные качественные характеристики, представлены по очень выгодной цене. Такой эксклюзивный фасад сможет позволить себе каждый желающий!</p>
  <h2>Купить облицовочный кирпич ручной формовки Вандерсанден по выгодной цене!</h2>
  <p>Чтобы купить клинкерный кирпич Вандерсанден самого высокого качества и по очень привлекательной стоимости, необходимо обратиться в нашу компанию. Мы предлагаем только самый лучший состаренный кирпич, позволяющий реализовывать даже самые смелые задумки дизайнеров.</p>
  <p>Правильно подобранная клинкерная плитка под кирпич превратит даже самое скромное строение в очень элегантный и презентабельный дом. А выгодная цена на облицовочный кирпич сделает процесс отделки еще и очень экономичным.</p>
  </div>';

endif;
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

        <jdoc:include type="modules" name="adaptive-buttons" style="xhtml" />
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


<div class="popap_form_bl">
  <div class="popap_form_bg"></div>
  <div class="popap_form">
    <jdoc:include type="modules" name="for_popap_form" style="xhtml" />
    <div class="popap_form_close"></div>
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


                <div class="main-menu-bl">
                    <div class="main-menu__logo">
                        <div class="container">
                            <a href="/"><img src="/images/new_logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="main-menu__button">
                        <span class="button-text-close">Меню</span>
                        <span class="button-text-open">Закрыть меню</span>
                    </div>
                    <div class="main-menu__content">
                        <div class="container">
                            <div class="main-menu__list">
                                <div class="main-menu__item clearfix">
                                    <div class="item-title">О компании</div>
                                    <div class="item-content"><jdoc:include type="modules" name="main-menu-1" style="xhtml" /></div>
                                </div>
                                <div class="main-menu__item clearfix">
                                    <div class="item-title"><a href="#">Каталог материалов</a></div>
                                    <div class="item-content"><jdoc:include type="modules" name="main-menu-2" style="xhtml" /></div>
                                </div>
                                <div class="main-menu__item clearfix">
                                    <div class="item-title"><a href="#">Строительные услуги</a></div>
                                    <div class="item-content"><jdoc:include type="modules" name="main-menu-3" style="xhtml" /></div>
                                </div>
                                <div class="main-menu__item clearfix">
                                    <div class="item-title">Галерея проектов</div>
                                    <div class="item-content"><jdoc:include type="modules" name="main-menu-4" style="xhtml" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
  <div id="mask"></div>
</body>
</html>