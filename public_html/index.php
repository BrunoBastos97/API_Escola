<?php
   // header('Content-Type: application/json');
    
    require_once '../vendor/autoload.php';
    
    if ($_GET['url']){
        $url = explode('/', $_GET['url']);

        if ($url[0] === 'api'){

                array_shift($url);
                $service = 'App\Controller\\'.ucfirst($url[0].'Controller');
                array_shift($url);

                $method = strtolower($_SERVER['REQUEST_METHOD']);

                var_dump($service);

                try{
                    var_dump($url);
                    $response = call_user_func_array(array(new $service, $method), $url);
                    echo json_encode(array('status' => 'sucess', 'data' => $response));
                    exit;
                } catch(\Exception $e){
                        http_response_code(404);

                        echo json_encode(array('status' => 'sucess', 'data' => $e->getMessage()), JSON_UNESCAPED_UNICODE);
                        exit;
                }

        }
    }
?>