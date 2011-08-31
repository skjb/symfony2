<?php

namespace Skjb\Bundle\MobileBundle\EventListener;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;
use Symfony\Component\HttpFoundation\Request;

class MobileListener
{
    protected $container;
    
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function onKernelController(FilterControllerEvent $event)
    {
        $request = $event->getRequest();
        
        if ($request->server->has('HTTP_USER_AGENT')) {
            $userAgent = $request->server->get('HTTP_USER_AGENT');
            if (preg_match('/(iphone|ipad|android)/i', $userAgent)) {
                $request->setRequestFormat('mobile');
            }
        }
    }
}
