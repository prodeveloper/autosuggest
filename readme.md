##Autosuggest
The package provides an OOP wrapper around pspell to enable suggestions

##Installation

    "require": {
        "chencha/autosuggest": "dev-master"
    }
    
Next, update app/config/app.php to include a reference to this package's service provider in the providers array.

    'providers' => [
        'Chencha\Autosuggest\AutosuggestServiceProvider'
    ]

Add the alias

    'aliases' => [
        'Chencha\Autosuggest\Facades\Autosuggest'
    ]
    
##Usage

To use the package simply:

    Autosuggest::check($word);
    Autosuggest::suggestions($word);

