<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/28/16
 * Time: 12:53 PM
 */

namespace Vain\Http\Request\Event\Listener;

use Psr\Http\Message\RequestInterface;

interface VainHttpRequestEventListenerInterface
{
    /**
     * @param RequestInterface $request
     * 
     * @return VainHttpRequestEventListenerInterface
     */
    public function onRequest(RequestInterface $request);
}