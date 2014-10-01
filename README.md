# twig-natural-join

Twig filter that joins an array using a different separator for the last element (e.g. "John, Mary, Bob and Jim").

[![Total Downloads](https://poser.pugx.org/cviebrock/twig-natural-join/downloads.png)](https://packagist.org/packages/cviebrock/twig-natural-join)
[![Latest Stable Version](https://poser.pugx.org/cviebrock/twig-natural-join/v/stable.png)](https://packagist.org/packages/cviebrock/twig-natural-join)



## Installation

The filter is registered at Packagist as [cviebrock/twig-natural-join](https://packagist.org/packages/cviebrock/twig-natural-join) and can be installed using [composer](http://getcomposer.org/):

```
"require": {
	...
	"cviebrock/twig-natural-join": "0.9.*",
}
```

Or just download the zip file and copy the file into your _src_ folder.

Enable the extension:

```php
$twig = new Twig_Environment($loader, $options);
$twig->addExtension(new Cviebrock\Twig\NaturalJoinExtension());
```

If you are using Laravel and [rcrowe/twigbridge](https://github.com/rcrowe/TwigBridge), then enable the extension by adding an entry to the `enabled` array in `app/config/packages/rcrowe/twigbridge/extensions.php`:

```php
'enabled' => [
	...
	'Cviebrock\Twig\NaturalJoinExtension',
],
```



## Usage

Pass the normal seperator and final seperator to the filter:

```twig
{{ names|naturaljoin(", ", " and ") }}          // John, Bill, Bob and Mary
```

Optionally pass `true` as a third argument to turn on "Oxford" mode, which will add a normal seperator before the final seperator:

```twig
{{ names|naturaljoin(", ", " and ", true) }}    // John, Bill, Bob, and Mary
```



## Bugs, Suggestions and Contributions

Please use Github for bugs, comments, suggestions.

1. Fork the project.
2. Create your bugfix/feature branch and write your (well-commented) code.
3. Commit your changes and push to your repository.
4. Create a new pull request against this project's `master` branch.



## Copyright and License

**twig-natural-join** was written by Colin Viebrock and released under the MIT License. See the LICENSE file for details.

Copyright 2014 Colin Viebrock
