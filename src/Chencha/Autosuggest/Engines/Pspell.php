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
     * @param Word $word
     * @return bool
     */
    function check(Word $word)
    {
        //dd($this->pspellConfiguration->getDictionary());
        return pspell_check($this->pspellConfiguration->getDictionary(), $word);
    }


    /**
     * @param Word $word
     * @return array
     */
    function suggestions(Word $word)
    {
        return pspell_suggest($this->pspellConfiguration->getDictionary(),$word);

    }
}