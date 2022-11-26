<?php
/**
 * @category    Scandiweb
 * @theme       Scandiweb/base
 * @author      Abdelrahman Elbasel <info@scandiweb.com>
 * @license     http://opensource.org/licenses/OSL-3.0 The Open Software License 3.0 (OSL-3.0)
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::THEME,
    'frontend/Scandiweb/base',
    __DIR__
);
