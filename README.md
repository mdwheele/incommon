InCommon CM SSL Web Service Client
===

PHP Client for InCommon Certificate Manager SSL Web Service API

[![Latest Stable Version](https://poser.pugx.org/mdwheele/incommon/v/stable.png)](https://packagist.org/packages/mdwheele/incommon)
[![Total Downloads](https://poser.pugx.org/mdwheele/incommon/downloads.png)](https://packagist.org/packages/mdwheele/incommon)
[![License](https://poser.pugx.org/mdwheele/incommon/license.png)](https://packagist.org/packages/mdwheele/incommon)

__Notice: This an alpha-quality software at the moment. Do NOT use in production anything!!__

This client provides an abstracted access layer on top of the InCommon Certificate Manager SSL SOAP Web ]
Service.

## Goals

* Create a "barrier" between client applications and the InCommon CM API so that changes do not affect clients.
* Normalize required command-formats and responses to be more user-story driven, rather than mechanical.

This package is compliant with [PSR-1][], [PSR-2][] and [PSR-4][]. If you
notice compliance oversights, please send a patch via pull request.

[PSR-1]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md
[PSR-2]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
[PSR-4]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md

## Install

Via Composer

``` json
{
    "require": {
        "mdwheele/incommon": "0.1.*"
    }
}
```

## Requirements

The following versions of PHP are supported by this version.

* PHP 5.3
* PHP 5.4
* PHP 5.5

## Documentation

I will have much more documentation coming soon.  Until then, this is basically it.

``` php
// Create new InCommon API client.
$incommon = new InCommon();

// Submit a CSR.
try {
    $response = $incommon->certs->enroll(...args);
}
catch (InvalidUsernameException $e) {
    // Handle business.
}

...

// Check status of request.
$sslId = $response->getSSLID();

try {
    $response = $incommon->certs->getCollectStatus(...args, $sslId);
}
catch (PermissionDeniedException $e) {
    // Handle business.
}

if ($response->getStatus() == SSLCollectResponse::BEING_PROCESSED_BY_COMODO) {
    echo "Still waiting for Comodo!";
}

```

## Todo

- [ ] Implement public Certs API 1:1 with CM Service Docs.
- [ ] Clean up public API to be more helpful.
- [ ] Clean up response / command formats.
- [ ] Implement full testing suite based on [PHP-VCR](https://github.com/php-vcr/php-vcr) so that production SOAP service is not required.

## Testing

``` bash
$ phpunit
```

## Contributing

Contributions are **welcome** and will be fully **credited**.

We accept contributions via Pull Requests on [Github](https://github.com/mdwheele/incomon).

## Pull Requests

- **[PSR-2 Coding Standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)** - The easiest way to apply the conventions is to install [PHP Code Sniffer](http://pear.php.net/package/PHP_CodeSniffer).

- **Add tests!** - Your patch won't be accepted if it doesn't have tests.

- **Document any change in behaviour** - Make sure the README and any other relevant documentation are kept up-to-date.

- **Consider our release cycle** - We try to follow semver. Randomly breaking public APIs is not an option.

- **Create topic branches** - Don't ask us to pull from your master branch.

- **One pull request per feature** - If you want to do more than one thing, send multiple pull requests.

- **Send coherent history** - Make sure each individual commit in your pull request is meaningful. If you had to make multiple intermediate commits while developing, please squash them before submitting.

## Running Tests

``` bash
$ phpunit
```

**Happy coding**!

## Credits

- [Phil Sturgeon](https://github.com/philsturgeon) for documentation format. Stole!

## License

The MIT License (MIT). Please see [License File](https://github.com/mdwheele/incommon/blob/master/LICENSE) for more information.