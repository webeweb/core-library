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
 * Montant12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontant12Trait {

    /**
     * Montant12.
     *
     * @var int
     */
    private $montant12;

    /**
     * Get the montant12.
     *
     * @return int Returns the montant12.
     */
    public function getMontant12() {
        return $this->montant12;
    }

    /**
     * Set the montant12.
     *
     * @param int $montant12 The montant12.
     */
    public function setMontant12($montant12) {
        $this->montant12 = $montant12;
        return $this;
    }
}
