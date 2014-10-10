<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 10/10/14
 * Time: 02:44
 */

namespace Chencha\Autosuggest\Domain;


interface Config {
    /**
     * Must get configuration item from config file
     * @param $configuration
     * @return mixed
     */
    function get($configuration);
} 