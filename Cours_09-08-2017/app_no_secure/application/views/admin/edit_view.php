<div class="row">
   <div class="col-sm-8 col-sm-offset-2"> 
        <form class="form-create" method="post" action="<?= BASE_URL ?>/admin/update">
              <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" class="form-control" name="titre" placeholder="titre" value="<?= $article->titre  ?>">
              </div>
              <div class="form-group">
                <label for="contenu">Contenu</label>
                <textarea name="contenu" class="form-control"><?= $article->contenu; ?></textarea>
              </div>
             <input type="hidden" name="id" value="<?= $article->id ?>">
            <button class="btn btn-lg btn-primary btn-block" type="submit">validation</button>
        </form>
        
   </div>
</div>