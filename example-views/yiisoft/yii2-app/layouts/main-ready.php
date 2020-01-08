<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use materialadmin\assets\MaterialAsset;

MaterialAsset::register($this);
?>
<?php $this->beginPage() ?>
<html lang="en">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="menubar-hoverable header-fixed menubar-pin">
<?php $this->beginBody() ?>

<?= $this->render('header.php') ?>

<div id="base">
    <div id="content">
        <section>
            <div class="section-body">
                <?= $content ?>
            </div>
        </section>
    </div>
    <?= $this->render('menu.php') ?>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
