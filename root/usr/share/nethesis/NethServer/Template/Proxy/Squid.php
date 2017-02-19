<?php

echo '<br/><a href="/diladele" target="_blank" >Open Diladele management</a>';

echo $view->fieldsetSwitch('status', 'enabled',  $view::FIELDSETSWITCH_CHECKBOX)
        ->setAttribute('template', $T('Squid_status'))
        ->setAttribute('uncheckedValue', 'disabled')
        ->insert($green_modes)
        ->insert($blue_modes)
        ->insert($view->checkbox('PortBlock', 'enabled')->setAttribute('uncheckedValue', 'disabled'));

echo $view->buttonList($view::BUTTON_SUBMIT | $view::BUTTON_HELP);
