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
 * Montant autre14 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontantAutre14Trait {

    /**
     * Montant autre14.
     *
     * @var int
     */
    private $montantAutre14;

    /**
     * Get the montant autre14.
     *
     * @return int Returns the montant autre14.
     */
    public function getMontantAutre14() {
        return $this->montantAutre14;
    }

    /**
     * Set the montant autre14.
     *
     * @param int $montantAutre14 The montant autre14.
     */
    public function setMontantAutre14($montantAutre14) {
        $this->montantAutre14 = $montantAutre14;
        return $this;
    }
}
