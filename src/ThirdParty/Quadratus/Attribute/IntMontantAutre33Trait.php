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
 * Montant autre33 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontantAutre33Trait {

    /**
     * Montant autre33.
     *
     * @var int
     */
    private $montantAutre33;

    /**
     * Get the montant autre33.
     *
     * @return int Returns the montant autre33.
     */
    public function getMontantAutre33() {
        return $this->montantAutre33;
    }

    /**
     * Set the montant autre33.
     *
     * @param int $montantAutre33 The montant autre33.
     */
    public function setMontantAutre33($montantAutre33) {
        $this->montantAutre33 = $montantAutre33;
        return $this;
    }
}
