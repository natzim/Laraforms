$(document).ready(function() {
    $.material.init();
});

var addFormElement    = '.btn-add-form-element',
    removeFormElement = '.btn-remove-form-element',
    $formElementArea  = $('.form-element-area');

/**
 * Add form element
 */
$(document).on('click', addFormElement, function (e) {
    e.preventDefault();

    $.ajax({
        url: '/snippets/form/element/new',
        dataType: 'html',
        success: function (snippet) {
            $formElementArea.append(snippet);
        }
    });
});

/**
 * Remove form element
 */
$(document).on('click', removeFormElement, function (e) {
    e.preventDefault();

    $(this).parent().parent().remove();
});