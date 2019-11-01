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
 * Remise1en montant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRemise1enMontantTrait {

    /**
     * Remise1en montant.
     *
     * @var bool
     */
    private $remise1enMontant;

    /**
     * Get the remise1en montant.
     *
     * @return bool Returns the remise1en montant.
     */
    public function getRemise1enMontant() {
        return $this->remise1enMontant;
    }

    /**
     * Set the remise1en montant.
     *
     * @param bool $remise1enMontant The remise1en montant.
     */
    public function setRemise1enMontant($remise1enMontant) {
        $this->remise1enMontant = $remise1enMontant;
        return $this;
    }
}
