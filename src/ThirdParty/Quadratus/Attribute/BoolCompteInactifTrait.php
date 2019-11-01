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
 * Compte inactif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCompteInactifTrait {

    /**
     * Compte inactif.
     *
     * @var bool
     */
    private $compteInactif;

    /**
     * Get the compte inactif.
     *
     * @return bool Returns the compte inactif.
     */
    public function getCompteInactif() {
        return $this->compteInactif;
    }

    /**
     * Set the compte inactif.
     *
     * @param bool $compteInactif The compte inactif.
     */
    public function setCompteInactif($compteInactif) {
        $this->compteInactif = $compteInactif;
        return $this;
    }
}
