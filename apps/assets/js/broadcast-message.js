/**
 * Created by gilas on 13/10/16.
 */

$(function(){
    $('.clip-check input[type="checkbox"]').change(function () {
        var divTarget = $(this).parent().find('label').attr('data-target');
        $('.' + divTarget).toggle();
    });

    CKEDITOR.disableAutoInline = true;
    $('textarea.ckeditor').ckeditor();
});