<?php
//curl позволяет отправлять запросы на сервер
// открыть сессию
$curl = curl_init('адрес сервера');
// настройки сессии
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt_array();
// выполняет запрос
$data = curl_exec($curl);
// закрываем сессию
curl_close($curl);

// vk авторизация api
$client_id = '7046328';
$client_secret = 'mgiX5c2t60KaztGQLKuk';
$redirect_uri = 'http://php-lessons/curl/curl.php';

$url = 'http://oauth.vk.com/authorize';

$params = [
    'client_id'=>$client_id,
    'redirect_uri'=>$redirect_uri,
    'response_type'=> 'code'
];

echo '<p><a href=' . $url . '?' . http_build_query($params) . '>Войти через ВК</a></p>';

if (isset($_GET['code'])){
    $url = 'https://oauth.vk.com/access_token';
    $params = [
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'code'=>$_GET['code'],
        'redirect_uri'=>$redirect_uri
    ];
    $curl = curl_init($url . '?' . http_build_query($params));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $answer = json_decode(curl_exec($curl), true);
    curl_close($curl);

    var_dump($answer);
    if (isset($answer['access_token'])){
        $url = 'https://api.vk.com/method/users.get';
        $params = [
            'uids'=>$answer['user_id'],
            'access_token'=>$answer['access_token'],
            'fields'=>'uid,first_name,last_name,photo_big',
            'v'=>5.101
        ];

        $curl = curl_init($url . '?' . http_build_query($params));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $answer = json_decode(curl_exec($curl), true);
        curl_close($curl);
        var_dump($answer);
    }

}