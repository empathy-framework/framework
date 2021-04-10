<?php

use Empathy\Engine\Components\{
    Form,
    PictureBox,
    Label
};

use const Empathy\Engine\Constants\{
    clWhite,
    clDarkOrange,
    fbsSingle,
    smStretchImage,
    alMiddleRight
};

/**
 * Form
 */
$form = new Form;

$form->caption = 'Empathy Framework';
$form->size = [900, 600];
$form->backgroundColor = clWhite;

$form->loadIcon ('app/app.ico');

$form->formBorderStyle = fbsSingle;
$form->maximizeBox = false;
$form->minimizeBox = false;

/**
 * Logo
 */

$logo = new PictureBox ($form);

$logo->bounds = [64, 96, 198, 198];
$logo->sizeMode = smStretchImage;

$logo->load ('app/app.ico');

/**
 * Caption
 */

$caption = new Label ($form);

$caption->caption = 'Empathy Framework';
$caption->font = ['Segoe UI Bold', 32];

$caption->location = [320, 96];
$caption->autoSize = true;

/**
 * Versions
 */

# Engine version caption
$engine_version_caption = new Label ($form);

$engine_version_caption->caption = 'Engine version: ';
$engine_version_caption->font = ['Segoe UI Light', 18];

$engine_version_caption->bounds = [324, $caption->top + $caption->height + 16, 172, 32];
$engine_version_caption->textAlign = alMiddleRight;

# Engine version value
$engine_version_value = new Label ($form);

$engine_version_value->caption = \Composer\InstalledVersions::getPrettyVersion ('empathy-php/engine');
$engine_version_value->font = ['Segoe UI', 18];
$engine_version_value->foregroundColor = clDarkOrange;

$engine_version_value->bounds = [$engine_version_caption->left + $engine_version_caption->width, $engine_version_caption->top + 2, 192, 32];

# Core version caption
$core_version_caption = new Label ($form);

$core_version_caption->caption = 'Core version: ';
$core_version_caption->font = ['Segoe UI Light', 18];

$core_version_caption->bounds = [324, $engine_version_caption->top + $engine_version_caption->height + 8, 172, 32];
$core_version_caption->textAlign = alMiddleRight;

# Core version value
$core_version_value = new Label ($form);

$core_version_value->caption = \Composer\InstalledVersions::getPrettyVersion ('empathy-php/core');
$core_version_value->font = ['Segoe UI', 18];
$core_version_value->foregroundColor = clDarkOrange;

$core_version_value->bounds = [$core_version_caption->left + $core_version_caption->width, $core_version_caption->top + 2, 192, 32];

# PHP version caption
$php_version_caption = new Label ($form);

$php_version_caption->caption = 'PHP version: ';
$php_version_caption->font = ['Segoe UI Light', 18];

$php_version_caption->bounds = [324, $core_version_caption->top + $core_version_caption->height + 8, 172, 32];
$php_version_caption->textAlign = alMiddleRight;

# PHP version value
$php_version_value = new Label ($form);

$php_version_value->caption = PHP_VERSION;
$php_version_value->font = ['Segoe UI', 18];
$php_version_value->foregroundColor = clDarkOrange;

$php_version_value->bounds = [$php_version_caption->left + $php_version_caption->width, $php_version_caption->top + 2, 192, 32];

/**
 * Loaded extensions
 */

$extensions = new Label ($form);

$extensions->caption = 'Loaded extensions: '. join (', ', get_loaded_extensions ());
$extensions->font = ['Segoe UI Light', 16];

$extensions->bounds = [64, $php_version_value->top + $php_version_value->height + 64, 772, 128];

/**
 * Show application form
 */
$form->showDialog ();
