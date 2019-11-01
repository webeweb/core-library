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
 * Montant autre24 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontantAutre24Trait {

    /**
     * Montant autre24.
     *
     * @var int
     */
    private $montantAutre24;

    /**
     * Get the montant autre24.
     *
     * @return int Returns the montant autre24.
     */
    public function getMontantAutre24() {
        return $this->montantAutre24;
    }

    /**
     * Set the montant autre24.
     *
     * @param int $montantAutre24 The montant autre24.
     */
    public function setMontantAutre24($montantAutre24) {
        $this->montantAutre24 = $montantAutre24;
        return $this;
    }
}
