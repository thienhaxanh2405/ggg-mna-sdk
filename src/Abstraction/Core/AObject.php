<?php
namespace GGGMnASDK\Abstraction\Core;

abstract class AObject
{

    /**
     * Call to relative function to update properties
     *
     * @param $attrHash
     */
    public function updateAttributes($attrHash)
    {
        foreach ($attrHash as $attr => $val)
        {
            $action = "set" . ucfirst($attr);
            if (is_callable(array($this, $action))) {
                $this->$action($val);
            }
        }
    }

    /**
     * AObject constructor.
     *
     * @param array $params
     */
    public function __construct($params = [])
    {
        if(is_array($params)) {
            $this->updateAttributes($params);
        }
    } // end construct

} // end class
