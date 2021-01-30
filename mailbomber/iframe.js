$('#message').keyup(() => {
    let link = $('#link').val();
    let message = $('#message').val();
    let frame = $('#myframe').contents().find('body');
    message = message.replaceAll("[LINK]", link);

    frame.html(message);
});