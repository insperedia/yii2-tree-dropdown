<?php

use insperedia\treedropdown\DropdownTreeListAsset;


/**
 * @var $this \yii\web\View
 * @var $widget \insperedia\treedropdown\DropdownTreeWidget
 */
DropdownTreeListAsset::register($this);
$widget = $this->context;
$customid = $widget->id;
$selectedItems = $widget->model->{$widget->attribute};
$name = \yii\helpers\Html::getInputName($widget->model, 'regions');
?>

    <div class="treedropdown-control <?= $customid ?>">
        <div class="display-box"><span class="text"></span><span class="close-icon"
                                                                 onclick="treeDropdown.clear('<?= $customid ?>')"> </span>
        </div>
        <a href="#" class="treedropdown-openbutton"
           onclick="treeDropdown.openPanel('<?= $customid ?>')">...</a>
        <div class="treedropdown-panel <?= $customid ?>-treedropdown-panel">
            <ol class="<?= $customid ?> tree-list">
                <?php
                foreach ($widget->data as $level1 => $level2) {
                    echo "<li class='item-level1' data-value='$level1' data-name='{$name}[]'>$level1";
                    if (is_array($level2)) {
                        echo "<ol>";
                        foreach ($level2 as $item => $dataItem) {
                            echo "<li class='item-level2' data-value='$item' data-name='{$name}[]'>$item</li>";
                        }
                        echo "</ol></li>";
                    }
                }
                ?>

            </ol>
            <a class="treeview-clear" onclick="treeDropdown.clear('<?= $customid ?>')">Rensa</a>
        </div>
    </div>

<?php
$this->registerJs(" 
    $('.$customid.tree-list').bonsai({ checkboxes: true,  createInputs: 'checkbox'}); 
    treeDropdown.restoreCheckedItems(" . json_encode($selectedItems) . ", '$customid');
 ");
?>