<?php

namespace codexten\yii\modules\dashboard\widgets;

use codexten\yii\modules\dashboard\base\Widget;
use yii\helpers\Url;

class DashboardWidget extends Widget
{
    public $refreshUrl;
    public $fetchUrl;
    public $renderUrl;

    public function init()
    {
        if (is_array($this->renderUrl)) {
            $this->renderUrl = Url::to($this->renderUrl);
        }
        parent::init();
    }
}
