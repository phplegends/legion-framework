<?php

namespace App\Errors;

use PHPLegends\Http\Exceptions\HttpException;

trait HandlerTrait
{

    protected function toHtml($exception, $request, $response)
    {   
        $status = 500;

        if ($exception instanceof HttpException)
        {
            $status = $exception->getResponse()->getStatusCode();
        }

        return $response->view('errors/default', compact('exception', 'status'), $status);
    }



    protected function toConsole($exception, $request, $response_factory)
    {
        $output = "\n\nPATH: {$request->getUri()}\nEXCEPTION: {$exception}\n\n";
        error_log($output, 4);
    }

    protected function toJson($exception, $request, $response_factory, $config)
    {
        $code = 500;
        $message = 'An error has ocurred';

        if ($exception instanceof HttpException) {
            $code = $exception->getResponse()->getStatusCode();
            $message = $exception->getMessage();
        }

        $data = compact('code', 'message');

        if ($config['debug'] === true) {

            $data['exception'] = (string) $exception->getTraceAsString();
            $data['exception_class'] = get_class($exception);
        }

        return $response_factory->json($data, $code);
    }
}