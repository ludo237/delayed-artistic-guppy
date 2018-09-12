# Delayed Artistic Guppy

![Source Gif](https://zippy.gfycat.com/DelayedArtisticGuppy.gif)

Package that generates `AdjectiveAnimal` words similar to Gfycat or Twitch Clips.

Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer `$ composer require ludo237/delayed-artistic-guppy`

### Publish Config

This package has a single configuration file called `delarg.php` it contains two big arrays of animal names and adjectives in order to generate the slug

## Usage

After the installation you can simply call the helper `delarg()` and it will print a new word just for you.
Feel free to use the facade `Delarg::slugfy()` if you need.

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

### With Docker

Testing the package with docker is a piece of cake, simply run `docker-compose up` and then in order

- `docker exec delarg_web composer install`
- `docker exec delarg_web vendor/bin/phpunit`

### Without Docker

You will need PHP installed on your machine as well as composer, then you can simply run `composer install` and `vendor/bin/phpunit`

## Contributing

Please see [contributing.md](contributing.md) for details.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## License

All the files are under MIT license. Please see the [license file](license.md) for more information.
