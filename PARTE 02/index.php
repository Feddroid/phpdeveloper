<?php

    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;

    require 'vendor/autoload.php';

    $app = new \Slim\App;

    $container = $app->getContainer();

    $container['view'] = new \Slim\Views\PhpRenderer('plantillas/');

    $jsonData = json_decode(file_get_contents('employees.json'), true);

    $app->get('/', function (Request $request, Response $response, array $args) use($jsonData) {

        $respuesta = $this->view->render($response, 'inicio.php', ['datos' => $jsonData]);
        return $respuesta;
    });


    $app->post('/buscar-empleado-email', function (Request $request, Response $response, array $args) use($jsonData) {
        $email = $request->getParam('email');
        $respuesta = $this->view->render($response, 'buscar-empleado-email.php', ['datos' => $jsonData, 'email' => $email]);
        return $respuesta;
    });


    $app->get('/resultado-comparar-salarios', function (Request $request, Response $response, array $args) use($jsonData) {

        header("content-type: application/xml");

        $params = $request->getQueryParams();

        $xml = new DomDocument("1.0","UTF-8");
        $xml->formatOutput = true;

        $empleados = $xml->createElement("empleados");
        $xml->appendChild($empleados);

        foreach ($jsonData as $dato) {
            $salario = intval(str_replace(",","",substr($dato["salary"],1,-1)));
            if (  $salario >= $params["salarioMinimo"]  && $salario <= $params["salarioMaximo"]  ){

                $empleado = $xml->createElement("empleado");
                $empleados->appendChild($empleado);

                $name =$xml->createElement("nombre", $dato["name"]);
                $empleado->appendChild($name);

                $price =$xml->createElement("salario", $dato["salary"]);
                $empleado->appendChild($price);

            }
        }

        return "<xmp>".$xml->saveXML()."</xmp>";
    });


    $app->run();

?>