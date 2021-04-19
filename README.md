# romans

Kirby CMS wrapper around [wandersonwhcr/romans](https://github.com/wandersonwhcr/romans), A Simple PHP Roman Numerals Library

## Install

```
composer require moevbiz/k3-romans
```

## Usage

As a field method:
```
<?= $page->currentYear()->intToRoman(); ?> // MMXXI
<?= $page->title()->romanToInt(); ?> // 2021
```

As a page method:
```
<?= $page->intToRoman(2021); ?> // MMXXI
<?= $page->romanToInt(MMXXI); ?> // 2021
```

## License

Plugin: MIT

Kirby: [Buy](https://getkirby.com/buy)