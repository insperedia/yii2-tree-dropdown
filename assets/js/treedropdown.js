var treeDropdown = {

    text: 'items',

    closePanel: function(customid)
    {
        var overlay = $('.treedropdown-control.overlay');
        $('.' + customid + '-treedropdown-panel').hide();
        $(overlay).remove();
        this.setCaption(this.getCaption(customid), customid);
    },

    openPanel: function(customid) {
        var classSelecter =  customid + '-treedropdown-panel';
        $('body').append('<div class="treedropdown-control overlay"> </div>');
        var overlay = $('.treedropdown-control.overlay');
        overlay.on('click', function () {
            treeDropdown.closePanel(customid);
        })
        $('.' + classSelecter).toggle();

    },
    getCaption: function(customid) {
        var count = $('.' +  customid + ' .item-level2 input:checked').length;
        if (count)
            return count + ' ' + this.text;
        else
            return "";
    },

    restoreCheckedItems: function(items, customid) {
        if (items) {
            var bonsai = $('.' + customid + '.tree-list').data('bonsai');
            bonsai.setCheckedValues(items, customid);
            this.setCaption(this.getCaption(customid), customid);
        }
    },

    setCaption: function(text, customid) {
        $('.' + customid + ' .display-box .text').html(text);
        var bonsai = $('.' + customid + '.tree-list').data('bonsai');
        if (bonsai.selectedItems().length) {
            $('.' + customid + ' .close-icon').show();
        } else {
            $('.' + customid + ' .close-icon').hide();
        }
    },

    clear: function(customid) {
        var bonsai = $('.' + customid + '.tree-list').data('bonsai');
        bonsai.clear();
        treeDropdown.closePanel(customid);
    }
};