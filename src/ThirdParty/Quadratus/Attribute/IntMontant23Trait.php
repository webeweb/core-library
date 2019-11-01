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
 * Montant23 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontant23Trait {

    /**
     * Montant23.
     *
     * @var int
     */
    private $montant23;

    /**
     * Get the montant23.
     *
     * @return int Returns the montant23.
     */
    public function getMontant23() {
        return $this->montant23;
    }

    /**
     * Set the montant23.
     *
     * @param int $montant23 The montant23.
     */
    public function setMontant23($montant23) {
        $this->montant23 = $montant23;
        return $this;
    }
}
