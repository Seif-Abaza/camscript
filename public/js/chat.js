/**
 * Created by Pablo.Ramirez on 8/2/2017.
 */

Chat = {
    init: function(){
        $('.button-send-chat ').on('click keydown', function(e){

            console.log("clicking text");
            //$('.chat-text-container').text($('.text-input-chat').val());
            $('.chat-text-container').find('ul').append(
               '<li>' + $('.text-input-chat').val() + '</li>'
            );

            $('.text-input-chat').val('');

           //save text on db
            //AJAX call to store event in database.
            var userId = parseInt($('#hidden-user-id').val());
            console.log(userId);
            if(typeof userId !== 'undefined'){
                $.ajax({
                    type: "get",
                    url: 'chat/store',
                    data: {
                        'id': userId,
                        'performing': Main.PERFORM
                    },
                    dataType: 'JSON',
                    success: function (data) {

                    },
                    error: function (data) { // What to do if we fail
                        //console.log('Error:' + data);
                    }

                });
            }
        });


    }
}

$(function(){
    Chat.init();
});
