<?php
/**
 * Date: 20.01.2017
 * Time: 14:05
 */

namespace insperedia\treedropdown;

use yii\web\AssetBundle;

class DropdownTreeListAsset extends AssetBundle
{
    public $sourcePath = __DIR__.'/assets';

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public $js = [
        'js/treedropdown.js?v=1',
        'js/jquery.bonsai.js',
        'js/jquery.qubit.js',
    ];

    public $css = [
        'css/treedropdown.css?v=1',
        'css/jquery.bonsai.css',
    ];
}