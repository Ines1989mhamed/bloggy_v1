<?php
include("../classes/Article.php");
include("../classes/Util.php");

@$id = $_POST['id'];
@$titre = $_POST['titre'];
@$texte = $_POST['texte'];


if( !empty($titre) && !empty($texte) ) 
{
	$cat = new Article();
	$util = new Util();
	$cat->_titre = $titre;
	$cat->_texte = $texte;
	$cat->_image = $util->upload('image', "../upload/");
	
	// Ajout
	if( empty($id) ) 
	{
		$id = $cat->ajouter();
		header("Location: article_liste.php");
	}

	// Modification
	elseif( !empty($id) ) 
	{
		$cat->_id = $id;
		$cat->modifier();
		header("Location: article_liste.php");
	}
	else exit('tous les champs sont obligatoires ! ');
} else exit('tous les champs sont obligatoires !!');
?>