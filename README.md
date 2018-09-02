<p align="center">
  <img alt="PHP logo" src="https://avatars2.githubusercontent.com/u/32733144?s=70&v=4" width="70" height="70" />
</p>

# Vehicle logotypes

[![Packagist version][badge_packagist_version]][link_packagist]
[![License][badge_license]][link_license]

This repository contains [structured file](./src/vehicle-logotypes.json) (`json` format) with absolute links to the vehicle logotypes images. Time to time we will update it. Also you can install this repository as package into your application.

All images were **compressed** using [tinypng.com][tinypng] service (this is the best images compressor) and deliver via CDN network.

Logotypes _(except alternative images)_ have fixed size - `240x180` pixels.

Demonstration is [available here][demo].

[![Logos plate](https://hsto.org/webt/zc/em/4n/zcem4nygx8qmia8jauczu6hxbfk.jpeg)][demo]

## Installation

### Using `composer` (php)

Require this package with composer using the following command:

```shell
$ composer require avto-dev/vehicle-logotypes
```

> Installed `composer` is required ([how to install composer][getcomposer]).

### Using `npm` (node)

Require this package with npm using the following command:

```shell
$ npm i @avto-dev/vehicle-logotypes
```

### Direct request (http)

Get content using one of next URI:

Service  | Version | URI
-------- | ------- | ---
jsDelivr | `1.1.0` | `https://cdn.jsdelivr.net/gh/avto-dev/vehicle-logotypes@1.1.0/src/vehicle-logotypes.json`

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

[badge_packagist_version]:https://img.shields.io/packagist/v/avto-dev/vehicle-logotypes.svg?style=for-the-badge&maxAge=60
[badge_license]:https://img.shields.io/packagist/l/avto-dev/vehicle-logotypes.svg?style=for-the-badge&longCache=true
[badge_release_date]:https://img.shields.io/github/release-date/avto-dev/vehicle-logotypes.svg?style=flat-square&maxAge=60
[badge_commits_since_release]:https://img.shields.io/github/commits-since/avto-dev/vehicle-logotypes/latest.svg?style=flat-square&maxAge=60
[badge_issues]:https://img.shields.io/github/issues/avto-dev/vehicle-logotypes.svg?style=flat-square&maxAge=60
[badge_pulls]:https://img.shields.io/github/issues-pr/avto-dev/vehicle-logotypes.svg?style=flat-square&maxAge=60
[link_releases]:https://github.com/avto-dev/vehicle-logotypes/releases
[link_packagist]:https://packagist.org/packages/avto-dev/vehicle-logotypes
[link_changes_log]:https://github.com/avto-dev/vehicle-logotypes/blob/master/CHANGELOG.md
[link_issues]:https://github.com/avto-dev/vehicle-logotypes/issues
[link_create_issue]:https://github.com/avto-dev/vehicle-logotypes/issues/new/choose
[link_commits]:https://github.com/avto-dev/vehicle-logotypes/commits
[link_pulls]:https://github.com/avto-dev/vehicle-logotypes/pulls
[link_license]:https://github.com/avto-dev/vehicle-logotypes/blob/master/LICENSE
[getcomposer]:https://getcomposer.org/download/
[tinypng]:https://tinypng.com/
[demo]:https://avto-dev.github.io/vehicle-logotypes/
[download_zip]:https://github.com/avto-dev/vehicle-logotypes/archive/master.zip
[download_tar]:https://github.com/avto-dev/vehicle-logotypes/archive/master.tar.gz
[imgix_api]:https://docs.imgix.com/apis/url
