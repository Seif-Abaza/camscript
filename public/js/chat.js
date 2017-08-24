/**
 * Created by Pablo.Ramirez on 8/2/2017.
 */

Chat = {
    temporaryText: null,
    init: function(){
        $('.text-input-chat').attr('disabled', 'disabled');

        if(Main.PERFORM == true) {
            $('.text-input-chat').removeAttr('disabled');
        }

        $('.button-send-chat ').on('click', function(){
            Chat.processingText();
        });

        $('.text-input-chat').on('keydown', function(e){
            var code = parseInt(e.keyCode ? e.keyCode : e.which);
            if (code === 13) {
                Chat.processingText();
            }
        });
    },

    processingText: function () {
        $('.chat-text-container').find('ul').append(
            '<li>' + $('.text-input-chat').val() + '</li>'
        );

        Chat.temporaryText =   $('.text-input-chat').val();
        $('.text-input-chat').val('');

        //save text on db
        //AJAX call to store event in database.
        var userId = parseInt($('#hidden-user-id').val());
        if (typeof userId !== 'undefined') {
            $.ajax({
                type: "post",
                url: 'chat_store',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    'id': userId,
                    'performingId': Main.PerformerId,
                    'textMessage': Chat.temporaryText,
                },
                dataType: 'JSON',
                success: function (data) {
                    console.log(data);
                    $('.chat-text-container').text('');
                    $('.chat-text-container').text(data.text);
                },
                error: function (data) { // What to do if we fail
                    console.log('Error:' + data);
                }

            });
        }
    }
}

$(function(){
    Chat.init();
});
