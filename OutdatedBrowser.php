<?php

namespace biller\outdatedBrowser;

use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class Outdatedbrowser extends Widget {

    public $bgColor = '#f25648';
    public $color = '#ffffff';
    public $lowerThan = 'transform';
    public $language = 'en';
    public $onlyIe7 = false;
    private $bundle;

    public function run() {
        $this->bundle = OutDatedBrowserAsset::register($this->view);

        $data = ArrayHelper::toArray($this, [
                    Outdatedbrowser::class => ['bgColor', 'color', 'lowerThan', 'languagePath']
        ]);

        $js = $this->render('widget', ['data' => $data, 'onlyIe7' => $this->onlyIe7]);
        $this->view->registerJs($js);

        $div = Html::tag('div', '', ['id' => 'outdated']);
        return $this->onlyIe7 ? "<!--[if lt IE 8]>$div<![endif]-->" : $div;
    }

    public function getLanguagePath() {
        return "{$this->bundle->baseUrl}/lang/es.html";
    }

}
