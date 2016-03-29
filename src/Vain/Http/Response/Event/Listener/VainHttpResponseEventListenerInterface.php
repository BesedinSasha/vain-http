<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/28/16
 * Time: 1:01 PM
 */

namespace Vain\Http\Response\Event\Listener;

use Psr\Http\Message\ResponseInterface;

interface VainHttpResponseEventListenerInterface
{
    /**
     * @param ResponseInterface $response
     * 
     * @return VainHttpResponseEventListenerInterface
     */
    public function onResponse(ResponseInterface $response);
}