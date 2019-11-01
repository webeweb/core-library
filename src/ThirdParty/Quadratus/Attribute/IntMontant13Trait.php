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
 * Montant13 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontant13Trait {

    /**
     * Montant13.
     *
     * @var int
     */
    private $montant13;

    /**
     * Get the montant13.
     *
     * @return int Returns the montant13.
     */
    public function getMontant13() {
        return $this->montant13;
    }

    /**
     * Set the montant13.
     *
     * @param int $montant13 The montant13.
     */
    public function setMontant13($montant13) {
        $this->montant13 = $montant13;
        return $this;
    }
}
