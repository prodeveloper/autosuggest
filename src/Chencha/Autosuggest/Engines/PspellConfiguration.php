<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 10/10/14
 * Time: 01:25
 */

namespace Chencha\Autosuggest\Engines;

use Chencha\Autosuggest\Domain\Config;
use Chencha\Autosuggest\Domain\Dictionary;
use Chencha\Autosuggest\Services\CheckPspellIsInstalled;
use  Chencha\Autosuggest\Engines\PspellLoadSetConfigurations;

class PspellConfiguration implements  Dictionary
{
    protected $dictionary;
    protected $dictionary_config;

    protected $config;
    /**
     * @var PspellLoadSetConfigurations
     */
    private $loadSetConfigurations;

    function __construct(Config $config, PspellLoadSetConfigurations $loadSetConfigurations)
    {
        new CheckPspellIsInstalled();
        $this->config =$config;
        $this->loadSetConfigurations = $loadSetConfigurations;
        $this->_loadDictionary();
        $this->_loadConfiguration();

    }


    /**
     * @return mixed
     */
    public function getDictionary()
    {
        return $this->dictionary;
    }
    protected function _loadDictionary()
    {
        $this->dictionary_config = pspell_config_create(
            $this->config->get('autosuggest::pspell.language')

        );
        $this->dictionary=pspell_new_config($this->dictionary_config);
    }

    protected function _loadConfiguration()
    {
        $this->loadSetConfigurations->doMapping($this->dictionary_config);
    }


}