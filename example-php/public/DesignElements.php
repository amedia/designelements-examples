<?php

namespace Amedia;

/**
* Holds the multi-manifest returned from the DesignElements API,
* and has helper methods to print the resources and elements onto
* your page.
*/
class DesignElements
{

    private $elements;

    private $obj;

    function __construct($elements, $obj)
    {
        $this->elements = $elements;
        $this->obj = $obj;
    }

    /*
    * Run this method inside the <head/> part of your page.
    */
    public function printResourceLinks()
    {
        foreach ($this->obj as &$manifest) {
            foreach ($manifest->{"resources"} as &$resource) {
                if ($resource->{'type'} == 'text/css') {
                    print "<link media=\"all\" rel=\"stylesheet\" type=\"text/css\" href=\"{$resource->{'uri'}}\"/>\n";
                }
            }
        }
    }

    /*
    * Run this where you want the element to be included in your page.
    */
    public function printElement($element)
    {
        foreach ($this->elements as $key => $e) {
            if ($element == $e) {
                $manifest = $this->obj[$key];
                print $manifest->{"content"};
            }
        }
    }
}
