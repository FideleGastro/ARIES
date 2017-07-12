<h1>=><?= $titre ?></h1>
<ul><h3>Mes contact</h3>
	<?php foreach ($contacts as $c) : ?>
	<li><b><?= $c->pseudo ?></b>: <?= $c->email ?> </li>
	<?php endforeach?>	
</ul>

