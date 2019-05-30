let form = document.forms.someForm;
console.log("form");
// отправка формы с перезагрузкой страницы
// form.addEventListener('submit', formHandler);

function formHandler(event) {
    event.preventDefault();
    let validate_fields = document.querySelectorAll('.validate');
    if (!formValid(validate_fields)){
        document.getElementById("errors").innerHTML =
            'не все поля заполнены';
        return;
    }
    this.submit();
}

function formValid(fields) {
    for (let i = 0; i < fields.length; i++) {
        if (fields[i].value.length < 3) {
            return false;
        }
    }
    return true;
}

// отправка без перезагрузки страницы
// отправка ajax-запросом

form.addEventListener('submit', ajaxHandler);
function ajaxHandler(event) {
    event.preventDefault();
    let validate_fields = document.querySelectorAll('.validate');
    if (!formValid(validate_fields)){
        document.getElementById("errors").innerHTML =
            'не все поля заполнены';
        return;
    }
    let form_data = new FormData(this);
    console.log(form_data.get("login"));

    let xhr = new XMLHttpRequest(); // объкт запроса
    console.log(xhr);
    // запрос будет отправлем методом POST на обработчик формы
    // в данной случае - "form_handler.php"
    xhr.open("POST", this.action, true);
    xhr.send(form_data);

    xhr.onload = function (event) {
        // функция будет вызвана, когда придет ответ от сервера
        if (xhr.status == 200) {
            responseHandler(xhr.responseText);
        }
    }
}

function responseHandler(text) {
    console.log("ответ сервера: " + text);
}

