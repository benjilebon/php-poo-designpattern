<?php

namespace Core\Routing;

use Core\Routing\IRequest;


class Router
{
  private $request;
  private $supportedHttpMethods = array(
    "GET",
    "POST"
  );

  function __construct(IRequest $request) {
    $this->request = $request;
  }

  function __call($name, $args) {
    list($route, $method) = $args;

    if (is_string($method)) {
      $array = explode('@', $method);
      $requiredController = 'App\Controllers\\'.$array[0];
      $controller = new $requiredController($this->request);
      $string = $array[1];
      $method = \Closure::fromCallable([$controller, $string]); 
    }
    

    if(!in_array(strtoupper($name), $this->supportedHttpMethods))
    {
      $this->invalidMethodHandler(new Request());
    }

    $this->{strtolower($name)}[$this->formatRoute($route)] = $method;
  }

  /**
   * Removes trailing forward slashes from the right of the route.
   * @param route (string)
   */
  private function formatRoute($route) {
    $result = rtrim($route, '/');
    if ($result === '')
    {
      return '/';
    }
    if (strpos($result, '?')) {
      $arr = explode('?', $result);
      $result = $arr[0];
      $this->request->arg = $_GET[explode('=', $arr[1])[0]];
    }

    return $result;
  }

  private function invalidMethodHandler() {
    header("{$this->request->serverProtocol} 405 Method Not Allowed");
  }

  private function defaultRequestHandler() {
    header("{$this->request->serverProtocol} 404 Not Found");
  }

  /**
   * Resolves a route
   */
  function resolve()
  {
    $methodDictionary = $this->{strtolower($this->request->requestMethod)};
    $formatedRoute = $this->formatRoute($this->request->requestUri);
    try {
      $method = $methodDictionary[$formatedRoute];
    }
    catch(\Exception $e) {
      $this->defaultRequestHandler();
      return;
    }

    if(is_null($method))
    {
      $this->defaultRequestHandler();
      return;
    }

    echo call_user_func_array($method, array($this->request));
  }

  function __destruct()
  {
    $this->resolve();
  }
}

























?>