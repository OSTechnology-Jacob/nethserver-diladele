<?php
namespace NethServer\Module\Proxy;

/*
 * Copyright (C) 2013 Nethesis S.r.l.
 *
 * This script is part of NethServer.
 *
 * NethServer is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * NethServer is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with NethServer.  If not, see <http://www.gnu.org/licenses/>.
 */

use Nethgui\System\PlatformInterface as Validate;

/**
 * Configure squid behaviour
 *
 * @author Edoardo Spadoni
 */
class Config extends \Nethgui\Controller\AbstractController
{

    public $sortId = 40;

    protected function initializeAttributes(\Nethgui\Module\ModuleAttributesInterface $base)
    {
        return \Nethgui\Module\SimpleModuleAttributesProvider::extendModuleAttributes($base, 'Configuration', 80);
    }

    // Declare all parameters
    public function initialize()
    {
        parent::initialize();

        $this->declareParameter('DiskCache', Validate::SERVICESTATUS, array('configuration', 'squid', 'DiskCache'));
        $this->declareParameter('DiskCacheSize', Validate::NONNEGATIVE_INTEGER, array('configuration', 'squid', 'DiskCacheSize'));
        $this->declareParameter('MinObjSize', Validate::NONNEGATIVE_INTEGER, array('configuration', 'squid', 'MinObjSize'));
        $this->declareParameter('MaxObjSize', Validate::NONNEGATIVE_INTEGER, array('configuration', 'squid', 'MaxObjSize'));
        $this->declareParameter('URLRewriteConfig', Validate::ANYTHING, array('configuration', 'squid', 'URLRewriteConfig'));
        $this->declareParameter('ICAPServerConfig', Validate::ANYTHING, array('configuration', 'squid', 'ICAPServerConfig'));
    }

    public function process()
    {
        parent::process();

        if ($this->getRequest()->hasParameter('Clear_cache')) {
            // Signal nethserver-squid-clear-cache
            $this->getPlatform()->signalEvent('nethserver-squid-clear-cache &');
        }
    }

    protected function onParametersSaved($changes)
    {
        $this->getPlatform()->signalEvent('nethserver-squid-save &');
    }
}
