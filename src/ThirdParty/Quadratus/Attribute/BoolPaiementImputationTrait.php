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
 * Paiement imputation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPaiementImputationTrait {

    /**
     * Paiement imputation.
     *
     * @var bool
     */
    private $paiementImputation;

    /**
     * Get the paiement imputation.
     *
     * @return bool Returns the paiement imputation.
     */
    public function getPaiementImputation() {
        return $this->paiementImputation;
    }

    /**
     * Set the paiement imputation.
     *
     * @param bool $paiementImputation The paiement imputation.
     */
    public function setPaiementImputation($paiementImputation) {
        $this->paiementImputation = $paiementImputation;
        return $this;
    }
}
