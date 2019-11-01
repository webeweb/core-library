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
 * Montant22 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontant22Trait {

    /**
     * Montant22.
     *
     * @var int
     */
    private $montant22;

    /**
     * Get the montant22.
     *
     * @return int Returns the montant22.
     */
    public function getMontant22() {
        return $this->montant22;
    }

    /**
     * Set the montant22.
     *
     * @param int $montant22 The montant22.
     */
    public function setMontant22($montant22) {
        $this->montant22 = $montant22;
        return $this;
    }
}
