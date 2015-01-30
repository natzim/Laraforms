$(document).ready(function() {
    $.material.init();
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
                '</select>' +
                '<div class="checkbox">' +
                    '<label>' +
                        '<input type="checkbox" name="required"> Required' +
                    '</label>' +
                '</div>' +
                '<button class="btn btn-danger btn-remove-form-element"><i class="fa fa-trash"></i> Remove</button>' +
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

    $appendTo.append($snippet);

    $snippet.hide().slideDown();
};

var addFormElement    = '.btn-add-form-element',
    removeFormElement = '.btn-remove-form-element',
    $formElementArea  = $('.form-element-area');

/**
 * Add form element
 */
$(document).on('click', addFormElement, function (e) {
    e.preventDefault();

    appendSnippets(snippets.addFormElement, $formElementArea);
});

/**
 * Remove form element
 */
$(document).on('click', removeFormElement, function (e) {
    e.preventDefault();

    $(this).parent().parent().slideUp(400, function () {
        $(this).remove();
    });
});