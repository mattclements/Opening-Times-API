<?php
ini_set('display_errors','1');
require_once 'lib/tonic/lib/tonic.php';
require_once 'resource.php';

$request = new Request();
$resource = $request->loadResource();
$response = $resource->exec($request);
$response->output();
?>
