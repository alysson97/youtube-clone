<?php

/** @var yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
?>

<?php $this->beginContent('@backend/views/layouts/base.php') ?>
<main role="main p-3" class="d-flex flex-shrink-1">
  <?= $content ?>
</main>
<?php $this->endContent();
