/**
 * Created by vnilov on 9/6/16.
 */
$(function(){
    $('input[type=checkbox]').iCheck({
        checkboxClass: 'icheckbox_flat-blue',
    });
    $('input[type=checkbox]').on('ifChecked', function(event) {
        $('#finishWork').prop('disabled', true);
    });
    $('input[type=checkbox]').on('ifUnchecked', function(event) {
        $('#finishWork').prop('disabled', false);
    });
});