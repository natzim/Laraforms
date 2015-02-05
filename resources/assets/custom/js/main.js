$(document).ready(function() {
    $.material.init();
});

var elementTypes = {
    text: {
        hasItems: false
    },
    number: {
        hasItems: false
    },
    slider: {
        hasItems: false
    },
    radio: {
        hasItems: true
    },
    checkbox: {
        hasItems: true
    }
};

var snippets = {
    addFormElement:
        '<div class="panel panel-default">' +
            '<div class="panel-heading">' +
                '<div class="container-fluid">' +
                    '<div class="col-md-1">' +
                        '<a class="btn btn-flat reorder element">' +
                            '<i class="fa fa-reorder"></i>' +
                        '</a>' +
                    '</div>' +
                    '<div class="col-md-10">' +
                        '<label for="question-^qnum^">Question</label>' +
                        '<input type="text" class="form-control" name="question-^qnum^" id="question-^qnum^">' +
                    '</div>' +
                    '<div class="col-md-1">' +
                        '<a class="btn btn-flat btn-remove-form-element">' +
                            '<i class="fa fa-times"></i>' +
                        '</a>' +
                    '</div>' +
                '</div>' +
            '</div>' +
            '<div class="panel-body">' +
                '<div class="container-fluid">' +
                    '<label for="type">Type</label>' +
                    '<select class="form-control" name="type">' +
                        '<option value="text">Text</option>' +
                        '<option value="number">Number</option>' +
                        '<option value="slider">Slider</option>' +
                        '<option value="radio">Radio</option>' +
                        '<option value="checkbox">Checkbox</option>' +
                    '</select>' +
                    '<div class="checkbox">' +
                        '<label>' +
                            '<input type="checkbox" name="required"> Required' +
                        '</label>' +
                    '</div>' +
                    '<hr>' +
                    '<div class="form-element-item-area"></div>' +
                    '<button class="btn btn-fab btn-fab-mini btn-raised btn-success btn-add-form-element-item pull-right hide-on-load"><i class="fa fa-plus"></i></button>' +
                '</div>' +
            '</div>' +
        '</div>',

    addFormElementItem:
        '<div class="well">' +
            '<div class="container-fluid">' +
                '<div class="col-md-1">' +
                    '<a class="btn btn-flat reorder item">' +
                        '<i class="fa fa-reorder"></i>' +
                    '</a>' +
                '</div>' +
                '<div class="col-md-10">' +
                    '<label for="item-^inum^">Option</label>' +
                    '<input type="text" class="form-control" name="item-^inum^" id="item-^inum^">' +
                '</div>' +
                '<div class="col-md-1">' +
                    '<button class="btn btn-flat btn-remove-form-element-item"><i class="fa fa-times"></i></button>' +
                '</div>' +
            '</div>' +
        '</div>'
};

/**
 * Automatically pre-style checkboxes and toggle buttons because of strange bug
 */
for (var key in snippets) {
    var $snippet = $(snippets[key]);

    $.material.input($snippet.find($.material.options.inputElements));
    $.material.checkbox($snippet.find($.material.options.checkboxElements));
    $.material.togglebutton($snippet.find($.material.options.togglebuttonElements));
    $.material.radio($snippet.find($.material.options.radioElements));

    $snippet.find('.hide-on-load').hide();

    // Turn jQuery object into string for storage
    snippets[key] = $snippet.prop('outerHTML');
}

/**
 * Append a snippet to a given element
 *
 * @param snippet
 * @param $appendTo
 */
var appendSnippets = function (snippet, $appendTo) {
    var $snippet = $(snippet);

    // Insert question number into certain places to allow for label clicking to select input
    // Replaces any instance of ^qnum^ with the number of elements
    $snippet.html(function (index, html) {
        return html
            .replace(/\^qnum\^/g, elementCount)
            .replace(/\^inum\^/g, itemCount);
    });

    $snippet.find('select').dropdown();

    $appendTo.append($snippet);

    $snippet.hide().slideDown(100);
};

var addFormElement        = '.btn-add-form-element',
    removeFormElement     = '.btn-remove-form-element',
    addFormElementItem    = '.btn-add-form-element-item',
    removeFormElementItem = '.btn-remove-form-element-item',
    $formElementArea      = $('.form-element-area');

var elementCount = 0,
    itemCount    = 0;

/**
 * Add form element
 */
$(document).on('click', addFormElement, function (e) {
    e.preventDefault();

    appendSnippets(snippets.addFormElement, $formElementArea);

    $formElementArea.sortable({
        containerSelector: '.form-element-area',
        handle: '.reorder.element',
        itemSelector: '.panel',
        distance: 10,
        placeholder: '<hr>'
    });

    elementCount++;
});

/**
 * Remove form element
 */
$(document).on('click', removeFormElement, function (e) {
    e.preventDefault();

    $(this).closest('.panel').slideUp(100, function () {
        $(this).remove();
    });

    elementCount--;
});

/**
 * Add form element item
 */
$(document).on('click', addFormElementItem, function (e) {
    e.preventDefault();

    var $itemArea = $(this).siblings('.form-element-item-area');

    appendSnippets(snippets.addFormElementItem, $itemArea);

    $itemArea.sortable({
        containerSelector: '.form-element-item-area',
        handle: '.reorder.item',
        itemSelector: '.well',
        distance: 10,
        placeholder: '<hr>'
    });

    itemCount++;
});

/**
 * Remove form element item
 */
$(document).on('click', removeFormElementItem, function (e) {
    e.preventDefault();

    $(this).closest('.well').slideUp(100, function () {
        $(this).remove();
    });

    itemCount--;
});

/**
 * Form element type change
 */
$(document).on('change', 'select[name=type]', function () {
    var hasItems = elementTypes[$(this).val()].hasItems;

    if (hasItems) {
        $(this).parent().siblings('.btn-add-form-element-item').fadeIn();
    } else {
        $(this).parent().siblings('.btn-add-form-element-item').fadeOut();

        $(this).parent().siblings('.form-element-item-area').children().slideUp(100, function () {
            $(this).remove();
        });
    }
});
