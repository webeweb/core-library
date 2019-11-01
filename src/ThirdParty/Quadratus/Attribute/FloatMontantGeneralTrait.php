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
 * Montant general trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantGeneralTrait {

    /**
     * Montant general.
     *
     * @var float
     */
    private $montantGeneral;

    /**
     * Get the montant general.
     *
     * @return float Returns the montant general.
     */
    public function getMontantGeneral() {
        return $this->montantGeneral;
    }

    /**
     * Set the montant general.
     *
     * @param float $montantGeneral The montant general.
     */
    public function setMontantGeneral($montantGeneral) {
        $this->montantGeneral = $montantGeneral;
        return $this;
    }
}
