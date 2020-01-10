<?php
declare(strict_types=1);

namespace GuzabaPlatform\Facebook\Login\Hooks;

use Guzaba2\Http\Body\Structured;
use Guzaba2\Mvc\AfterControllerMethodHook;
use Psr\Http\Message\ResponseInterface;

class AfterLoginMain extends AfterControllerMethodHook
{
    public function process(ResponseInterface $Response) : ResponseInterface
    {
        $Body = $Response->getBody();
        $struct = $Body->getStructure();

        //$struct['hooks']['_after_main']['name'] = realpath(dirname(__FILE__).'/../../public_src/FacebookLoginHook.vue');
        $struct['hooks']['_after_main'][] = [
            'name'  => '@GuzabaPlatform.Facebook.Login/FacebookLoginHook.vue',
            'data'  => 'some db data',
        ];
        $Response = $Response->withBody( new Structured($struct) );
        return $Response;
    }
}