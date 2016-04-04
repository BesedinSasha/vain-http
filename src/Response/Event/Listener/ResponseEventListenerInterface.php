<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/28/16
 * Time: 1:01 PM
 */

namespace Vain\Http\Response\Event\Listener;

use Psr\Http\Message\ResponseInterface;

interface ResponseEventListenerInterface
{
    /**
     * @param ResponseInterface $response
     * 
     * @return ResponseEventListenerInterface
     */
    public function onResponse(ResponseInterface $response);
}