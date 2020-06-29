<?php

use Magento\Framework\Component\ComponentRegistrar;

$registrar = new ComponentRegistrar();

if ($registrar->getPath(ComponentRegistrar::MODULE, 'AD_CustomerAttribute') === null) {
    ComponentRegistrar::register(ComponentRegistrar::MODULE, 'AD_CustomerAttribute', __DIR__);
}
