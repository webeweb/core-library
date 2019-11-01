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
 * Montant autre32 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontantAutre32Trait {

    /**
     * Montant autre32.
     *
     * @var int
     */
    private $montantAutre32;

    /**
     * Get the montant autre32.
     *
     * @return int Returns the montant autre32.
     */
    public function getMontantAutre32() {
        return $this->montantAutre32;
    }

    /**
     * Set the montant autre32.
     *
     * @param int $montantAutre32 The montant autre32.
     */
    public function setMontantAutre32($montantAutre32) {
        $this->montantAutre32 = $montantAutre32;
        return $this;
    }
}
