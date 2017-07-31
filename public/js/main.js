/**
 * Created by Pablo.Ramirez on 7/26/2017.
 */

Main = {

    init: function(){
        if($('#flash-message').is(':visible')) {
            $('#flash-message').hide('drop', { direction: 'up'}, 5000);
        }

        var $startingCam = $('.starting-cam');
        $startingCam.on('change', function(){
            var $showStatus = $(this).closest('div').hasClass('off') ? 0 : 1;
            //Have to make ajax call here
        })

    }
}

//Call Main Object
$(function(){
   Main.init();
});


