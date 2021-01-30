$('button').click(() => {
    let btn = $('button');
    btn.prop('disabled', true).html('Validating . . .');

    let bombUrl = "bomb.php";

    let credentials = $('#credentials').val();
    let sendername = $('#sendername').val();
    let link = $('#link').val();
    let subject = $('#subject').val();
    let message = $('#message').val();
    let mails = $('#mail').val();

    message = message.replaceAll("[LINK]", link);
    mails = mails.split(',');

    let data = [];
        data['credentials'] = credentials;
        data['sendername'] = sendername;
        data['link'] = link;
        data['subject'] = subject;
        data['message'] = message;
        data['mails'] = mails;

    let errors = [];

    for (let key in data) {
        if (data[key] == '' || data[key] == ' ' || data[key] == null || data[key] == undefined) {
            errors.push(key + ' cannot be empty');
        }
    }

    if (errors.length > 0) {
        let errmsg = '';

        errors.forEach(error => {
            errmsg += error + '\n';
        });

        btn.removeAttr('disabled').html('bomb');
        return alert(errmsg);
    }

    btn.html('bombing . . .');

    let authname = data['credentials'].split(':')[0];
    let authpass = data['credentials'].split(':')[1];
    
    $.ajax({
        url : bombUrl,
        type: 'POST',
        data : {
            username: authname,
            password: authpass,
            fromEmail: authname,
            fromName: sendername,
            mails: mails,
            body: message
        }
    }).done(result => {
        if (result == 'sent') {
            btn.removeAttr('disabled').html('bomb');
            return alert('mails bombed');
        }
        return alert('error occurred');
    });
});