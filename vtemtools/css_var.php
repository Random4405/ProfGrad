<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="mailru-domain" content="DKmJnaWPSGikJUZY" />
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/css/styles.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/css/adaptive.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/css/styles/<?php echo $TemplateStyle;?>.css" type="text/css" />
<?php if($responsive) echo '<link rel="stylesheet" href="'.$this->baseurl.'/templates/'.$this->template.'/css/responsive.css" type="text/css" />';?>
<?php if($IE6Warning == 1){?>
<!--[if lte IE 6]>
<script src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/vtemtools/warning.js"></script>
<script>window.onload=function(){e("<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/vtemtools/ie6_warning/")}</script>
<![endif]-->
<?php 
}
if($webfont == 1){
echo '<script type="text/javascript">
      WebFontConfig = {
        google: { families: ["'.$googlefont.':400,300:latin"] }
      };
      (function() {
        var wf = document.createElement("script");
        wf.src = ("https:" == document.location.protocol ? "https" : "http") +
            "://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js";
        wf.type = "text/javascript";
        wf.async = "true";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(wf, s);
      })();
    </script>';
}
if($copyright == 1){
$vtcopyright = '<div class="vtem_copyright" style="text-align:center;padding:5px;"><a href="http://vtem.net" target="_blank"><img class="vtem_copyright_logo" src="'.$template_baseurl.'/vtemtools/widgets/images/vtem-logo.png"/></a></div>';
}else{$vtcopyright = '';}
?>
<!--[if lt IE 9]>
		<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
<![endif]-->

</head>