<?php
/**
 * @copyright  Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license    GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 * Bram Waasdorp Eerste versie 12/10/2011 template frontpage tbv website asha-s.com
 * 16/11/2011
 * 25/12/2011
 * 10/10/2012 versie 1
 * 11/11/2012 
 * 17/11/2012 versie 1.1
 * 2/12/2012 asynchrone ga tracker
 * 28/7/2013 position 3 en position 4 onder component toegevoegd.
 * 31/7/2013 nieuwe positie icons gecreerd voor facebook, twitter etca
  * 3/8/2013 area eerder gezet, zodat icons en logo aangeklikt kunnen worden ook als ze met area overlappen. 
 * 20/8/2013 display style voor menu aangepast voor Asha-s.com / (voor soekhan.nl zou deze regel niet moeten gelden, daarom ook variabel gemaakt)  
 * 7/9/2013 behavior.modal voor lightbox toegevoegd. 
 * 3/10/2013 bgPosition toegevoegd ivm kleinere plaatjes.
 * 23/11/2013 publisher link toegevoegd
 * 11/1/2014 canonical
 * 14-11-2015 gatracker verwijderd.
  */

// no direct access
/* defined( '_JEXEC' ) or die( 'Restricted access' ); */
 defined( '_JEXEC' ) or die;
JHtml::_('behavior.framework', true);
JHTML::_('behavior.modal'); 

// get params
$gplusProfile    = htmlspecialchars($this->params->get('gplusProfile'));
$bgImage    = htmlspecialchars($this->params->get('bgImage'));
$bgWidth    = htmlspecialchars($this->params->get('bgWidth'));
$bgTop      = htmlspecialchars($this->params->get('bgTop'));
$bgLeft      = htmlspecialchars($this->params->get('bgLeft'));
$bgColor    = htmlspecialchars($this->params->get('bgColor'));
$fgColor    = htmlspecialchars($this->params->get('fgColor'));

$icons      = htmlspecialchars($this->params->get('icons'));
$iconsWidth    = htmlspecialchars($this->params->get('iconsWidth'));
$iconsPosLeft    = htmlspecialchars($this->params->get('iconsPosLeft'));
$iconsPosTop    = htmlspecialchars($this->params->get('iconsPosTop'));

  
$logo      = htmlspecialchars($this->params->get('logo'));
$logoWidth    = htmlspecialchars($this->params->get('logoWidth'));
$logoPosLeft    = htmlspecialchars($this->params->get('logoPosLeft'));
$logoPosTop    = htmlspecialchars($this->params->get('logoPosTop'));

$contentPosLeft    = htmlspecialchars($this->params->get('contentPosLeft'));
$contentPosTop    = htmlspecialchars($this->params->get('contentPosTop'));
$contentWidth    = htmlspecialchars($this->params->get('contentWidth'));
$marginLeftRight   = htmlspecialchars($this->params->get('marginLeftRight'));

$footerWidth    = htmlspecialchars($this->params->get('footerWidth'));
$footerPosLeft    = htmlspecialchars($this->params->get('footerPosLeft'));
$footerPosBottom    = htmlspecialchars($this->params->get('footerPosBottom'));

  
$linkColor    = htmlspecialchars($this->params->get('linkColor'));
$linkDecoration    = htmlspecialchars($this->params->get('linkDecoration'));
$linkHvColor    = htmlspecialchars($this->params->get('linkHvColor'));

$menuMarginTop  = htmlspecialchars($this->params->get('menuMarginTop'));
$menuMarginLeft  = htmlspecialchars($this->params->get('menuMarginLeft'));
$menuColor    = htmlspecialchars($this->params->get('menuColor'));
$menuFontSize = htmlspecialchars($this->params->get('menuFontSize')); 
$menuDisplay = htmlspecialchars($this->params->get('menuDisplay'));
$menuDecoration    = htmlspecialchars($this->params->get('menuDecoration'));
$menuHvColor    = htmlspecialchars($this->params->get('menuHvColor'));
$menuHvDecoration  = htmlspecialchars($this->params->get('menuHvDecoration'));
$menuActiveColor  = htmlspecialchars($this->params->get('menuActiveColor'));
$menuActiveDecoration  = htmlspecialchars($this->params->get('menuActiveDecoration'));


