# PsySH Helpers

This is a collection of helper scripts for [PsySH](https://psysh.org/).

## What does it do?

It adds some helpful functions to shorten some typing when you're using
Laravel's `artisan tinker` or Magento's `n98-magerun2 dev:console`.

For example (Laravel):

```php
>>> uri('//example.com')
=> GuzzleHttp\Psr7\Uri {#4482}
```

Another example (Magento):

*`di(string)` does ad-hoc dependency injection (DI)*

```php
>>> di(\Magento\Store\Model\StoreManagerInterface::class)
=> Magento\Store\Model\StoreManager\Interceptor {#2049}
```

## Installation

```sh
git clone https://github.com/h3xx/psysh-helpers.git ~/.config/psysh
```

## How do I use it in a Dockerized environment?

To bring all your PsySH settings into Docker, just add `~/.config/psysh` as a
volume mapped to `<HOME>/.config/psysh`.

For instance, if you're using markshust's setup, add this to your `volumes`:

```yaml
    volumes: &appvolumes
      - ~/.config/psysh:/var/www/.config/psysh:cached
      ...
```
