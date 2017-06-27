# Draft Drupal

This is fresh handcrafted Drupal profile.

## Installing Draft

The best way to install Draft is by using our [Composer-based project template](https://github.com/lemberg/draft-template).

Just run this command:

```
$ composer create-project lemberg/draft-template my_awesome_project
```

Drupal core does not support prefixed dependencies for installation profiles. See https://www.drupal.org/node/2855026. Add the following patch to your project `composer.json` (requires `cweagans/composer-patches` package):

```json
"patches": {
    "drupal/core": {
        "Installation profiles do not support project:module format for dependencies": "https://www.drupal.org/files/issues/2855026-17.patch"
    }
},
```

## Docs

Everybody loves documentation. We do too! [Check this out](docs).

## Changelog

Changelog can be found here [CHANGELOG.md](CHANGELOG.md)
