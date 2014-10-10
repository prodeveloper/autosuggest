<?php

namespace Chencha\Autosuggest\Domain;

use Chencha\Autosuggest\Values\Word;

interface SuggestWords
{
    function check(Word $word);

    function suggestions(Word $word);
} 