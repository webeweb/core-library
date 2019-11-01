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
 * Montant33 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontant33Trait {

    /**
     * Montant33.
     *
     * @var int
     */
    private $montant33;

    /**
     * Get the montant33.
     *
     * @return int Returns the montant33.
     */
    public function getMontant33() {
        return $this->montant33;
    }

    /**
     * Set the montant33.
     *
     * @param int $montant33 The montant33.
     */
    public function setMontant33($montant33) {
        $this->montant33 = $montant33;
        return $this;
    }
}
