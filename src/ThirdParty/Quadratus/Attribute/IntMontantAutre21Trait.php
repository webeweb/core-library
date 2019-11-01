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
 * Montant autre21 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontantAutre21Trait {

    /**
     * Montant autre21.
     *
     * @var int
     */
    private $montantAutre21;

    /**
     * Get the montant autre21.
     *
     * @return int Returns the montant autre21.
     */
    public function getMontantAutre21() {
        return $this->montantAutre21;
    }

    /**
     * Set the montant autre21.
     *
     * @param int $montantAutre21 The montant autre21.
     */
    public function setMontantAutre21($montantAutre21) {
        $this->montantAutre21 = $montantAutre21;
        return $this;
    }
}
