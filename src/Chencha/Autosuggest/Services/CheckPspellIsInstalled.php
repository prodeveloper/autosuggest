<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 10/10/14
 * Time: 03:10
 */

namespace Chencha\Autosuggest\Services;


use Chencha\Autosuggest\Exceptions\PspellIsNotInstalled;

class CheckPspellIsInstalled {

    function __construct()
    {
        if(!function_exists('pspell_new')){
            throw new PspellIsNotInstalled;
        }
    }
}