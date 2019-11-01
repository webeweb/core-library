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
 * Per reference montant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPerReferenceMontantTrait {

    /**
     * Per reference montant.
     *
     * @var float
     */
    private $perReferenceMontant;

    /**
     * Get the per reference montant.
     *
     * @return float Returns the per reference montant.
     */
    public function getPerReferenceMontant() {
        return $this->perReferenceMontant;
    }

    /**
     * Set the per reference montant.
     *
     * @param float $perReferenceMontant The per reference montant.
     */
    public function setPerReferenceMontant($perReferenceMontant) {
        $this->perReferenceMontant = $perReferenceMontant;
        return $this;
    }
}
