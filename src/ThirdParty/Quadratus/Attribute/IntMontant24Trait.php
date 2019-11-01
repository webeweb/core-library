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
 * Montant24 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontant24Trait {

    /**
     * Montant24.
     *
     * @var int
     */
    private $montant24;

    /**
     * Get the montant24.
     *
     * @return int Returns the montant24.
     */
    public function getMontant24() {
        return $this->montant24;
    }

    /**
     * Set the montant24.
     *
     * @param int $montant24 The montant24.
     */
    public function setMontant24($montant24) {
        $this->montant24 = $montant24;
        return $this;
    }
}
