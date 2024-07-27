<?

function route($method, $action, $formData) {
     
  // Добавление пользователя
  // POST /users/add
  if ($method === 'POST' && $action == "add") {

    // Добавляем пользователя в базу...
    $userId = 13210;

    // Выводим ответ клиенту
    echo json_encode(array(
        'method' => 'GET',
        'id' => $userId,
        'success' => 1
    ));

    return;
  }

  // Получение информации о пользователе
  // POST /users/add
  if ($method === 'POST' && $action == "getinfo") {

    $userId = $formData["id"];
    // Получаем информацию о пользователе
    
    // Выводим ответ клиенту
    echo json_encode(array(
        'method' => 'GET',
        'id' => $userId,
        'login' => 'ThisUserLogin',
        'name' => 'ThisUsername',
        'success' => 1
    ));

    return;
  }

  // Обновление информации о пользователе
  // POST /users/updateinfo
  if ($method === 'POST' && $action == "updateinfo") {

    $userId = $formData["id"];
    // Обновляем информацию о пользователе
    
    // Выводим ответ клиенту
    echo json_encode(array(
        'method' => 'GET',
        'id' => $userId,
        'success' => 1
    ));

    return;
  }
  
  
  // Удаляем пользователя
  // POST /users/delete
  if ($method === 'POST' && $action == "delete") {

    $userId = $formData["id"];
    // Обновляем информацию о пользователе
    
    // Выводим ответ клиенту
    echo json_encode(array(
        'method' => 'GET',
        'id' => $userId,
        'success' => 1
    ));

    return;
  }
  
  // Авторизация пользователя
  // POST /users/auth
  if ($method === 'POST' && $action == "auth") {

    $login = $formData["login"];
    $token = $formData["token"];
    // Авторизация...
    $userId = 3212;
    
    // Выводим ответ клиенту
    echo json_encode(array(
        'method' => 'GET',
        'id' => $userId,
        'success' => 1
    ));

    return;
  }
  
  
  
  // Возвращаем ошибку
  header('HTTP/1.0 400 Bad Request');
  echo json_encode(array(
    'error' => 'Bad Request'
  ));


    
}


?>