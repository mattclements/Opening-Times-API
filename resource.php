<?php
ini_set('display_errors','1');
require_once 'lib/tonic/lib/tonic.php';
/**
 * This class defines an example resource that is wired into the URI /example
 * @uri /openinghours
 */
class OpeningHours extends Resource {

    function get($request) {

        $response = new Response($request);

        $response->code = Response::OK;

	$response->addHeader('content-type', 'text/plain');

        $response->body = 'Example response';

        return $response;

    }

}

/**
 * @uri /openinghours/location/{lat}/{lng}
 */
class OpeningHoursLocation extends Resource {
    function get($request,$lat,$lng) {
        $response = new Response($request);
        $response->code = Response::OK;
        $response->addHeader('content-type', 'text/plain');
        $response->body = 'Example response';
        return $response;
    }
}

?>
