/**
 * Created by Pablo.Ramirez on 7/26/2017.
 */

Main = {

    init: function(){
        if($('#flash-message').is(':visible')) {
            $('#flash-message').hide('drop', { direction: 'up'}, 5000);
        }
    }
}

//Call Main Object
$(function(){
   Main.init();
});


