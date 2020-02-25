$(document).ready(function () {
    $('.elephant-check-form').submit(function (e) {
        let params = $('.parameters').val();
        let matches = params.match(/[^\D]\d*/g);
        if (matches == null || params == '' || matches[1] == null || (params.indexOf(' ') == -1 && params.indexOf(',') == -1)) {
            $('.parameters').focus().addClass('error');
            $('.result-form').html('Проверьте форму');
            e.preventDefault();
        }
    });
    
    $('.report').click(function(){
        $.ajax({
            url:  "/actions/report.php",
            type: "POST",
            data: '',
            success: function(response) {
                $('.result-form').html(response);
            },
            error: function(response) {
                $('.result-form').html('Ошибка. Данные не отправлены.');
            }
        });
    }); 
});