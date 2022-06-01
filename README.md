# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/devpac/register-login.svg?style=flat-square)](https://packagist.org/packages/devpac/register-login)
[![Total Downloads](https://img.shields.io/packagist/dt/devpac/register-login.svg?style=flat-square)](https://packagist.org/packages/devpac/register-login)
![GitHub Actions](https://github.com/devpac/register-login/actions/workflows/main.yml/badge.svg)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require devpac/register-login
```

## Usage

```
Devpac\RegisterLogin\RegisterLoginServiceProvider::class,
```
## usable function

```
use Devpac\RegisterLogin\App\Http\Controllers\Auth\RegisterController;

RegisterController::welcome($name);
RegisterController::create($data);
RegisterController::find($id);
RegisterController::allUsers();
RegisterController::deleteUser($id);
RegisterController::login($data);
RegisterController::logout();

```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email arunbalaji@sparkouttech.com instead of using the issue tracker.

## Credits

-   [ArunBalaji06](https://github.com/devpac)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
