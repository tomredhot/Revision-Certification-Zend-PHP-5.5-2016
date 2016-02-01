<?php 
/*
### CREATOR : MALLEN Thomas
### PROJECT : Fiche de révision pour la certification ZCPE
### WEBSITE : http://www.thomas-mallen.fr/
### WEBSITE : http://www.dotlab.fr/
### 2016
### WITH BOOTSTRAP (http://getbootstrap.com/)
### BASED ON THE BOOK "Préparation à la certification ZCPE" ENI EDITIONS
*/ 
$chapter=0;
$page=0;
if(isset($_GET['chapter'])){ $chapter=$_GET['chapter']; }
if(isset($_GET['page'])){ $page=$_GET['page']; }
include('./inc/header.php'); 
if(!include('./content/'.$chapter.'-'.$page.'.php')){ echo 'problème de chargement du contenu'; }
include('./inc/footer.php'); ?>
