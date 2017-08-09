<table class="table table-striped">
<td><a class="btn btn-success" href="<?= BASE_URL ?>/admin/create">Create a new post</a></td>
<?php foreach($articles as $a): ?>
 <tr>
     <td><?= $a->titre ?></td>
     <td><a class="btn btn-info" href="<?= BASE_URL  ?>/admin/edit/<?= $a->id; ?>">Edit</a></td>
     <td><a class="btn btn-default" href="<?= BASE_URL  ?>/admin/show/<?= $a->id; ?>">Show</a></td>
     <td><a class="btn btn-danger" href="<?= BASE_URL ?>/admin/delete/<?= $a->id; ?>">Delete</a></td>
 </tr>
<?php endforeach; ?>
</table>
<?php if (isset($_SESSION['flash'])) : ?>
<div class="alert alert-success"><?= \core\Flash::getflash(); ?></div>
<?php endif ?>
