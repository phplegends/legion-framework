<?php


namespace App\Middlewares;


class TrimString
{
    public function handle($request, $response)
    {

        foreach (['query', 'body'] as $key) {

            $collection = $request->__get($key);

            $collection->merge($collection->map(function ($value) {
                return is_string($value) ?  trim($value) : $value;
            })->all());

        }
    }
}