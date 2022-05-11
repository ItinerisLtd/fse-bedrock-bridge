# Full Site Editing / FSE Bedrock Bridge

[![Packagist Version](https://img.shields.io/packagist/v/itinerisltd/fse-bedrock-bridge.svg?label=release&style=flat-square)](https://packagist.org/packages/itinerisltd/fse-bedrock-bridge)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/itinerisltd/fse-bedrock-bridge.svg?style=flat-square)](https://packagist.org/packages/itinerisltd/fse-bedrock-bridge)
[![Packagist Downloads](https://img.shields.io/packagist/dt/itinerisltd/fse-bedrock-bridge.svg?label=packagist%20downloads&style=flat-square)](https://packagist.org/packages/itinerisltd/fse-bedrock-bridge/stats)
[![GitHub License](https://img.shields.io/github/license/itinerisltd/fse-bedrock-bridge.svg?style=flat-square)](https://github.com/ItinerisLtd/fse-bedrock-bridge/blob/master/LICENSE)
[![Hire Itineris](https://img.shields.io/badge/Hire-Itineris-ff69b4.svg?style=flat-square)](https://www.itineris.co.uk/contact/)
[![Twitter Follow @itineris_ltd](https://img.shields.io/twitter/follow/itineris_ltd?style=flat-square&color=1da1f2)](https://twitter.com/itineris_ltd)

Make FSE works with Bedrock

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->

- [Minimum Requirements](#minimum-requirements)
- [Installation](#installation)
    - [Composer (Recommended)](#composer-recommended)
    - [Build from Source (Not Recommended)](#build-from-source-not-recommended)
- [Credits](#credits)
- [License](#license)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->


## Minimum Requirements

- PHP v7.2
- WordPress v5.8
- Bedrock by [roots.io](https://roots.io/)

## Installation

### Composer (Recommended)

```bash
composer require itinerisltd/fse-bedrock-bridge
```

### Build from Source (Not Recommended)

```bash
# Make sure you use the same PHP version as remote servers.
# Building inside docker images is recommanded.
php -v

# Checkout source code
git clone https://github.com/ItinerisLtd/fse-bedrock-bridge.git
cd fse-bedrock-bridge
git checkout <the-tag-or-the-branch-or-the-commit>

# Build the zip file
composer release:build
```

Then, install `release/fse-bedrock-bridge.zip` [as usual](https://codex.wordpress.org/Managing_Plugins#Installing_Plugins).

## Credits

[fse-bedrock-bridge](https://github.com/ItinerisLtd/fse-bedrock-bridge) is a [Itineris Limited](https://www.itineris.co.uk/) project created by [Dan Lapteacru](https://github.com/danlapteacru).

Full list of contributors can be found [here](https://github.com/ItinerisLtd/fse-bedrock-bridge/graphs/contributors).

## License

[FSE Bedrock Bridge](https://github.com/ItinerisLtd/fse-bedrock-bridge) is released under the [MIT License](https://opensource.org/licenses/MIT).