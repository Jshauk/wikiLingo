<?php
require_once 'Zend/Loader/StandardAutoloader.php';
$loader = new Zend\Loader\StandardAutoloader(array('autoregister_zf' => true, 'fallback_autoloader' => true));
$dir = dirname(__FILE__);
$loader
    ->registerNamespace('Jison', $dir . '/Jison')
    ->registerNamespace('WikiLingo', $dir);

$loader->register();
$wikiLingo = new WikiLingo();
echo $wikiLingo->parse("test");