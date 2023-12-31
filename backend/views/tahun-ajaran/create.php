<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TahunAjaran $model */

$this->title = 'Create Tahun Ajaran';
$this->params['breadcrumbs'][] = ['label' => 'Tahun Ajarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tahun-ajaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
