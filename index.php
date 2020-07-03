<?php
    require_once('core/autoload.php');
    $requestUri=preg_split('/\/|\?/',$_SERVER["REQUEST_URI"]);
    $pathName = $requestUri[2] === 'backend' ? 'backend' : 'frontend';
    $controllerName = !isset($requestUri[3]) ? 'home' : $requestUri[3] === '' ? 'home' : $requestUri[3];
    $actionName = !isset($requestUri[4]) ? 'index' : $requestUri[4] === '' ? 'index' : $requestUri[4];
    $controllerPath = $pathName . '/controllers/' . $controllerName . 'Controller.php';
    try
    {
        if (file_exists($controllerPath)){
            $controllerClassName = $pathName . '\\controllers\\' . $controllerName . 'Controller';
            $controller = new $controllerClassName;
            $actionClassMethodName = $actionName . 'Action';
            if (method_exists($controller, $actionClassMethodName)){
                $controller->$actionClassMethodName();
            } else {
                throw new Exception ("Method $actionClassMethodName in controller class $controllerClassName not found in file: $controllerPath");
            }
        } else {
            throw new Exception ("Controller file not found file name: $controllerPath");
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }