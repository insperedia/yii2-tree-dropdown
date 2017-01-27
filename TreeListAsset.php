<?php
/**
 * Date: 13.01.2017
 * Time: 15:11
 */

namespace insperedia\treedropdown;

use yii\web\AssetBundle;

class TreeListAsset  extends AssetBundle
{
    public $sourcePath = __DIR__.'/assets';

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public $js = [
        'js/jquery.bonsai.js',
        'js/jquery.qubit.js',
     ];

    public $css = [
        'css/jquery.bonsai.css',
    ];
}