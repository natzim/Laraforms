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

var addFormElement    = '.btn-add-form-element',
    removeFormElement = '.btn-remove-form-element',
    $formElementArea  = $('.form-element-area');

/**
 * Add form element
 */
$(document).on('click', addFormElement, function (e) {
    e.preventDefault();

    var $addFormElement = $(snippets.addFormElement);

    $formElementArea.append($addFormElement);

    $.material.checkbox($addFormElement.find('input[name=required]'));
    $addFormElement.find('select').dropdown();

    $addFormElement.hide().slideDown();
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