<?php

namespace codexten\yii\modules\dashboard\widgets;

use yii\helpers\Url;

trait DashboardWidgetTrait
{
    public $fetchUrl;

    public function init()
    {
        if (is_array($this->fetchUrl)) {
            $this->fetchUrl = Url::to($this->fetchUrl);
        }
        parent::init();
    }
}
