<?php

$DiskCache_config = $view->panel()
    ->insert($view->radioButton('DiskCache', 'disabled')->setAttribute('label', $T('DiskCache_disabled_label')))
    ->insert($view->fieldsetSwitch('DiskCache', 'enabled', $view::FIELDSET_EXPANDABLE)->setAttribute('template', $T('Webvirt_label'))
        ->insert($view->textInput('DiskCacheSize')->setAttribute('label', $T('DiskCacheSize_label'))
        )
        ->insert($view->textInput('MinObjSize')->setAttribute('label', $T('MinObjSize_label'))
        )
        ->insert($view->textInput('MaxObjSize')->setAttribute('label', $T('MaxObjSize_label'))
        )
    )
    ->insert($view->buttonList($view::BUTTON_SUBMIT | $view::BUTTON_HELP)
        ->insert($view->button('Clear_cache', $view::BUTTON_SUBMIT)->setAttribute('label', $T('ClearCache_label')))
    );

echo $view->fieldset('', $view::FIELDSET_EXPANDABLE)->setAttribute('template', $T('DiskCache_label'))
    ->insert($DiskCache_config);

echo '<br>';

$URL_Rewrite_config = $view->fieldSetSwitch('URL_Rewrite', 'enabled', $view::FIELDSETSWITCH_CHECKBOX)
    ->setAttribute('template', $T('URL_Rewrite_label'))
    ->setAttribute('uncheckedValue', 'disabled')
    ->insert($view->textInput('URL_Rewrite_Config')->setAttribute('placeholder', 'Test'))
    ->insert($view->buttonList($view::BUTTON_SUBMIT | $view::BUTTON_HELP));

echo $view->fieldset('', $view::FIELDSET_EXPANDABLE)->setAttribute('template', $T('URL_Rewrite_label'))
    ->insert($URL_Rewrite_config);
    
