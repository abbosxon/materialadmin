<?php
use yii\helpers\Html;
?>

<div class="error-page">
    <h2 class="headline text-info"><i class="fa fa-exclamation-circle text-danger"></i></h2>

    <div class="error-content">
        <h3><?= $name ?></h3>

        <p>
            <?= nl2br(Html::encode($message)) ?>
        </p>

        <p>
            The above error occurred while the Web server was processing your request.
            Please contact us if you think this is a server error. Thank you.
            Meanwhile, you may <a href='<?= Yii::$app->homeUrl ?>'>return to dashboard</a> or try using the search
            form.
        </p>
    </div>
</div>