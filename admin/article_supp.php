<?php
require_once("../classes/article.php");
$id=$_GET['id'];
$c = new article();
$c->_id=$id;
$c->supprimer();
header("Location:article_liste.php");
?>