// объявление переменных
// кнопка открытия модального окна (получили элемент по его id)
let open_modal_btn = document.getElementById('open_modal');
// кнопка закрытия модального окна
let cancel_btn = document.getElementById('cancel');
// модальное окно (получили первый найденный элемент по css селектору)
let modal = document.querySelector('.modal');
// форма (получили элемент формы по значению атрибута name)
let form = document.forms.auth_form;
// элемент для вывода ошибок авторизации
let error_field = document.getElementById('errors');

// варианты ответа сервера
const AUTH_OK = 'ok';
const AUTH_ERROR = 'error';

// функции
// открытие модального окна
function open_modal() {
    modal.classList.add('open');
}
// закрытие модального окна
function close_modal() {
    modal.classList.remove('open');
    error_field.innerHTML = '';// убираем информацию об ошибках
}
// обработка ответа сервера
function responseHandler(serverResponse) {
    console.log("Ответ сервера", serverResponse);
    if (serverResponse === AUTH_OK){
        // значит, авторизация прошла успешно,
        // перенаправляем пользователя на account.php
        window.location.replace('account.php');
    } else if(serverResponse === AUTH_ERROR) {
        // если авторизация не удалась,
        // выводим пользователю сообщение
        error_field.innerHTML= 'Ошибка авторизации';
    }
}
// отправка данных формы ajax запросом
function send_form(event) {
    // отменили отпраку формы
    event.preventDefault();

    // получили все элементы по css селектору .validate
    let validate_fields = document.querySelectorAll('.validate');
    for (let i = 0; i < validate_fields.length; i++) {
        if (validate_fields[i].value.length < 3) {
            error_field.innerHTML = "Не все поля корректно заполнены";
            return;
        }
    }
    // объект FormData хранит все данные из формы,
    // введенные пользователем
    let form_data = new FormData(this);

    // формирование ajax запроса
    let xhr = new XMLHttpRequest();
    xhr.open("POST", this.action, true);
    xhr.send(form_data);

    xhr.onload = function () {
        // когда сервер ответит на запрос,
        // будет вызвана данная функция - обработчик события load
        // для объекта запроса

        if (xhr.status == 200){
            // с сервера пришел ответ
            responseHandler(xhr.responseText);
        }
    };
}

// добавляем обработчики событий
// при нажатии (событие click) на кнопку open_modal_btn
// будет вызвана функция open_modal
open_modal_btn.addEventListener('click', open_modal);
// при нажатии (событие click) на кнопку cancel_btn
// будет вызвана функция close_modal
cancel_btn.addEventListener('click', close_modal);
// при отправке формы (событие submit)
// будет вызвана функция send_form
form.addEventListener('submit', send_form);