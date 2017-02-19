<?php

echo $view->fieldsetSwitch('status', 'enabled',  $view::FIELDSETSWITCH_CHECKBOX)
        ->setAttribute('template', $T('Squid_status'))
        ->setAttribute('uncheckedValue', 'disabled')
        ->insert($view->checkbox('PortBlock', 'enabled')->setAttribute('uncheckedValue', 'disabled'));

echo $view->buttonList($view::BUTTON_SUBMIT | $view::BUTTON_HELP);

echo '<br/><a href="/diladele" target="_blank" >Open Diladele management</a>';
