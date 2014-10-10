<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 10/10/14
 * Time: 02:04
 */

namespace Chencha\Autosuggest\Engines;

use Chencha\Autosuggest\Domain\Config;

class PspellLoadSetConfigurations {
    protected $config;
    function __construct(Config $config)
    {
        $this->config=$config;
    }

    /**
     * @param $mapping
     * @param $dictionary
     * @param $config
     */
    public  function doMapping( $dictionary)
    {
        $config=$this->config;
        $mapping=$this->_getMapping();
        $mapping->map(function ($item, $key) use ($dictionary, $config) {
            if (!is_null($this->config->get($key))) {
                $item($dictionary, $this->config->get($key));
            }
        });
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    protected function _getMapping()
    {
        $mapping = (new PspellConfigurationMapping())->getMapping();
        return $mapping;
    }
} 