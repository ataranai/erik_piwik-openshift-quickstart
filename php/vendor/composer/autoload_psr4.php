<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Piwik\\Plugins\\' => array($baseDir . '/plugins'),
    'Piwik\\Network\\' => array($vendorDir . '/piwik/network/src'),
    'Piwik\\Decompress\\' => array($vendorDir . '/piwik/decompress/src'),
    'Piwik\\' => array($baseDir . '/core'),
    'Interop\\Container\\' => array($vendorDir . '/container-interop/container-interop/src/Interop/Container'),
    'DeviceDetector\\' => array($vendorDir . '/piwik/device-detector'),
);
