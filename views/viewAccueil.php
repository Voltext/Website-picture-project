<?php
foreach ($photos as $photo): ?>
<h2><?= $photo->title() ?></h2>
<h4><?= $photo->content() ?></h4>

<?php endforeach; ?>
