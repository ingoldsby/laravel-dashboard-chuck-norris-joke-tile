# A tile to display a random Chuck Norris joke

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ingoldsby/laravel-dashboard-chuck-norris-joke-tile.svg?style=flat-square)](https://packagist.org/packages/ingoldsby/laravel-dashboard-chuck-norris-joke-tile)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ingoldsby/laravel-dashboard-chuck-norris-joke-tile/run-tests?label=tests)](https://github.com/ingoldsby/laravel-dashboard-chuck-norris-joke-tile/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/ingoldsby/laravel-dashboard-chuck-norris-joke-tile.svg?style=flat-square)](https://packagist.org/packages/ingoldsby/laravel-dashboard-chuck-norris-joke-tile)

This tile can be used on [the Laravel Dashboard](https://docs.spatie.be/laravel-dashboard) to display a random Chuck Norris joke from [the internet Chuck Norris database](http://www.icndb.com/).

![Screenshot](https://user-images.githubusercontent.com/26500496/84235332-07c41d00-ab39-11ea-8a9f-0fec9e2e3ec2.png)

## Installation

You can install the package via composer:

```bash
composer require ingoldsby/laravel-dashboard-chuck-norris-joke-tile
```

## Usage

In the `dashboard` config file, you must add this configuration in the `tiles` key.

```php
// in config/dashboard.php

return [
    // ...
    'tiles' => [
        'chuck_norris_joke' => [
            'refresh_interval_in_seconds' => 900, // this will refresh every 15 minutes
        ]
    ],
];
```

In `app\Console\Kernel.php` you should schedule the `\Ingoldsby\ChuckNorrisJokeTile\Commands\FetchChuckNorrisJokeCommand` to run. You can decide the frequency of running the command. There are approximately 600 jokes available through the API.

```php
// in app/console/Kernel.php

protected function schedule(Schedule $schedule)
{
    // ...
    $schedule->command(\Ingoldsby\ChuckNorrisJokeTile\Commands\FetchChuckNorrisJokeCommand::class)->everyFifteenMinutes();
}
```

In your dashboard view you can use the tile:
* `livewire:chuck-norris-joke-tile`

```html
<x-dashboard>
    <livewire:chuck-norris-joke-tile position="a1" />
</x-dashboard>
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email instead of using the issue tracker.

## Support Spatie

I have learnt a lot from Spatie's various packages, including [Mailcoach](https://mailcoach.app), and would recommend you check them out if you want to know more.

Learn how to create a package like theirs, by watching Spatie's premium video course:

[![Laravel Package training](https://spatie.be/github/package-training.jpg)](https://laravelpackage.training)

Spatie invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support them by [buying one of their paid products](https://spatie.be/open-source/support-us).

## Credits

- [Ingoldsby](https://github.com/ingoldsby)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.