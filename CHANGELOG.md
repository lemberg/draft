## Draft 1.4.2, 2020-06-05

- [GH-103](https://github.com/lemberg/draft/issues/103) - Replace `drupal/core-recommended` with `drupal/core` as this must be a project-level decision

## Draft 1.4.1, 2020-06-05

- [GH-101](https://github.com/lemberg/draft/issues/101) - Add missing dependency on drupal/core-recommended to the composer.json and support Drupal 8.8

## Draft 1.4.0, 2020-06-04

- [GH-96](https://github.com/lemberg/draft/issues/96) - Made the project D9 compatible, updated the following vendor packages:
    * [Configuration Split](https://www.drupal.org/project/config_split) (drupal/config_split: **^1.5**)
- [GH-95](https://github.com/lemberg/draft/issues/95) - Replaced Adminimal contrib theme with Claro core theme, thus removed the following vendor packages:
    * [Adminimal - Responsive Administration Theme](https://www.drupal.org/project/adminimal_theme) (drupal/adminimal_theme)
    * [Adminimal Admin Toolbar](https://www.drupal.org/project/adminimal_admin_toolbar) (drupal/adminimal_admin_toolbar)

## Draft 1.3.0, 2020-04-28

- [GH-92](https://github.com/lemberg/draft/issues/92) - Updated vendor libraries:
    * [Admin Toolbar](https://www.drupal.org/project/admin_toolbar) (drupal/admin_toolbar: **^2.2**)
    * [Adminimal - Responsive Administration Theme](https://www.drupal.org/project/adminimal_theme) (drupal/adminimal_theme: **^1.5**)
    * [Adminimal Admin Toolbar](https://www.drupal.org/project/adminimal_admin_toolbar) (drupal/adminimal_admin_toolbar: **^1.10**)
    * [Configuration Split](https://www.drupal.org/project/config_split) (drupal/config_split: **^1.4**)
- [GH-80](https://github.com/lemberg/draft/issues/80) - Replaced deprecated `file_prepare_directory()` with `\Drupal::service('file_system')->prepareDirectory()`
- [GH-79](https://github.com/lemberg/draft/issues/79) - Replaced `hook_install()` with `hook_install_tasks()` so profile can be installed from the configuration
- Modernize Travis configuration
- Updated composer.json to remove a drupal-support_project_module_format_dependencies-2855026-49.patch because it's already merged in the drupal core.
- Disable anonymous account creation by default
- Removed *Administration Links Access Filter* module as it has been [merged into Admin Toolbar as a submodule](https://www.drupal.org/project/admin_toolbar/issues/2919346) as of version 1.21.0
- Updated vendor libraries:
    * Admin Toolbar (drupal/admin_toolbar: **^1.21**)
- Removed dev vendor libraries:
    * Devel (drupal/devel)
    * Drupal Console (drupal/console)
    * Drush (drush/drush)

## Draft 1.2.1, 2017-06-28

- Add integration with Travis CI
- Fixed issue with prefixed dependencies for profile, see [this issue on drupal.org](https://www.drupal.org/node/2855026).

## Draft 1.2.0, 2017-06-22

- Added empty Develop configuration split
- Added dependencies on:
    * Administration Links Access Filter (admin_links_access_filter:admin_links_access_filter)
    * Configuration Split (config_split:config_split)
- Added vendor libraries:
    * Administration Links Access Filter (drupal/admin_links_access_filter: **^1.0**)
    * Configuration Split (drupal/config_split: **^1.0**)
    * Drupal Console (drupal/console: **^1.0**)
    * Drush (drush/drush: **^8.1**)
- Make sure that all dependencies are prefixed with the project name
- Added this file

## Draft 1.1.0, 2017-02-08

- Added dependencies on:
    * Block (drupal:block)
    * Internal Dynamic Page Cache (drupal:dynamic_page_cache)
    * Internal Page Cache (drupal:page_cache)

## Draft 1.0.0, 2017-02-07

- Initial release, nothing fancy