$app      = JFactory::getApplication();
$doc      = JFactory::getDocument();
$templateparams  = $app->getTemplate(true)->params;



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>"  
 xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" lang="<?php echo $this->language; ?>" >
<?php $app = JFactory::getApplication(); ?>
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<?php if ($gplusProfile > " ") : ?><link rel="publisher" href="<?php echo $gplusProfile ?>" /><?php endif; ?>
<?php include("include_link_rel_canonical.php"); ?>


<!--[if lte IE 6]>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ieonly.css" rel="stylesheet" type="text/css" />

<![endif]-->

<!--[if IE 7]> 
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie7only.css" rel="stylesheet" type="text/css" />
<![endif]--> 


<?php if($this->direction == 'rtl') : ?>
  <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template_rtl.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<!-- styles declared here to make them easier to parametrize and overrule some template.css declarations -->
<!-- Versie 7-9-2013 -->
<style type="text/css">
body,
body#page_bg,
div.moduletable_menu ul,
div.module_menu ul,
ul.menu_menu
{ 
<?php if ($bgColor > " ") : ?>background-color: <?php echo $bgColor ?>; <?php endif; ?>/* #080810 */
<?php if ($fgColor > " ") : ?>color: <?php echo $fgColor ?>; <?php endif; ?>
}

a,
a:link,
a:visited
{
<?php if ($linkColor > " ") : ?>color: <?php echo $linkColor ?>; <?php endif; ?>
<?php if ($linkDecoration > " ") : ?>text-decoration: <?php echo $linkDecoration ?>; <?php endif; ?>

}

a,
a:hover
{
<?php if ($linkHvColor > " ") : ?>color: <?php echo $linkHvColor ?>; <?php endif; ?>
text-decoration:underliine;
}

img#bg_img 
{ 
<?php if ($bgWidth > " ") : ?>width: <?php echo $bgWidth; ?>%; <?php endif; ?> /* 100% bgTop */
<?php if ($bgTop > " ") : ?>top: <?php echo $bgTop ?>%; <?php endif; ?>
<?php if ($bgLeft > " ") : ?>left: <?php echo $bgLeft ?>%; <?php endif; ?> 
}
div#icons
{   /* icons fb etc boven logo */ 
position: absolute;
<?php if ($iconsPosTop > " ") : ?>top: <?php echo $iconsPosTop; ?>%;  <?php endif; ?>    
<?php if ($iconsPosLeft > " ") : ?>left: <?php echo $iconsPosLeft; ?>%; <?php endif; ?>
<?php if ($iconsWidth > " ") : ?>width: <?php echo $iconsWidth; ?>%; <?php endif; ?> /* 93% * 40% = 37.2% */
}
div#logo
{   /* logo website rechts van het midden transparant, 480x96 bij breedte 1280px */ 

<?php if ($logoPosTop > " ") : ?>padding-top: <?php echo $logoPosTop; ?>%;  <?php endif; ?>    
<?php if ($logoPosLeft > " ") : ?>left: <?php echo $logoPosLeft; ?>%; <?php endif; ?>
<?php if ($logoWidth > " ") : ?>width: <?php echo $logoWidth; ?>%; <?php endif; ?> /* 93% * 40% = 37.2% */
}

#maincolumn
{ /* gemeenschappelijke positionering ed van main */
<?php if ($contentPosLeft > " ") : ?>left: <?php echo $contentPosLeft; ?>%;   <?php endif; ?>/* 60% */
<?php if ($contentWidth > " ") : ?>width: <?php echo $contentWidth; ?>%;    <?php endif; ?>/* 40% */
<?php if ($contentPosTop > " ") : ?>padding-top: <?php echo $contentPosTop; ?>%;  <?php endif; ?>/* 2.8% */
}
  
div#footer
{   /* footer onder aan de pagina */
position: fixed;
<?php if ($footerPosBottom > " ") : ?>bottom: <?php echo $footerPosBottom; ?>%;<?php endif; ?>    
<?php if ($footerPosLeft > " ") : ?>left: <?php echo $footerPosLeft; ?>%; <?php endif; ?>
<?php if ($footerWidth > " ") : ?>width: <?php echo $footerWidth; ?>%; <?php endif; ?> /* 93% * 40% = 37.2% */
}

