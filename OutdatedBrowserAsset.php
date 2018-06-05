<?php

namespace biller\outdatedBrowser;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class OutdatedBrowserAsset extends AssetBundle {

    public $sourcePath = '@bower/outdated-browser/outdatedbrowser';
    public $js = [
        'outdatedbrowser.min.js',
    ];
    public $css = [
        'outdatedbrowser.min.css',
    ];
    public $depends = [
        JqueryAsset::class,
    ];

}
