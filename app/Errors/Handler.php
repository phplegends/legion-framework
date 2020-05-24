<?php

namespace App\Errors;

class Handler
{
    use HandlerTrait;
    
    /**
     * @param \Exception $exception
     * @param \Legion\Http\Request $request
     * @param \Legion\Http\ResponseFactory
     * @param array $config
     * 
     */
    public function __invoke(...$args)
    {
        $this->toConsole(...$args);

        return $this->toHtml(...$args);
    }    
} 