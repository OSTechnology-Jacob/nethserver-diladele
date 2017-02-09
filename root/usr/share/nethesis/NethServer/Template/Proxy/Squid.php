<?php

$green_modes = $view->fieldset('GreenMode')->setAttribute('template', $T('GreenMode_label'))
            ->insert($view->radioButton('GreenMode', 'manual'))
            ->insert($view->radioButton('GreenMode', 'authenticated'))
            ->insert($view->radioButton('GreenMode', 'transparent'))
            ->insert($view->radioButton('GreenMode', 'transparent_ssl'));

$blue_modes = $view->fieldset('BlueMode')->setAttribute('template', $T('BlueMode_label'))
            ->insert($view->radioButton('BlueMode', 'manual'))
            ->insert($view->radioButton('BlueMode', 'authenticated'))
            ->insert($view->radioButton('BlueMode', 'transparent'))
            ->insert($view->radioButton('BlueMode', 'transparent_ssl'));


echo $view->fieldsetSwitch('status', 'enabled',  $view::FIELDSETSWITCH_CHECKBOX)
        ->setAttribute('template', $T('Squid_status'))
        ->setAttribute('uncheckedValue', 'disabled')
        ->insert($green_modes)
        ->insert($blue_modes)
        ->insert($view->checkbox('PortBlock', 'enabled')->setAttribute('uncheckedValue', 'disabled'));

echo $view->buttonList($view::BUTTON_SUBMIT | $view::BUTTON_HELP);
