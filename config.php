<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link            http://code.piengine.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://piengine.org
 * @license         http://piengine.org/license.txt BSD 3-Clause License
 */

return [
    /**#@+
     * To be stored in DB
     */
    // Version
    'version'     => '1.0.0',
    // Type of layouts available in the theme
    // Potential value: 'both', 'admin', 'front', default as 'both'
    'type'        => 'front',
    /**#@-**/

    // Title of the theme
    'title'       => 'Pi Parse Translation Theme',
    // Author information: name, email, website
    'author'      => '',
    // Screenshot image, relative path in asset.
    // If no screenshot is available, static/image/screenshot.png will be used
    'screenshot'  => 'image/screenshot.png',
    // License or theme images and scripts
    'license'     => 'Creative Common License'
        . ' http://creativecommons.org/licenses/by/3.0/',
    // Optional description
    'description' => 'Pi Parse Translation Theme, usability oriented.',
    // Parent theme from which templates can be inherited, default as 'default'
    'parent'      => '',
    // Supported browsers
    'browser'     => 'Internet Explorer: 6+; Chrome: 17+; Firefox: 10+;'
        . ' Safari: 5.1+; Opera: 9.8+;',

    // List of custom front layouts, optional
    'layout'      => [
        //'file-name'   => __('Layout name'),
    ],
];