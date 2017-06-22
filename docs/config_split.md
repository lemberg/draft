# Configuration Split

[Configuration Split](https://www.drupal.org/project/config_split) module allows to define sets of configuration that will get exported to separate directories when exporting, and get merged together when importing.

Empty **Develop** configuration split is shipped with this profile.

## How to

1. We assume that configuration gets exported into a sub directory of the `config` directory above the web root (e.g. `../config/default`). Develop split will be exported to `../config/develop`. Profile will try to create it upon installation automatically. Export directory can be changed any time.

1. We do not provide any development configuration. Go to `admin/config/development/configuration/config-split/develop/edit` and edit split settings. [Devel](https://www.drupal.org/project/devel) is a great example of a module which must be blacklisted.
