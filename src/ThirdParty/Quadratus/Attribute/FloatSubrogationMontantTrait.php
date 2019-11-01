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
 * Subrogation montant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSubrogationMontantTrait {

    /**
     * Subrogation montant.
     *
     * @var float
     */
    private $subrogationMontant;

    /**
     * Get the subrogation montant.
     *
     * @return float Returns the subrogation montant.
     */
    public function getSubrogationMontant() {
        return $this->subrogationMontant;
    }

    /**
     * Set the subrogation montant.
     *
     * @param float $subrogationMontant The subrogation montant.
     */
    public function setSubrogationMontant($subrogationMontant) {
        $this->subrogationMontant = $subrogationMontant;
        return $this;
    }
}
