<?php

namespace Chencha\Autosuggest\Values;
use Chencha\Autosuggest\Services\CheckValidWord;

class Word
{

    public  $word;

    function __construct($word)
    {
        $this->word = $word;
        new CheckValidWord($word);
    }

    function __toString()
    {
      return $this->word;
    }

}