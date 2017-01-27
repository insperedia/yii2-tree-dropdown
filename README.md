# Tree Dropdown #

Dropdown with tree or list of checkboxes.
This is extension for Yii2 framework. 

## Usage ##

<?php
echo \insperedia\treedropdown\DropdownTreeWidget::widget(
    [
        'data' => [
            'item1' => [
                'subitem1',
                'subitem2',               
            ],
           'item2' => [
               'subitem3',
               'subitem4',               
           ],
        ]
    ]
);
?>