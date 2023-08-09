# tipsntricks

Tips und Tricks zu verschiedenen Themen

## Laravel

- [Push and Deploy a Laravel app](https://laravel-news.com/push-deploy-with-github-actions)
- [Cookie Consent for Laravel](https://github.com/whitecube/laravel-cookie-consent) - [Wichtige Dateien](https://github.com/Novagraphix/tipsntricks/tree/master/Cookie%20Consent)

### Cookie Banner

Bitte zuerst der [Anleitung](https://github.com/whitecube/laravel-cookie-consent) für die Installation folgen. In der Ordnerstrukter für den Banner hier bei Tips & Tricks sind diverse Dateien, die danach benutzt werden können. Darunter ein Reset-Button und ein CookieServiceProvider. Provider entsprechend in der `config/app.php` einfügen.

```
'providers' => ServiceProvider::defaultProviders()->merge([
        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        ...
        App\Providers\CookiesServiceProvider::class,
        ...
    ])->toArray(),
```

Den Reset-Button im Layout impelemntieren, z.B. unter cookieconsetview

```
@cookieconsentview
<x-button.cookie-reset />
```

Nicht vergessen, der Reset-Button benötigt folgende Composer-Pakete:

```
composer require blade-ui-kit/blade-icons
composer require owenvoke/blade-fontawesome
```

Ein deutsches Languagefile ist auch vorhanden.

## Adobe Animate

- [Scripts](https://github.com/Novagraphix/tipsntricks/tree/master/Adobe%20Animate)

## GIT

- [How to undo (almost) anything with Git](https://github.com/blog/2019-how-to-undo-almost-anything-with-git?utm_content=buffere0df5&utm_medium=social&utm_source=plus.google.com&utm_campaign=buffer)
