$(function () {

    $('#form-alert').css('display', 'none');
    // 問い合わせFormのバリデーション
    $('#contact-form').submit(function () {
        var form_val = contactValidation();
        // 操作対象のフォーム要素を取得
        var form = $(this);
        if (form_val !== null) {

            $.ajax({
                type: "POST",
                url: "contacts", // /heiseisendにアクセスしてheiseicon.phpが発動
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {"contact_data": form_val},
                success: function () {
                    form[0].reset();
                    $('#sampleModal').modal();
                    $('#form-alert').css('display', 'none');
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert(errorThrown); // エラーメッセージ
                }
            });
        }
        return false;
    });
    $('#login-form').submit(function (e) {
        e.preventDefault();
        var $form = $(this);
        var data = [];
        $('#login-form input:text').each(function () {
            data[this.name] = this.value;
        });
        $('#login-form input:password').each(function () {
            data[this.name] = this.value;
        });
        $.ajax({
            method: 'POST',
            dataType: 'json',
            contentType: 'application/json',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: data,
            url: 'login',
            // 通信成功時の処理
            success: function (result, textStatus, xhr) {
                alert('OK');
            },
            // 通信失敗時の処理
            error: function (xhr, textStatus, error) {
                alert('NG...');
            }
        });
    });
});