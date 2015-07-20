<?php
namespace Composer\Installers;

class PagekitInstaller extends BaseInstaller
{
    protected $locations = array(
        'extension'    => 'extensions/{$name}/',
        'theme'     => 'themes/{$name}/'
    );
}
