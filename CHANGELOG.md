# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog][keepachangelog] and this project adheres to [Semantic Versioning][semver].

## Unreleased

- New logotypes: `avatr, belgee, jaecoo, jetta, kaiyi, livan, swm`

## v2.8.0

### Added

– Field `code` with the vehicle name in upper case in the `vehicle-logotypes.json`

## v2.7.0

### Added

- New logotypes: `aito, arcfox, ciimo, exeed, hiphi, hongqi, jetour, lixiang, lynk&co, nio, omoda, oshan, rivian, tank, trumpchi, voyah, xpeng, zeekr`

## v2.6.0

### Added

- Support Laravel `9.x`

## v2.5.0

### Removed

- Dependency `tarampampam/wrappers-php` because this package was deprecated and removed

### Changed

- Minimal `PHP` version now is `^7.3`

## v2.4.0

### Added

- Support PHP `8.x`

### Changed

- Composer `2.x` is supported now

## v2.3.0

### Changed

- Laravel `8.x` is supported
- Minimal Laravel version now is `6.0` (Laravel `5.5` LTS got last security update August 30th, 2020)
- Dependency `tarampampam/wrappers-php` version `~2.0` is supported

## v2.2.0

### Changed

- Maximal `illuminate/*` packages version now is `7.*`
- Minimal `PHP` version now is `^7.2`
- Class `AvtoDev\VehicleLogotypes\VehicleLogotypes` finalized
- CI completely moved from "Travis CI" to "Github Actions" _(travis builds disabled)_

### Added

- PHP 7.4 is supported now

## v2.1.0

### Changed

- Maximal `illuminate/*` packages version now is `6.*`

### Added

- GitHub actions for a tests running

## v2.0.0

### Added

- Docker-based environment for development
- Project `Makefile`

### Changed

- Minimal `PHP` version now is `^7.1.3`
- Maximal `Laravel` version now is `5.8.x`

## v1.3.0

### Changed

- **PHP SDK** Maximal PHP version now is undefined
- **PHP SDK** Package `tarampampam/wrappers-php` integrated
- CI changed to [Travis CI][travis]
- [CodeCov][codecov] integrated

[travis]:https://travis-ci.org/
[codecov]:https://codecov.io/

## v1.2.1

### Removed

- Duplicate: `eagle` (already exists: `eagle-automobile`)

## v1.2.0

### Added

- New logotypes: `adler, chaparral, ika, marussia, santana, ural, allard, dadi, ikarus, maruti, seaz, vazinterservice, asia, derways, invicta, matra, shanghai-maple, vortex, aurus, izh, minelli, shuanghuan, willys-knight, austin-healey, doninvest, jinbei, moskvitch, smz, xin-kai, bajaj, eagle, jmc, nash, spectre, yamal, baltijas-dzips, eco-motors, kavz, neoplan, steyr, yo-mobile, barkas, fso, kraz, oka, tagaz, yutong, batmobile, fuqi, packard, tazzari, baw, laz, paz, think, zibar, bogdan, gordon, liaz, piaggio, tianma, zil, byvin, hanomag, liebao-motor, puch, tianye, zis, callaway, huanghai, lti, qvale, tofas, zx-auto, chana, ifa, luaz, ravon, trabant`

## v1.1.0

### Added

- Images uses CDN proxy service `imgix.com`
- PHP-sdk

## v1.0.0

### Added

- Basic json file (`./src/vehicle-logotypes.json`) added
- Composer supports

[keepachangelog]:https://keepachangelog.com/en/1.0.0/
[semver]:https://semver.org/spec/v2.0.0.html
