# Environment Indicator

[Environment Indicator](https://www.drupal.org/project/environment_indicator) module will help you to keep sane while working on your different environments by adding a configurable color bar to each one of your environments.

## Config example for settings.[environment].php

`Local`
```
$config['environment_indicator.indicator']['bg_color'] = '#128A0C';
$config['environment_indicator.indicator']['fg_color'] = '#ffffff';
$config['environment_indicator.indicator']['name'] = 'Local';
```

`Develop`
```
$config['environment_indicator.indicator']['bg_color'] = '#84b6eb';
$config['environment_indicator.indicator']['fg_color'] = '#ffffff';
$config['environment_indicator.indicator']['name'] = 'Develop';
```

`Stage`
```
$config['environment_indicator.indicator']['bg_color'] = '#ede35e';
$config['environment_indicator.indicator']['fg_color'] = '#ffffff';
$config['environment_indicator.indicator']['name'] = 'Stage';
```
`Production`
```
$config['environment_indicator.indicator']['bg_color'] = '#c00c00';
$config['environment_indicator.indicator']['fg_color'] = '#ffffff';
$config['environment_indicator.indicator']['name'] = 'Production';
```