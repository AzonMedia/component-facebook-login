<?php
declare(strict_types=1);

namespace GuzabaPlatform\Roles;

use GuzabaPlatform\Components\Base\Interfaces\ComponentInterface;
use GuzabaPlatform\Components\Base\Traits\ComponentTrait;

/**
 * Class Component
 * @package Azonmedia\Tags
 */
class Component implements ComponentInterface
{

    use ComponentTrait;

    protected const COMPONENT_NAME = "Facebook Login";
    //https://components.platform.guzaba.org/component/{vendor}/{component}
    protected const COMPONENT_URL = 'https://components.platform.guzaba.org/component/guzaba-platform/facebook-login';
    //protected const DEV_COMPONENT_URL//this should come from composer.json
    protected const COMPONENT_NAMESPACE = 'GuzabaPlatform\\Facebook\\Login';
    protected const COMPONENT_VERSION = '0.0.1';//TODO update this to come from the Composer.json file of the component
    protected const VENDOR_NAME = 'Azonmedia';
    protected const VENDOR_URL = 'https://azonmedia.com';



}