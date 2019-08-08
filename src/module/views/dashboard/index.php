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

<?php $page->beginContent('index/_content') ?>

{{message}}

<?php $page->endContent() ?>

<?php $page->end() ?>
