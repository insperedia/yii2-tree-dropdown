<?php

namespace insperedia\treedropdown;

class DropdownTreeWidget extends \yii\base\Widget
{
    public $id = 'treeview-dropdown';
    public $data = [];
    public $selectedItems = [];
    public $view = "view";
    public $text = 'item(s)';

    public function init()
    {
        parent::init();

    }

    public function run()
    {
        return $this->render($this->view);
    }
}