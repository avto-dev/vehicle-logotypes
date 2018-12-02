<p align="center">
  <img alt="PHP logo" src="https://avatars2.githubusercontent.com/u/32733144?s=70&v=4" width="70" height="70" />
</p>

# Vehicle logotypes

[![Build Status][badge_build_status]][link_build_status]
[![License][badge_license]][link_license]

This repository contains [structured file](./src/vehicle-logotypes.json) (`json` format) with absolute links to the vehicle logotypes images. Time to time we will update it. Also you can install this repository as package into your application.

All images were **compressed** using [tinypng.com][tinypng] service (this is the best images compressor) and deliver via CDN network.

Logotypes _(except alternative images)_ have fixed size - `240x180` pixels.

Demonstration is [available here][demo].

[![Logos plate](https://hsto.org/webt/zc/em/4n/zcem4nygx8qmia8jauczu6hxbfk.jpeg)][demo]

## Installation

### Using `composer` (php)

[![Packagist version][badge_packagist_version]][link_packagist]
[![PHP Version][badge_php_version]][link_packagist]
[![Coverage][badge_coverage]][link_coverage]
[![Code quality][badge_code_quality]][link_code_quality]
[![Downloads count][badge_downloads_count]][link_packagist]

Require this package with composer using the following command:

```shell
$ composer require avto-dev/vehicle-logotypes
```

> Installed `composer` is required ([how to install composer][getcomposer]).

After that you can:

```php
<?php

$logotypes = \AvtoDev\VehicleLogotypes\VehicleLogotypes::create();

// Get 'Opel' logotype uri
$opel_uri = $logotypes->get('opel')['logotype']['uri'];

// Get all 'BMW' models data
$bmw = $logotypes->filter(function ($item) {
    return mb_strpos(mb_strtolower($item['name']), 'bmw') !== false;
});
```

### Using `npm` (node)

[![NPM version][badge_npm_version]][link_npm]
[![NODE version][badge_node_version]][link_npm]
[![NPM downloads][badge_npm_downloads]][link_npm]

Require this package with npm using the following command:

```shell
$ npm i @avto-dev/vehicle-logotypes
```

### Direct request (http)

[![jsDelivr downloads][badge_jsdelivr]][link_jsdelivr_landing]

Get content using one of next URI:

Service  | Version | URI
-------- | ------- | ---
jsDelivr | `1.2.1` | `https://cdn.jsdelivr.net/gh/avto-dev/vehicle-logotypes@1.2.1/src/vehicle-logotypes.json`
jsDelivr | `1.3.0` | `https://cdn.jsdelivr.net/gh/avto-dev/vehicle-logotypes@1.3.0/src/vehicle-logotypes.json`

### Download archive

Download latest version (`master` branch): [ZIP][download_zip] | [TAR][download_tar]

## Features

Since version 1.1.0 you can use all imgix.com features like resize, cropping, and others.

For example, basic image:

![basic](https://vl.imgix.net/img/bmw-logo.png)

> `https://vl.imgix.net/img/bmw-logo.png`

With background color:

![rotated](https://vl.imgix.net/img/bmw-logo.png?bg=354651)

> `https://vl.imgix.net/img/bmw-logo.png?bg=354651`

With custom text over image:

![with text](https://vl.imgix.net/img/bmw-logo.png?txt=YOUR%20TEXT&txtsize=62&txtclr=ff0000&txtalign=middle,center&txtfont=Futura%20Condensed%20Medium)

> `https://vl.imgix.net/img/bmw-logo.png?txt=YOUR%20TEXT&txtsize=62&txtclr=ff0000&txtalign=middle,center&txtfont=Futura%20Condensed%20Medium`

Full documentation can be [found here][imgix_api].

## Images sources

All images were taken from open sources, like:

- [carlogos.org](http://www.carlogos.org/)
- [Google images](https://www.google.com/imghp?tbm=isch&tbs=imgo:1)
- [wikipedia.org](https://en.wikipedia.org/)

## Changes log

[![Release date][badge_release_date]][link_releases]
[![Commits since latest release][badge_commits_since_release]][link_commits]

Changes log can be [found here][link_changes_log].

## Support

[![Issues][badge_issues]][link_issues]
[![Issues][badge_pulls]][link_pulls]

If you will find any package errors, please, [make an issue][link_create_issue] in current repository.

## License

All images are the property of their respective owners. If you found any image copyrighted to yours, Please contact us, so we can remove it.

This package is open-sourced software licensed under the [MIT License][link_license].

[badge_packagist_version]:https://img.shields.io/packagist/v/avto-dev/vehicle-logotypes.svg?maxAge=180
[badge_php_version]:https://img.shields.io/packagist/php-v/avto-dev/vehicle-logotypes.svg?longCache=true
[badge_build_status]:https://travis-ci.org/avto-dev/vehicle-logotypes.svg?branch=master
[badge_code_quality]:https://img.shields.io/scrutinizer/g/avto-dev/vehicle-logotypes.svg?maxAge=180
[badge_coverage]:https://img.shields.io/codecov/c/github/avto-dev/vehicle-logotypes/master.svg?maxAge=60
[badge_downloads_count]:https://img.shields.io/packagist/dt/avto-dev/vehicle-logotypes.svg?maxAge=180
[badge_license]:https://img.shields.io/packagist/l/avto-dev/vehicle-logotypes.svg?longCache=true
[badge_release_date]:https://img.shields.io/github/release-date/avto-dev/vehicle-logotypes.svg?style=flat-square&maxAge=180
[badge_commits_since_release]:https://img.shields.io/github/commits-since/avto-dev/vehicle-logotypes/latest.svg?style=flat-square&maxAge=180
[badge_issues]:https://img.shields.io/github/issues/avto-dev/vehicle-logotypes.svg?style=flat-square&maxAge=180
[badge_pulls]:https://img.shields.io/github/issues-pr/avto-dev/vehicle-logotypes.svg?style=flat-square&maxAge=180
[badge_npm_version]:https://img.shields.io/npm/v/@avto-dev/vehicle-logotypes.svg
[badge_node_version]:https://img.shields.io/node/v/@avto-dev/vehicle-logotypes.svg
[badge_npm_downloads]:https://img.shields.io/npm/dt/@avto-dev/vehicle-logotypes.svg
[badge_jsdelivr]:https://data.jsdelivr.com/v1/package/gh/avto-dev/vehicle-logotypes/badge?style=rounded
[link_releases]:https://github.com/avto-dev/vehicle-logotypes/releases
[link_packagist]:https://packagist.org/packages/avto-dev/vehicle-logotypes
[link_build_status]:https://travis-ci.org/avto-dev/vehicle-logotypes
[link_coverage]:https://codecov.io/gh/avto-dev/vehicle-logotypes/
[link_changes_log]:https://github.com/avto-dev/vehicle-logotypes/blob/master/CHANGELOG.md
[link_code_quality]:https://scrutinizer-ci.com/g/avto-dev/vehicle-logotypes/
[link_issues]:https://github.com/avto-dev/vehicle-logotypes/issues
[link_create_issue]:https://github.com/avto-dev/vehicle-logotypes/issues/new/choose
[link_commits]:https://github.com/avto-dev/vehicle-logotypes/commits
[link_pulls]:https://github.com/avto-dev/vehicle-logotypes/pulls
[link_license]:https://github.com/avto-dev/vehicle-logotypes/blob/master/LICENSE
[link_npm]:https://www.npmjs.com/package/@avto-dev/vehicle-logotypes
[link_jsdelivr_landing]:https://www.jsdelivr.com/package/gh/avto-dev/vehicle-logotypes
[getcomposer]:https://getcomposer.org/download/
[tinypng]:https://tinypng.com/
[demo]:https://avto-dev.github.io/vehicle-logotypes/
[download_zip]:https://github.com/avto-dev/vehicle-logotypes/archive/master.zip
[download_tar]:https://github.com/avto-dev/vehicle-logotypes/archive/master.tar.gz
[imgix_api]:https://docs.imgix.com/apis/url
