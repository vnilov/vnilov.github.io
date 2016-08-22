/**
 * Created by vnilov on 8/22/16.
 */

$(function () {

    var param1 = $('#additionalParam1');
    var param2 = $('#additionalParam2');
    var button = $('#sendRequest');
    var method = "get";
    var id;
    var phrase;

    $('#method').change(function () {
        if ($.inArray($(this).val(), ['get', 'update', 'delete']) != -1) {
            param1.removeClass('hidden');
            button.attr('disabled', true);
        } else {
            if (!param1.hasClass('hidden'))
                param1.addClass('hidden');
        }
        if ($(this).val() == 'create') {
            param2.removeClass('hidden');
            button.attr('disabled', true);
        } else {
            if (!param2.hasClass('hidden'))
                param2.addClass('hidden');
        }
        
        switch ($(this).val()) {
            case "update":
                method = "POST";
                break;
            case "delete":
                method = "DELETE";
                break;
            case "create":
                method = "PUT";
                break;
            default:
                method = "GET";
        }
    });

    param1.on('input', function () {
        var len = param1.find('input').val().length;
        id = param1.find('input').val();
        if (len > 0) {
            button.attr('disabled', false);
        } else {
            button.attr('disabled', true);
        }
    });

    param2.on('input', function () {
        var len = param2.find('input').val().length;
        phrase = param2.find('input').val();
        if (len > 0) {
            button.attr('disabled', false);
        } else {
            button.attr('disabled', true);
        }
    });

    button.click(function(e){
        e.preventDefault();
        var url = "http://api.lookover.app/phrase_generator";
        var data = {};
        if (id != undefined) {
            url += "/" + id;
        }
        if (phrase != undefined && phrase.lenght > 0)
            data = {"phrase": phrase};
        $.ajax({
            type: method,
            url: url,
            data: data,
            response: 'json',
            complete: function(data, textStatus, request){
                write2Console(data.status + ' ' + data.statusText);
                write2Response(data.responseJSON);
            }
        });
    })
});
function write2Console(text) {
    var html = $('#console').html();
    $('#console').html(html + text + "<br>");
}
function write2Response(data) { 
    var html = $('#response').html();
    $('#response').html(html + data + "<br>");
}