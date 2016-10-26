<?php require_once("header.inc.php") ?>

<div class="ts-main-content">
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2 class="page-title">Statistiques</h2>

					<div class="alert alert-success">
						Nombre d'articles :
						<?php
						require_once('../classes/Article.php');
                  		 $a = new Article();
                   		 $nbr=$a->compter();
                   		                 		 
                   ?>

					</div>

					<div class="alert alert-success">
						Nombre de commentaires :
						<?php
							require_once("../classes/Contact.php");
                  			 $c = new Contact();
                   			$nbr=$c->compter();

                   ?>
					</div>

				</div>

			</div>
		</div>

		<?php require_once("footer.inc.php"); ?>