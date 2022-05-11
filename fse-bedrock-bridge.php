<?php

/**
 * Plugin Name:     FSE Bedrock Bridge
 * Plugin URI:      https://github.com/ItinerisLtd/fse-bedrock-bridge/
 * Description:     Make FSE work on Bedrock.
 * Version:         0.1.1
 * Author:          Itineris Limited
 * Author URI:      https://www.itineris.co.uk/
 * Text Domain:     fse-bedrock-bridge
 */

declare(strict_types=1);

namespace Itineris\FseBedrockBridge;

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

add_filter('block_editor_settings_all', function ($editor_settings): array {
    $editor_settings = (array) $editor_settings;
    $editor_settings['siteUrl'] = home_url();

    return $editor_settings;
});