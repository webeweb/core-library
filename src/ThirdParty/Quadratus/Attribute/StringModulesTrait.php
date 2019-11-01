<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Modules trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModulesTrait {

    /**
     * Modules.
     *
     * @var string
     */
    private $modules;

    /**
     * Get the modules.
     *
     * @return string Returns the modules.
     */
    public function getModules() {
        return $this->modules;
    }

    /**
     * Set the modules.
     *
     * @param string $modules The modules.
     */
    public function setModules($modules) {
        $this->modules = $modules;
        return $this;
    }
}
