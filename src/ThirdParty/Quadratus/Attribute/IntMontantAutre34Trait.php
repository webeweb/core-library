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
 * Montant autre34 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontantAutre34Trait {

    /**
     * Montant autre34.
     *
     * @var int
     */
    private $montantAutre34;

    /**
     * Get the montant autre34.
     *
     * @return int Returns the montant autre34.
     */
    public function getMontantAutre34() {
        return $this->montantAutre34;
    }

    /**
     * Set the montant autre34.
     *
     * @param int $montantAutre34 The montant autre34.
     */
    public function setMontantAutre34($montantAutre34) {
        $this->montantAutre34 = $montantAutre34;
        return $this;
    }
}
