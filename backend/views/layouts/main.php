<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;


?>
<?php $this->beginContent('@backend/views/layouts/base.php') ?>
  <main role="main" class="d-flex">
    <div class="navbar">
      <?= $this->render('_sidebar') ?>
    </div>
    <div class="w-100 p-3">
      <?= $content ?>
    </div>
  </main>
  <?php $this->endContent();
