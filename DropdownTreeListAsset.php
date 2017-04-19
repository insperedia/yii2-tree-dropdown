<?php
/**
 * Date: 20.01.2017
 * Time: 14:05
 */

namespace insperedia\TreeDropdown;

use yii\web\AssetBundle;

class DropdownTreeListAsset extends AssetBundle
{
    public $sourcePath = __DIR__.'/assets';

    public $depends = [
        'insperedia\treedropdown\TreeListAsset',
    ];

    public $js = [
        'js/treedropdown.js?v=1',
    ];

    public $css = [
        'css/treedropdown.css?v=1',
    ];
}