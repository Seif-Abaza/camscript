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
            var $perform = $(this).closest('div').hasClass('off') ? false : true;
            if($perform){
                console.log("I'm sending data");
                //AJAX call to store event in database.
                var userId = parseInt($('#hidden-user-id').val());
                if(typeof userId !== 'undefined'){

                    $.ajax({
                        type: "get",
                        url: 'perform/setperformance',
                        data: { 'id': userId },
                        dataType: 'JSON',
                        success: function(data){
                            console.log('Success: ' + data);
                        },
                        error: function(data) { // What to do if we fail
                            console.log('Error:' + data);
                        }

                    });
                }
            }
        })

    }
}

//Call Main Object
$(function(){
   Main.init();
});


