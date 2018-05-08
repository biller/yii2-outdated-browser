<?php

namespace biller\outdatedBrowser;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class OutDatedBrowserAsset extends AssetBundle {

    public $sourcePath = '@bower/outdated-browser';
    public $js = [
        'outdatedbrowser/outdatedbrowser.js',
    ];
    public $css = [
        'outdatedbrowser/outdatedbrowser.css',
    ];
    public $depends = [
        JqueryAsset::class,
    ];

}
