<?php
return [
    /**
     * his function determines whether run-together words will be treated as legal
     * compounds. That is, "thecat" will be a legal compound, although there should be
     * a space between the two words
     */
    'run_together'=>false,
    /**
     * Set a file that contains replacement pairs.
     * This is particularly useful for domain specific terminologies
     */
    'replacement_words'=>null,
    /**
     * Set a file that contains personal wordlist. The personal wordlist will be loaded
     * and used in addition to the standard one
     */
    'custom_word_list_file'=>null,
    /**
     * Number of suggestions returned available modes are
     * PSPELL_FAST - Fast mode (least number of suggestions)
     * PSPELL_NORMAL - Normal mode (more suggestions)
     * PSPELL_BAD_SPELLERS - Slow mode (a lot of suggestions)
     */
    'number_suggestions'=> 2,
    /**
     * Ignore words less than N characters long
     *
     */
    'minimum_word_length'=> 1,

    //Configurations used to open a dictionary

    /**
     * Dictionary that pspell uses. Must exist
     */
    'dictionary'=>'en',
    /**
     * The language parameter is the language code which consists of the two letter ISO
     * 639 language code and an optional two letter ISO 3166 country code after a dash or
     * underscore.
     */
    'language'=>'en',



];