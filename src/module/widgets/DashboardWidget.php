<?php

namespace codexten\yii\modules\dashboard\widgets;

use codexten\yii\modules\dashboard\base\Widget;
use yii\helpers\Url;

class DashboardWidget extends Widget
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