h2,
div#page_heading h1,
div.moduletable_menu h3,
div.module_menu h3,
#maincolumn div.blog h1, /* titel blog */
#maincolumn div.blog h2, /* sub-titel blog */
div.items-leading, /* hoofd artikelen van voorpagina en blog 1.6 */
div.items-more, /* geeft aan, dat er nog meer items zijn */
div.item /* vervolgartikel blog */
 {
<?php if ($fgColor > " ") : ?>color: <?php echo $fgColor ?>; <?php endif; ?> /* voorlopig de standaard pagina kleur */
}

div.newsfeed, /* rss newsfeed algemeen */
 .wrapper   /* iframe */
{
<?php if ($marginLeftRight > " ") : ?>
margin-left: <?php echo $marginLeftRight; ?>%;
margin-right:<?php echo $marginLeftRight; ?>%;
width:auto; 
 <?php endif; ?>/* 2%; */
}
/* module_menu Default in template.css (verticale lijst) hier afwijkingen voor inline */
/* optie menu display =<?php echo $menuDisplay ?> */
div.moduletable_menu,
div.module_menu
{ /* */
position:absolute;
<?php if ($contentPosLeft > " ") : ?>left: <?php echo $contentPosLeft; ?>%;   <?php endif; ?>/* 60% */
<?php if ($contentWidth > " ") : ?>width: <?php echo $contentWidth; ?>%;    <?php endif; ?>/* 40% */
<?php if ($menuMarginTop > " ") : ?>padding-top: <?php echo $menuMarginTop; ?>%; <?php endif; ?>/* 18.5% */
}
div#maincolumn div.module_menu
{
position: static;
left: 0;
width: auto;
}

div.moduletable_menu ul,
div.module_menu ul,
ul.menu_menu
{ 

<?php if ($menuColor > " ") : ?>color: <?php echo $menuColor ?>; <?php endif; ?>
<?php if ($menuFontSize > " ") : ?>font-size: <?php echo $menuFontSize ?>px; <?php endif; ?>      
<?php if ($menuDecoration > " ") : ?>text-decoration: <?php echo $menuDecoration ?>; <?php endif; ?>
<?php if ($menuDisplay == "inline") : ?>
  padding-left: 0;
  margin-left: 0;  
<?php endif; ?>
}
ul.menu_menu li,
ul.menu_menu li ul li,
div.module_menu ul li,
div.module_menu ul li ul li
{
<?php if ($menuDisplay == "inline") : ?>
    display: <?php echo $menuDisplay ?>; 
 
  <?php endif; ?>
/* background-color: #ccc; */
  }
