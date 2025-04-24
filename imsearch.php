<!DOCTYPE html>
<html dir="ltr" lang="it-IT"><head>
<?php require_once("res/x5engine.php"); ?><!-- BONO MICHELA -->
  <title>Cerca - ESAMI UNIVERSITA</title>

  
  
  <meta charset="utf-8">

<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
  
  <meta name="generator">
  <meta name="viewport" content="width=993">

  
  <link rel="icon" href="favicon.png" type="image/png">

  
  <link rel="stylesheet" type="text/css" href="style/reset.css" media="screen,print">

  
  <link rel="stylesheet" type="text/css" href="style/print.css" media="print">

  
  <link rel="stylesheet" type="text/css" href="style/style.css" media="screen,print">

  
  <link rel="stylesheet" type="text/css" href="style/template.css" media="screen">

  
  <link rel="stylesheet" type="text/css" href="style/menu.css" media="screen">

<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="style/ie.css" media="screen" /><![endif]-->
  
  <script type="text/javascript" src="res/jquery.js?14"></script>
  
  <script type="text/javascript" src="res/x5engine.js?14"></script>
</head><body>


<div id="imPage">
<div id="imHeader">
<h1 class="imHidden">Cerca - ESAMI UNIVERSITA</h1>
</div>
<a class="imHidden" href="#imGoToCont" title="Salta il menu di navigazione">Vai ai contenuti</a> 
<p class="imHidden">Menu principale:</p>

<div id="imMnMn" class="auto">
<ul class="auto">
  <li id="imMnMnNode0"> <a href="index.html"> <span class="imMnMnFirstBg"> <span class="imMnMnTxt"><span class="imMnMnImg"></span>Home
Page</span> </span> </a> </li>
</ul>
</div>

<div id="imContent"> 
<h2 id="imPgTitle">Risultati della ricerca</h2>
<?php $search = new imSearch();
$keys = isset($_GET['search']) ? $_GET['search'] : "";
$page = isset($_GET['page']) ? $_GET['page'] : 0;
$type = isset($_GET['type']) ? $_GET['type'] : "pages"; ?>
<div class="searchPageContainer"><?php echo $search->search($keys, $page, $type); ?>
</div>

</div>
<div id="imFooter"> </div>
</div>

<span class="imHidden"><a href="#imGoToCont" title="Rileggi i contenuti della pagina">Torna ai contenuti</a> | <a href="#imGoToMenu" title="Naviga ancora nella pagina">Torna al menu</a></span>
<noscript class="imNoScript">
<div class="alert alert-red">Per poter utilizzare questo sito è
necessario attivare JavaScript.</div>
</noscript>
</body></html>