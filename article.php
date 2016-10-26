<?php require_once("header.inc.php"); ?>

<div class="row" id="content">
          <div class="col-md-9" id="content_text">
          <h1>Créer un Article</h1>

          <?php
          if (isset($_GET['retour']))
          {
            ?>
            <div class="alert alert-success">
              Merci. Votre article intitulé " <?php echo $_GET['titre'] ?> " a bien été enregistrée.
            </div>
            <?php
          }
          ?>
        </div>
<!--Add Article start-->
        <form class="form-horizontal" action="article_action.php" method="post">
            <div class="form-group has-feedback">
              <label class="control-label col-sm-2" for="email" >Titre *:</label>
              <div class="col-sm-10"><input type="text" class="form-control" id="text" name="text" required="required"> 
              
              </div>
            </div>

           <div class="form-group">
                    <label class="control-label col-md-2">Image</label>
                    <div class="col-sm-10">
                      
                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"> <img src="../img/no-image.png" alt="" /> </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                        <div> <span class="btn btn-white btn-file"> <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Sélectioner image</span> <span class="fileupload-exists"><i class="fa fa-undo"></i> Changer</span>
                          <input type="file" class="default" name="image" />
                          </span>
                      </div>
                    </div>
           </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="message">Texte *:</label>
              <div class="col-sm-10"><textarea class=" form-control" id="text" name="text" rows=7 colon=18 required placeholder="Tapez votre article !!"></textarea>
              </div>
            </div>

          

            <input type="submit" value="Envoyer" class="btn btn-default">
          </form>
          </div>
          
        </div>
                <div class="form-group ">
                  <label class="control-label col-lg-3">Titre</label>
                  <div class="col-lg-9">
                    <input class=" form-control" id="titre" name="titre" minlength="2" type="text" required />
                  </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Image</label>
                    <div class="col-md-9">
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"> <img src="../img/no-image.png" alt="" /> </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                        <div> <span class="btn btn-white btn-file"> <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Sélectioner image</span> <span class="fileupload-exists"><i class="fa fa-undo"></i> Changer</span>
                          <input type="file" class="default" name="image" />
                          </span> <a href="ajouter-un-utilisateur" class="btn btn-danger fileupload-exists" data-dismiss="fileupload" onClick="sendvar()"><i class="fa fa-trash"></i>Supprimer</a> </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group ">
                    <label class="control-label col-lg-3">Texte</label>
                    <div class="col-lg-6">
                       <textarea class=" form-control" id="text" name="text" rows=7 colon=18 required placeholder="Tapez votre article !!"></textarea>
                    </div>
                  </div>
                
                <div class="form-group">
                  <div class="col-lg-offset-3 col-lg-6">
                    <button class="btn btn-success" type="submit" name="ajout_article">Enregistrer</button>
                    
                  </div>
                </div>
              </form>
              <hr>
              <a href="article_liste.php">
              <button class="btn btn-info">Retour</button>
              </a> </div>
          </div>
        </div>
      </div>
