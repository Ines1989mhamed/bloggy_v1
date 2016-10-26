<?php require_once("header.inc.php") ?>

<div class="ts-main-content">
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2 class="page-title">Ajouter un Article</h2>
					
			<form class="form-horizontal" action="article_new_action.php" method="post" enctype="multipart/form-data">
            
				 <div class="form-group ">
                    <label class="control-label col-lg-3">Titre* :</label>
                    <div class="col-lg-6">
                      <input class=" form-control" id="titre" name="titre" minlength="2" type="text"  required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label class="control-label col-lg-3">Image :</label>
                    <div class="col-lg-6">
                      <input  name="image" id="image" type="file"  required />
                    </div>
                  </div>
                  
	            <div class="form-group">
	              <label class="control-label col-lg-3">Texte *:</label>
	              <div class="col-lg-6">
	              	<textarea class=" form-control" id="texte" name="texte" rows=7 colon=18 required placeholder="Tapez votre article !!"></textarea>
	              </div>
	            </div>
	            <div class="form-group">
          		<div class="col-lg-offset-3 col-lg-6">

           		 <input type="submit" value="Envoyer" class="btn btn-default">
           		</div>
           	</div>

          </form>
          </div>
          
        </div>

		<?php require_once("footer.inc.php"); ?>
