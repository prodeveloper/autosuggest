<?php

namespace Chencha\Autosuggest\Domain;

use Chencha\Autosuggest\Values\Word;

interface SuggestWords
{
    function check($word);

    function suggestions( $word);
} 