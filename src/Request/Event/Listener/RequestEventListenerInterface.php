<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/28/16
 * Time: 12:53 PM
 */

namespace Vain\Http\Request\Event\Listener;

use Psr\Http\Message\RequestInterface;

interface RequestEventListenerInterface
{
    /**
     * @param RequestInterface $request
     * 
     * @return RequestEventListenerInterface
     */
    public function onRequest(RequestInterface $request);
}