<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 10/10/14
 * Time: 01:22
 */
namespace Chencha\Autosuggest\Engines;

use Chencha\Autosuggest\Domain\Dictionary;
use Chencha\Autosuggest\Domain\SuggestWords;
use Chencha\Autosuggest\Values\Word;

/**
 * Class Pspell
 * @package Chencha\Autosuggest\Engines
 */
class Pspell implements SuggestWords
{


    /**
     * @var PspellConfiguration
     */
    private $pspellConfiguration;

    function __construct(Dictionary $pspellConfiguration)
    {
        $this->pspellConfiguration = $pspellConfiguration;
    }
    /**
     * @param string $word
     * @return bool
     */
    function check($word)
    {
        return pspell_check($this->pspellConfiguration->getDictionary(), new Word($word));
    }


    /**
     * @param string $word
     * @return array
     */
    function suggestions($word)
    {
        return pspell_suggest($this->pspellConfiguration->getDictionary(),new Word($word));

    }
}