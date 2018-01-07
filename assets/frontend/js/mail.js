jQuery(function($)  
{
    $("#contact_form").submit(function()
    {
        var email = $("#email").val(); // get email field value
        var name = $("#name").val(); // get name field value
        var msg = $("#msg").val(); // get message field value
        $.ajax(
        {
            type: "POST",
            url: "https://mandrillapp.com/api/1.0/messages/send.json",
            data: {
                'key': 'sVRLFidC1A7K56TuUkyUQg',
                'message': {
                    'from_email': email,
                    'from_name': name,
                    'headers': {
                        'Reply-To': email
                    },
                    'subject': 'Website Contact Form Submission',
                    'text': msg,
                    'to': [
                    {
                        'email': 'ana96moraes@gmail.com',
                        'name': 'Gamificação Decom Ufop',
                        'type': 'to'
                    }]
                }
            }
        })
        .done(function(response) {
            alert('Sua mensagem foi enviada. Agradecemos por entrar em contato conosco =)'); // show success message
            $("#name").val(''); // reset field after successful submission
            $("#email").val(''); // reset field after successful submission
            $("#msg").val(''); // reset field after successful submission
        })
        .fail(function(response) {
            alert('Erro no envio da mensagem. Tente novamente mais tarde');
        });
        return false; // prevent page refresh
    });
});