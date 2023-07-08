<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Tingkatan $model */

$this->title = 'Create Tingkatan';
$this->params['breadcrumbs'][] = ['label' => 'Tingkatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tingkatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
