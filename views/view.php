<?php

use insperedia\treedropdown\DropdownTreeListAsset;


/**
 * @var $this \yii\web\View
 * @var $widget \insperedia\treedropdown\DropdownTreeWidget
 */
DropdownTreeListAsset::register($this);
$widget = $this->context;
?>

    <div class="treedropdown-control <?= $widget->id ?>">
        <div class="display-box"><span class="text"></span><span class="close-icon"
                                                                 onclick="treeDropdown.clear('<?= $widget->id ?>')"> </span>
        </div>
        <a href="#" class="treedropdown-openbutton"
           onclick="treeDropdown.openPanel('<?= $widget->id ?>')">...</a>
        <div class="treedropdown-panel <?= $widget->id ?>-treedropdown-panel">
            <ol class="<?= $widget->id ?> tree-list">
                <?php
                foreach ($widget->data as $level1 => $level2) {
                    $text = $level2 && is_string($level2) ? $level2 : $level1;
                    echo "<li class='item-level1' data-value='$level1' data-name='" . $widget->id . "[]'>$text";
                    if (is_array($level2)) {
                        printSublevel($widget->data, $widget);
                    }
                }
                ?>

            </ol>

        </div>
    </div>

<?php
$this->registerJs(" 
    $('.$widget->id.tree-list').bonsai({ checkboxes: true,  createInputs: 'checkbox'}); 
    treeDropdown.text = '".$widget->text."';
    treeDropdown.restoreCheckedItems(" . json_encode($widget->selectedItems) . ", '$widget->id');
 ");

function printSublevel($data, $widget) {
    echo "<ol>";
    foreach ($data as $item => $dataItem) {
        $text = $dataItem && is_string($dataItem) ? $dataItem : $item;
        echo "<li class='item-level2' data-value='$item' data-name='" . $widget->id . "[]'>$text</li>";
    }
    echo "</ol></li>";

}
?>