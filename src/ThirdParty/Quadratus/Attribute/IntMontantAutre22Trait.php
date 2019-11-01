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
 * Montant autre22 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontantAutre22Trait {

    /**
     * Montant autre22.
     *
     * @var int
     */
    private $montantAutre22;

    /**
     * Get the montant autre22.
     *
     * @return int Returns the montant autre22.
     */
    public function getMontantAutre22() {
        return $this->montantAutre22;
    }

    /**
     * Set the montant autre22.
     *
     * @param int $montantAutre22 The montant autre22.
     */
    public function setMontantAutre22($montantAutre22) {
        $this->montantAutre22 = $montantAutre22;
        return $this;
    }
}
