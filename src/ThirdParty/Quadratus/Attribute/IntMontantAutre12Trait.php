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
 * Montant autre12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontantAutre12Trait {

    /**
     * Montant autre12.
     *
     * @var int
     */
    private $montantAutre12;

    /**
     * Get the montant autre12.
     *
     * @return int Returns the montant autre12.
     */
    public function getMontantAutre12() {
        return $this->montantAutre12;
    }

    /**
     * Set the montant autre12.
     *
     * @param int $montantAutre12 The montant autre12.
     */
    public function setMontantAutre12($montantAutre12) {
        $this->montantAutre12 = $montantAutre12;
        return $this;
    }
}
