<?php

namespace Chencha\Autosuggest\Values;
class Word
{

    public  $word;

    function __construct($word)
    {
        $this->word = $word;
    }

    function __toString()
    {
      return $this->word;
    }

}