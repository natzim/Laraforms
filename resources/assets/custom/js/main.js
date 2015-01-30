$(document).ready(function() {
    $.material.init();

    $('[data-toggle="tooltip"]').tooltip();
});

var snippets = {
    addFormElement:
        '<div class="panel panel-default">' +
            '<div class="panel-heading">' +
                '<label for="heading">Heading</label>' +
                '<input type="text" class="form-control" name="heading">' +
            '</div>' +
            '<div class="panel-body">' +
                '<label for="description">Description</label>' +
                '<textarea class="form-control" name="description"></textarea>' +
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
                '<button class="btn btn-fab btn-fab-mini btn-raised btn-success btn-add-form-element-item pull-right" data-toggle="tooltip" data-placement="top" title="Create a new item"><i class="fa fa-plus"></i></button>' +
                '<button class="btn btn-fab btn-fab-mini btn-raised btn-danger btn-remove-form-element"><i class="fa fa-trash"></i></button>' +
            '</div>' +
        '</div>',

    addFormElementItem:
        '<div class="well">' +
            '<div class="container">' +
                '<div class="col-md-10">' +
                    '<label for="item">Value</label>' +
                    '<input type="text" class="form-control" name="item">' +
                '</div>' +
                '<div class="col-md-2">' +
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

    $snippet.find('[data-toggle="tooltip"]').tooltip();

    $appendTo.append($snippet);

    $snippet.hide().slideDown(100);
};

var addFormElement        = '.btn-add-form-element',
    removeFormElement     = '.btn-remove-form-element',
    addFormElementItem    = '.btn-add-form-element-item',
    removeFormElementItem = '.btn-remove-form-element-item',
    $formElementArea      = $('.form-element-area');

/**
 * Add form element
 */
$(document).on('click', addFormElement, function (e) {
    e.preventDefault();

    appendSnippets(snippets.addFormElement, $formElementArea);

    $formElementArea.sortable({
        containerSelector: '.form-element-area',
        itemSelector: '.panel',
        distance: 10,
        placeholder: '<hr>'
    });
});

/**
 * Remove form element
 */
$(document).on('click', removeFormElement, function (e) {
    e.preventDefault();

    $(this).parent().parent().slideUp(100, function () {
        $(this).remove();
    });
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
        itemSelector: '.well',
        distance: 10,
        placeholder: '<hr>'
    });
});

/**
 * Remove form element item
 */
$(document).on('click', removeFormElementItem, function (e) {
    e.preventDefault();

    $(this).parent().parent().parent().slideUp(100, function () {
        $(this).remove();
    });
});
