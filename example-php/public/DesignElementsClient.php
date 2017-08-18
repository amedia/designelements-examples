<?php

namespace Amedia;

include 'DesignElements.php';

/**
 * Simple DesignElements client that demonstrates the use of multiManifests,
 * which should cover most needs.
 */
class DesignElementsClient
{
    private $elements;

    private $domain;

    // Token loaded from APIKEY environment variable.
    // You will receive your own key by contacting Amedia Utvikling.
    private $apikey;

    function __construct($elements, $domain)
    {
        $this->apikey = getenv('APIKEY');
        $this->elements = $elements;
        $this->domain = $domain;
    }

    /**
     * Fetch multi-manifest from the DesignElements
     *
     * Returns a DesignElement object that you will use to print the resources and
     * elements onto your page.
     */
    public function fetch()
    {
        $elementsStr = implode(",", $this->elements);
        $obj = json_decode($this->http("manifests?elements={$elementsStr}&domain={$this->domain}"));
        return new DesignElements($this->elements, $obj);
    }

    private function http($url)
    {
        $opts = [
            "http" => [
                "method" => "GET",
                "header" => "apikey: ".$this->apikey."\r\n"
            ]
        ];

        $context = stream_context_create($opts);

        try {
            $content = file_get_contents("https://services.api.no/api/designelements/v2/".$url, false, $context);
        } catch (Exception $e) {
            print "Got error: {$e}";
        }
        return $content;
    }
}
