$(() => {
    $('form').on('submit', (event) => {
        event.preventDefault();

        $.ajax({
            url: "/",
            method: "post",
            data: {
              url: $('#url').val()
            },
            dataType: "json",
            success: (response) => {
                $('#shortlink-block').removeClass('d-none');
                $('#shortlink').val(location.href + response.shortcode);
            },
            error: (error) => alert(error.responseJSON.message)
        });
    });
});
