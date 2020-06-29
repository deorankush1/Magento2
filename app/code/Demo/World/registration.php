<?php

use Magento\Framework\Component\ComponentRegistrar;

$registrar = new ComponentRegistrar();

if ($registrar->getPath(ComponentRegistrar::MODULE, 'Demo_World') === null) {
    ComponentRegistrar::register(ComponentRegistrar::MODULE, 'Demo_World', __DIR__);
}
