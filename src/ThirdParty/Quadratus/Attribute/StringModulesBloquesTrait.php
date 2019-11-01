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
 * Modules bloques trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModulesBloquesTrait {

    /**
     * Modules bloques.
     *
     * @var string
     */
    private $modulesBloques;

    /**
     * Get the modules bloques.
     *
     * @return string Returns the modules bloques.
     */
    public function getModulesBloques() {
        return $this->modulesBloques;
    }

    /**
     * Set the modules bloques.
     *
     * @param string $modulesBloques The modules bloques.
     */
    public function setModulesBloques($modulesBloques) {
        $this->modulesBloques = $modulesBloques;
        return $this;
    }
}
