/**
 * Created by gilas on 13/10/16.
 */

$(function(){

    var currentDate = new Date(),
        day = currentDate.getDate(),
        month = currentDate.getMonth() + 1,
        year = currentDate.getFullYear();

    $('#datecontainer').val(year + "-" + month + "-" + day + " 00:00");

    $datetp = $('#datetimepicker');
    $datetp.datetimepicker({
        inline: true,
        sideBySide: true
    });

    $datetp.on('dp.change', function(e){
        //console.log($datetp.getFullYear(),$datetp.getMonth(),$datetp.getDate());
        var formatedValue = e.date.format(e.date._f);

        var raw_string = formatedValue,
            exp_string = raw_string.split("T"),
            date_string = exp_string[0],
            exp_time = exp_string[1].split(":"),
            time_string = exp_time[0] + ":" + exp_time[1];

        $('#datecontainer').val(date_string + " " + time_string);
    });

    /*
    $("#datetimepicker").datetimepicker({
        minDate: 0
    });
    */
    $('.btn-hide').click(function(){
        $(this).closest('.item-hide').parent().find('.item-show').show();
        $(this).closest('.item-hide').parent().find('.item-hide').hide();
    });

    CKEDITOR.disableAutoInline = true;
    $('textarea.ckeditor').ckeditor();
});