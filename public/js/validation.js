$(function () {
    $('#page-info-form-submit').click(function () {
        if ($('#page-info-form').smkValidate()) {
            return true;
        } else {

            return false;
        }
    });

});

function contactValidation() {

    var form_val = getFormVals('#contact-form');
    var alert_msg = [];
    if (form_val['name'] === '') {
        alert_msg.push('名前は必須ですので入力して下さい。');
    }
    if (form_val['name_kana'] === '') {
        alert_msg.push('フリガナは必須ですので入力して下さい。');
    }
    if (form_val['mail'] === '') {
        alert_msg.push('メールアドレスは必須ですので入力して下さい。');
    } else if (!form_val['mail'].match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)) {
        alert_msg.push('メールアドレスは頭文字以外に@を含むメール形式で入力して下さい。');
    } else if (form_val['mail_confirm'] === '') {
        alert_msg.push('メールアドレス確認は必須ですので入力して下さい。');
    } else if (form_val['mail'] !== form_val['mail_confirm']) {
        alert_msg.push('入力されたメールアドレスとメールアドレス確認が一致していません。');
    }
    if (!form_val['tel_no'].match(/^[0-9]+$/)) {
        alert_msg.push('半角数字で入力して下さい。');
    }
    if (form_val['msg_title'] === undefined) {
        alert_msg.push('お問い合わせ区分は必須ですので必ず一つは選択して下さい。');
    }
    if (form_val['message'] === '') {
        alert_msg.push('お問い合わせ内容は必須ですので入力して下さい。');
    }
    if (alert_msg.length > 0) {
        $('#form-alert').fadeIn(1000);
        // ulタグを生成してinsertに追加
        var insert = $('<ul>').addClass('list');

        for (var i = 0; i < alert_msg.length; i++) {
            // liタグを生成してテキスト追加
            var newLi = $('<li>').text(alert_msg[i]);
            // insertに生成したliタグを追加
            insert.append(newLi);
        }

        // insertを#form-alert内に追加
        $('#form-alert').append(insert);
        return null;
    }
    return form_val;
}

function getFormVals(form_id) {
    // オブジェクトを用意
    var obj = new Object();

    // テキストフィールドの値を取得/マッピング
    $(form_id + ' input:text').each(function () {
        obj[this.name] = this.value;
    });
    // メールフィールドの値を取得/マッピング
    obj['mail'] = $('input[name="mail"]').val();
    obj['mail_confirm'] = $('input[name="mail_confirm"]').val();
    // テキストエリアの入力値を取得/マッピング
    $(form_id + ' textarea').each(function () {
        obj[this.name] = this.value;
    });
    // hiddenの値を取得/マッピング
//    $(form_id + ' input:hidden').each(function () {
//        obj[this.name] = this.value;
//    });
    // radioやcheckboxのチェック値を取得/マッピング
    $(form_id + ' input:checked').each(function () {
        // check box
        if ($(this).prop('type') === 'checkbox') {
            if (obj[this.name] === undefined) {
                obj[this.name] = [];
            }
            obj[this.name].push($(this).val());
        } else {
            obj[this.name] = this.value;
        }
    });
    // selectの選択値を取得/マッピング
    $(form_id + ' option:selected').each(function () {
        var input_name = $(this).parent().prop('name');
        obj[input_name] = this.value;
    });
    return obj;
}


