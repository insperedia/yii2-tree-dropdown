# Tree Dropdown

Dropdown with tree or list of checkboxes.
This is extension for Yii2 framework. 


## Usage

```php
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

OR 

<?php

$form->field($model,'regions')->widget(
      \app\widget\DropdownTreeList\DropdownTreeWidget::class,
      [
          'data' => Yii::$app->geography->regions(),
          'id' => 'regions'
      ]
  )
                      
 ?>

```
