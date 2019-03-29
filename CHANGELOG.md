## Draft 2.x.x
- [Issue 43](https://github.com/lemberg/draft/issues/43) - Add paragraph Simple - Content
- [Issue 5](https://github.com/lemberg/draft/issues/5) - Add Environment Indicator module
- [Issue 34](https://github.com/lemberg/draft/issues/34) - Add Paragraphs browser module
- [Issue 32](https://github.com/lemberg/draft/issues/32) - Add default content types(Basic and Landing pages)
- [Issue 33](https://github.com/lemberg/draft/issues/33) - Add Field group module
- [Issue 30](https://github.com/lemberg/draft/issues/30) - Add Allowed Formats module
- [Issue 35](https://github.com/lemberg/draft/issues/35) - Profile can install modules via built-in install property
- [Issue 8](https://github.com/lemberg/draft/issues/8) - Add Twig Field Value and Twig Tweak modules
- [Issue 20](https://github.com/lemberg/draft/issues/20) - Enable development modules (Devel and Kint)
- [Issue 9](https://github.com/lemberg/draft/issues/9) - Add Paragraphs module
- [Issue 17](https://github.com/lemberg/draft/issues/17) - Update Travis CI configuration:
    * Remove PHP 5.6 and PHP 7.0, add PHP 7.2
    * Upgrade to Xenial environment
    * Improve composer patching by replacing environment variable with configuration within composer.json
- [Issue 7](https://github.com/lemberg/draft/issues/7) - Enable basic core modules(Custom block, CKEditor, Config, Contextual links, Dynamic page cache, Link, Media, Menu UI, Node, Options, Page cache, Path, Views) and add development modules (Views UI, Field UI, Update, Dblog) to the config split settings.
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
    * Configuration Split (drupal/admin_links_access_filter: **^1.0**)
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
