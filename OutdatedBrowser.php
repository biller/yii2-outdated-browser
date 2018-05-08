<?php

namespace biller\outdatedBrowser;

use yii\base\Widget;

class Outdatedbrowser extends Widget {

    public $bgColor = '#f25648';
    public $color = '#ffffff';
    public $lowerThan = null;
    public $language = 'en';
    public $onlyIe7 = false;

    public function run() {
        $bundle = OutDatedBrowserAsset::register($this->view);
        $js = $this->render('widget', [
            'widget' => $this,
            'bundle' => $bundle,
        ]);
        $this->view->registerJs($js);
    }

    public function getLanguagePath(){
        return "$this->baseUrl/outdatedbrowser/lang/$this->language.html";
    }
}
