(function () {

    const btn = document.querySelector('.btn');
    const btnSend = document.querySelector('.js-btn-send');
    const errorNameText = document.querySelector('.js-error-name');
    const errorAddressText = document.querySelector('.js-error-address');
    const errorPhoneText = document.querySelector('.js-error-phone');
    const errorEmailText = document.querySelector('.js-error-email');


    $.fn.setCursorPosition = function(pos) {
        if ($(this).get(0).setSelectionRange) {
            $(this).get(0).setSelectionRange(pos, pos);
        } else if ($(this).get(0).createTextRange) {
            var range = $(this).get(0).createTextRange();
            range.collapse(true);
            range.moveEnd('character', pos);
            range.moveStart('character', pos);
            range.select();
        }
    };
    $(".feedback-phone").click(function(){
        $(this).setCursorPosition(3);
    }).mask("+7(999) 999-9999");
    $("#center_not_ok").mask("+7(999) 999-9999");





btnSend.addEventListener('click', function() {
    errorNameText.style.display = 'none';
    errorAddressText.style.display = 'none';
    errorPhoneText.style.display = 'none';
    errorEmailText.style.display = 'none';

    let error = false;
    let name = document.querySelector('input[name="name"]').value;
    let address = document.querySelector('input[name="address"]').value;
    let phone = document.querySelector('input[name="phone"]').value;
    let email = document.querySelector('input[name="email"]').value;

    // if (!/^[А-ЯЁ][а-яё]{2,}([-][А-ЯЁ][а-яё]{2,})?\s[А-ЯЁ][а-яё]{2,}\s[А-ЯЁ][а-яё]{2,}$/.test(name)) {
    //     showError('name');
    //     error = true;
    // }

    if (!/^[а-яА-Я0-9,\.\s]+$/.test(address)) {
        showError('address');
        error = true;
    }

    if (!/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9\._-]+\.[a-zA-Z]{2,4}$/.test(email)) {
        showError('email');
        error = true;
    }

    if (!error) {
        fetch(
            'send.php', {
                method: 'POST',
                body: JSON.stringify({name: name, address: address, phone: phone, email: email}),
                headers: {
                    'Content-Type': 'application/json'
                }
            }
        ).then(
            (result) => result.json()
        ).then(
            (result) => {
                if (result.success) {
                      alert("Успешно!");

                    document.querySelector('input[name="name"]').value = '';
                    document.querySelector('input[name="address"]').value = '';
                    document.querySelector('input[name="phone"]').value = '';
                    document.querySelector('input[name="email"]').value = '';
                } else {
                    if (result.error == 'name') {
                        showError('name');
                    } else if (result.error == 'address') {
                        showError('address');
                    } else if (result.error == 'phone') {
                        showError('phone');
                    } else {
                        showError('email');
                    }
                }
            }
        );
    }
});

function showError(fieldName) {
    let errorText = document.querySelector('.js-error-' + fieldName);
    errorText.style.display = 'block';
}








})();