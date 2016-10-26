<?php require_once("header.inc.php") ?>

<div class="ts-main-content">
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2 class="page-title">Articles</h2>
					<div class="panel-body">
					 <div class="btn-group">
                		<a href="article.php" class="btn btn-primary btn-lg"><i class="fa fa-plus-square" >  </i>Ajouter un Article 	 </i></a>
                	 </div>
             		</div>
					<table class="display table table-striped table-bordered table-hover table-list" cellspacing="0" width="100%">
						<!-- Entete du tableau, à ne PAS modifier -->
						<thead>
							<tr>
								<th width="10px"></th>
								
								<th>Titre</th>
								<th>Date</th>
								<th width="100px">Acion</th>
							</tr>
						</thead>
						<!-- Début de la liste -->
						<tbody>
							<!-- ** Début de la boucle sur le résultat de la requête SQL ** -->
							
                <?php
                  require_once("../classes/Article.php");
                   $a = new Article();
                   $liste=$a->liste();
                   foreach($liste as $item){ ?>
	               			<tr>
								<td><?php echo $item ->_id ?></td>
								<td><?php echo $item ->_titre ?></td>
								<td><?php echo $item ->_d_ajout ?></td>
								<td>
									<a href="article_modif.php?id=<?php echo $item->_id; ?>" class="btn btn-success btn-xs" >Modifier</a>
									<a href="article_supp.php?id=<?php echo $item->_id; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Voulez-vous Supprimer cet article ?')" >Suprimer</a>
								</td>
							</tr>

                  

						</tbody>
						<!-- Fin de la liste -->
						 <?php } ?>
					</table>

				</div>

			</div>
		</div>

		<?php require_once("footer.inc.php"); ?>
