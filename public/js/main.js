/**
 * Created by Pablo.Ramirez on 7/26/2017.
 */

Main = {

    PERFORM: null,
    PerformerId: null,
    init: function(){
        if($('#flash-message').is(':visible')) {
            $('#flash-message').hide('drop', { direction: 'up'}, 5000);
        }

        $('.grayCircle').show();

        var $startingCam = $('.starting-cam');
        $startingCam.on('change', function(){
            Main.PERFORM = $(this).closest('div').hasClass('off') ? false : true;
            if(Main.PERFORM){
                $('.greenCircle').show();
                $('.grayCircle').hide();
                $('.video-container').css('backgroundColor', 'white').text('loading...');
                $('.text-input-chat').removeAttr('disabled');
            } else {
                $('.greenCircle').hide();
                $('.grayCircle').show();
                $('.video-container').css('backgroundColor', 'gray').text('');

            }

            //AJAX call to store event in database.
            var userId = parseInt($('#hidden-user-id').val());
            if(typeof userId !== 'undefined'){
                $.ajax({
                    type: "get",
                    url: 'perform/setperformance',
                    data: {
                        'id': userId,
                        'performing': Main.PERFORM
                    },
                    dataType: 'JSON',
                    success: function (data) {
                        Main.PerformerId = parseInt(data);

                    },
                    error: function (data) { // What to do if we fail
                        console.log('Error:' + data);
                    }

                });
            }
        });
    }
}

//Call Main Object
$(function(){
   Main.init();
});


