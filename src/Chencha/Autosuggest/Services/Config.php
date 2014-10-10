<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 10/10/14
 * Time: 03:00exit
 */
namespace Chencha\Autosuggest\Services;
use Chencha\Autosuggest\Domain\Config as DomainConfig;
use Config as LaravelConfig;
class Config implements DomainConfig  {
    /**
     * Must get configuration item from config file
     * @param $configuration
     * @return mixed
     */
    function get($configuration)
    {
        return LaravelConfig::get($configuration);
    }

}