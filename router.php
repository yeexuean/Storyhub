<?php 
class Router {
  private $routes = [];

  public function add($method, $path, $controller, $action) {
    $this -> routes[] = [
      'method' => $method,
      'path' => $path,
      'controller' => $controller,
      'action' => $action
    ];
  }

  public function get ($path, $controller, $action) {
    $this -> add('GET', $path, $controller, $action);
  }

  public function post ($path, $controller, $action) {
    $this -> add('POST', $path, $controller, $action); 
  }

  public function dispatch() {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $method = $_SERVER['REQUEST_METHOD'];

    foreach ($this -> routes as $route) {
      if ($route['path'] === $uri && $route['method'] === $method) {
        $controller = $route['controller'];
        $action = $route['action'];

        require_once __DIR__ . '/../controllers/' . $controller . '.php';

        $controllerInstance = new $controller();
        $controllerInstance->$action();
        return;
      }
    }

    //no route match found - 404
    header("HTTP/1.0 404 Not Found");
  }
}