<?php

namespace insperedia\treedropdown;

class DropdownTreeWidget extends \yii\base\Widget
{
    public $model;
    public $attribute;

    public $data = null;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('view');
    }
}