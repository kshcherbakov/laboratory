<?

$method = $_SERVER['REQUEST_METHOD'];
$formData = getFormData($method);

$url = (isset($_GET['q'])) ? $_GET['q'] : '';
$url = rtrim($url, '/');
$urls = explode('/', $url);

$router = $urls[0];
$urlData = array_slice($urls, 1);

// Подключаем файл-роутер и запускаем главную функцию
include_once 'routers/' . $router . '.php';
route($method, $urlData[0], $formData);

function getFormData($method) {
  // GET или POST: данные возвращаем как есть
  if ($method === 'GET') return $_GET;
  if ($method === 'POST') return $_POST;
  // PUT, PATCH или DELETE
  $data = array();
  $exploded = explode('&', file_get_contents('php://input'));
  foreach($exploded as $pair) {
    $item = explode('=', $pair);
    if (count($item) == 2) {
      $data[urldecode($item[0])] = urldecode($item[1]);
    }
  }
  return $data;
}

?>