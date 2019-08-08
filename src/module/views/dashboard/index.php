<?php

use codexten\yii\modules\dashboard\widgets\DashboardPage;
use yii\web\View;

/* @var $this View */

$this->title = Yii::t('en:te:company', 'Dashboard');
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $page = DashboardPage::begin([
    'title' => $this->title,
]) ?>

<?php $page->beginContent('content') ?>

<?= $this->render('index/_content') ?>

<?php $page->endContent() ?>

<?php $page->end() ?>
