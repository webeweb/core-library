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
 * Montant autre11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMontantAutre11Trait {

    /**
     * Montant autre11.
     *
     * @var int
     */
    private $montantAutre11;

    /**
     * Get the montant autre11.
     *
     * @return int Returns the montant autre11.
     */
    public function getMontantAutre11() {
        return $this->montantAutre11;
    }

    /**
     * Set the montant autre11.
     *
     * @param int $montantAutre11 The montant autre11.
     */
    public function setMontantAutre11($montantAutre11) {
        $this->montantAutre11 = $montantAutre11;
        return $this;
    }
}
