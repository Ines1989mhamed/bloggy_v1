<?php require_once("header.inc.php"); 
include("classes/Article.php");
@$id = $_GET['id'];
if( !empty($id) ) {

	$art= new Article();
	$art->_id = $id;
	$art = $art->details();
}
?>


<div class="container">
	<div class="row" >
		<div class="left-sidebar">
			<h1>Article: <?php echo @($art->_titre); ?></h2>
			<h5>Date: sousse le <br><?php echo @($art->_d_ajout); ?> </h5>
		</div>
	</div>
		<div class="col-md-8"><p><?php echo @($art->_texte); ?></p></div>
		<div class="col-md-4" id="sidebar">
			
			<img src="../upload/<?php echo @($art->_image)?>" value="<?php echo @($art->_texte);?>"  height="200" width="200" class="img-responsive img-thumbnail">
		</div>
		
	</div>
</div>


<?php require_once("footer.inc.php") ?>
