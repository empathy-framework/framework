<?php

use Composer\Installer\PackageEvent;

class FrameworkInstaller
{
    public static function postPackageInstall (PackageEvent $event)
    {
        $projectDir = dirname ($event->getComposer ()->getConfig ()->get ('vendor-dir'));

        copy (__DIR__ .'/app.php', $projectDir .'/app.php');
    }
}
