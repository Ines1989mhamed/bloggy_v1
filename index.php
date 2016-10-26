<?php require_once("header.inc.php") ?>

<div class="ts-main-content">
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2 class="page-title">Articles</h2>
					
					<table class="display table table-striped table-bordered table-hover table-list" cellspacing="0" width="100%">
						<!-- Entete du tableau, à ne PAS modifier -->
						<thead>
							<tr>
								<th width="10px">Id</th>
								
								<th>Titre</th>
								<th>Texte</th>
								<th>Date</th>
								
								
							</tr>
						</thead>
						<!-- Début de la liste -->
						<tbody>
							<!-- ** Début de la boucle sur le résultat de la requête SQL ** -->
							
                <?php
                  require_once("classes/Article.php");
                   $a = new Article();
                   $liste=$a->liste();
                   foreach($liste as $art){ ?>
	               			<tr>
								<td><?php echo $art ->_id ?></a></td>
								<td><a href="details.php?id=<?php echo $art->_id; ?>"><?php echo $art ->_titre ?></td>
								<td  width="60%" height="10%"> <?php echo $art ->_texte ?></td>
								<td><?php echo $art ->_d_ajout ?></td>
								
								
							</tr>
						</tbody>
						  <?php } ?>
						<!-- Fin de la liste -->
					</table>

				</div>

			</div>
		</div>

		<?php require_once("footer.inc.php"); ?>
