<div class="row ">
    <div class="col-sm-12">
        <?php foreach($articles as $A ): ?>
        
        <h3><?php echo $A->titre ?></h3>
        <p><?php echo $A->contenu ?>
        <br>
        <em style="color:#061e6f">
        		Par <?php echo $A->pseudo ?> | <?php  echo $A->createdAt ?></em>
        </p>
        <?php endforeach ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-12"> 
        <nav aria-label="page Navigation">
            <ul class="pagination">
                <?php for($i=0; $i < 3; $i++) : ?>
                <?php //var_dump($lien); ?>
                 <li><a href="<?= BASE_URL . '/accueil/index/'. $i  ?>"><?= $i+1; ?></a></li>   
                <?php endfor; ?>    
            </ul>
        </nav>
    </div>
</div>
