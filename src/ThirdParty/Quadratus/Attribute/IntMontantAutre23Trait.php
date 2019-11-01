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
 * Montant autre23 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontantAutre23Trait {

    /**
     * Montant autre23.
     *
     * @var int
     */
    private $montantAutre23;

    /**
     * Get the montant autre23.
     *
     * @return int Returns the montant autre23.
     */
    public function getMontantAutre23() {
        return $this->montantAutre23;
    }

    /**
     * Set the montant autre23.
     *
     * @param int $montantAutre23 The montant autre23.
     */
    public function setMontantAutre23($montantAutre23) {
        $this->montantAutre23 = $montantAutre23;
        return $this;
    }
}
