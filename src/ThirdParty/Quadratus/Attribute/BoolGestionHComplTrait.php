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
 * Gestion h compl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionHComplTrait {

    /**
     * Gestion h compl.
     *
     * @var bool
     */
    private $gestionHCompl;

    /**
     * Get the gestion h compl.
     *
     * @return bool Returns the gestion h compl.
     */
    public function getGestionHCompl() {
        return $this->gestionHCompl;
    }

    /**
     * Set the gestion h compl.
     *
     * @param bool $gestionHCompl The gestion h compl.
     */
    public function setGestionHCompl($gestionHCompl) {
        $this->gestionHCompl = $gestionHCompl;
        return $this;
    }
}
