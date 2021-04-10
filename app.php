<?php

/**
 * Empathy Framework application entrance
 * 
 * @license GPL-3.0
 * @see https://github.com/empathy-framework
 */

require 'vendor/autoload.php';

use function Empathy\Engine\Others\pre;

use Empathy\Engine\Components\{
    Form,
    Button
};

$form   = new Form;
$button = new Button ($form);

$form->caption = 'Example app';

$button->text = 'Click me!';
$button->bounds = [16, 16, 96, 32];

$button->on ('click', function ()
{
    pre ('Hello, World!');
});

$form->showDialog ();
