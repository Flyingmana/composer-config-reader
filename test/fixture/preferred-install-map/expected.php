<?php

namespace Eloquent\Composer\Configuration\Element;

use Eloquent\Composer\Configuration\Element\InstallationMethod;

return new Configuration(
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    new ProjectConfiguration(
        null,
        null,
        array(
            'my-organization/stable-package' => InstallationMethod::DIST(),
            'my-organization/*' => InstallationMethod::SOURCE(),
            'partner-organization/*' => InstallationMethod::AUTO(),
            '*' => InstallationMethod::DIST(),
        ),
        null,
        null,
        null,
        null,
        '/path/to/composer/cache',
        '/path/to/composer/cache/files',
        '/path/to/composer/cache/repo',
        '/path/to/composer/cache/vcs',
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        $rawData->config
    ),
    null,
    null,
    null,
    null,
    $rawData
);
