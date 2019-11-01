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
 * Gestion maj nuit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGestionMajNuitTrait {

    /**
     * Gestion maj nuit.
     *
     * @var string
     */
    private $gestionMajNuit;

    /**
     * Get the gestion maj nuit.
     *
     * @return string Returns the gestion maj nuit.
     */
    public function getGestionMajNuit() {
        return $this->gestionMajNuit;
    }

    /**
     * Set the gestion maj nuit.
     *
     * @param string $gestionMajNuit The gestion maj nuit.
     */
    public function setGestionMajNuit($gestionMajNuit) {
        $this->gestionMajNuit = $gestionMajNuit;
        return $this;
    }
}
