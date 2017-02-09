<?php

$DiskCache_config = $view->panel()
    ->insert($view->buttonList($view::BUTTON_SUBMIT | $view::BUTTON_HELP)
        ->insert($view->button('Clear_cache', $view::BUTTON_SUBMIT)->setAttribute('label', $T('ClearCache_label')))
    );

echo $view->fieldset('', $view::FIELDSET_EXPANDABLE)->setAttribute('template', $T('DiskCache_label'))
    ->insert($DiskCache_config);

echo '<br>';

/* Disabled whilst under development
$URLRewrite_config = $view->fieldSetSwitch('URLRewrite_Config', 'enabled', $view::FIELDSETSWITCH_CHECKBOX)
    ->setAttribute('template', $T('URLRewrite_label'))
    ->setAttribute('uncheckedValue', 'disabled')
    ->insert($view->textInput('URLRewriteConfig')->setAttribute('placeholder', 'url_rewrite_program /usr/sbin/ufdbgclient -l /var/log/squid
url_rewrite_children 20 startup=5 idle=5 concurrency=0
url_rewrite_extras "%>a/%>A %un %>rm bump_mode=%ssl::bump_mode sni=\"%ssl::>sni\" referer=\"%{Referer}>h\""'))
    ->insert($view->buttonList($view::BUTTON_SUBMIT | $view::BUTTON_HELP));

echo $view->fieldset('', $view::FIELDSET_EXPANDABLE)->setAttribute('template', $T('URLRewrite_label'))
    ->insert($URLRewrite_config);

echo '<br/>';

$ICAPServer_config = $view->fieldSetSwitch('ICAPServer_Config', 'enabled', $view::FIELDSETSWITCH_CHECKBOX)
    ->setAttribute('template', $T('ICAPServer_label'))
    ->setAttribute('uncheckedValue', 'disabled')
    ->insert($view->textInput('ICAPServerConfig')->setAttribute('placeholder', 'Test'))
    ->insert($view->buttonList($view::BUTTON_SUBMIT | $view::BUTTON_HELP));

echo $view->fieldset('', $view::FIELDSET_EXPANDABLE)->setAttribute('template', $T('ICAPServer_label'))
    ->insert($ICAPServer_config);
*/
