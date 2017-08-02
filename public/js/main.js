/**
 * Created by Pablo.Ramirez on 7/26/2017.
 */

Main = {

    init: function(){
        if($('#flash-message').is(':visible')) {
            $('#flash-message').hide('drop', { direction: 'up'}, 5000);
        }

        $('.grayCircle').show();

        var $startingCam = $('.starting-cam');
        $startingCam.on('change', function(){
            var $perform = $(this).closest('div').hasClass('off') ? false : true;
            if($perform){
                //AJAX call to store event in database.
                var userId = parseInt($('#hidden-user-id').val());
                if(typeof userId !== 'undefined'){

                    $.ajax({
                        type: "get",
                        url: 'perform/setperformance',
                        data: {'id': userId},
                        dataType: 'JSON',
                        success: function (data) {
                            $('.greenCircle').show();
                            $('.grayCircle').hide();
                            $('.video-container').css('backgroundColor', 'white').text('loading...');
                        },
                        error: function (data) { // What to do if we fail
                            console.log('Error:' + data);
                        }

                    });
                }
            } else {
                $('.greenCircle').hide();
                $('.grayCircle').show();
                $('.video-container').css('backgroundColor', 'gray').text('');

            }
        })

    }
}

//Call Main Object
$(function(){
   Main.init();
});


