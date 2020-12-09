<?php

use yii\widgets\ListView;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="row">
    <?php $form = ActiveForm::begin([
            'method' => 'get',
     ]); ?>
    <div class="col-sm-12 col-md-1">
        Поиск
    </div>

    <div class="col-sm-12 col-md-3">
        <?= $form->field($searchModel, 'text')
        ->textInput(['placeholder' => 'введите строку для поиска'])
        ->label(false);
        ?>
    </div>
    <div class="col-sm-12 col-md-1">
        <?= Html::submitButton('Искать', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>







<h1>Все посты!</h1>

<section>
    <?php
            echo ListView::widget([
           'dataProvider' => $dataProvider,
           'itemView' => '_listItem',
       ]);
    ?>

</section>
