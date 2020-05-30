<?php

namespace App\Controllers;

class ResourceController extends Controller
{
    public function index($request, $response)
    {

        return $response->json([
            'query'  => $request->query,
            'params' => $request->body,
            'route'  => $request->getCurrentRoute()->getMiddlewares()
        ]);
    }

    public function show($request, $response, $id)
    {
        return $response->json(['id' => $id]);
    }

    public function update($request, $response, $id)
    {

        return $response->json([
            // 'body'    => $request->getJsonContent(),
            'params' => $request->body,
            'x' => $_POST,
            'id' => $id,
            'action' => 'updated',
        ]);
    }

    public function delete($request, $response, $id)
    {
        return $response->json([
            'id' => $id,
            'action' => 'deleted',
        ]);
    }

    public function create($request, $response)
    {
        return $response->json([
            'body'    => $request->getJsonContent(),
            'action' => 'created!'
        ]);
    }
}