ul.menu_menu li a,
ul.menu_menu li ul li a,  
div.module_menu ul li a,
div.module_menu ul li ul li a
{
<?php if ($menuDisplay == "inline") : ?>
 padding-right: 4px;
 padding-left: 8px;
 margin-left: 0;
 background: url("<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/mw_menu_separator.png") no-repeat scroll 0 8px transparent;
<?php endif; ?>
}
ul.moduletable_menu li:first-child a,
ul.menu_menu li:first-child a,
div.moduletable_menu ul li:first-child a,
div.module_menu ul li:first-child a
{
/* background-image: none; */
<?php if ($menuDisplay == "inline") : ?>
/* display: inline; nog even niet */
padding-left: 0;
<?php endif; ?>
}
ul.moduletable_menu li ul,
ul.menu_menu li ul, 
div.moduletable_menu ul li ul,
div.module_menu ul li ul 
{ /* submenu zonder link */
<?php if ($menuDisplay == "inline") : ?>
 /*
 font-size: 12px;
 font-weight: normal;
 position: absolute; /* relateert eaan het eersthogere relatief, of absoluut gepositioneerde element (de ul) */ 
 left: 0;
 bottom: -1.3em; /* bodem is regelhoogte onder de bodem van het hoger gepositioneerde element ook als dit smaller
                    en dus hoger wordt en de echte parent (de li) niet meer op de onderste regel is */
 z-index: 4;
 */
 <?php endif; ?>
}
a.sublevel:link,
a.sublevel:visited, 
ul.menu_menu li a,
ul.menu_menu li a:link, 
ul.menu_menu li a:visited, 
ul.menu_menu li ul li a:link,
ul.menu_menu li ul li a:visited,
div.module_menu ul li a,
div.module_menu ul li a:link, 
div.module_menu ul li a:visited, 
div.module_menu ul li ul li a:link,
div.module_menu ul li ul li a:visited,
div.moduletable_menu ul li a,
div.moduletable_menu ul li ul li a:link,
div.moduletable_menu ul li ul li a:visited
{ 
<?php if ($menuColor > " ") : ?>color: <?php echo $menuColor ?>; <?php endif; ?>
<?php if ($menuFontSize > " ") : ?>font-size: <?php echo $menuFontSize ?>px; <?php endif; ?>      
<?php if ($menuDecoration > " ") : ?>text-decoration: <?php echo $menuDecoration ?>; <?php endif; ?>
}
div.moduletable_menu li.current a,
div.moduletable_menu ul li ul li.current a:link,
div.moduletable_menu ul li ul li.current a:visited,
.module_menu #current,
div.module_menu li.current a,
ul.menu_menu li.current a
{
<?php if ($menuActiveColor > " ") : ?>color: <?php echo $menuActiveColor ?>; <?php endif; ?>
<?php if ($menuActiveDecoration > " ") : ?>text-decoration: <?php echo $menuActiveDecoration ?>; <?php endif; ?>
}
ul.menu_menu li a:hover,
ul.menu_menu li ul li a:hover,
div.moduletable_menu ul li a:hover,
div.moduletable_menu ul li ul li a:hover,
a.sublevel:hover, 
div.module_menu ul li a:hover,
div.module_menu ul li ul li a:hover
{ 
<?php if ($menuHvColor > " ") : ?>color: <?php echo $menuHvColor ?>; <?php endif; ?>
<?php if ($menuHvDecoration > " ") : ?>text-decoration: <?php echo $menuHvDecoration ?>; <?php endif; ?>
}
/* module_menu einde */
</style>


</head>
<body id="page_bg" >
<img id="bg_img" src="<?php echo $this->baseurl ?><?php echo $bgImage; ?>" alt="Background_image" />
<a name="up" id="up"></a>
  <div id="wrapper">
      <div id="area">
        <div id="leftcolumn">
        </div>   <!-- left column -->             
        <div id="maincolumn"><!-- maincolumn -->
            <?php if(  $this->countModules('position-11'))    : ?>
               <jdoc:include type="modules" name="position-11" />
            <?php endif; ?>

            <?php if(  $this->countModules('position-12'))    : ?>
               <jdoc:include type="modules" name="position-12" style="rounded" />
           <?php endif; ?>
               <jdoc:include type="component" />
                    <div class="clr"></div>
            <?php if(  $this->countModules('position-3'))    : ?>
               <jdoc:include type="modules" name="position-3" />
            <?php endif; ?>

            <?php if(  $this->countModules('position-4'))    : ?>
               <jdoc:include type="modules" name="position-4" style="rounded" />
           <?php endif; ?>
 
       <div class="clr"></div>
       </div><!-- maincolumn einde -->
     </div> <!-- einde area-->
      <div id="logo">
        <a href="<?php echo $this->baseurl ?>" title="Home" >
    <img id="logo_img" src="<?php echo $this->baseurl ?><?php echo $logo; ?>" alt="Logo_image" />
        </a>
      </div><!-- einde logo -->
   </div> <!-- einde wrapper -->
             <?php if(  $this->countModules('position-1'))    : ?>
               <jdoc:include type="modules" name="position-1" />
            <?php endif; ?>

            <?php if(  $this->countModules('position-2'))    : ?>
               <jdoc:include type="modules" name="position-2" style="rounded" />
            <?php endif; ?>
      <?php if(  $this->countModules('icons'))    : ?>
        <div id="icons">
               <jdoc:include type="modules" name="icons" />
         </div> 
         <?php endif; ?>  
  <?php if(  $this->countModules('footer'))    : ?>
    <div id="footer">
       <jdoc:include type="modules" name="footer"  />
  </div>   
   <?php endif; ?>




</body>
</html>
