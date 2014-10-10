<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 10/10/14
 * Time: 02:23
 */
namespace Chencha\Autosuggest\Facades;
use Illuminate\Support\Facades\Facade;
class Autosuggest extends Facade {
    protected static function getFacadeAccessor() { return 'autosuggest'; }
} 